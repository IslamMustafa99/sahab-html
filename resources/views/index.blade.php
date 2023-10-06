@extends('app')
@section('title')
الصفحة الرئيسية
@endsection
@section('content')


    <div class="main">

        <div class="div-main-slider-image">
            <div class="main-slider" style="background-image: url(images/slider.jpg)" id="main_index_backgroung_image" data-auth-id="">
            <div class="container">
                        
       
        <div class="card-block position-absolute rounded-4 ">
            <h1 class="h3 text-dark mt-0 fw-bold text-center lh-1">كل المراحب و الله </h1>
            <p class="text-center h6 mt-0">ضيفوا البيانات مشان تتمتعوا بالعديد من الميزات</p>
             
           <div> <label class="number text-dark fs-6 mt-2">رقم  الجوال </label></div>
            <input type="nummber rounded-4 mt-5" placeholder ="ادخل رقم الجوال الخاص بك ">
            <div><label class="name text-dark fs-6 mt-2">الاسم بالكامل </label></div>
            <input type="text rounded-4 mt-2" placeholder ="ادخل اسمك بالكامل ">

            <div class="rounded-2 mt-3 text-light fw-bold fs-5  "><button type="submit "> إرسال</button></div>

        </div>
</div> 
   </div> 
</div>
</div>
    <div class="container pr-0 pl-0">
        <div class="categories">
    
        @include('items-categories')
        </div>
            <div class="container">
                <div class="row d-flex">
                    <div class="col-lg-4">
                  <div class="card mt-3">
                    <img src="{{asset('assets/images/adv1-2.jpeg')}}" alt="" class="card-img-top">
                    <div class="card-body pb-4">
                    <h2 class="card-title fs-5 fw-bold text-dark ">أكورد القصة وبناء الثقة</h2>
                    <p class="card-text fs-6 pb-3">تمتلك أكورد مئات الموردين وآلاف المنتجات التى تملأ المنصة الأن من جميع التصنيفات التى تهم المقبلين على الزواج</p>
                    </div></div></div>

                    <div class="col-lg-4">
                        <div class="card mt-3">
                          <img src="{{asset('assets/images/adv2.jpg')}}" alt="" class="card-img-top">
                          <div class="card-body">
                          <h2 class="card-title fs-5 fw-bold text-dark">  الشراكات، الطريق للراحة والتحكم</h2>
                          <p class="card-text fs-6">من خلال إضافة خيار التقسيط إلى خيارات الدفع الكاش المتوفر لدينا، يمكننا توفير تجربة تسوق أكثر شمولية، ومنح عملائنا مزيداً من الراحة والتحكم والوصول إلى خيارات ...</p>
                          </div></div></div>

                    <div class="col-lg-4">
                  <div class="card mt-3">
                    <img src="{{asset('assets/images/adv3.jpg')}}" alt="" class="card-img-top">
                    <div class="card-body">
                    <h2 class="card-title fs-5 fw-bold text-dark ">المنتجات وقوة موردينا</h2>
                    <p class="card-text fs-6">الأفضل أمام عينك، مع وجود خطة تمكن الفريق من جلب منتجات عديدة بمواصفات حقيقية، كان لابد من وجود العديد من الاعتبارات التي نأخذها ليكون أحدهم من موردينا ... </p>
                    </div></div></div>
    
                
                         
        </div>
        </div>

        <div class="section-2-adversting pb-2 mt-5 bg-light ">
            <div class="container">
                <a href="#"><img class="advertising-1 d-none" src="{{asset('assets/images/bottom-adv.jpg')}}"></a>
                <div class="d-none d-sm-block">
                    <img class="advertising-2 d-none" src="images/bottom-adv2.jpg" alt="">
                    <img class="advertising-3" src="images/bottom-adv3.jpg" alt="">
                </div>

                <div class="d-block d-sm-none">
                    <img class="advertising-2 d-none" src="{{asset('assets/images/adv2-mobile.gif')}}" alt="">
                    
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-4">
              <div class="card mt-3">
                <img src="{{asset('assets/images/art1.jpg')}}" alt="" class="card-img-top">
                <div class="card-body">
                    <h2  class="art-title fs-5 fw-bold text-dark " >كيف تخطط لحفل زفاف بأفضل التكاليف</h2>
                    <p class="card-text fs-6 ">يحلم الكثير من الشباب باقامة فرح جميل لا ينسى لكن ليس كثيرا منا يستطيع بسبب 
                        السيولة المالية فالحل 
                        الأفضل هو القاء نظرة جادة على جميع النفقات المرتبطة بيوم
                    </p>
               
                </div></div></div>

                <div class="col-lg-4">
                    <div class="card mt-3">
                      <img src="{{asset('assets/images/art2.jpg')}}" alt="" class="card-img-top">
                      <div class="card-body">
                        <h2 class="card-title fs-5 fw-bold text-dark">كيف تدفع لحفل زفافك؟</h2>
                        <p class="card-text fs-6">من المهم ان تفهم كيف سيتم تقسيم ميزانيتك .التوفير في 
                            حفل الزفاف ليس بالمهمة المستعصية اليك كيفية التوفير 
                            والدفع مقابل يوم الفرح عن طريق الانفاق بذكاء والاقتطاع طويلا على طول الطريق
                        </p>
                      
                      </div></div></div>

                <div class="col-lg-4">
              <div class="card mt-3">
                <img src="{{asset('assets/images/adv3.jpg')}}" alt="" class="card-img-top">
                <div class="card-body">
                    <h2 class="card-title fs-5 fw-bold text-dark">10 نصائح لشراء منتجات واختيار الخدمات لفرحك</h2>  
                    <p class="card-text fs-6">اذا كنت ترغب في شراء عفش لمنزلك أو اختيار صالة أو مسرح لسهرة 
                        الشباب فهناك بعض الأشياء التى يجب مراعاتها 
                        قبل الاقدام على عملية الشراء
                    </p>
                
                </div></div></div>

            
                     
    </div>
    </div>

    <div class="container">
        <div class="row d-flex">    
            <div class="col-lg-4">
                <div class="card mt-3 ">
                  <img src="{{asset('assets/images/temporary-2.png')}}" alt="" class="card-img-top">
                  <div class="card-body ">
                    <h2 class="card-title fs-5 fw-bold text-dark text-center">باقات أفراح صيف 2023</h2>

                  
                  </div></div></div>    
                  <div class="col-lg-4">
                    <div class="card mt-3">
                      <img src="{{asset('assets/images/permanent-2.png')}}" alt="" class="card-img-top">
                      <div class="card-body">
                        <h2 class="card-title fs-5 fw-bold text-dark text-center">أحدث العروض</h2>
                        
                        
    
                     </div></div></div> 
                     
                     <div class="col-lg-4">
                        <div class="card mt-3">
                          <img src="{{asset('assets/images/permanent-2.png')}}" alt="" class="card-img-top">
                          <div class="card-body">
                            <h2 class="card-title fs-5 fw-bold text-dark text-center">أحدث العروض</h2>
                            
                            
        
                         </div></div></div> 


        </div></div></div> 
        
        
           


            


</body>
    </html>

    @endsection