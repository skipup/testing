<?php

namespace App\Http\Controllers\Api;

use App\Ht\Ht;
use App\Ht\HtCategory;
use App\Ht\HtGroup;
use App\Ht\HtProfile;
use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Http\Request;

class HtApi extends Controller
{
    public function search(){
        try{
            $search = request()->name;
            $ht = Ht::where('my_name','like',"%$search%")
                ->orWhere('en_name','like',"%$search%")
                ->paginate(10);
            $ht->appends(['name'=>$search]);
            return $this->convertJson('success',200,$ht);
        }catch (\Exception $e){
            return $this->convertJson('fail',500,$e->getMessage());
        }
    }
    public function allCategory(){
        try{
            $news = HtCategory::latest()->get();
            return $this->convertJson('success',200,$news);
        }catch(\Exception $e) {
            return $this->convertJson('fail', 500, $e->getMessage());
        }
    }

    public function allPm(){
        try{
            $news = Ht::latest()->paginate(10);

            return $this->convertJson('success',200,$news);
        }catch(\Exception $e) {
            return $this->convertJson('fail', 500, $e->getMessage());
        }
    }

    public function pmFilter(){
        $query = request()->query();
        $pmQuery = Ht::query();
        foreach($query as $k=>$v){
            $pmQuery->where($k,$v);
        }

        $news = $pmQuery->latest()->with('htCategory','region')->paginate(10);;
        return $this->convertJson('success',200,$news);
    }

    public function pmDetail(){
        try{
            if(!isset(request()->id)){
                return $this->convertJson('fail',500,['error'=>'need_id']);
            }
            if(!Ht::where('id',request()->id)->count()){
                return $this->convertJson('fail',500,['error'=>request()->id.'_not_found_in_database']);
            }
            switch(\Config::get('app.locale')){
                case 'en':
                    $news = Ht::where('id',request()->id)->select(
                        'region_id','ht_category_id','en_name','en_expire','en_party','en_ticket_division',
                        'en_start_work','en_end_work','en_location','en_other_location','en_party_position','en_phone',
                        'en_about','email','facebook','image','en_gender'
                    )->first();
                    break;
                case 'my':
                    $news = Ht::where('id',request()->id)->select(
                        'region_id','ht_category_id','my_name','my_expire','my_party','my_ticket_division',
                        'my_start_work','my_end_work','my_location','my_other_location','my_party_position','my_phone',
                        'my_about','email','facebook','image','my_gender'
                    )->first();
                    break;
                default:
                    $news = Ht::where('id',request()->id)->select(
                        'region_id','ht_category_id','my_name','my_expire','my_party','my_ticket_division',
                        'my_start_work','my_end_work','my_location','my_other_location','my_party_position','my_phone',
                        'my_about','email','facebook','image','my_gender'
                    )->first();
            }
            return $this->convertJson('success',200,$news);
        }catch(\Exception $e){
            return $this->convertJson('fail',500,$e->getMessage());
        }

    }

    //For Group
    public function getGroup(){
        try{
            $ht = HtGroup::latest()->paginate(10);
            return $this->convertJson('success',200,$ht);
        }catch (\Exception $e){
            return $this->convertJson(500,$e->getMessage());
        }
    }

    //for Ht Profile
    //From Android Banner Ht Profile
    public function getProfile(){
        try{
            $ht = HtProfile::latest()->get();
            return $this->convertJson('success',200,$ht);
        }catch (\Exception $e){
            return $this->convertJson(500,$e->getMessage());
        }
    }
}
