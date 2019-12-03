<?php
namespace App\Http\Traits;
use App\Http\Controllers\Controller;
use App\Trade\BuyTrade;
use App\Trade\SellTrade;
use Illuminate\Support\Facades\Auth;

trait Trade{
    /*
     *      type should be buy, sell
     *      trade_id is onlhy buytradesell id or selltrade id
     */
    public function isOwn($type,$trade_id){
        try{
            if($type=='sell'){
                $t = SellTrade::find($trade_id);
                if($t->user_id == Auth::user()->id){
                    return 'true';
                }else{
                    return 'false';
                }
            }elseif($type=='buy'){
                $t = BuyTrade::find($trade_id);
                if($t->user_id == Auth::user()->id){
                    return 'true';
                }else{
                    return 'false';
                }
            }
        }catch(\Exception $e){
            $c = new Controller();
            $c->convertJson('fail',400,'errorat Trade isOwn method'.$e->getMessage());
        }
    }
}