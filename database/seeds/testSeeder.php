<?php

use Illuminate\Database\Seeder;
use App\Test;
class testSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $name =[
            'اختبار العصبية',
            'اختبار الوزن',
            ' اختبار اﻻكتئاب',

            'اختبار  اﻻنتقائية',
            'اختبار  البخل',
            'اختبار  هوس النظافة',
            
        ];

        




        for( $i=0;$i<count($name); $i++){
            $test =new Test();
            $test->name = $name[$i];
           
             $test->save();
        }

        

    }
}
