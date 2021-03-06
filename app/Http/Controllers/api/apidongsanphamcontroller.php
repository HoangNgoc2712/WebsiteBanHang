<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\dongsanpham;
use Illuminate\Support\Facades\DB;

use \Datetime;

class apidongsanphamcontroller extends Controller
{
    public function listSPTheoDong($id)
    {
       
        return DB:: select ("CALL DSSPTheoDong(?)", [$id]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return dongsanpham::all();
        return dongsanpham:: with ('thhieu') ->get();


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $db = new dongsanpham();
        $db->ten_dong= $request->ten_dong;
        $db->ma_thuong_hieu= $request->ma_thuong_hieu;
        $db->ma_loai= 1;
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
        return dongsanpham::findOrFail($id);

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
        $db = dongsanpham::find($id);
        $db->ten_dong= $request->ten_dong;
        $db->ma_thuong_hieu= $request->ma_thuong_hieu;
        // $db->ma_loai= $request->ma_loai;
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
        dongsanpham::findOrFail($id)->delete();
        return "Deleted";
    }
}
