<?php

namespace App\Ht;

use Illuminate\Database\Eloquent\Model;

class HtProfile extends Model
{
    protected $table = 'ht_profiles';
    protected $fillable = ['my_name','en_name','en_description','my_description','image'];

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
