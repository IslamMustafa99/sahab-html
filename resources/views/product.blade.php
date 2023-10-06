
@extends('app')
@section('title')
صفحة المنتج 
@endsection
@section('content')

<div class="section-item">

<div class="container">
    <div class="advertising-home">
        <img src="{{asset('assets/images/adv.jpg')}}" width="100%"  alt="">

    </div>
      
<nav aria-label="breadcrumb">
     <ul class="breadcrumb" >
        <li class="breadcrumb-item "><a href="#"class="text-decoration-none text-secondary h6 fw-bold">الصفحة الرئيسية</a></li>
        
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-secondary h6 fw-bold"> صالات الأفراح</a></li>
        <li class="breadcrumb-item"><a href="#"class="text-decoration-none text-secondary h6 fw-bold"> قاعات الأفراح</a></li>
        <li class=""><a href="#"class="text-decoration-none text-secondary h6 fw-bold" > صالة اللوتس</a></li>
     </ul>
    </nav>
    
    <div class="col-md-12 pr-0 pl-0">

        <div class="row">
            <div class="col-md-9">
                <div class="items">
                    <div class="images">

                
                        <div id="demo" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                              <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                              <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                              <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                              <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                              <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
                              <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
                              <button type="button" data-bs-target="#demo" data-bs-slide-to="6"></button>
                              <button type="button" data-bs-target="#demo" data-bs-slide-to="7"></button>
                            </div>
                            <div class="carousel-inner rounded-2 bg-light  ">
                            @foreach($images as $index =>$image)
                                <div class="carousel-item @if($index==0) active @endif ">
                                    <img src='{{asset("assets/images/$image.jpg")}}' alt="صالة اللوتس" class="d-flex">
                                </div>
                               @endforeach 
                            </div>    
                            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                              <span class="carousel-control-next-icon"></span>
                            </button>

    </div>

   </div> 
    

  
<div class="item-details mt-3 text-right">   
<div class="h5">#{{$id}}</div> 
<div class ="f-flex">
    <div class="h1 text-dark fw-bold">  {{$name}} </div>
    <div class="d-flex ">
        <div class="btn-wishlist  position-absolute end-50 ps-5 ms-5 w-100 ">
         <button class="justify-content-md-end  btn btn-outline-secondary  btn btn-lg btn-white " ><span>أضف إلى السلة</span></button>

           
         
              
        </div>
        <div class="btn-cart position-absolute  start-50 pe-0 me-5 ms-2">
            <button class="wishlist justify-content-sm-end  btn btn-outline-secondary  btn btn-lg btn-white  ">
                <span class="icon-wishlist" width="21" height="21">
                    <i class="fas fa-heart "></i>
                </span>
                <span class="text-btn-wishlist ">حفظ</span>
            </button>
            
   
        </div>
        <div class="d-flex position-absolute end-50 pt-1 mt-5">
            <button class="share justify-content-md-end  btn btn-outline-secondary  btn btn-lg btn-white ">
                <span class="text-btn-share ">مشاركة الصنف</span>
            </button>
        </div>
    
    </div></div>   
    <div class="d-flex">
        <div class="col-md-9 mt-2">
        <div class="row">
                    <div class="col-md-12 pr-0 ">
                        <span>السعر: </span>
                        <span>{{$price}}₪</span>
                    </div>
                </div>
                                            </div>
    </div>

    <div class="name mt-4 ">
        <span>اسم المورد: صالة اللوتس للأفراح</span> <i class="fa fa-eye" aria-hidden="true"></i></div> 
 
<div class="description mt-5 rounded-1 border-1 ps-0 ms-0 mb-3">
    <h4 class="color-black m-4 text-dark h4 ">الوصف</h4> 
<p class=" pahra m-4">{{$description}}</p>
</div>

<div class="attribute rounded-1 border-1 w-60 ">
   <h4 class="color_black m-4 text-dark h4"> المواصفات</h4>
    <table class="table ">
        
    <thead>
       
        <tr>
            
            <th>نوع الوصف</th>
            <th>قيمة الوصف </th>
        </tr>
    </thead>
    <tbody>
         @foreach( $attributes as $key=> $attribute)
          <tr>
            <td>{{$key}} </td>
            <td> {{$attribute}}</td>
        
        </tr>
        @endforeach
       
       
</tbody>
</table></div>

<div class="additional-description rounded-1 border-1 w-60 mt-2">
    <h4 class="color_black m-4 text-dark ">تفاصيل اضافية</h4>
    <p class="sale m-4" >السعر يشمل : ضيافة الرجال قهوة وشاي بدون اشهار رجال " 100$</p>
</div>
</div>
</div></div>
<div class="col-md-3 text-center d-none d-sm-block">
    <img src="{{asset('assets/section1.png')}}" alt="">
    <img src="{{asset('assets/section2.png')}}" alt="">
    <img src="{{asset('assets/section3.png')}}" alt="">

