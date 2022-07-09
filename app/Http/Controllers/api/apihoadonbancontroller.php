<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\hoadonban;
use App\Models\cthdban;
use Illuminate\Support\Facades\DB;

use \Datetime;
class apihoadonbancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function LayCTHDBan($id)
    {
       
        return DB:: select ("CALL XemChiTietHDBan($id)");
    }
    public function index()
    {
        //return hoadonban::all();
        return hoadonban:: with ('khach') ->get();
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
        $db = new hoadonban();
        $db->ma_kh =$request->ma_kh;
        $db->ten_nguoinhan =$request->ten_nguoinhan;
        $db->sdt_nhan =$request->sdt_nhan;
        $db->diachi_nhan =$request->diachi_nhan;
        $db->ngay_ban = new Datetime();
        $db->tong_tien = $request->tong_tien;
        $db->hinh_thuc_thanh_toan = "on";
        $db->created_at = new Datetime();
        $db->save();

        $details = $request->details;
        foreach($details as $detail) {
            $item = new cthdban();
            $item->ma_hdb = $db->id;
            $item->ma_sp = $detail['id'];
            $item->don_gia = $detail['unit_price'];
            $item->so_luong = $detail['quantity'];
            $item->thanh_tien = $item->don_gia *  $item->so_luong;
            $item->save();
        }

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
        return hoadonban::findOrFail($id);
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
        $db = hoadonban::find($id);
        $db->ma_kh =$request->ma_kh;
        $db->ten_nguoinhan =$request->ten_nguoinhan;
        $db->sdt_nhan =$request->sdt_nhan;
        $db->diachi_nhan =$request->diachi_nhan;
        $db->ngay_ban = $request->ngay_ban;
        $db->tong_tien = $request->tong_tien;
        $db->hinh_thuc_thanh_toan = $request->hinh_thuc_thanh_toan;
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
        hoadonban::findOrFail($id)->delete();
        return "Deleted";
    }
}