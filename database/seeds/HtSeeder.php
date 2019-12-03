<?php

use Illuminate\Database\Seeder;

class HtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //တိုင္းေဒသ
        \App\Region::create([
            'en_name'=>'Yangon',
            'my_name'=>'ရန်ကုန်',
        ]);
        \App\Region::create([
            'en_name'=>'Mandalay',
            'my_name'=>'မန္တလေး'
        ]);
        \App\Region::create([
            'en_name'=>'Shan State',
            'my_name'=>'ရှမ်းပြည်'
        ]);

        //လြွတ္ေတာ္
        App\Ht\HtProfile::create([
            'my_name'=>'ပြည်သူ့လွှတ်တော်',
            'en_name'=>'Pyi Thu Hlut Taw',
            'my_description'=>'ဖော်ပြချက်',
            'en_description'=>'description',
            'image'=>'/images/ht_profile/default.jpg'
        ]);
        App\Ht\HtProfile::create([
            'my_name'=>'အမျိုးသားလွှတ်တော်',
            'en_name'=>'National Hlut Taw',
            'my_description'=>'ဖော်ပြချက်',
            'en_description'=>'description',
            'image'=>'/images/ht_profile/default.jpg'
        ]);

        //လြွတ္ေတာ္
        App\Ht\HtCategory::create([
            'my_name'=>'ပြည်သူ့လွှတ်တော်',
            'en_name'=>'Pyi Thu Hlut Taw',
        ]);
        App\Ht\HtCategory::create([
            'my_name'=>'အမျိုးသားလွှတ်တော်',
            'en_name'=>'National Hlut Taw',
        ]);


    }
}
