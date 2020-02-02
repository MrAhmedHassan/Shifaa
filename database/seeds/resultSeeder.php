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
            'عصبى الى حد ما',
            'عصبى',


            ' تحتاج الى خسارة الوزن',
            '  ﻻ تحتاج الى خسارة الوزن',
            'وزنك مثالى',

            '    انت تشعر باﻻكتئاب',
            '   انت ﻻ تشعر بأى اكتئاب',
            ' انت كتفائل زيادة عن اللزوم',

            '    طفلك انتقائى  ',
            '   طفلك غير انتقائى',
            ' طفلك نتقائى الى حد ما',

            '  انت بخيل  ',
            '     انت كريم',
            ' تحتاج انت تكون كريما',

            '  انت مههوش نظافة   ',
            '  انت غير مهووس نظافة',
            ' اقرأ عن النظافة واتبع التعليمات',


        ];
        $fromm =[
            5,11,16,
            5,11,16,
            5,11,16,
            5,11,16,
            5,11,16,
            5,11,16,


        ];

        $too=[
            10,15,20,
            10,15,20,
            10,15,20,
            10,15,20,
            10,15,20,
            10,15,20,


        ];

        $test_id =[
            1,1,1,
            2,2,2,
            3,3,3,
            4,4,4,
            5,5,5,
            6,6,6,

        ];


        for( $i=0;$i<count($fromm); $i++){
            $result =new Result();
            $result ->result  = $result1[$i];
            $result ->fromm  = $fromm[$i];
            $result ->too =$too[$i];
            $result->test_id = $test_id[$i];

            $result->save();
        }
    }
}
