<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Traits\Helper;
use App\Pdf;
use Illuminate\Http\Request;

class PdfApi extends Controller
{
    use Helper;
    public function all(){
        try{
            $news  = Pdf::latest()->paginate(10);
            return $this->convertJson('success',200,$news);
        }catch(\Exception $e){
            return $this->convertJson('fail',500,$e->getMessage());
        }
    }

    public function detail(){
        try{
            $id = request()->id;
            if($this->alreadyExist(Pdf::class,$id)){
                switch(\Config::get('app.locale')){
                    case 'en':
                        $news = Pdf::find($id)->select('id','en_title','en_description','image','pdf')->paginate(20);
                        break;
                    case 'my':
                        $news = Pdf::find($id)->select('id','my_title','my_description','image','pdf')->paginate(20);
                        break;
                    default:
                        $news = Pdf::find($id)->select('id','my_title','my_description','image','pdf')->paginate(20);
                }
                return $this->convertJson('success',200,$news);
            }
        }catch(\Exception $e){
            return $this->convertJson('fail',500,$e->getMessage());
        }
    }
}
