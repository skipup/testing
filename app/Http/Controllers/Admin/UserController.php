<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        try{
            $brands = User::orderBy('id','DESC')->paginate(20);
            return view('admin.user.index',compact('brands'));
        }catch(\Exception $e){
            return redirect()->back('error','Something Went Wrong!');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $v = Validator::make(request()->all(),[
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);
        if($v->fails()){
            return redirect()->back()->withErrors($v->errors());
        }
        try{
            $b = new User();
            $b->name = request()->name;
            $b->email = request()->email;
            $b->password =bcrypt(request()->password);
            $b->real_password = request()->password;
            $b->role = request()->role;
            $b->save();
            return redirect()->back()->with('success',' Created Successfully!');
        }catch(\Exception $e){
            return redirect()->back()->with('error','Something Went Wrong!'.$e->getMessage());
        }
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
        try{
            $brand = User::find($id);
            return view('admin.user.update',compact('brand'));
        }catch(\Exception $e){
            return redirect()->back()->with('error','Some Wrong');
        }
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
        try{
            $b = User::find($id);
            $v = Validator::make(request()->all(),[
                'name'=>'required',
                'email'=>'required',
                'password'=>'required'
            ]);
            if($v->fails()){
                return redirect()->back()->withErrors($v->errors());
            }

            $b->name = request()->name;
            $b->email = request()->email;
            $b->password =bcrypt(request()->password);
            $b->real_password =request()->password;
            $b->role = request()->role;
            $b->save();
            return redirect()->back()->with('success','Updated Successfully!');
        }catch(\Exception $e){
            return redirect()->back()->with('error','Something Went Wrong!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $brand = User::find($id);
            $brand->delete();
            return redirect()->back()->with('success','Deleted Success');
        }catch(\Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
    }
}
