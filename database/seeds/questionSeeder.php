<?php

use Illuminate\Database\Seeder;
use App\Question;

class questionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $question =[
            'ماذا تفعل اذا حصلت على وجبة لا تروقك في المطعم؟',
            ' ذهبت الى حفلة زفاف لا تود أن تكون فيها حقا, فكيف تتصرف؟',
            ' هل يغضبك وجود صديق قريب جدا من الجنس الاخر لشريك حياتك؟',

            'اثناء قيادتك السيارة, قام احدهم بصدم سيارتك من الخلف. ماذا تفعل؟  ',
            'وصلت الى العمل, واخبروك بأنك ستبقى اليوم في العمل حتى الساعة العاشرة مساء, هل ستغضب؟  ',
            
            
        ];

        $questionenglish =[
            'doing',
            ' wedding',
            ' friend',

            'car ',
            'angry  ',
         
        ];

        $test_id =[
            1,
            1,
            1,

            2,
            2,

            2,
          
        ];

       
        for( $i=0;$i<count($question); $i++){
            $questiont =new Question();
            $questiont->question = $question[$i];
            $questiont->questionEnglish =$questionenglish[$i];
            $questiont->test_id = $test_id[$i];
           
            $questiont->save();
        }

        

    }
}
