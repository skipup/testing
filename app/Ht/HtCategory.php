<?php

namespace App\Ht;

use Illuminate\Database\Eloquent\Model;

class HtCategory extends Model
{
    protected $table = 'ht_categories';
    protected $fillable = ['my_name','en_name'];

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
