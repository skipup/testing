<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $brands = News::latest()->paginate(20);
            return view('admin.news.index',compact('brands'));
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
        return view('admin.news.add');
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
            'en_name'=>'required',
            'my_name'=>'required',
            'en_description'=>'required',
            'my_description'=>'required',
            'image'=>'required|mimes:jpeg,jpg,png,ico',
        ]);
        if($v->fails()){
            return redirect()->back()->withErrors($v->errors());
        }
        try{
            if(request()->file('image')){
                $image = request()->file('image');
                $image_name = time().'.'.$image->getClientOriginalName();
                $image_url = '/images/news/'.$image_name;
                $destinationPath = public_path('/images/news/');
                $image->move($destinationPath,$image_name);
            }else{
                return redirect()->back()->with('danger','Pleaes Choose Image');
            }
            $b = new News();
            $b->en_name = request()->en_name;
            $b->my_name = request()->my_name;
            $b->en_description = request()->my_name;
            $b->my_description = request()->my_name;
            $b->image = $image_url;
            $b->save();
            return redirect()->back()->with('success',' News Created Successfully!');
        }catch(\Exception $e){
            return redirect()->back()->with('error',$e->getMessage().'Something Went Wrong!');
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
        $news  = News::find($id);
        return view('admin.news.show',compact('news'));
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
            $brand = News::find($id);
            return view('admin.news.update',compact('brand'));
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
            $brand = News::find($id);
            $v = Validator::make(request()->all(),[
                'en_name'=>'required',
                'my_name'=>'required',
                'en_description'=>'required',
                'my_description'=>'required',
            ]);
            if($v->fails()){
                return redirect()->back()->withErrors($v->errors());
            }
            if(request()->file('image')){
                File::delete(public_path('/images/news/'.$brand->image));
                $image = request()->file('image');
                $image_name = time().'.'.$image->getClientOriginalName();
                $image_url = '/images/news/'.$image_name;
                $destinationPath = public_path('/images/news/');
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
            return redirect()->back()->with('success',' News Updated Successfully!');
        }catch(\Exception $e){
            return redirect()->back()->with('error',$e->getMessage().'Something Went Wrong!');
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
            $brand = News::find($id);
            File::delete(public_path($brand->image));
            $brand->delete();
            return redirect()->back()->with('success',' News Deleted Success');
        }catch(\Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
    }
}
