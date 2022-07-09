<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\hoadonnhap;
use App\Models\cthdnhap;
use Illuminate\Support\Facades\DB;


use \Datetime;
class apihoadonnhapcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return hoadonnhap::all();
        return hoadonnhap:: with ('nhacc','nhvien') ->get();
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
    public function LayCTHDNhap($id)
    {
       
        return DB:: select ("CALL XemChiTietHDNhap($id)");
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $db = new hoadonnhap();
        $db->ma_nv =$request->ma_nv;
        $db->ma_ncc =$request->ma_ncc;
        $db->ngay_nhap = $request->ngay_nhap;
        $db->tong_tien = $request->tong_tien;
        $db->hinh_thuc_thanh_toan = "on";
        $db->note = $request->note;
        $db->created_at = new Datetime();
        $db->save();
        return $db;

    }

    public function ThemCTHD(Request $request)
    {
        $db = new cthdnhap();
        $db->ma_hdn =$request->ma_hdn;
        $db->ma_sp =$request->ma_sp;
        $db->so_luong =$request->so_luong;
        $db->don_gia = $request->don_gia;
        $db->thanh_tien =  $db->so_luong*$db->don_gia ;
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
        return hoadonnhap::findOrFail($id);
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
        $db = hoadonnhap::find($id);
        $db->ma_nv =$request->ma_nv;
        $db->ma_ncc =$request->ma_ncc;
        $db->ngay_nhap = $request->ngay_nhap;
        $db->tong_tien = $request->tong_tien;
        $db->hinh_thuc_thanh_toan = $request->hinh_thuc_thanh_toan;
        $db->note = $request->note;
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
        hoadonnhap::findOrFail($id)->delete();
        return "Deleted";
    }
}