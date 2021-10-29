<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    protected $appends = ['data_parsed'];

    public function getDataParsedAttribute(){
        return json_decode($this->data, true);
    }
}
