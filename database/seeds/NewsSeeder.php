<?php

use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\News::create([
            'image'=>'/images/news/default.jpg',
            'my_name'=>'မြန်မာ့လယ်ယာကဏ္ဍအခြေအနေ',
            'my_description'=>'၁။မြန်မာနိုင်ငံလူဦးရေ၏၇၀%သည် ကျေးလက်ဒေသတွင်နေထိုင်လျက်ရှိကြပြီး အများစု၏ အဓိကစီးပွားရေးလုပ်ငန်းမှာ လယ်ယာလုပ်ငန်းဖြစ်ပါသည်။ တစ်မျိုးသားလုံး၏ ပြည်တွင်းအသားတင်ထုတ်လုပ်မှုနှင့် ဝန်ဆောင်မှုတန်ဘိုး (GDP) ၏၃၀% ခန့်ကိုလယ်ယာကဏ္ဍမှရရှိသော်လည်း တောင်သူလယ်သမားအများစု၏ လယ်ယာမြေနှင့်ပတ်သက်သော အကျိုးခံစားခွင့်အလွန်နည်းပါးလှပြီး ၎င်းတို့၏လူမှုစီးပွားဘဝသည်နိမ့်ကျလျက်ရှိပါသည်။

၂။ထို့အပြင်ရာသီဥတုပြောင်းလဲမှု၊သဘာဝဘေးနှင့် အခြားသောဘေးအန္တရာယ်များကျရောက်မှုတို့ကြောင့် တောင်သူလယ်သမားအများစု၏ လူမှုစီးပွားဘဝကိုပိုမိုထိခိုက်စေပါသည်။ အထူးသဖြင့်၂၀၀၈ခုနှစ်၊ နာဂစ်မုန်တိုင်းနောက်ပိုင်းတွင် နှစ်စဉ်လိုလိုရာသီဥတုဖောက်ပြန်လာခဲ့ရာလယ်ယာကဏ္ဍတွင် ထိခိုက်နစ်နာဆုံးရှုံးမှုများပေါ်ပေါက်ခဲ့ရပါသည်။ သစ်တောပြုန်းတီးခြင်းကိုကာကွယ်ထိန်းသိမ်းမှုနှင့် မြေဆီလွှာထိန်းသိမ်းမှုလုပ်ငန်းများကို စနစ်တကျထိရောက်စွာဆောင်ရွက်မှုအားနည်းခဲ့ခြင်းတို့ကြောင့် မြေဆီလွှာအရည်အသွေးကျဆင်းပျက်စီးလာလျက်ရှိပါသည်။ အကျိုးဆက်အနေဖြင့်တောင်သူလယ်သမားအများစုမှာ ဝင်ငွေနိမ့်ကျပြီးအကြွေးသံသရာမှ ရုန်းမထွက်နိုင်သည့်အပြင်အကြောင်းအမျိုးမျိုးဖြင့် ၎င်းတို့လုပ်ကိုင်သောလယ်ယာမြေများကို လက်လွှတ်ခဲ့ရခြင်းကြောင့် လယ်မဲ့ယာမဲ့များဘဝသို့ရောက်ခဲ့ရပြီး လူမှုစီးပွားဘဝအခြေအနေများကိုပိုမိုထိခိုက်စေခဲ့ပါသည်။ သို့ဖြစ်ပါ၍တောင်သူလယ်သမားတို့၏ လူမှုစီးပွားဘဝအခြေအနေမြင့်မားတိုးတက်လာစေရန်နှင့် လယ်ယာကဏ္ဍ ဖွံ့ဖြိုးတိုးတက်လာစေရန် ဝန်ကြီးဌာန၏မူဝါဒများနှင့်လုပ်ငန်းစဉ်များကို ခိုင်ခိုင်မာမာရေးဆွဲချမှတ်အကောင်အထည်ဖော်ခြင်းဖြင့် နိုင်ငံတော်၏စီးပွားရေးဖွံ့ဖြိုးတိုးတက်မှုကိုအထောက်အကူပြုနိုင်ရန်ကြိုးပမ်းဆောင်ရွက်ရမည်ဖြစ်ပါသည်။

၃။လယ်ယာကဏ္ဍမူဝါဒအသစ်တွင်မြန်မာနိုင်ငံ၏ လယ်ယာကဏ္ဍရှိအခွင့်အလမ်းကောင်းများကို ဖေါ်ထုတ်ပေးလိုက်ခြင်းဖြင့်လျင်မြန်စွာတိုးတက်လာနေသော ပြည်တွင်းပြည်ပဈေးကွက်ရှိစားသုံးသူများ၏ လိုအပ်ချက်များဖြစ်သောအဆင့်အတန်းမြင့်လယ်ယာနှင့်သားငါးထွက်ကုန်များကို အမျိုးအမယ်စုံလင်စွာဖြည့်ဆည်းပေးရန် ရည်ရွယ်ပါသည်။ ယင်းသို့သောမူဝါဒအရစိုက်ပျိုးမွေးမြူရေးနှင့်ထုတ်လုပ်ရေးလုပ်ငန်းများကိုပိုမိုကျယ်ပြန့်လာစေခြင်း၊ ထုတ်လုပ်မှုစွမ်းအားမြင့်မားလာခြင်းနှင့်အတူ လုပ်ကွက်ငယ်တောင်သူလယ်သမား၏ဝင်ငွေပါတိုးတက်လာစေခြင်း၊ စားသုံးသူများအတွက်ဘေးအန္တရာယ်ကင်း၍ အာဟာရပြည့်ဝသောစားနပ်ရိက္ခာများထုတ်လုပ်နိုင်ခြင်း၊လယ်ယာစီးပွားရေးလုပ်ငန်းများဖွံ့ဖြိုးလာခြင်းနှင့်အတူနိုင်ငံတကာဈေးကွက်နှင့် ချိတ်ဆက်၍ လယ်ယာထုတ်ကုန်များကို  ပြည်ပသို့ ပိုမိုတင်ပို့နိုင်ခြင်း၊ ကျေးလက်ဒေသလူမှုစီးပွားဘဝတိုးတက်လာခြင်း၊ ဖွံ့ဖြိုးတိုးတက်မှု ရေရှည်တည်တံ့ခြင်းစသော  အကျိုးကျေးဇူးများရရှိဖြစ်ပေါ်လာစေနိုင်ပါသည်။

မျှော်မှန်းချက်
၄။အားလုံးပါဝင်ပြီး နိုင်ငံတကာနှင့် ယှဉ်ပြိုင်နိုင်စွမ်းရှိသည့် ရေရှည်တည်တံ့သော လယ်ယာကုန်ထုတ်မှုစနစ် ထွန်းကားစေခြင်းဖြင့် စားနပ်ရိက္ခာဖူလုံ၍ အာဟာရပြည့်ဝစေပြီး ကျေးလက်နေပြည်သူများ၏ လူမှုစီးပွားဘဝမြင့်မားလာစေရန်နှင့် နိုင်ငံစီးပွားဖွံ့ဖြိုးတိုးတက်မှု ကို အထောက်အကူဖြစ်စေရန်။

လုပ်ငန်းတာဝန်များ
၅။ကျေးလက်နေ ပြည်သူများနှင့် လယ်ယာစီးပွားရေးလုပ်ငန်းများအား ခေတ်မီဆန်းသစ်၍ ရေရှည်တည်တံ့သောထုတ်လုပ်မှုနည်းပညာများ၊ ပြုပြင်ထုပ်ပိုး နည်းလမ်းများ၊ ထောက်ပံ့ပို့ဆောင်ရေး နည်းလမ်းများနှင့်ဈေးကွက်ဆိုင်ရာ နည်းပညာများကို အသုံးပြု၍ ကြီးထွားလာသောပြည်တွင်းပြည်ပဈေးကွက်ဝယ်လိုအားနှင့်အညီ ဘေးအန္တရာယ်ကင်းရှင်း၍အာဟာရပြည့်ဝသည့် အမယ်စုံလင်သောစားနပ်ရိက္ခာနှင့်စိုက်ပျိုးမွေးမြူရေးထုတ်ကုန်ပစ္စည်းများ တိုးတက်ထုတ်လုပ်ရာတွင် အထောက်အကူပြုနိုင်ရေး ဆောင်ရွက်ရန်။

ပန်းတိုင်
၆။ပန်းတိုင်မှာအောက်ပါအတိုင်းဖြစ်ပါသည်−

(က)စားနပ်ရိက္ခာဖူလုံမှု​၊ အာဟာရပြည့်ဝရေးနှင့်အစားအစာဘေးအန္တရာယ်ကင်းရှင်းမှုတိုးတက်စေ ရေး။

(ခ) ပြောင်းလဲလာသော ဈေးကွက်နှင့်အညီ ဒေသအလိုက် ရေမြေ၊ ရာသီဥတုတို့နှင့်ကိုက်ညီသည့် အမယ်စုံလင်သော လယ်ယာ၊ သားငါးထွက်ကုန်များ ထုတ်လုပ်မှုပုံစံ တိုးမြင့်လာစေရေး။

(ဂ) စျေးကွက်လိုအပ်ချက်နှင့်အညီလယ်ယာသားငါးထုတ်ကုန်များ၏ အရည်အသွေးနှင့် စံချိန်စံညွှန်းများပြည့်မီစေရေး။

(ဃ)လယ်ယာထွက်ကုန် ဈေးကွက်နှင့် ဈေးနှုန်းသတင်းအချက်အလက် ဖြန့်ဝေမှု လုပ်ငန်းများ ဖွံ့ဖြိုးတိုးတက်လာစေရေး။

(င)တိရစ္ဆာန်နှင့်အပင်ပိုးမွှားရောဂါဆိုင်ရာအန္တရာယ်ကင်းရှင်းရေး၊ စိုက်ပျိုးမွေးမြူထုတ်လုပ်မှု အလေ့အကျင့်ကောင်းများဖွံ့ဖြိုးတိုးတက်လာစေရေး။

(စ)လယ်ယာကဏ္ဍစဉ်ဆက်မပြတ်ဖွံ့ဖြိုးတိုးတက်စေရေး အတွက်စိုက်ပျိုးမွေးမြူထုတ်လုပ်သ ူအစုအဖွဲ့များ၊သမဝါယမအသင်းများပေါ်ထွန်းလာစေရေး။

(ဆ)မျိုးစေ့ကဏ္ဍဖွံ့ဖြိုးတိုးတက်စေရေးနှင့် သားငါးမျိုးကောင်းမျိုးသနှင့်မွေးမြူထုတ်လုပ် ဖြန့်ဖြူးမှုဖွံ့ဖြိုးတိုးတက်စေရေး၊ဒေသမျိုးရင်းများထိန်းသိမ်းရေးနှင့်မှတ်တမ်းထားရှိရေး။

(ဇ)လယ်ယာအခြေခံစက်မှုလုပ်ငန်းများ၊အသေးစားစက်မှုလက်မှုလုပ်ငန်းများ၊ ရက်ကန်း လုပ်ငန်းများ၊ ပန်း(၁၀)မျိုးအပါအဝင်ရိုးရာလက်မှုလုပ်ငန်းများ၊ အသက်မွေးဝမ်းကျောင်း လုပ်ငန်းများနှင့်ကျေးလက်အခြေခံအဆောက်အအုံများဖွံ့ဖြိုးတိုးတက်စေရေး။

(ဈ)သုတေသနနှင့်ပညာပေးလုပ်ငန်းများဖွံ့ဖြိုးတိုးတက်စေရေး၊ လူ့စွမ်းအားအရင်းအမြစ်ဖွံ့ဖြိုး တိုးတက်စေရေး။

ရည်မှန်းချက်များ
၇။ရည်မှန်းချက်များမှာ အောက်ပါအတိုင်းဖြစ်ပါသည်−

(က)စားနပ်ရိက္ခာဖူလုံရေး၊အာဟာရပြည့်ဝရေးနှင့်အစားအစာ ဘေးအန္တရာယ်ကင်းရှင်းရေး တိုးတက်လာစေရန်။

(ခ)တောင်သူလယ်သမားများ၏အခွင့်အရေး ပြည့်ဝစွာရရှိခံစားနိုင်စေရန်နှင့် အကျိုးစီးပွား မြင့်မားလာစေရန်။

(ဂ)လုပ်ကွက်ငယ်တောင်သူလယ်သမားများ၊တစ်ပိုင်တစ်နိုင် မွေးမြူသူများနှင့်ရေလုပ်သားများ ကိုအခြေခံ၍အစုအဖွဲ့များ၊သမဝါယမအသင်းများဖွဲ့စည်းပြီးအတွေးသစ်အမြင်သစ်များဖြင့်စိုက်ပျိုးမွေးမြူရေးလုပ်ငန်းများကိုခေတ်မီဖွံ့ဖြိုးတိုးတက်လာစေရန်နှင့်ယင်းလုပ်ငန်းများတွင်အမျိုးသမီးများ၏အခန်းကဏ္ဍကိုပိုမိုမြှင့်တင်ရန်။

(ဃ)လယ်ယာကုန်ထုတ်လမ်းများ၊ကျေးရွာအခြေခံအဆောက်အအုံများ၊မြေယာ အသုံးချမှု အစီအမံများရေးဆွဲဆောင်ရွက်ခြင်းနှင့်အသေးစားစက်မှုလက်မှုကုန်ထုတ်လုပ်ငန်းများတည်ထောင်ပေးခြင်းတို့ဖြင့်ကျေးလက်ဒေသများစဉ်ဆက်မပြတ်ဖွံ့ဖြိုးတိုးတက်စေပြီးတောင်သူလယ်သမားများ၏လူမှုစီးပွားဘဝတိုးတက်မြင့်မားလာစေရန်။

(င)စိုက်ပျိုးမွေးမြူရေးလုပ်ငန်းများနှင့်သမဝါယမလုပ်ငန်းများပိုမိုဖွံ့ဖြိုးတိုးတက် လာစေရန် လိုအပ်သောနည်းပညာနှင့်ငွေကြေးအရင်းအနှီးများအတွက် ပြည်တွင်းပြည်ပမှအကူအညီ၊အထောက်အပံ့နှင့်ချေးငွေများရရှိရေးကူညီဆောင်ရွက်ပေးရန်။

(စ)လယ်ယာကဏ္ဍတွင် ပြည်တွင်းပြည်ပရင်းနှီးမြှုပ်နှံမှုများ တိုးတက်လာစေရေး အားပေးဆောင်ရွက်ရန်။

(ဆ)ပြည်ပဈေးကွက်ဝင် အရည်အသွေးမြင့် လယ်ယာ၊ သားငါး ထုတ်ကုန်များတိုးမြှင့် ထုတ်လုပ်နိုင်ရေး အားပေးဆောင်ရွက်ရန်။

(ဇ)လယ်ယာအခြေခံစက်မှုလုပ်ငန်းများ၊ အသေးစား စက်မှုလက်မှုလုပ်ငန်းများ၊ ရက်ကန်းလုပ်ငန်းများ၊ ပန်း(၁၀)မျိုးအပါအဝင်ရိုးရာလက်မှုလုပ်ငန်းများနှင့် အသက်မွေးဝမ်းကျောင်းလုပ်ငန်းများ ဖွံ့ဖြိုးတိုးတက်လာစေရေး အားပေးဆောင်ရွက်ရန်။

(ဈ)သမဝါယမလုပ်ငန်းများနှင့်သမဝါယမစနစ်ပိုမိုအောင်မြင်စေရေးဆောင်ရွက်ရန်။

(ည)တန်ဖိုးကွင်းဆက်တစ်ခုလုံးဖွံ့ဖြိုးတိုးတက်ရေးအတွက်ထုတ်လုပ်မှု၊ဝန်ဆောင်မှု၊ကုန်သွယ်မှုနှင့်စားသုံးမှုကဏ္ဍများကိုထိရောက်စွာချိတ်ဆက်ဆောင်ရွက်သွားရန်။

(ဋ)ဆင်းရဲနွမ်းပါးမှုလျှော့ချရေး၊ ရေရှည်တည်တံ့သောလယ်ယာကဏ္ဍဖွံ့ဖြိုးတိုးတက်ရေးနှင့် ကျေးလက်ဒေသဖွံ့ဖြိုးရေးလုပ်ငန်းများတွင်သက်ဆိုင်ရာကဏ္ဍအသီးသီးမှအစိုးရအဖွဲ့အစည်းများအချင်းချင်းပူးပေါင်းဆောင်ရွက်ခြင်း၊အစိုးရနှင့်ပုဂ္ဂလိကအဖွဲ့အစည်းများပူးပေါင်းဆောင်ရွက်ခြင်းအပါအဝင်သက်ဆိုင်သူများအားလုံးပူးပေါင်းပါဝင်ဆောင်ရွက်သွားရန်။

မူဝါဒများ
၈။လယ်ယာကဏ္ဍမူဝါဒသည် ပြည်သူလူထုအားလုံး စားနပ်ရိက္ခာနှင့် အာဟာရဖူလုံမှုရရှိစေရေး၊ လုပ်ကွက်ငယ် တောင်သူလယ်သမားများအနေဖြင့် ထုတ်လုပ်နိုင်မှု စွမ်းအားမြင့်မားပြီး ဈေးကွက်၏ လိုအပ်ချက်နှင့်အညီ ထုတ်ကုန်ပစ္စည်း အမယ်စုံအောင် ထုတ်လုပ်ပေးနိုင်ခြင်းဖြင့် ဝင်ငွေမြင့်မားလာစေရေးနှင့် ပုဂ္ဂလိက လယ်ယာစီးပွားရေးလုပ်ငန်းကဏ္ဍ၏ နိုင်ငံတကာနှင့် ယှဉ်ပြိုင်နိုင်ပြီး ပြည်ပပို့ကုန်တိုးမြင့် တင်ပို့နိုင်ရေးတို့ကို ဖြည့်ဆည်းပေးရန်ဖြစ်ပါသည်။

၉။ မူဝါဒများသည် လယ်ယာကဏ္ဍတွင် ပါဝင်သည့် ထုတ်လုပ်သူများ၊ စီးပွားရေးလုပ်ငန်း ဆောင်ရွက်သူများ၊ စားသုံးသူများအားလုံးအတွက် အထောက်အကူဖြစ်စေမည့် ဥပဒေ မူဘောင်ဆိုင်ရာဝန်းကျင်ကောင်းများ ဖန်တီးပေးခြင်းနှင့်အတူ အခြေခံ အဆောက်အအုံများ၊ ဝန်ဆောင်မှုများနှင့် ပြည်တွင်းပြည်ပ ရင်းနှီးမြှပ်နှံမှုများပေါ်ထွန်းရရှိစေရေးဖြည့်ဆည်းပေးရန် ဖြစ်ပါသည်။ ရေ၊ မြေနှင့် သဘာဝသယံဇာတအရင်းအမြစ်များကို ဖော်ထုတ်သုံးစွဲရာတွင် အများပါဝင်မှု၊ အန္တရာယ်ကင်းရှင်းမှုရှိစေပြီး ထိရောက်စွာနှင့် ရေရှည်တည်တံ့စွာ စီမံခန့်ခွဲ အသုံးချနိုင်ရန်ဖြစ်ပါသည်။

၁၀။ မူဝါဒများမှာ အောက်ပါအတိုင်း ဖြစ်ပါသည်-

(က) မြေယာအသုံးချမှုနှင့် စီမံခန့်ခွဲမှုဆိုင်ရာ မူဝါဒ

(ခ ) ရေအရင်းအမြစ် အသုံးချမှုနှင့် စီမံခန့်ခွဲမှုဆိုင်ရာ မူဝါဒ

(ဂ )  ငွေကြေးအရင်းအနှီးဆိုင်ရာ မူဝါဒ

(ဃ) စက်မှုလယ်ယာ နှင့် သွင်းအားစုများ ဆိုင်ရာ မူဝါဒ

(င ) သမဝါယမလုပ်ငန်းများနှင့် သမဝါယမစနစ်ဖွံ့ဖြိုးရေးဆိုင်ရာ မူဝါဒ (စ) ကျေးလက်အခြေခံအဆောက်အအုံဖွံ့ဖြိုးရေးဆိုင်ရာ မူဝါဒ

(ဆ) သုတေသန၊ ဖွံ့ဖြိုးမှုနှင့် နည်းပညာ ဖြန့်ဖြူးခြင်းဆိုင်ရာ မူဝါဒ

(ဇ ) ဈေးကွက်၊ တန်ဖိုးမြှင့်ကုန်ထုတ်လုပ်ခြင်းနှင့် ပြည်ပတင်ပို့ ရောင်းချခြင်းဆိုင်ရာမူဝါဒ

(ဈ ) အုပ်ချုပ်မှု၊ အဖွဲ့အစည်းများနှင့် လူ့စွမ်းအားအရင်းအမြစ် ဖွံ့ဖြိုးတိုးတက်ရေးဆိုင်ရာ မူဝါဒ

(ည) သဘာဝပတ်ဝန်းကျင်ထိန်းသိမ်းရေးနှင့် ရာသီဥတုပြောင်းလဲမှုတုံ့ပြန်ဆောင်ရွက်ရေးဆိုင်ရာ မူဝါဒ',
            'en_name'=>'Current landscape of agriculture sector in Myanmar',
            'en_description'=>'About 70% of the population in Myanmar resides in rural area and agriculture is their main livelihood. While the agriculture sector contributes 30% of national GDP, both the benefits that are gained from farming as well as the socio-economic status of farmers are extremely low.

Furthermore, farmers’ the socioeconomic status has been adversely affected by the effects of climate change, and natural and man made disasters. In particular, the unpredictable weather changes that have taken place almost annually in the wake of Cyclone Nargis in 2008 have led to tremendous crop damage and losses in the agriculture sector. At the same time, the failure to take effective actions on existing forest and soil conservation measures have exacerbated the soil quality and fertility. As a consequence, most farmers have not been able to break out of the economic down town they have experienced from chronically low productivity, low income, and rising indebtedness. In order to uplift the socio-economic condition of farmers and improve the performance of the agriculture sector, the Ministry of Agriculture, Livestock and Irrigation (MOALI) has made it a priority to support the development of the national economy through effective implementation of a proactive portfolio far reaching policies and strategic thrusts.

The aim of these new policies and strategic thrusts, referred to as Agriculture Policy 2016, is to create the enabling environment that will promote the production of a greater and more diversified range of high value agricultural, livestock, and fishery products. A major intention of Agriculture Policy 2016 is to take advantage of the comparative advantage that Myanmar has in the production of these high value products that are in increasing demand in both domestic and international markets.

Vision
The vision of Agriculture Policy 2016 is:

An inclusive, competitive, food and nutrition secured and sustainable agricultural system contributing to the socio-economic well being of farmers and rural people and further development of the national economy.

Mission
The Mission of Agriculture Policy 2016 is:

To enable rural population and agribusiness enterprises that sustain themselves from the production and sales of diverse, safe and nutritious foods, and agricultural products to have access to innovative and sustainable production, processing, packaging, logistics, and marketing technologies to meet the growing domestic and global demands.

Goal
The followings are the goals of the Ministry.

Improve food security, food safety, and nutritional status of agricultural products of the people of Myanmar.

Enhance agricultural diversification programmes in compliance with the changing market and the prevailing agro-climatic condition of the area.

Satisfy the specified quality requirements and standard of agricultural, livestock and fishery products as dictated by the market.

Improve the dissemination of market and price information.

Prevent the incidence and spread of pests and diseases in crops and livestock by wide spread use of IPM measures of a preventative nature and through development and adoption of Good Agriculture Practices - GAP, Good Animal Husbandry Practices - GAHP and Good Aquaculture Practices –GaqP.

Support the formation of crops, livestock, and fisheries producer groups and cooperative societies that aim in sustaining the development of agriculture sector.

Develop the seed industry and highly performing pure animal breeds and fish species, and conserve native breeds and species.

Develop and enhance agro-based industries, small scale industries, and cottage industries traditional weaving and handicraft and the vocational education, and rural infrastructure that is needed to support the development of these industries.

Improve and enhance research, the extension service, and human resource programmes.

Objectives
The followings are the Objectives of the Ministry.

To ensure food and nutrition security and food safety.

To safeguard the rights of the farmers and to enhance their welfare and livelihood.

To advance and upgrade the agricultural sector by organizing farmers’ associations and cooperatives inclusive of small holders and subsistence farmers with promotion of gender role.

To attain sustainable rural development and to upgrade socio-economic conditions of rural people and farmers by improving rural infrastructure, enhancing access to markets, establishing small scale enterprises and designing participatory land use plans and management.

To seek technical assistance and mobilize the financial resources from local and international agencies in support of crops, livestock, fisheries and rural development in the agriculture sector.

To promote domestic and foreign direct investment in agriculture sector.

To promote competitiveness and value-added production of exportable agricultural commodities.

To encourage the development of agro-based industry, small scale enterprises, cottage industries, and income generation activities, including ten traditional artworks and crafts.

To improve the livelihood and income generation of the rural people through the development of agricultural cooperative enterprises and the cooperative system.

To develop effective linkages of production, trading, processing, services and consumer segments along the value chains of agricultural commodities.

To improve coordination mechanism of inter-governmental agencies, to foster public-private partnership and to establish collaboration and connectivity among all stakeholders including public agencies, academia, farmers’ associations, civil societies, and private sector with a view to enhancing rural development and reducing poverty .

Policies
Myanmar’s agricultural policy is to improve food and nutrition security and food safety for all the people and to enable smallholder farmers to increase their incomes through higher productivity and diversified production in response to market demand, as well as to enhance exports through and internationally competitive private agri-business sector.

These policies will provide consumers, producers, and businesses in the agricultural sector with a supportive legal and regulatory environment along with essential public investment, infrastructure and services as well as the mobilization of domestic and foreign investments. Specific policies to develop and utilize land, water and other natural resources in an inclusive, competitive, efficient, safe and sustainable manner can be organized into three categories: governance of land, water and other natural resources: access to inputs and technology for production: and value-added processing, marketing and export.

Policies related to agriculture sector of Myanmar are as follows:
Land Use and Management Policy.

Water Use and Management Policy.

Agricultural financing Policy.

Agricultural Mechanization and Input Sector Policy.

Cooperative Societies and Cooperative System Development Policy

Rural Infrastructure Development Policy.

Research, Development and Extension Policy.

Marketing, Value-added Processing and Export Policy.

Governance, Institutional and Human Resource Development Policy.

Environmental Conservation and Climate Change Resilience Policy.

Land Use and Management Policy

Land Use and Management Policy.
All farmers who produce crop, livestock and fish can access land in accordance with the existing Farm Land Laws, and also transfer, sell, mortgage, lend, exchange, give away, or inherit their land right including tilling and other land use.

To capture both fresh and brackish water fishery and produce fish systematically in accordance with the Laws.

To establish Special Zones for the production of agriculture, livestock and fishery products so as to improve productivity.

Arrangement will be made available for farmers’ freedom of choice to undertake any farming activities in accordance with Laws (agriculture, livestock, fishery sectors) that are economically viable, in the farm land which is granted to till and use.

Formation of groups of farmers, including crops and livestock, and fisherman, will be encouraged and supported and aimed to work within the Land Consolidation and Land Use Management system in the transformation to a larger scale farm parcels.

Assistance will be provided to those who are interested in farming activities, in particular, small holder farmers and farm labors, who are landless and have extremely limited financial resources will have the rights of tilling the land that they have cleared or developed as new farm land.

Development of new farm land will be undertaken in accordance with the National Land Use Policy.'
        ]);
        \App\News::create([
            'image'=>'/images/news/default.jpg',
            'my_name'=>'မြန်မာ့လယ်ယာကဏ္ဍအခြေအနေ',
            'my_description'=>'၁။မြန်မာနိုင်ငံလူဦးရေ၏၇၀%သည် ကျေးလက်ဒေသတွင်နေထိုင်လျက်ရှိကြပြီး အများစု၏ အဓိကစီးပွားရေးလုပ်ငန်းမှာ လယ်ယာလုပ်ငန်းဖြစ်ပါသည်။ တစ်မျိုးသားလုံး၏ ပြည်တွင်းအသားတင်ထုတ်လုပ်မှုနှင့် ဝန်ဆောင်မှုတန်ဘိုး (GDP) ၏၃၀% ခန့်ကိုလယ်ယာကဏ္ဍမှရရှိသော်လည်း တောင်သူလယ်သမားအများစု၏ လယ်ယာမြေနှင့်ပတ်သက်သော အကျိုးခံစားခွင့်အလွန်နည်းပါးလှပြီး ၎င်းတို့၏လူမှုစီးပွားဘဝသည်နိမ့်ကျလျက်ရှိပါသည်။

၂။ထို့အပြင်ရာသီဥတုပြောင်းလဲမှု၊သဘာဝဘေးနှင့် အခြားသောဘေးအန္တရာယ်များကျရောက်မှုတို့ကြောင့် တောင်သူလယ်သမားအများစု၏ လူမှုစီးပွားဘဝကိုပိုမိုထိခိုက်စေပါသည်။ အထူးသဖြင့်၂၀၀၈ခုနှစ်၊ နာဂစ်မုန်တိုင်းနောက်ပိုင်းတွင် နှစ်စဉ်လိုလိုရာသီဥတုဖောက်ပြန်လာခဲ့ရာလယ်ယာကဏ္ဍတွင် ထိခိုက်နစ်နာဆုံးရှုံးမှုများပေါ်ပေါက်ခဲ့ရပါသည်။ သစ်တောပြုန်းတီးခြင်းကိုကာကွယ်ထိန်းသိမ်းမှုနှင့် မြေဆီလွှာထိန်းသိမ်းမှုလုပ်ငန်းများကို စနစ်တကျထိရောက်စွာဆောင်ရွက်မှုအားနည်းခဲ့ခြင်းတို့ကြောင့် မြေဆီလွှာအရည်အသွေးကျဆင်းပျက်စီးလာလျက်ရှိပါသည်။ အကျိုးဆက်အနေဖြင့်တောင်သူလယ်သမားအများစုမှာ ဝင်ငွေနိမ့်ကျပြီးအကြွေးသံသရာမှ ရုန်းမထွက်နိုင်သည့်အပြင်အကြောင်းအမျိုးမျိုးဖြင့် ၎င်းတို့လုပ်ကိုင်သောလယ်ယာမြေများကို လက်လွှတ်ခဲ့ရခြင်းကြောင့် လယ်မဲ့ယာမဲ့များဘဝသို့ရောက်ခဲ့ရပြီး လူမှုစီးပွားဘဝအခြေအနေများကိုပိုမိုထိခိုက်စေခဲ့ပါသည်။ သို့ဖြစ်ပါ၍တောင်သူလယ်သမားတို့၏ လူမှုစီးပွားဘဝအခြေအနေမြင့်မားတိုးတက်လာစေရန်နှင့် လယ်ယာကဏ္ဍ ဖွံ့ဖြိုးတိုးတက်လာစေရန် ဝန်ကြီးဌာန၏မူဝါဒများနှင့်လုပ်ငန်းစဉ်များကို ခိုင်ခိုင်မာမာရေးဆွဲချမှတ်အကောင်အထည်ဖော်ခြင်းဖြင့် နိုင်ငံတော်၏စီးပွားရေးဖွံ့ဖြိုးတိုးတက်မှုကိုအထောက်အကူပြုနိုင်ရန်ကြိုးပမ်းဆောင်ရွက်ရမည်ဖြစ်ပါသည်။

၃။လယ်ယာကဏ္ဍမူဝါဒအသစ်တွင်မြန်မာနိုင်ငံ၏ လယ်ယာကဏ္ဍရှိအခွင့်အလမ်းကောင်းများကို ဖေါ်ထုတ်ပေးလိုက်ခြင်းဖြင့်လျင်မြန်စွာတိုးတက်လာနေသော ပြည်တွင်းပြည်ပဈေးကွက်ရှိစားသုံးသူများ၏ လိုအပ်ချက်များဖြစ်သောအဆင့်အတန်းမြင့်လယ်ယာနှင့်သားငါးထွက်ကုန်များကို အမျိုးအမယ်စုံလင်စွာဖြည့်ဆည်းပေးရန် ရည်ရွယ်ပါသည်။ ယင်းသို့သောမူဝါဒအရစိုက်ပျိုးမွေးမြူရေးနှင့်ထုတ်လုပ်ရေးလုပ်ငန်းများကိုပိုမိုကျယ်ပြန့်လာစေခြင်း၊ ထုတ်လုပ်မှုစွမ်းအားမြင့်မားလာခြင်းနှင့်အတူ လုပ်ကွက်ငယ်တောင်သူလယ်သမား၏ဝင်ငွေပါတိုးတက်လာစေခြင်း၊ စားသုံးသူများအတွက်ဘေးအန္တရာယ်ကင်း၍ အာဟာရပြည့်ဝသောစားနပ်ရိက္ခာများထုတ်လုပ်နိုင်ခြင်း၊လယ်ယာစီးပွားရေးလုပ်ငန်းများဖွံ့ဖြိုးလာခြင်းနှင့်အတူနိုင်ငံတကာဈေးကွက်နှင့် ချိတ်ဆက်၍ လယ်ယာထုတ်ကုန်များကို  ပြည်ပသို့ ပိုမိုတင်ပို့နိုင်ခြင်း၊ ကျေးလက်ဒေသလူမှုစီးပွားဘဝတိုးတက်လာခြင်း၊ ဖွံ့ဖြိုးတိုးတက်မှု ရေရှည်တည်တံ့ခြင်းစသော  အကျိုးကျေးဇူးများရရှိဖြစ်ပေါ်လာစေနိုင်ပါသည်။

မျှော်မှန်းချက်
၄။အားလုံးပါဝင်ပြီး နိုင်ငံတကာနှင့် ယှဉ်ပြိုင်နိုင်စွမ်းရှိသည့် ရေရှည်တည်တံ့သော လယ်ယာကုန်ထုတ်မှုစနစ် ထွန်းကားစေခြင်းဖြင့် စားနပ်ရိက္ခာဖူလုံ၍ အာဟာရပြည့်ဝစေပြီး ကျေးလက်နေပြည်သူများ၏ လူမှုစီးပွားဘဝမြင့်မားလာစေရန်နှင့် နိုင်ငံစီးပွားဖွံ့ဖြိုးတိုးတက်မှု ကို အထောက်အကူဖြစ်စေရန်။

လုပ်ငန်းတာဝန်များ
၅။ကျေးလက်နေ ပြည်သူများနှင့် လယ်ယာစီးပွားရေးလုပ်ငန်းများအား ခေတ်မီဆန်းသစ်၍ ရေရှည်တည်တံ့သောထုတ်လုပ်မှုနည်းပညာများ၊ ပြုပြင်ထုပ်ပိုး နည်းလမ်းများ၊ ထောက်ပံ့ပို့ဆောင်ရေး နည်းလမ်းများနှင့်ဈေးကွက်ဆိုင်ရာ နည်းပညာများကို အသုံးပြု၍ ကြီးထွားလာသောပြည်တွင်းပြည်ပဈေးကွက်ဝယ်လိုအားနှင့်အညီ ဘေးအန္တရာယ်ကင်းရှင်း၍အာဟာရပြည့်ဝသည့် အမယ်စုံလင်သောစားနပ်ရိက္ခာနှင့်စိုက်ပျိုးမွေးမြူရေးထုတ်ကုန်ပစ္စည်းများ တိုးတက်ထုတ်လုပ်ရာတွင် အထောက်အကူပြုနိုင်ရေး ဆောင်ရွက်ရန်။

ပန်းတိုင်
၆။ပန်းတိုင်မှာအောက်ပါအတိုင်းဖြစ်ပါသည်−

(က)စားနပ်ရိက္ခာဖူလုံမှု​၊ အာဟာရပြည့်ဝရေးနှင့်အစားအစာဘေးအန္တရာယ်ကင်းရှင်းမှုတိုးတက်စေ ရေး။

(ခ) ပြောင်းလဲလာသော ဈေးကွက်နှင့်အညီ ဒေသအလိုက် ရေမြေ၊ ရာသီဥတုတို့နှင့်ကိုက်ညီသည့် အမယ်စုံလင်သော လယ်ယာ၊ သားငါးထွက်ကုန်များ ထုတ်လုပ်မှုပုံစံ တိုးမြင့်လာစေရေး။

(ဂ) စျေးကွက်လိုအပ်ချက်နှင့်အညီလယ်ယာသားငါးထုတ်ကုန်များ၏ အရည်အသွေးနှင့် စံချိန်စံညွှန်းများပြည့်မီစေရေး။

(ဃ)လယ်ယာထွက်ကုန် ဈေးကွက်နှင့် ဈေးနှုန်းသတင်းအချက်အလက် ဖြန့်ဝေမှု လုပ်ငန်းများ ဖွံ့ဖြိုးတိုးတက်လာစေရေး။

(င)တိရစ္ဆာန်နှင့်အပင်ပိုးမွှားရောဂါဆိုင်ရာအန္တရာယ်ကင်းရှင်းရေး၊ စိုက်ပျိုးမွေးမြူထုတ်လုပ်မှု အလေ့အကျင့်ကောင်းများဖွံ့ဖြိုးတိုးတက်လာစေရေး။

(စ)လယ်ယာကဏ္ဍစဉ်ဆက်မပြတ်ဖွံ့ဖြိုးတိုးတက်စေရေး အတွက်စိုက်ပျိုးမွေးမြူထုတ်လုပ်သ ူအစုအဖွဲ့များ၊သမဝါယမအသင်းများပေါ်ထွန်းလာစေရေး။

(ဆ)မျိုးစေ့ကဏ္ဍဖွံ့ဖြိုးတိုးတက်စေရေးနှင့် သားငါးမျိုးကောင်းမျိုးသနှင့်မွေးမြူထုတ်လုပ် ဖြန့်ဖြူးမှုဖွံ့ဖြိုးတိုးတက်စေရေး၊ဒေသမျိုးရင်းများထိန်းသိမ်းရေးနှင့်မှတ်တမ်းထားရှိရေး။

(ဇ)လယ်ယာအခြေခံစက်မှုလုပ်ငန်းများ၊အသေးစားစက်မှုလက်မှုလုပ်ငန်းများ၊ ရက်ကန်း လုပ်ငန်းများ၊ ပန်း(၁၀)မျိုးအပါအဝင်ရိုးရာလက်မှုလုပ်ငန်းများ၊ အသက်မွေးဝမ်းကျောင်း လုပ်ငန်းများနှင့်ကျေးလက်အခြေခံအဆောက်အအုံများဖွံ့ဖြိုးတိုးတက်စေရေး။

(ဈ)သုတေသနနှင့်ပညာပေးလုပ်ငန်းများဖွံ့ဖြိုးတိုးတက်စေရေး၊ လူ့စွမ်းအားအရင်းအမြစ်ဖွံ့ဖြိုး တိုးတက်စေရေး။

ရည်မှန်းချက်များ
၇။ရည်မှန်းချက်များမှာ အောက်ပါအတိုင်းဖြစ်ပါသည်−

(က)စားနပ်ရိက္ခာဖူလုံရေး၊အာဟာရပြည့်ဝရေးနှင့်အစားအစာ ဘေးအန္တရာယ်ကင်းရှင်းရေး တိုးတက်လာစေရန်။

(ခ)တောင်သူလယ်သမားများ၏အခွင့်အရေး ပြည့်ဝစွာရရှိခံစားနိုင်စေရန်နှင့် အကျိုးစီးပွား မြင့်မားလာစေရန်။

(ဂ)လုပ်ကွက်ငယ်တောင်သူလယ်သမားများ၊တစ်ပိုင်တစ်နိုင် မွေးမြူသူများနှင့်ရေလုပ်သားများ ကိုအခြေခံ၍အစုအဖွဲ့များ၊သမဝါယမအသင်းများဖွဲ့စည်းပြီးအတွေးသစ်အမြင်သစ်များဖြင့်စိုက်ပျိုးမွေးမြူရေးလုပ်ငန်းများကိုခေတ်မီဖွံ့ဖြိုးတိုးတက်လာစေရန်နှင့်ယင်းလုပ်ငန်းများတွင်အမျိုးသမီးများ၏အခန်းကဏ္ဍကိုပိုမိုမြှင့်တင်ရန်။

(ဃ)လယ်ယာကုန်ထုတ်လမ်းများ၊ကျေးရွာအခြေခံအဆောက်အအုံများ၊မြေယာ အသုံးချမှု အစီအမံများရေးဆွဲဆောင်ရွက်ခြင်းနှင့်အသေးစားစက်မှုလက်မှုကုန်ထုတ်လုပ်ငန်းများတည်ထောင်ပေးခြင်းတို့ဖြင့်ကျေးလက်ဒေသများစဉ်ဆက်မပြတ်ဖွံ့ဖြိုးတိုးတက်စေပြီးတောင်သူလယ်သမားများ၏လူမှုစီးပွားဘဝတိုးတက်မြင့်မားလာစေရန်။

(င)စိုက်ပျိုးမွေးမြူရေးလုပ်ငန်းများနှင့်သမဝါယမလုပ်ငန်းများပိုမိုဖွံ့ဖြိုးတိုးတက် လာစေရန် လိုအပ်သောနည်းပညာနှင့်ငွေကြေးအရင်းအနှီးများအတွက် ပြည်တွင်းပြည်ပမှအကူအညီ၊အထောက်အပံ့နှင့်ချေးငွေများရရှိရေးကူညီဆောင်ရွက်ပေးရန်။

(စ)လယ်ယာကဏ္ဍတွင် ပြည်တွင်းပြည်ပရင်းနှီးမြှုပ်နှံမှုများ တိုးတက်လာစေရေး အားပေးဆောင်ရွက်ရန်။

(ဆ)ပြည်ပဈေးကွက်ဝင် အရည်အသွေးမြင့် လယ်ယာ၊ သားငါး ထုတ်ကုန်များတိုးမြှင့် ထုတ်လုပ်နိုင်ရေး အားပေးဆောင်ရွက်ရန်။

(ဇ)လယ်ယာအခြေခံစက်မှုလုပ်ငန်းများ၊ အသေးစား စက်မှုလက်မှုလုပ်ငန်းများ၊ ရက်ကန်းလုပ်ငန်းများ၊ ပန်း(၁၀)မျိုးအပါအဝင်ရိုးရာလက်မှုလုပ်ငန်းများနှင့် အသက်မွေးဝမ်းကျောင်းလုပ်ငန်းများ ဖွံ့ဖြိုးတိုးတက်လာစေရေး အားပေးဆောင်ရွက်ရန်။

(ဈ)သမဝါယမလုပ်ငန်းများနှင့်သမဝါယမစနစ်ပိုမိုအောင်မြင်စေရေးဆောင်ရွက်ရန်။

(ည)တန်ဖိုးကွင်းဆက်တစ်ခုလုံးဖွံ့ဖြိုးတိုးတက်ရေးအတွက်ထုတ်လုပ်မှု၊ဝန်ဆောင်မှု၊ကုန်သွယ်မှုနှင့်စားသုံးမှုကဏ္ဍများကိုထိရောက်စွာချိတ်ဆက်ဆောင်ရွက်သွားရန်။

(ဋ)ဆင်းရဲနွမ်းပါးမှုလျှော့ချရေး၊ ရေရှည်တည်တံ့သောလယ်ယာကဏ္ဍဖွံ့ဖြိုးတိုးတက်ရေးနှင့် ကျေးလက်ဒေသဖွံ့ဖြိုးရေးလုပ်ငန်းများတွင်သက်ဆိုင်ရာကဏ္ဍအသီးသီးမှအစိုးရအဖွဲ့အစည်းများအချင်းချင်းပူးပေါင်းဆောင်ရွက်ခြင်း၊အစိုးရနှင့်ပုဂ္ဂလိကအဖွဲ့အစည်းများပူးပေါင်းဆောင်ရွက်ခြင်းအပါအဝင်သက်ဆိုင်သူများအားလုံးပူးပေါင်းပါဝင်ဆောင်ရွက်သွားရန်။

မူဝါဒများ
၈။လယ်ယာကဏ္ဍမူဝါဒသည် ပြည်သူလူထုအားလုံး စားနပ်ရိက္ခာနှင့် အာဟာရဖူလုံမှုရရှိစေရေး၊ လုပ်ကွက်ငယ် တောင်သူလယ်သမားများအနေဖြင့် ထုတ်လုပ်နိုင်မှု စွမ်းအားမြင့်မားပြီး ဈေးကွက်၏ လိုအပ်ချက်နှင့်အညီ ထုတ်ကုန်ပစ္စည်း အမယ်စုံအောင် ထုတ်လုပ်ပေးနိုင်ခြင်းဖြင့် ဝင်ငွေမြင့်မားလာစေရေးနှင့် ပုဂ္ဂလိက လယ်ယာစီးပွားရေးလုပ်ငန်းကဏ္ဍ၏ နိုင်ငံတကာနှင့် ယှဉ်ပြိုင်နိုင်ပြီး ပြည်ပပို့ကုန်တိုးမြင့် တင်ပို့နိုင်ရေးတို့ကို ဖြည့်ဆည်းပေးရန်ဖြစ်ပါသည်။

၉။ မူဝါဒများသည် လယ်ယာကဏ္ဍတွင် ပါဝင်သည့် ထုတ်လုပ်သူများ၊ စီးပွားရေးလုပ်ငန်း ဆောင်ရွက်သူများ၊ စားသုံးသူများအားလုံးအတွက် အထောက်အကူဖြစ်စေမည့် ဥပဒေ မူဘောင်ဆိုင်ရာဝန်းကျင်ကောင်းများ ဖန်တီးပေးခြင်းနှင့်အတူ အခြေခံ အဆောက်အအုံများ၊ ဝန်ဆောင်မှုများနှင့် ပြည်တွင်းပြည်ပ ရင်းနှီးမြှပ်နှံမှုများပေါ်ထွန်းရရှိစေရေးဖြည့်ဆည်းပေးရန် ဖြစ်ပါသည်။ ရေ၊ မြေနှင့် သဘာဝသယံဇာတအရင်းအမြစ်များကို ဖော်ထုတ်သုံးစွဲရာတွင် အများပါဝင်မှု၊ အန္တရာယ်ကင်းရှင်းမှုရှိစေပြီး ထိရောက်စွာနှင့် ရေရှည်တည်တံ့စွာ စီမံခန့်ခွဲ အသုံးချနိုင်ရန်ဖြစ်ပါသည်။

၁၀။ မူဝါဒများမှာ အောက်ပါအတိုင်း ဖြစ်ပါသည်-

(က) မြေယာအသုံးချမှုနှင့် စီမံခန့်ခွဲမှုဆိုင်ရာ မူဝါဒ

(ခ ) ရေအရင်းအမြစ် အသုံးချမှုနှင့် စီမံခန့်ခွဲမှုဆိုင်ရာ မူဝါဒ

(ဂ )  ငွေကြေးအရင်းအနှီးဆိုင်ရာ မူဝါဒ

(ဃ) စက်မှုလယ်ယာ နှင့် သွင်းအားစုများ ဆိုင်ရာ မူဝါဒ

(င ) သမဝါယမလုပ်ငန်းများနှင့် သမဝါယမစနစ်ဖွံ့ဖြိုးရေးဆိုင်ရာ မူဝါဒ (စ) ကျေးလက်အခြေခံအဆောက်အအုံဖွံ့ဖြိုးရေးဆိုင်ရာ မူဝါဒ

(ဆ) သုတေသန၊ ဖွံ့ဖြိုးမှုနှင့် နည်းပညာ ဖြန့်ဖြူးခြင်းဆိုင်ရာ မူဝါဒ

(ဇ ) ဈေးကွက်၊ တန်ဖိုးမြှင့်ကုန်ထုတ်လုပ်ခြင်းနှင့် ပြည်ပတင်ပို့ ရောင်းချခြင်းဆိုင်ရာမူဝါဒ

(ဈ ) အုပ်ချုပ်မှု၊ အဖွဲ့အစည်းများနှင့် လူ့စွမ်းအားအရင်းအမြစ် ဖွံ့ဖြိုးတိုးတက်ရေးဆိုင်ရာ မူဝါဒ

(ည) သဘာဝပတ်ဝန်းကျင်ထိန်းသိမ်းရေးနှင့် ရာသီဥတုပြောင်းလဲမှုတုံ့ပြန်ဆောင်ရွက်ရေးဆိုင်ရာ မူဝါဒ',
            'en_name'=>'Current landscape of agriculture sector in Myanmar',
            'en_description'=>'About 70% of the population in Myanmar resides in rural area and agriculture is their main livelihood. While the agriculture sector contributes 30% of national GDP, both the benefits that are gained from farming as well as the socio-economic status of farmers are extremely low.

Furthermore, farmers’ the socioeconomic status has been adversely affected by the effects of climate change, and natural and man made disasters. In particular, the unpredictable weather changes that have taken place almost annually in the wake of Cyclone Nargis in 2008 have led to tremendous crop damage and losses in the agriculture sector. At the same time, the failure to take effective actions on existing forest and soil conservation measures have exacerbated the soil quality and fertility. As a consequence, most farmers have not been able to break out of the economic down town they have experienced from chronically low productivity, low income, and rising indebtedness. In order to uplift the socio-economic condition of farmers and improve the performance of the agriculture sector, the Ministry of Agriculture, Livestock and Irrigation (MOALI) has made it a priority to support the development of the national economy through effective implementation of a proactive portfolio far reaching policies and strategic thrusts.

The aim of these new policies and strategic thrusts, referred to as Agriculture Policy 2016, is to create the enabling environment that will promote the production of a greater and more diversified range of high value agricultural, livestock, and fishery products. A major intention of Agriculture Policy 2016 is to take advantage of the comparative advantage that Myanmar has in the production of these high value products that are in increasing demand in both domestic and international markets.

Vision
The vision of Agriculture Policy 2016 is:

An inclusive, competitive, food and nutrition secured and sustainable agricultural system contributing to the socio-economic well being of farmers and rural people and further development of the national economy.

Mission
The Mission of Agriculture Policy 2016 is:

To enable rural population and agribusiness enterprises that sustain themselves from the production and sales of diverse, safe and nutritious foods, and agricultural products to have access to innovative and sustainable production, processing, packaging, logistics, and marketing technologies to meet the growing domestic and global demands.

Goal
The followings are the goals of the Ministry.

Improve food security, food safety, and nutritional status of agricultural products of the people of Myanmar.

Enhance agricultural diversification programmes in compliance with the changing market and the prevailing agro-climatic condition of the area.

Satisfy the specified quality requirements and standard of agricultural, livestock and fishery products as dictated by the market.

Improve the dissemination of market and price information.

Prevent the incidence and spread of pests and diseases in crops and livestock by wide spread use of IPM measures of a preventative nature and through development and adoption of Good Agriculture Practices - GAP, Good Animal Husbandry Practices - GAHP and Good Aquaculture Practices –GaqP.

Support the formation of crops, livestock, and fisheries producer groups and cooperative societies that aim in sustaining the development of agriculture sector.

Develop the seed industry and highly performing pure animal breeds and fish species, and conserve native breeds and species.

Develop and enhance agro-based industries, small scale industries, and cottage industries traditional weaving and handicraft and the vocational education, and rural infrastructure that is needed to support the development of these industries.

Improve and enhance research, the extension service, and human resource programmes.

Objectives
The followings are the Objectives of the Ministry.

To ensure food and nutrition security and food safety.

To safeguard the rights of the farmers and to enhance their welfare and livelihood.

To advance and upgrade the agricultural sector by organizing farmers’ associations and cooperatives inclusive of small holders and subsistence farmers with promotion of gender role.

To attain sustainable rural development and to upgrade socio-economic conditions of rural people and farmers by improving rural infrastructure, enhancing access to markets, establishing small scale enterprises and designing participatory land use plans and management.

To seek technical assistance and mobilize the financial resources from local and international agencies in support of crops, livestock, fisheries and rural development in the agriculture sector.

To promote domestic and foreign direct investment in agriculture sector.

To promote competitiveness and value-added production of exportable agricultural commodities.

To encourage the development of agro-based industry, small scale enterprises, cottage industries, and income generation activities, including ten traditional artworks and crafts.

To improve the livelihood and income generation of the rural people through the development of agricultural cooperative enterprises and the cooperative system.

To develop effective linkages of production, trading, processing, services and consumer segments along the value chains of agricultural commodities.

To improve coordination mechanism of inter-governmental agencies, to foster public-private partnership and to establish collaboration and connectivity among all stakeholders including public agencies, academia, farmers’ associations, civil societies, and private sector with a view to enhancing rural development and reducing poverty .

Policies
Myanmar’s agricultural policy is to improve food and nutrition security and food safety for all the people and to enable smallholder farmers to increase their incomes through higher productivity and diversified production in response to market demand, as well as to enhance exports through and internationally competitive private agri-business sector.

These policies will provide consumers, producers, and businesses in the agricultural sector with a supportive legal and regulatory environment along with essential public investment, infrastructure and services as well as the mobilization of domestic and foreign investments. Specific policies to develop and utilize land, water and other natural resources in an inclusive, competitive, efficient, safe and sustainable manner can be organized into three categories: governance of land, water and other natural resources: access to inputs and technology for production: and value-added processing, marketing and export.

Policies related to agriculture sector of Myanmar are as follows:
Land Use and Management Policy.

Water Use and Management Policy.

Agricultural financing Policy.

Agricultural Mechanization and Input Sector Policy.

Cooperative Societies and Cooperative System Development Policy

Rural Infrastructure Development Policy.

Research, Development and Extension Policy.

Marketing, Value-added Processing and Export Policy.

Governance, Institutional and Human Resource Development Policy.

Environmental Conservation and Climate Change Resilience Policy.

Land Use and Management Policy

Land Use and Management Policy.
All farmers who produce crop, livestock and fish can access land in accordance with the existing Farm Land Laws, and also transfer, sell, mortgage, lend, exchange, give away, or inherit their land right including tilling and other land use.

To capture both fresh and brackish water fishery and produce fish systematically in accordance with the Laws.

To establish Special Zones for the production of agriculture, livestock and fishery products so as to improve productivity.

Arrangement will be made available for farmers’ freedom of choice to undertake any farming activities in accordance with Laws (agriculture, livestock, fishery sectors) that are economically viable, in the farm land which is granted to till and use.

Formation of groups of farmers, including crops and livestock, and fisherman, will be encouraged and supported and aimed to work within the Land Consolidation and Land Use Management system in the transformation to a larger scale farm parcels.

Assistance will be provided to those who are interested in farming activities, in particular, small holder farmers and farm labors, who are landless and have extremely limited financial resources will have the rights of tilling the land that they have cleared or developed as new farm land.

Development of new farm land will be undertaken in accordance with the National Land Use Policy.'
        ]);
        \App\News::create([
            'image'=>'/images/news/default.jpg',
            'my_name'=>'မြန်မာ့လယ်ယာကဏ္ဍအခြေအနေ',
            'my_description'=>'၁။မြန်မာနိုင်ငံလူဦးရေ၏၇၀%သည် ကျေးလက်ဒေသတွင်နေထိုင်လျက်ရှိကြပြီး အများစု၏ အဓိကစီးပွားရေးလုပ်ငန်းမှာ လယ်ယာလုပ်ငန်းဖြစ်ပါသည်။ တစ်မျိုးသားလုံး၏ ပြည်တွင်းအသားတင်ထုတ်လုပ်မှုနှင့် ဝန်ဆောင်မှုတန်ဘိုး (GDP) ၏၃၀% ခန့်ကိုလယ်ယာကဏ္ဍမှရရှိသော်လည်း တောင်သူလယ်သမားအများစု၏ လယ်ယာမြေနှင့်ပတ်သက်သော အကျိုးခံစားခွင့်အလွန်နည်းပါးလှပြီး ၎င်းတို့၏လူမှုစီးပွားဘဝသည်နိမ့်ကျလျက်ရှိပါသည်။

၂။ထို့အပြင်ရာသီဥတုပြောင်းလဲမှု၊သဘာဝဘေးနှင့် အခြားသောဘေးအန္တရာယ်များကျရောက်မှုတို့ကြောင့် တောင်သူလယ်သမားအများစု၏ လူမှုစီးပွားဘဝကိုပိုမိုထိခိုက်စေပါသည်။ အထူးသဖြင့်၂၀၀၈ခုနှစ်၊ နာဂစ်မုန်တိုင်းနောက်ပိုင်းတွင် နှစ်စဉ်လိုလိုရာသီဥတုဖောက်ပြန်လာခဲ့ရာလယ်ယာကဏ္ဍတွင် ထိခိုက်နစ်နာဆုံးရှုံးမှုများပေါ်ပေါက်ခဲ့ရပါသည်။ သစ်တောပြုန်းတီးခြင်းကိုကာကွယ်ထိန်းသိမ်းမှုနှင့် မြေဆီလွှာထိန်းသိမ်းမှုလုပ်ငန်းများကို စနစ်တကျထိရောက်စွာဆောင်ရွက်မှုအားနည်းခဲ့ခြင်းတို့ကြောင့် မြေဆီလွှာအရည်အသွေးကျဆင်းပျက်စီးလာလျက်ရှိပါသည်။ အကျိုးဆက်အနေဖြင့်တောင်သူလယ်သမားအများစုမှာ ဝင်ငွေနိမ့်ကျပြီးအကြွေးသံသရာမှ ရုန်းမထွက်နိုင်သည့်အပြင်အကြောင်းအမျိုးမျိုးဖြင့် ၎င်းတို့လုပ်ကိုင်သောလယ်ယာမြေများကို လက်လွှတ်ခဲ့ရခြင်းကြောင့် လယ်မဲ့ယာမဲ့များဘဝသို့ရောက်ခဲ့ရပြီး လူမှုစီးပွားဘဝအခြေအနေများကိုပိုမိုထိခိုက်စေခဲ့ပါသည်။ သို့ဖြစ်ပါ၍တောင်သူလယ်သမားတို့၏ လူမှုစီးပွားဘဝအခြေအနေမြင့်မားတိုးတက်လာစေရန်နှင့် လယ်ယာကဏ္ဍ ဖွံ့ဖြိုးတိုးတက်လာစေရန် ဝန်ကြီးဌာန၏မူဝါဒများနှင့်လုပ်ငန်းစဉ်များကို ခိုင်ခိုင်မာမာရေးဆွဲချမှတ်အကောင်အထည်ဖော်ခြင်းဖြင့် နိုင်ငံတော်၏စီးပွားရေးဖွံ့ဖြိုးတိုးတက်မှုကိုအထောက်အကူပြုနိုင်ရန်ကြိုးပမ်းဆောင်ရွက်ရမည်ဖြစ်ပါသည်။

၃။လယ်ယာကဏ္ဍမူဝါဒအသစ်တွင်မြန်မာနိုင်ငံ၏ လယ်ယာကဏ္ဍရှိအခွင့်အလမ်းကောင်းများကို ဖေါ်ထုတ်ပေးလိုက်ခြင်းဖြင့်လျင်မြန်စွာတိုးတက်လာနေသော ပြည်တွင်းပြည်ပဈေးကွက်ရှိစားသုံးသူများ၏ လိုအပ်ချက်များဖြစ်သောအဆင့်အတန်းမြင့်လယ်ယာနှင့်သားငါးထွက်ကုန်များကို အမျိုးအမယ်စုံလင်စွာဖြည့်ဆည်းပေးရန် ရည်ရွယ်ပါသည်။ ယင်းသို့သောမူဝါဒအရစိုက်ပျိုးမွေးမြူရေးနှင့်ထုတ်လုပ်ရေးလုပ်ငန်းများကိုပိုမိုကျယ်ပြန့်လာစေခြင်း၊ ထုတ်လုပ်မှုစွမ်းအားမြင့်မားလာခြင်းနှင့်အတူ လုပ်ကွက်ငယ်တောင်သူလယ်သမား၏ဝင်ငွေပါတိုးတက်လာစေခြင်း၊ စားသုံးသူများအတွက်ဘေးအန္တရာယ်ကင်း၍ အာဟာရပြည့်ဝသောစားနပ်ရိက္ခာများထုတ်လုပ်နိုင်ခြင်း၊လယ်ယာစီးပွားရေးလုပ်ငန်းများဖွံ့ဖြိုးလာခြင်းနှင့်အတူနိုင်ငံတကာဈေးကွက်နှင့် ချိတ်ဆက်၍ လယ်ယာထုတ်ကုန်များကို  ပြည်ပသို့ ပိုမိုတင်ပို့နိုင်ခြင်း၊ ကျေးလက်ဒေသလူမှုစီးပွားဘဝတိုးတက်လာခြင်း၊ ဖွံ့ဖြိုးတိုးတက်မှု ရေရှည်တည်တံ့ခြင်းစသော  အကျိုးကျေးဇူးများရရှိဖြစ်ပေါ်လာစေနိုင်ပါသည်။

မျှော်မှန်းချက်
၄။အားလုံးပါဝင်ပြီး နိုင်ငံတကာနှင့် ယှဉ်ပြိုင်နိုင်စွမ်းရှိသည့် ရေရှည်တည်တံ့သော လယ်ယာကုန်ထုတ်မှုစနစ် ထွန်းကားစေခြင်းဖြင့် စားနပ်ရိက္ခာဖူလုံ၍ အာဟာရပြည့်ဝစေပြီး ကျေးလက်နေပြည်သူများ၏ လူမှုစီးပွားဘဝမြင့်မားလာစေရန်နှင့် နိုင်ငံစီးပွားဖွံ့ဖြိုးတိုးတက်မှု ကို အထောက်အကူဖြစ်စေရန်။

လုပ်ငန်းတာဝန်များ
၅။ကျေးလက်နေ ပြည်သူများနှင့် လယ်ယာစီးပွားရေးလုပ်ငန်းများအား ခေတ်မီဆန်းသစ်၍ ရေရှည်တည်တံ့သောထုတ်လုပ်မှုနည်းပညာများ၊ ပြုပြင်ထုပ်ပိုး နည်းလမ်းများ၊ ထောက်ပံ့ပို့ဆောင်ရေး နည်းလမ်းများနှင့်ဈေးကွက်ဆိုင်ရာ နည်းပညာများကို အသုံးပြု၍ ကြီးထွားလာသောပြည်တွင်းပြည်ပဈေးကွက်ဝယ်လိုအားနှင့်အညီ ဘေးအန္တရာယ်ကင်းရှင်း၍အာဟာရပြည့်ဝသည့် အမယ်စုံလင်သောစားနပ်ရိက္ခာနှင့်စိုက်ပျိုးမွေးမြူရေးထုတ်ကုန်ပစ္စည်းများ တိုးတက်ထုတ်လုပ်ရာတွင် အထောက်အကူပြုနိုင်ရေး ဆောင်ရွက်ရန်။

ပန်းတိုင်
၆။ပန်းတိုင်မှာအောက်ပါအတိုင်းဖြစ်ပါသည်−

(က)စားနပ်ရိက္ခာဖူလုံမှု​၊ အာဟာရပြည့်ဝရေးနှင့်အစားအစာဘေးအန္တရာယ်ကင်းရှင်းမှုတိုးတက်စေ ရေး။

(ခ) ပြောင်းလဲလာသော ဈေးကွက်နှင့်အညီ ဒေသအလိုက် ရေမြေ၊ ရာသီဥတုတို့နှင့်ကိုက်ညီသည့် အမယ်စုံလင်သော လယ်ယာ၊ သားငါးထွက်ကုန်များ ထုတ်လုပ်မှုပုံစံ တိုးမြင့်လာစေရေး။

(ဂ) စျေးကွက်လိုအပ်ချက်နှင့်အညီလယ်ယာသားငါးထုတ်ကုန်များ၏ အရည်အသွေးနှင့် စံချိန်စံညွှန်းများပြည့်မီစေရေး။

(ဃ)လယ်ယာထွက်ကုန် ဈေးကွက်နှင့် ဈေးနှုန်းသတင်းအချက်အလက် ဖြန့်ဝေမှု လုပ်ငန်းများ ဖွံ့ဖြိုးတိုးတက်လာစေရေး။

(င)တိရစ္ဆာန်နှင့်အပင်ပိုးမွှားရောဂါဆိုင်ရာအန္တရာယ်ကင်းရှင်းရေး၊ စိုက်ပျိုးမွေးမြူထုတ်လုပ်မှု အလေ့အကျင့်ကောင်းများဖွံ့ဖြိုးတိုးတက်လာစေရေး။

(စ)လယ်ယာကဏ္ဍစဉ်ဆက်မပြတ်ဖွံ့ဖြိုးတိုးတက်စေရေး အတွက်စိုက်ပျိုးမွေးမြူထုတ်လုပ်သ ူအစုအဖွဲ့များ၊သမဝါယမအသင်းများပေါ်ထွန်းလာစေရေး။

(ဆ)မျိုးစေ့ကဏ္ဍဖွံ့ဖြိုးတိုးတက်စေရေးနှင့် သားငါးမျိုးကောင်းမျိုးသနှင့်မွေးမြူထုတ်လုပ် ဖြန့်ဖြူးမှုဖွံ့ဖြိုးတိုးတက်စေရေး၊ဒေသမျိုးရင်းများထိန်းသိမ်းရေးနှင့်မှတ်တမ်းထားရှိရေး။

(ဇ)လယ်ယာအခြေခံစက်မှုလုပ်ငန်းများ၊အသေးစားစက်မှုလက်မှုလုပ်ငန်းများ၊ ရက်ကန်း လုပ်ငန်းများ၊ ပန်း(၁၀)မျိုးအပါအဝင်ရိုးရာလက်မှုလုပ်ငန်းများ၊ အသက်မွေးဝမ်းကျောင်း လုပ်ငန်းများနှင့်ကျေးလက်အခြေခံအဆောက်အအုံများဖွံ့ဖြိုးတိုးတက်စေရေး။

(ဈ)သုတေသနနှင့်ပညာပေးလုပ်ငန်းများဖွံ့ဖြိုးတိုးတက်စေရေး၊ လူ့စွမ်းအားအရင်းအမြစ်ဖွံ့ဖြိုး တိုးတက်စေရေး။

ရည်မှန်းချက်များ
၇။ရည်မှန်းချက်များမှာ အောက်ပါအတိုင်းဖြစ်ပါသည်−

(က)စားနပ်ရိက္ခာဖူလုံရေး၊အာဟာရပြည့်ဝရေးနှင့်အစားအစာ ဘေးအန္တရာယ်ကင်းရှင်းရေး တိုးတက်လာစေရန်။

(ခ)တောင်သူလယ်သမားများ၏အခွင့်အရေး ပြည့်ဝစွာရရှိခံစားနိုင်စေရန်နှင့် အကျိုးစီးပွား မြင့်မားလာစေရန်။

(ဂ)လုပ်ကွက်ငယ်တောင်သူလယ်သမားများ၊တစ်ပိုင်တစ်နိုင် မွေးမြူသူများနှင့်ရေလုပ်သားများ ကိုအခြေခံ၍အစုအဖွဲ့များ၊သမဝါယမအသင်းများဖွဲ့စည်းပြီးအတွေးသစ်အမြင်သစ်များဖြင့်စိုက်ပျိုးမွေးမြူရေးလုပ်ငန်းများကိုခေတ်မီဖွံ့ဖြိုးတိုးတက်လာစေရန်နှင့်ယင်းလုပ်ငန်းများတွင်အမျိုးသမီးများ၏အခန်းကဏ္ဍကိုပိုမိုမြှင့်တင်ရန်။

(ဃ)လယ်ယာကုန်ထုတ်လမ်းများ၊ကျေးရွာအခြေခံအဆောက်အအုံများ၊မြေယာ အသုံးချမှု အစီအမံများရေးဆွဲဆောင်ရွက်ခြင်းနှင့်အသေးစားစက်မှုလက်မှုကုန်ထုတ်လုပ်ငန်းများတည်ထောင်ပေးခြင်းတို့ဖြင့်ကျေးလက်ဒေသများစဉ်ဆက်မပြတ်ဖွံ့ဖြိုးတိုးတက်စေပြီးတောင်သူလယ်သမားများ၏လူမှုစီးပွားဘဝတိုးတက်မြင့်မားလာစေရန်။

(င)စိုက်ပျိုးမွေးမြူရေးလုပ်ငန်းများနှင့်သမဝါယမလုပ်ငန်းများပိုမိုဖွံ့ဖြိုးတိုးတက် လာစေရန် လိုအပ်သောနည်းပညာနှင့်ငွေကြေးအရင်းအနှီးများအတွက် ပြည်တွင်းပြည်ပမှအကူအညီ၊အထောက်အပံ့နှင့်ချေးငွေများရရှိရေးကူညီဆောင်ရွက်ပေးရန်။

(စ)လယ်ယာကဏ္ဍတွင် ပြည်တွင်းပြည်ပရင်းနှီးမြှုပ်နှံမှုများ တိုးတက်လာစေရေး အားပေးဆောင်ရွက်ရန်။

(ဆ)ပြည်ပဈေးကွက်ဝင် အရည်အသွေးမြင့် လယ်ယာ၊ သားငါး ထုတ်ကုန်များတိုးမြှင့် ထုတ်လုပ်နိုင်ရေး အားပေးဆောင်ရွက်ရန်။

(ဇ)လယ်ယာအခြေခံစက်မှုလုပ်ငန်းများ၊ အသေးစား စက်မှုလက်မှုလုပ်ငန်းများ၊ ရက်ကန်းလုပ်ငန်းများ၊ ပန်း(၁၀)မျိုးအပါအဝင်ရိုးရာလက်မှုလုပ်ငန်းများနှင့် အသက်မွေးဝမ်းကျောင်းလုပ်ငန်းများ ဖွံ့ဖြိုးတိုးတက်လာစေရေး အားပေးဆောင်ရွက်ရန်။

(ဈ)သမဝါယမလုပ်ငန်းများနှင့်သမဝါယမစနစ်ပိုမိုအောင်မြင်စေရေးဆောင်ရွက်ရန်။

(ည)တန်ဖိုးကွင်းဆက်တစ်ခုလုံးဖွံ့ဖြိုးတိုးတက်ရေးအတွက်ထုတ်လုပ်မှု၊ဝန်ဆောင်မှု၊ကုန်သွယ်မှုနှင့်စားသုံးမှုကဏ္ဍများကိုထိရောက်စွာချိတ်ဆက်ဆောင်ရွက်သွားရန်။

(ဋ)ဆင်းရဲနွမ်းပါးမှုလျှော့ချရေး၊ ရေရှည်တည်တံ့သောလယ်ယာကဏ္ဍဖွံ့ဖြိုးတိုးတက်ရေးနှင့် ကျေးလက်ဒေသဖွံ့ဖြိုးရေးလုပ်ငန်းများတွင်သက်ဆိုင်ရာကဏ္ဍအသီးသီးမှအစိုးရအဖွဲ့အစည်းများအချင်းချင်းပူးပေါင်းဆောင်ရွက်ခြင်း၊အစိုးရနှင့်ပုဂ္ဂလိကအဖွဲ့အစည်းများပူးပေါင်းဆောင်ရွက်ခြင်းအပါအဝင်သက်ဆိုင်သူများအားလုံးပူးပေါင်းပါဝင်ဆောင်ရွက်သွားရန်။

မူဝါဒများ
၈။လယ်ယာကဏ္ဍမူဝါဒသည် ပြည်သူလူထုအားလုံး စားနပ်ရိက္ခာနှင့် အာဟာရဖူလုံမှုရရှိစေရေး၊ လုပ်ကွက်ငယ် တောင်သူလယ်သမားများအနေဖြင့် ထုတ်လုပ်နိုင်မှု စွမ်းအားမြင့်မားပြီး ဈေးကွက်၏ လိုအပ်ချက်နှင့်အညီ ထုတ်ကုန်ပစ္စည်း အမယ်စုံအောင် ထုတ်လုပ်ပေးနိုင်ခြင်းဖြင့် ဝင်ငွေမြင့်မားလာစေရေးနှင့် ပုဂ္ဂလိက လယ်ယာစီးပွားရေးလုပ်ငန်းကဏ္ဍ၏ နိုင်ငံတကာနှင့် ယှဉ်ပြိုင်နိုင်ပြီး ပြည်ပပို့ကုန်တိုးမြင့် တင်ပို့နိုင်ရေးတို့ကို ဖြည့်ဆည်းပေးရန်ဖြစ်ပါသည်။

၉။ မူဝါဒများသည် လယ်ယာကဏ္ဍတွင် ပါဝင်သည့် ထုတ်လုပ်သူများ၊ စီးပွားရေးလုပ်ငန်း ဆောင်ရွက်သူများ၊ စားသုံးသူများအားလုံးအတွက် အထောက်အကူဖြစ်စေမည့် ဥပဒေ မူဘောင်ဆိုင်ရာဝန်းကျင်ကောင်းများ ဖန်တီးပေးခြင်းနှင့်အတူ အခြေခံ အဆောက်အအုံများ၊ ဝန်ဆောင်မှုများနှင့် ပြည်တွင်းပြည်ပ ရင်းနှီးမြှပ်နှံမှုများပေါ်ထွန်းရရှိစေရေးဖြည့်ဆည်းပေးရန် ဖြစ်ပါသည်။ ရေ၊ မြေနှင့် သဘာဝသယံဇာတအရင်းအမြစ်များကို ဖော်ထုတ်သုံးစွဲရာတွင် အများပါဝင်မှု၊ အန္တရာယ်ကင်းရှင်းမှုရှိစေပြီး ထိရောက်စွာနှင့် ရေရှည်တည်တံ့စွာ စီမံခန့်ခွဲ အသုံးချနိုင်ရန်ဖြစ်ပါသည်။

၁၀။ မူဝါဒများမှာ အောက်ပါအတိုင်း ဖြစ်ပါသည်-

(က) မြေယာအသုံးချမှုနှင့် စီမံခန့်ခွဲမှုဆိုင်ရာ မူဝါဒ

(ခ ) ရေအရင်းအမြစ် အသုံးချမှုနှင့် စီမံခန့်ခွဲမှုဆိုင်ရာ မူဝါဒ

(ဂ )  ငွေကြေးအရင်းအနှီးဆိုင်ရာ မူဝါဒ

(ဃ) စက်မှုလယ်ယာ နှင့် သွင်းအားစုများ ဆိုင်ရာ မူဝါဒ

(င ) သမဝါယမလုပ်ငန်းများနှင့် သမဝါယမစနစ်ဖွံ့ဖြိုးရေးဆိုင်ရာ မူဝါဒ (စ) ကျေးလက်အခြေခံအဆောက်အအုံဖွံ့ဖြိုးရေးဆိုင်ရာ မူဝါဒ

(ဆ) သုတေသန၊ ဖွံ့ဖြိုးမှုနှင့် နည်းပညာ ဖြန့်ဖြူးခြင်းဆိုင်ရာ မူဝါဒ

(ဇ ) ဈေးကွက်၊ တန်ဖိုးမြှင့်ကုန်ထုတ်လုပ်ခြင်းနှင့် ပြည်ပတင်ပို့ ရောင်းချခြင်းဆိုင်ရာမူဝါဒ

(ဈ ) အုပ်ချုပ်မှု၊ အဖွဲ့အစည်းများနှင့် လူ့စွမ်းအားအရင်းအမြစ် ဖွံ့ဖြိုးတိုးတက်ရေးဆိုင်ရာ မူဝါဒ

(ည) သဘာဝပတ်ဝန်းကျင်ထိန်းသိမ်းရေးနှင့် ရာသီဥတုပြောင်းလဲမှုတုံ့ပြန်ဆောင်ရွက်ရေးဆိုင်ရာ မူဝါဒ',
            'en_name'=>'Current landscape of agriculture sector in Myanmar',
            'en_description'=>'About 70% of the population in Myanmar resides in rural area and agriculture is their main livelihood. While the agriculture sector contributes 30% of national GDP, both the benefits that are gained from farming as well as the socio-economic status of farmers are extremely low.

Furthermore, farmers’ the socioeconomic status has been adversely affected by the effects of climate change, and natural and man made disasters. In particular, the unpredictable weather changes that have taken place almost annually in the wake of Cyclone Nargis in 2008 have led to tremendous crop damage and losses in the agriculture sector. At the same time, the failure to take effective actions on existing forest and soil conservation measures have exacerbated the soil quality and fertility. As a consequence, most farmers have not been able to break out of the economic down town they have experienced from chronically low productivity, low income, and rising indebtedness. In order to uplift the socio-economic condition of farmers and improve the performance of the agriculture sector, the Ministry of Agriculture, Livestock and Irrigation (MOALI) has made it a priority to support the development of the national economy through effective implementation of a proactive portfolio far reaching policies and strategic thrusts.

The aim of these new policies and strategic thrusts, referred to as Agriculture Policy 2016, is to create the enabling environment that will promote the production of a greater and more diversified range of high value agricultural, livestock, and fishery products. A major intention of Agriculture Policy 2016 is to take advantage of the comparative advantage that Myanmar has in the production of these high value products that are in increasing demand in both domestic and international markets.

Vision
The vision of Agriculture Policy 2016 is:

An inclusive, competitive, food and nutrition secured and sustainable agricultural system contributing to the socio-economic well being of farmers and rural people and further development of the national economy.

Mission
The Mission of Agriculture Policy 2016 is:

To enable rural population and agribusiness enterprises that sustain themselves from the production and sales of diverse, safe and nutritious foods, and agricultural products to have access to innovative and sustainable production, processing, packaging, logistics, and marketing technologies to meet the growing domestic and global demands.

Goal
The followings are the goals of the Ministry.

Improve food security, food safety, and nutritional status of agricultural products of the people of Myanmar.

Enhance agricultural diversification programmes in compliance with the changing market and the prevailing agro-climatic condition of the area.

Satisfy the specified quality requirements and standard of agricultural, livestock and fishery products as dictated by the market.

Improve the dissemination of market and price information.

Prevent the incidence and spread of pests and diseases in crops and livestock by wide spread use of IPM measures of a preventative nature and through development and adoption of Good Agriculture Practices - GAP, Good Animal Husbandry Practices - GAHP and Good Aquaculture Practices –GaqP.

Support the formation of crops, livestock, and fisheries producer groups and cooperative societies that aim in sustaining the development of agriculture sector.

Develop the seed industry and highly performing pure animal breeds and fish species, and conserve native breeds and species.

Develop and enhance agro-based industries, small scale industries, and cottage industries traditional weaving and handicraft and the vocational education, and rural infrastructure that is needed to support the development of these industries.

Improve and enhance research, the extension service, and human resource programmes.

Objectives
The followings are the Objectives of the Ministry.

To ensure food and nutrition security and food safety.

To safeguard the rights of the farmers and to enhance their welfare and livelihood.

To advance and upgrade the agricultural sector by organizing farmers’ associations and cooperatives inclusive of small holders and subsistence farmers with promotion of gender role.

To attain sustainable rural development and to upgrade socio-economic conditions of rural people and farmers by improving rural infrastructure, enhancing access to markets, establishing small scale enterprises and designing participatory land use plans and management.

To seek technical assistance and mobilize the financial resources from local and international agencies in support of crops, livestock, fisheries and rural development in the agriculture sector.

To promote domestic and foreign direct investment in agriculture sector.

To promote competitiveness and value-added production of exportable agricultural commodities.

To encourage the development of agro-based industry, small scale enterprises, cottage industries, and income generation activities, including ten traditional artworks and crafts.

To improve the livelihood and income generation of the rural people through the development of agricultural cooperative enterprises and the cooperative system.

To develop effective linkages of production, trading, processing, services and consumer segments along the value chains of agricultural commodities.

To improve coordination mechanism of inter-governmental agencies, to foster public-private partnership and to establish collaboration and connectivity among all stakeholders including public agencies, academia, farmers’ associations, civil societies, and private sector with a view to enhancing rural development and reducing poverty .

Policies
Myanmar’s agricultural policy is to improve food and nutrition security and food safety for all the people and to enable smallholder farmers to increase their incomes through higher productivity and diversified production in response to market demand, as well as to enhance exports through and internationally competitive private agri-business sector.

These policies will provide consumers, producers, and businesses in the agricultural sector with a supportive legal and regulatory environment along with essential public investment, infrastructure and services as well as the mobilization of domestic and foreign investments. Specific policies to develop and utilize land, water and other natural resources in an inclusive, competitive, efficient, safe and sustainable manner can be organized into three categories: governance of land, water and other natural resources: access to inputs and technology for production: and value-added processing, marketing and export.

Policies related to agriculture sector of Myanmar are as follows:
Land Use and Management Policy.

Water Use and Management Policy.

Agricultural financing Policy.

Agricultural Mechanization and Input Sector Policy.

Cooperative Societies and Cooperative System Development Policy

Rural Infrastructure Development Policy.

Research, Development and Extension Policy.

Marketing, Value-added Processing and Export Policy.

Governance, Institutional and Human Resource Development Policy.

Environmental Conservation and Climate Change Resilience Policy.

Land Use and Management Policy

Land Use and Management Policy.
All farmers who produce crop, livestock and fish can access land in accordance with the existing Farm Land Laws, and also transfer, sell, mortgage, lend, exchange, give away, or inherit their land right including tilling and other land use.

To capture both fresh and brackish water fishery and produce fish systematically in accordance with the Laws.

To establish Special Zones for the production of agriculture, livestock and fishery products so as to improve productivity.

Arrangement will be made available for farmers’ freedom of choice to undertake any farming activities in accordance with Laws (agriculture, livestock, fishery sectors) that are economically viable, in the farm land which is granted to till and use.

Formation of groups of farmers, including crops and livestock, and fisherman, will be encouraged and supported and aimed to work within the Land Consolidation and Land Use Management system in the transformation to a larger scale farm parcels.

Assistance will be provided to those who are interested in farming activities, in particular, small holder farmers and farm labors, who are landless and have extremely limited financial resources will have the rights of tilling the land that they have cleared or developed as new farm land.

Development of new farm land will be undertaken in accordance with the National Land Use Policy.'
        ]);
        \App\News::create([
            'image'=>'/images/news/default.jpg',
            'my_name'=>'မြန်မာ့လယ်ယာကဏ္ဍအခြေအနေ',
            'my_description'=>'၁။မြန်မာနိုင်ငံလူဦးရေ၏၇၀%သည် ကျေးလက်ဒေသတွင်နေထိုင်လျက်ရှိကြပြီး အများစု၏ အဓိကစီးပွားရေးလုပ်ငန်းမှာ လယ်ယာလုပ်ငန်းဖြစ်ပါသည်။ တစ်မျိုးသားလုံး၏ ပြည်တွင်းအသားတင်ထုတ်လုပ်မှုနှင့် ဝန်ဆောင်မှုတန်ဘိုး (GDP) ၏၃၀% ခန့်ကိုလယ်ယာကဏ္ဍမှရရှိသော်လည်း တောင်သူလယ်သမားအများစု၏ လယ်ယာမြေနှင့်ပတ်သက်သော အကျိုးခံစားခွင့်အလွန်နည်းပါးလှပြီး ၎င်းတို့၏လူမှုစီးပွားဘဝသည်နိမ့်ကျလျက်ရှိပါသည်။

၂။ထို့အပြင်ရာသီဥတုပြောင်းလဲမှု၊သဘာဝဘေးနှင့် အခြားသောဘေးအန္တရာယ်များကျရောက်မှုတို့ကြောင့် တောင်သူလယ်သမားအများစု၏ လူမှုစီးပွားဘဝကိုပိုမိုထိခိုက်စေပါသည်။ အထူးသဖြင့်၂၀၀၈ခုနှစ်၊ နာဂစ်မုန်တိုင်းနောက်ပိုင်းတွင် နှစ်စဉ်လိုလိုရာသီဥတုဖောက်ပြန်လာခဲ့ရာလယ်ယာကဏ္ဍတွင် ထိခိုက်နစ်နာဆုံးရှုံးမှုများပေါ်ပေါက်ခဲ့ရပါသည်။ သစ်တောပြုန်းတီးခြင်းကိုကာကွယ်ထိန်းသိမ်းမှုနှင့် မြေဆီလွှာထိန်းသိမ်းမှုလုပ်ငန်းများကို စနစ်တကျထိရောက်စွာဆောင်ရွက်မှုအားနည်းခဲ့ခြင်းတို့ကြောင့် မြေဆီလွှာအရည်အသွေးကျဆင်းပျက်စီးလာလျက်ရှိပါသည်။ အကျိုးဆက်အနေဖြင့်တောင်သူလယ်သမားအများစုမှာ ဝင်ငွေနိမ့်ကျပြီးအကြွေးသံသရာမှ ရုန်းမထွက်နိုင်သည့်အပြင်အကြောင်းအမျိုးမျိုးဖြင့် ၎င်းတို့လုပ်ကိုင်သောလယ်ယာမြေများကို လက်လွှတ်ခဲ့ရခြင်းကြောင့် လယ်မဲ့ယာမဲ့များဘဝသို့ရောက်ခဲ့ရပြီး လူမှုစီးပွားဘဝအခြေအနေများကိုပိုမိုထိခိုက်စေခဲ့ပါသည်။ သို့ဖြစ်ပါ၍တောင်သူလယ်သမားတို့၏ လူမှုစီးပွားဘဝအခြေအနေမြင့်မားတိုးတက်လာစေရန်နှင့် လယ်ယာကဏ္ဍ ဖွံ့ဖြိုးတိုးတက်လာစေရန် ဝန်ကြီးဌာန၏မူဝါဒများနှင့်လုပ်ငန်းစဉ်များကို ခိုင်ခိုင်မာမာရေးဆွဲချမှတ်အကောင်အထည်ဖော်ခြင်းဖြင့် နိုင်ငံတော်၏စီးပွားရေးဖွံ့ဖြိုးတိုးတက်မှုကိုအထောက်အကူပြုနိုင်ရန်ကြိုးပမ်းဆောင်ရွက်ရမည်ဖြစ်ပါသည်။

၃။လယ်ယာကဏ္ဍမူဝါဒအသစ်တွင်မြန်မာနိုင်ငံ၏ လယ်ယာကဏ္ဍရှိအခွင့်အလမ်းကောင်းများကို ဖေါ်ထုတ်ပေးလိုက်ခြင်းဖြင့်လျင်မြန်စွာတိုးတက်လာနေသော ပြည်တွင်းပြည်ပဈေးကွက်ရှိစားသုံးသူများ၏ လိုအပ်ချက်များဖြစ်သောအဆင့်အတန်းမြင့်လယ်ယာနှင့်သားငါးထွက်ကုန်များကို အမျိုးအမယ်စုံလင်စွာဖြည့်ဆည်းပေးရန် ရည်ရွယ်ပါသည်။ ယင်းသို့သောမူဝါဒအရစိုက်ပျိုးမွေးမြူရေးနှင့်ထုတ်လုပ်ရေးလုပ်ငန်းများကိုပိုမိုကျယ်ပြန့်လာစေခြင်း၊ ထုတ်လုပ်မှုစွမ်းအားမြင့်မားလာခြင်းနှင့်အတူ လုပ်ကွက်ငယ်တောင်သူလယ်သမား၏ဝင်ငွေပါတိုးတက်လာစေခြင်း၊ စားသုံးသူများအတွက်ဘေးအန္တရာယ်ကင်း၍ အာဟာရပြည့်ဝသောစားနပ်ရိက္ခာများထုတ်လုပ်နိုင်ခြင်း၊လယ်ယာစီးပွားရေးလုပ်ငန်းများဖွံ့ဖြိုးလာခြင်းနှင့်အတူနိုင်ငံတကာဈေးကွက်နှင့် ချိတ်ဆက်၍ လယ်ယာထုတ်ကုန်များကို  ပြည်ပသို့ ပိုမိုတင်ပို့နိုင်ခြင်း၊ ကျေးလက်ဒေသလူမှုစီးပွားဘဝတိုးတက်လာခြင်း၊ ဖွံ့ဖြိုးတိုးတက်မှု ရေရှည်တည်တံ့ခြင်းစသော  အကျိုးကျေးဇူးများရရှိဖြစ်ပေါ်လာစေနိုင်ပါသည်။

မျှော်မှန်းချက်
၄။အားလုံးပါဝင်ပြီး နိုင်ငံတကာနှင့် ယှဉ်ပြိုင်နိုင်စွမ်းရှိသည့် ရေရှည်တည်တံ့သော လယ်ယာကုန်ထုတ်မှုစနစ် ထွန်းကားစေခြင်းဖြင့် စားနပ်ရိက္ခာဖူလုံ၍ အာဟာရပြည့်ဝစေပြီး ကျေးလက်နေပြည်သူများ၏ လူမှုစီးပွားဘဝမြင့်မားလာစေရန်နှင့် နိုင်ငံစီးပွားဖွံ့ဖြိုးတိုးတက်မှု ကို အထောက်အကူဖြစ်စေရန်။

လုပ်ငန်းတာဝန်များ
၅။ကျေးလက်နေ ပြည်သူများနှင့် လယ်ယာစီးပွားရေးလုပ်ငန်းများအား ခေတ်မီဆန်းသစ်၍ ရေရှည်တည်တံ့သောထုတ်လုပ်မှုနည်းပညာများ၊ ပြုပြင်ထုပ်ပိုး နည်းလမ်းများ၊ ထောက်ပံ့ပို့ဆောင်ရေး နည်းလမ်းများနှင့်ဈေးကွက်ဆိုင်ရာ နည်းပညာများကို အသုံးပြု၍ ကြီးထွားလာသောပြည်တွင်းပြည်ပဈေးကွက်ဝယ်လိုအားနှင့်အညီ ဘေးအန္တရာယ်ကင်းရှင်း၍အာဟာရပြည့်ဝသည့် အမယ်စုံလင်သောစားနပ်ရိက္ခာနှင့်စိုက်ပျိုးမွေးမြူရေးထုတ်ကုန်ပစ္စည်းများ တိုးတက်ထုတ်လုပ်ရာတွင် အထောက်အကူပြုနိုင်ရေး ဆောင်ရွက်ရန်။

ပန်းတိုင်
၆။ပန်းတိုင်မှာအောက်ပါအတိုင်းဖြစ်ပါသည်−

(က)စားနပ်ရိက္ခာဖူလုံမှု​၊ အာဟာရပြည့်ဝရေးနှင့်အစားအစာဘေးအန္တရာယ်ကင်းရှင်းမှုတိုးတက်စေ ရေး။

(ခ) ပြောင်းလဲလာသော ဈေးကွက်နှင့်အညီ ဒေသအလိုက် ရေမြေ၊ ရာသီဥတုတို့နှင့်ကိုက်ညီသည့် အမယ်စုံလင်သော လယ်ယာ၊ သားငါးထွက်ကုန်များ ထုတ်လုပ်မှုပုံစံ တိုးမြင့်လာစေရေး။

(ဂ) စျေးကွက်လိုအပ်ချက်နှင့်အညီလယ်ယာသားငါးထုတ်ကုန်များ၏ အရည်အသွေးနှင့် စံချိန်စံညွှန်းများပြည့်မီစေရေး။

(ဃ)လယ်ယာထွက်ကုန် ဈေးကွက်နှင့် ဈေးနှုန်းသတင်းအချက်အလက် ဖြန့်ဝေမှု လုပ်ငန်းများ ဖွံ့ဖြိုးတိုးတက်လာစေရေး။

(င)တိရစ္ဆာန်နှင့်အပင်ပိုးမွှားရောဂါဆိုင်ရာအန္တရာယ်ကင်းရှင်းရေး၊ စိုက်ပျိုးမွေးမြူထုတ်လုပ်မှု အလေ့အကျင့်ကောင်းများဖွံ့ဖြိုးတိုးတက်လာစေရေး။

(စ)လယ်ယာကဏ္ဍစဉ်ဆက်မပြတ်ဖွံ့ဖြိုးတိုးတက်စေရေး အတွက်စိုက်ပျိုးမွေးမြူထုတ်လုပ်သ ူအစုအဖွဲ့များ၊သမဝါယမအသင်းများပေါ်ထွန်းလာစေရေး။

(ဆ)မျိုးစေ့ကဏ္ဍဖွံ့ဖြိုးတိုးတက်စေရေးနှင့် သားငါးမျိုးကောင်းမျိုးသနှင့်မွေးမြူထုတ်လုပ် ဖြန့်ဖြူးမှုဖွံ့ဖြိုးတိုးတက်စေရေး၊ဒေသမျိုးရင်းများထိန်းသိမ်းရေးနှင့်မှတ်တမ်းထားရှိရေး။

(ဇ)လယ်ယာအခြေခံစက်မှုလုပ်ငန်းများ၊အသေးစားစက်မှုလက်မှုလုပ်ငန်းများ၊ ရက်ကန်း လုပ်ငန်းများ၊ ပန်း(၁၀)မျိုးအပါအဝင်ရိုးရာလက်မှုလုပ်ငန်းများ၊ အသက်မွေးဝမ်းကျောင်း လုပ်ငန်းများနှင့်ကျေးလက်အခြေခံအဆောက်အအုံများဖွံ့ဖြိုးတိုးတက်စေရေး။

(ဈ)သုတေသနနှင့်ပညာပေးလုပ်ငန်းများဖွံ့ဖြိုးတိုးတက်စေရေး၊ လူ့စွမ်းအားအရင်းအမြစ်ဖွံ့ဖြိုး တိုးတက်စေရေး။

ရည်မှန်းချက်များ
၇။ရည်မှန်းချက်များမှာ အောက်ပါအတိုင်းဖြစ်ပါသည်−

(က)စားနပ်ရိက္ခာဖူလုံရေး၊အာဟာရပြည့်ဝရေးနှင့်အစားအစာ ဘေးအန္တရာယ်ကင်းရှင်းရေး တိုးတက်လာစေရန်။

(ခ)တောင်သူလယ်သမားများ၏အခွင့်အရေး ပြည့်ဝစွာရရှိခံစားနိုင်စေရန်နှင့် အကျိုးစီးပွား မြင့်မားလာစေရန်။

(ဂ)လုပ်ကွက်ငယ်တောင်သူလယ်သမားများ၊တစ်ပိုင်တစ်နိုင် မွေးမြူသူများနှင့်ရေလုပ်သားများ ကိုအခြေခံ၍အစုအဖွဲ့များ၊သမဝါယမအသင်းများဖွဲ့စည်းပြီးအတွေးသစ်အမြင်သစ်များဖြင့်စိုက်ပျိုးမွေးမြူရေးလုပ်ငန်းများကိုခေတ်မီဖွံ့ဖြိုးတိုးတက်လာစေရန်နှင့်ယင်းလုပ်ငန်းများတွင်အမျိုးသမီးများ၏အခန်းကဏ္ဍကိုပိုမိုမြှင့်တင်ရန်။

(ဃ)လယ်ယာကုန်ထုတ်လမ်းများ၊ကျေးရွာအခြေခံအဆောက်အအုံများ၊မြေယာ အသုံးချမှု အစီအမံများရေးဆွဲဆောင်ရွက်ခြင်းနှင့်အသေးစားစက်မှုလက်မှုကုန်ထုတ်လုပ်ငန်းများတည်ထောင်ပေးခြင်းတို့ဖြင့်ကျေးလက်ဒေသများစဉ်ဆက်မပြတ်ဖွံ့ဖြိုးတိုးတက်စေပြီးတောင်သူလယ်သမားများ၏လူမှုစီးပွားဘဝတိုးတက်မြင့်မားလာစေရန်။

(င)စိုက်ပျိုးမွေးမြူရေးလုပ်ငန်းများနှင့်သမဝါယမလုပ်ငန်းများပိုမိုဖွံ့ဖြိုးတိုးတက် လာစေရန် လိုအပ်သောနည်းပညာနှင့်ငွေကြေးအရင်းအနှီးများအတွက် ပြည်တွင်းပြည်ပမှအကူအညီ၊အထောက်အပံ့နှင့်ချေးငွေများရရှိရေးကူညီဆောင်ရွက်ပေးရန်။

(စ)လယ်ယာကဏ္ဍတွင် ပြည်တွင်းပြည်ပရင်းနှီးမြှုပ်နှံမှုများ တိုးတက်လာစေရေး အားပေးဆောင်ရွက်ရန်။

(ဆ)ပြည်ပဈေးကွက်ဝင် အရည်အသွေးမြင့် လယ်ယာ၊ သားငါး ထုတ်ကုန်များတိုးမြှင့် ထုတ်လုပ်နိုင်ရေး အားပေးဆောင်ရွက်ရန်။

(ဇ)လယ်ယာအခြေခံစက်မှုလုပ်ငန်းများ၊ အသေးစား စက်မှုလက်မှုလုပ်ငန်းများ၊ ရက်ကန်းလုပ်ငန်းများ၊ ပန်း(၁၀)မျိုးအပါအဝင်ရိုးရာလက်မှုလုပ်ငန်းများနှင့် အသက်မွေးဝမ်းကျောင်းလုပ်ငန်းများ ဖွံ့ဖြိုးတိုးတက်လာစေရေး အားပေးဆောင်ရွက်ရန်။

(ဈ)သမဝါယမလုပ်ငန်းများနှင့်သမဝါယမစနစ်ပိုမိုအောင်မြင်စေရေးဆောင်ရွက်ရန်။

(ည)တန်ဖိုးကွင်းဆက်တစ်ခုလုံးဖွံ့ဖြိုးတိုးတက်ရေးအတွက်ထုတ်လုပ်မှု၊ဝန်ဆောင်မှု၊ကုန်သွယ်မှုနှင့်စားသုံးမှုကဏ္ဍများကိုထိရောက်စွာချိတ်ဆက်ဆောင်ရွက်သွားရန်။

(ဋ)ဆင်းရဲနွမ်းပါးမှုလျှော့ချရေး၊ ရေရှည်တည်တံ့သောလယ်ယာကဏ္ဍဖွံ့ဖြိုးတိုးတက်ရေးနှင့် ကျေးလက်ဒေသဖွံ့ဖြိုးရေးလုပ်ငန်းများတွင်သက်ဆိုင်ရာကဏ္ဍအသီးသီးမှအစိုးရအဖွဲ့အစည်းများအချင်းချင်းပူးပေါင်းဆောင်ရွက်ခြင်း၊အစိုးရနှင့်ပုဂ္ဂလိကအဖွဲ့အစည်းများပူးပေါင်းဆောင်ရွက်ခြင်းအပါအဝင်သက်ဆိုင်သူများအားလုံးပူးပေါင်းပါဝင်ဆောင်ရွက်သွားရန်။

မူဝါဒများ
၈။လယ်ယာကဏ္ဍမူဝါဒသည် ပြည်သူလူထုအားလုံး စားနပ်ရိက္ခာနှင့် အာဟာရဖူလုံမှုရရှိစေရေး၊ လုပ်ကွက်ငယ် တောင်သူလယ်သမားများအနေဖြင့် ထုတ်လုပ်နိုင်မှု စွမ်းအားမြင့်မားပြီး ဈေးကွက်၏ လိုအပ်ချက်နှင့်အညီ ထုတ်ကုန်ပစ္စည်း အမယ်စုံအောင် ထုတ်လုပ်ပေးနိုင်ခြင်းဖြင့် ဝင်ငွေမြင့်မားလာစေရေးနှင့် ပုဂ္ဂလိက လယ်ယာစီးပွားရေးလုပ်ငန်းကဏ္ဍ၏ နိုင်ငံတကာနှင့် ယှဉ်ပြိုင်နိုင်ပြီး ပြည်ပပို့ကုန်တိုးမြင့် တင်ပို့နိုင်ရေးတို့ကို ဖြည့်ဆည်းပေးရန်ဖြစ်ပါသည်။

၉။ မူဝါဒများသည် လယ်ယာကဏ္ဍတွင် ပါဝင်သည့် ထုတ်လုပ်သူများ၊ စီးပွားရေးလုပ်ငန်း ဆောင်ရွက်သူများ၊ စားသုံးသူများအားလုံးအတွက် အထောက်အကူဖြစ်စေမည့် ဥပဒေ မူဘောင်ဆိုင်ရာဝန်းကျင်ကောင်းများ ဖန်တီးပေးခြင်းနှင့်အတူ အခြေခံ အဆောက်အအုံများ၊ ဝန်ဆောင်မှုများနှင့် ပြည်တွင်းပြည်ပ ရင်းနှီးမြှပ်နှံမှုများပေါ်ထွန်းရရှိစေရေးဖြည့်ဆည်းပေးရန် ဖြစ်ပါသည်။ ရေ၊ မြေနှင့် သဘာဝသယံဇာတအရင်းအမြစ်များကို ဖော်ထုတ်သုံးစွဲရာတွင် အများပါဝင်မှု၊ အန္တရာယ်ကင်းရှင်းမှုရှိစေပြီး ထိရောက်စွာနှင့် ရေရှည်တည်တံ့စွာ စီမံခန့်ခွဲ အသုံးချနိုင်ရန်ဖြစ်ပါသည်။

၁၀။ မူဝါဒများမှာ အောက်ပါအတိုင်း ဖြစ်ပါသည်-

(က) မြေယာအသုံးချမှုနှင့် စီမံခန့်ခွဲမှုဆိုင်ရာ မူဝါဒ

(ခ ) ရေအရင်းအမြစ် အသုံးချမှုနှင့် စီမံခန့်ခွဲမှုဆိုင်ရာ မူဝါဒ

(ဂ )  ငွေကြေးအရင်းအနှီးဆိုင်ရာ မူဝါဒ

(ဃ) စက်မှုလယ်ယာ နှင့် သွင်းအားစုများ ဆိုင်ရာ မူဝါဒ

(င ) သမဝါယမလုပ်ငန်းများနှင့် သမဝါယမစနစ်ဖွံ့ဖြိုးရေးဆိုင်ရာ မူဝါဒ (စ) ကျေးလက်အခြေခံအဆောက်အအုံဖွံ့ဖြိုးရေးဆိုင်ရာ မူဝါဒ

(ဆ) သုတေသန၊ ဖွံ့ဖြိုးမှုနှင့် နည်းပညာ ဖြန့်ဖြူးခြင်းဆိုင်ရာ မူဝါဒ

(ဇ ) ဈေးကွက်၊ တန်ဖိုးမြှင့်ကုန်ထုတ်လုပ်ခြင်းနှင့် ပြည်ပတင်ပို့ ရောင်းချခြင်းဆိုင်ရာမူဝါဒ

(ဈ ) အုပ်ချုပ်မှု၊ အဖွဲ့အစည်းများနှင့် လူ့စွမ်းအားအရင်းအမြစ် ဖွံ့ဖြိုးတိုးတက်ရေးဆိုင်ရာ မူဝါဒ

(ည) သဘာဝပတ်ဝန်းကျင်ထိန်းသိမ်းရေးနှင့် ရာသီဥတုပြောင်းလဲမှုတုံ့ပြန်ဆောင်ရွက်ရေးဆိုင်ရာ မူဝါဒ',
            'en_name'=>'Current landscape of agriculture sector in Myanmar',
            'en_description'=>'About 70% of the population in Myanmar resides in rural area and agriculture is their main livelihood. While the agriculture sector contributes 30% of national GDP, both the benefits that are gained from farming as well as the socio-economic status of farmers are extremely low.

Furthermore, farmers’ the socioeconomic status has been adversely affected by the effects of climate change, and natural and man made disasters. In particular, the unpredictable weather changes that have taken place almost annually in the wake of Cyclone Nargis in 2008 have led to tremendous crop damage and losses in the agriculture sector. At the same time, the failure to take effective actions on existing forest and soil conservation measures have exacerbated the soil quality and fertility. As a consequence, most farmers have not been able to break out of the economic down town they have experienced from chronically low productivity, low income, and rising indebtedness. In order to uplift the socio-economic condition of farmers and improve the performance of the agriculture sector, the Ministry of Agriculture, Livestock and Irrigation (MOALI) has made it a priority to support the development of the national economy through effective implementation of a proactive portfolio far reaching policies and strategic thrusts.

The aim of these new policies and strategic thrusts, referred to as Agriculture Policy 2016, is to create the enabling environment that will promote the production of a greater and more diversified range of high value agricultural, livestock, and fishery products. A major intention of Agriculture Policy 2016 is to take advantage of the comparative advantage that Myanmar has in the production of these high value products that are in increasing demand in both domestic and international markets.

Vision
The vision of Agriculture Policy 2016 is:

An inclusive, competitive, food and nutrition secured and sustainable agricultural system contributing to the socio-economic well being of farmers and rural people and further development of the national economy.

Mission
The Mission of Agriculture Policy 2016 is:

To enable rural population and agribusiness enterprises that sustain themselves from the production and sales of diverse, safe and nutritious foods, and agricultural products to have access to innovative and sustainable production, processing, packaging, logistics, and marketing technologies to meet the growing domestic and global demands.

Goal
The followings are the goals of the Ministry.

Improve food security, food safety, and nutritional status of agricultural products of the people of Myanmar.

Enhance agricultural diversification programmes in compliance with the changing market and the prevailing agro-climatic condition of the area.

Satisfy the specified quality requirements and standard of agricultural, livestock and fishery products as dictated by the market.

Improve the dissemination of market and price information.

Prevent the incidence and spread of pests and diseases in crops and livestock by wide spread use of IPM measures of a preventative nature and through development and adoption of Good Agriculture Practices - GAP, Good Animal Husbandry Practices - GAHP and Good Aquaculture Practices –GaqP.

Support the formation of crops, livestock, and fisheries producer groups and cooperative societies that aim in sustaining the development of agriculture sector.

Develop the seed industry and highly performing pure animal breeds and fish species, and conserve native breeds and species.

Develop and enhance agro-based industries, small scale industries, and cottage industries traditional weaving and handicraft and the vocational education, and rural infrastructure that is needed to support the development of these industries.

Improve and enhance research, the extension service, and human resource programmes.

Objectives
The followings are the Objectives of the Ministry.

To ensure food and nutrition security and food safety.

To safeguard the rights of the farmers and to enhance their welfare and livelihood.

To advance and upgrade the agricultural sector by organizing farmers’ associations and cooperatives inclusive of small holders and subsistence farmers with promotion of gender role.

To attain sustainable rural development and to upgrade socio-economic conditions of rural people and farmers by improving rural infrastructure, enhancing access to markets, establishing small scale enterprises and designing participatory land use plans and management.

To seek technical assistance and mobilize the financial resources from local and international agencies in support of crops, livestock, fisheries and rural development in the agriculture sector.

To promote domestic and foreign direct investment in agriculture sector.

To promote competitiveness and value-added production of exportable agricultural commodities.

To encourage the development of agro-based industry, small scale enterprises, cottage industries, and income generation activities, including ten traditional artworks and crafts.

To improve the livelihood and income generation of the rural people through the development of agricultural cooperative enterprises and the cooperative system.

To develop effective linkages of production, trading, processing, services and consumer segments along the value chains of agricultural commodities.

To improve coordination mechanism of inter-governmental agencies, to foster public-private partnership and to establish collaboration and connectivity among all stakeholders including public agencies, academia, farmers’ associations, civil societies, and private sector with a view to enhancing rural development and reducing poverty .

Policies
Myanmar’s agricultural policy is to improve food and nutrition security and food safety for all the people and to enable smallholder farmers to increase their incomes through higher productivity and diversified production in response to market demand, as well as to enhance exports through and internationally competitive private agri-business sector.

These policies will provide consumers, producers, and businesses in the agricultural sector with a supportive legal and regulatory environment along with essential public investment, infrastructure and services as well as the mobilization of domestic and foreign investments. Specific policies to develop and utilize land, water and other natural resources in an inclusive, competitive, efficient, safe and sustainable manner can be organized into three categories: governance of land, water and other natural resources: access to inputs and technology for production: and value-added processing, marketing and export.

Policies related to agriculture sector of Myanmar are as follows:
Land Use and Management Policy.

Water Use and Management Policy.

Agricultural financing Policy.

Agricultural Mechanization and Input Sector Policy.

Cooperative Societies and Cooperative System Development Policy

Rural Infrastructure Development Policy.

Research, Development and Extension Policy.

Marketing, Value-added Processing and Export Policy.

Governance, Institutional and Human Resource Development Policy.

Environmental Conservation and Climate Change Resilience Policy.

Land Use and Management Policy

Land Use and Management Policy.
All farmers who produce crop, livestock and fish can access land in accordance with the existing Farm Land Laws, and also transfer, sell, mortgage, lend, exchange, give away, or inherit their land right including tilling and other land use.

To capture both fresh and brackish water fishery and produce fish systematically in accordance with the Laws.

To establish Special Zones for the production of agriculture, livestock and fishery products so as to improve productivity.

Arrangement will be made available for farmers’ freedom of choice to undertake any farming activities in accordance with Laws (agriculture, livestock, fishery sectors) that are economically viable, in the farm land which is granted to till and use.

Formation of groups of farmers, including crops and livestock, and fisherman, will be encouraged and supported and aimed to work within the Land Consolidation and Land Use Management system in the transformation to a larger scale farm parcels.

Assistance will be provided to those who are interested in farming activities, in particular, small holder farmers and farm labors, who are landless and have extremely limited financial resources will have the rights of tilling the land that they have cleared or developed as new farm land.

Development of new farm land will be undertaken in accordance with the National Land Use Policy.'
        ]);
        \App\News::create([
            'image'=>'/images/news/default.jpg',
            'my_name'=>'မြန်မာ့လယ်ယာကဏ္ဍအခြေအနေ',
            'my_description'=>'၁။မြန်မာနိုင်ငံလူဦးရေ၏၇၀%သည် ကျေးလက်ဒေသတွင်နေထိုင်လျက်ရှိကြပြီး အများစု၏ အဓိကစီးပွားရေးလုပ်ငန်းမှာ လယ်ယာလုပ်ငန်းဖြစ်ပါသည်။ တစ်မျိုးသားလုံး၏ ပြည်တွင်းအသားတင်ထုတ်လုပ်မှုနှင့် ဝန်ဆောင်မှုတန်ဘိုး (GDP) ၏၃၀% ခန့်ကိုလယ်ယာကဏ္ဍမှရရှိသော်လည်း တောင်သူလယ်သမားအများစု၏ လယ်ယာမြေနှင့်ပတ်သက်သော အကျိုးခံစားခွင့်အလွန်နည်းပါးလှပြီး ၎င်းတို့၏လူမှုစီးပွားဘဝသည်နိမ့်ကျလျက်ရှိပါသည်။

၂။ထို့အပြင်ရာသီဥတုပြောင်းလဲမှု၊သဘာဝဘေးနှင့် အခြားသောဘေးအန္တရာယ်များကျရောက်မှုတို့ကြောင့် တောင်သူလယ်သမားအများစု၏ လူမှုစီးပွားဘဝကိုပိုမိုထိခိုက်စေပါသည်။ အထူးသဖြင့်၂၀၀၈ခုနှစ်၊ နာဂစ်မုန်တိုင်းနောက်ပိုင်းတွင် နှစ်စဉ်လိုလိုရာသီဥတုဖောက်ပြန်လာခဲ့ရာလယ်ယာကဏ္ဍတွင် ထိခိုက်နစ်နာဆုံးရှုံးမှုများပေါ်ပေါက်ခဲ့ရပါသည်။ သစ်တောပြုန်းတီးခြင်းကိုကာကွယ်ထိန်းသိမ်းမှုနှင့် မြေဆီလွှာထိန်းသိမ်းမှုလုပ်ငန်းများကို စနစ်တကျထိရောက်စွာဆောင်ရွက်မှုအားနည်းခဲ့ခြင်းတို့ကြောင့် မြေဆီလွှာအရည်အသွေးကျဆင်းပျက်စီးလာလျက်ရှိပါသည်။ အကျိုးဆက်အနေဖြင့်တောင်သူလယ်သမားအများစုမှာ ဝင်ငွေနိမ့်ကျပြီးအကြွေးသံသရာမှ ရုန်းမထွက်နိုင်သည့်အပြင်အကြောင်းအမျိုးမျိုးဖြင့် ၎င်းတို့လုပ်ကိုင်သောလယ်ယာမြေများကို လက်လွှတ်ခဲ့ရခြင်းကြောင့် လယ်မဲ့ယာမဲ့များဘဝသို့ရောက်ခဲ့ရပြီး လူမှုစီးပွားဘဝအခြေအနေများကိုပိုမိုထိခိုက်စေခဲ့ပါသည်။ သို့ဖြစ်ပါ၍တောင်သူလယ်သမားတို့၏ လူမှုစီးပွားဘဝအခြေအနေမြင့်မားတိုးတက်လာစေရန်နှင့် လယ်ယာကဏ္ဍ ဖွံ့ဖြိုးတိုးတက်လာစေရန် ဝန်ကြီးဌာန၏မူဝါဒများနှင့်လုပ်ငန်းစဉ်များကို ခိုင်ခိုင်မာမာရေးဆွဲချမှတ်အကောင်အထည်ဖော်ခြင်းဖြင့် နိုင်ငံတော်၏စီးပွားရေးဖွံ့ဖြိုးတိုးတက်မှုကိုအထောက်အကူပြုနိုင်ရန်ကြိုးပမ်းဆောင်ရွက်ရမည်ဖြစ်ပါသည်။

၃။လယ်ယာကဏ္ဍမူဝါဒအသစ်တွင်မြန်မာနိုင်ငံ၏ လယ်ယာကဏ္ဍရှိအခွင့်အလမ်းကောင်းများကို ဖေါ်ထုတ်ပေးလိုက်ခြင်းဖြင့်လျင်မြန်စွာတိုးတက်လာနေသော ပြည်တွင်းပြည်ပဈေးကွက်ရှိစားသုံးသူများ၏ လိုအပ်ချက်များဖြစ်သောအဆင့်အတန်းမြင့်လယ်ယာနှင့်သားငါးထွက်ကုန်များကို အမျိုးအမယ်စုံလင်စွာဖြည့်ဆည်းပေးရန် ရည်ရွယ်ပါသည်။ ယင်းသို့သောမူဝါဒအရစိုက်ပျိုးမွေးမြူရေးနှင့်ထုတ်လုပ်ရေးလုပ်ငန်းများကိုပိုမိုကျယ်ပြန့်လာစေခြင်း၊ ထုတ်လုပ်မှုစွမ်းအားမြင့်မားလာခြင်းနှင့်အတူ လုပ်ကွက်ငယ်တောင်သူလယ်သမား၏ဝင်ငွေပါတိုးတက်လာစေခြင်း၊ စားသုံးသူများအတွက်ဘေးအန္တရာယ်ကင်း၍ အာဟာရပြည့်ဝသောစားနပ်ရိက္ခာများထုတ်လုပ်နိုင်ခြင်း၊လယ်ယာစီးပွားရေးလုပ်ငန်းများဖွံ့ဖြိုးလာခြင်းနှင့်အတူနိုင်ငံတကာဈေးကွက်နှင့် ချိတ်ဆက်၍ လယ်ယာထုတ်ကုန်များကို  ပြည်ပသို့ ပိုမိုတင်ပို့နိုင်ခြင်း၊ ကျေးလက်ဒေသလူမှုစီးပွားဘဝတိုးတက်လာခြင်း၊ ဖွံ့ဖြိုးတိုးတက်မှု ရေရှည်တည်တံ့ခြင်းစသော  အကျိုးကျေးဇူးများရရှိဖြစ်ပေါ်လာစေနိုင်ပါသည်။

မျှော်မှန်းချက်
၄။အားလုံးပါဝင်ပြီး နိုင်ငံတကာနှင့် ယှဉ်ပြိုင်နိုင်စွမ်းရှိသည့် ရေရှည်တည်တံ့သော လယ်ယာကုန်ထုတ်မှုစနစ် ထွန်းကားစေခြင်းဖြင့် စားနပ်ရိက္ခာဖူလုံ၍ အာဟာရပြည့်ဝစေပြီး ကျေးလက်နေပြည်သူများ၏ လူမှုစီးပွားဘဝမြင့်မားလာစေရန်နှင့် နိုင်ငံစီးပွားဖွံ့ဖြိုးတိုးတက်မှု ကို အထောက်အကူဖြစ်စေရန်။

လုပ်ငန်းတာဝန်များ
၅။ကျေးလက်နေ ပြည်သူများနှင့် လယ်ယာစီးပွားရေးလုပ်ငန်းများအား ခေတ်မီဆန်းသစ်၍ ရေရှည်တည်တံ့သောထုတ်လုပ်မှုနည်းပညာများ၊ ပြုပြင်ထုပ်ပိုး နည်းလမ်းများ၊ ထောက်ပံ့ပို့ဆောင်ရေး နည်းလမ်းများနှင့်ဈေးကွက်ဆိုင်ရာ နည်းပညာများကို အသုံးပြု၍ ကြီးထွားလာသောပြည်တွင်းပြည်ပဈေးကွက်ဝယ်လိုအားနှင့်အညီ ဘေးအန္တရာယ်ကင်းရှင်း၍အာဟာရပြည့်ဝသည့် အမယ်စုံလင်သောစားနပ်ရိက္ခာနှင့်စိုက်ပျိုးမွေးမြူရေးထုတ်ကုန်ပစ္စည်းများ တိုးတက်ထုတ်လုပ်ရာတွင် အထောက်အကူပြုနိုင်ရေး ဆောင်ရွက်ရန်။

ပန်းတိုင်
၆။ပန်းတိုင်မှာအောက်ပါအတိုင်းဖြစ်ပါသည်−

(က)စားနပ်ရိက္ခာဖူလုံမှု​၊ အာဟာရပြည့်ဝရေးနှင့်အစားအစာဘေးအန္တရာယ်ကင်းရှင်းမှုတိုးတက်စေ ရေး။

(ခ) ပြောင်းလဲလာသော ဈေးကွက်နှင့်အညီ ဒေသအလိုက် ရေမြေ၊ ရာသီဥတုတို့နှင့်ကိုက်ညီသည့် အမယ်စုံလင်သော လယ်ယာ၊ သားငါးထွက်ကုန်များ ထုတ်လုပ်မှုပုံစံ တိုးမြင့်လာစေရေး။

(ဂ) စျေးကွက်လိုအပ်ချက်နှင့်အညီလယ်ယာသားငါးထုတ်ကုန်များ၏ အရည်အသွေးနှင့် စံချိန်စံညွှန်းများပြည့်မီစေရေး။

(ဃ)လယ်ယာထွက်ကုန် ဈေးကွက်နှင့် ဈေးနှုန်းသတင်းအချက်အလက် ဖြန့်ဝေမှု လုပ်ငန်းများ ဖွံ့ဖြိုးတိုးတက်လာစေရေး။

(င)တိရစ္ဆာန်နှင့်အပင်ပိုးမွှားရောဂါဆိုင်ရာအန္တရာယ်ကင်းရှင်းရေး၊ စိုက်ပျိုးမွေးမြူထုတ်လုပ်မှု အလေ့အကျင့်ကောင်းများဖွံ့ဖြိုးတိုးတက်လာစေရေး။

(စ)လယ်ယာကဏ္ဍစဉ်ဆက်မပြတ်ဖွံ့ဖြိုးတိုးတက်စေရေး အတွက်စိုက်ပျိုးမွေးမြူထုတ်လုပ်သ ူအစုအဖွဲ့များ၊သမဝါယမအသင်းများပေါ်ထွန်းလာစေရေး။

(ဆ)မျိုးစေ့ကဏ္ဍဖွံ့ဖြိုးတိုးတက်စေရေးနှင့် သားငါးမျိုးကောင်းမျိုးသနှင့်မွေးမြူထုတ်လုပ် ဖြန့်ဖြူးမှုဖွံ့ဖြိုးတိုးတက်စေရေး၊ဒေသမျိုးရင်းများထိန်းသိမ်းရေးနှင့်မှတ်တမ်းထားရှိရေး။

(ဇ)လယ်ယာအခြေခံစက်မှုလုပ်ငန်းများ၊အသေးစားစက်မှုလက်မှုလုပ်ငန်းများ၊ ရက်ကန်း လုပ်ငန်းများ၊ ပန်း(၁၀)မျိုးအပါအဝင်ရိုးရာလက်မှုလုပ်ငန်းများ၊ အသက်မွေးဝမ်းကျောင်း လုပ်ငန်းများနှင့်ကျေးလက်အခြေခံအဆောက်အအုံများဖွံ့ဖြိုးတိုးတက်စေရေး။

(ဈ)သုတေသနနှင့်ပညာပေးလုပ်ငန်းများဖွံ့ဖြိုးတိုးတက်စေရေး၊ လူ့စွမ်းအားအရင်းအမြစ်ဖွံ့ဖြိုး တိုးတက်စေရေး။

ရည်မှန်းချက်များ
၇။ရည်မှန်းချက်များမှာ အောက်ပါအတိုင်းဖြစ်ပါသည်−

(က)စားနပ်ရိက္ခာဖူလုံရေး၊အာဟာရပြည့်ဝရေးနှင့်အစားအစာ ဘေးအန္တရာယ်ကင်းရှင်းရေး တိုးတက်လာစေရန်။

(ခ)တောင်သူလယ်သမားများ၏အခွင့်အရေး ပြည့်ဝစွာရရှိခံစားနိုင်စေရန်နှင့် အကျိုးစီးပွား မြင့်မားလာစေရန်။

(ဂ)လုပ်ကွက်ငယ်တောင်သူလယ်သမားများ၊တစ်ပိုင်တစ်နိုင် မွေးမြူသူများနှင့်ရေလုပ်သားများ ကိုအခြေခံ၍အစုအဖွဲ့များ၊သမဝါယမအသင်းများဖွဲ့စည်းပြီးအတွေးသစ်အမြင်သစ်များဖြင့်စိုက်ပျိုးမွေးမြူရေးလုပ်ငန်းများကိုခေတ်မီဖွံ့ဖြိုးတိုးတက်လာစေရန်နှင့်ယင်းလုပ်ငန်းများတွင်အမျိုးသမီးများ၏အခန်းကဏ္ဍကိုပိုမိုမြှင့်တင်ရန်။

(ဃ)လယ်ယာကုန်ထုတ်လမ်းများ၊ကျေးရွာအခြေခံအဆောက်အအုံများ၊မြေယာ အသုံးချမှု အစီအမံများရေးဆွဲဆောင်ရွက်ခြင်းနှင့်အသေးစားစက်မှုလက်မှုကုန်ထုတ်လုပ်ငန်းများတည်ထောင်ပေးခြင်းတို့ဖြင့်ကျေးလက်ဒေသများစဉ်ဆက်မပြတ်ဖွံ့ဖြိုးတိုးတက်စေပြီးတောင်သူလယ်သမားများ၏လူမှုစီးပွားဘဝတိုးတက်မြင့်မားလာစေရန်။

(င)စိုက်ပျိုးမွေးမြူရေးလုပ်ငန်းများနှင့်သမဝါယမလုပ်ငန်းများပိုမိုဖွံ့ဖြိုးတိုးတက် လာစေရန် လိုအပ်သောနည်းပညာနှင့်ငွေကြေးအရင်းအနှီးများအတွက် ပြည်တွင်းပြည်ပမှအကူအညီ၊အထောက်အပံ့နှင့်ချေးငွေများရရှိရေးကူညီဆောင်ရွက်ပေးရန်။

(စ)လယ်ယာကဏ္ဍတွင် ပြည်တွင်းပြည်ပရင်းနှီးမြှုပ်နှံမှုများ တိုးတက်လာစေရေး အားပေးဆောင်ရွက်ရန်။

(ဆ)ပြည်ပဈေးကွက်ဝင် အရည်အသွေးမြင့် လယ်ယာ၊ သားငါး ထုတ်ကုန်များတိုးမြှင့် ထုတ်လုပ်နိုင်ရေး အားပေးဆောင်ရွက်ရန်။

(ဇ)လယ်ယာအခြေခံစက်မှုလုပ်ငန်းများ၊ အသေးစား စက်မှုလက်မှုလုပ်ငန်းများ၊ ရက်ကန်းလုပ်ငန်းများ၊ ပန်း(၁၀)မျိုးအပါအဝင်ရိုးရာလက်မှုလုပ်ငန်းများနှင့် အသက်မွေးဝမ်းကျောင်းလုပ်ငန်းများ ဖွံ့ဖြိုးတိုးတက်လာစေရေး အားပေးဆောင်ရွက်ရန်။

(ဈ)သမဝါယမလုပ်ငန်းများနှင့်သမဝါယမစနစ်ပိုမိုအောင်မြင်စေရေးဆောင်ရွက်ရန်။

(ည)တန်ဖိုးကွင်းဆက်တစ်ခုလုံးဖွံ့ဖြိုးတိုးတက်ရေးအတွက်ထုတ်လုပ်မှု၊ဝန်ဆောင်မှု၊ကုန်သွယ်မှုနှင့်စားသုံးမှုကဏ္ဍများကိုထိရောက်စွာချိတ်ဆက်ဆောင်ရွက်သွားရန်။

(ဋ)ဆင်းရဲနွမ်းပါးမှုလျှော့ချရေး၊ ရေရှည်တည်တံ့သောလယ်ယာကဏ္ဍဖွံ့ဖြိုးတိုးတက်ရေးနှင့် ကျေးလက်ဒေသဖွံ့ဖြိုးရေးလုပ်ငန်းများတွင်သက်ဆိုင်ရာကဏ္ဍအသီးသီးမှအစိုးရအဖွဲ့အစည်းများအချင်းချင်းပူးပေါင်းဆောင်ရွက်ခြင်း၊အစိုးရနှင့်ပုဂ္ဂလိကအဖွဲ့အစည်းများပူးပေါင်းဆောင်ရွက်ခြင်းအပါအဝင်သက်ဆိုင်သူများအားလုံးပူးပေါင်းပါဝင်ဆောင်ရွက်သွားရန်။

မူဝါဒများ
၈။လယ်ယာကဏ္ဍမူဝါဒသည် ပြည်သူလူထုအားလုံး စားနပ်ရိက္ခာနှင့် အာဟာရဖူလုံမှုရရှိစေရေး၊ လုပ်ကွက်ငယ် တောင်သူလယ်သမားများအနေဖြင့် ထုတ်လုပ်နိုင်မှု စွမ်းအားမြင့်မားပြီး ဈေးကွက်၏ လိုအပ်ချက်နှင့်အညီ ထုတ်ကုန်ပစ္စည်း အမယ်စုံအောင် ထုတ်လုပ်ပေးနိုင်ခြင်းဖြင့် ဝင်ငွေမြင့်မားလာစေရေးနှင့် ပုဂ္ဂလိက လယ်ယာစီးပွားရေးလုပ်ငန်းကဏ္ဍ၏ နိုင်ငံတကာနှင့် ယှဉ်ပြိုင်နိုင်ပြီး ပြည်ပပို့ကုန်တိုးမြင့် တင်ပို့နိုင်ရေးတို့ကို ဖြည့်ဆည်းပေးရန်ဖြစ်ပါသည်။

၉။ မူဝါဒများသည် လယ်ယာကဏ္ဍတွင် ပါဝင်သည့် ထုတ်လုပ်သူများ၊ စီးပွားရေးလုပ်ငန်း ဆောင်ရွက်သူများ၊ စားသုံးသူများအားလုံးအတွက် အထောက်အကူဖြစ်စေမည့် ဥပဒေ မူဘောင်ဆိုင်ရာဝန်းကျင်ကောင်းများ ဖန်တီးပေးခြင်းနှင့်အတူ အခြေခံ အဆောက်အအုံများ၊ ဝန်ဆောင်မှုများနှင့် ပြည်တွင်းပြည်ပ ရင်းနှီးမြှပ်နှံမှုများပေါ်ထွန်းရရှိစေရေးဖြည့်ဆည်းပေးရန် ဖြစ်ပါသည်။ ရေ၊ မြေနှင့် သဘာဝသယံဇာတအရင်းအမြစ်များကို ဖော်ထုတ်သုံးစွဲရာတွင် အများပါဝင်မှု၊ အန္တရာယ်ကင်းရှင်းမှုရှိစေပြီး ထိရောက်စွာနှင့် ရေရှည်တည်တံ့စွာ စီမံခန့်ခွဲ အသုံးချနိုင်ရန်ဖြစ်ပါသည်။

၁၀။ မူဝါဒများမှာ အောက်ပါအတိုင်း ဖြစ်ပါသည်-

(က) မြေယာအသုံးချမှုနှင့် စီမံခန့်ခွဲမှုဆိုင်ရာ မူဝါဒ

(ခ ) ရေအရင်းအမြစ် အသုံးချမှုနှင့် စီမံခန့်ခွဲမှုဆိုင်ရာ မူဝါဒ

(ဂ )  ငွေကြေးအရင်းအနှီးဆိုင်ရာ မူဝါဒ

(ဃ) စက်မှုလယ်ယာ နှင့် သွင်းအားစုများ ဆိုင်ရာ မူဝါဒ

(င ) သမဝါယမလုပ်ငန်းများနှင့် သမဝါယမစနစ်ဖွံ့ဖြိုးရေးဆိုင်ရာ မူဝါဒ (စ) ကျေးလက်အခြေခံအဆောက်အအုံဖွံ့ဖြိုးရေးဆိုင်ရာ မူဝါဒ

(ဆ) သုတေသန၊ ဖွံ့ဖြိုးမှုနှင့် နည်းပညာ ဖြန့်ဖြူးခြင်းဆိုင်ရာ မူဝါဒ

(ဇ ) ဈေးကွက်၊ တန်ဖိုးမြှင့်ကုန်ထုတ်လုပ်ခြင်းနှင့် ပြည်ပတင်ပို့ ရောင်းချခြင်းဆိုင်ရာမူဝါဒ

(ဈ ) အုပ်ချုပ်မှု၊ အဖွဲ့အစည်းများနှင့် လူ့စွမ်းအားအရင်းအမြစ် ဖွံ့ဖြိုးတိုးတက်ရေးဆိုင်ရာ မူဝါဒ

(ည) သဘာဝပတ်ဝန်းကျင်ထိန်းသိမ်းရေးနှင့် ရာသီဥတုပြောင်းလဲမှုတုံ့ပြန်ဆောင်ရွက်ရေးဆိုင်ရာ မူဝါဒ',
            'en_name'=>'Current landscape of agriculture sector in Myanmar',
            'en_description'=>'About 70% of the population in Myanmar resides in rural area and agriculture is their main livelihood. While the agriculture sector contributes 30% of national GDP, both the benefits that are gained from farming as well as the socio-economic status of farmers are extremely low.

Furthermore, farmers’ the socioeconomic status has been adversely affected by the effects of climate change, and natural and man made disasters. In particular, the unpredictable weather changes that have taken place almost annually in the wake of Cyclone Nargis in 2008 have led to tremendous crop damage and losses in the agriculture sector. At the same time, the failure to take effective actions on existing forest and soil conservation measures have exacerbated the soil quality and fertility. As a consequence, most farmers have not been able to break out of the economic down town they have experienced from chronically low productivity, low income, and rising indebtedness. In order to uplift the socio-economic condition of farmers and improve the performance of the agriculture sector, the Ministry of Agriculture, Livestock and Irrigation (MOALI) has made it a priority to support the development of the national economy through effective implementation of a proactive portfolio far reaching policies and strategic thrusts.

The aim of these new policies and strategic thrusts, referred to as Agriculture Policy 2016, is to create the enabling environment that will promote the production of a greater and more diversified range of high value agricultural, livestock, and fishery products. A major intention of Agriculture Policy 2016 is to take advantage of the comparative advantage that Myanmar has in the production of these high value products that are in increasing demand in both domestic and international markets.

Vision
The vision of Agriculture Policy 2016 is:

An inclusive, competitive, food and nutrition secured and sustainable agricultural system contributing to the socio-economic well being of farmers and rural people and further development of the national economy.

Mission
The Mission of Agriculture Policy 2016 is:

To enable rural population and agribusiness enterprises that sustain themselves from the production and sales of diverse, safe and nutritious foods, and agricultural products to have access to innovative and sustainable production, processing, packaging, logistics, and marketing technologies to meet the growing domestic and global demands.

Goal
The followings are the goals of the Ministry.

Improve food security, food safety, and nutritional status of agricultural products of the people of Myanmar.

Enhance agricultural diversification programmes in compliance with the changing market and the prevailing agro-climatic condition of the area.

Satisfy the specified quality requirements and standard of agricultural, livestock and fishery products as dictated by the market.

Improve the dissemination of market and price information.

Prevent the incidence and spread of pests and diseases in crops and livestock by wide spread use of IPM measures of a preventative nature and through development and adoption of Good Agriculture Practices - GAP, Good Animal Husbandry Practices - GAHP and Good Aquaculture Practices –GaqP.

Support the formation of crops, livestock, and fisheries producer groups and cooperative societies that aim in sustaining the development of agriculture sector.

Develop the seed industry and highly performing pure animal breeds and fish species, and conserve native breeds and species.

Develop and enhance agro-based industries, small scale industries, and cottage industries traditional weaving and handicraft and the vocational education, and rural infrastructure that is needed to support the development of these industries.

Improve and enhance research, the extension service, and human resource programmes.

Objectives
The followings are the Objectives of the Ministry.

To ensure food and nutrition security and food safety.

To safeguard the rights of the farmers and to enhance their welfare and livelihood.

To advance and upgrade the agricultural sector by organizing farmers’ associations and cooperatives inclusive of small holders and subsistence farmers with promotion of gender role.

To attain sustainable rural development and to upgrade socio-economic conditions of rural people and farmers by improving rural infrastructure, enhancing access to markets, establishing small scale enterprises and designing participatory land use plans and management.

To seek technical assistance and mobilize the financial resources from local and international agencies in support of crops, livestock, fisheries and rural development in the agriculture sector.

To promote domestic and foreign direct investment in agriculture sector.

To promote competitiveness and value-added production of exportable agricultural commodities.

To encourage the development of agro-based industry, small scale enterprises, cottage industries, and income generation activities, including ten traditional artworks and crafts.

To improve the livelihood and income generation of the rural people through the development of agricultural cooperative enterprises and the cooperative system.

To develop effective linkages of production, trading, processing, services and consumer segments along the value chains of agricultural commodities.

To improve coordination mechanism of inter-governmental agencies, to foster public-private partnership and to establish collaboration and connectivity among all stakeholders including public agencies, academia, farmers’ associations, civil societies, and private sector with a view to enhancing rural development and reducing poverty .

Policies
Myanmar’s agricultural policy is to improve food and nutrition security and food safety for all the people and to enable smallholder farmers to increase their incomes through higher productivity and diversified production in response to market demand, as well as to enhance exports through and internationally competitive private agri-business sector.

These policies will provide consumers, producers, and businesses in the agricultural sector with a supportive legal and regulatory environment along with essential public investment, infrastructure and services as well as the mobilization of domestic and foreign investments. Specific policies to develop and utilize land, water and other natural resources in an inclusive, competitive, efficient, safe and sustainable manner can be organized into three categories: governance of land, water and other natural resources: access to inputs and technology for production: and value-added processing, marketing and export.

Policies related to agriculture sector of Myanmar are as follows:
Land Use and Management Policy.

Water Use and Management Policy.

Agricultural financing Policy.

Agricultural Mechanization and Input Sector Policy.

Cooperative Societies and Cooperative System Development Policy

Rural Infrastructure Development Policy.

Research, Development and Extension Policy.

Marketing, Value-added Processing and Export Policy.

Governance, Institutional and Human Resource Development Policy.

Environmental Conservation and Climate Change Resilience Policy.

Land Use and Management Policy

Land Use and Management Policy.
All farmers who produce crop, livestock and fish can access land in accordance with the existing Farm Land Laws, and also transfer, sell, mortgage, lend, exchange, give away, or inherit their land right including tilling and other land use.

To capture both fresh and brackish water fishery and produce fish systematically in accordance with the Laws.

To establish Special Zones for the production of agriculture, livestock and fishery products so as to improve productivity.

Arrangement will be made available for farmers’ freedom of choice to undertake any farming activities in accordance with Laws (agriculture, livestock, fishery sectors) that are economically viable, in the farm land which is granted to till and use.

Formation of groups of farmers, including crops and livestock, and fisherman, will be encouraged and supported and aimed to work within the Land Consolidation and Land Use Management system in the transformation to a larger scale farm parcels.

Assistance will be provided to those who are interested in farming activities, in particular, small holder farmers and farm labors, who are landless and have extremely limited financial resources will have the rights of tilling the land that they have cleared or developed as new farm land.

Development of new farm land will be undertaken in accordance with the National Land Use Policy.'
        ]);
        \App\News::create([
            'image'=>'/images/news/default.jpg',
            'my_name'=>'မြန်မာ့လယ်ယာကဏ္ဍအခြေအနေ',
            'my_description'=>'၁။မြန်မာနိုင်ငံလူဦးရေ၏၇၀%သည် ကျေးလက်ဒေသတွင်နေထိုင်လျက်ရှိကြပြီး အများစု၏ အဓိကစီးပွားရေးလုပ်ငန်းမှာ လယ်ယာလုပ်ငန်းဖြစ်ပါသည်။ တစ်မျိုးသားလုံး၏ ပြည်တွင်းအသားတင်ထုတ်လုပ်မှုနှင့် ဝန်ဆောင်မှုတန်ဘိုး (GDP) ၏၃၀% ခန့်ကိုလယ်ယာကဏ္ဍမှရရှိသော်လည်း တောင်သူလယ်သမားအများစု၏ လယ်ယာမြေနှင့်ပတ်သက်သော အကျိုးခံစားခွင့်အလွန်နည်းပါးလှပြီး ၎င်းတို့၏လူမှုစီးပွားဘဝသည်နိမ့်ကျလျက်ရှိပါသည်။

၂။ထို့အပြင်ရာသီဥတုပြောင်းလဲမှု၊သဘာဝဘေးနှင့် အခြားသောဘေးအန္တရာယ်များကျရောက်မှုတို့ကြောင့် တောင်သူလယ်သမားအများစု၏ လူမှုစီးပွားဘဝကိုပိုမိုထိခိုက်စေပါသည်။ အထူးသဖြင့်၂၀၀၈ခုနှစ်၊ နာဂစ်မုန်တိုင်းနောက်ပိုင်းတွင် နှစ်စဉ်လိုလိုရာသီဥတုဖောက်ပြန်လာခဲ့ရာလယ်ယာကဏ္ဍတွင် ထိခိုက်နစ်နာဆုံးရှုံးမှုများပေါ်ပေါက်ခဲ့ရပါသည်။ သစ်တောပြုန်းတီးခြင်းကိုကာကွယ်ထိန်းသိမ်းမှုနှင့် မြေဆီလွှာထိန်းသိမ်းမှုလုပ်ငန်းများကို စနစ်တကျထိရောက်စွာဆောင်ရွက်မှုအားနည်းခဲ့ခြင်းတို့ကြောင့် မြေဆီလွှာအရည်အသွေးကျဆင်းပျက်စီးလာလျက်ရှိပါသည်။ အကျိုးဆက်အနေဖြင့်တောင်သူလယ်သမားအများစုမှာ ဝင်ငွေနိမ့်ကျပြီးအကြွေးသံသရာမှ ရုန်းမထွက်နိုင်သည့်အပြင်အကြောင်းအမျိုးမျိုးဖြင့် ၎င်းတို့လုပ်ကိုင်သောလယ်ယာမြေများကို လက်လွှတ်ခဲ့ရခြင်းကြောင့် လယ်မဲ့ယာမဲ့များဘဝသို့ရောက်ခဲ့ရပြီး လူမှုစီးပွားဘဝအခြေအနေများကိုပိုမိုထိခိုက်စေခဲ့ပါသည်။ သို့ဖြစ်ပါ၍တောင်သူလယ်သမားတို့၏ လူမှုစီးပွားဘဝအခြေအနေမြင့်မားတိုးတက်လာစေရန်နှင့် လယ်ယာကဏ္ဍ ဖွံ့ဖြိုးတိုးတက်လာစေရန် ဝန်ကြီးဌာန၏မူဝါဒများနှင့်လုပ်ငန်းစဉ်များကို ခိုင်ခိုင်မာမာရေးဆွဲချမှတ်အကောင်အထည်ဖော်ခြင်းဖြင့် နိုင်ငံတော်၏စီးပွားရေးဖွံ့ဖြိုးတိုးတက်မှုကိုအထောက်အကူပြုနိုင်ရန်ကြိုးပမ်းဆောင်ရွက်ရမည်ဖြစ်ပါသည်။

၃။လယ်ယာကဏ္ဍမူဝါဒအသစ်တွင်မြန်မာနိုင်ငံ၏ လယ်ယာကဏ္ဍရှိအခွင့်အလမ်းကောင်းများကို ဖေါ်ထုတ်ပေးလိုက်ခြင်းဖြင့်လျင်မြန်စွာတိုးတက်လာနေသော ပြည်တွင်းပြည်ပဈေးကွက်ရှိစားသုံးသူများ၏ လိုအပ်ချက်များဖြစ်သောအဆင့်အတန်းမြင့်လယ်ယာနှင့်သားငါးထွက်ကုန်များကို အမျိုးအမယ်စုံလင်စွာဖြည့်ဆည်းပေးရန် ရည်ရွယ်ပါသည်။ ယင်းသို့သောမူဝါဒအရစိုက်ပျိုးမွေးမြူရေးနှင့်ထုတ်လုပ်ရေးလုပ်ငန်းများကိုပိုမိုကျယ်ပြန့်လာစေခြင်း၊ ထုတ်လုပ်မှုစွမ်းအားမြင့်မားလာခြင်းနှင့်အတူ လုပ်ကွက်ငယ်တောင်သူလယ်သမား၏ဝင်ငွေပါတိုးတက်လာစေခြင်း၊ စားသုံးသူများအတွက်ဘေးအန္တရာယ်ကင်း၍ အာဟာရပြည့်ဝသောစားနပ်ရိက္ခာများထုတ်လုပ်နိုင်ခြင်း၊လယ်ယာစီးပွားရေးလုပ်ငန်းများဖွံ့ဖြိုးလာခြင်းနှင့်အတူနိုင်ငံတကာဈေးကွက်နှင့် ချိတ်ဆက်၍ လယ်ယာထုတ်ကုန်များကို  ပြည်ပသို့ ပိုမိုတင်ပို့နိုင်ခြင်း၊ ကျေးလက်ဒေသလူမှုစီးပွားဘဝတိုးတက်လာခြင်း၊ ဖွံ့ဖြိုးတိုးတက်မှု ရေရှည်တည်တံ့ခြင်းစသော  အကျိုးကျေးဇူးများရရှိဖြစ်ပေါ်လာစေနိုင်ပါသည်။

မျှော်မှန်းချက်
၄။အားလုံးပါဝင်ပြီး နိုင်ငံတကာနှင့် ယှဉ်ပြိုင်နိုင်စွမ်းရှိသည့် ရေရှည်တည်တံ့သော လယ်ယာကုန်ထုတ်မှုစနစ် ထွန်းကားစေခြင်းဖြင့် စားနပ်ရိက္ခာဖူလုံ၍ အာဟာရပြည့်ဝစေပြီး ကျေးလက်နေပြည်သူများ၏ လူမှုစီးပွားဘဝမြင့်မားလာစေရန်နှင့် နိုင်ငံစီးပွားဖွံ့ဖြိုးတိုးတက်မှု ကို အထောက်အကူဖြစ်စေရန်။

လုပ်ငန်းတာဝန်များ
၅။ကျေးလက်နေ ပြည်သူများနှင့် လယ်ယာစီးပွားရေးလုပ်ငန်းများအား ခေတ်မီဆန်းသစ်၍ ရေရှည်တည်တံ့သောထုတ်လုပ်မှုနည်းပညာများ၊ ပြုပြင်ထုပ်ပိုး နည်းလမ်းများ၊ ထောက်ပံ့ပို့ဆောင်ရေး နည်းလမ်းများနှင့်ဈေးကွက်ဆိုင်ရာ နည်းပညာများကို အသုံးပြု၍ ကြီးထွားလာသောပြည်တွင်းပြည်ပဈေးကွက်ဝယ်လိုအားနှင့်အညီ ဘေးအန္တရာယ်ကင်းရှင်း၍အာဟာရပြည့်ဝသည့် အမယ်စုံလင်သောစားနပ်ရိက္ခာနှင့်စိုက်ပျိုးမွေးမြူရေးထုတ်ကုန်ပစ္စည်းများ တိုးတက်ထုတ်လုပ်ရာတွင် အထောက်အကူပြုနိုင်ရေး ဆောင်ရွက်ရန်။

ပန်းတိုင်
၆။ပန်းတိုင်မှာအောက်ပါအတိုင်းဖြစ်ပါသည်−

(က)စားနပ်ရိက္ခာဖူလုံမှု​၊ အာဟာရပြည့်ဝရေးနှင့်အစားအစာဘေးအန္တရာယ်ကင်းရှင်းမှုတိုးတက်စေ ရေး။

(ခ) ပြောင်းလဲလာသော ဈေးကွက်နှင့်အညီ ဒေသအလိုက် ရေမြေ၊ ရာသီဥတုတို့နှင့်ကိုက်ညီသည့် အမယ်စုံလင်သော လယ်ယာ၊ သားငါးထွက်ကုန်များ ထုတ်လုပ်မှုပုံစံ တိုးမြင့်လာစေရေး။

(ဂ) စျေးကွက်လိုအပ်ချက်နှင့်အညီလယ်ယာသားငါးထုတ်ကုန်များ၏ အရည်အသွေးနှင့် စံချိန်စံညွှန်းများပြည့်မီစေရေး။

(ဃ)လယ်ယာထွက်ကုန် ဈေးကွက်နှင့် ဈေးနှုန်းသတင်းအချက်အလက် ဖြန့်ဝေမှု လုပ်ငန်းများ ဖွံ့ဖြိုးတိုးတက်လာစေရေး။

(င)တိရစ္ဆာန်နှင့်အပင်ပိုးမွှားရောဂါဆိုင်ရာအန္တရာယ်ကင်းရှင်းရေး၊ စိုက်ပျိုးမွေးမြူထုတ်လုပ်မှု အလေ့အကျင့်ကောင်းများဖွံ့ဖြိုးတိုးတက်လာစေရေး။

(စ)လယ်ယာကဏ္ဍစဉ်ဆက်မပြတ်ဖွံ့ဖြိုးတိုးတက်စေရေး အတွက်စိုက်ပျိုးမွေးမြူထုတ်လုပ်သ ူအစုအဖွဲ့များ၊သမဝါယမအသင်းများပေါ်ထွန်းလာစေရေး။

(ဆ)မျိုးစေ့ကဏ္ဍဖွံ့ဖြိုးတိုးတက်စေရေးနှင့် သားငါးမျိုးကောင်းမျိုးသနှင့်မွေးမြူထုတ်လုပ် ဖြန့်ဖြူးမှုဖွံ့ဖြိုးတိုးတက်စေရေး၊ဒေသမျိုးရင်းများထိန်းသိမ်းရေးနှင့်မှတ်တမ်းထားရှိရေး။

(ဇ)လယ်ယာအခြေခံစက်မှုလုပ်ငန်းများ၊အသေးစားစက်မှုလက်မှုလုပ်ငန်းများ၊ ရက်ကန်း လုပ်ငန်းများ၊ ပန်း(၁၀)မျိုးအပါအဝင်ရိုးရာလက်မှုလုပ်ငန်းများ၊ အသက်မွေးဝမ်းကျောင်း လုပ်ငန်းများနှင့်ကျေးလက်အခြေခံအဆောက်အအုံများဖွံ့ဖြိုးတိုးတက်စေရေး။

(ဈ)သုတေသနနှင့်ပညာပေးလုပ်ငန်းများဖွံ့ဖြိုးတိုးတက်စေရေး၊ လူ့စွမ်းအားအရင်းအမြစ်ဖွံ့ဖြိုး တိုးတက်စေရေး။

ရည်မှန်းချက်များ
၇။ရည်မှန်းချက်များမှာ အောက်ပါအတိုင်းဖြစ်ပါသည်−

(က)စားနပ်ရိက္ခာဖူလုံရေး၊အာဟာရပြည့်ဝရေးနှင့်အစားအစာ ဘေးအန္တရာယ်ကင်းရှင်းရေး တိုးတက်လာစေရန်။

(ခ)တောင်သူလယ်သမားများ၏အခွင့်အရေး ပြည့်ဝစွာရရှိခံစားနိုင်စေရန်နှင့် အကျိုးစီးပွား မြင့်မားလာစေရန်။

(ဂ)လုပ်ကွက်ငယ်တောင်သူလယ်သမားများ၊တစ်ပိုင်တစ်နိုင် မွေးမြူသူများနှင့်ရေလုပ်သားများ ကိုအခြေခံ၍အစုအဖွဲ့များ၊သမဝါယမအသင်းများဖွဲ့စည်းပြီးအတွေးသစ်အမြင်သစ်များဖြင့်စိုက်ပျိုးမွေးမြူရေးလုပ်ငန်းများကိုခေတ်မီဖွံ့ဖြိုးတိုးတက်လာစေရန်နှင့်ယင်းလုပ်ငန်းများတွင်အမျိုးသမီးများ၏အခန်းကဏ္ဍကိုပိုမိုမြှင့်တင်ရန်။

(ဃ)လယ်ယာကုန်ထုတ်လမ်းများ၊ကျေးရွာအခြေခံအဆောက်အအုံများ၊မြေယာ အသုံးချမှု အစီအမံများရေးဆွဲဆောင်ရွက်ခြင်းနှင့်အသေးစားစက်မှုလက်မှုကုန်ထုတ်လုပ်ငန်းများတည်ထောင်ပေးခြင်းတို့ဖြင့်ကျေးလက်ဒေသများစဉ်ဆက်မပြတ်ဖွံ့ဖြိုးတိုးတက်စေပြီးတောင်သူလယ်သမားများ၏လူမှုစီးပွားဘဝတိုးတက်မြင့်မားလာစေရန်။

(င)စိုက်ပျိုးမွေးမြူရေးလုပ်ငန်းများနှင့်သမဝါယမလုပ်ငန်းများပိုမိုဖွံ့ဖြိုးတိုးတက် လာစေရန် လိုအပ်သောနည်းပညာနှင့်ငွေကြေးအရင်းအနှီးများအတွက် ပြည်တွင်းပြည်ပမှအကူအညီ၊အထောက်အပံ့နှင့်ချေးငွေများရရှိရေးကူညီဆောင်ရွက်ပေးရန်။

(စ)လယ်ယာကဏ္ဍတွင် ပြည်တွင်းပြည်ပရင်းနှီးမြှုပ်နှံမှုများ တိုးတက်လာစေရေး အားပေးဆောင်ရွက်ရန်။

(ဆ)ပြည်ပဈေးကွက်ဝင် အရည်အသွေးမြင့် လယ်ယာ၊ သားငါး ထုတ်ကုန်များတိုးမြှင့် ထုတ်လုပ်နိုင်ရေး အားပေးဆောင်ရွက်ရန်။

(ဇ)လယ်ယာအခြေခံစက်မှုလုပ်ငန်းများ၊ အသေးစား စက်မှုလက်မှုလုပ်ငန်းများ၊ ရက်ကန်းလုပ်ငန်းများ၊ ပန်း(၁၀)မျိုးအပါအဝင်ရိုးရာလက်မှုလုပ်ငန်းများနှင့် အသက်မွေးဝမ်းကျောင်းလုပ်ငန်းများ ဖွံ့ဖြိုးတိုးတက်လာစေရေး အားပေးဆောင်ရွက်ရန်။

(ဈ)သမဝါယမလုပ်ငန်းများနှင့်သမဝါယမစနစ်ပိုမိုအောင်မြင်စေရေးဆောင်ရွက်ရန်။

(ည)တန်ဖိုးကွင်းဆက်တစ်ခုလုံးဖွံ့ဖြိုးတိုးတက်ရေးအတွက်ထုတ်လုပ်မှု၊ဝန်ဆောင်မှု၊ကုန်သွယ်မှုနှင့်စားသုံးမှုကဏ္ဍများကိုထိရောက်စွာချိတ်ဆက်ဆောင်ရွက်သွားရန်။

(ဋ)ဆင်းရဲနွမ်းပါးမှုလျှော့ချရေး၊ ရေရှည်တည်တံ့သောလယ်ယာကဏ္ဍဖွံ့ဖြိုးတိုးတက်ရေးနှင့် ကျေးလက်ဒေသဖွံ့ဖြိုးရေးလုပ်ငန်းများတွင်သက်ဆိုင်ရာကဏ္ဍအသီးသီးမှအစိုးရအဖွဲ့အစည်းများအချင်းချင်းပူးပေါင်းဆောင်ရွက်ခြင်း၊အစိုးရနှင့်ပုဂ္ဂလိကအဖွဲ့အစည်းများပူးပေါင်းဆောင်ရွက်ခြင်းအပါအဝင်သက်ဆိုင်သူများအားလုံးပူးပေါင်းပါဝင်ဆောင်ရွက်သွားရန်။

မူဝါဒများ
၈။လယ်ယာကဏ္ဍမူဝါဒသည် ပြည်သူလူထုအားလုံး စားနပ်ရိက္ခာနှင့် အာဟာရဖူလုံမှုရရှိစေရေး၊ လုပ်ကွက်ငယ် တောင်သူလယ်သမားများအနေဖြင့် ထုတ်လုပ်နိုင်မှု စွမ်းအားမြင့်မားပြီး ဈေးကွက်၏ လိုအပ်ချက်နှင့်အညီ ထုတ်ကုန်ပစ္စည်း အမယ်စုံအောင် ထုတ်လုပ်ပေးနိုင်ခြင်းဖြင့် ဝင်ငွေမြင့်မားလာစေရေးနှင့် ပုဂ္ဂလိက လယ်ယာစီးပွားရေးလုပ်ငန်းကဏ္ဍ၏ နိုင်ငံတကာနှင့် ယှဉ်ပြိုင်နိုင်ပြီး ပြည်ပပို့ကုန်တိုးမြင့် တင်ပို့နိုင်ရေးတို့ကို ဖြည့်ဆည်းပေးရန်ဖြစ်ပါသည်။

၉။ မူဝါဒများသည် လယ်ယာကဏ္ဍတွင် ပါဝင်သည့် ထုတ်လုပ်သူများ၊ စီးပွားရေးလုပ်ငန်း ဆောင်ရွက်သူများ၊ စားသုံးသူများအားလုံးအတွက် အထောက်အကူဖြစ်စေမည့် ဥပဒေ မူဘောင်ဆိုင်ရာဝန်းကျင်ကောင်းများ ဖန်တီးပေးခြင်းနှင့်အတူ အခြေခံ အဆောက်အအုံများ၊ ဝန်ဆောင်မှုများနှင့် ပြည်တွင်းပြည်ပ ရင်းနှီးမြှပ်နှံမှုများပေါ်ထွန်းရရှိစေရေးဖြည့်ဆည်းပေးရန် ဖြစ်ပါသည်။ ရေ၊ မြေနှင့် သဘာဝသယံဇာတအရင်းအမြစ်များကို ဖော်ထုတ်သုံးစွဲရာတွင် အများပါဝင်မှု၊ အန္တရာယ်ကင်းရှင်းမှုရှိစေပြီး ထိရောက်စွာနှင့် ရေရှည်တည်တံ့စွာ စီမံခန့်ခွဲ အသုံးချနိုင်ရန်ဖြစ်ပါသည်။

၁၀။ မူဝါဒများမှာ အောက်ပါအတိုင်း ဖြစ်ပါသည်-

(က) မြေယာအသုံးချမှုနှင့် စီမံခန့်ခွဲမှုဆိုင်ရာ မူဝါဒ

(ခ ) ရေအရင်းအမြစ် အသုံးချမှုနှင့် စီမံခန့်ခွဲမှုဆိုင်ရာ မူဝါဒ

(ဂ )  ငွေကြေးအရင်းအနှီးဆိုင်ရာ မူဝါဒ

(ဃ) စက်မှုလယ်ယာ နှင့် သွင်းအားစုများ ဆိုင်ရာ မူဝါဒ

(င ) သမဝါယမလုပ်ငန်းများနှင့် သမဝါယမစနစ်ဖွံ့ဖြိုးရေးဆိုင်ရာ မူဝါဒ (စ) ကျေးလက်အခြေခံအဆောက်အအုံဖွံ့ဖြိုးရေးဆိုင်ရာ မူဝါဒ

(ဆ) သုတေသန၊ ဖွံ့ဖြိုးမှုနှင့် နည်းပညာ ဖြန့်ဖြူးခြင်းဆိုင်ရာ မူဝါဒ

(ဇ ) ဈေးကွက်၊ တန်ဖိုးမြှင့်ကုန်ထုတ်လုပ်ခြင်းနှင့် ပြည်ပတင်ပို့ ရောင်းချခြင်းဆိုင်ရာမူဝါဒ

(ဈ ) အုပ်ချုပ်မှု၊ အဖွဲ့အစည်းများနှင့် လူ့စွမ်းအားအရင်းအမြစ် ဖွံ့ဖြိုးတိုးတက်ရေးဆိုင်ရာ မူဝါဒ

(ည) သဘာဝပတ်ဝန်းကျင်ထိန်းသိမ်းရေးနှင့် ရာသီဥတုပြောင်းလဲမှုတုံ့ပြန်ဆောင်ရွက်ရေးဆိုင်ရာ မူဝါဒ',
            'en_name'=>'Current landscape of agriculture sector in Myanmar',
            'en_description'=>'About 70% of the population in Myanmar resides in rural area and agriculture is their main livelihood. While the agriculture sector contributes 30% of national GDP, both the benefits that are gained from farming as well as the socio-economic status of farmers are extremely low.

Furthermore, farmers’ the socioeconomic status has been adversely affected by the effects of climate change, and natural and man made disasters. In particular, the unpredictable weather changes that have taken place almost annually in the wake of Cyclone Nargis in 2008 have led to tremendous crop damage and losses in the agriculture sector. At the same time, the failure to take effective actions on existing forest and soil conservation measures have exacerbated the soil quality and fertility. As a consequence, most farmers have not been able to break out of the economic down town they have experienced from chronically low productivity, low income, and rising indebtedness. In order to uplift the socio-economic condition of farmers and improve the performance of the agriculture sector, the Ministry of Agriculture, Livestock and Irrigation (MOALI) has made it a priority to support the development of the national economy through effective implementation of a proactive portfolio far reaching policies and strategic thrusts.

The aim of these new policies and strategic thrusts, referred to as Agriculture Policy 2016, is to create the enabling environment that will promote the production of a greater and more diversified range of high value agricultural, livestock, and fishery products. A major intention of Agriculture Policy 2016 is to take advantage of the comparative advantage that Myanmar has in the production of these high value products that are in increasing demand in both domestic and international markets.

Vision
The vision of Agriculture Policy 2016 is:

An inclusive, competitive, food and nutrition secured and sustainable agricultural system contributing to the socio-economic well being of farmers and rural people and further development of the national economy.

Mission
The Mission of Agriculture Policy 2016 is:

To enable rural population and agribusiness enterprises that sustain themselves from the production and sales of diverse, safe and nutritious foods, and agricultural products to have access to innovative and sustainable production, processing, packaging, logistics, and marketing technologies to meet the growing domestic and global demands.

Goal
The followings are the goals of the Ministry.

Improve food security, food safety, and nutritional status of agricultural products of the people of Myanmar.

Enhance agricultural diversification programmes in compliance with the changing market and the prevailing agro-climatic condition of the area.

Satisfy the specified quality requirements and standard of agricultural, livestock and fishery products as dictated by the market.

Improve the dissemination of market and price information.

Prevent the incidence and spread of pests and diseases in crops and livestock by wide spread use of IPM measures of a preventative nature and through development and adoption of Good Agriculture Practices - GAP, Good Animal Husbandry Practices - GAHP and Good Aquaculture Practices –GaqP.

Support the formation of crops, livestock, and fisheries producer groups and cooperative societies that aim in sustaining the development of agriculture sector.

Develop the seed industry and highly performing pure animal breeds and fish species, and conserve native breeds and species.

Develop and enhance agro-based industries, small scale industries, and cottage industries traditional weaving and handicraft and the vocational education, and rural infrastructure that is needed to support the development of these industries.

Improve and enhance research, the extension service, and human resource programmes.

Objectives
The followings are the Objectives of the Ministry.

To ensure food and nutrition security and food safety.

To safeguard the rights of the farmers and to enhance their welfare and livelihood.

To advance and upgrade the agricultural sector by organizing farmers’ associations and cooperatives inclusive of small holders and subsistence farmers with promotion of gender role.

To attain sustainable rural development and to upgrade socio-economic conditions of rural people and farmers by improving rural infrastructure, enhancing access to markets, establishing small scale enterprises and designing participatory land use plans and management.

To seek technical assistance and mobilize the financial resources from local and international agencies in support of crops, livestock, fisheries and rural development in the agriculture sector.

To promote domestic and foreign direct investment in agriculture sector.

To promote competitiveness and value-added production of exportable agricultural commodities.

To encourage the development of agro-based industry, small scale enterprises, cottage industries, and income generation activities, including ten traditional artworks and crafts.

To improve the livelihood and income generation of the rural people through the development of agricultural cooperative enterprises and the cooperative system.

To develop effective linkages of production, trading, processing, services and consumer segments along the value chains of agricultural commodities.

To improve coordination mechanism of inter-governmental agencies, to foster public-private partnership and to establish collaboration and connectivity among all stakeholders including public agencies, academia, farmers’ associations, civil societies, and private sector with a view to enhancing rural development and reducing poverty .

Policies
Myanmar’s agricultural policy is to improve food and nutrition security and food safety for all the people and to enable smallholder farmers to increase their incomes through higher productivity and diversified production in response to market demand, as well as to enhance exports through and internationally competitive private agri-business sector.

These policies will provide consumers, producers, and businesses in the agricultural sector with a supportive legal and regulatory environment along with essential public investment, infrastructure and services as well as the mobilization of domestic and foreign investments. Specific policies to develop and utilize land, water and other natural resources in an inclusive, competitive, efficient, safe and sustainable manner can be organized into three categories: governance of land, water and other natural resources: access to inputs and technology for production: and value-added processing, marketing and export.

Policies related to agriculture sector of Myanmar are as follows:
Land Use and Management Policy.

Water Use and Management Policy.

Agricultural financing Policy.

Agricultural Mechanization and Input Sector Policy.

Cooperative Societies and Cooperative System Development Policy

Rural Infrastructure Development Policy.

Research, Development and Extension Policy.

Marketing, Value-added Processing and Export Policy.

Governance, Institutional and Human Resource Development Policy.

Environmental Conservation and Climate Change Resilience Policy.

Land Use and Management Policy

Land Use and Management Policy.
All farmers who produce crop, livestock and fish can access land in accordance with the existing Farm Land Laws, and also transfer, sell, mortgage, lend, exchange, give away, or inherit their land right including tilling and other land use.

To capture both fresh and brackish water fishery and produce fish systematically in accordance with the Laws.

To establish Special Zones for the production of agriculture, livestock and fishery products so as to improve productivity.

Arrangement will be made available for farmers’ freedom of choice to undertake any farming activities in accordance with Laws (agriculture, livestock, fishery sectors) that are economically viable, in the farm land which is granted to till and use.

Formation of groups of farmers, including crops and livestock, and fisherman, will be encouraged and supported and aimed to work within the Land Consolidation and Land Use Management system in the transformation to a larger scale farm parcels.

Assistance will be provided to those who are interested in farming activities, in particular, small holder farmers and farm labors, who are landless and have extremely limited financial resources will have the rights of tilling the land that they have cleared or developed as new farm land.

Development of new farm land will be undertaken in accordance with the National Land Use Policy.'
        ]);
        \App\News::create([
            'image'=>'/images/news/default.jpg',
            'my_name'=>'မြန်မာ့လယ်ယာကဏ္ဍအခြေအနေ',
            'my_description'=>'၁။မြန်မာနိုင်ငံလူဦးရေ၏၇၀%သည် ကျေးလက်ဒေသတွင်နေထိုင်လျက်ရှိကြပြီး အများစု၏ အဓိကစီးပွားရေးလုပ်ငန်းမှာ လယ်ယာလုပ်ငန်းဖြစ်ပါသည်။ တစ်မျိုးသားလုံး၏ ပြည်တွင်းအသားတင်ထုတ်လုပ်မှုနှင့် ဝန်ဆောင်မှုတန်ဘိုး (GDP) ၏၃၀% ခန့်ကိုလယ်ယာကဏ္ဍမှရရှိသော်လည်း တောင်သူလယ်သမားအများစု၏ လယ်ယာမြေနှင့်ပတ်သက်သော အကျိုးခံစားခွင့်အလွန်နည်းပါးလှပြီး ၎င်းတို့၏လူမှုစီးပွားဘဝသည်နိမ့်ကျလျက်ရှိပါသည်။

၂။ထို့အပြင်ရာသီဥတုပြောင်းလဲမှု၊သဘာဝဘေးနှင့် အခြားသောဘေးအန္တရာယ်များကျရောက်မှုတို့ကြောင့် တောင်သူလယ်သမားအများစု၏ လူမှုစီးပွားဘဝကိုပိုမိုထိခိုက်စေပါသည်။ အထူးသဖြင့်၂၀၀၈ခုနှစ်၊ နာဂစ်မုန်တိုင်းနောက်ပိုင်းတွင် နှစ်စဉ်လိုလိုရာသီဥတုဖောက်ပြန်လာခဲ့ရာလယ်ယာကဏ္ဍတွင် ထိခိုက်နစ်နာဆုံးရှုံးမှုများပေါ်ပေါက်ခဲ့ရပါသည်။ သစ်တောပြုန်းတီးခြင်းကိုကာကွယ်ထိန်းသိမ်းမှုနှင့် မြေဆီလွှာထိန်းသိမ်းမှုလုပ်ငန်းများကို စနစ်တကျထိရောက်စွာဆောင်ရွက်မှုအားနည်းခဲ့ခြင်းတို့ကြောင့် မြေဆီလွှာအရည်အသွေးကျဆင်းပျက်စီးလာလျက်ရှိပါသည်။ အကျိုးဆက်အနေဖြင့်တောင်သူလယ်သမားအများစုမှာ ဝင်ငွေနိမ့်ကျပြီးအကြွေးသံသရာမှ ရုန်းမထွက်နိုင်သည့်အပြင်အကြောင်းအမျိုးမျိုးဖြင့် ၎င်းတို့လုပ်ကိုင်သောလယ်ယာမြေများကို လက်လွှတ်ခဲ့ရခြင်းကြောင့် လယ်မဲ့ယာမဲ့များဘဝသို့ရောက်ခဲ့ရပြီး လူမှုစီးပွားဘဝအခြေအနေများကိုပိုမိုထိခိုက်စေခဲ့ပါသည်။ သို့ဖြစ်ပါ၍တောင်သူလယ်သမားတို့၏ လူမှုစီးပွားဘဝအခြေအနေမြင့်မားတိုးတက်လာစေရန်နှင့် လယ်ယာကဏ္ဍ ဖွံ့ဖြိုးတိုးတက်လာစေရန် ဝန်ကြီးဌာန၏မူဝါဒများနှင့်လုပ်ငန်းစဉ်များကို ခိုင်ခိုင်မာမာရေးဆွဲချမှတ်အကောင်အထည်ဖော်ခြင်းဖြင့် နိုင်ငံတော်၏စီးပွားရေးဖွံ့ဖြိုးတိုးတက်မှုကိုအထောက်အကူပြုနိုင်ရန်ကြိုးပမ်းဆောင်ရွက်ရမည်ဖြစ်ပါသည်။

၃။လယ်ယာကဏ္ဍမူဝါဒအသစ်တွင်မြန်မာနိုင်ငံ၏ လယ်ယာကဏ္ဍရှိအခွင့်အလမ်းကောင်းများကို ဖေါ်ထုတ်ပေးလိုက်ခြင်းဖြင့်လျင်မြန်စွာတိုးတက်လာနေသော ပြည်တွင်းပြည်ပဈေးကွက်ရှိစားသုံးသူများ၏ လိုအပ်ချက်များဖြစ်သောအဆင့်အတန်းမြင့်လယ်ယာနှင့်သားငါးထွက်ကုန်များကို အမျိုးအမယ်စုံလင်စွာဖြည့်ဆည်းပေးရန် ရည်ရွယ်ပါသည်။ ယင်းသို့သောမူဝါဒအရစိုက်ပျိုးမွေးမြူရေးနှင့်ထုတ်လုပ်ရေးလုပ်ငန်းများကိုပိုမိုကျယ်ပြန့်လာစေခြင်း၊ ထုတ်လုပ်မှုစွမ်းအားမြင့်မားလာခြင်းနှင့်အတူ လုပ်ကွက်ငယ်တောင်သူလယ်သမား၏ဝင်ငွေပါတိုးတက်လာစေခြင်း၊ စားသုံးသူများအတွက်ဘေးအန္တရာယ်ကင်း၍ အာဟာရပြည့်ဝသောစားနပ်ရိက္ခာများထုတ်လုပ်နိုင်ခြင်း၊လယ်ယာစီးပွားရေးလုပ်ငန်းများဖွံ့ဖြိုးလာခြင်းနှင့်အတူနိုင်ငံတကာဈေးကွက်နှင့် ချိတ်ဆက်၍ လယ်ယာထုတ်ကုန်များကို  ပြည်ပသို့ ပိုမိုတင်ပို့နိုင်ခြင်း၊ ကျေးလက်ဒေသလူမှုစီးပွားဘဝတိုးတက်လာခြင်း၊ ဖွံ့ဖြိုးတိုးတက်မှု ရေရှည်တည်တံ့ခြင်းစသော  အကျိုးကျေးဇူးများရရှိဖြစ်ပေါ်လာစေနိုင်ပါသည်။

မျှော်မှန်းချက်
၄။အားလုံးပါဝင်ပြီး နိုင်ငံတကာနှင့် ယှဉ်ပြိုင်နိုင်စွမ်းရှိသည့် ရေရှည်တည်တံ့သော လယ်ယာကုန်ထုတ်မှုစနစ် ထွန်းကားစေခြင်းဖြင့် စားနပ်ရိက္ခာဖူလုံ၍ အာဟာရပြည့်ဝစေပြီး ကျေးလက်နေပြည်သူများ၏ လူမှုစီးပွားဘဝမြင့်မားလာစေရန်နှင့် နိုင်ငံစီးပွားဖွံ့ဖြိုးတိုးတက်မှု ကို အထောက်အကူဖြစ်စေရန်။

လုပ်ငန်းတာဝန်များ
၅။ကျေးလက်နေ ပြည်သူများနှင့် လယ်ယာစီးပွားရေးလုပ်ငန်းများအား ခေတ်မီဆန်းသစ်၍ ရေရှည်တည်တံ့သောထုတ်လုပ်မှုနည်းပညာများ၊ ပြုပြင်ထုပ်ပိုး နည်းလမ်းများ၊ ထောက်ပံ့ပို့ဆောင်ရေး နည်းလမ်းများနှင့်ဈေးကွက်ဆိုင်ရာ နည်းပညာများကို အသုံးပြု၍ ကြီးထွားလာသောပြည်တွင်းပြည်ပဈေးကွက်ဝယ်လိုအားနှင့်အညီ ဘေးအန္တရာယ်ကင်းရှင်း၍အာဟာရပြည့်ဝသည့် အမယ်စုံလင်သောစားနပ်ရိက္ခာနှင့်စိုက်ပျိုးမွေးမြူရေးထုတ်ကုန်ပစ္စည်းများ တိုးတက်ထုတ်လုပ်ရာတွင် အထောက်အကူပြုနိုင်ရေး ဆောင်ရွက်ရန်။

ပန်းတိုင်
၆။ပန်းတိုင်မှာအောက်ပါအတိုင်းဖြစ်ပါသည်−

(က)စားနပ်ရိက္ခာဖူလုံမှု​၊ အာဟာရပြည့်ဝရေးနှင့်အစားအစာဘေးအန္တရာယ်ကင်းရှင်းမှုတိုးတက်စေ ရေး။

(ခ) ပြောင်းလဲလာသော ဈေးကွက်နှင့်အညီ ဒေသအလိုက် ရေမြေ၊ ရာသီဥတုတို့နှင့်ကိုက်ညီသည့် အမယ်စုံလင်သော လယ်ယာ၊ သားငါးထွက်ကုန်များ ထုတ်လုပ်မှုပုံစံ တိုးမြင့်လာစေရေး။

(ဂ) စျေးကွက်လိုအပ်ချက်နှင့်အညီလယ်ယာသားငါးထုတ်ကုန်များ၏ အရည်အသွေးနှင့် စံချိန်စံညွှန်းများပြည့်မီစေရေး။

(ဃ)လယ်ယာထွက်ကုန် ဈေးကွက်နှင့် ဈေးနှုန်းသတင်းအချက်အလက် ဖြန့်ဝေမှု လုပ်ငန်းများ ဖွံ့ဖြိုးတိုးတက်လာစေရေး။

(င)တိရစ္ဆာန်နှင့်အပင်ပိုးမွှားရောဂါဆိုင်ရာအန္တရာယ်ကင်းရှင်းရေး၊ စိုက်ပျိုးမွေးမြူထုတ်လုပ်မှု အလေ့အကျင့်ကောင်းများဖွံ့ဖြိုးတိုးတက်လာစေရေး။

(စ)လယ်ယာကဏ္ဍစဉ်ဆက်မပြတ်ဖွံ့ဖြိုးတိုးတက်စေရေး အတွက်စိုက်ပျိုးမွေးမြူထုတ်လုပ်သ ူအစုအဖွဲ့များ၊သမဝါယမအသင်းများပေါ်ထွန်းလာစေရေး။

(ဆ)မျိုးစေ့ကဏ္ဍဖွံ့ဖြိုးတိုးတက်စေရေးနှင့် သားငါးမျိုးကောင်းမျိုးသနှင့်မွေးမြူထုတ်လုပ် ဖြန့်ဖြူးမှုဖွံ့ဖြိုးတိုးတက်စေရေး၊ဒေသမျိုးရင်းများထိန်းသိမ်းရေးနှင့်မှတ်တမ်းထားရှိရေး။

(ဇ)လယ်ယာအခြေခံစက်မှုလုပ်ငန်းများ၊အသေးစားစက်မှုလက်မှုလုပ်ငန်းများ၊ ရက်ကန်း လုပ်ငန်းများ၊ ပန်း(၁၀)မျိုးအပါအဝင်ရိုးရာလက်မှုလုပ်ငန်းများ၊ အသက်မွေးဝမ်းကျောင်း လုပ်ငန်းများနှင့်ကျေးလက်အခြေခံအဆောက်အအုံများဖွံ့ဖြိုးတိုးတက်စေရေး။

(ဈ)သုတေသနနှင့်ပညာပေးလုပ်ငန်းများဖွံ့ဖြိုးတိုးတက်စေရေး၊ လူ့စွမ်းအားအရင်းအမြစ်ဖွံ့ဖြိုး တိုးတက်စေရေး။

ရည်မှန်းချက်များ
၇။ရည်မှန်းချက်များမှာ အောက်ပါအတိုင်းဖြစ်ပါသည်−

(က)စားနပ်ရိက္ခာဖူလုံရေး၊အာဟာရပြည့်ဝရေးနှင့်အစားအစာ ဘေးအန္တရာယ်ကင်းရှင်းရေး တိုးတက်လာစေရန်။

(ခ)တောင်သူလယ်သမားများ၏အခွင့်အရေး ပြည့်ဝစွာရရှိခံစားနိုင်စေရန်နှင့် အကျိုးစီးပွား မြင့်မားလာစေရန်။

(ဂ)လုပ်ကွက်ငယ်တောင်သူလယ်သမားများ၊တစ်ပိုင်တစ်နိုင် မွေးမြူသူများနှင့်ရေလုပ်သားများ ကိုအခြေခံ၍အစုအဖွဲ့များ၊သမဝါယမအသင်းများဖွဲ့စည်းပြီးအတွေးသစ်အမြင်သစ်များဖြင့်စိုက်ပျိုးမွေးမြူရေးလုပ်ငန်းများကိုခေတ်မီဖွံ့ဖြိုးတိုးတက်လာစေရန်နှင့်ယင်းလုပ်ငန်းများတွင်အမျိုးသမီးများ၏အခန်းကဏ္ဍကိုပိုမိုမြှင့်တင်ရန်။

(ဃ)လယ်ယာကုန်ထုတ်လမ်းများ၊ကျေးရွာအခြေခံအဆောက်အအုံများ၊မြေယာ အသုံးချမှု အစီအမံများရေးဆွဲဆောင်ရွက်ခြင်းနှင့်အသေးစားစက်မှုလက်မှုကုန်ထုတ်လုပ်ငန်းများတည်ထောင်ပေးခြင်းတို့ဖြင့်ကျေးလက်ဒေသများစဉ်ဆက်မပြတ်ဖွံ့ဖြိုးတိုးတက်စေပြီးတောင်သူလယ်သမားများ၏လူမှုစီးပွားဘဝတိုးတက်မြင့်မားလာစေရန်။

(င)စိုက်ပျိုးမွေးမြူရေးလုပ်ငန်းများနှင့်သမဝါယမလုပ်ငန်းများပိုမိုဖွံ့ဖြိုးတိုးတက် လာစေရန် လိုအပ်သောနည်းပညာနှင့်ငွေကြေးအရင်းအနှီးများအတွက် ပြည်တွင်းပြည်ပမှအကူအညီ၊အထောက်အပံ့နှင့်ချေးငွေများရရှိရေးကူညီဆောင်ရွက်ပေးရန်။

(စ)လယ်ယာကဏ္ဍတွင် ပြည်တွင်းပြည်ပရင်းနှီးမြှုပ်နှံမှုများ တိုးတက်လာစေရေး အားပေးဆောင်ရွက်ရန်။

(ဆ)ပြည်ပဈေးကွက်ဝင် အရည်အသွေးမြင့် လယ်ယာ၊ သားငါး ထုတ်ကုန်များတိုးမြှင့် ထုတ်လုပ်နိုင်ရေး အားပေးဆောင်ရွက်ရန်။

(ဇ)လယ်ယာအခြေခံစက်မှုလုပ်ငန်းများ၊ အသေးစား စက်မှုလက်မှုလုပ်ငန်းများ၊ ရက်ကန်းလုပ်ငန်းများ၊ ပန်း(၁၀)မျိုးအပါအဝင်ရိုးရာလက်မှုလုပ်ငန်းများနှင့် အသက်မွေးဝမ်းကျောင်းလုပ်ငန်းများ ဖွံ့ဖြိုးတိုးတက်လာစေရေး အားပေးဆောင်ရွက်ရန်။

(ဈ)သမဝါယမလုပ်ငန်းများနှင့်သမဝါယမစနစ်ပိုမိုအောင်မြင်စေရေးဆောင်ရွက်ရန်။

(ည)တန်ဖိုးကွင်းဆက်တစ်ခုလုံးဖွံ့ဖြိုးတိုးတက်ရေးအတွက်ထုတ်လုပ်မှု၊ဝန်ဆောင်မှု၊ကုန်သွယ်မှုနှင့်စားသုံးမှုကဏ္ဍများကိုထိရောက်စွာချိတ်ဆက်ဆောင်ရွက်သွားရန်။

(ဋ)ဆင်းရဲနွမ်းပါးမှုလျှော့ချရေး၊ ရေရှည်တည်တံ့သောလယ်ယာကဏ္ဍဖွံ့ဖြိုးတိုးတက်ရေးနှင့် ကျေးလက်ဒေသဖွံ့ဖြိုးရေးလုပ်ငန်းများတွင်သက်ဆိုင်ရာကဏ္ဍအသီးသီးမှအစိုးရအဖွဲ့အစည်းများအချင်းချင်းပူးပေါင်းဆောင်ရွက်ခြင်း၊အစိုးရနှင့်ပုဂ္ဂလိကအဖွဲ့အစည်းများပူးပေါင်းဆောင်ရွက်ခြင်းအပါအဝင်သက်ဆိုင်သူများအားလုံးပူးပေါင်းပါဝင်ဆောင်ရွက်သွားရန်။

မူဝါဒများ
၈။လယ်ယာကဏ္ဍမူဝါဒသည် ပြည်သူလူထုအားလုံး စားနပ်ရိက္ခာနှင့် အာဟာရဖူလုံမှုရရှိစေရေး၊ လုပ်ကွက်ငယ် တောင်သူလယ်သမားများအနေဖြင့် ထုတ်လုပ်နိုင်မှု စွမ်းအားမြင့်မားပြီး ဈေးကွက်၏ လိုအပ်ချက်နှင့်အညီ ထုတ်ကုန်ပစ္စည်း အမယ်စုံအောင် ထုတ်လုပ်ပေးနိုင်ခြင်းဖြင့် ဝင်ငွေမြင့်မားလာစေရေးနှင့် ပုဂ္ဂလိက လယ်ယာစီးပွားရေးလုပ်ငန်းကဏ္ဍ၏ နိုင်ငံတကာနှင့် ယှဉ်ပြိုင်နိုင်ပြီး ပြည်ပပို့ကုန်တိုးမြင့် တင်ပို့နိုင်ရေးတို့ကို ဖြည့်ဆည်းပေးရန်ဖြစ်ပါသည်။

၉။ မူဝါဒများသည် လယ်ယာကဏ္ဍတွင် ပါဝင်သည့် ထုတ်လုပ်သူများ၊ စီးပွားရေးလုပ်ငန်း ဆောင်ရွက်သူများ၊ စားသုံးသူများအားလုံးအတွက် အထောက်အကူဖြစ်စေမည့် ဥပဒေ မူဘောင်ဆိုင်ရာဝန်းကျင်ကောင်းများ ဖန်တီးပေးခြင်းနှင့်အတူ အခြေခံ အဆောက်အအုံများ၊ ဝန်ဆောင်မှုများနှင့် ပြည်တွင်းပြည်ပ ရင်းနှီးမြှပ်နှံမှုများပေါ်ထွန်းရရှိစေရေးဖြည့်ဆည်းပေးရန် ဖြစ်ပါသည်။ ရေ၊ မြေနှင့် သဘာဝသယံဇာတအရင်းအမြစ်များကို ဖော်ထုတ်သုံးစွဲရာတွင် အများပါဝင်မှု၊ အန္တရာယ်ကင်းရှင်းမှုရှိစေပြီး ထိရောက်စွာနှင့် ရေရှည်တည်တံ့စွာ စီမံခန့်ခွဲ အသုံးချနိုင်ရန်ဖြစ်ပါသည်။

၁၀။ မူဝါဒများမှာ အောက်ပါအတိုင်း ဖြစ်ပါသည်-

(က) မြေယာအသုံးချမှုနှင့် စီမံခန့်ခွဲမှုဆိုင်ရာ မူဝါဒ

(ခ ) ရေအရင်းအမြစ် အသုံးချမှုနှင့် စီမံခန့်ခွဲမှုဆိုင်ရာ မူဝါဒ

(ဂ )  ငွေကြေးအရင်းအနှီးဆိုင်ရာ မူဝါဒ

(ဃ) စက်မှုလယ်ယာ နှင့် သွင်းအားစုများ ဆိုင်ရာ မူဝါဒ

(င ) သမဝါယမလုပ်ငန်းများနှင့် သမဝါယမစနစ်ဖွံ့ဖြိုးရေးဆိုင်ရာ မူဝါဒ (စ) ကျေးလက်အခြေခံအဆောက်အအုံဖွံ့ဖြိုးရေးဆိုင်ရာ မူဝါဒ

(ဆ) သုတေသန၊ ဖွံ့ဖြိုးမှုနှင့် နည်းပညာ ဖြန့်ဖြူးခြင်းဆိုင်ရာ မူဝါဒ

(ဇ ) ဈေးကွက်၊ တန်ဖိုးမြှင့်ကုန်ထုတ်လုပ်ခြင်းနှင့် ပြည်ပတင်ပို့ ရောင်းချခြင်းဆိုင်ရာမူဝါဒ

(ဈ ) အုပ်ချုပ်မှု၊ အဖွဲ့အစည်းများနှင့် လူ့စွမ်းအားအရင်းအမြစ် ဖွံ့ဖြိုးတိုးတက်ရေးဆိုင်ရာ မူဝါဒ

(ည) သဘာဝပတ်ဝန်းကျင်ထိန်းသိမ်းရေးနှင့် ရာသီဥတုပြောင်းလဲမှုတုံ့ပြန်ဆောင်ရွက်ရေးဆိုင်ရာ မူဝါဒ',
            'en_name'=>'Current landscape of agriculture sector in Myanmar',
            'en_description'=>'About 70% of the population in Myanmar resides in rural area and agriculture is their main livelihood. While the agriculture sector contributes 30% of national GDP, both the benefits that are gained from farming as well as the socio-economic status of farmers are extremely low.

Furthermore, farmers’ the socioeconomic status has been adversely affected by the effects of climate change, and natural and man made disasters. In particular, the unpredictable weather changes that have taken place almost annually in the wake of Cyclone Nargis in 2008 have led to tremendous crop damage and losses in the agriculture sector. At the same time, the failure to take effective actions on existing forest and soil conservation measures have exacerbated the soil quality and fertility. As a consequence, most farmers have not been able to break out of the economic down town they have experienced from chronically low productivity, low income, and rising indebtedness. In order to uplift the socio-economic condition of farmers and improve the performance of the agriculture sector, the Ministry of Agriculture, Livestock and Irrigation (MOALI) has made it a priority to support the development of the national economy through effective implementation of a proactive portfolio far reaching policies and strategic thrusts.

The aim of these new policies and strategic thrusts, referred to as Agriculture Policy 2016, is to create the enabling environment that will promote the production of a greater and more diversified range of high value agricultural, livestock, and fishery products. A major intention of Agriculture Policy 2016 is to take advantage of the comparative advantage that Myanmar has in the production of these high value products that are in increasing demand in both domestic and international markets.

Vision
The vision of Agriculture Policy 2016 is:

An inclusive, competitive, food and nutrition secured and sustainable agricultural system contributing to the socio-economic well being of farmers and rural people and further development of the national economy.

Mission
The Mission of Agriculture Policy 2016 is:

To enable rural population and agribusiness enterprises that sustain themselves from the production and sales of diverse, safe and nutritious foods, and agricultural products to have access to innovative and sustainable production, processing, packaging, logistics, and marketing technologies to meet the growing domestic and global demands.

Goal
The followings are the goals of the Ministry.

Improve food security, food safety, and nutritional status of agricultural products of the people of Myanmar.

Enhance agricultural diversification programmes in compliance with the changing market and the prevailing agro-climatic condition of the area.

Satisfy the specified quality requirements and standard of agricultural, livestock and fishery products as dictated by the market.

Improve the dissemination of market and price information.

Prevent the incidence and spread of pests and diseases in crops and livestock by wide spread use of IPM measures of a preventative nature and through development and adoption of Good Agriculture Practices - GAP, Good Animal Husbandry Practices - GAHP and Good Aquaculture Practices –GaqP.

Support the formation of crops, livestock, and fisheries producer groups and cooperative societies that aim in sustaining the development of agriculture sector.

Develop the seed industry and highly performing pure animal breeds and fish species, and conserve native breeds and species.

Develop and enhance agro-based industries, small scale industries, and cottage industries traditional weaving and handicraft and the vocational education, and rural infrastructure that is needed to support the development of these industries.

Improve and enhance research, the extension service, and human resource programmes.

Objectives
The followings are the Objectives of the Ministry.

To ensure food and nutrition security and food safety.

To safeguard the rights of the farmers and to enhance their welfare and livelihood.

To advance and upgrade the agricultural sector by organizing farmers’ associations and cooperatives inclusive of small holders and subsistence farmers with promotion of gender role.

To attain sustainable rural development and to upgrade socio-economic conditions of rural people and farmers by improving rural infrastructure, enhancing access to markets, establishing small scale enterprises and designing participatory land use plans and management.

To seek technical assistance and mobilize the financial resources from local and international agencies in support of crops, livestock, fisheries and rural development in the agriculture sector.

To promote domestic and foreign direct investment in agriculture sector.

To promote competitiveness and value-added production of exportable agricultural commodities.

To encourage the development of agro-based industry, small scale enterprises, cottage industries, and income generation activities, including ten traditional artworks and crafts.

To improve the livelihood and income generation of the rural people through the development of agricultural cooperative enterprises and the cooperative system.

To develop effective linkages of production, trading, processing, services and consumer segments along the value chains of agricultural commodities.

To improve coordination mechanism of inter-governmental agencies, to foster public-private partnership and to establish collaboration and connectivity among all stakeholders including public agencies, academia, farmers’ associations, civil societies, and private sector with a view to enhancing rural development and reducing poverty .

Policies
Myanmar’s agricultural policy is to improve food and nutrition security and food safety for all the people and to enable smallholder farmers to increase their incomes through higher productivity and diversified production in response to market demand, as well as to enhance exports through and internationally competitive private agri-business sector.

These policies will provide consumers, producers, and businesses in the agricultural sector with a supportive legal and regulatory environment along with essential public investment, infrastructure and services as well as the mobilization of domestic and foreign investments. Specific policies to develop and utilize land, water and other natural resources in an inclusive, competitive, efficient, safe and sustainable manner can be organized into three categories: governance of land, water and other natural resources: access to inputs and technology for production: and value-added processing, marketing and export.

Policies related to agriculture sector of Myanmar are as follows:
Land Use and Management Policy.

Water Use and Management Policy.

Agricultural financing Policy.

Agricultural Mechanization and Input Sector Policy.

Cooperative Societies and Cooperative System Development Policy

Rural Infrastructure Development Policy.

Research, Development and Extension Policy.

Marketing, Value-added Processing and Export Policy.

Governance, Institutional and Human Resource Development Policy.

Environmental Conservation and Climate Change Resilience Policy.

Land Use and Management Policy

Land Use and Management Policy.
All farmers who produce crop, livestock and fish can access land in accordance with the existing Farm Land Laws, and also transfer, sell, mortgage, lend, exchange, give away, or inherit their land right including tilling and other land use.

To capture both fresh and brackish water fishery and produce fish systematically in accordance with the Laws.

To establish Special Zones for the production of agriculture, livestock and fishery products so as to improve productivity.

Arrangement will be made available for farmers’ freedom of choice to undertake any farming activities in accordance with Laws (agriculture, livestock, fishery sectors) that are economically viable, in the farm land which is granted to till and use.

Formation of groups of farmers, including crops and livestock, and fisherman, will be encouraged and supported and aimed to work within the Land Consolidation and Land Use Management system in the transformation to a larger scale farm parcels.

Assistance will be provided to those who are interested in farming activities, in particular, small holder farmers and farm labors, who are landless and have extremely limited financial resources will have the rights of tilling the land that they have cleared or developed as new farm land.

Development of new farm land will be undertaken in accordance with the National Land Use Policy.'
        ]);
        \App\News::create([
            'image'=>'/images/news/default.jpg',
            'my_name'=>'မြန်မာ့လယ်ယာကဏ္ဍအခြေအနေ',
            'my_description'=>'၁။မြန်မာနိုင်ငံလူဦးရေ၏၇၀%သည် ကျေးလက်ဒေသတွင်နေထိုင်လျက်ရှိကြပြီး အများစု၏ အဓိကစီးပွားရေးလုပ်ငန်းမှာ လယ်ယာလုပ်ငန်းဖြစ်ပါသည်။ တစ်မျိုးသားလုံး၏ ပြည်တွင်းအသားတင်ထုတ်လုပ်မှုနှင့် ဝန်ဆောင်မှုတန်ဘိုး (GDP) ၏၃၀% ခန့်ကိုလယ်ယာကဏ္ဍမှရရှိသော်လည်း တောင်သူလယ်သမားအများစု၏ လယ်ယာမြေနှင့်ပတ်သက်သော အကျိုးခံစားခွင့်အလွန်နည်းပါးလှပြီး ၎င်းတို့၏လူမှုစီးပွားဘဝသည်နိမ့်ကျလျက်ရှိပါသည်။

၂။ထို့အပြင်ရာသီဥတုပြောင်းလဲမှု၊သဘာဝဘေးနှင့် အခြားသောဘေးအန္တရာယ်များကျရောက်မှုတို့ကြောင့် တောင်သူလယ်သမားအများစု၏ လူမှုစီးပွားဘဝကိုပိုမိုထိခိုက်စေပါသည်။ အထူးသဖြင့်၂၀၀၈ခုနှစ်၊ နာဂစ်မုန်တိုင်းနောက်ပိုင်းတွင် နှစ်စဉ်လိုလိုရာသီဥတုဖောက်ပြန်လာခဲ့ရာလယ်ယာကဏ္ဍတွင် ထိခိုက်နစ်နာဆုံးရှုံးမှုများပေါ်ပေါက်ခဲ့ရပါသည်။ သစ်တောပြုန်းတီးခြင်းကိုကာကွယ်ထိန်းသိမ်းမှုနှင့် မြေဆီလွှာထိန်းသိမ်းမှုလုပ်ငန်းများကို စနစ်တကျထိရောက်စွာဆောင်ရွက်မှုအားနည်းခဲ့ခြင်းတို့ကြောင့် မြေဆီလွှာအရည်အသွေးကျဆင်းပျက်စီးလာလျက်ရှိပါသည်။ အကျိုးဆက်အနေဖြင့်တောင်သူလယ်သမားအများစုမှာ ဝင်ငွေနိမ့်ကျပြီးအကြွေးသံသရာမှ ရုန်းမထွက်နိုင်သည့်အပြင်အကြောင်းအမျိုးမျိုးဖြင့် ၎င်းတို့လုပ်ကိုင်သောလယ်ယာမြေများကို လက်လွှတ်ခဲ့ရခြင်းကြောင့် လယ်မဲ့ယာမဲ့များဘဝသို့ရောက်ခဲ့ရပြီး လူမှုစီးပွားဘဝအခြေအနေများကိုပိုမိုထိခိုက်စေခဲ့ပါသည်။ သို့ဖြစ်ပါ၍တောင်သူလယ်သမားတို့၏ လူမှုစီးပွားဘဝအခြေအနေမြင့်မားတိုးတက်လာစေရန်နှင့် လယ်ယာကဏ္ဍ ဖွံ့ဖြိုးတိုးတက်လာစေရန် ဝန်ကြီးဌာန၏မူဝါဒများနှင့်လုပ်ငန်းစဉ်များကို ခိုင်ခိုင်မာမာရေးဆွဲချမှတ်အကောင်အထည်ဖော်ခြင်းဖြင့် နိုင်ငံတော်၏စီးပွားရေးဖွံ့ဖြိုးတိုးတက်မှုကိုအထောက်အကူပြုနိုင်ရန်ကြိုးပမ်းဆောင်ရွက်ရမည်ဖြစ်ပါသည်။

၃။လယ်ယာကဏ္ဍမူဝါဒအသစ်တွင်မြန်မာနိုင်ငံ၏ လယ်ယာကဏ္ဍရှိအခွင့်အလမ်းကောင်းများကို ဖေါ်ထုတ်ပေးလိုက်ခြင်းဖြင့်လျင်မြန်စွာတိုးတက်လာနေသော ပြည်တွင်းပြည်ပဈေးကွက်ရှိစားသုံးသူများ၏ လိုအပ်ချက်များဖြစ်သောအဆင့်အတန်းမြင့်လယ်ယာနှင့်သားငါးထွက်ကုန်များကို အမျိုးအမယ်စုံလင်စွာဖြည့်ဆည်းပေးရန် ရည်ရွယ်ပါသည်။ ယင်းသို့သောမူဝါဒအရစိုက်ပျိုးမွေးမြူရေးနှင့်ထုတ်လုပ်ရေးလုပ်ငန်းများကိုပိုမိုကျယ်ပြန့်လာစေခြင်း၊ ထုတ်လုပ်မှုစွမ်းအားမြင့်မားလာခြင်းနှင့်အတူ လုပ်ကွက်ငယ်တောင်သူလယ်သမား၏ဝင်ငွေပါတိုးတက်လာစေခြင်း၊ စားသုံးသူများအတွက်ဘေးအန္တရာယ်ကင်း၍ အာဟာရပြည့်ဝသောစားနပ်ရိက္ခာများထုတ်လုပ်နိုင်ခြင်း၊လယ်ယာစီးပွားရေးလုပ်ငန်းများဖွံ့ဖြိုးလာခြင်းနှင့်အတူနိုင်ငံတကာဈေးကွက်နှင့် ချိတ်ဆက်၍ လယ်ယာထုတ်ကုန်များကို  ပြည်ပသို့ ပိုမိုတင်ပို့နိုင်ခြင်း၊ ကျေးလက်ဒေသလူမှုစီးပွားဘဝတိုးတက်လာခြင်း၊ ဖွံ့ဖြိုးတိုးတက်မှု ရေရှည်တည်တံ့ခြင်းစသော  အကျိုးကျေးဇူးများရရှိဖြစ်ပေါ်လာစေနိုင်ပါသည်။

မျှော်မှန်းချက်
၄။အားလုံးပါဝင်ပြီး နိုင်ငံတကာနှင့် ယှဉ်ပြိုင်နိုင်စွမ်းရှိသည့် ရေရှည်တည်တံ့သော လယ်ယာကုန်ထုတ်မှုစနစ် ထွန်းကားစေခြင်းဖြင့် စားနပ်ရိက္ခာဖူလုံ၍ အာဟာရပြည့်ဝစေပြီး ကျေးလက်နေပြည်သူများ၏ လူမှုစီးပွားဘဝမြင့်မားလာစေရန်နှင့် နိုင်ငံစီးပွားဖွံ့ဖြိုးတိုးတက်မှု ကို အထောက်အကူဖြစ်စေရန်။

လုပ်ငန်းတာဝန်များ
၅။ကျေးလက်နေ ပြည်သူများနှင့် လယ်ယာစီးပွားရေးလုပ်ငန်းများအား ခေတ်မီဆန်းသစ်၍ ရေရှည်တည်တံ့သောထုတ်လုပ်မှုနည်းပညာများ၊ ပြုပြင်ထုပ်ပိုး နည်းလမ်းများ၊ ထောက်ပံ့ပို့ဆောင်ရေး နည်းလမ်းများနှင့်ဈေးကွက်ဆိုင်ရာ နည်းပညာများကို အသုံးပြု၍ ကြီးထွားလာသောပြည်တွင်းပြည်ပဈေးကွက်ဝယ်လိုအားနှင့်အညီ ဘေးအန္တရာယ်ကင်းရှင်း၍အာဟာရပြည့်ဝသည့် အမယ်စုံလင်သောစားနပ်ရိက္ခာနှင့်စိုက်ပျိုးမွေးမြူရေးထုတ်ကုန်ပစ္စည်းများ တိုးတက်ထုတ်လုပ်ရာတွင် အထောက်အကူပြုနိုင်ရေး ဆောင်ရွက်ရန်။

ပန်းတိုင်
၆။ပန်းတိုင်မှာအောက်ပါအတိုင်းဖြစ်ပါသည်−

(က)စားနပ်ရိက္ခာဖူလုံမှု​၊ အာဟာရပြည့်ဝရေးနှင့်အစားအစာဘေးအန္တရာယ်ကင်းရှင်းမှုတိုးတက်စေ ရေး။

(ခ) ပြောင်းလဲလာသော ဈေးကွက်နှင့်အညီ ဒေသအလိုက် ရေမြေ၊ ရာသီဥတုတို့နှင့်ကိုက်ညီသည့် အမယ်စုံလင်သော လယ်ယာ၊ သားငါးထွက်ကုန်များ ထုတ်လုပ်မှုပုံစံ တိုးမြင့်လာစေရေး။

(ဂ) စျေးကွက်လိုအပ်ချက်နှင့်အညီလယ်ယာသားငါးထုတ်ကုန်များ၏ အရည်အသွေးနှင့် စံချိန်စံညွှန်းများပြည့်မီစေရေး။

(ဃ)လယ်ယာထွက်ကုန် ဈေးကွက်နှင့် ဈေးနှုန်းသတင်းအချက်အလက် ဖြန့်ဝေမှု လုပ်ငန်းများ ဖွံ့ဖြိုးတိုးတက်လာစေရေး။

(င)တိရစ္ဆာန်နှင့်အပင်ပိုးမွှားရောဂါဆိုင်ရာအန္တရာယ်ကင်းရှင်းရေး၊ စိုက်ပျိုးမွေးမြူထုတ်လုပ်မှု အလေ့အကျင့်ကောင်းများဖွံ့ဖြိုးတိုးတက်လာစေရေး။

(စ)လယ်ယာကဏ္ဍစဉ်ဆက်မပြတ်ဖွံ့ဖြိုးတိုးတက်စေရေး အတွက်စိုက်ပျိုးမွေးမြူထုတ်လုပ်သ ူအစုအဖွဲ့များ၊သမဝါယမအသင်းများပေါ်ထွန်းလာစေရေး။

(ဆ)မျိုးစေ့ကဏ္ဍဖွံ့ဖြိုးတိုးတက်စေရေးနှင့် သားငါးမျိုးကောင်းမျိုးသနှင့်မွေးမြူထုတ်လုပ် ဖြန့်ဖြူးမှုဖွံ့ဖြိုးတိုးတက်စေရေး၊ဒေသမျိုးရင်းများထိန်းသိမ်းရေးနှင့်မှတ်တမ်းထားရှိရေး။

(ဇ)လယ်ယာအခြေခံစက်မှုလုပ်ငန်းများ၊အသေးစားစက်မှုလက်မှုလုပ်ငန်းများ၊ ရက်ကန်း လုပ်ငန်းများ၊ ပန်း(၁၀)မျိုးအပါအဝင်ရိုးရာလက်မှုလုပ်ငန်းများ၊ အသက်မွေးဝမ်းကျောင်း လုပ်ငန်းများနှင့်ကျေးလက်အခြေခံအဆောက်အအုံများဖွံ့ဖြိုးတိုးတက်စေရေး။

(ဈ)သုတေသနနှင့်ပညာပေးလုပ်ငန်းများဖွံ့ဖြိုးတိုးတက်စေရေး၊ လူ့စွမ်းအားအရင်းအမြစ်ဖွံ့ဖြိုး တိုးတက်စေရေး။

ရည်မှန်းချက်များ
၇။ရည်မှန်းချက်များမှာ အောက်ပါအတိုင်းဖြစ်ပါသည်−

(က)စားနပ်ရိက္ခာဖူလုံရေး၊အာဟာရပြည့်ဝရေးနှင့်အစားအစာ ဘေးအန္တရာယ်ကင်းရှင်းရေး တိုးတက်လာစေရန်။

(ခ)တောင်သူလယ်သမားများ၏အခွင့်အရေး ပြည့်ဝစွာရရှိခံစားနိုင်စေရန်နှင့် အကျိုးစီးပွား မြင့်မားလာစေရန်။

(ဂ)လုပ်ကွက်ငယ်တောင်သူလယ်သမားများ၊တစ်ပိုင်တစ်နိုင် မွေးမြူသူများနှင့်ရေလုပ်သားများ ကိုအခြေခံ၍အစုအဖွဲ့များ၊သမဝါယမအသင်းများဖွဲ့စည်းပြီးအတွေးသစ်အမြင်သစ်များဖြင့်စိုက်ပျိုးမွေးမြူရေးလုပ်ငန်းများကိုခေတ်မီဖွံ့ဖြိုးတိုးတက်လာစေရန်နှင့်ယင်းလုပ်ငန်းများတွင်အမျိုးသမီးများ၏အခန်းကဏ္ဍကိုပိုမိုမြှင့်တင်ရန်။

(ဃ)လယ်ယာကုန်ထုတ်လမ်းများ၊ကျေးရွာအခြေခံအဆောက်အအုံများ၊မြေယာ အသုံးချမှု အစီအမံများရေးဆွဲဆောင်ရွက်ခြင်းနှင့်အသေးစားစက်မှုလက်မှုကုန်ထုတ်လုပ်ငန်းများတည်ထောင်ပေးခြင်းတို့ဖြင့်ကျေးလက်ဒေသများစဉ်ဆက်မပြတ်ဖွံ့ဖြိုးတိုးတက်စေပြီးတောင်သူလယ်သမားများ၏လူမှုစီးပွားဘဝတိုးတက်မြင့်မားလာစေရန်။

(င)စိုက်ပျိုးမွေးမြူရေးလုပ်ငန်းများနှင့်သမဝါယမလုပ်ငန်းများပိုမိုဖွံ့ဖြိုးတိုးတက် လာစေရန် လိုအပ်သောနည်းပညာနှင့်ငွေကြေးအရင်းအနှီးများအတွက် ပြည်တွင်းပြည်ပမှအကူအညီ၊အထောက်အပံ့နှင့်ချေးငွေများရရှိရေးကူညီဆောင်ရွက်ပေးရန်။

(စ)လယ်ယာကဏ္ဍတွင် ပြည်တွင်းပြည်ပရင်းနှီးမြှုပ်နှံမှုများ တိုးတက်လာစေရေး အားပေးဆောင်ရွက်ရန်။

(ဆ)ပြည်ပဈေးကွက်ဝင် အရည်အသွေးမြင့် လယ်ယာ၊ သားငါး ထုတ်ကုန်များတိုးမြှင့် ထုတ်လုပ်နိုင်ရေး အားပေးဆောင်ရွက်ရန်။

(ဇ)လယ်ယာအခြေခံစက်မှုလုပ်ငန်းများ၊ အသေးစား စက်မှုလက်မှုလုပ်ငန်းများ၊ ရက်ကန်းလုပ်ငန်းများ၊ ပန်း(၁၀)မျိုးအပါအဝင်ရိုးရာလက်မှုလုပ်ငန်းများနှင့် အသက်မွေးဝမ်းကျောင်းလုပ်ငန်းများ ဖွံ့ဖြိုးတိုးတက်လာစေရေး အားပေးဆောင်ရွက်ရန်။

(ဈ)သမဝါယမလုပ်ငန်းများနှင့်သမဝါယမစနစ်ပိုမိုအောင်မြင်စေရေးဆောင်ရွက်ရန်။

(ည)တန်ဖိုးကွင်းဆက်တစ်ခုလုံးဖွံ့ဖြိုးတိုးတက်ရေးအတွက်ထုတ်လုပ်မှု၊ဝန်ဆောင်မှု၊ကုန်သွယ်မှုနှင့်စားသုံးမှုကဏ္ဍများကိုထိရောက်စွာချိတ်ဆက်ဆောင်ရွက်သွားရန်။

(ဋ)ဆင်းရဲနွမ်းပါးမှုလျှော့ချရေး၊ ရေရှည်တည်တံ့သောလယ်ယာကဏ္ဍဖွံ့ဖြိုးတိုးတက်ရေးနှင့် ကျေးလက်ဒေသဖွံ့ဖြိုးရေးလုပ်ငန်းများတွင်သက်ဆိုင်ရာကဏ္ဍအသီးသီးမှအစိုးရအဖွဲ့အစည်းများအချင်းချင်းပူးပေါင်းဆောင်ရွက်ခြင်း၊အစိုးရနှင့်ပုဂ္ဂလိကအဖွဲ့အစည်းများပူးပေါင်းဆောင်ရွက်ခြင်းအပါအဝင်သက်ဆိုင်သူများအားလုံးပူးပေါင်းပါဝင်ဆောင်ရွက်သွားရန်။

မူဝါဒများ
၈။လယ်ယာကဏ္ဍမူဝါဒသည် ပြည်သူလူထုအားလုံး စားနပ်ရိက္ခာနှင့် အာဟာရဖူလုံမှုရရှိစေရေး၊ လုပ်ကွက်ငယ် တောင်သူလယ်သမားများအနေဖြင့် ထုတ်လုပ်နိုင်မှု စွမ်းအားမြင့်မားပြီး ဈေးကွက်၏ လိုအပ်ချက်နှင့်အညီ ထုတ်ကုန်ပစ္စည်း အမယ်စုံအောင် ထုတ်လုပ်ပေးနိုင်ခြင်းဖြင့် ဝင်ငွေမြင့်မားလာစေရေးနှင့် ပုဂ္ဂလိက လယ်ယာစီးပွားရေးလုပ်ငန်းကဏ္ဍ၏ နိုင်ငံတကာနှင့် ယှဉ်ပြိုင်နိုင်ပြီး ပြည်ပပို့ကုန်တိုးမြင့် တင်ပို့နိုင်ရေးတို့ကို ဖြည့်ဆည်းပေးရန်ဖြစ်ပါသည်။

၉။ မူဝါဒများသည် လယ်ယာကဏ္ဍတွင် ပါဝင်သည့် ထုတ်လုပ်သူများ၊ စီးပွားရေးလုပ်ငန်း ဆောင်ရွက်သူများ၊ စားသုံးသူများအားလုံးအတွက် အထောက်အကူဖြစ်စေမည့် ဥပဒေ မူဘောင်ဆိုင်ရာဝန်းကျင်ကောင်းများ ဖန်တီးပေးခြင်းနှင့်အတူ အခြေခံ အဆောက်အအုံများ၊ ဝန်ဆောင်မှုများနှင့် ပြည်တွင်းပြည်ပ ရင်းနှီးမြှပ်နှံမှုများပေါ်ထွန်းရရှိစေရေးဖြည့်ဆည်းပေးရန် ဖြစ်ပါသည်။ ရေ၊ မြေနှင့် သဘာဝသယံဇာတအရင်းအမြစ်များကို ဖော်ထုတ်သုံးစွဲရာတွင် အများပါဝင်မှု၊ အန္တရာယ်ကင်းရှင်းမှုရှိစေပြီး ထိရောက်စွာနှင့် ရေရှည်တည်တံ့စွာ စီမံခန့်ခွဲ အသုံးချနိုင်ရန်ဖြစ်ပါသည်။

၁၀။ မူဝါဒများမှာ အောက်ပါအတိုင်း ဖြစ်ပါသည်-

(က) မြေယာအသုံးချမှုနှင့် စီမံခန့်ခွဲမှုဆိုင်ရာ မူဝါဒ

(ခ ) ရေအရင်းအမြစ် အသုံးချမှုနှင့် စီမံခန့်ခွဲမှုဆိုင်ရာ မူဝါဒ

(ဂ )  ငွေကြေးအရင်းအနှီးဆိုင်ရာ မူဝါဒ

(ဃ) စက်မှုလယ်ယာ နှင့် သွင်းအားစုများ ဆိုင်ရာ မူဝါဒ

(င ) သမဝါယမလုပ်ငန်းများနှင့် သမဝါယမစနစ်ဖွံ့ဖြိုးရေးဆိုင်ရာ မူဝါဒ (စ) ကျေးလက်အခြေခံအဆောက်အအုံဖွံ့ဖြိုးရေးဆိုင်ရာ မူဝါဒ

(ဆ) သုတေသန၊ ဖွံ့ဖြိုးမှုနှင့် နည်းပညာ ဖြန့်ဖြူးခြင်းဆိုင်ရာ မူဝါဒ

(ဇ ) ဈေးကွက်၊ တန်ဖိုးမြှင့်ကုန်ထုတ်လုပ်ခြင်းနှင့် ပြည်ပတင်ပို့ ရောင်းချခြင်းဆိုင်ရာမူဝါဒ

(ဈ ) အုပ်ချုပ်မှု၊ အဖွဲ့အစည်းများနှင့် လူ့စွမ်းအားအရင်းအမြစ် ဖွံ့ဖြိုးတိုးတက်ရေးဆိုင်ရာ မူဝါဒ

(ည) သဘာဝပတ်ဝန်းကျင်ထိန်းသိမ်းရေးနှင့် ရာသီဥတုပြောင်းလဲမှုတုံ့ပြန်ဆောင်ရွက်ရေးဆိုင်ရာ မူဝါဒ',
            'en_name'=>'Current landscape of agriculture sector in Myanmar',
            'en_description'=>'About 70% of the population in Myanmar resides in rural area and agriculture is their main livelihood. While the agriculture sector contributes 30% of national GDP, both the benefits that are gained from farming as well as the socio-economic status of farmers are extremely low.

Furthermore, farmers’ the socioeconomic status has been adversely affected by the effects of climate change, and natural and man made disasters. In particular, the unpredictable weather changes that have taken place almost annually in the wake of Cyclone Nargis in 2008 have led to tremendous crop damage and losses in the agriculture sector. At the same time, the failure to take effective actions on existing forest and soil conservation measures have exacerbated the soil quality and fertility. As a consequence, most farmers have not been able to break out of the economic down town they have experienced from chronically low productivity, low income, and rising indebtedness. In order to uplift the socio-economic condition of farmers and improve the performance of the agriculture sector, the Ministry of Agriculture, Livestock and Irrigation (MOALI) has made it a priority to support the development of the national economy through effective implementation of a proactive portfolio far reaching policies and strategic thrusts.

The aim of these new policies and strategic thrusts, referred to as Agriculture Policy 2016, is to create the enabling environment that will promote the production of a greater and more diversified range of high value agricultural, livestock, and fishery products. A major intention of Agriculture Policy 2016 is to take advantage of the comparative advantage that Myanmar has in the production of these high value products that are in increasing demand in both domestic and international markets.

Vision
The vision of Agriculture Policy 2016 is:

An inclusive, competitive, food and nutrition secured and sustainable agricultural system contributing to the socio-economic well being of farmers and rural people and further development of the national economy.

Mission
The Mission of Agriculture Policy 2016 is:

To enable rural population and agribusiness enterprises that sustain themselves from the production and sales of diverse, safe and nutritious foods, and agricultural products to have access to innovative and sustainable production, processing, packaging, logistics, and marketing technologies to meet the growing domestic and global demands.

Goal
The followings are the goals of the Ministry.

Improve food security, food safety, and nutritional status of agricultural products of the people of Myanmar.

Enhance agricultural diversification programmes in compliance with the changing market and the prevailing agro-climatic condition of the area.

Satisfy the specified quality requirements and standard of agricultural, livestock and fishery products as dictated by the market.

Improve the dissemination of market and price information.

Prevent the incidence and spread of pests and diseases in crops and livestock by wide spread use of IPM measures of a preventative nature and through development and adoption of Good Agriculture Practices - GAP, Good Animal Husbandry Practices - GAHP and Good Aquaculture Practices –GaqP.

Support the formation of crops, livestock, and fisheries producer groups and cooperative societies that aim in sustaining the development of agriculture sector.

Develop the seed industry and highly performing pure animal breeds and fish species, and conserve native breeds and species.

Develop and enhance agro-based industries, small scale industries, and cottage industries traditional weaving and handicraft and the vocational education, and rural infrastructure that is needed to support the development of these industries.

Improve and enhance research, the extension service, and human resource programmes.

Objectives
The followings are the Objectives of the Ministry.

To ensure food and nutrition security and food safety.

To safeguard the rights of the farmers and to enhance their welfare and livelihood.

To advance and upgrade the agricultural sector by organizing farmers’ associations and cooperatives inclusive of small holders and subsistence farmers with promotion of gender role.

To attain sustainable rural development and to upgrade socio-economic conditions of rural people and farmers by improving rural infrastructure, enhancing access to markets, establishing small scale enterprises and designing participatory land use plans and management.

To seek technical assistance and mobilize the financial resources from local and international agencies in support of crops, livestock, fisheries and rural development in the agriculture sector.

To promote domestic and foreign direct investment in agriculture sector.

To promote competitiveness and value-added production of exportable agricultural commodities.

To encourage the development of agro-based industry, small scale enterprises, cottage industries, and income generation activities, including ten traditional artworks and crafts.

To improve the livelihood and income generation of the rural people through the development of agricultural cooperative enterprises and the cooperative system.

To develop effective linkages of production, trading, processing, services and consumer segments along the value chains of agricultural commodities.

To improve coordination mechanism of inter-governmental agencies, to foster public-private partnership and to establish collaboration and connectivity among all stakeholders including public agencies, academia, farmers’ associations, civil societies, and private sector with a view to enhancing rural development and reducing poverty .

Policies
Myanmar’s agricultural policy is to improve food and nutrition security and food safety for all the people and to enable smallholder farmers to increase their incomes through higher productivity and diversified production in response to market demand, as well as to enhance exports through and internationally competitive private agri-business sector.

These policies will provide consumers, producers, and businesses in the agricultural sector with a supportive legal and regulatory environment along with essential public investment, infrastructure and services as well as the mobilization of domestic and foreign investments. Specific policies to develop and utilize land, water and other natural resources in an inclusive, competitive, efficient, safe and sustainable manner can be organized into three categories: governance of land, water and other natural resources: access to inputs and technology for production: and value-added processing, marketing and export.

Policies related to agriculture sector of Myanmar are as follows:
Land Use and Management Policy.

Water Use and Management Policy.

Agricultural financing Policy.

Agricultural Mechanization and Input Sector Policy.

Cooperative Societies and Cooperative System Development Policy

Rural Infrastructure Development Policy.

Research, Development and Extension Policy.

Marketing, Value-added Processing and Export Policy.

Governance, Institutional and Human Resource Development Policy.

Environmental Conservation and Climate Change Resilience Policy.

Land Use and Management Policy

Land Use and Management Policy.
All farmers who produce crop, livestock and fish can access land in accordance with the existing Farm Land Laws, and also transfer, sell, mortgage, lend, exchange, give away, or inherit their land right including tilling and other land use.

To capture both fresh and brackish water fishery and produce fish systematically in accordance with the Laws.

To establish Special Zones for the production of agriculture, livestock and fishery products so as to improve productivity.

Arrangement will be made available for farmers’ freedom of choice to undertake any farming activities in accordance with Laws (agriculture, livestock, fishery sectors) that are economically viable, in the farm land which is granted to till and use.

Formation of groups of farmers, including crops and livestock, and fisherman, will be encouraged and supported and aimed to work within the Land Consolidation and Land Use Management system in the transformation to a larger scale farm parcels.

Assistance will be provided to those who are interested in farming activities, in particular, small holder farmers and farm labors, who are landless and have extremely limited financial resources will have the rights of tilling the land that they have cleared or developed as new farm land.

Development of new farm land will be undertaken in accordance with the National Land Use Policy.'
        ]);
        \App\News::create([
            'image'=>'/images/news/default.jpg',
            'my_name'=>'မြန်မာ့လယ်ယာကဏ္ဍအခြေအနေ',
            'my_description'=>'၁။မြန်မာနိုင်ငံလူဦးရေ၏၇၀%သည် ကျေးလက်ဒေသတွင်နေထိုင်လျက်ရှိကြပြီး အများစု၏ အဓိကစီးပွားရေးလုပ်ငန်းမှာ လယ်ယာလုပ်ငန်းဖြစ်ပါသည်။ တစ်မျိုးသားလုံး၏ ပြည်တွင်းအသားတင်ထုတ်လုပ်မှုနှင့် ဝန်ဆောင်မှုတန်ဘိုး (GDP) ၏၃၀% ခန့်ကိုလယ်ယာကဏ္ဍမှရရှိသော်လည်း တောင်သူလယ်သမားအများစု၏ လယ်ယာမြေနှင့်ပတ်သက်သော အကျိုးခံစားခွင့်အလွန်နည်းပါးလှပြီး ၎င်းတို့၏လူမှုစီးပွားဘဝသည်နိမ့်ကျလျက်ရှိပါသည်။

၂။ထို့အပြင်ရာသီဥတုပြောင်းလဲမှု၊သဘာဝဘေးနှင့် အခြားသောဘေးအန္တရာယ်များကျရောက်မှုတို့ကြောင့် တောင်သူလယ်သမားအများစု၏ လူမှုစီးပွားဘဝကိုပိုမိုထိခိုက်စေပါသည်။ အထူးသဖြင့်၂၀၀၈ခုနှစ်၊ နာဂစ်မုန်တိုင်းနောက်ပိုင်းတွင် နှစ်စဉ်လိုလိုရာသီဥတုဖောက်ပြန်လာခဲ့ရာလယ်ယာကဏ္ဍတွင် ထိခိုက်နစ်နာဆုံးရှုံးမှုများပေါ်ပေါက်ခဲ့ရပါသည်။ သစ်တောပြုန်းတီးခြင်းကိုကာကွယ်ထိန်းသိမ်းမှုနှင့် မြေဆီလွှာထိန်းသိမ်းမှုလုပ်ငန်းများကို စနစ်တကျထိရောက်စွာဆောင်ရွက်မှုအားနည်းခဲ့ခြင်းတို့ကြောင့် မြေဆီလွှာအရည်အသွေးကျဆင်းပျက်စီးလာလျက်ရှိပါသည်။ အကျိုးဆက်အနေဖြင့်တောင်သူလယ်သမားအများစုမှာ ဝင်ငွေနိမ့်ကျပြီးအကြွေးသံသရာမှ ရုန်းမထွက်နိုင်သည့်အပြင်အကြောင်းအမျိုးမျိုးဖြင့် ၎င်းတို့လုပ်ကိုင်သောလယ်ယာမြေများကို လက်လွှတ်ခဲ့ရခြင်းကြောင့် လယ်မဲ့ယာမဲ့များဘဝသို့ရောက်ခဲ့ရပြီး လူမှုစီးပွားဘဝအခြေအနေများကိုပိုမိုထိခိုက်စေခဲ့ပါသည်။ သို့ဖြစ်ပါ၍တောင်သူလယ်သမားတို့၏ လူမှုစီးပွားဘဝအခြေအနေမြင့်မားတိုးတက်လာစေရန်နှင့် လယ်ယာကဏ္ဍ ဖွံ့ဖြိုးတိုးတက်လာစေရန် ဝန်ကြီးဌာန၏မူဝါဒများနှင့်လုပ်ငန်းစဉ်များကို ခိုင်ခိုင်မာမာရေးဆွဲချမှတ်အကောင်အထည်ဖော်ခြင်းဖြင့် နိုင်ငံတော်၏စီးပွားရေးဖွံ့ဖြိုးတိုးတက်မှုကိုအထောက်အကူပြုနိုင်ရန်ကြိုးပမ်းဆောင်ရွက်ရမည်ဖြစ်ပါသည်။

၃။လယ်ယာကဏ္ဍမူဝါဒအသစ်တွင်မြန်မာနိုင်ငံ၏ လယ်ယာကဏ္ဍရှိအခွင့်အလမ်းကောင်းများကို ဖေါ်ထုတ်ပေးလိုက်ခြင်းဖြင့်လျင်မြန်စွာတိုးတက်လာနေသော ပြည်တွင်းပြည်ပဈေးကွက်ရှိစားသုံးသူများ၏ လိုအပ်ချက်များဖြစ်သောအဆင့်အတန်းမြင့်လယ်ယာနှင့်သားငါးထွက်ကုန်များကို အမျိုးအမယ်စုံလင်စွာဖြည့်ဆည်းပေးရန် ရည်ရွယ်ပါသည်။ ယင်းသို့သောမူဝါဒအရစိုက်ပျိုးမွေးမြူရေးနှင့်ထုတ်လုပ်ရေးလုပ်ငန်းများကိုပိုမိုကျယ်ပြန့်လာစေခြင်း၊ ထုတ်လုပ်မှုစွမ်းအားမြင့်မားလာခြင်းနှင့်အတူ လုပ်ကွက်ငယ်တောင်သူလယ်သမား၏ဝင်ငွေပါတိုးတက်လာစေခြင်း၊ စားသုံးသူများအတွက်ဘေးအန္တရာယ်ကင်း၍ အာဟာရပြည့်ဝသောစားနပ်ရိက္ခာများထုတ်လုပ်နိုင်ခြင်း၊လယ်ယာစီးပွားရေးလုပ်ငန်းများဖွံ့ဖြိုးလာခြင်းနှင့်အတူနိုင်ငံတကာဈေးကွက်နှင့် ချိတ်ဆက်၍ လယ်ယာထုတ်ကုန်များကို  ပြည်ပသို့ ပိုမိုတင်ပို့နိုင်ခြင်း၊ ကျေးလက်ဒေသလူမှုစီးပွားဘဝတိုးတက်လာခြင်း၊ ဖွံ့ဖြိုးတိုးတက်မှု ရေရှည်တည်တံ့ခြင်းစသော  အကျိုးကျေးဇူးများရရှိဖြစ်ပေါ်လာစေနိုင်ပါသည်။

မျှော်မှန်းချက်
၄။အားလုံးပါဝင်ပြီး နိုင်ငံတကာနှင့် ယှဉ်ပြိုင်နိုင်စွမ်းရှိသည့် ရေရှည်တည်တံ့သော လယ်ယာကုန်ထုတ်မှုစနစ် ထွန်းကားစေခြင်းဖြင့် စားနပ်ရိက္ခာဖူလုံ၍ အာဟာရပြည့်ဝစေပြီး ကျေးလက်နေပြည်သူများ၏ လူမှုစီးပွားဘဝမြင့်မားလာစေရန်နှင့် နိုင်ငံစီးပွားဖွံ့ဖြိုးတိုးတက်မှု ကို အထောက်အကူဖြစ်စေရန်။

လုပ်ငန်းတာဝန်များ
၅။ကျေးလက်နေ ပြည်သူများနှင့် လယ်ယာစီးပွားရေးလုပ်ငန်းများအား ခေတ်မီဆန်းသစ်၍ ရေရှည်တည်တံ့သောထုတ်လုပ်မှုနည်းပညာများ၊ ပြုပြင်ထုပ်ပိုး နည်းလမ်းများ၊ ထောက်ပံ့ပို့ဆောင်ရေး နည်းလမ်းများနှင့်ဈေးကွက်ဆိုင်ရာ နည်းပညာများကို အသုံးပြု၍ ကြီးထွားလာသောပြည်တွင်းပြည်ပဈေးကွက်ဝယ်လိုအားနှင့်အညီ ဘေးအန္တရာယ်ကင်းရှင်း၍အာဟာရပြည့်ဝသည့် အမယ်စုံလင်သောစားနပ်ရိက္ခာနှင့်စိုက်ပျိုးမွေးမြူရေးထုတ်ကုန်ပစ္စည်းများ တိုးတက်ထုတ်လုပ်ရာတွင် အထောက်အကူပြုနိုင်ရေး ဆောင်ရွက်ရန်။

ပန်းတိုင်
၆။ပန်းတိုင်မှာအောက်ပါအတိုင်းဖြစ်ပါသည်−

(က)စားနပ်ရိက္ခာဖူလုံမှု​၊ အာဟာရပြည့်ဝရေးနှင့်အစားအစာဘေးအန္တရာယ်ကင်းရှင်းမှုတိုးတက်စေ ရေး။

(ခ) ပြောင်းလဲလာသော ဈေးကွက်နှင့်အညီ ဒေသအလိုက် ရေမြေ၊ ရာသီဥတုတို့နှင့်ကိုက်ညီသည့် အမယ်စုံလင်သော လယ်ယာ၊ သားငါးထွက်ကုန်များ ထုတ်လုပ်မှုပုံစံ တိုးမြင့်လာစေရေး။

(ဂ) စျေးကွက်လိုအပ်ချက်နှင့်အညီလယ်ယာသားငါးထုတ်ကုန်များ၏ အရည်အသွေးနှင့် စံချိန်စံညွှန်းများပြည့်မီစေရေး။

(ဃ)လယ်ယာထွက်ကုန် ဈေးကွက်နှင့် ဈေးနှုန်းသတင်းအချက်အလက် ဖြန့်ဝေမှု လုပ်ငန်းများ ဖွံ့ဖြိုးတိုးတက်လာစေရေး။

(င)တိရစ္ဆာန်နှင့်အပင်ပိုးမွှားရောဂါဆိုင်ရာအန္တရာယ်ကင်းရှင်းရေး၊ စိုက်ပျိုးမွေးမြူထုတ်လုပ်မှု အလေ့အကျင့်ကောင်းများဖွံ့ဖြိုးတိုးတက်လာစေရေး။

(စ)လယ်ယာကဏ္ဍစဉ်ဆက်မပြတ်ဖွံ့ဖြိုးတိုးတက်စေရေး အတွက်စိုက်ပျိုးမွေးမြူထုတ်လုပ်သ ူအစုအဖွဲ့များ၊သမဝါယမအသင်းများပေါ်ထွန်းလာစေရေး။

(ဆ)မျိုးစေ့ကဏ္ဍဖွံ့ဖြိုးတိုးတက်စေရေးနှင့် သားငါးမျိုးကောင်းမျိုးသနှင့်မွေးမြူထုတ်လုပ် ဖြန့်ဖြူးမှုဖွံ့ဖြိုးတိုးတက်စေရေး၊ဒေသမျိုးရင်းများထိန်းသိမ်းရေးနှင့်မှတ်တမ်းထားရှိရေး။

(ဇ)လယ်ယာအခြေခံစက်မှုလုပ်ငန်းများ၊အသေးစားစက်မှုလက်မှုလုပ်ငန်းများ၊ ရက်ကန်း လုပ်ငန်းများ၊ ပန်း(၁၀)မျိုးအပါအဝင်ရိုးရာလက်မှုလုပ်ငန်းများ၊ အသက်မွေးဝမ်းကျောင်း လုပ်ငန်းများနှင့်ကျေးလက်အခြေခံအဆောက်အအုံများဖွံ့ဖြိုးတိုးတက်စေရေး။

(ဈ)သုတေသနနှင့်ပညာပေးလုပ်ငန်းများဖွံ့ဖြိုးတိုးတက်စေရေး၊ လူ့စွမ်းအားအရင်းအမြစ်ဖွံ့ဖြိုး တိုးတက်စေရေး။

ရည်မှန်းချက်များ
၇။ရည်မှန်းချက်များမှာ အောက်ပါအတိုင်းဖြစ်ပါသည်−

(က)စားနပ်ရိက္ခာဖူလုံရေး၊အာဟာရပြည့်ဝရေးနှင့်အစားအစာ ဘေးအန္တရာယ်ကင်းရှင်းရေး တိုးတက်လာစေရန်။

(ခ)တောင်သူလယ်သမားများ၏အခွင့်အရေး ပြည့်ဝစွာရရှိခံစားနိုင်စေရန်နှင့် အကျိုးစီးပွား မြင့်မားလာစေရန်။

(ဂ)လုပ်ကွက်ငယ်တောင်သူလယ်သမားများ၊တစ်ပိုင်တစ်နိုင် မွေးမြူသူများနှင့်ရေလုပ်သားများ ကိုအခြေခံ၍အစုအဖွဲ့များ၊သမဝါယမအသင်းများဖွဲ့စည်းပြီးအတွေးသစ်အမြင်သစ်များဖြင့်စိုက်ပျိုးမွေးမြူရေးလုပ်ငန်းများကိုခေတ်မီဖွံ့ဖြိုးတိုးတက်လာစေရန်နှင့်ယင်းလုပ်ငန်းများတွင်အမျိုးသမီးများ၏အခန်းကဏ္ဍကိုပိုမိုမြှင့်တင်ရန်။

(ဃ)လယ်ယာကုန်ထုတ်လမ်းများ၊ကျေးရွာအခြေခံအဆောက်အအုံများ၊မြေယာ အသုံးချမှု အစီအမံများရေးဆွဲဆောင်ရွက်ခြင်းနှင့်အသေးစားစက်မှုလက်မှုကုန်ထုတ်လုပ်ငန်းများတည်ထောင်ပေးခြင်းတို့ဖြင့်ကျေးလက်ဒေသများစဉ်ဆက်မပြတ်ဖွံ့ဖြိုးတိုးတက်စေပြီးတောင်သူလယ်သမားများ၏လူမှုစီးပွားဘဝတိုးတက်မြင့်မားလာစေရန်။

(င)စိုက်ပျိုးမွေးမြူရေးလုပ်ငန်းများနှင့်သမဝါယမလုပ်ငန်းများပိုမိုဖွံ့ဖြိုးတိုးတက် လာစေရန် လိုအပ်သောနည်းပညာနှင့်ငွေကြေးအရင်းအနှီးများအတွက် ပြည်တွင်းပြည်ပမှအကူအညီ၊အထောက်အပံ့နှင့်ချေးငွေများရရှိရေးကူညီဆောင်ရွက်ပေးရန်။

(စ)လယ်ယာကဏ္ဍတွင် ပြည်တွင်းပြည်ပရင်းနှီးမြှုပ်နှံမှုများ တိုးတက်လာစေရေး အားပေးဆောင်ရွက်ရန်။

(ဆ)ပြည်ပဈေးကွက်ဝင် အရည်အသွေးမြင့် လယ်ယာ၊ သားငါး ထုတ်ကုန်များတိုးမြှင့် ထုတ်လုပ်နိုင်ရေး အားပေးဆောင်ရွက်ရန်။

(ဇ)လယ်ယာအခြေခံစက်မှုလုပ်ငန်းများ၊ အသေးစား စက်မှုလက်မှုလုပ်ငန်းများ၊ ရက်ကန်းလုပ်ငန်းများ၊ ပန်း(၁၀)မျိုးအပါအဝင်ရိုးရာလက်မှုလုပ်ငန်းများနှင့် အသက်မွေးဝမ်းကျောင်းလုပ်ငန်းများ ဖွံ့ဖြိုးတိုးတက်လာစေရေး အားပေးဆောင်ရွက်ရန်။

(ဈ)သမဝါယမလုပ်ငန်းများနှင့်သမဝါယမစနစ်ပိုမိုအောင်မြင်စေရေးဆောင်ရွက်ရန်။

(ည)တန်ဖိုးကွင်းဆက်တစ်ခုလုံးဖွံ့ဖြိုးတိုးတက်ရေးအတွက်ထုတ်လုပ်မှု၊ဝန်ဆောင်မှု၊ကုန်သွယ်မှုနှင့်စားသုံးမှုကဏ္ဍများကိုထိရောက်စွာချိတ်ဆက်ဆောင်ရွက်သွားရန်။

(ဋ)ဆင်းရဲနွမ်းပါးမှုလျှော့ချရေး၊ ရေရှည်တည်တံ့သောလယ်ယာကဏ္ဍဖွံ့ဖြိုးတိုးတက်ရေးနှင့် ကျေးလက်ဒေသဖွံ့ဖြိုးရေးလုပ်ငန်းများတွင်သက်ဆိုင်ရာကဏ္ဍအသီးသီးမှအစိုးရအဖွဲ့အစည်းများအချင်းချင်းပူးပေါင်းဆောင်ရွက်ခြင်း၊အစိုးရနှင့်ပုဂ္ဂလိကအဖွဲ့အစည်းများပူးပေါင်းဆောင်ရွက်ခြင်းအပါအဝင်သက်ဆိုင်သူများအားလုံးပူးပေါင်းပါဝင်ဆောင်ရွက်သွားရန်။

မူဝါဒများ
၈။လယ်ယာကဏ္ဍမူဝါဒသည် ပြည်သူလူထုအားလုံး စားနပ်ရိက္ခာနှင့် အာဟာရဖူလုံမှုရရှိစေရေး၊ လုပ်ကွက်ငယ် တောင်သူလယ်သမားများအနေဖြင့် ထုတ်လုပ်နိုင်မှု စွမ်းအားမြင့်မားပြီး ဈေးကွက်၏ လိုအပ်ချက်နှင့်အညီ ထုတ်ကုန်ပစ္စည်း အမယ်စုံအောင် ထုတ်လုပ်ပေးနိုင်ခြင်းဖြင့် ဝင်ငွေမြင့်မားလာစေရေးနှင့် ပုဂ္ဂလိက လယ်ယာစီးပွားရေးလုပ်ငန်းကဏ္ဍ၏ နိုင်ငံတကာနှင့် ယှဉ်ပြိုင်နိုင်ပြီး ပြည်ပပို့ကုန်တိုးမြင့် တင်ပို့နိုင်ရေးတို့ကို ဖြည့်ဆည်းပေးရန်ဖြစ်ပါသည်။

၉။ မူဝါဒများသည် လယ်ယာကဏ္ဍတွင် ပါဝင်သည့် ထုတ်လုပ်သူများ၊ စီးပွားရေးလုပ်ငန်း ဆောင်ရွက်သူများ၊ စားသုံးသူများအားလုံးအတွက် အထောက်အကူဖြစ်စေမည့် ဥပဒေ မူဘောင်ဆိုင်ရာဝန်းကျင်ကောင်းများ ဖန်တီးပေးခြင်းနှင့်အတူ အခြေခံ အဆောက်အအုံများ၊ ဝန်ဆောင်မှုများနှင့် ပြည်တွင်းပြည်ပ ရင်းနှီးမြှပ်နှံမှုများပေါ်ထွန်းရရှိစေရေးဖြည့်ဆည်းပေးရန် ဖြစ်ပါသည်။ ရေ၊ မြေနှင့် သဘာဝသယံဇာတအရင်းအမြစ်များကို ဖော်ထုတ်သုံးစွဲရာတွင် အများပါဝင်မှု၊ အန္တရာယ်ကင်းရှင်းမှုရှိစေပြီး ထိရောက်စွာနှင့် ရေရှည်တည်တံ့စွာ စီမံခန့်ခွဲ အသုံးချနိုင်ရန်ဖြစ်ပါသည်။

၁၀။ မူဝါဒများမှာ အောက်ပါအတိုင်း ဖြစ်ပါသည်-

(က) မြေယာအသုံးချမှုနှင့် စီမံခန့်ခွဲမှုဆိုင်ရာ မူဝါဒ

(ခ ) ရေအရင်းအမြစ် အသုံးချမှုနှင့် စီမံခန့်ခွဲမှုဆိုင်ရာ မူဝါဒ

(ဂ )  ငွေကြေးအရင်းအနှီးဆိုင်ရာ မူဝါဒ

(ဃ) စက်မှုလယ်ယာ နှင့် သွင်းအားစုများ ဆိုင်ရာ မူဝါဒ

(င ) သမဝါယမလုပ်ငန်းများနှင့် သမဝါယမစနစ်ဖွံ့ဖြိုးရေးဆိုင်ရာ မူဝါဒ (စ) ကျေးလက်အခြေခံအဆောက်အအုံဖွံ့ဖြိုးရေးဆိုင်ရာ မူဝါဒ

(ဆ) သုတေသန၊ ဖွံ့ဖြိုးမှုနှင့် နည်းပညာ ဖြန့်ဖြူးခြင်းဆိုင်ရာ မူဝါဒ

(ဇ ) ဈေးကွက်၊ တန်ဖိုးမြှင့်ကုန်ထုတ်လုပ်ခြင်းနှင့် ပြည်ပတင်ပို့ ရောင်းချခြင်းဆိုင်ရာမူဝါဒ

(ဈ ) အုပ်ချုပ်မှု၊ အဖွဲ့အစည်းများနှင့် လူ့စွမ်းအားအရင်းအမြစ် ဖွံ့ဖြိုးတိုးတက်ရေးဆိုင်ရာ မူဝါဒ

(ည) သဘာဝပတ်ဝန်းကျင်ထိန်းသိမ်းရေးနှင့် ရာသီဥတုပြောင်းလဲမှုတုံ့ပြန်ဆောင်ရွက်ရေးဆိုင်ရာ မူဝါဒ',
            'en_name'=>'Current landscape of agriculture sector in Myanmar',
            'en_description'=>'About 70% of the population in Myanmar resides in rural area and agriculture is their main livelihood. While the agriculture sector contributes 30% of national GDP, both the benefits that are gained from farming as well as the socio-economic status of farmers are extremely low.

Furthermore, farmers’ the socioeconomic status has been adversely affected by the effects of climate change, and natural and man made disasters. In particular, the unpredictable weather changes that have taken place almost annually in the wake of Cyclone Nargis in 2008 have led to tremendous crop damage and losses in the agriculture sector. At the same time, the failure to take effective actions on existing forest and soil conservation measures have exacerbated the soil quality and fertility. As a consequence, most farmers have not been able to break out of the economic down town they have experienced from chronically low productivity, low income, and rising indebtedness. In order to uplift the socio-economic condition of farmers and improve the performance of the agriculture sector, the Ministry of Agriculture, Livestock and Irrigation (MOALI) has made it a priority to support the development of the national economy through effective implementation of a proactive portfolio far reaching policies and strategic thrusts.

The aim of these new policies and strategic thrusts, referred to as Agriculture Policy 2016, is to create the enabling environment that will promote the production of a greater and more diversified range of high value agricultural, livestock, and fishery products. A major intention of Agriculture Policy 2016 is to take advantage of the comparative advantage that Myanmar has in the production of these high value products that are in increasing demand in both domestic and international markets.

Vision
The vision of Agriculture Policy 2016 is:

An inclusive, competitive, food and nutrition secured and sustainable agricultural system contributing to the socio-economic well being of farmers and rural people and further development of the national economy.

Mission
The Mission of Agriculture Policy 2016 is:

To enable rural population and agribusiness enterprises that sustain themselves from the production and sales of diverse, safe and nutritious foods, and agricultural products to have access to innovative and sustainable production, processing, packaging, logistics, and marketing technologies to meet the growing domestic and global demands.

Goal
The followings are the goals of the Ministry.

Improve food security, food safety, and nutritional status of agricultural products of the people of Myanmar.

Enhance agricultural diversification programmes in compliance with the changing market and the prevailing agro-climatic condition of the area.

Satisfy the specified quality requirements and standard of agricultural, livestock and fishery products as dictated by the market.

Improve the dissemination of market and price information.

Prevent the incidence and spread of pests and diseases in crops and livestock by wide spread use of IPM measures of a preventative nature and through development and adoption of Good Agriculture Practices - GAP, Good Animal Husbandry Practices - GAHP and Good Aquaculture Practices –GaqP.

Support the formation of crops, livestock, and fisheries producer groups and cooperative societies that aim in sustaining the development of agriculture sector.

Develop the seed industry and highly performing pure animal breeds and fish species, and conserve native breeds and species.

Develop and enhance agro-based industries, small scale industries, and cottage industries traditional weaving and handicraft and the vocational education, and rural infrastructure that is needed to support the development of these industries.

Improve and enhance research, the extension service, and human resource programmes.

Objectives
The followings are the Objectives of the Ministry.

To ensure food and nutrition security and food safety.

To safeguard the rights of the farmers and to enhance their welfare and livelihood.

To advance and upgrade the agricultural sector by organizing farmers’ associations and cooperatives inclusive of small holders and subsistence farmers with promotion of gender role.

To attain sustainable rural development and to upgrade socio-economic conditions of rural people and farmers by improving rural infrastructure, enhancing access to markets, establishing small scale enterprises and designing participatory land use plans and management.

To seek technical assistance and mobilize the financial resources from local and international agencies in support of crops, livestock, fisheries and rural development in the agriculture sector.

To promote domestic and foreign direct investment in agriculture sector.

To promote competitiveness and value-added production of exportable agricultural commodities.

To encourage the development of agro-based industry, small scale enterprises, cottage industries, and income generation activities, including ten traditional artworks and crafts.

To improve the livelihood and income generation of the rural people through the development of agricultural cooperative enterprises and the cooperative system.

To develop effective linkages of production, trading, processing, services and consumer segments along the value chains of agricultural commodities.

To improve coordination mechanism of inter-governmental agencies, to foster public-private partnership and to establish collaboration and connectivity among all stakeholders including public agencies, academia, farmers’ associations, civil societies, and private sector with a view to enhancing rural development and reducing poverty .

Policies
Myanmar’s agricultural policy is to improve food and nutrition security and food safety for all the people and to enable smallholder farmers to increase their incomes through higher productivity and diversified production in response to market demand, as well as to enhance exports through and internationally competitive private agri-business sector.

These policies will provide consumers, producers, and businesses in the agricultural sector with a supportive legal and regulatory environment along with essential public investment, infrastructure and services as well as the mobilization of domestic and foreign investments. Specific policies to develop and utilize land, water and other natural resources in an inclusive, competitive, efficient, safe and sustainable manner can be organized into three categories: governance of land, water and other natural resources: access to inputs and technology for production: and value-added processing, marketing and export.

Policies related to agriculture sector of Myanmar are as follows:
Land Use and Management Policy.

Water Use and Management Policy.

Agricultural financing Policy.

Agricultural Mechanization and Input Sector Policy.

Cooperative Societies and Cooperative System Development Policy

Rural Infrastructure Development Policy.

Research, Development and Extension Policy.

Marketing, Value-added Processing and Export Policy.

Governance, Institutional and Human Resource Development Policy.

Environmental Conservation and Climate Change Resilience Policy.

Land Use and Management Policy

Land Use and Management Policy.
All farmers who produce crop, livestock and fish can access land in accordance with the existing Farm Land Laws, and also transfer, sell, mortgage, lend, exchange, give away, or inherit their land right including tilling and other land use.

To capture both fresh and brackish water fishery and produce fish systematically in accordance with the Laws.

To establish Special Zones for the production of agriculture, livestock and fishery products so as to improve productivity.

Arrangement will be made available for farmers’ freedom of choice to undertake any farming activities in accordance with Laws (agriculture, livestock, fishery sectors) that are economically viable, in the farm land which is granted to till and use.

Formation of groups of farmers, including crops and livestock, and fisherman, will be encouraged and supported and aimed to work within the Land Consolidation and Land Use Management system in the transformation to a larger scale farm parcels.

Assistance will be provided to those who are interested in farming activities, in particular, small holder farmers and farm labors, who are landless and have extremely limited financial resources will have the rights of tilling the land that they have cleared or developed as new farm land.

Development of new farm land will be undertaken in accordance with the National Land Use Policy.'
        ]);
        \App\News::create([
            'image'=>'/images/news/default.jpg',
            'my_name'=>'မြန်မာ့လယ်ယာကဏ္ဍအခြေအနေ',
            'my_description'=>'၁။မြန်မာနိုင်ငံလူဦးရေ၏၇၀%သည် ကျေးလက်ဒေသတွင်နေထိုင်လျက်ရှိကြပြီး အများစု၏ အဓိကစီးပွားရေးလုပ်ငန်းမှာ လယ်ယာလုပ်ငန်းဖြစ်ပါသည်။ တစ်မျိုးသားလုံး၏ ပြည်တွင်းအသားတင်ထုတ်လုပ်မှုနှင့် ဝန်ဆောင်မှုတန်ဘိုး (GDP) ၏၃၀% ခန့်ကိုလယ်ယာကဏ္ဍမှရရှိသော်လည်း တောင်သူလယ်သမားအများစု၏ လယ်ယာမြေနှင့်ပတ်သက်သော အကျိုးခံစားခွင့်အလွန်နည်းပါးလှပြီး ၎င်းတို့၏လူမှုစီးပွားဘဝသည်နိမ့်ကျလျက်ရှိပါသည်။

၂။ထို့အပြင်ရာသီဥတုပြောင်းလဲမှု၊သဘာဝဘေးနှင့် အခြားသောဘေးအန္တရာယ်များကျရောက်မှုတို့ကြောင့် တောင်သူလယ်သမားအများစု၏ လူမှုစီးပွားဘဝကိုပိုမိုထိခိုက်စေပါသည်။ အထူးသဖြင့်၂၀၀၈ခုနှစ်၊ နာဂစ်မုန်တိုင်းနောက်ပိုင်းတွင် နှစ်စဉ်လိုလိုရာသီဥတုဖောက်ပြန်လာခဲ့ရာလယ်ယာကဏ္ဍတွင် ထိခိုက်နစ်နာဆုံးရှုံးမှုများပေါ်ပေါက်ခဲ့ရပါသည်။ သစ်တောပြုန်းတီးခြင်းကိုကာကွယ်ထိန်းသိမ်းမှုနှင့် မြေဆီလွှာထိန်းသိမ်းမှုလုပ်ငန်းများကို စနစ်တကျထိရောက်စွာဆောင်ရွက်မှုအားနည်းခဲ့ခြင်းတို့ကြောင့် မြေဆီလွှာအရည်အသွေးကျဆင်းပျက်စီးလာလျက်ရှိပါသည်။ အကျိုးဆက်အနေဖြင့်တောင်သူလယ်သမားအများစုမှာ ဝင်ငွေနိမ့်ကျပြီးအကြွေးသံသရာမှ ရုန်းမထွက်နိုင်သည့်အပြင်အကြောင်းအမျိုးမျိုးဖြင့် ၎င်းတို့လုပ်ကိုင်သောလယ်ယာမြေများကို လက်လွှတ်ခဲ့ရခြင်းကြောင့် လယ်မဲ့ယာမဲ့များဘဝသို့ရောက်ခဲ့ရပြီး လူမှုစီးပွားဘဝအခြေအနေများကိုပိုမိုထိခိုက်စေခဲ့ပါသည်။ သို့ဖြစ်ပါ၍တောင်သူလယ်သမားတို့၏ လူမှုစီးပွားဘဝအခြေအနေမြင့်မားတိုးတက်လာစေရန်နှင့် လယ်ယာကဏ္ဍ ဖွံ့ဖြိုးတိုးတက်လာစေရန် ဝန်ကြီးဌာန၏မူဝါဒများနှင့်လုပ်ငန်းစဉ်များကို ခိုင်ခိုင်မာမာရေးဆွဲချမှတ်အကောင်အထည်ဖော်ခြင်းဖြင့် နိုင်ငံတော်၏စီးပွားရေးဖွံ့ဖြိုးတိုးတက်မှုကိုအထောက်အကူပြုနိုင်ရန်ကြိုးပမ်းဆောင်ရွက်ရမည်ဖြစ်ပါသည်။

၃။လယ်ယာကဏ္ဍမူဝါဒအသစ်တွင်မြန်မာနိုင်ငံ၏ လယ်ယာကဏ္ဍရှိအခွင့်အလမ်းကောင်းများကို ဖေါ်ထုတ်ပေးလိုက်ခြင်းဖြင့်လျင်မြန်စွာတိုးတက်လာနေသော ပြည်တွင်းပြည်ပဈေးကွက်ရှိစားသုံးသူများ၏ လိုအပ်ချက်များဖြစ်သောအဆင့်အတန်းမြင့်လယ်ယာနှင့်သားငါးထွက်ကုန်များကို အမျိုးအမယ်စုံလင်စွာဖြည့်ဆည်းပေးရန် ရည်ရွယ်ပါသည်။ ယင်းသို့သောမူဝါဒအရစိုက်ပျိုးမွေးမြူရေးနှင့်ထုတ်လုပ်ရေးလုပ်ငန်းများကိုပိုမိုကျယ်ပြန့်လာစေခြင်း၊ ထုတ်လုပ်မှုစွမ်းအားမြင့်မားလာခြင်းနှင့်အတူ လုပ်ကွက်ငယ်တောင်သူလယ်သမား၏ဝင်ငွေပါတိုးတက်လာစေခြင်း၊ စားသုံးသူများအတွက်ဘေးအန္တရာယ်ကင်း၍ အာဟာရပြည့်ဝသောစားနပ်ရိက္ခာများထုတ်လုပ်နိုင်ခြင်း၊လယ်ယာစီးပွားရေးလုပ်ငန်းများဖွံ့ဖြိုးလာခြင်းနှင့်အတူနိုင်ငံတကာဈေးကွက်နှင့် ချိတ်ဆက်၍ လယ်ယာထုတ်ကုန်များကို  ပြည်ပသို့ ပိုမိုတင်ပို့နိုင်ခြင်း၊ ကျေးလက်ဒေသလူမှုစီးပွားဘဝတိုးတက်လာခြင်း၊ ဖွံ့ဖြိုးတိုးတက်မှု ရေရှည်တည်တံ့ခြင်းစသော  အကျိုးကျေးဇူးများရရှိဖြစ်ပေါ်လာစေနိုင်ပါသည်။

မျှော်မှန်းချက်
၄။အားလုံးပါဝင်ပြီး နိုင်ငံတကာနှင့် ယှဉ်ပြိုင်နိုင်စွမ်းရှိသည့် ရေရှည်တည်တံ့သော လယ်ယာကုန်ထုတ်မှုစနစ် ထွန်းကားစေခြင်းဖြင့် စားနပ်ရိက္ခာဖူလုံ၍ အာဟာရပြည့်ဝစေပြီး ကျေးလက်နေပြည်သူများ၏ လူမှုစီးပွားဘဝမြင့်မားလာစေရန်နှင့် နိုင်ငံစီးပွားဖွံ့ဖြိုးတိုးတက်မှု ကို အထောက်အကူဖြစ်စေရန်။

လုပ်ငန်းတာဝန်များ
၅။ကျေးလက်နေ ပြည်သူများနှင့် လယ်ယာစီးပွားရေးလုပ်ငန်းများအား ခေတ်မီဆန်းသစ်၍ ရေရှည်တည်တံ့သောထုတ်လုပ်မှုနည်းပညာများ၊ ပြုပြင်ထုပ်ပိုး နည်းလမ်းများ၊ ထောက်ပံ့ပို့ဆောင်ရေး နည်းလမ်းများနှင့်ဈေးကွက်ဆိုင်ရာ နည်းပညာများကို အသုံးပြု၍ ကြီးထွားလာသောပြည်တွင်းပြည်ပဈေးကွက်ဝယ်လိုအားနှင့်အညီ ဘေးအန္တရာယ်ကင်းရှင်း၍အာဟာရပြည့်ဝသည့် အမယ်စုံလင်သောစားနပ်ရိက္ခာနှင့်စိုက်ပျိုးမွေးမြူရေးထုတ်ကုန်ပစ္စည်းများ တိုးတက်ထုတ်လုပ်ရာတွင် အထောက်အကူပြုနိုင်ရေး ဆောင်ရွက်ရန်။

ပန်းတိုင်
၆။ပန်းတိုင်မှာအောက်ပါအတိုင်းဖြစ်ပါသည်−

(က)စားနပ်ရိက္ခာဖူလုံမှု​၊ အာဟာရပြည့်ဝရေးနှင့်အစားအစာဘေးအန္တရာယ်ကင်းရှင်းမှုတိုးတက်စေ ရေး။

(ခ) ပြောင်းလဲလာသော ဈေးကွက်နှင့်အညီ ဒေသအလိုက် ရေမြေ၊ ရာသီဥတုတို့နှင့်ကိုက်ညီသည့် အမယ်စုံလင်သော လယ်ယာ၊ သားငါးထွက်ကုန်များ ထုတ်လုပ်မှုပုံစံ တိုးမြင့်လာစေရေး။

(ဂ) စျေးကွက်လိုအပ်ချက်နှင့်အညီလယ်ယာသားငါးထုတ်ကုန်များ၏ အရည်အသွေးနှင့် စံချိန်စံညွှန်းများပြည့်မီစေရေး။

(ဃ)လယ်ယာထွက်ကုန် ဈေးကွက်နှင့် ဈေးနှုန်းသတင်းအချက်အလက် ဖြန့်ဝေမှု လုပ်ငန်းများ ဖွံ့ဖြိုးတိုးတက်လာစေရေး။

(င)တိရစ္ဆာန်နှင့်အပင်ပိုးမွှားရောဂါဆိုင်ရာအန္တရာယ်ကင်းရှင်းရေး၊ စိုက်ပျိုးမွေးမြူထုတ်လုပ်မှု အလေ့အကျင့်ကောင်းများဖွံ့ဖြိုးတိုးတက်လာစေရေး။

(စ)လယ်ယာကဏ္ဍစဉ်ဆက်မပြတ်ဖွံ့ဖြိုးတိုးတက်စေရေး အတွက်စိုက်ပျိုးမွေးမြူထုတ်လုပ်သ ူအစုအဖွဲ့များ၊သမဝါယမအသင်းများပေါ်ထွန်းလာစေရေး။

(ဆ)မျိုးစေ့ကဏ္ဍဖွံ့ဖြိုးတိုးတက်စေရေးနှင့် သားငါးမျိုးကောင်းမျိုးသနှင့်မွေးမြူထုတ်လုပ် ဖြန့်ဖြူးမှုဖွံ့ဖြိုးတိုးတက်စေရေး၊ဒေသမျိုးရင်းများထိန်းသိမ်းရေးနှင့်မှတ်တမ်းထားရှိရေး။

(ဇ)လယ်ယာအခြေခံစက်မှုလုပ်ငန်းများ၊အသေးစားစက်မှုလက်မှုလုပ်ငန်းများ၊ ရက်ကန်း လုပ်ငန်းများ၊ ပန်း(၁၀)မျိုးအပါအဝင်ရိုးရာလက်မှုလုပ်ငန်းများ၊ အသက်မွေးဝမ်းကျောင်း လုပ်ငန်းများနှင့်ကျေးလက်အခြေခံအဆောက်အအုံများဖွံ့ဖြိုးတိုးတက်စေရေး။

(ဈ)သုတေသနနှင့်ပညာပေးလုပ်ငန်းများဖွံ့ဖြိုးတိုးတက်စေရေး၊ လူ့စွမ်းအားအရင်းအမြစ်ဖွံ့ဖြိုး တိုးတက်စေရေး။

ရည်မှန်းချက်များ
၇။ရည်မှန်းချက်များမှာ အောက်ပါအတိုင်းဖြစ်ပါသည်−

(က)စားနပ်ရိက္ခာဖူလုံရေး၊အာဟာရပြည့်ဝရေးနှင့်အစားအစာ ဘေးအန္တရာယ်ကင်းရှင်းရေး တိုးတက်လာစေရန်။

(ခ)တောင်သူလယ်သမားများ၏အခွင့်အရေး ပြည့်ဝစွာရရှိခံစားနိုင်စေရန်နှင့် အကျိုးစီးပွား မြင့်မားလာစေရန်။

(ဂ)လုပ်ကွက်ငယ်တောင်သူလယ်သမားများ၊တစ်ပိုင်တစ်နိုင် မွေးမြူသူများနှင့်ရေလုပ်သားများ ကိုအခြေခံ၍အစုအဖွဲ့များ၊သမဝါယမအသင်းများဖွဲ့စည်းပြီးအတွေးသစ်အမြင်သစ်များဖြင့်စိုက်ပျိုးမွေးမြူရေးလုပ်ငန်းများကိုခေတ်မီဖွံ့ဖြိုးတိုးတက်လာစေရန်နှင့်ယင်းလုပ်ငန်းများတွင်အမျိုးသမီးများ၏အခန်းကဏ္ဍကိုပိုမိုမြှင့်တင်ရန်။

(ဃ)လယ်ယာကုန်ထုတ်လမ်းများ၊ကျေးရွာအခြေခံအဆောက်အအုံများ၊မြေယာ အသုံးချမှု အစီအမံများရေးဆွဲဆောင်ရွက်ခြင်းနှင့်အသေးစားစက်မှုလက်မှုကုန်ထုတ်လုပ်ငန်းများတည်ထောင်ပေးခြင်းတို့ဖြင့်ကျေးလက်ဒေသများစဉ်ဆက်မပြတ်ဖွံ့ဖြိုးတိုးတက်စေပြီးတောင်သူလယ်သမားများ၏လူမှုစီးပွားဘဝတိုးတက်မြင့်မားလာစေရန်။

(င)စိုက်ပျိုးမွေးမြူရေးလုပ်ငန်းများနှင့်သမဝါယမလုပ်ငန်းများပိုမိုဖွံ့ဖြိုးတိုးတက် လာစေရန် လိုအပ်သောနည်းပညာနှင့်ငွေကြေးအရင်းအနှီးများအတွက် ပြည်တွင်းပြည်ပမှအကူအညီ၊အထောက်အပံ့နှင့်ချေးငွေများရရှိရေးကူညီဆောင်ရွက်ပေးရန်။

(စ)လယ်ယာကဏ္ဍတွင် ပြည်တွင်းပြည်ပရင်းနှီးမြှုပ်နှံမှုများ တိုးတက်လာစေရေး အားပေးဆောင်ရွက်ရန်။

(ဆ)ပြည်ပဈေးကွက်ဝင် အရည်အသွေးမြင့် လယ်ယာ၊ သားငါး ထုတ်ကုန်များတိုးမြှင့် ထုတ်လုပ်နိုင်ရေး အားပေးဆောင်ရွက်ရန်။

(ဇ)လယ်ယာအခြေခံစက်မှုလုပ်ငန်းများ၊ အသေးစား စက်မှုလက်မှုလုပ်ငန်းများ၊ ရက်ကန်းလုပ်ငန်းများ၊ ပန်း(၁၀)မျိုးအပါအဝင်ရိုးရာလက်မှုလုပ်ငန်းများနှင့် အသက်မွေးဝမ်းကျောင်းလုပ်ငန်းများ ဖွံ့ဖြိုးတိုးတက်လာစေရေး အားပေးဆောင်ရွက်ရန်။

(ဈ)သမဝါယမလုပ်ငန်းများနှင့်သမဝါယမစနစ်ပိုမိုအောင်မြင်စေရေးဆောင်ရွက်ရန်။

(ည)တန်ဖိုးကွင်းဆက်တစ်ခုလုံးဖွံ့ဖြိုးတိုးတက်ရေးအတွက်ထုတ်လုပ်မှု၊ဝန်ဆောင်မှု၊ကုန်သွယ်မှုနှင့်စားသုံးမှုကဏ္ဍများကိုထိရောက်စွာချိတ်ဆက်ဆောင်ရွက်သွားရန်။

(ဋ)ဆင်းရဲနွမ်းပါးမှုလျှော့ချရေး၊ ရေရှည်တည်တံ့သောလယ်ယာကဏ္ဍဖွံ့ဖြိုးတိုးတက်ရေးနှင့် ကျေးလက်ဒေသဖွံ့ဖြိုးရေးလုပ်ငန်းများတွင်သက်ဆိုင်ရာကဏ္ဍအသီးသီးမှအစိုးရအဖွဲ့အစည်းများအချင်းချင်းပူးပေါင်းဆောင်ရွက်ခြင်း၊အစိုးရနှင့်ပုဂ္ဂလိကအဖွဲ့အစည်းများပူးပေါင်းဆောင်ရွက်ခြင်းအပါအဝင်သက်ဆိုင်သူများအားလုံးပူးပေါင်းပါဝင်ဆောင်ရွက်သွားရန်။

မူဝါဒများ
၈။လယ်ယာကဏ္ဍမူဝါဒသည် ပြည်သူလူထုအားလုံး စားနပ်ရိက္ခာနှင့် အာဟာရဖူလုံမှုရရှိစေရေး၊ လုပ်ကွက်ငယ် တောင်သူလယ်သမားများအနေဖြင့် ထုတ်လုပ်နိုင်မှု စွမ်းအားမြင့်မားပြီး ဈေးကွက်၏ လိုအပ်ချက်နှင့်အညီ ထုတ်ကုန်ပစ္စည်း အမယ်စုံအောင် ထုတ်လုပ်ပေးနိုင်ခြင်းဖြင့် ဝင်ငွေမြင့်မားလာစေရေးနှင့် ပုဂ္ဂလိက လယ်ယာစီးပွားရေးလုပ်ငန်းကဏ္ဍ၏ နိုင်ငံတကာနှင့် ယှဉ်ပြိုင်နိုင်ပြီး ပြည်ပပို့ကုန်တိုးမြင့် တင်ပို့နိုင်ရေးတို့ကို ဖြည့်ဆည်းပေးရန်ဖြစ်ပါသည်။

၉။ မူဝါဒများသည် လယ်ယာကဏ္ဍတွင် ပါဝင်သည့် ထုတ်လုပ်သူများ၊ စီးပွားရေးလုပ်ငန်း ဆောင်ရွက်သူများ၊ စားသုံးသူများအားလုံးအတွက် အထောက်အကူဖြစ်စေမည့် ဥပဒေ မူဘောင်ဆိုင်ရာဝန်းကျင်ကောင်းများ ဖန်တီးပေးခြင်းနှင့်အတူ အခြေခံ အဆောက်အအုံများ၊ ဝန်ဆောင်မှုများနှင့် ပြည်တွင်းပြည်ပ ရင်းနှီးမြှပ်နှံမှုများပေါ်ထွန်းရရှိစေရေးဖြည့်ဆည်းပေးရန် ဖြစ်ပါသည်။ ရေ၊ မြေနှင့် သဘာဝသယံဇာတအရင်းအမြစ်များကို ဖော်ထုတ်သုံးစွဲရာတွင် အများပါဝင်မှု၊ အန္တရာယ်ကင်းရှင်းမှုရှိစေပြီး ထိရောက်စွာနှင့် ရေရှည်တည်တံ့စွာ စီမံခန့်ခွဲ အသုံးချနိုင်ရန်ဖြစ်ပါသည်။

၁၀။ မူဝါဒများမှာ အောက်ပါအတိုင်း ဖြစ်ပါသည်-

(က) မြေယာအသုံးချမှုနှင့် စီမံခန့်ခွဲမှုဆိုင်ရာ မူဝါဒ

(ခ ) ရေအရင်းအမြစ် အသုံးချမှုနှင့် စီမံခန့်ခွဲမှုဆိုင်ရာ မူဝါဒ

(ဂ )  ငွေကြေးအရင်းအနှီးဆိုင်ရာ မူဝါဒ

(ဃ) စက်မှုလယ်ယာ နှင့် သွင်းအားစုများ ဆိုင်ရာ မူဝါဒ

(င ) သမဝါယမလုပ်ငန်းများနှင့် သမဝါယမစနစ်ဖွံ့ဖြိုးရေးဆိုင်ရာ မူဝါဒ (စ) ကျေးလက်အခြေခံအဆောက်အအုံဖွံ့ဖြိုးရေးဆိုင်ရာ မူဝါဒ

(ဆ) သုတေသန၊ ဖွံ့ဖြိုးမှုနှင့် နည်းပညာ ဖြန့်ဖြူးခြင်းဆိုင်ရာ မူဝါဒ

(ဇ ) ဈေးကွက်၊ တန်ဖိုးမြှင့်ကုန်ထုတ်လုပ်ခြင်းနှင့် ပြည်ပတင်ပို့ ရောင်းချခြင်းဆိုင်ရာမူဝါဒ

(ဈ ) အုပ်ချုပ်မှု၊ အဖွဲ့အစည်းများနှင့် လူ့စွမ်းအားအရင်းအမြစ် ဖွံ့ဖြိုးတိုးတက်ရေးဆိုင်ရာ မူဝါဒ

(ည) သဘာဝပတ်ဝန်းကျင်ထိန်းသိမ်းရေးနှင့် ရာသီဥတုပြောင်းလဲမှုတုံ့ပြန်ဆောင်ရွက်ရေးဆိုင်ရာ မူဝါဒ',
            'en_name'=>'Current landscape of agriculture sector in Myanmar',
            'en_description'=>'About 70% of the population in Myanmar resides in rural area and agriculture is their main livelihood. While the agriculture sector contributes 30% of national GDP, both the benefits that are gained from farming as well as the socio-economic status of farmers are extremely low.

Furthermore, farmers’ the socioeconomic status has been adversely affected by the effects of climate change, and natural and man made disasters. In particular, the unpredictable weather changes that have taken place almost annually in the wake of Cyclone Nargis in 2008 have led to tremendous crop damage and losses in the agriculture sector. At the same time, the failure to take effective actions on existing forest and soil conservation measures have exacerbated the soil quality and fertility. As a consequence, most farmers have not been able to break out of the economic down town they have experienced from chronically low productivity, low income, and rising indebtedness. In order to uplift the socio-economic condition of farmers and improve the performance of the agriculture sector, the Ministry of Agriculture, Livestock and Irrigation (MOALI) has made it a priority to support the development of the national economy through effective implementation of a proactive portfolio far reaching policies and strategic thrusts.

The aim of these new policies and strategic thrusts, referred to as Agriculture Policy 2016, is to create the enabling environment that will promote the production of a greater and more diversified range of high value agricultural, livestock, and fishery products. A major intention of Agriculture Policy 2016 is to take advantage of the comparative advantage that Myanmar has in the production of these high value products that are in increasing demand in both domestic and international markets.

Vision
The vision of Agriculture Policy 2016 is:

An inclusive, competitive, food and nutrition secured and sustainable agricultural system contributing to the socio-economic well being of farmers and rural people and further development of the national economy.

Mission
The Mission of Agriculture Policy 2016 is:

To enable rural population and agribusiness enterprises that sustain themselves from the production and sales of diverse, safe and nutritious foods, and agricultural products to have access to innovative and sustainable production, processing, packaging, logistics, and marketing technologies to meet the growing domestic and global demands.

Goal
The followings are the goals of the Ministry.

Improve food security, food safety, and nutritional status of agricultural products of the people of Myanmar.

Enhance agricultural diversification programmes in compliance with the changing market and the prevailing agro-climatic condition of the area.

Satisfy the specified quality requirements and standard of agricultural, livestock and fishery products as dictated by the market.

Improve the dissemination of market and price information.

Prevent the incidence and spread of pests and diseases in crops and livestock by wide spread use of IPM measures of a preventative nature and through development and adoption of Good Agriculture Practices - GAP, Good Animal Husbandry Practices - GAHP and Good Aquaculture Practices –GaqP.

Support the formation of crops, livestock, and fisheries producer groups and cooperative societies that aim in sustaining the development of agriculture sector.

Develop the seed industry and highly performing pure animal breeds and fish species, and conserve native breeds and species.

Develop and enhance agro-based industries, small scale industries, and cottage industries traditional weaving and handicraft and the vocational education, and rural infrastructure that is needed to support the development of these industries.

Improve and enhance research, the extension service, and human resource programmes.

Objectives
The followings are the Objectives of the Ministry.

To ensure food and nutrition security and food safety.

To safeguard the rights of the farmers and to enhance their welfare and livelihood.

To advance and upgrade the agricultural sector by organizing farmers’ associations and cooperatives inclusive of small holders and subsistence farmers with promotion of gender role.

To attain sustainable rural development and to upgrade socio-economic conditions of rural people and farmers by improving rural infrastructure, enhancing access to markets, establishing small scale enterprises and designing participatory land use plans and management.

To seek technical assistance and mobilize the financial resources from local and international agencies in support of crops, livestock, fisheries and rural development in the agriculture sector.

To promote domestic and foreign direct investment in agriculture sector.

To promote competitiveness and value-added production of exportable agricultural commodities.

To encourage the development of agro-based industry, small scale enterprises, cottage industries, and income generation activities, including ten traditional artworks and crafts.

To improve the livelihood and income generation of the rural people through the development of agricultural cooperative enterprises and the cooperative system.

To develop effective linkages of production, trading, processing, services and consumer segments along the value chains of agricultural commodities.

To improve coordination mechanism of inter-governmental agencies, to foster public-private partnership and to establish collaboration and connectivity among all stakeholders including public agencies, academia, farmers’ associations, civil societies, and private sector with a view to enhancing rural development and reducing poverty .

Policies
Myanmar’s agricultural policy is to improve food and nutrition security and food safety for all the people and to enable smallholder farmers to increase their incomes through higher productivity and diversified production in response to market demand, as well as to enhance exports through and internationally competitive private agri-business sector.

These policies will provide consumers, producers, and businesses in the agricultural sector with a supportive legal and regulatory environment along with essential public investment, infrastructure and services as well as the mobilization of domestic and foreign investments. Specific policies to develop and utilize land, water and other natural resources in an inclusive, competitive, efficient, safe and sustainable manner can be organized into three categories: governance of land, water and other natural resources: access to inputs and technology for production: and value-added processing, marketing and export.

Policies related to agriculture sector of Myanmar are as follows:
Land Use and Management Policy.

Water Use and Management Policy.

Agricultural financing Policy.

Agricultural Mechanization and Input Sector Policy.

Cooperative Societies and Cooperative System Development Policy

Rural Infrastructure Development Policy.

Research, Development and Extension Policy.

Marketing, Value-added Processing and Export Policy.

Governance, Institutional and Human Resource Development Policy.

Environmental Conservation and Climate Change Resilience Policy.

Land Use and Management Policy

Land Use and Management Policy.
All farmers who produce crop, livestock and fish can access land in accordance with the existing Farm Land Laws, and also transfer, sell, mortgage, lend, exchange, give away, or inherit their land right including tilling and other land use.

To capture both fresh and brackish water fishery and produce fish systematically in accordance with the Laws.

To establish Special Zones for the production of agriculture, livestock and fishery products so as to improve productivity.

Arrangement will be made available for farmers’ freedom of choice to undertake any farming activities in accordance with Laws (agriculture, livestock, fishery sectors) that are economically viable, in the farm land which is granted to till and use.

Formation of groups of farmers, including crops and livestock, and fisherman, will be encouraged and supported and aimed to work within the Land Consolidation and Land Use Management system in the transformation to a larger scale farm parcels.

Assistance will be provided to those who are interested in farming activities, in particular, small holder farmers and farm labors, who are landless and have extremely limited financial resources will have the rights of tilling the land that they have cleared or developed as new farm land.

Development of new farm land will be undertaken in accordance with the National Land Use Policy.'
        ]);
        \App\News::create([
            'image'=>'/images/news/default.jpg',
            'my_name'=>'မြန်မာ့လယ်ယာကဏ္ဍအခြေအနေ',
            'my_description'=>'၁။မြန်မာနိုင်ငံလူဦးရေ၏၇၀%သည် ကျေးလက်ဒေသတွင်နေထိုင်လျက်ရှိကြပြီး အများစု၏ အဓိကစီးပွားရေးလုပ်ငန်းမှာ လယ်ယာလုပ်ငန်းဖြစ်ပါသည်။ တစ်မျိုးသားလုံး၏ ပြည်တွင်းအသားတင်ထုတ်လုပ်မှုနှင့် ဝန်ဆောင်မှုတန်ဘိုး (GDP) ၏၃၀% ခန့်ကိုလယ်ယာကဏ္ဍမှရရှိသော်လည်း တောင်သူလယ်သမားအများစု၏ လယ်ယာမြေနှင့်ပတ်သက်သော အကျိုးခံစားခွင့်အလွန်နည်းပါးလှပြီး ၎င်းတို့၏လူမှုစီးပွားဘဝသည်နိမ့်ကျလျက်ရှိပါသည်။

၂။ထို့အပြင်ရာသီဥတုပြောင်းလဲမှု၊သဘာဝဘေးနှင့် အခြားသောဘေးအန္တရာယ်များကျရောက်မှုတို့ကြောင့် တောင်သူလယ်သမားအများစု၏ လူမှုစီးပွားဘဝကိုပိုမိုထိခိုက်စေပါသည်။ အထူးသဖြင့်၂၀၀၈ခုနှစ်၊ နာဂစ်မုန်တိုင်းနောက်ပိုင်းတွင် နှစ်စဉ်လိုလိုရာသီဥတုဖောက်ပြန်လာခဲ့ရာလယ်ယာကဏ္ဍတွင် ထိခိုက်နစ်နာဆုံးရှုံးမှုများပေါ်ပေါက်ခဲ့ရပါသည်။ သစ်တောပြုန်းတီးခြင်းကိုကာကွယ်ထိန်းသိမ်းမှုနှင့် မြေဆီလွှာထိန်းသိမ်းမှုလုပ်ငန်းများကို စနစ်တကျထိရောက်စွာဆောင်ရွက်မှုအားနည်းခဲ့ခြင်းတို့ကြောင့် မြေဆီလွှာအရည်အသွေးကျဆင်းပျက်စီးလာလျက်ရှိပါသည်။ အကျိုးဆက်အနေဖြင့်တောင်သူလယ်သမားအများစုမှာ ဝင်ငွေနိမ့်ကျပြီးအကြွေးသံသရာမှ ရုန်းမထွက်နိုင်သည့်အပြင်အကြောင်းအမျိုးမျိုးဖြင့် ၎င်းတို့လုပ်ကိုင်သောလယ်ယာမြေများကို လက်လွှတ်ခဲ့ရခြင်းကြောင့် လယ်မဲ့ယာမဲ့များဘဝသို့ရောက်ခဲ့ရပြီး လူမှုစီးပွားဘဝအခြေအနေများကိုပိုမိုထိခိုက်စေခဲ့ပါသည်။ သို့ဖြစ်ပါ၍တောင်သူလယ်သမားတို့၏ လူမှုစီးပွားဘဝအခြေအနေမြင့်မားတိုးတက်လာစေရန်နှင့် လယ်ယာကဏ္ဍ ဖွံ့ဖြိုးတိုးတက်လာစေရန် ဝန်ကြီးဌာန၏မူဝါဒများနှင့်လုပ်ငန်းစဉ်များကို ခိုင်ခိုင်မာမာရေးဆွဲချမှတ်အကောင်အထည်ဖော်ခြင်းဖြင့် နိုင်ငံတော်၏စီးပွားရေးဖွံ့ဖြိုးတိုးတက်မှုကိုအထောက်အကူပြုနိုင်ရန်ကြိုးပမ်းဆောင်ရွက်ရမည်ဖြစ်ပါသည်။

၃။လယ်ယာကဏ္ဍမူဝါဒအသစ်တွင်မြန်မာနိုင်ငံ၏ လယ်ယာကဏ္ဍရှိအခွင့်အလမ်းကောင်းများကို ဖေါ်ထုတ်ပေးလိုက်ခြင်းဖြင့်လျင်မြန်စွာတိုးတက်လာနေသော ပြည်တွင်းပြည်ပဈေးကွက်ရှိစားသုံးသူများ၏ လိုအပ်ချက်များဖြစ်သောအဆင့်အတန်းမြင့်လယ်ယာနှင့်သားငါးထွက်ကုန်များကို အမျိုးအမယ်စုံလင်စွာဖြည့်ဆည်းပေးရန် ရည်ရွယ်ပါသည်။ ယင်းသို့သောမူဝါဒအရစိုက်ပျိုးမွေးမြူရေးနှင့်ထုတ်လုပ်ရေးလုပ်ငန်းများကိုပိုမိုကျယ်ပြန့်လာစေခြင်း၊ ထုတ်လုပ်မှုစွမ်းအားမြင့်မားလာခြင်းနှင့်အတူ လုပ်ကွက်ငယ်တောင်သူလယ်သမား၏ဝင်ငွေပါတိုးတက်လာစေခြင်း၊ စားသုံးသူများအတွက်ဘေးအန္တရာယ်ကင်း၍ အာဟာရပြည့်ဝသောစားနပ်ရိက္ခာများထုတ်လုပ်နိုင်ခြင်း၊လယ်ယာစီးပွားရေးလုပ်ငန်းများဖွံ့ဖြိုးလာခြင်းနှင့်အတူနိုင်ငံတကာဈေးကွက်နှင့် ချိတ်ဆက်၍ လယ်ယာထုတ်ကုန်များကို  ပြည်ပသို့ ပိုမိုတင်ပို့နိုင်ခြင်း၊ ကျေးလက်ဒေသလူမှုစီးပွားဘဝတိုးတက်လာခြင်း၊ ဖွံ့ဖြိုးတိုးတက်မှု ရေရှည်တည်တံ့ခြင်းစသော  အကျိုးကျေးဇူးများရရှိဖြစ်ပေါ်လာစေနိုင်ပါသည်။

မျှော်မှန်းချက်
၄။အားလုံးပါဝင်ပြီး နိုင်ငံတကာနှင့် ယှဉ်ပြိုင်နိုင်စွမ်းရှိသည့် ရေရှည်တည်တံ့သော လယ်ယာကုန်ထုတ်မှုစနစ် ထွန်းကားစေခြင်းဖြင့် စားနပ်ရိက္ခာဖူလုံ၍ အာဟာရပြည့်ဝစေပြီး ကျေးလက်နေပြည်သူများ၏ လူမှုစီးပွားဘဝမြင့်မားလာစေရန်နှင့် နိုင်ငံစီးပွားဖွံ့ဖြိုးတိုးတက်မှု ကို အထောက်အကူဖြစ်စေရန်။

လုပ်ငန်းတာဝန်များ
၅။ကျေးလက်နေ ပြည်သူများနှင့် လယ်ယာစီးပွားရေးလုပ်ငန်းများအား ခေတ်မီဆန်းသစ်၍ ရေရှည်တည်တံ့သောထုတ်လုပ်မှုနည်းပညာများ၊ ပြုပြင်ထုပ်ပိုး နည်းလမ်းများ၊ ထောက်ပံ့ပို့ဆောင်ရေး နည်းလမ်းများနှင့်ဈေးကွက်ဆိုင်ရာ နည်းပညာများကို အသုံးပြု၍ ကြီးထွားလာသောပြည်တွင်းပြည်ပဈေးကွက်ဝယ်လိုအားနှင့်အညီ ဘေးအန္တရာယ်ကင်းရှင်း၍အာဟာရပြည့်ဝသည့် အမယ်စုံလင်သောစားနပ်ရိက္ခာနှင့်စိုက်ပျိုးမွေးမြူရေးထုတ်ကုန်ပစ္စည်းများ တိုးတက်ထုတ်လုပ်ရာတွင် အထောက်အကူပြုနိုင်ရေး ဆောင်ရွက်ရန်။

ပန်းတိုင်
၆။ပန်းတိုင်မှာအောက်ပါအတိုင်းဖြစ်ပါသည်−

(က)စားနပ်ရိက္ခာဖူလုံမှု​၊ အာဟာရပြည့်ဝရေးနှင့်အစားအစာဘေးအန္တရာယ်ကင်းရှင်းမှုတိုးတက်စေ ရေး။

(ခ) ပြောင်းလဲလာသော ဈေးကွက်နှင့်အညီ ဒေသအလိုက် ရေမြေ၊ ရာသီဥတုတို့နှင့်ကိုက်ညီသည့် အမယ်စုံလင်သော လယ်ယာ၊ သားငါးထွက်ကုန်များ ထုတ်လုပ်မှုပုံစံ တိုးမြင့်လာစေရေး။

(ဂ) စျေးကွက်လိုအပ်ချက်နှင့်အညီလယ်ယာသားငါးထုတ်ကုန်များ၏ အရည်အသွေးနှင့် စံချိန်စံညွှန်းများပြည့်မီစေရေး။

(ဃ)လယ်ယာထွက်ကုန် ဈေးကွက်နှင့် ဈေးနှုန်းသတင်းအချက်အလက် ဖြန့်ဝေမှု လုပ်ငန်းများ ဖွံ့ဖြိုးတိုးတက်လာစေရေး။

(င)တိရစ္ဆာန်နှင့်အပင်ပိုးမွှားရောဂါဆိုင်ရာအန္တရာယ်ကင်းရှင်းရေး၊ စိုက်ပျိုးမွေးမြူထုတ်လုပ်မှု အလေ့အကျင့်ကောင်းများဖွံ့ဖြိုးတိုးတက်လာစေရေး။

(စ)လယ်ယာကဏ္ဍစဉ်ဆက်မပြတ်ဖွံ့ဖြိုးတိုးတက်စေရေး အတွက်စိုက်ပျိုးမွေးမြူထုတ်လုပ်သ ူအစုအဖွဲ့များ၊သမဝါယမအသင်းများပေါ်ထွန်းလာစေရေး။

(ဆ)မျိုးစေ့ကဏ္ဍဖွံ့ဖြိုးတိုးတက်စေရေးနှင့် သားငါးမျိုးကောင်းမျိုးသနှင့်မွေးမြူထုတ်လုပ် ဖြန့်ဖြူးမှုဖွံ့ဖြိုးတိုးတက်စေရေး၊ဒေသမျိုးရင်းများထိန်းသိမ်းရေးနှင့်မှတ်တမ်းထားရှိရေး။

(ဇ)လယ်ယာအခြေခံစက်မှုလုပ်ငန်းများ၊အသေးစားစက်မှုလက်မှုလုပ်ငန်းများ၊ ရက်ကန်း လုပ်ငန်းများ၊ ပန်း(၁၀)မျိုးအပါအဝင်ရိုးရာလက်မှုလုပ်ငန်းများ၊ အသက်မွေးဝမ်းကျောင်း လုပ်ငန်းများနှင့်ကျေးလက်အခြေခံအဆောက်အအုံများဖွံ့ဖြိုးတိုးတက်စေရေး။

(ဈ)သုတေသနနှင့်ပညာပေးလုပ်ငန်းများဖွံ့ဖြိုးတိုးတက်စေရေး၊ လူ့စွမ်းအားအရင်းအမြစ်ဖွံ့ဖြိုး တိုးတက်စေရေး။

ရည်မှန်းချက်များ
၇။ရည်မှန်းချက်များမှာ အောက်ပါအတိုင်းဖြစ်ပါသည်−

(က)စားနပ်ရိက္ခာဖူလုံရေး၊အာဟာရပြည့်ဝရေးနှင့်အစားအစာ ဘေးအန္တရာယ်ကင်းရှင်းရေး တိုးတက်လာစေရန်။

(ခ)တောင်သူလယ်သမားများ၏အခွင့်အရေး ပြည့်ဝစွာရရှိခံစားနိုင်စေရန်နှင့် အကျိုးစီးပွား မြင့်မားလာစေရန်။

(ဂ)လုပ်ကွက်ငယ်တောင်သူလယ်သမားများ၊တစ်ပိုင်တစ်နိုင် မွေးမြူသူများနှင့်ရေလုပ်သားများ ကိုအခြေခံ၍အစုအဖွဲ့များ၊သမဝါယမအသင်းများဖွဲ့စည်းပြီးအတွေးသစ်အမြင်သစ်များဖြင့်စိုက်ပျိုးမွေးမြူရေးလုပ်ငန်းများကိုခေတ်မီဖွံ့ဖြိုးတိုးတက်လာစေရန်နှင့်ယင်းလုပ်ငန်းများတွင်အမျိုးသမီးများ၏အခန်းကဏ္ဍကိုပိုမိုမြှင့်တင်ရန်။

(ဃ)လယ်ယာကုန်ထုတ်လမ်းများ၊ကျေးရွာအခြေခံအဆောက်အအုံများ၊မြေယာ အသုံးချမှု အစီအမံများရေးဆွဲဆောင်ရွက်ခြင်းနှင့်အသေးစားစက်မှုလက်မှုကုန်ထုတ်လုပ်ငန်းများတည်ထောင်ပေးခြင်းတို့ဖြင့်ကျေးလက်ဒေသများစဉ်ဆက်မပြတ်ဖွံ့ဖြိုးတိုးတက်စေပြီးတောင်သူလယ်သမားများ၏လူမှုစီးပွားဘဝတိုးတက်မြင့်မားလာစေရန်။

(င)စိုက်ပျိုးမွေးမြူရေးလုပ်ငန်းများနှင့်သမဝါယမလုပ်ငန်းများပိုမိုဖွံ့ဖြိုးတိုးတက် လာစေရန် လိုအပ်သောနည်းပညာနှင့်ငွေကြေးအရင်းအနှီးများအတွက် ပြည်တွင်းပြည်ပမှအကူအညီ၊အထောက်အပံ့နှင့်ချေးငွေများရရှိရေးကူညီဆောင်ရွက်ပေးရန်။

(စ)လယ်ယာကဏ္ဍတွင် ပြည်တွင်းပြည်ပရင်းနှီးမြှုပ်နှံမှုများ တိုးတက်လာစေရေး အားပေးဆောင်ရွက်ရန်။

(ဆ)ပြည်ပဈေးကွက်ဝင် အရည်အသွေးမြင့် လယ်ယာ၊ သားငါး ထုတ်ကုန်များတိုးမြှင့် ထုတ်လုပ်နိုင်ရေး အားပေးဆောင်ရွက်ရန်။

(ဇ)လယ်ယာအခြေခံစက်မှုလုပ်ငန်းများ၊ အသေးစား စက်မှုလက်မှုလုပ်ငန်းများ၊ ရက်ကန်းလုပ်ငန်းများ၊ ပန်း(၁၀)မျိုးအပါအဝင်ရိုးရာလက်မှုလုပ်ငန်းများနှင့် အသက်မွေးဝမ်းကျောင်းလုပ်ငန်းများ ဖွံ့ဖြိုးတိုးတက်လာစေရေး အားပေးဆောင်ရွက်ရန်။

(ဈ)သမဝါယမလုပ်ငန်းများနှင့်သမဝါယမစနစ်ပိုမိုအောင်မြင်စေရေးဆောင်ရွက်ရန်။

(ည)တန်ဖိုးကွင်းဆက်တစ်ခုလုံးဖွံ့ဖြိုးတိုးတက်ရေးအတွက်ထုတ်လုပ်မှု၊ဝန်ဆောင်မှု၊ကုန်သွယ်မှုနှင့်စားသုံးမှုကဏ္ဍများကိုထိရောက်စွာချိတ်ဆက်ဆောင်ရွက်သွားရန်။

(ဋ)ဆင်းရဲနွမ်းပါးမှုလျှော့ချရေး၊ ရေရှည်တည်တံ့သောလယ်ယာကဏ္ဍဖွံ့ဖြိုးတိုးတက်ရေးနှင့် ကျေးလက်ဒေသဖွံ့ဖြိုးရေးလုပ်ငန်းများတွင်သက်ဆိုင်ရာကဏ္ဍအသီးသီးမှအစိုးရအဖွဲ့အစည်းများအချင်းချင်းပူးပေါင်းဆောင်ရွက်ခြင်း၊အစိုးရနှင့်ပုဂ္ဂလိကအဖွဲ့အစည်းများပူးပေါင်းဆောင်ရွက်ခြင်းအပါအဝင်သက်ဆိုင်သူများအားလုံးပူးပေါင်းပါဝင်ဆောင်ရွက်သွားရန်။

မူဝါဒများ
၈။လယ်ယာကဏ္ဍမူဝါဒသည် ပြည်သူလူထုအားလုံး စားနပ်ရိက္ခာနှင့် အာဟာရဖူလုံမှုရရှိစေရေး၊ လုပ်ကွက်ငယ် တောင်သူလယ်သမားများအနေဖြင့် ထုတ်လုပ်နိုင်မှု စွမ်းအားမြင့်မားပြီး ဈေးကွက်၏ လိုအပ်ချက်နှင့်အညီ ထုတ်ကုန်ပစ္စည်း အမယ်စုံအောင် ထုတ်လုပ်ပေးနိုင်ခြင်းဖြင့် ဝင်ငွေမြင့်မားလာစေရေးနှင့် ပုဂ္ဂလိက လယ်ယာစီးပွားရေးလုပ်ငန်းကဏ္ဍ၏ နိုင်ငံတကာနှင့် ယှဉ်ပြိုင်နိုင်ပြီး ပြည်ပပို့ကုန်တိုးမြင့် တင်ပို့နိုင်ရေးတို့ကို ဖြည့်ဆည်းပေးရန်ဖြစ်ပါသည်။

၉။ မူဝါဒများသည် လယ်ယာကဏ္ဍတွင် ပါဝင်သည့် ထုတ်လုပ်သူများ၊ စီးပွားရေးလုပ်ငန်း ဆောင်ရွက်သူများ၊ စားသုံးသူများအားလုံးအတွက် အထောက်အကူဖြစ်စေမည့် ဥပဒေ မူဘောင်ဆိုင်ရာဝန်းကျင်ကောင်းများ ဖန်တီးပေးခြင်းနှင့်အတူ အခြေခံ အဆောက်အအုံများ၊ ဝန်ဆောင်မှုများနှင့် ပြည်တွင်းပြည်ပ ရင်းနှီးမြှပ်နှံမှုများပေါ်ထွန်းရရှိစေရေးဖြည့်ဆည်းပေးရန် ဖြစ်ပါသည်။ ရေ၊ မြေနှင့် သဘာဝသယံဇာတအရင်းအမြစ်များကို ဖော်ထုတ်သုံးစွဲရာတွင် အများပါဝင်မှု၊ အန္တရာယ်ကင်းရှင်းမှုရှိစေပြီး ထိရောက်စွာနှင့် ရေရှည်တည်တံ့စွာ စီမံခန့်ခွဲ အသုံးချနိုင်ရန်ဖြစ်ပါသည်။

၁၀။ မူဝါဒများမှာ အောက်ပါအတိုင်း ဖြစ်ပါသည်-

(က) မြေယာအသုံးချမှုနှင့် စီမံခန့်ခွဲမှုဆိုင်ရာ မူဝါဒ

(ခ ) ရေအရင်းအမြစ် အသုံးချမှုနှင့် စီမံခန့်ခွဲမှုဆိုင်ရာ မူဝါဒ

(ဂ )  ငွေကြေးအရင်းအနှီးဆိုင်ရာ မူဝါဒ

(ဃ) စက်မှုလယ်ယာ နှင့် သွင်းအားစုများ ဆိုင်ရာ မူဝါဒ

(င ) သမဝါယမလုပ်ငန်းများနှင့် သမဝါယမစနစ်ဖွံ့ဖြိုးရေးဆိုင်ရာ မူဝါဒ (စ) ကျေးလက်အခြေခံအဆောက်အအုံဖွံ့ဖြိုးရေးဆိုင်ရာ မူဝါဒ

(ဆ) သုတေသန၊ ဖွံ့ဖြိုးမှုနှင့် နည်းပညာ ဖြန့်ဖြူးခြင်းဆိုင်ရာ မူဝါဒ

(ဇ ) ဈေးကွက်၊ တန်ဖိုးမြှင့်ကုန်ထုတ်လုပ်ခြင်းနှင့် ပြည်ပတင်ပို့ ရောင်းချခြင်းဆိုင်ရာမူဝါဒ

(ဈ ) အုပ်ချုပ်မှု၊ အဖွဲ့အစည်းများနှင့် လူ့စွမ်းအားအရင်းအမြစ် ဖွံ့ဖြိုးတိုးတက်ရေးဆိုင်ရာ မူဝါဒ

(ည) သဘာဝပတ်ဝန်းကျင်ထိန်းသိမ်းရေးနှင့် ရာသီဥတုပြောင်းလဲမှုတုံ့ပြန်ဆောင်ရွက်ရေးဆိုင်ရာ မူဝါဒ',
            'en_name'=>'Current landscape of agriculture sector in Myanmar',
            'en_description'=>'About 70% of the population in Myanmar resides in rural area and agriculture is their main livelihood. While the agriculture sector contributes 30% of national GDP, both the benefits that are gained from farming as well as the socio-economic status of farmers are extremely low.

Furthermore, farmers’ the socioeconomic status has been adversely affected by the effects of climate change, and natural and man made disasters. In particular, the unpredictable weather changes that have taken place almost annually in the wake of Cyclone Nargis in 2008 have led to tremendous crop damage and losses in the agriculture sector. At the same time, the failure to take effective actions on existing forest and soil conservation measures have exacerbated the soil quality and fertility. As a consequence, most farmers have not been able to break out of the economic down town they have experienced from chronically low productivity, low income, and rising indebtedness. In order to uplift the socio-economic condition of farmers and improve the performance of the agriculture sector, the Ministry of Agriculture, Livestock and Irrigation (MOALI) has made it a priority to support the development of the national economy through effective implementation of a proactive portfolio far reaching policies and strategic thrusts.

The aim of these new policies and strategic thrusts, referred to as Agriculture Policy 2016, is to create the enabling environment that will promote the production of a greater and more diversified range of high value agricultural, livestock, and fishery products. A major intention of Agriculture Policy 2016 is to take advantage of the comparative advantage that Myanmar has in the production of these high value products that are in increasing demand in both domestic and international markets.

Vision
The vision of Agriculture Policy 2016 is:

An inclusive, competitive, food and nutrition secured and sustainable agricultural system contributing to the socio-economic well being of farmers and rural people and further development of the national economy.

Mission
The Mission of Agriculture Policy 2016 is:

To enable rural population and agribusiness enterprises that sustain themselves from the production and sales of diverse, safe and nutritious foods, and agricultural products to have access to innovative and sustainable production, processing, packaging, logistics, and marketing technologies to meet the growing domestic and global demands.

Goal
The followings are the goals of the Ministry.

Improve food security, food safety, and nutritional status of agricultural products of the people of Myanmar.

Enhance agricultural diversification programmes in compliance with the changing market and the prevailing agro-climatic condition of the area.

Satisfy the specified quality requirements and standard of agricultural, livestock and fishery products as dictated by the market.

Improve the dissemination of market and price information.

Prevent the incidence and spread of pests and diseases in crops and livestock by wide spread use of IPM measures of a preventative nature and through development and adoption of Good Agriculture Practices - GAP, Good Animal Husbandry Practices - GAHP and Good Aquaculture Practices –GaqP.

Support the formation of crops, livestock, and fisheries producer groups and cooperative societies that aim in sustaining the development of agriculture sector.

Develop the seed industry and highly performing pure animal breeds and fish species, and conserve native breeds and species.

Develop and enhance agro-based industries, small scale industries, and cottage industries traditional weaving and handicraft and the vocational education, and rural infrastructure that is needed to support the development of these industries.

Improve and enhance research, the extension service, and human resource programmes.

Objectives
The followings are the Objectives of the Ministry.

To ensure food and nutrition security and food safety.

To safeguard the rights of the farmers and to enhance their welfare and livelihood.

To advance and upgrade the agricultural sector by organizing farmers’ associations and cooperatives inclusive of small holders and subsistence farmers with promotion of gender role.

To attain sustainable rural development and to upgrade socio-economic conditions of rural people and farmers by improving rural infrastructure, enhancing access to markets, establishing small scale enterprises and designing participatory land use plans and management.

To seek technical assistance and mobilize the financial resources from local and international agencies in support of crops, livestock, fisheries and rural development in the agriculture sector.

To promote domestic and foreign direct investment in agriculture sector.

To promote competitiveness and value-added production of exportable agricultural commodities.

To encourage the development of agro-based industry, small scale enterprises, cottage industries, and income generation activities, including ten traditional artworks and crafts.

To improve the livelihood and income generation of the rural people through the development of agricultural cooperative enterprises and the cooperative system.

To develop effective linkages of production, trading, processing, services and consumer segments along the value chains of agricultural commodities.

To improve coordination mechanism of inter-governmental agencies, to foster public-private partnership and to establish collaboration and connectivity among all stakeholders including public agencies, academia, farmers’ associations, civil societies, and private sector with a view to enhancing rural development and reducing poverty .

Policies
Myanmar’s agricultural policy is to improve food and nutrition security and food safety for all the people and to enable smallholder farmers to increase their incomes through higher productivity and diversified production in response to market demand, as well as to enhance exports through and internationally competitive private agri-business sector.

These policies will provide consumers, producers, and businesses in the agricultural sector with a supportive legal and regulatory environment along with essential public investment, infrastructure and services as well as the mobilization of domestic and foreign investments. Specific policies to develop and utilize land, water and other natural resources in an inclusive, competitive, efficient, safe and sustainable manner can be organized into three categories: governance of land, water and other natural resources: access to inputs and technology for production: and value-added processing, marketing and export.

Policies related to agriculture sector of Myanmar are as follows:
Land Use and Management Policy.

Water Use and Management Policy.

Agricultural financing Policy.

Agricultural Mechanization and Input Sector Policy.

Cooperative Societies and Cooperative System Development Policy

Rural Infrastructure Development Policy.

Research, Development and Extension Policy.

Marketing, Value-added Processing and Export Policy.

Governance, Institutional and Human Resource Development Policy.

Environmental Conservation and Climate Change Resilience Policy.

Land Use and Management Policy

Land Use and Management Policy.
All farmers who produce crop, livestock and fish can access land in accordance with the existing Farm Land Laws, and also transfer, sell, mortgage, lend, exchange, give away, or inherit their land right including tilling and other land use.

To capture both fresh and brackish water fishery and produce fish systematically in accordance with the Laws.

To establish Special Zones for the production of agriculture, livestock and fishery products so as to improve productivity.

Arrangement will be made available for farmers’ freedom of choice to undertake any farming activities in accordance with Laws (agriculture, livestock, fishery sectors) that are economically viable, in the farm land which is granted to till and use.

Formation of groups of farmers, including crops and livestock, and fisherman, will be encouraged and supported and aimed to work within the Land Consolidation and Land Use Management system in the transformation to a larger scale farm parcels.

Assistance will be provided to those who are interested in farming activities, in particular, small holder farmers and farm labors, who are landless and have extremely limited financial resources will have the rights of tilling the land that they have cleared or developed as new farm land.

Development of new farm land will be undertaken in accordance with the National Land Use Policy.'
        ]);
        \App\News::create([
            'image'=>'/images/news/default.jpg',
            'my_name'=>'မြန်မာ့လယ်ယာကဏ္ဍအခြေအနေ',
            'my_description'=>'၁။မြန်မာနိုင်ငံလူဦးရေ၏၇၀%သည် ကျေးလက်ဒေသတွင်နေထိုင်လျက်ရှိကြပြီး အများစု၏ အဓိကစီးပွားရေးလုပ်ငန်းမှာ လယ်ယာလုပ်ငန်းဖြစ်ပါသည်။ တစ်မျိုးသားလုံး၏ ပြည်တွင်းအသားတင်ထုတ်လုပ်မှုနှင့် ဝန်ဆောင်မှုတန်ဘိုး (GDP) ၏၃၀% ခန့်ကိုလယ်ယာကဏ္ဍမှရရှိသော်လည်း တောင်သူလယ်သမားအများစု၏ လယ်ယာမြေနှင့်ပတ်သက်သော အကျိုးခံစားခွင့်အလွန်နည်းပါးလှပြီး ၎င်းတို့၏လူမှုစီးပွားဘဝသည်နိမ့်ကျလျက်ရှိပါသည်။

၂။ထို့အပြင်ရာသီဥတုပြောင်းလဲမှု၊သဘာဝဘေးနှင့် အခြားသောဘေးအန္တရာယ်များကျရောက်မှုတို့ကြောင့် တောင်သူလယ်သမားအများစု၏ လူမှုစီးပွားဘဝကိုပိုမိုထိခိုက်စေပါသည်။ အထူးသဖြင့်၂၀၀၈ခုနှစ်၊ နာဂစ်မုန်တိုင်းနောက်ပိုင်းတွင် နှစ်စဉ်လိုလိုရာသီဥတုဖောက်ပြန်လာခဲ့ရာလယ်ယာကဏ္ဍတွင် ထိခိုက်နစ်နာဆုံးရှုံးမှုများပေါ်ပေါက်ခဲ့ရပါသည်။ သစ်တောပြုန်းတီးခြင်းကိုကာကွယ်ထိန်းသိမ်းမှုနှင့် မြေဆီလွှာထိန်းသိမ်းမှုလုပ်ငန်းများကို စနစ်တကျထိရောက်စွာဆောင်ရွက်မှုအားနည်းခဲ့ခြင်းတို့ကြောင့် မြေဆီလွှာအရည်အသွေးကျဆင်းပျက်စီးလာလျက်ရှိပါသည်။ အကျိုးဆက်အနေဖြင့်တောင်သူလယ်သမားအများစုမှာ ဝင်ငွေနိမ့်ကျပြီးအကြွေးသံသရာမှ ရုန်းမထွက်နိုင်သည့်အပြင်အကြောင်းအမျိုးမျိုးဖြင့် ၎င်းတို့လုပ်ကိုင်သောလယ်ယာမြေများကို လက်လွှတ်ခဲ့ရခြင်းကြောင့် လယ်မဲ့ယာမဲ့များဘဝသို့ရောက်ခဲ့ရပြီး လူမှုစီးပွားဘဝအခြေအနေများကိုပိုမိုထိခိုက်စေခဲ့ပါသည်။ သို့ဖြစ်ပါ၍တောင်သူလယ်သမားတို့၏ လူမှုစီးပွားဘဝအခြေအနေမြင့်မားတိုးတက်လာစေရန်နှင့် လယ်ယာကဏ္ဍ ဖွံ့ဖြိုးတိုးတက်လာစေရန် ဝန်ကြီးဌာန၏မူဝါဒများနှင့်လုပ်ငန်းစဉ်များကို ခိုင်ခိုင်မာမာရေးဆွဲချမှတ်အကောင်အထည်ဖော်ခြင်းဖြင့် နိုင်ငံတော်၏စီးပွားရေးဖွံ့ဖြိုးတိုးတက်မှုကိုအထောက်အကူပြုနိုင်ရန်ကြိုးပမ်းဆောင်ရွက်ရမည်ဖြစ်ပါသည်။

၃။လယ်ယာကဏ္ဍမူဝါဒအသစ်တွင်မြန်မာနိုင်ငံ၏ လယ်ယာကဏ္ဍရှိအခွင့်အလမ်းကောင်းများကို ဖေါ်ထုတ်ပေးလိုက်ခြင်းဖြင့်လျင်မြန်စွာတိုးတက်လာနေသော ပြည်တွင်းပြည်ပဈေးကွက်ရှိစားသုံးသူများ၏ လိုအပ်ချက်များဖြစ်သောအဆင့်အတန်းမြင့်လယ်ယာနှင့်သားငါးထွက်ကုန်များကို အမျိုးအမယ်စုံလင်စွာဖြည့်ဆည်းပေးရန် ရည်ရွယ်ပါသည်။ ယင်းသို့သောမူဝါဒအရစိုက်ပျိုးမွေးမြူရေးနှင့်ထုတ်လုပ်ရေးလုပ်ငန်းများကိုပိုမိုကျယ်ပြန့်လာစေခြင်း၊ ထုတ်လုပ်မှုစွမ်းအားမြင့်မားလာခြင်းနှင့်အတူ လုပ်ကွက်ငယ်တောင်သူလယ်သမား၏ဝင်ငွေပါတိုးတက်လာစေခြင်း၊ စားသုံးသူများအတွက်ဘေးအန္တရာယ်ကင်း၍ အာဟာရပြည့်ဝသောစားနပ်ရိက္ခာများထုတ်လုပ်နိုင်ခြင်း၊လယ်ယာစီးပွားရေးလုပ်ငန်းများဖွံ့ဖြိုးလာခြင်းနှင့်အတူနိုင်ငံတကာဈေးကွက်နှင့် ချိတ်ဆက်၍ လယ်ယာထုတ်ကုန်များကို  ပြည်ပသို့ ပိုမိုတင်ပို့နိုင်ခြင်း၊ ကျေးလက်ဒေသလူမှုစီးပွားဘဝတိုးတက်လာခြင်း၊ ဖွံ့ဖြိုးတိုးတက်မှု ရေရှည်တည်တံ့ခြင်းစသော  အကျိုးကျေးဇူးများရရှိဖြစ်ပေါ်လာစေနိုင်ပါသည်။

မျှော်မှန်းချက်
၄။အားလုံးပါဝင်ပြီး နိုင်ငံတကာနှင့် ယှဉ်ပြိုင်နိုင်စွမ်းရှိသည့် ရေရှည်တည်တံ့သော လယ်ယာကုန်ထုတ်မှုစနစ် ထွန်းကားစေခြင်းဖြင့် စားနပ်ရိက္ခာဖူလုံ၍ အာဟာရပြည့်ဝစေပြီး ကျေးလက်နေပြည်သူများ၏ လူမှုစီးပွားဘဝမြင့်မားလာစေရန်နှင့် နိုင်ငံစီးပွားဖွံ့ဖြိုးတိုးတက်မှု ကို အထောက်အကူဖြစ်စေရန်။

လုပ်ငန်းတာဝန်များ
၅။ကျေးလက်နေ ပြည်သူများနှင့် လယ်ယာစီးပွားရေးလုပ်ငန်းများအား ခေတ်မီဆန်းသစ်၍ ရေရှည်တည်တံ့သောထုတ်လုပ်မှုနည်းပညာများ၊ ပြုပြင်ထုပ်ပိုး နည်းလမ်းများ၊ ထောက်ပံ့ပို့ဆောင်ရေး နည်းလမ်းများနှင့်ဈေးကွက်ဆိုင်ရာ နည်းပညာများကို အသုံးပြု၍ ကြီးထွားလာသောပြည်တွင်းပြည်ပဈေးကွက်ဝယ်လိုအားနှင့်အညီ ဘေးအန္တရာယ်ကင်းရှင်း၍အာဟာရပြည့်ဝသည့် အမယ်စုံလင်သောစားနပ်ရိက္ခာနှင့်စိုက်ပျိုးမွေးမြူရေးထုတ်ကုန်ပစ္စည်းများ တိုးတက်ထုတ်လုပ်ရာတွင် အထောက်အကူပြုနိုင်ရေး ဆောင်ရွက်ရန်။

ပန်းတိုင်
၆။ပန်းတိုင်မှာအောက်ပါအတိုင်းဖြစ်ပါသည်−

(က)စားနပ်ရိက္ခာဖူလုံမှု​၊ အာဟာရပြည့်ဝရေးနှင့်အစားအစာဘေးအန္တရာယ်ကင်းရှင်းမှုတိုးတက်စေ ရေး။

(ခ) ပြောင်းလဲလာသော ဈေးကွက်နှင့်အညီ ဒေသအလိုက် ရေမြေ၊ ရာသီဥတုတို့နှင့်ကိုက်ညီသည့် အမယ်စုံလင်သော လယ်ယာ၊ သားငါးထွက်ကုန်များ ထုတ်လုပ်မှုပုံစံ တိုးမြင့်လာစေရေး။

(ဂ) စျေးကွက်လိုအပ်ချက်နှင့်အညီလယ်ယာသားငါးထုတ်ကုန်များ၏ အရည်အသွေးနှင့် စံချိန်စံညွှန်းများပြည့်မီစေရေး။

(ဃ)လယ်ယာထွက်ကုန် ဈေးကွက်နှင့် ဈေးနှုန်းသတင်းအချက်အလက် ဖြန့်ဝေမှု လုပ်ငန်းများ ဖွံ့ဖြိုးတိုးတက်လာစေရေး။

(င)တိရစ္ဆာန်နှင့်အပင်ပိုးမွှားရောဂါဆိုင်ရာအန္တရာယ်ကင်းရှင်းရေး၊ စိုက်ပျိုးမွေးမြူထုတ်လုပ်မှု အလေ့အကျင့်ကောင်းများဖွံ့ဖြိုးတိုးတက်လာစေရေး။

(စ)လယ်ယာကဏ္ဍစဉ်ဆက်မပြတ်ဖွံ့ဖြိုးတိုးတက်စေရေး အတွက်စိုက်ပျိုးမွေးမြူထုတ်လုပ်သ ူအစုအဖွဲ့များ၊သမဝါယမအသင်းများပေါ်ထွန်းလာစေရေး။

(ဆ)မျိုးစေ့ကဏ္ဍဖွံ့ဖြိုးတိုးတက်စေရေးနှင့် သားငါးမျိုးကောင်းမျိုးသနှင့်မွေးမြူထုတ်လုပ် ဖြန့်ဖြူးမှုဖွံ့ဖြိုးတိုးတက်စေရေး၊ဒေသမျိုးရင်းများထိန်းသိမ်းရေးနှင့်မှတ်တမ်းထားရှိရေး။

(ဇ)လယ်ယာအခြေခံစက်မှုလုပ်ငန်းများ၊အသေးစားစက်မှုလက်မှုလုပ်ငန်းများ၊ ရက်ကန်း လုပ်ငန်းများ၊ ပန်း(၁၀)မျိုးအပါအဝင်ရိုးရာလက်မှုလုပ်ငန်းများ၊ အသက်မွေးဝမ်းကျောင်း လုပ်ငန်းများနှင့်ကျေးလက်အခြေခံအဆောက်အအုံများဖွံ့ဖြိုးတိုးတက်စေရေး။

(ဈ)သုတေသနနှင့်ပညာပေးလုပ်ငန်းများဖွံ့ဖြိုးတိုးတက်စေရေး၊ လူ့စွမ်းအားအရင်းအမြစ်ဖွံ့ဖြိုး တိုးတက်စေရေး။

ရည်မှန်းချက်များ
၇။ရည်မှန်းချက်များမှာ အောက်ပါအတိုင်းဖြစ်ပါသည်−

(က)စားနပ်ရိက္ခာဖူလုံရေး၊အာဟာရပြည့်ဝရေးနှင့်အစားအစာ ဘေးအန္တရာယ်ကင်းရှင်းရေး တိုးတက်လာစေရန်။

(ခ)တောင်သူလယ်သမားများ၏အခွင့်အရေး ပြည့်ဝစွာရရှိခံစားနိုင်စေရန်နှင့် အကျိုးစီးပွား မြင့်မားလာစေရန်။

(ဂ)လုပ်ကွက်ငယ်တောင်သူလယ်သမားများ၊တစ်ပိုင်တစ်နိုင် မွေးမြူသူများနှင့်ရေလုပ်သားများ ကိုအခြေခံ၍အစုအဖွဲ့များ၊သမဝါယမအသင်းများဖွဲ့စည်းပြီးအတွေးသစ်အမြင်သစ်များဖြင့်စိုက်ပျိုးမွေးမြူရေးလုပ်ငန်းများကိုခေတ်မီဖွံ့ဖြိုးတိုးတက်လာစေရန်နှင့်ယင်းလုပ်ငန်းများတွင်အမျိုးသမီးများ၏အခန်းကဏ္ဍကိုပိုမိုမြှင့်တင်ရန်။

(ဃ)လယ်ယာကုန်ထုတ်လမ်းများ၊ကျေးရွာအခြေခံအဆောက်အအုံများ၊မြေယာ အသုံးချမှု အစီအမံများရေးဆွဲဆောင်ရွက်ခြင်းနှင့်အသေးစားစက်မှုလက်မှုကုန်ထုတ်လုပ်ငန်းများတည်ထောင်ပေးခြင်းတို့ဖြင့်ကျေးလက်ဒေသများစဉ်ဆက်မပြတ်ဖွံ့ဖြိုးတိုးတက်စေပြီးတောင်သူလယ်သမားများ၏လူမှုစီးပွားဘဝတိုးတက်မြင့်မားလာစေရန်။

(င)စိုက်ပျိုးမွေးမြူရေးလုပ်ငန်းများနှင့်သမဝါယမလုပ်ငန်းများပိုမိုဖွံ့ဖြိုးတိုးတက် လာစေရန် လိုအပ်သောနည်းပညာနှင့်ငွေကြေးအရင်းအနှီးများအတွက် ပြည်တွင်းပြည်ပမှအကူအညီ၊အထောက်အပံ့နှင့်ချေးငွေများရရှိရေးကူညီဆောင်ရွက်ပေးရန်။

(စ)လယ်ယာကဏ္ဍတွင် ပြည်တွင်းပြည်ပရင်းနှီးမြှုပ်နှံမှုများ တိုးတက်လာစေရေး အားပေးဆောင်ရွက်ရန်။

(ဆ)ပြည်ပဈေးကွက်ဝင် အရည်အသွေးမြင့် လယ်ယာ၊ သားငါး ထုတ်ကုန်များတိုးမြှင့် ထုတ်လုပ်နိုင်ရေး အားပေးဆောင်ရွက်ရန်။

(ဇ)လယ်ယာအခြေခံစက်မှုလုပ်ငန်းများ၊ အသေးစား စက်မှုလက်မှုလုပ်ငန်းများ၊ ရက်ကန်းလုပ်ငန်းများ၊ ပန်း(၁၀)မျိုးအပါအဝင်ရိုးရာလက်မှုလုပ်ငန်းများနှင့် အသက်မွေးဝမ်းကျောင်းလုပ်ငန်းများ ဖွံ့ဖြိုးတိုးတက်လာစေရေး အားပေးဆောင်ရွက်ရန်။

(ဈ)သမဝါယမလုပ်ငန်းများနှင့်သမဝါယမစနစ်ပိုမိုအောင်မြင်စေရေးဆောင်ရွက်ရန်။

(ည)တန်ဖိုးကွင်းဆက်တစ်ခုလုံးဖွံ့ဖြိုးတိုးတက်ရေးအတွက်ထုတ်လုပ်မှု၊ဝန်ဆောင်မှု၊ကုန်သွယ်မှုနှင့်စားသုံးမှုကဏ္ဍများကိုထိရောက်စွာချိတ်ဆက်ဆောင်ရွက်သွားရန်။

(ဋ)ဆင်းရဲနွမ်းပါးမှုလျှော့ချရေး၊ ရေရှည်တည်တံ့သောလယ်ယာကဏ္ဍဖွံ့ဖြိုးတိုးတက်ရေးနှင့် ကျေးလက်ဒေသဖွံ့ဖြိုးရေးလုပ်ငန်းများတွင်သက်ဆိုင်ရာကဏ္ဍအသီးသီးမှအစိုးရအဖွဲ့အစည်းများအချင်းချင်းပူးပေါင်းဆောင်ရွက်ခြင်း၊အစိုးရနှင့်ပုဂ္ဂလိကအဖွဲ့အစည်းများပူးပေါင်းဆောင်ရွက်ခြင်းအပါအဝင်သက်ဆိုင်သူများအားလုံးပူးပေါင်းပါဝင်ဆောင်ရွက်သွားရန်။

မူဝါဒများ
၈။လယ်ယာကဏ္ဍမူဝါဒသည် ပြည်သူလူထုအားလုံး စားနပ်ရိက္ခာနှင့် အာဟာရဖူလုံမှုရရှိစေရေး၊ လုပ်ကွက်ငယ် တောင်သူလယ်သမားများအနေဖြင့် ထုတ်လုပ်နိုင်မှု စွမ်းအားမြင့်မားပြီး ဈေးကွက်၏ လိုအပ်ချက်နှင့်အညီ ထုတ်ကုန်ပစ္စည်း အမယ်စုံအောင် ထုတ်လုပ်ပေးနိုင်ခြင်းဖြင့် ဝင်ငွေမြင့်မားလာစေရေးနှင့် ပုဂ္ဂလိက လယ်ယာစီးပွားရေးလုပ်ငန်းကဏ္ဍ၏ နိုင်ငံတကာနှင့် ယှဉ်ပြိုင်နိုင်ပြီး ပြည်ပပို့ကုန်တိုးမြင့် တင်ပို့နိုင်ရေးတို့ကို ဖြည့်ဆည်းပေးရန်ဖြစ်ပါသည်။

၉။ မူဝါဒများသည် လယ်ယာကဏ္ဍတွင် ပါဝင်သည့် ထုတ်လုပ်သူများ၊ စီးပွားရေးလုပ်ငန်း ဆောင်ရွက်သူများ၊ စားသုံးသူများအားလုံးအတွက် အထောက်အကူဖြစ်စေမည့် ဥပဒေ မူဘောင်ဆိုင်ရာဝန်းကျင်ကောင်းများ ဖန်တီးပေးခြင်းနှင့်အတူ အခြေခံ အဆောက်အအုံများ၊ ဝန်ဆောင်မှုများနှင့် ပြည်တွင်းပြည်ပ ရင်းနှီးမြှပ်နှံမှုများပေါ်ထွန်းရရှိစေရေးဖြည့်ဆည်းပေးရန် ဖြစ်ပါသည်။ ရေ၊ မြေနှင့် သဘာဝသယံဇာတအရင်းအမြစ်များကို ဖော်ထုတ်သုံးစွဲရာတွင် အများပါဝင်မှု၊ အန္တရာယ်ကင်းရှင်းမှုရှိစေပြီး ထိရောက်စွာနှင့် ရေရှည်တည်တံ့စွာ စီမံခန့်ခွဲ အသုံးချနိုင်ရန်ဖြစ်ပါသည်။

၁၀။ မူဝါဒများမှာ အောက်ပါအတိုင်း ဖြစ်ပါသည်-

(က) မြေယာအသုံးချမှုနှင့် စီမံခန့်ခွဲမှုဆိုင်ရာ မူဝါဒ

(ခ ) ရေအရင်းအမြစ် အသုံးချမှုနှင့် စီမံခန့်ခွဲမှုဆိုင်ရာ မူဝါဒ

(ဂ )  ငွေကြေးအရင်းအနှီးဆိုင်ရာ မူဝါဒ

(ဃ) စက်မှုလယ်ယာ နှင့် သွင်းအားစုများ ဆိုင်ရာ မူဝါဒ

(င ) သမဝါယမလုပ်ငန်းများနှင့် သမဝါယမစနစ်ဖွံ့ဖြိုးရေးဆိုင်ရာ မူဝါဒ (စ) ကျေးလက်အခြေခံအဆောက်အအုံဖွံ့ဖြိုးရေးဆိုင်ရာ မူဝါဒ

(ဆ) သုတေသန၊ ဖွံ့ဖြိုးမှုနှင့် နည်းပညာ ဖြန့်ဖြူးခြင်းဆိုင်ရာ မူဝါဒ

(ဇ ) ဈေးကွက်၊ တန်ဖိုးမြှင့်ကုန်ထုတ်လုပ်ခြင်းနှင့် ပြည်ပတင်ပို့ ရောင်းချခြင်းဆိုင်ရာမူဝါဒ

(ဈ ) အုပ်ချုပ်မှု၊ အဖွဲ့အစည်းများနှင့် လူ့စွမ်းအားအရင်းအမြစ် ဖွံ့ဖြိုးတိုးတက်ရေးဆိုင်ရာ မူဝါဒ

(ည) သဘာဝပတ်ဝန်းကျင်ထိန်းသိမ်းရေးနှင့် ရာသီဥတုပြောင်းလဲမှုတုံ့ပြန်ဆောင်ရွက်ရေးဆိုင်ရာ မူဝါဒ',
            'en_name'=>'Current landscape of agriculture sector in Myanmar',
            'en_description'=>'About 70% of the population in Myanmar resides in rural area and agriculture is their main livelihood. While the agriculture sector contributes 30% of national GDP, both the benefits that are gained from farming as well as the socio-economic status of farmers are extremely low.

Furthermore, farmers’ the socioeconomic status has been adversely affected by the effects of climate change, and natural and man made disasters. In particular, the unpredictable weather changes that have taken place almost annually in the wake of Cyclone Nargis in 2008 have led to tremendous crop damage and losses in the agriculture sector. At the same time, the failure to take effective actions on existing forest and soil conservation measures have exacerbated the soil quality and fertility. As a consequence, most farmers have not been able to break out of the economic down town they have experienced from chronically low productivity, low income, and rising indebtedness. In order to uplift the socio-economic condition of farmers and improve the performance of the agriculture sector, the Ministry of Agriculture, Livestock and Irrigation (MOALI) has made it a priority to support the development of the national economy through effective implementation of a proactive portfolio far reaching policies and strategic thrusts.

The aim of these new policies and strategic thrusts, referred to as Agriculture Policy 2016, is to create the enabling environment that will promote the production of a greater and more diversified range of high value agricultural, livestock, and fishery products. A major intention of Agriculture Policy 2016 is to take advantage of the comparative advantage that Myanmar has in the production of these high value products that are in increasing demand in both domestic and international markets.

Vision
The vision of Agriculture Policy 2016 is:

An inclusive, competitive, food and nutrition secured and sustainable agricultural system contributing to the socio-economic well being of farmers and rural people and further development of the national economy.

Mission
The Mission of Agriculture Policy 2016 is:

To enable rural population and agribusiness enterprises that sustain themselves from the production and sales of diverse, safe and nutritious foods, and agricultural products to have access to innovative and sustainable production, processing, packaging, logistics, and marketing technologies to meet the growing domestic and global demands.

Goal
The followings are the goals of the Ministry.

Improve food security, food safety, and nutritional status of agricultural products of the people of Myanmar.

Enhance agricultural diversification programmes in compliance with the changing market and the prevailing agro-climatic condition of the area.

Satisfy the specified quality requirements and standard of agricultural, livestock and fishery products as dictated by the market.

Improve the dissemination of market and price information.

Prevent the incidence and spread of pests and diseases in crops and livestock by wide spread use of IPM measures of a preventative nature and through development and adoption of Good Agriculture Practices - GAP, Good Animal Husbandry Practices - GAHP and Good Aquaculture Practices –GaqP.

Support the formation of crops, livestock, and fisheries producer groups and cooperative societies that aim in sustaining the development of agriculture sector.

Develop the seed industry and highly performing pure animal breeds and fish species, and conserve native breeds and species.

Develop and enhance agro-based industries, small scale industries, and cottage industries traditional weaving and handicraft and the vocational education, and rural infrastructure that is needed to support the development of these industries.

Improve and enhance research, the extension service, and human resource programmes.

Objectives
The followings are the Objectives of the Ministry.

To ensure food and nutrition security and food safety.

To safeguard the rights of the farmers and to enhance their welfare and livelihood.

To advance and upgrade the agricultural sector by organizing farmers’ associations and cooperatives inclusive of small holders and subsistence farmers with promotion of gender role.

To attain sustainable rural development and to upgrade socio-economic conditions of rural people and farmers by improving rural infrastructure, enhancing access to markets, establishing small scale enterprises and designing participatory land use plans and management.

To seek technical assistance and mobilize the financial resources from local and international agencies in support of crops, livestock, fisheries and rural development in the agriculture sector.

To promote domestic and foreign direct investment in agriculture sector.

To promote competitiveness and value-added production of exportable agricultural commodities.

To encourage the development of agro-based industry, small scale enterprises, cottage industries, and income generation activities, including ten traditional artworks and crafts.

To improve the livelihood and income generation of the rural people through the development of agricultural cooperative enterprises and the cooperative system.

To develop effective linkages of production, trading, processing, services and consumer segments along the value chains of agricultural commodities.

To improve coordination mechanism of inter-governmental agencies, to foster public-private partnership and to establish collaboration and connectivity among all stakeholders including public agencies, academia, farmers’ associations, civil societies, and private sector with a view to enhancing rural development and reducing poverty .

Policies
Myanmar’s agricultural policy is to improve food and nutrition security and food safety for all the people and to enable smallholder farmers to increase their incomes through higher productivity and diversified production in response to market demand, as well as to enhance exports through and internationally competitive private agri-business sector.

These policies will provide consumers, producers, and businesses in the agricultural sector with a supportive legal and regulatory environment along with essential public investment, infrastructure and services as well as the mobilization of domestic and foreign investments. Specific policies to develop and utilize land, water and other natural resources in an inclusive, competitive, efficient, safe and sustainable manner can be organized into three categories: governance of land, water and other natural resources: access to inputs and technology for production: and value-added processing, marketing and export.

Policies related to agriculture sector of Myanmar are as follows:
Land Use and Management Policy.

Water Use and Management Policy.

Agricultural financing Policy.

Agricultural Mechanization and Input Sector Policy.

Cooperative Societies and Cooperative System Development Policy

Rural Infrastructure Development Policy.

Research, Development and Extension Policy.

Marketing, Value-added Processing and Export Policy.

Governance, Institutional and Human Resource Development Policy.

Environmental Conservation and Climate Change Resilience Policy.

Land Use and Management Policy

Land Use and Management Policy.
All farmers who produce crop, livestock and fish can access land in accordance with the existing Farm Land Laws, and also transfer, sell, mortgage, lend, exchange, give away, or inherit their land right including tilling and other land use.

To capture both fresh and brackish water fishery and produce fish systematically in accordance with the Laws.

To establish Special Zones for the production of agriculture, livestock and fishery products so as to improve productivity.

Arrangement will be made available for farmers’ freedom of choice to undertake any farming activities in accordance with Laws (agriculture, livestock, fishery sectors) that are economically viable, in the farm land which is granted to till and use.

Formation of groups of farmers, including crops and livestock, and fisherman, will be encouraged and supported and aimed to work within the Land Consolidation and Land Use Management system in the transformation to a larger scale farm parcels.

Assistance will be provided to those who are interested in farming activities, in particular, small holder farmers and farm labors, who are landless and have extremely limited financial resources will have the rights of tilling the land that they have cleared or developed as new farm land.

Development of new farm land will be undertaken in accordance with the National Land Use Policy.'
        ]);
        \App\News::create([
            'image'=>'/images/news/default.jpg',
            'my_name'=>'မြန်မာ့လယ်ယာကဏ္ဍအခြေအနေ',
            'my_description'=>'၁။မြန်မာနိုင်ငံလူဦးရေ၏၇၀%သည် ကျေးလက်ဒေသတွင်နေထိုင်လျက်ရှိကြပြီး အများစု၏ အဓိကစီးပွားရေးလုပ်ငန်းမှာ လယ်ယာလုပ်ငန်းဖြစ်ပါသည်။ တစ်မျိုးသားလုံး၏ ပြည်တွင်းအသားတင်ထုတ်လုပ်မှုနှင့် ဝန်ဆောင်မှုတန်ဘိုး (GDP) ၏၃၀% ခန့်ကိုလယ်ယာကဏ္ဍမှရရှိသော်လည်း တောင်သူလယ်သမားအများစု၏ လယ်ယာမြေနှင့်ပတ်သက်သော အကျိုးခံစားခွင့်အလွန်နည်းပါးလှပြီး ၎င်းတို့၏လူမှုစီးပွားဘဝသည်နိမ့်ကျလျက်ရှိပါသည်။

၂။ထို့အပြင်ရာသီဥတုပြောင်းလဲမှု၊သဘာဝဘေးနှင့် အခြားသောဘေးအန္တရာယ်များကျရောက်မှုတို့ကြောင့် တောင်သူလယ်သမားအများစု၏ လူမှုစီးပွားဘဝကိုပိုမိုထိခိုက်စေပါသည်။ အထူးသဖြင့်၂၀၀၈ခုနှစ်၊ နာဂစ်မုန်တိုင်းနောက်ပိုင်းတွင် နှစ်စဉ်လိုလိုရာသီဥတုဖောက်ပြန်လာခဲ့ရာလယ်ယာကဏ္ဍတွင် ထိခိုက်နစ်နာဆုံးရှုံးမှုများပေါ်ပေါက်ခဲ့ရပါသည်။ သစ်တောပြုန်းတီးခြင်းကိုကာကွယ်ထိန်းသိမ်းမှုနှင့် မြေဆီလွှာထိန်းသိမ်းမှုလုပ်ငန်းများကို စနစ်တကျထိရောက်စွာဆောင်ရွက်မှုအားနည်းခဲ့ခြင်းတို့ကြောင့် မြေဆီလွှာအရည်အသွေးကျဆင်းပျက်စီးလာလျက်ရှိပါသည်။ အကျိုးဆက်အနေဖြင့်တောင်သူလယ်သမားအများစုမှာ ဝင်ငွေနိမ့်ကျပြီးအကြွေးသံသရာမှ ရုန်းမထွက်နိုင်သည့်အပြင်အကြောင်းအမျိုးမျိုးဖြင့် ၎င်းတို့လုပ်ကိုင်သောလယ်ယာမြေများကို လက်လွှတ်ခဲ့ရခြင်းကြောင့် လယ်မဲ့ယာမဲ့များဘဝသို့ရောက်ခဲ့ရပြီး လူမှုစီးပွားဘဝအခြေအနေများကိုပိုမိုထိခိုက်စေခဲ့ပါသည်။ သို့ဖြစ်ပါ၍တောင်သူလယ်သမားတို့၏ လူမှုစီးပွားဘဝအခြေအနေမြင့်မားတိုးတက်လာစေရန်နှင့် လယ်ယာကဏ္ဍ ဖွံ့ဖြိုးတိုးတက်လာစေရန် ဝန်ကြီးဌာန၏မူဝါဒများနှင့်လုပ်ငန်းစဉ်များကို ခိုင်ခိုင်မာမာရေးဆွဲချမှတ်အကောင်အထည်ဖော်ခြင်းဖြင့် နိုင်ငံတော်၏စီးပွားရေးဖွံ့ဖြိုးတိုးတက်မှုကိုအထောက်အကူပြုနိုင်ရန်ကြိုးပမ်းဆောင်ရွက်ရမည်ဖြစ်ပါသည်။

၃။လယ်ယာကဏ္ဍမူဝါဒအသစ်တွင်မြန်မာနိုင်ငံ၏ လယ်ယာကဏ္ဍရှိအခွင့်အလမ်းကောင်းများကို ဖေါ်ထုတ်ပေးလိုက်ခြင်းဖြင့်လျင်မြန်စွာတိုးတက်လာနေသော ပြည်တွင်းပြည်ပဈေးကွက်ရှိစားသုံးသူများ၏ လိုအပ်ချက်များဖြစ်သောအဆင့်အတန်းမြင့်လယ်ယာနှင့်သားငါးထွက်ကုန်များကို အမျိုးအမယ်စုံလင်စွာဖြည့်ဆည်းပေးရန် ရည်ရွယ်ပါသည်။ ယင်းသို့သောမူဝါဒအရစိုက်ပျိုးမွေးမြူရေးနှင့်ထုတ်လုပ်ရေးလုပ်ငန်းများကိုပိုမိုကျယ်ပြန့်လာစေခြင်း၊ ထုတ်လုပ်မှုစွမ်းအားမြင့်မားလာခြင်းနှင့်အတူ လုပ်ကွက်ငယ်တောင်သူလယ်သမား၏ဝင်ငွေပါတိုးတက်လာစေခြင်း၊ စားသုံးသူများအတွက်ဘေးအန္တရာယ်ကင်း၍ အာဟာရပြည့်ဝသောစားနပ်ရိက္ခာများထုတ်လုပ်နိုင်ခြင်း၊လယ်ယာစီးပွားရေးလုပ်ငန်းများဖွံ့ဖြိုးလာခြင်းနှင့်အတူနိုင်ငံတကာဈေးကွက်နှင့် ချိတ်ဆက်၍ လယ်ယာထုတ်ကုန်များကို  ပြည်ပသို့ ပိုမိုတင်ပို့နိုင်ခြင်း၊ ကျေးလက်ဒေသလူမှုစီးပွားဘဝတိုးတက်လာခြင်း၊ ဖွံ့ဖြိုးတိုးတက်မှု ရေရှည်တည်တံ့ခြင်းစသော  အကျိုးကျေးဇူးများရရှိဖြစ်ပေါ်လာစေနိုင်ပါသည်။

မျှော်မှန်းချက်
၄။အားလုံးပါဝင်ပြီး နိုင်ငံတကာနှင့် ယှဉ်ပြိုင်နိုင်စွမ်းရှိသည့် ရေရှည်တည်တံ့သော လယ်ယာကုန်ထုတ်မှုစနစ် ထွန်းကားစေခြင်းဖြင့် စားနပ်ရိက္ခာဖူလုံ၍ အာဟာရပြည့်ဝစေပြီး ကျေးလက်နေပြည်သူများ၏ လူမှုစီးပွားဘဝမြင့်မားလာစေရန်နှင့် နိုင်ငံစီးပွားဖွံ့ဖြိုးတိုးတက်မှု ကို အထောက်အကူဖြစ်စေရန်။

လုပ်ငန်းတာဝန်များ
၅။ကျေးလက်နေ ပြည်သူများနှင့် လယ်ယာစီးပွားရေးလုပ်ငန်းများအား ခေတ်မီဆန်းသစ်၍ ရေရှည်တည်တံ့သောထုတ်လုပ်မှုနည်းပညာများ၊ ပြုပြင်ထုပ်ပိုး နည်းလမ်းများ၊ ထောက်ပံ့ပို့ဆောင်ရေး နည်းလမ်းများနှင့်ဈေးကွက်ဆိုင်ရာ နည်းပညာများကို အသုံးပြု၍ ကြီးထွားလာသောပြည်တွင်းပြည်ပဈေးကွက်ဝယ်လိုအားနှင့်အညီ ဘေးအန္တရာယ်ကင်းရှင်း၍အာဟာရပြည့်ဝသည့် အမယ်စုံလင်သောစားနပ်ရိက္ခာနှင့်စိုက်ပျိုးမွေးမြူရေးထုတ်ကုန်ပစ္စည်းများ တိုးတက်ထုတ်လုပ်ရာတွင် အထောက်အကူပြုနိုင်ရေး ဆောင်ရွက်ရန်။

ပန်းတိုင်
၆။ပန်းတိုင်မှာအောက်ပါအတိုင်းဖြစ်ပါသည်−

(က)စားနပ်ရိက္ခာဖူလုံမှု​၊ အာဟာရပြည့်ဝရေးနှင့်အစားအစာဘေးအန္တရာယ်ကင်းရှင်းမှုတိုးတက်စေ ရေး။

(ခ) ပြောင်းလဲလာသော ဈေးကွက်နှင့်အညီ ဒေသအလိုက် ရေမြေ၊ ရာသီဥတုတို့နှင့်ကိုက်ညီသည့် အမယ်စုံလင်သော လယ်ယာ၊ သားငါးထွက်ကုန်များ ထုတ်လုပ်မှုပုံစံ တိုးမြင့်လာစေရေး။

(ဂ) စျေးကွက်လိုအပ်ချက်နှင့်အညီလယ်ယာသားငါးထုတ်ကုန်များ၏ အရည်အသွေးနှင့် စံချိန်စံညွှန်းများပြည့်မီစေရေး။

(ဃ)လယ်ယာထွက်ကုန် ဈေးကွက်နှင့် ဈေးနှုန်းသတင်းအချက်အလက် ဖြန့်ဝေမှု လုပ်ငန်းများ ဖွံ့ဖြိုးတိုးတက်လာစေရေး။

(င)တိရစ္ဆာန်နှင့်အပင်ပိုးမွှားရောဂါဆိုင်ရာအန္တရာယ်ကင်းရှင်းရေး၊ စိုက်ပျိုးမွေးမြူထုတ်လုပ်မှု အလေ့အကျင့်ကောင်းများဖွံ့ဖြိုးတိုးတက်လာစေရေး။

(စ)လယ်ယာကဏ္ဍစဉ်ဆက်မပြတ်ဖွံ့ဖြိုးတိုးတက်စေရေး အတွက်စိုက်ပျိုးမွေးမြူထုတ်လုပ်သ ူအစုအဖွဲ့များ၊သမဝါယမအသင်းများပေါ်ထွန်းလာစေရေး။

(ဆ)မျိုးစေ့ကဏ္ဍဖွံ့ဖြိုးတိုးတက်စေရေးနှင့် သားငါးမျိုးကောင်းမျိုးသနှင့်မွေးမြူထုတ်လုပ် ဖြန့်ဖြူးမှုဖွံ့ဖြိုးတိုးတက်စေရေး၊ဒေသမျိုးရင်းများထိန်းသိမ်းရေးနှင့်မှတ်တမ်းထားရှိရေး။

(ဇ)လယ်ယာအခြေခံစက်မှုလုပ်ငန်းများ၊အသေးစားစက်မှုလက်မှုလုပ်ငန်းများ၊ ရက်ကန်း လုပ်ငန်းများ၊ ပန်း(၁၀)မျိုးအပါအဝင်ရိုးရာလက်မှုလုပ်ငန်းများ၊ အသက်မွေးဝမ်းကျောင်း လုပ်ငန်းများနှင့်ကျေးလက်အခြေခံအဆောက်အအုံများဖွံ့ဖြိုးတိုးတက်စေရေး။

(ဈ)သုတေသနနှင့်ပညာပေးလုပ်ငန်းများဖွံ့ဖြိုးတိုးတက်စေရေး၊ လူ့စွမ်းအားအရင်းအမြစ်ဖွံ့ဖြိုး တိုးတက်စေရေး။

ရည်မှန်းချက်များ
၇။ရည်မှန်းချက်များမှာ အောက်ပါအတိုင်းဖြစ်ပါသည်−

(က)စားနပ်ရိက္ခာဖူလုံရေး၊အာဟာရပြည့်ဝရေးနှင့်အစားအစာ ဘေးအန္တရာယ်ကင်းရှင်းရေး တိုးတက်လာစေရန်။

(ခ)တောင်သူလယ်သမားများ၏အခွင့်အရေး ပြည့်ဝစွာရရှိခံစားနိုင်စေရန်နှင့် အကျိုးစီးပွား မြင့်မားလာစေရန်။

(ဂ)လုပ်ကွက်ငယ်တောင်သူလယ်သမားများ၊တစ်ပိုင်တစ်နိုင် မွေးမြူသူများနှင့်ရေလုပ်သားများ ကိုအခြေခံ၍အစုအဖွဲ့များ၊သမဝါယမအသင်းများဖွဲ့စည်းပြီးအတွေးသစ်အမြင်သစ်များဖြင့်စိုက်ပျိုးမွေးမြူရေးလုပ်ငန်းများကိုခေတ်မီဖွံ့ဖြိုးတိုးတက်လာစေရန်နှင့်ယင်းလုပ်ငန်းများတွင်အမျိုးသမီးများ၏အခန်းကဏ္ဍကိုပိုမိုမြှင့်တင်ရန်။

(ဃ)လယ်ယာကုန်ထုတ်လမ်းများ၊ကျေးရွာအခြေခံအဆောက်အအုံများ၊မြေယာ အသုံးချမှု အစီအမံများရေးဆွဲဆောင်ရွက်ခြင်းနှင့်အသေးစားစက်မှုလက်မှုကုန်ထုတ်လုပ်ငန်းများတည်ထောင်ပေးခြင်းတို့ဖြင့်ကျေးလက်ဒေသများစဉ်ဆက်မပြတ်ဖွံ့ဖြိုးတိုးတက်စေပြီးတောင်သူလယ်သမားများ၏လူမှုစီးပွားဘဝတိုးတက်မြင့်မားလာစေရန်။

(င)စိုက်ပျိုးမွေးမြူရေးလုပ်ငန်းများနှင့်သမဝါယမလုပ်ငန်းများပိုမိုဖွံ့ဖြိုးတိုးတက် လာစေရန် လိုအပ်သောနည်းပညာနှင့်ငွေကြေးအရင်းအနှီးများအတွက် ပြည်တွင်းပြည်ပမှအကူအညီ၊အထောက်အပံ့နှင့်ချေးငွေများရရှိရေးကူညီဆောင်ရွက်ပေးရန်။

(စ)လယ်ယာကဏ္ဍတွင် ပြည်တွင်းပြည်ပရင်းနှီးမြှုပ်နှံမှုများ တိုးတက်လာစေရေး အားပေးဆောင်ရွက်ရန်။

(ဆ)ပြည်ပဈေးကွက်ဝင် အရည်အသွေးမြင့် လယ်ယာ၊ သားငါး ထုတ်ကုန်များတိုးမြှင့် ထုတ်လုပ်နိုင်ရေး အားပေးဆောင်ရွက်ရန်။

(ဇ)လယ်ယာအခြေခံစက်မှုလုပ်ငန်းများ၊ အသေးစား စက်မှုလက်မှုလုပ်ငန်းများ၊ ရက်ကန်းလုပ်ငန်းများ၊ ပန်း(၁၀)မျိုးအပါအဝင်ရိုးရာလက်မှုလုပ်ငန်းများနှင့် အသက်မွေးဝမ်းကျောင်းလုပ်ငန်းများ ဖွံ့ဖြိုးတိုးတက်လာစေရေး အားပေးဆောင်ရွက်ရန်။

(ဈ)သမဝါယမလုပ်ငန်းများနှင့်သမဝါယမစနစ်ပိုမိုအောင်မြင်စေရေးဆောင်ရွက်ရန်။

(ည)တန်ဖိုးကွင်းဆက်တစ်ခုလုံးဖွံ့ဖြိုးတိုးတက်ရေးအတွက်ထုတ်လုပ်မှု၊ဝန်ဆောင်မှု၊ကုန်သွယ်မှုနှင့်စားသုံးမှုကဏ္ဍများကိုထိရောက်စွာချိတ်ဆက်ဆောင်ရွက်သွားရန်။

(ဋ)ဆင်းရဲနွမ်းပါးမှုလျှော့ချရေး၊ ရေရှည်တည်တံ့သောလယ်ယာကဏ္ဍဖွံ့ဖြိုးတိုးတက်ရေးနှင့် ကျေးလက်ဒေသဖွံ့ဖြိုးရေးလုပ်ငန်းများတွင်သက်ဆိုင်ရာကဏ္ဍအသီးသီးမှအစိုးရအဖွဲ့အစည်းများအချင်းချင်းပူးပေါင်းဆောင်ရွက်ခြင်း၊အစိုးရနှင့်ပုဂ္ဂလိကအဖွဲ့အစည်းများပူးပေါင်းဆောင်ရွက်ခြင်းအပါအဝင်သက်ဆိုင်သူများအားလုံးပူးပေါင်းပါဝင်ဆောင်ရွက်သွားရန်။

မူဝါဒများ
၈။လယ်ယာကဏ္ဍမူဝါဒသည် ပြည်သူလူထုအားလုံး စားနပ်ရိက္ခာနှင့် အာဟာရဖူလုံမှုရရှိစေရေး၊ လုပ်ကွက်ငယ် တောင်သူလယ်သမားများအနေဖြင့် ထုတ်လုပ်နိုင်မှု စွမ်းအားမြင့်မားပြီး ဈေးကွက်၏ လိုအပ်ချက်နှင့်အညီ ထုတ်ကုန်ပစ္စည်း အမယ်စုံအောင် ထုတ်လုပ်ပေးနိုင်ခြင်းဖြင့် ဝင်ငွေမြင့်မားလာစေရေးနှင့် ပုဂ္ဂလိက လယ်ယာစီးပွားရေးလုပ်ငန်းကဏ္ဍ၏ နိုင်ငံတကာနှင့် ယှဉ်ပြိုင်နိုင်ပြီး ပြည်ပပို့ကုန်တိုးမြင့် တင်ပို့နိုင်ရေးတို့ကို ဖြည့်ဆည်းပေးရန်ဖြစ်ပါသည်။

၉။ မူဝါဒများသည် လယ်ယာကဏ္ဍတွင် ပါဝင်သည့် ထုတ်လုပ်သူများ၊ စီးပွားရေးလုပ်ငန်း ဆောင်ရွက်သူများ၊ စားသုံးသူများအားလုံးအတွက် အထောက်အကူဖြစ်စေမည့် ဥပဒေ မူဘောင်ဆိုင်ရာဝန်းကျင်ကောင်းများ ဖန်တီးပေးခြင်းနှင့်အတူ အခြေခံ အဆောက်အအုံများ၊ ဝန်ဆောင်မှုများနှင့် ပြည်တွင်းပြည်ပ ရင်းနှီးမြှပ်နှံမှုများပေါ်ထွန်းရရှိစေရေးဖြည့်ဆည်းပေးရန် ဖြစ်ပါသည်။ ရေ၊ မြေနှင့် သဘာဝသယံဇာတအရင်းအမြစ်များကို ဖော်ထုတ်သုံးစွဲရာတွင် အများပါဝင်မှု၊ အန္တရာယ်ကင်းရှင်းမှုရှိစေပြီး ထိရောက်စွာနှင့် ရေရှည်တည်တံ့စွာ စီမံခန့်ခွဲ အသုံးချနိုင်ရန်ဖြစ်ပါသည်။

၁၀။ မူဝါဒများမှာ အောက်ပါအတိုင်း ဖြစ်ပါသည်-

(က) မြေယာအသုံးချမှုနှင့် စီမံခန့်ခွဲမှုဆိုင်ရာ မူဝါဒ

(ခ ) ရေအရင်းအမြစ် အသုံးချမှုနှင့် စီမံခန့်ခွဲမှုဆိုင်ရာ မူဝါဒ

(ဂ )  ငွေကြေးအရင်းအနှီးဆိုင်ရာ မူဝါဒ

(ဃ) စက်မှုလယ်ယာ နှင့် သွင်းအားစုများ ဆိုင်ရာ မူဝါဒ

(င ) သမဝါယမလုပ်ငန်းများနှင့် သမဝါယမစနစ်ဖွံ့ဖြိုးရေးဆိုင်ရာ မူဝါဒ (စ) ကျေးလက်အခြေခံအဆောက်အအုံဖွံ့ဖြိုးရေးဆိုင်ရာ မူဝါဒ

(ဆ) သုတေသန၊ ဖွံ့ဖြိုးမှုနှင့် နည်းပညာ ဖြန့်ဖြူးခြင်းဆိုင်ရာ မူဝါဒ

(ဇ ) ဈေးကွက်၊ တန်ဖိုးမြှင့်ကုန်ထုတ်လုပ်ခြင်းနှင့် ပြည်ပတင်ပို့ ရောင်းချခြင်းဆိုင်ရာမူဝါဒ

(ဈ ) အုပ်ချုပ်မှု၊ အဖွဲ့အစည်းများနှင့် လူ့စွမ်းအားအရင်းအမြစ် ဖွံ့ဖြိုးတိုးတက်ရေးဆိုင်ရာ မူဝါဒ

(ည) သဘာဝပတ်ဝန်းကျင်ထိန်းသိမ်းရေးနှင့် ရာသီဥတုပြောင်းလဲမှုတုံ့ပြန်ဆောင်ရွက်ရေးဆိုင်ရာ မူဝါဒ',
            'en_name'=>'Current landscape of agriculture sector in Myanmar',
            'en_description'=>'About 70% of the population in Myanmar resides in rural area and agriculture is their main livelihood. While the agriculture sector contributes 30% of national GDP, both the benefits that are gained from farming as well as the socio-economic status of farmers are extremely low.

Furthermore, farmers’ the socioeconomic status has been adversely affected by the effects of climate change, and natural and man made disasters. In particular, the unpredictable weather changes that have taken place almost annually in the wake of Cyclone Nargis in 2008 have led to tremendous crop damage and losses in the agriculture sector. At the same time, the failure to take effective actions on existing forest and soil conservation measures have exacerbated the soil quality and fertility. As a consequence, most farmers have not been able to break out of the economic down town they have experienced from chronically low productivity, low income, and rising indebtedness. In order to uplift the socio-economic condition of farmers and improve the performance of the agriculture sector, the Ministry of Agriculture, Livestock and Irrigation (MOALI) has made it a priority to support the development of the national economy through effective implementation of a proactive portfolio far reaching policies and strategic thrusts.

The aim of these new policies and strategic thrusts, referred to as Agriculture Policy 2016, is to create the enabling environment that will promote the production of a greater and more diversified range of high value agricultural, livestock, and fishery products. A major intention of Agriculture Policy 2016 is to take advantage of the comparative advantage that Myanmar has in the production of these high value products that are in increasing demand in both domestic and international markets.

Vision
The vision of Agriculture Policy 2016 is:

An inclusive, competitive, food and nutrition secured and sustainable agricultural system contributing to the socio-economic well being of farmers and rural people and further development of the national economy.

Mission
The Mission of Agriculture Policy 2016 is:

To enable rural population and agribusiness enterprises that sustain themselves from the production and sales of diverse, safe and nutritious foods, and agricultural products to have access to innovative and sustainable production, processing, packaging, logistics, and marketing technologies to meet the growing domestic and global demands.

Goal
The followings are the goals of the Ministry.

Improve food security, food safety, and nutritional status of agricultural products of the people of Myanmar.

Enhance agricultural diversification programmes in compliance with the changing market and the prevailing agro-climatic condition of the area.

Satisfy the specified quality requirements and standard of agricultural, livestock and fishery products as dictated by the market.

Improve the dissemination of market and price information.

Prevent the incidence and spread of pests and diseases in crops and livestock by wide spread use of IPM measures of a preventative nature and through development and adoption of Good Agriculture Practices - GAP, Good Animal Husbandry Practices - GAHP and Good Aquaculture Practices –GaqP.

Support the formation of crops, livestock, and fisheries producer groups and cooperative societies that aim in sustaining the development of agriculture sector.

Develop the seed industry and highly performing pure animal breeds and fish species, and conserve native breeds and species.

Develop and enhance agro-based industries, small scale industries, and cottage industries traditional weaving and handicraft and the vocational education, and rural infrastructure that is needed to support the development of these industries.

Improve and enhance research, the extension service, and human resource programmes.

Objectives
The followings are the Objectives of the Ministry.

To ensure food and nutrition security and food safety.

To safeguard the rights of the farmers and to enhance their welfare and livelihood.

To advance and upgrade the agricultural sector by organizing farmers’ associations and cooperatives inclusive of small holders and subsistence farmers with promotion of gender role.

To attain sustainable rural development and to upgrade socio-economic conditions of rural people and farmers by improving rural infrastructure, enhancing access to markets, establishing small scale enterprises and designing participatory land use plans and management.

To seek technical assistance and mobilize the financial resources from local and international agencies in support of crops, livestock, fisheries and rural development in the agriculture sector.

To promote domestic and foreign direct investment in agriculture sector.

To promote competitiveness and value-added production of exportable agricultural commodities.

To encourage the development of agro-based industry, small scale enterprises, cottage industries, and income generation activities, including ten traditional artworks and crafts.

To improve the livelihood and income generation of the rural people through the development of agricultural cooperative enterprises and the cooperative system.

To develop effective linkages of production, trading, processing, services and consumer segments along the value chains of agricultural commodities.

To improve coordination mechanism of inter-governmental agencies, to foster public-private partnership and to establish collaboration and connectivity among all stakeholders including public agencies, academia, farmers’ associations, civil societies, and private sector with a view to enhancing rural development and reducing poverty .

Policies
Myanmar’s agricultural policy is to improve food and nutrition security and food safety for all the people and to enable smallholder farmers to increase their incomes through higher productivity and diversified production in response to market demand, as well as to enhance exports through and internationally competitive private agri-business sector.

These policies will provide consumers, producers, and businesses in the agricultural sector with a supportive legal and regulatory environment along with essential public investment, infrastructure and services as well as the mobilization of domestic and foreign investments. Specific policies to develop and utilize land, water and other natural resources in an inclusive, competitive, efficient, safe and sustainable manner can be organized into three categories: governance of land, water and other natural resources: access to inputs and technology for production: and value-added processing, marketing and export.

Policies related to agriculture sector of Myanmar are as follows:
Land Use and Management Policy.

Water Use and Management Policy.

Agricultural financing Policy.

Agricultural Mechanization and Input Sector Policy.

Cooperative Societies and Cooperative System Development Policy

Rural Infrastructure Development Policy.

Research, Development and Extension Policy.

Marketing, Value-added Processing and Export Policy.

Governance, Institutional and Human Resource Development Policy.

Environmental Conservation and Climate Change Resilience Policy.

Land Use and Management Policy

Land Use and Management Policy.
All farmers who produce crop, livestock and fish can access land in accordance with the existing Farm Land Laws, and also transfer, sell, mortgage, lend, exchange, give away, or inherit their land right including tilling and other land use.

To capture both fresh and brackish water fishery and produce fish systematically in accordance with the Laws.

To establish Special Zones for the production of agriculture, livestock and fishery products so as to improve productivity.

Arrangement will be made available for farmers’ freedom of choice to undertake any farming activities in accordance with Laws (agriculture, livestock, fishery sectors) that are economically viable, in the farm land which is granted to till and use.

Formation of groups of farmers, including crops and livestock, and fisherman, will be encouraged and supported and aimed to work within the Land Consolidation and Land Use Management system in the transformation to a larger scale farm parcels.

Assistance will be provided to those who are interested in farming activities, in particular, small holder farmers and farm labors, who are landless and have extremely limited financial resources will have the rights of tilling the land that they have cleared or developed as new farm land.

Development of new farm land will be undertaken in accordance with the National Land Use Policy.'
        ]);
        \App\News::create([
            'image'=>'/images/news/default.jpg',
            'my_name'=>'မြန်မာ့လယ်ယာကဏ္ဍအခြေအနေ',
            'my_description'=>'၁။မြန်မာနိုင်ငံလူဦးရေ၏၇၀%သည် ကျေးလက်ဒေသတွင်နေထိုင်လျက်ရှိကြပြီး အများစု၏ အဓိကစီးပွားရေးလုပ်ငန်းမှာ လယ်ယာလုပ်ငန်းဖြစ်ပါသည်။ တစ်မျိုးသားလုံး၏ ပြည်တွင်းအသားတင်ထုတ်လုပ်မှုနှင့် ဝန်ဆောင်မှုတန်ဘိုး (GDP) ၏၃၀% ခန့်ကိုလယ်ယာကဏ္ဍမှရရှိသော်လည်း တောင်သူလယ်သမားအများစု၏ လယ်ယာမြေနှင့်ပတ်သက်သော အကျိုးခံစားခွင့်အလွန်နည်းပါးလှပြီး ၎င်းတို့၏လူမှုစီးပွားဘဝသည်နိမ့်ကျလျက်ရှိပါသည်။

၂။ထို့အပြင်ရာသီဥတုပြောင်းလဲမှု၊သဘာဝဘေးနှင့် အခြားသောဘေးအန္တရာယ်များကျရောက်မှုတို့ကြောင့် တောင်သူလယ်သမားအများစု၏ လူမှုစီးပွားဘဝကိုပိုမိုထိခိုက်စေပါသည်။ အထူးသဖြင့်၂၀၀၈ခုနှစ်၊ နာဂစ်မုန်တိုင်းနောက်ပိုင်းတွင် နှစ်စဉ်လိုလိုရာသီဥတုဖောက်ပြန်လာခဲ့ရာလယ်ယာကဏ္ဍတွင် ထိခိုက်နစ်နာဆုံးရှုံးမှုများပေါ်ပေါက်ခဲ့ရပါသည်။ သစ်တောပြုန်းတီးခြင်းကိုကာကွယ်ထိန်းသိမ်းမှုနှင့် မြေဆီလွှာထိန်းသိမ်းမှုလုပ်ငန်းများကို စနစ်တကျထိရောက်စွာဆောင်ရွက်မှုအားနည်းခဲ့ခြင်းတို့ကြောင့် မြေဆီလွှာအရည်အသွေးကျဆင်းပျက်စီးလာလျက်ရှိပါသည်။ အကျိုးဆက်အနေဖြင့်တောင်သူလယ်သမားအများစုမှာ ဝင်ငွေနိမ့်ကျပြီးအကြွေးသံသရာမှ ရုန်းမထွက်နိုင်သည့်အပြင်အကြောင်းအမျိုးမျိုးဖြင့် ၎င်းတို့လုပ်ကိုင်သောလယ်ယာမြေများကို လက်လွှတ်ခဲ့ရခြင်းကြောင့် လယ်မဲ့ယာမဲ့များဘဝသို့ရောက်ခဲ့ရပြီး လူမှုစီးပွားဘဝအခြေအနေများကိုပိုမိုထိခိုက်စေခဲ့ပါသည်။ သို့ဖြစ်ပါ၍တောင်သူလယ်သမားတို့၏ လူမှုစီးပွားဘဝအခြေအနေမြင့်မားတိုးတက်လာစေရန်နှင့် လယ်ယာကဏ္ဍ ဖွံ့ဖြိုးတိုးတက်လာစေရန် ဝန်ကြီးဌာန၏မူဝါဒများနှင့်လုပ်ငန်းစဉ်များကို ခိုင်ခိုင်မာမာရေးဆွဲချမှတ်အကောင်အထည်ဖော်ခြင်းဖြင့် နိုင်ငံတော်၏စီးပွားရေးဖွံ့ဖြိုးတိုးတက်မှုကိုအထောက်အကူပြုနိုင်ရန်ကြိုးပမ်းဆောင်ရွက်ရမည်ဖြစ်ပါသည်။

၃။လယ်ယာကဏ္ဍမူဝါဒအသစ်တွင်မြန်မာနိုင်ငံ၏ လယ်ယာကဏ္ဍရှိအခွင့်အလမ်းကောင်းများကို ဖေါ်ထုတ်ပေးလိုက်ခြင်းဖြင့်လျင်မြန်စွာတိုးတက်လာနေသော ပြည်တွင်းပြည်ပဈေးကွက်ရှိစားသုံးသူများ၏ လိုအပ်ချက်များဖြစ်သောအဆင့်အတန်းမြင့်လယ်ယာနှင့်သားငါးထွက်ကုန်များကို အမျိုးအမယ်စုံလင်စွာဖြည့်ဆည်းပေးရန် ရည်ရွယ်ပါသည်။ ယင်းသို့သောမူဝါဒအရစိုက်ပျိုးမွေးမြူရေးနှင့်ထုတ်လုပ်ရေးလုပ်ငန်းများကိုပိုမိုကျယ်ပြန့်လာစေခြင်း၊ ထုတ်လုပ်မှုစွမ်းအားမြင့်မားလာခြင်းနှင့်အတူ လုပ်ကွက်ငယ်တောင်သူလယ်သမား၏ဝင်ငွေပါတိုးတက်လာစေခြင်း၊ စားသုံးသူများအတွက်ဘေးအန္တရာယ်ကင်း၍ အာဟာရပြည့်ဝသောစားနပ်ရိက္ခာများထုတ်လုပ်နိုင်ခြင်း၊လယ်ယာစီးပွားရေးလုပ်ငန်းများဖွံ့ဖြိုးလာခြင်းနှင့်အတူနိုင်ငံတကာဈေးကွက်နှင့် ချိတ်ဆက်၍ လယ်ယာထုတ်ကုန်များကို  ပြည်ပသို့ ပိုမိုတင်ပို့နိုင်ခြင်း၊ ကျေးလက်ဒေသလူမှုစီးပွားဘဝတိုးတက်လာခြင်း၊ ဖွံ့ဖြိုးတိုးတက်မှု ရေရှည်တည်တံ့ခြင်းစသော  အကျိုးကျေးဇူးများရရှိဖြစ်ပေါ်လာစေနိုင်ပါသည်။

မျှော်မှန်းချက်
၄။အားလုံးပါဝင်ပြီး နိုင်ငံတကာနှင့် ယှဉ်ပြိုင်နိုင်စွမ်းရှိသည့် ရေရှည်တည်တံ့သော လယ်ယာကုန်ထုတ်မှုစနစ် ထွန်းကားစေခြင်းဖြင့် စားနပ်ရိက္ခာဖူလုံ၍ အာဟာရပြည့်ဝစေပြီး ကျေးလက်နေပြည်သူများ၏ လူမှုစီးပွားဘဝမြင့်မားလာစေရန်နှင့် နိုင်ငံစီးပွားဖွံ့ဖြိုးတိုးတက်မှု ကို အထောက်အကူဖြစ်စေရန်။

လုပ်ငန်းတာဝန်များ
၅။ကျေးလက်နေ ပြည်သူများနှင့် လယ်ယာစီးပွားရေးလုပ်ငန်းများအား ခေတ်မီဆန်းသစ်၍ ရေရှည်တည်တံ့သောထုတ်လုပ်မှုနည်းပညာများ၊ ပြုပြင်ထုပ်ပိုး နည်းလမ်းများ၊ ထောက်ပံ့ပို့ဆောင်ရေး နည်းလမ်းများနှင့်ဈေးကွက်ဆိုင်ရာ နည်းပညာများကို အသုံးပြု၍ ကြီးထွားလာသောပြည်တွင်းပြည်ပဈေးကွက်ဝယ်လိုအားနှင့်အညီ ဘေးအန္တရာယ်ကင်းရှင်း၍အာဟာရပြည့်ဝသည့် အမယ်စုံလင်သောစားနပ်ရိက္ခာနှင့်စိုက်ပျိုးမွေးမြူရေးထုတ်ကုန်ပစ္စည်းများ တိုးတက်ထုတ်လုပ်ရာတွင် အထောက်အကူပြုနိုင်ရေး ဆောင်ရွက်ရန်။

ပန်းတိုင်
၆။ပန်းတိုင်မှာအောက်ပါအတိုင်းဖြစ်ပါသည်−

(က)စားနပ်ရိက္ခာဖူလုံမှု​၊ အာဟာရပြည့်ဝရေးနှင့်အစားအစာဘေးအန္တရာယ်ကင်းရှင်းမှုတိုးတက်စေ ရေး။

(ခ) ပြောင်းလဲလာသော ဈေးကွက်နှင့်အညီ ဒေသအလိုက် ရေမြေ၊ ရာသီဥတုတို့နှင့်ကိုက်ညီသည့် အမယ်စုံလင်သော လယ်ယာ၊ သားငါးထွက်ကုန်များ ထုတ်လုပ်မှုပုံစံ တိုးမြင့်လာစေရေး။

(ဂ) စျေးကွက်လိုအပ်ချက်နှင့်အညီလယ်ယာသားငါးထုတ်ကုန်များ၏ အရည်အသွေးနှင့် စံချိန်စံညွှန်းများပြည့်မီစေရေး။

(ဃ)လယ်ယာထွက်ကုန် ဈေးကွက်နှင့် ဈေးနှုန်းသတင်းအချက်အလက် ဖြန့်ဝေမှု လုပ်ငန်းများ ဖွံ့ဖြိုးတိုးတက်လာစေရေး။

(င)တိရစ္ဆာန်နှင့်အပင်ပိုးမွှားရောဂါဆိုင်ရာအန္တရာယ်ကင်းရှင်းရေး၊ စိုက်ပျိုးမွေးမြူထုတ်လုပ်မှု အလေ့အကျင့်ကောင်းများဖွံ့ဖြိုးတိုးတက်လာစေရေး။

(စ)လယ်ယာကဏ္ဍစဉ်ဆက်မပြတ်ဖွံ့ဖြိုးတိုးတက်စေရေး အတွက်စိုက်ပျိုးမွေးမြူထုတ်လုပ်သ ူအစုအဖွဲ့များ၊သမဝါယမအသင်းများပေါ်ထွန်းလာစေရေး။

(ဆ)မျိုးစေ့ကဏ္ဍဖွံ့ဖြိုးတိုးတက်စေရေးနှင့် သားငါးမျိုးကောင်းမျိုးသနှင့်မွေးမြူထုတ်လုပ် ဖြန့်ဖြူးမှုဖွံ့ဖြိုးတိုးတက်စေရေး၊ဒေသမျိုးရင်းများထိန်းသိမ်းရေးနှင့်မှတ်တမ်းထားရှိရေး။

(ဇ)လယ်ယာအခြေခံစက်မှုလုပ်ငန်းများ၊အသေးစားစက်မှုလက်မှုလုပ်ငန်းများ၊ ရက်ကန်း လုပ်ငန်းများ၊ ပန်း(၁၀)မျိုးအပါအဝင်ရိုးရာလက်မှုလုပ်ငန်းများ၊ အသက်မွေးဝမ်းကျောင်း လုပ်ငန်းများနှင့်ကျေးလက်အခြေခံအဆောက်အအုံများဖွံ့ဖြိုးတိုးတက်စေရေး။

(ဈ)သုတေသနနှင့်ပညာပေးလုပ်ငန်းများဖွံ့ဖြိုးတိုးတက်စေရေး၊ လူ့စွမ်းအားအရင်းအမြစ်ဖွံ့ဖြိုး တိုးတက်စေရေး။

ရည်မှန်းချက်များ
၇။ရည်မှန်းချက်များမှာ အောက်ပါအတိုင်းဖြစ်ပါသည်−

(က)စားနပ်ရိက္ခာဖူလုံရေး၊အာဟာရပြည့်ဝရေးနှင့်အစားအစာ ဘေးအန္တရာယ်ကင်းရှင်းရေး တိုးတက်လာစေရန်။

(ခ)တောင်သူလယ်သမားများ၏အခွင့်အရေး ပြည့်ဝစွာရရှိခံစားနိုင်စေရန်နှင့် အကျိုးစီးပွား မြင့်မားလာစေရန်။

(ဂ)လုပ်ကွက်ငယ်တောင်သူလယ်သမားများ၊တစ်ပိုင်တစ်နိုင် မွေးမြူသူများနှင့်ရေလုပ်သားများ ကိုအခြေခံ၍အစုအဖွဲ့များ၊သမဝါယမအသင်းများဖွဲ့စည်းပြီးအတွေးသစ်အမြင်သစ်များဖြင့်စိုက်ပျိုးမွေးမြူရေးလုပ်ငန်းများကိုခေတ်မီဖွံ့ဖြိုးတိုးတက်လာစေရန်နှင့်ယင်းလုပ်ငန်းများတွင်အမျိုးသမီးများ၏အခန်းကဏ္ဍကိုပိုမိုမြှင့်တင်ရန်။

(ဃ)လယ်ယာကုန်ထုတ်လမ်းများ၊ကျေးရွာအခြေခံအဆောက်အအုံများ၊မြေယာ အသုံးချမှု အစီအမံများရေးဆွဲဆောင်ရွက်ခြင်းနှင့်အသေးစားစက်မှုလက်မှုကုန်ထုတ်လုပ်ငန်းများတည်ထောင်ပေးခြင်းတို့ဖြင့်ကျေးလက်ဒေသများစဉ်ဆက်မပြတ်ဖွံ့ဖြိုးတိုးတက်စေပြီးတောင်သူလယ်သမားများ၏လူမှုစီးပွားဘဝတိုးတက်မြင့်မားလာစေရန်။

(င)စိုက်ပျိုးမွေးမြူရေးလုပ်ငန်းများနှင့်သမဝါယမလုပ်ငန်းများပိုမိုဖွံ့ဖြိုးတိုးတက် လာစေရန် လိုအပ်သောနည်းပညာနှင့်ငွေကြေးအရင်းအနှီးများအတွက် ပြည်တွင်းပြည်ပမှအကူအညီ၊အထောက်အပံ့နှင့်ချေးငွေများရရှိရေးကူညီဆောင်ရွက်ပေးရန်။

(စ)လယ်ယာကဏ္ဍတွင် ပြည်တွင်းပြည်ပရင်းနှီးမြှုပ်နှံမှုများ တိုးတက်လာစေရေး အားပေးဆောင်ရွက်ရန်။

(ဆ)ပြည်ပဈေးကွက်ဝင် အရည်အသွေးမြင့် လယ်ယာ၊ သားငါး ထုတ်ကုန်များတိုးမြှင့် ထုတ်လုပ်နိုင်ရေး အားပေးဆောင်ရွက်ရန်။

(ဇ)လယ်ယာအခြေခံစက်မှုလုပ်ငန်းများ၊ အသေးစား စက်မှုလက်မှုလုပ်ငန်းများ၊ ရက်ကန်းလုပ်ငန်းများ၊ ပန်း(၁၀)မျိုးအပါအဝင်ရိုးရာလက်မှုလုပ်ငန်းများနှင့် အသက်မွေးဝမ်းကျောင်းလုပ်ငန်းများ ဖွံ့ဖြိုးတိုးတက်လာစေရေး အားပေးဆောင်ရွက်ရန်။

(ဈ)သမဝါယမလုပ်ငန်းများနှင့်သမဝါယမစနစ်ပိုမိုအောင်မြင်စေရေးဆောင်ရွက်ရန်။

(ည)တန်ဖိုးကွင်းဆက်တစ်ခုလုံးဖွံ့ဖြိုးတိုးတက်ရေးအတွက်ထုတ်လုပ်မှု၊ဝန်ဆောင်မှု၊ကုန်သွယ်မှုနှင့်စားသုံးမှုကဏ္ဍများကိုထိရောက်စွာချိတ်ဆက်ဆောင်ရွက်သွားရန်။

(ဋ)ဆင်းရဲနွမ်းပါးမှုလျှော့ချရေး၊ ရေရှည်တည်တံ့သောလယ်ယာကဏ္ဍဖွံ့ဖြိုးတိုးတက်ရေးနှင့် ကျေးလက်ဒေသဖွံ့ဖြိုးရေးလုပ်ငန်းများတွင်သက်ဆိုင်ရာကဏ္ဍအသီးသီးမှအစိုးရအဖွဲ့အစည်းများအချင်းချင်းပူးပေါင်းဆောင်ရွက်ခြင်း၊အစိုးရနှင့်ပုဂ္ဂလိကအဖွဲ့အစည်းများပူးပေါင်းဆောင်ရွက်ခြင်းအပါအဝင်သက်ဆိုင်သူများအားလုံးပူးပေါင်းပါဝင်ဆောင်ရွက်သွားရန်။

မူဝါဒများ
၈။လယ်ယာကဏ္ဍမူဝါဒသည် ပြည်သူလူထုအားလုံး စားနပ်ရိက္ခာနှင့် အာဟာရဖူလုံမှုရရှိစေရေး၊ လုပ်ကွက်ငယ် တောင်သူလယ်သမားများအနေဖြင့် ထုတ်လုပ်နိုင်မှု စွမ်းအားမြင့်မားပြီး ဈေးကွက်၏ လိုအပ်ချက်နှင့်အညီ ထုတ်ကုန်ပစ္စည်း အမယ်စုံအောင် ထုတ်လုပ်ပေးနိုင်ခြင်းဖြင့် ဝင်ငွေမြင့်မားလာစေရေးနှင့် ပုဂ္ဂလိက လယ်ယာစီးပွားရေးလုပ်ငန်းကဏ္ဍ၏ နိုင်ငံတကာနှင့် ယှဉ်ပြိုင်နိုင်ပြီး ပြည်ပပို့ကုန်တိုးမြင့် တင်ပို့နိုင်ရေးတို့ကို ဖြည့်ဆည်းပေးရန်ဖြစ်ပါသည်။

၉။ မူဝါဒများသည် လယ်ယာကဏ္ဍတွင် ပါဝင်သည့် ထုတ်လုပ်သူများ၊ စီးပွားရေးလုပ်ငန်း ဆောင်ရွက်သူများ၊ စားသုံးသူများအားလုံးအတွက် အထောက်အကူဖြစ်စေမည့် ဥပဒေ မူဘောင်ဆိုင်ရာဝန်းကျင်ကောင်းများ ဖန်တီးပေးခြင်းနှင့်အတူ အခြေခံ အဆောက်အအုံများ၊ ဝန်ဆောင်မှုများနှင့် ပြည်တွင်းပြည်ပ ရင်းနှီးမြှပ်နှံမှုများပေါ်ထွန်းရရှိစေရေးဖြည့်ဆည်းပေးရန် ဖြစ်ပါသည်။ ရေ၊ မြေနှင့် သဘာဝသယံဇာတအရင်းအမြစ်များကို ဖော်ထုတ်သုံးစွဲရာတွင် အများပါဝင်မှု၊ အန္တရာယ်ကင်းရှင်းမှုရှိစေပြီး ထိရောက်စွာနှင့် ရေရှည်တည်တံ့စွာ စီမံခန့်ခွဲ အသုံးချနိုင်ရန်ဖြစ်ပါသည်။

၁၀။ မူဝါဒများမှာ အောက်ပါအတိုင်း ဖြစ်ပါသည်-

(က) မြေယာအသုံးချမှုနှင့် စီမံခန့်ခွဲမှုဆိုင်ရာ မူဝါဒ

(ခ ) ရေအရင်းအမြစ် အသုံးချမှုနှင့် စီမံခန့်ခွဲမှုဆိုင်ရာ မူဝါဒ

(ဂ )  ငွေကြေးအရင်းအနှီးဆိုင်ရာ မူဝါဒ

(ဃ) စက်မှုလယ်ယာ နှင့် သွင်းအားစုများ ဆိုင်ရာ မူဝါဒ

(င ) သမဝါယမလုပ်ငန်းများနှင့် သမဝါယမစနစ်ဖွံ့ဖြိုးရေးဆိုင်ရာ မူဝါဒ (စ) ကျေးလက်အခြေခံအဆောက်အအုံဖွံ့ဖြိုးရေးဆိုင်ရာ မူဝါဒ

(ဆ) သုတေသန၊ ဖွံ့ဖြိုးမှုနှင့် နည်းပညာ ဖြန့်ဖြူးခြင်းဆိုင်ရာ မူဝါဒ

(ဇ ) ဈေးကွက်၊ တန်ဖိုးမြှင့်ကုန်ထုတ်လုပ်ခြင်းနှင့် ပြည်ပတင်ပို့ ရောင်းချခြင်းဆိုင်ရာမူဝါဒ

(ဈ ) အုပ်ချုပ်မှု၊ အဖွဲ့အစည်းများနှင့် လူ့စွမ်းအားအရင်းအမြစ် ဖွံ့ဖြိုးတိုးတက်ရေးဆိုင်ရာ မူဝါဒ

(ည) သဘာဝပတ်ဝန်းကျင်ထိန်းသိမ်းရေးနှင့် ရာသီဥတုပြောင်းလဲမှုတုံ့ပြန်ဆောင်ရွက်ရေးဆိုင်ရာ မူဝါဒ',
            'en_name'=>'Current landscape of agriculture sector in Myanmar',
            'en_description'=>'About 70% of the population in Myanmar resides in rural area and agriculture is their main livelihood. While the agriculture sector contributes 30% of national GDP, both the benefits that are gained from farming as well as the socio-economic status of farmers are extremely low.

Furthermore, farmers’ the socioeconomic status has been adversely affected by the effects of climate change, and natural and man made disasters. In particular, the unpredictable weather changes that have taken place almost annually in the wake of Cyclone Nargis in 2008 have led to tremendous crop damage and losses in the agriculture sector. At the same time, the failure to take effective actions on existing forest and soil conservation measures have exacerbated the soil quality and fertility. As a consequence, most farmers have not been able to break out of the economic down town they have experienced from chronically low productivity, low income, and rising indebtedness. In order to uplift the socio-economic condition of farmers and improve the performance of the agriculture sector, the Ministry of Agriculture, Livestock and Irrigation (MOALI) has made it a priority to support the development of the national economy through effective implementation of a proactive portfolio far reaching policies and strategic thrusts.

The aim of these new policies and strategic thrusts, referred to as Agriculture Policy 2016, is to create the enabling environment that will promote the production of a greater and more diversified range of high value agricultural, livestock, and fishery products. A major intention of Agriculture Policy 2016 is to take advantage of the comparative advantage that Myanmar has in the production of these high value products that are in increasing demand in both domestic and international markets.

Vision
The vision of Agriculture Policy 2016 is:

An inclusive, competitive, food and nutrition secured and sustainable agricultural system contributing to the socio-economic well being of farmers and rural people and further development of the national economy.

Mission
The Mission of Agriculture Policy 2016 is:

To enable rural population and agribusiness enterprises that sustain themselves from the production and sales of diverse, safe and nutritious foods, and agricultural products to have access to innovative and sustainable production, processing, packaging, logistics, and marketing technologies to meet the growing domestic and global demands.

Goal
The followings are the goals of the Ministry.

Improve food security, food safety, and nutritional status of agricultural products of the people of Myanmar.

Enhance agricultural diversification programmes in compliance with the changing market and the prevailing agro-climatic condition of the area.

Satisfy the specified quality requirements and standard of agricultural, livestock and fishery products as dictated by the market.

Improve the dissemination of market and price information.

Prevent the incidence and spread of pests and diseases in crops and livestock by wide spread use of IPM measures of a preventative nature and through development and adoption of Good Agriculture Practices - GAP, Good Animal Husbandry Practices - GAHP and Good Aquaculture Practices –GaqP.

Support the formation of crops, livestock, and fisheries producer groups and cooperative societies that aim in sustaining the development of agriculture sector.

Develop the seed industry and highly performing pure animal breeds and fish species, and conserve native breeds and species.

Develop and enhance agro-based industries, small scale industries, and cottage industries traditional weaving and handicraft and the vocational education, and rural infrastructure that is needed to support the development of these industries.

Improve and enhance research, the extension service, and human resource programmes.

Objectives
The followings are the Objectives of the Ministry.

To ensure food and nutrition security and food safety.

To safeguard the rights of the farmers and to enhance their welfare and livelihood.

To advance and upgrade the agricultural sector by organizing farmers’ associations and cooperatives inclusive of small holders and subsistence farmers with promotion of gender role.

To attain sustainable rural development and to upgrade socio-economic conditions of rural people and farmers by improving rural infrastructure, enhancing access to markets, establishing small scale enterprises and designing participatory land use plans and management.

To seek technical assistance and mobilize the financial resources from local and international agencies in support of crops, livestock, fisheries and rural development in the agriculture sector.

To promote domestic and foreign direct investment in agriculture sector.

To promote competitiveness and value-added production of exportable agricultural commodities.

To encourage the development of agro-based industry, small scale enterprises, cottage industries, and income generation activities, including ten traditional artworks and crafts.

To improve the livelihood and income generation of the rural people through the development of agricultural cooperative enterprises and the cooperative system.

To develop effective linkages of production, trading, processing, services and consumer segments along the value chains of agricultural commodities.

To improve coordination mechanism of inter-governmental agencies, to foster public-private partnership and to establish collaboration and connectivity among all stakeholders including public agencies, academia, farmers’ associations, civil societies, and private sector with a view to enhancing rural development and reducing poverty .

Policies
Myanmar’s agricultural policy is to improve food and nutrition security and food safety for all the people and to enable smallholder farmers to increase their incomes through higher productivity and diversified production in response to market demand, as well as to enhance exports through and internationally competitive private agri-business sector.

These policies will provide consumers, producers, and businesses in the agricultural sector with a supportive legal and regulatory environment along with essential public investment, infrastructure and services as well as the mobilization of domestic and foreign investments. Specific policies to develop and utilize land, water and other natural resources in an inclusive, competitive, efficient, safe and sustainable manner can be organized into three categories: governance of land, water and other natural resources: access to inputs and technology for production: and value-added processing, marketing and export.

Policies related to agriculture sector of Myanmar are as follows:
Land Use and Management Policy.

Water Use and Management Policy.

Agricultural financing Policy.

Agricultural Mechanization and Input Sector Policy.

Cooperative Societies and Cooperative System Development Policy

Rural Infrastructure Development Policy.

Research, Development and Extension Policy.

Marketing, Value-added Processing and Export Policy.

Governance, Institutional and Human Resource Development Policy.

Environmental Conservation and Climate Change Resilience Policy.

Land Use and Management Policy

Land Use and Management Policy.
All farmers who produce crop, livestock and fish can access land in accordance with the existing Farm Land Laws, and also transfer, sell, mortgage, lend, exchange, give away, or inherit their land right including tilling and other land use.

To capture both fresh and brackish water fishery and produce fish systematically in accordance with the Laws.

To establish Special Zones for the production of agriculture, livestock and fishery products so as to improve productivity.

Arrangement will be made available for farmers’ freedom of choice to undertake any farming activities in accordance with Laws (agriculture, livestock, fishery sectors) that are economically viable, in the farm land which is granted to till and use.

Formation of groups of farmers, including crops and livestock, and fisherman, will be encouraged and supported and aimed to work within the Land Consolidation and Land Use Management system in the transformation to a larger scale farm parcels.

Assistance will be provided to those who are interested in farming activities, in particular, small holder farmers and farm labors, who are landless and have extremely limited financial resources will have the rights of tilling the land that they have cleared or developed as new farm land.

Development of new farm land will be undertaken in accordance with the National Land Use Policy.'
        ]);

    }
}
