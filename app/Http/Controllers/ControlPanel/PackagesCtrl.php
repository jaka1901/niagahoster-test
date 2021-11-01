<?php

namespace App\Http\Controllers\ControlPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// models
use App\Models\Packages;

class PackagesCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function best_seller(Request $request){
        $data = Packages::find($request->id);
        $data->best_seller = $data->best_seller == 1 ? 0 : 1;
        $data->save();

        return redirect()->route('control-panel.packages.index');
    }

    public function change_status(Request $request){
        $data = Packages::find($request->id);
        $data->status = $data->status == 1 ? 0 : 1;
        $data->save();

        return redirect()->route('control-panel.packages.index');
    }

    public function index()
    {
        $data = Packages::paginate(12);
        return view('control-panel/page/packages/index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('control-panel/page/packages/form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $content = strip_tags($request->content, '<ul><li><strong>');
        $price = [
            'price' => $request->price,
            'price_before' => $request->price_before,
            'price_after' => $request->price_after
        ];

        $data = [
            'content' => $content,
            'price'   => $price
        ];
        $data = json_encode($data);

        $save = new Packages;
        $save->name = $request->name;
        $save->data = $data;
        $save->save();

        return redirect()->route('control-panel.packages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Packages::find($id);
        return view('control-panel/page/packages/form', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $content = strip_tags($request->content, '<ul><li><strong>');
        $price = [
            'price' => $request->price,
            'price_before' => $request->price_before,
            'price_after' => $request->price_after
        ];

        $data = [
            'content' => $content,
            'price'   => $price
        ];
        $data = json_encode($data);

        $save = Packages::find($id);
        $save->name = $request->name;
        $save->data = $data;
        $save->save();

        return redirect()->route('control-panel.packages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Packages::find($id)->delete();
        return redirect()->route('control-panel.packages.index');
    }
}
