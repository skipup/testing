<?php

namespace App\Http\Controllers\Admin\Ht;

use App\Ht\HtGroup;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class HtGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $brands = HtGroup::orderBy('id','DESC')->paginate(20);
            return view('admin.ht_group.index',compact('brands'));
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
        return view('admin.ht_group.add');
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        if($v->fails()){
            return redirect()->back()->withErrors($v->errors());
        }
        try{
            //image uplodad
            if(request()->file('image')){
                $image = request()->file('image');
                $image_name = time().'.'.$image->getClientOriginalName();
                $image_url = '/images/ht_group/'.$image_name;
                $destinationPath = public_path('/images/ht_group/');
                $image->move($destinationPath,$image_name);
            }else{
                return redirect()->back()->with('danger','Pleaes Choose Image');
            }

            //image uplodad
            if(request()->file('en_image')){
                $image = request()->file('en_image');
                $image_name = time().'.'.$image->getClientOriginalName();
                $en_image_url = '/images/ht_group/'.$image_name;
                $destinationPath = public_path('/images/ht_group/');
                $image->move($destinationPath,$image_name);
            }else{
                return redirect()->back()->with('danger','Pleaes Choose Image');
            }

            $b = new HtGroup();
            $b->en_title = request()->en_name;
            $b->my_title = request()->my_name;
            $b->image = $image_url;
            $b->en_image = $en_image_url;
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
            $brand = HtGroup::find($id);
            return view('admin.ht_group.update',compact('brand'));
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
            $brand = HtGroup::find($id);
            $v = Validator::make(request()->all(),[
                'en_name'=>'required',
                'my_name'=>'required'
            ]);
            if($v->fails()){
                return redirect()->back()->withErrors($v->errors());
            }
            if(request()->file('image')){
                File::delete(public_path($brand->image));
                $image = request()->file('image');
                $image_name = time().'.'.$image->getClientOriginalName();
                $image_url = '/images/ht_group/'.$image_name;
                $destinationPath = public_path('/images/ht_group/');
                $image->move($destinationPath,$image_name);
            }else{
                $image_url = $brand->image;
            }
            if(request()->file('en_image')){
                File::delete(public_path($brand->en_image));
                $image = request()->file('en_image');
                $image_name = time().'.'.$image->getClientOriginalName();
                $en_image_url = '/images/ht_group/'.$image_name;
                $destinationPath = public_path('/images/ht_group/');
                $image->move($destinationPath,$image_name);
            }else{
                $en_image_url = $brand->en_image;
            }
            $brand->en_title = request()->en_name;
            $brand->my_title = request()->my_name;
            $brand->image = $image_url;
            $brand->en_image = $en_image_url;
            $brand->save();
            return redirect()->back()->with('success','Updated Successfully!');
        }catch(\Exception $e){
            return redirect()->back()->with('error','Something Went Wrong!'.$e->getMessage());
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

            $brand = HtGroup::find($id);
            File::delete(public_path($brand->image));
            File::delete(public_path($brand->en_image));
            $brand->delete();
            return redirect()->back()->with('success','Deleted Success');
        }catch(\Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
    }
}
