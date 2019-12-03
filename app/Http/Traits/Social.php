<?php
namespace  App\Http\Traits;

use App\Social\SocialPost;
use Illuminate\Support\Facades\Auth;

trait  Social{
    public function isOwn($id){
        $social_post = SocialPost::find($id);
        if($social_post->user_id == Auth::user()->id){
            return true;
        }
        return false;
    }
}