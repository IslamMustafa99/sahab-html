<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/style.css')}}">
    @yield('css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <title>@yield('title') </title>
</head>
<style>
   
</style>

<body>  
    <div class="header-line"></div>


    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
               
              <a class="navbar-brand d-flex mt-0 pt-0" href="#"><img src="{{asset('assets/images/rasel-logo.png')}}" width="140"></a>
        <div class="navbar-collapse collapse show">
    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mt-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        التصنيفات
                    </a>
                    <ul class="dropdown-menu " aria-labelledby="navbarDropdown">   
                        <li>
                            <div class="container">
                                <div class="row ">
                                    <div class="col-md-12 pr-0 d-flex ms-5 me-1 flex-wrap" category="">
                                        <div class="col-md-3 pr-0">
                                            <span class="dropdown-item-direction d-flex" data-source="direction"><i class="fa fa-angle-double-up"></i> </span>
                                            <div class="dropdown-item parent checked ">الأثاث المنزلي</div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row" children="">
                                                <div class="col-md-4">
                                                    <a class="dropdown-item child" href="#">فرشات نوم</a>
                                                </div>
                                                <div class="col-md-4">
                                                    <a class="dropdown-item child" href="#">ملحقات</a>
                                                </div>
                                                <div class="col-md-4">
                                                    <a class="dropdown-item child" href="#">فرش عربي</a>
                                                </div>
                                                <div class="col-md-4">
                                                    <a class="dropdown-item child" href="#">طاولات</a>
                                                </div>
                                                <div class="col-md-4">
                                                    <a class="dropdown-item child" href="#">أطقم كنب</a>
                                                </div>
                                                <div class="col-md-4">
                                                    <a class="dropdown-item child" href="#">أطقم نوم</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- قائمة التصنيفات الأخرى تكمل هنا -->
                                    <div class="col-md-12 pS-0" category="">
                                        <div class="col-md-3 ps-0">
                                            <span class="dropdown-item-direction d-flex" data-source="direction"><i class="fa fa-angle-double-up"></i> </span>
                                            <div class="dropdown-item parent checked">الأجهزة الكهربائية</div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row" children="">
                                                <div class="col-md-4">
                                                    <a class="dropdown-item child" href="#"> جوالات</a>
                                                </div>
                                                <div class="col-md-4">
                                                    <a class="dropdown-item child" href="#">فروش غاز </a>
                                                </div>
                                                <div class="col-md-4">
                                                    <a class="dropdown-item child" href="#"> الثلاجات</a>
                                                </div>
                                                <div class="col-md-4">
                                                    <a class="dropdown-item child" href="#">الغسالات</a>
                                                </div>
                                                <div class="col-md-4">
                                                    <a class="dropdown-item child" href="#"> شاشات التلفاز</a>
                                                </div>
                                                <div class="col-md-4">
                                                    <a class="dropdown-item child" href="#">مكيفات</a>
                                                </div>
                                                <div class="col-md-4">
                                                    <a class="dropdown-item child" href="#">أفران</a>
                                                </div>
                                                <div class="col-md-4">
                                                    <a class="dropdown-item child" href="#">خلاطات و مفارم</a>
                                                </div>
                                                <div class="col-md-4">
                                                    <a class="dropdown-item child" href="#">دفايات</a>
                                                </div>
                                                <div class="col-md-4">
                                                    <a class="dropdown-item child" href="#">فريرز</a>
                                                </div> 
                                                <div class="col-md-4">
                                                    <a class="dropdown-item child" href="#">مكواة</a>
                                                </div>
                                                <div class="col-md-4">
                                                    <a class="dropdown-item child" href="#">مكنسة كهربائية</a>
                                                </div>
                                                <div class="col-md-4">
                                                    <a class="dropdown-item child" href="#">شفاطات</a>
                                                </div>
                                                <div class="col-md-4">
                                                    <a class="dropdown-item child" href="#">كمكم</a>
                                                </div>
                                                <div class="col-md-4">
                                                    <a class="dropdown-item child" href="#">سخان المياه</a>
                                                </div>
                                                <div class="col-md-4">
                                                    <a class="dropdown-item child" href="#">ملحقات</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

        </div>
        <div class="left-header text-center d-flex  ps-2 text-muted  mt-3">
           <a class="d-none d-sm-block bg-sucess pt-2 ">
              <div class="register-as-supplier text-black bg-success rounded ps-2 align-items-center">
                <p class="text-white "><i class="fa fa-plus-circle p-2 text-white" aria-hidden="true"></i>سجل كمورد</p></div>
         </a>
            <div>

             <i class="fa fa-search" aria-hidden="true"></i>
             <a href="/search" class="text-decoration-none"> 
              <p class="ps-1 pe-1 ">البحث </p></a>
         </div>
         <div>
             <i class="fa fa-heart" aria-hidden="true"></i>

             <p class="ps-1 pe-1">المفضلة</p>
         </div>
         <div>
             <i class="fa fa-shopping-cart" aria-hidden="true"></i>
             <p class="ps-1 pe-1">سلة المشتريات </p>
         </div>
         <div>
             <i class="fa fa-user-circle" aria-hidden="true"></i>
             <p class="ps-1 pe-1">تسجيل الدخول</p>
         </div>
    </div>
 </nav>
 

</div>
<hr class="hr-top-header mt-0">

@yield('content')






<div class="footer-line mt-2"></div>



<footer class="footer mt-5 text-end d-flex ">
    <div class="container">
        <div class="row">
            <div  class="col-12 col-xl-4">
    
    <div class="call fs-3 text-dark">
        <h5 class="fs-5 text-dark fw-bold">للاتصال بنا </h5> 
        <p class="fw-bold fs-6">يسرنا تواصلك معنا من خلال أي من القنوات المتاحة.</p>

        <address class="connection fs-6 lh-sm list-unstyled d-flex p-0 flex-wrap-wrap">  
        <dl class="fw-bold mt-2">
            <dt class=" fs-6 mb-1 ls-1">أرقام التواصل</dt>
            <dd dir="ltr">1700400600</dd>

        </dl> 
        <dl class="fw-bold mt-2" >
            <dt class="fw-bold fs-6 mb-1 ls-1">البريد الإلكتروني</dt>
            <dd dir="en ls-2">info@accord.ps</dd>
        </dl>  
        <dl class="fw-bold mt-2">
            <dt class="fw-bold fs-6 mb-1 ls-1 ps-1">العنوان</dt>
            <dd dir="ltr">فلسطين، غزة، مقابل البوابة الشمالية لجامعة الأزهر، مجمع الرؤيا التجاري</dd>
        </dl>  
        <dl class="fw-bold mt-2">
            <dt class="fw-bold fs-6 m-0 le-3">ساعات العمل</dt>
            <dd dir="en ">السبت - الخميس
                9:00 صباحاً - 3:30 مساءً</dd>
        </dl>               


     </div>
            </div>

            <div  class="col-6 col-md-3 col-xl-2">
    <div class="information">
        <h5 class="fs-5 text-dark fw-bold text-left ">المعلومات</h5>
        <ol class="info list-unstyled text-nowrap fw-bold   p-0">
            <li>من نحن؟</li>
            <li>سياسة الخصوصية</li>
            <li>للاتصال بنا</li>
            <li>الأسئلة الشائعة</li>
            <li>مورد جديد</li>
        </ol>

    </div>
            </div>
            <div  class="col-6 col-md-3 col-xl-2">
    <div class="files">
        <h5 class="fs-5 text-dark fw-bold text-left">الملف الشخصي</h5>
        <ol class="file list-unstyled text-nowrap fw-bold   p-0">
            <li>التسجيل</li>
            <li>تسجيل الدخول</li>
            <li>المفضلة</li>
            <li>سلة المشتريات</li>
            <li>البحث</li>
            
        </ol>
    </div>
            </div>
            <div  class="col-12 col-md-6 col-xl-4">

    <div class="list">
        <h5 class="fs-5 text-dark fw-bold">قائمة الواتس أب</h5>
        <p class="fw-bold">انضم إلى قائمة الواتس أب الخاصة بالمنصة للبقاء على إطلاع بأحدث الخصومات والعروض الخاصة.</p>
        <form>
        <input type="number" placeholder="رقم الواتس أب ...">
        <button class="w-70 h-25 border-0  text-white ">الاشتراك</button>
    
       </form>
       <div class="icon">
        <h6 class="h6 fw-bold mt-3">وسائل التواصل الإجتماعي</h6>
        <ul class="social-links__item ">
        <li class="facebook">
            <a href="#" target="_blank">
                <i class="fab fa-facebook-f"></i>
            </a>
        </li>
        <li class="instagram">
            <a href="#" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
        </li>
       </ul>
    </div>
    </div>
            </div>
</div>
</div>   
    
    
</footer>
<div class="side_footer"> 
    <p> Powered by Accord - Accord Group for Marketing & Trade </p>
</div>
</html>