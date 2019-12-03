<?php

namespace App\Http\Controllers\Admin\Ht;

use App\Ht\HtProfile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class HtProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $brands = HtProfile::orderBy('id','DESC')->paginate(20);
            return view('admin.ht_profile.index',compact('brands'));
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
        return view('admin.ht_profile.add');
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
            'image'=>'required|image|mimes:jpg,jpeg,png,bmp'
        ]);
        if($v->fails()){
            return redirect()->back()->withErrors($v->errors());
        }
        try{
            //image uplodad
            if(request()->file('image')){
                $image = request()->file('image');
                $image_name = time().'.'.$image->getClientOriginalName();
                $image_url = '/images/ht_profile/'.$image_name;
                $destinationPath = public_path('/images/ht_profile/');
                $image->move($destinationPath,$image_name);
            }else{
                return redirect()->back()->with('danger','Pleaes Choose Image');
            }

            $b = new HtProfile();
            $b->en_name = request()->en_name;
            $b->my_name = request()->my_name;
            $b->en_description = request()->en_description;
            $b->my_description = request()->my_description;
            $b->image = $image_url;
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
        $news = HtProfile::find($id);
        return view('admin.ht_profile.show',compact('news'));
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
            $brand = HtProfile::find($id);
            return view('admin.ht_profile.update',compact('brand'));
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
            $brand = HtProfile::find($id);
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
                $image_url = '/images/ht_profile/'.$image_name;
                $destinationPath = public_path('/images/ht_profile/');
                $image->move($destinationPath,$image_name);
            }else{
                $image_url = $brand->image;
            }
            $brand->en_name = request()->en_name;
            $brand->my_name = request()->my_name;
            $brand->en_description = request()->en_description;
            $brand->my_description = request()->my_description;
            $brand->image = $image_url;
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
            $brand = HtProfile::find($id);
            $brand->delete();
            File::delete('public'.$brand->image);
            return redirect()->back()->with('success','Deleted Success');
        }catch(\Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
    }
}
