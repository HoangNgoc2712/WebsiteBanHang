<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\thongsokythuat;



use \Datetime;
class apithongsokythuatcontroller extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return thongsokythuat::all();
        return thongsokythuat:: with ('spham') ->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $db = new thongsokythuat();
        $db->id_sanpham = $request->id_sanpham;
        $db->he_dieu_hanh = $request->he_dieu_hanh;
        $db->cpu =$request->cpu;
        $db->ram =$request->ram;
        $db->bo_nho = $request->bo_nho;
        $db->man_hinh = $request->man_hinh;
        $db->pin = $request->pin;
        $db->trong_luong = $request->trong_luong;
        $db->created_at = new Datetime();
        $db->save();
        return $db;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return thongsokythuat::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $db = thongsokythuat::find($id);
        $db->id_sanpham = $request->id_sanpham;
        $db->he_dieu_hanh = $request->he_dieu_hanh;
        $db->cpu =$request->cpu;
        $db->ram =$request->ram;
        $db->bo_nho = $request->bo_nho;
        $db->man_hinh = $request->man_hinh;
        $db->pin = $request->pin;
        $db->trong_luong = $request->trong_luong;
        $db->updated_at = new Datetime();
        $db->save();
        return $db;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        thongsokythuat::findOrFail($id)->delete();
        return "Deleted";
    }
}