</div>


<div class="more-items text-right  bg-light mt-2">
    <div class="container mt-3 mb-3">
        <h4 class="pb-4 text-dark">الأصناف المشابهة </h4>
        <div class="col-md-12 p-0">
            <div class="row d-flex">
                <div class="col-xs-6 col-sm-6 col-md-3"> 
                    <div class="item mb-3">
                        <div class="card d-block">
                            <div class="image position-relative  m-3 ">
                                <img src="{{asset('assets/images/footer1.jpg')}}" width="100%" alt="">


                            </div>
                        

                            <div class="card-body">
                                <h5 class="category-name text-center mt-4 rounded-5">قاعة أفراح </h5>
                                <h5 class="card-title "> قاعة روتانا</h5>
                                <h6 class="supplier-name text-center">(فندق سيتي ستار) </h6>
                                <p class="card-text text-center">
                                    <span>من شهر 1</span>
                                    <span>إلى شهر 12</span>
                                    <span>غزة ، </span>
                                    <span>مكيَف، </span>
                                    <span>400 كرسي، </span>
                                    <span>30 طاولة</span>
                                </p>
                                <div class="text-center">
                                    <span class="price text-dark fw-bold" >₪1400</span>
                                    <span class="discount-original-price">
                                        <span class="discount text-dark fw-bold" >%3.4</span>
                                        <span class="original-price text-dark fw-bold text-decoration-line-through">₪1450</del></span>
                                    </span>


                                </div>
                                 </div>

                        </div>

                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3"> 
                    <div class="item mb-3">
                        <div class="card d-block">
                            <div class="image position-relative  m-3">
                                <img src="{{asset('assets/images/footer2.jpg')}}"width="100%" alt="">


                            </div>
                        

                            <div class="card-body">
                                <h5 class="category-name text-center  rounded-5">قاعة أفراح </h5>
                                <h5 class="card-title "> قاعة هيات</h5>
                                <h6 class="supplier-name text-center">(فندق سيتي ستار) </h6>
                                <p class="card-text text-center">
                                    <span>من شهر 1</span>
                                    <span>إلى شهر 12</span>
                                    <span>غزة ، </span>
                                    <span>مكيَف، </span>
                                    <span>450 كرسي، </span>
                                    <span>40 طاولة</span>
                                </p>
                                <div class="text-center">
                                    <span class="price text-dark fw-bold" >₪1700</span>

                                </div>
                                 </div>

                        </div>

                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-3"> 
                    <div class="item mb-3">
                        <div class="card d-block">
                            <div class="image position-relative bg-light m-3">
                                <img src="{{asset('assets/images/footer3.jpg')}}"width="100%" alt="">


                            </div>
                        

                            <div class="card-body">
                                <h5 class="category-name text-center  rounded-5">قاعة أفراح </h5>
                                <h5 class="card-title "> قاعة قصر السلطان</h5>
                                <h6 class="supplier-name text-center"> (صالة قصر السلطان)</h6>
                                <p class="card-text text-center">
                                    <span>من شهر 1</span>
                                    <span>إلى شهر 8</span>
                                    <span>المغازي ، </span>
                                    <span>مكيَف، </span>
                                    <span>500 كرسي، </span>
                                    <span>50 طاولة</span>
                                </p>
                                <div class="text-center">
                                    <span class="price text-dark fw-bold" >₪1875</span>

                                    </span>


                                </div>
                                 </div>

                        </div>

                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-3"> 
                    <div class="item mb-3">
                        <div class="card d-block">
                            <div class="image position-relative bg-light m-3">
                                <img src="{{asset('assets/images/footer3.jpg')}}" width ="100%"></div>
                            <div class="card-body">
                                <h5 class="category-name text-center  rounded-5">قاعة أفراح </h5>
                                <h5 class="card-title"> قاعة قصر السلطان</h5>
                                <h6 class="supplier-name text-center"> (صالة قصر السلطان)</h6>
                                <p class="card-text text-center">
                                    <span>من شهر 12</span>
                                    <span>إلى شهر 2</span>
                                    <span>المغازي ، </span>
                                    <span>مكيَف، </span>
                                    <span>500 كرسي، </span>
                                    <span>20 طاولة</span>
                                </p>
                                <div class="text-center">
                                    <span class="price text-dark fw-bold" >₪1500</span>




                                </div>
                                 </div>

                        </div>

                    </div>
                </div>

               



            </div>

        </div>
    </div>

</div>


</div> 

</div> 
   
</div>
<div class="container mt-3 mb-3">
    <img class="w-100 rounded" src="images/bottom-adv.jpg" alt=""> 
</div>

</html>

@endsection