<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\khachhang;

class apilogincontroller extends Controller
{

    public function getsignup(){
        return view('sign_up');
    }
   public function postsignup(Request $req)
    {
      $this->validate($req,
          [
              'email'=>'required|email|unique:users,email',
              'password'=>'required|min:6|max:20',
              'users_name'=>'required',
              're_password'=>'required|same:password'

          ],
          [    
          'email.required'=>'Vui lòng nhập eamil',
          'email.email'=>'Không đúng định dạng email',
          'email.unique'=>'Email đã có người sử dụng',
          'password.required'=>'Vui lòng nhập mật khẩu',
          're_password.same'=>'Mật khẩu không trùng khớp',
          'password.min'=>'Mật khẩu ít nhất 6 kí tự',
          'password.max'=>'Mật khẩu không quá 20 kí tự'
          ]
        );
        $db =new khachhang();
        $db->ten_kh=$req->ten_kh;
        $db->users_name=$req->users_name;
        $db->email=$req->email;
        $db->password=Hash::make($req->password);
        $db->sdt=$req->sdt;
        $db->dia_chi=$req->dia_chi;
        $db->save();
        /* $input=$req->all();
        $input['password']=bcrypt($input['password']);
        $users=users::getsignup($input); */
        return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');

        
    }
    public function getlogin(){
        return view('login');
    }
    public function postlogin(Request $req)
    {
      $this->validate($req,
          [
              'email'=>'required|email',
              'password'=>'required|min:6|max:20'
              

          ],
          [    
          'email.required'=>'Vui lòng nhập eamil',
          'email.email'=>'Không đúng định dạng email',
          'email.unique'=>'Email đã có người sử dụng',
          'password.required'=>'Vui lòng nhập mật khẩu',
          'password.max'=>'Mật khẩu không quá 20 kí tự',
          'password.min'=>'Mật khẩu ít nhất 6 kí tự'

          ]
        );
       $credentials=array('email'=>$req->email,'password'=>$req->password);
       if(Auth::attempt($credentials)){
           return redirect()->back()->with(['flag'=>'success','message'=>'Đăng nhập thành công']);
       }
       else{
        return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
       }
       

        
    }
    public function getlogout(){
        Auth::logout();
        return redirect('/trangchu');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
