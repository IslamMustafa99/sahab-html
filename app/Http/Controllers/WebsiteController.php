<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //
    public function index_page(){
        return view('index');

    }
    public function search_page(){
        return view('search');

    }

    public function app_page(){
        return view('app');

    }
    public function product_page($id){
        $name="صالة قصر السلطان ";
        $price = "670";
        $images = array('thumb' , 'o-thumb', 'thumb3' ,'thumb4' ,'thumb5' , 'thumb6' , 'thumb7');
        $description="صالة اللوتس لمناسبات السعيدة والأفراح, التفاصيل الجميلة هي من تصنع زفاف جميل و نحن في صالة اللوتس نعمل على التفاصيل المميزة.";
        $attributes=array(
            'عدد الكراسي '=>'600',
            'عدد الطاولات '=>'68',
            'تلبيسة الكراسي'=>'متوفر',
            'كوشة'=>'متوفر',
            'التكييف'=>'متوفر',
            'دي جي'=>'متوفر',
            'تصوير'=>'غير متوفر',
            'إضاءة '=>'متوفر',
            'دانس فلور'=>'متوفر',
            'سنتر بيس (مزهرية للطاولة)	'=>'حسب الطلب',
            'ورد للمحابس'=>'متوفر',
            'شعلات'=>'غير متوفر',
            


        );
        return view('product ', compact(['id' , 'name' , 'price' , 'images' ,'description', 'attributes'] ));

    }
}
