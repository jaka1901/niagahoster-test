<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    protected $appends = ['data_parsed','link','price_parsed'];

    public function getDataParsedAttribute(){
        return json_decode($this->data, true);
    }
    public function getLinkAttribute(){
        $name = strtolower($this->name);
        return str_replace(" ", "-", $name);
    }
    public function getPriceParsedAttribute()
    {
        $data = $this->getDataParsedAttribute()['price'];

        if($data['price'] != null){
            $big = substr($data['price'], 0, strlen($data['price']) - 4);
            $small = substr($data['price'],-4);
            return [
                'after' => [$big,$small]
            ];
        }
        if(!in_array(null, [$data['price_before'], $data['price_after']])){
            $big = substr($data['price_after'], 0, strlen($data['price_after']) - 4);
            $small = substr($data['price_after'],-4);
            return [
                'before' => $data['price_before'],
                'after' => [$big,$small]
            ];
        }
    }
}
