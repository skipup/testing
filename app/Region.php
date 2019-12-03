<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = ['en_name','my_name'];
    protected $appends =  ['name'];

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
}
