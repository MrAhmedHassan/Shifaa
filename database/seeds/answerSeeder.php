<?php

use Illuminate\Database\Seeder;
use App\Answer;

class answerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $answer =[
            'نعم, جدًا.',
            ' نعم, قليلًا.',
            ' كلا، على ما أعتقد.',

            'كلا، لن أغضب، إطلاقا. ',

            'نعم, جدًا.',
            ' نعم, قليلًا.',
            ' كلا، على ما أعتقد.',

            'كلا، لن أغضب، إطلاقا. ',

            'نعم, جدًا.',
            ' نعم, قليلًا.',
            ' كلا، على ما أعتقد.',

            'كلا، لن أغضب، إطلاقا. ',

            'نعم, جدًا.',
            ' نعم, قليلًا.',
            ' كلا، على ما أعتقد.',

            'كلا، لن أغضب، إطلاقا. ',
            'نعم, جدًا.',
            ' نعم, قليلًا.',
            ' كلا، على ما أعتقد.',

            'كلا، لن أغضب، إطلاقا. ',
          
         
        ];
        $value =[
            1,
            1,
            1,

            2,
            2,

            2,
            1,
            1,
            1,

            2,
            2,

            2,
            1,
            1,
            1,

            2,
            2,

            2,
            2,

            2,
         
        ];

        $question_id =[
            1,
            1,
            1,

            2,
            2,

            2,
            1,
            1,
            1,

            2,
            2,

            2,
            1,
            1,
            1,

            2,
            2,

            2,
            2,

            2,
          
        ];

       
        for( $i=0;$i<count($answer); $i++){
            $answer =new Answer();
            $answer ->answer  = $answer [$i];
            $answer ->value =$value[$i];
            $answer->question_id = $question_id[$i];
           
            $answer->save();
        }
    }
}
