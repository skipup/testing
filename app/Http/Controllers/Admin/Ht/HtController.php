<?php

namespace App\Http\Controllers\Admin\Ht;

use App\Ht\Ht;
use App\Ht\HtCategory;
use App\Http\Controllers\Controller;
use App\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class HtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            if(isset(request()->ht_category_id) and isset(request()->region_id)){
                $ht_cat = request()->ht_category_id;
                $region_id = request()->region_id;
                $brands = Ht::where('region_id',$region_id)->where('ht_category_id',$ht_cat)->paginate(10);
                $brands->appends(['ht_category_id'=>$ht_cat,'region_id'=>$region_id]);
            }else{
                $brands = Ht::orderBy('id','DESC')->paginate(10);
            }
            $ht_category = HtCategory::all();
            $regions = Region::all();
            return view('admin.ht.index',compact('brands','ht_category','regions'));
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
        $htCategory = HtCategory::all();
        $region = Region::all();
        return view('admin.ht.add',compact('htCategory','region'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $v = Va::make(request()->all(),[
//            'my_name'=>'required',
//            'en_name'=>'required',
//        ]);
//        if($v->fails()){
//            return redirect()->back()->withErrors($v->errors());
//        }
        try{
            //image uplodad
            if(request()->file('image')){
                $image = request()->file('image');
                $image_name = time().'.'.$image->getClientOriginalName();
                $image_url = '/images/ht/'.$image_name;
                $destinationPath = public_path('/images/ht/');
                $image->move($destinationPath,$image_name);
            }else{
                return redirect()->back()->with('danger','Pleaes Choose Image');
            }

            $b = new Ht();
            $b->user_id = Auth::user()->id;
            $b->region_id = request()->region_id;
            $b->ht_category_id = request()->ht_category_id;
            $b->my_name = request()->my_name;
            $b->en_name = request()->en_name;
            $b->my_expire = request()->my_expire;
            $b->en_expire = request()->en_expire;
            $b->my_party = request()->my_party;
            $b->en_party = request()->en_party;
            $b->my_ticket_division = request()->my_ticket_division;
            $b->en_ticket_division = request()->en_ticket_division;
            $b->my_start_work = request()->my_start_work;
            $b->en_start_work = request()->en_start_work;
            $b->my_end_work = request()->my_end_work;
            $b->en_end_work = request()->en_end_work;
            $b->my_location = request()->my_location;
            $b->en_location = request()->en_location;
            $b->my_other_location = request()->my_other_location;
            $b->en_other_location = request()->en_other_location;
            $b->my_party_position = request()->my_party_position;
            $b->en_party_position = request()->en_party_position;
            $b->my_phone = request()->my_phone;
            $b->en_phone = request()->en_phone;
            $b->my_about = request()->my_about;
            $b->en_about = request()->en_about;
            $b->email = request()->email;
            $b->facebook = request()->facebook;
            $b->image = $image_url;

            switch (request()->gender){
                case 'male':
                    $b->en_gender = request()->gender;
                    $b->my_gender  ='ကျား';
                    break;
                case 'female':
                    $b->en_gender = request()->gender;
                    $b->my_gender  ='မ';
                    break;
            }
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
        $news = Ht::find($id);
        return view('admin.ht.show',compact('news'));
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
            $htCategory = HtCategory::all();
            $region = Region::all();
            $pm = Ht::find($id);
            return view('admin.ht.update',compact('htCategory','region','pm'));
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
            $b = Ht::find($id);
            if(request()->file('image')){
                File::delete(public_path('/images/ht/'.$b->image));
                $image = request()->file('image');
                $image_name = time().'.'.$image->getClientOriginalName();
                $image_url = '/images/ht/'.$image_name;
                $destinationPath = public_path('/images/ht/');
                $image->move($destinationPath,$image_name);
            }else{
                $image_url = $b->image;
            }

            $b->user_id = Auth::user()->id;
            $b->region_id = request()->region_id;
            $b->ht_category_id = request()->ht_category_id;
            $b->my_name = request()->my_name;
            $b->en_name = request()->en_name;
            $b->my_expire = request()->my_expire;
            $b->en_expire = request()->en_expire;
            $b->my_party = request()->my_party;
            $b->en_party = request()->en_party;
            $b->my_ticket_division = request()->my_ticket_division;
            $b->en_ticket_division = request()->en_ticket_division;
            $b->my_start_work = request()->my_start_work;
            $b->en_start_work = request()->en_start_work;
            $b->my_end_work = request()->my_end_work;
            $b->en_end_work = request()->en_end_work;
            $b->my_location = request()->my_location;
            $b->en_location = request()->en_location;
            $b->my_other_location = request()->my_other_location;
            $b->en_other_location = request()->en_other_location;
            $b->my_party_position = request()->my_party_position;
            $b->en_party_position = request()->en_party_position;
            $b->my_phone = request()->my_phone;
            $b->en_phone = request()->en_phone;
            $b->my_about = request()->my_about;
            $b->en_about = request()->en_about;
            $b->email = request()->email;
            $b->facebook = request()->facebook;
            $b->image = $image_url;

            switch (request()->gender){
                case 'male':
                    $b->en_gender = request()->gender;
                    $b->my_gender  ='ကျား';
                    break;
                case 'female':
                    $b->en_gender = request()->gender;
                    $b->my_gender  ='မ';
                    break;
            }
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
            $brand = Ht::find($id);
            $brand->delete();
            File::delete(public_path($brand->image));
            return redirect()->back()->with('success','Deleted Success');
        }catch(\Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
    }
}
