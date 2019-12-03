<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Pdf extends Model
{
    protected $fillable = ['user_id','my_title','en_title','image','pdf','en_description','my_description','en_name','en_pdf'];
    public function getCreatedAtAttribute($value)
    {
        $c = Carbon::parse($value);
        return $c->diffForHumans();
    }
    public function getPdfAttribute($value){
        switch(\Config::get('app.locale')){
            case 'en':
                return $this->en_pdf;
                break;
            case 'my':
                return $value;
                break;
            default:
                return $value;
        }
    }
    public function getImageAttribute($value){
        switch(\Config::get('app.locale')){
            case 'en':
                return $this->en_image;
                break;
            case 'my':
                return $value;
                break;
            default:
                return $value;
        }
    }

    protected $appends =  ['title','description','pdff','imagee'];

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
    public function getPdffAttribute(){
        switch(\Config::get('app.locale')){
            case 'en':
                return $this->en_pdf;
                break;
            case 'my':
                return $this->pdf;
                break;
            default:
                return $this->pdf;
        }
    }
    public function getImageeAttribute(){
        switch(\Config::get('app.locale')){
            case 'en':
                return $this->en_image;
                break;
            case 'my':
                return $this->image;
                break;
            default:
                return $this->image;
        }
    }
}
