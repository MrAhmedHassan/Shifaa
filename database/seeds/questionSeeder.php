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



            'أنت لا تفوت وجبة الفطور، وتحرص على تناولها يومياً.',
            ' أنت بالعادة تفضل تناول الوجبات الرئيسية بدلاً من الوجبات الصغيرة المقسمة على مدار اليوم.',
            ' أنت تشرب الماء فقط عندما تشعر بالعطش.',

            'أنت لا تفضل ممارسة الرياضة، بل تكتفي بالريجيم الغذائي فحسب لغرض خسارة الوزن.  ',
            'عند اتباع حمية غذائية لخسارة الوزن، فإنك تقوم بحرمان نفسك كلياً من كل الأطعمة التي تحبها.  ',


            ' كيف كان شعورك خلال الاسبوعين الماضيين, بما في ذلك اليوم؟ .',
            ' كيف تشعر حيال المستقبل؟',
            ' هل تشعر بالفشل؟',

            'إلى أي مدى تستمتع بالاشياء؟ ',
            'هل لديك شعور بالذنب؟ ',


            ' كيف تصفين محاولة وجبة الطعام مع طفلك؟',
            ' كيف يتصرف طفلك أثناء تناول طعام لا يحبه؟',
            ' كيف يتصرف طفلك عندما تدمجين له طعاماً جديداً؟',

            'هل يشاركك طفلك في التسوق وتحضير الطعام؟ ',
            'عندما تقدمين له الخضار كيف يستجيب لذلك؟  ',


            ' تناولت الطعام في المطعم, كم هي الإكرامية (البقشيش) الذي ستمنحها للنادل ؟',
            ' طلب منك صديقك منحه قرضا لحاجة ملحة – كيف تتصرف؟',
            ' للرجال, هل انت من يدفع الحساب لدى خروجك في موعد غرامي مع شريكة حياتك؟',

            'حصلت على نوع شوكولاطة فاخر ونادر, هل تأكلها لوحدك أم تقوم بمشارمة أصدقائك؟ ',
            'هل تميل الى دعوة اصدقائك الى السهرات الليلية وغيرها؟  ',

            ' زاركم ضيوف في منزلكم, فمتى تنظفون من وراءهم؟ ',
            ' ماذا يمكنك ان تجد في فتحة تصريف حوض مغسلتك؟',
            ' هل تتناول الطعام في السرير؟',

            'متى كانت المرة الأخيرة التي قمت فيها بغسل السيارة / الدراجة النارية / السكوتر أو غيرها؟ ',
            'هل ترتدي نفس الثياب مرتين دون غسلها؟  ',
            
        ];

        $questionenglish =[
            'doing', ' wedding', ' friend','car ','angry  ',
            'doing2', ' wedding2', ' friend2','car2 ','angry2  ',
            'doing3', ' wedding3', ' friend3','car3 ','angry3  ',
            'doing4', ' wedding4', ' friend4','car4 ','angry4  ',
            'doing5', ' wedding5', ' friend5','car5 ','angry5  ',
            'doing6', ' wedding6', ' friend6','car6 ','angry6  ',
         
        ];

        $test_id =[
            1,1,1,1,1,
            2,2,2,2,2,
            3,3,3,3,3,
            4,4,4,4,4,
            5,5,5,5,5,
            6,6,6,6,6,

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
