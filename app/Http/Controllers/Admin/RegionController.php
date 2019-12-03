<?php

namespace App\Http\Controllers\Admin;

use App\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $brands = Region::orderBy('id','DESC')->paginate(20);
            return view('admin.region.index',compact('brands'));
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
        return view('admin.region.add');
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
            'my_name'=>'required',
            'en_name'=>'required',
        ]);
        if($v->fails()){
            return redirect()->back()->withErrors($v->errors());
        }
        try{

            $b = new Region();
            $b->en_name = request()->en_name;
            $b->my_name = request()->my_name;
            $b->save();
            return redirect()->back()->with('success',' Region Created Successfully!');
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
            $brand = Region::find($id);
            return view('admin.region.update',compact('brand'));
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
            $brand = Region::find($id);
            $v = Validator::make(request()->all(),[
                'en_name'=>'required',
                'my_name'=>'required'
            ]);
            if($v->fails()){
                return redirect()->back()->withErrors($v->errors());
            }
            $brand->en_name = request()->en_name;
            $brand->my_name = request()->my_name;
            $brand->save();
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
            $brand = Region::find($id);
            $brand->delete();
            return redirect()->back()->with('success','Region Deleted Success');
        }catch(\Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
    }
}
