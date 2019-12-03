<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Region;
use Illuminate\Http\Request;

class RegionApi extends Controller
{
    public function all(){
        try{
           $news = Region::latest()->get();
            return $this->convertJson('success',200,$news);
        }catch(\Exception $e) {
            return $this->convertJson('fail', 500, $e->getMessage());
        }
    }
}
