<?php

namespace App\Ht;

use Illuminate\Database\Eloquent\Model;

class HtGroup extends Model
{
    protected $fillable = ['image','en_image','en_title','my_title'];
    protected $appends =  ['title'];
    public function getTitleAttribute(){
        switch(\Config::get('app.locale')){
            case 'en':
                return $this->en_title;
                break;
            case 'my':
                return $this->my_title;
                break;
            default:
                return $this->my_title;
        }
    }
}
