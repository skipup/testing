<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Http\Request;

class NewsApi extends Controller
{
    public function all(){
        try{
            $news = News::latest()->paginate(10);
            return $this->convertJson('success',200,$news);
        }catch(\Exception $e) {
            return $this->convertJson('fail', 500, $e->getMessage());
        }
    }
}
