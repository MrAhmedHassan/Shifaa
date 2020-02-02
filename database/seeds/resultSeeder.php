<?php

use Illuminate\Database\Seeder;
use App\Result;
class resultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $result1 =[
            'عصبى جدا',
            'عصبى  جدا جدا',
            'عصبى الى حد ما',
            'عصبى',


            ' تحتاج الى خسارة الوزن',
            '  ﻻ تحتاج الى خسارة الوزن',
            'وزنك مثالى',
            'وزنك شبه مثالى',

            '    انت تشعر باﻻكتئاب',
            '   انت ﻻ تشعر بأى اكتئاب',
            ' انت متفائل زيادة عن اللزوم',
            ' تحتاج ﻻن تقرأ عن التفاؤل',

            '    طفلك انتقائى  ',
            '   طفلك غير انتقائى',
            ' طفلك نتقائى الى حد ما',
            ' اجلس مع طفلك واشرح له اكثر ',

            '  انت بخيل  ',
            '     انت كريم',
            ' تحتاج انت تكون كريما',
            '    تحتاج للتوسط فى اﻻسراف',

            '  انت مههوش نظافة   ',
            '  انت غير مهووس نظافة',
            ' اقرأ عن النظافة واتبع التعليمات',
            '    جميل ان تكون نظيفا    ',
           
         
        ];
        $start =[
           0,5,11,16,
          0,5,11,16,
          0,5,11,16,
          0,5,11,16,
          0,5,11,16,
          0,5,11,16,

         
        ];

        $end=[
            4,10,15,20,
            4,10,15,20,
            4,10,15,20,
            4,10,15,20,
            4,10,15,20,
            4,10,15,20,

          
        ];

        $test_id =[
            1,1,1,1,
            2,2,2,2,
            3,3,3,3,
            4,4,4,4,
            5,5,5,5,
            6,6,6,6,
          
        ];

       
        for( $i=0;$i<count($start); $i++){
            $result =new Result();
            $result ->result  = $result1[$i];
            $result ->start  = $start[$i];
            $result ->end =$end[$i];
            $result->test_id = $test_id[$i];
           
            $result->save();
        }
    }
}
