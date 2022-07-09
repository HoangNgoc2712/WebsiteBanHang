<?php

namespace App\Http\Controllers\api;
session_start();

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\sanpham;
use App\Models\nhacungcap;
use App\Models\dongsanpham;
use App\Models\thongsokythuat;
use App\Models\cart;
use Illuminate\Support\Facades\DB;


use \Datetime;
class apisanphamcontroller extends Controller
{

    public function getcart(){
      return $_SESSION['cart'];
    }

    public function addcart($id){
        $dataCart= cart::findOrFail($id);
        $pro_id=$dataCart->id;
        $pro_name=$dataCart->ten_sp;
        $pro_price=$dataCart->gia;
        if (isset($_SESSION['cart'][$pro_id])){
            foreach($_SESSION['cart'] as $key=>$value){
                if ($_SESSION['cart'][$key]['id']==$pro_id){
                    $_SESSION['cart'][$key]['soluong']=$_SESSION['cart'][$key]['soluong']+1;
                    $_SESSION['cart'][$key]['totalPrice']=$_SESSION['cart'][$key]['totalPrice']+$pro_price;
                }
                
            }
        }
        else{
            $item_array=array(
                'id'=>$pro_id,
                'name'=> $pro_name,
                'soluong'=>'1',
                'totalPrice'=>$pro_price

            );
            $_SESSION['cart'][$pro_id]=$item_array;
        }

    }

    public function getSPDong($id){
        $sp_dong=sanpham::where('ma_dong', $id)->get();
        return $sp_dong;
    }
    public function LayTSKT($id)
    {
       
        return DB:: select ("CALL ThongSoKT($id)");
    }
    public function listSPMoi()
    {
       
        return DB::select("CALL SANPHAMMOI()");
    }
    public function listSPBanChay()
    {
       
        return DB::select("CALL SANPHAMBANCHAY()");
    }
    public function listSPTheoTH($id)
    {
       
        return DB::select("CALL DSSPTheoTH(?)", [$id]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return sanpham::all();
        return sanpham:: with ('dongsp','nhacc') ->get();
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
        $db = new sanpham();
        $db->ten_sp = $request->ten_sp;
        $db->ma_dong =$request->ma_dong;
        $db->ma_ncc =$request->ma_ncc;
        $db->gia = $request->gia;
        $db->anh = $request->anh;
        $db->anhnho1 = $request->anhnho1;
        $db->anhnho2 = $request->anhnho2;
        $db->mo_ta = $request->mo_ta;
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
        return sanpham::findOrFail($id);
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
        $db = sanpham::find($id);
        $db->ten_sp = $request->ten_sp;
        $db->ma_dong =$request->ma_dong;
        $db->ma_ncc =$request->ma_ncc;
        $db->gia = $request->gia;
        $db->anh = $request->anh;
        $db->anhnho1 = $request->anhnho1;
        $db->anhnho2 = $request->anhnho2;
        $db->mo_ta = $request->mo_ta;
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
        sanpham::findOrFail($id)->delete();
        
        return "Deleted";
    }
}