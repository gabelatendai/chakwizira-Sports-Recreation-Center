<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Settings::create([
            'name'=> "Chakwizira Sports & Recreation Centre ",
            'address'=> "Cnr 2nd Street and Robert Mugabe Ave Harare",
            'pnumber'=> "+263 784 552 768",
            'image'=>'uploads/images/logo.jpg',
            'pnumber2'=> "+263 784 552 768",
            'email'=> "infor@kaceelectrical.co.zw",
            'about'=> "Chakwizira Sports and Recreation Centre (CSRC) aims to provide a platform 
            form the development of youth by offering high 
            levels of educational and sporting programmes. ..",
            'description'=> "Chakwizira Sports and Recreation Centre (CSRC) is a
             community based sport and academic project that 
            aims to improve the socio-economic wellbeing of the youth 
            as well as develop their inter-personal skills.",

        ]);
    }
}
