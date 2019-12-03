<?php

namespace App\Ht;

use App\Region;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Ht extends Model
{
    protected $table = 'ht_pm';
    protected $fillable = [
        'user_id','region_id','ht_category_id','my_name','en_name','my_expire','en_expire','my_party','en_party','my_ticket_division',
        'en_ticket_division','my_start_work','en_start_work','my_end_work','en_end_work','my_location','en_location',
        'my_party_position','en_party_position','my_phone','en_phone','my_about','en_about','my_gender','en_gender','email','facebook','image'
    ];
    protected $appends =  ['other_location','gender','name','about','expire','party','ticket_division','start_work','end_work','location','party_position','phone',];

    public function getOtherLocationAttribute(){
        switch(\Config::get('app.locale')){
            case 'en':
                return $this->en_other_location;
                break;
            case 'my':
                return $this->my_other_location;
                break;
            default:
                return $this->my_other_location;
        }
    }
    public function getGenderAttribute(){
        switch(\Config::get('app.locale')){
            case 'en':
                return $this->en_gender;
                break;
            case 'my':
                return $this->my_gender;
                break;
            default:
                return $this->my_gender;
        }
    }
    public function getPhoneAttribute(){
        switch(\Config::get('app.locale')){
            case 'en':
                return $this->en_phone;
                break;
            case 'my':
                return $this->my_phone;
                break;
            default:
                return $this->my_phone;
        }
    }
    public function getPartyPositionAttribute(){
        switch(\Config::get('app.locale')){
            case 'en':
                return $this->en_party_position;
                break;
            case 'my':
                return $this->my_party_position;
                break;
            default:
                return $this->my_party_position;
        }
    }
    public function getLocationAttribute(){
        switch(\Config::get('app.locale')){
            case 'en':
                return $this->en_location;
                break;
            case 'my':
                return $this->my_location;
                break;
            default:
                return $this->my_location;
        }
    }
    public function getEndWorkAttribute(){
        switch(\Config::get('app.locale')){
            case 'en':
                return $this->en_end_work;
                break;
            case 'my':
                return $this->my_end_work;
                break;
            default:
                return $this->my_end_work;
        }
    }
    public function getStartWorkAttribute(){
        switch(\Config::get('app.locale')){
            case 'en':
                return $this->en_start_work;
                break;
            case 'my':
                return $this->my_start_work;
                break;
            default:
                return $this->my_start_work;
        }
    }
    public function getTicketDivisionAttribute(){
        switch(\Config::get('app.locale')){
            case 'en':
                return $this->en_ticket_division;
                break;
            case 'my':
                return $this->my_ticket_division;
                break;
            default:
                return $this->my_ticket_division;
        }
    }
    public function getPartyAttribute(){
        switch(\Config::get('app.locale')){
            case 'en':
                return $this->en_party;
                break;
            case 'my':
                return $this->my_party;
                break;
            default:
                return $this->my_party;
        }
    }
    public function getExpireAttribute(){
        switch(\Config::get('app.locale')){
            case 'en':
                return $this->en_expire;
                break;
            case 'my':
                return $this->my_expire;
                break;
            default:
                return $this->my_expire;
        }
    }
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
    public function getAboutAttribute(){
        switch(\Config::get('app.locale')){
            case 'en':
                return $this->en_about;
                break;
            case 'my':
                return $this->my_about;
                break;
            default:
                return $this->my_about;
        }
    }
















    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function region(){
        return $this->belongsTo(Region::class,'region_id');
    }
    public function htCategory(){
        return $this->belongsTo(HtCategory::class,'ht_category_id');
    }

}
