<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class News extends Model
{
    protected $fillable = ['en_name','en_description','my_title','my_description'];
    public function getCreatedAtAttribute($value)
    {
        $c = Carbon::parse($value);
        return $c->diffForHumans();
    }
    protected $appends =  ['name','description'];
    public function getNameAttribute(){
        switch(\Config::get('app.locale')){
            case 'en':
                return $this->en_name;
                break;
            case 'my':
                return $this->my_name;
                break;
            default:
                return $this->my_name;
        }
    }
    public function getDescriptionAttribute(){
        switch(\Config::get('app.locale')){
            case 'en':
                return $this->en_description;
                break;
            case 'my':
                return $this->my_description;
                break;
            default:
                return $this->my_description;
        }
    }
}
