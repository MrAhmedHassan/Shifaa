<?php

use Illuminate\Database\Seeder;
use App\Category;


class CategoryDB extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories =[
            'جلدية'
            ,
            'مخ وأعصاب'
            ,
            'رمد'
            ,
            'أنف, أذن وحنجرة'
            ,
            'أسنان'
            ,
            'عظام'
            ,
            'قلب وأوعيه دموية'
            ,
            'باطنة'
            ,
            'مسالك بولية'
            ,
            'أطفال'
            ,
            'نساء وتوليد'
            ,
            'جراحة'
            ,
          
        ];


        for($i = 0;$i<count($categories);$i++){
            $add = new Category;
            $add ->category = $categories[$i];
            $add ->save();
        }
    }
}
