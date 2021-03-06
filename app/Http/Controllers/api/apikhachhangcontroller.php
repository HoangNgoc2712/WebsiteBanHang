<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\khachhang;
use \Datetime;
class apikhachhangcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return khachhang::all();
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
        $db = new khachhang();
        $db->ten_kh = $request->ten_kh;
        $db->email = $request->email;
        $db->dia_chi= $request->dia_chi;
        $db->sdt = $request->sdt;
        $db->users_name = $request->users_name;
        $db->password = $request->password;
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
        return khachhang::findOrFail($id);
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
        $db = khachhang::find($id);
        $db->ten_kh = $request->ten_kh;
        $db->email = $request->email;
        $db->dia_chi= $request->dia_chi;
        $db->sdt = $request->sdt;
        $db->users_name = $request->users_name;
        $db->password = $request->password;
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
        khachhang::findOrFail($id)->delete();
        return "Deleted";
    }
    public function show2($tk,$mk)
    {
        $db=khachhang::where("users_name","=","$tk")->where("password","=","$mk")->get();
        return $db[0];
    }
    public function show3($tk)
    {
        $db=khachhang::where("users_name","=","$tk")->get();
        return $db[0];
    }
}