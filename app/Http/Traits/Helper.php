<?php
namespace App\Http\Traits;

use App\Crop\TradeSellOrder;
use App\ZgUni;
use Illuminate\Support\Facades\Auth;

trait Helper{
    //ေပးလိုက္တဲ့ id နဲ႔တူတာရွိမရွိစစ္တာ။
    public function alreadyExist($model,$id){
        if($model::where('id',$id)->count()){
            return true;
        }
        throw new \Exception($id.'_not_found_in_our_record');
    }

    public function zguni($value){
        if(Auth::check()){
            $user_id = Auth::id();
            if(ZgUni::where('user_id',$user_id)->count()){
                //user ေရးထားတာ က zg ျဖစ္ေနရင္
                if(ZgUni::where('user_id',$user_id)->first()->zg_uni == 'zg'){
                    //database ထဲက စာသား က zg ျဖစ္ေနရင္ convert မလုပ္ပါ။
                    if(isZgOrUni($value) == 'zawgyi'){
                        return $value;
                    }elseif(isZgOrUni($value) == 'unicode'){
                        return uni2zg($value);
                    }
                    //user ေရြးတာ unicode ျဖစ္ေနရင္
                }elseif(ZgUni::where('user_id',$user_id)->first()->zg_uni == 'uni'){
                    //database ထဲက စာသား က zg ျဖစ္ေနရင္ convert မလုပ္ပါ။
                    if(isZgOrUni($value) == 'unicode'){
                        return $value;
                    }elseif(isZgOrUni($value) == 'zawgyi'){
                        return zg2uni($value);
                    }
                }
            }else{
                return $value;
            }
        }
    }

    /*
     *  Send Notification
     *  $title ကေပးခ်င္တဲ့ message
     *  player id က နိုတီလက္ခံသူရဲ႔  one id
     *  data က app ဖြင့္ရင္သြားမဲ့ေနရာကိုပို႔ေပးရမွာ noti ထဲကဟာထုတ္ေပးလိုက္ရင္ရပီ။
     */

    function SendNotification($title=null,$player_id = [],$data) {
        $content      = array(
            "en" => $title,
        );
        $hashes_array = array();
        array_push($hashes_array, array(
            "id" => "like-button",
            "text" => "Like",
            "icon" => "http://i.imgur.com/N8SN8ZS.png",
            "url" => "unilinks://letset.com/?parent_id={$data['parent_id']}&parent_type={$data['parent_type']}"
        ));
        array_push($hashes_array, array(
            "id" => "like-button-2",
            "text" => "Like2",
            "icon" => "http://i.imgur.com/N8SN8ZS.png",
            "url" => "https://yoursite.com"
        ));
        $fields = array(
            'app_id' => "2910b656-2521-4969-a047-7ab0e3a32547",
            'include_players_id'=>$player_id,
            'included_segments' => array(
                'All'
            ),
            'data' => $data,
            'contents' => $content,
            'web_buttons' => $hashes_array
        );

        $fields = json_encode($fields);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json; charset=utf-8',
            'Authorization: Basic MGZhMWM0MjktOWQxMy00ZjExLTg0MTAtMGU0YTZlMTY4NGY2'
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

        $response = curl_exec($ch);
        curl_close($ch);
        return true;
    }

}