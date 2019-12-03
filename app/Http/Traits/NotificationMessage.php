<?php
namespace App\Http\Traits;
trait NotificationMessage{

    //For SEll
    //user interest ကိုနွိပ္တဲ့အခ်ိန္ျပတဲ့ message
    public function getSellTradeInterest(){
        return " မွ  သင့္အေရာင္းပိုစ္အား စိတ္၀င္စားခဲ့ပါတယ္။";
    }

    //Buyer က order တင္တဲ့အခါ လုပ္တဲ့ဟာ SellTrade Order က order မွာရွီတယ္။
    public function getSellTradeOrder(){
        return " မွ  သင့္ အေရာင္းပိုစ္အား order တင္ထားပါသည္။";
    }



    //For Buy
    //user interest ကိုနွိပ္တဲ့အခ်ိန္ျပတဲ့ message
    public function getBuyTradeInterest(){
        return " မွ  သင္၀ယ္လိုေသာ ပိုစ္အား စိတ္၀င္စားခဲ့ပါတယ္။";
    }

    //Buyer က order တင္တဲ့အခါ လုပ္တဲ့ဟာ SellTrade Order က order မွာရွီတယ္။
    public function getBuyTradeOrder(){
        return " မွ  သင့္ ၀ယ္လုိေသာ ပိုစ္အား order တင္ထားပါသည္။";
    }


    /*
     *      For Social Posts
     */
    public function getSocialLikeMessage(){
        return "မွ သင့္စကား၀ိုင္းမွ ပိုစ္အား နွစ္သက္ထားပါသည္။";
    }
    public function getSocialCommentMessage(){
        return "မွ သင့္စကား၀ိုင္းမွ ပိုစ္အား Comment ေပးထားပါသည္။";
    }


    /*
     *      For Crop Sell
     */
    public function getCropSellLikeMessage(){
        return "မွ သင့္ သီးနွံ အေရာင္းပိုစ္အား စိတ္၀င္စားခဲ့ပါသည္။";
    }
    public function getCropSellOrderMessage(){
        return "မွ သင့္ သီးနွံ အေရာင္းပိုစ္အား Order ေပးပို႔ထားပါသည္။";
    }
    /*
   *      For Crop Buy
   */
    public function getCropBuyLikeMessage(){
        return "မွ သင့္ သီးနွံ အ၀ယ္ပိုစ္အား စိတ္၀င္စားခဲ့ပါသည္။";
    }
    public function getCropBuyOrderMessage(){
        return "မွ သင့္ သီးနွံ အ၀ယ္ပိုစ္အား Order ေပးပို႔ထားပါသည္။";
    }
}