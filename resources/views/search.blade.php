@extends('app')
@section('title')
البحث
@endsection
@section('content')
<body>  

    <div id="main">


<div class="section-search text-right">
    <div class="search-block p-2" >
    <div class="container">
        <div class="form-group has-search">
            <span class="fa fa-search form-control-feedback position-absolute d-block mt-3 p-1"></span>
            <input type="text" class="form-control  d-block w-100 p-3 h5 rounded-1 ms-5" placeholder="البحث ..." id="search_items  " autocomplete="off">
        </div>
    </div>
    </div>

 

    <div class="container pr-0 pl-0">
    <div class="categories">

    @include('items-categories')
     <div class="advertising-search">
    <div class="container">
        <hr class="color">
        <a href="#"><img class="advertising-1 w-100 mt-3 rounded-4" src="{{asset('assets/images/adv-search1.jpg')}}" alt=""></a>
        
    </div>
     </div>



    <div class="products-block pb-5 mt-4 bg-light">
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                   <div class="col-md-9 pr-0 pl-0">
                        <div class="filters d-flex pt-3 pb-1 ">
                            <span id="text_order_search">الترتيب حسب</span>
                             <span id="filters_items_value"></span>
                            <div class="dropdown position-relative">
                            <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                            <div class="dropdown-menu text-right" aria-labelledby="dropdownMenuButton" style="width: 185px;" id="filters_items">
                                <a class="dropdown-item" id="price_asc">الأقل سعراً</a>
                                <a class="dropdown-item" id="price_desc">الأعلى سعراً</a>
                                <a class="dropdown-item" id="most_discount">الأكثر خصومات</a>
                                <a class="dropdown-item" id="item_desc">الأحدث</a>
                                        <a class="dropdown-item" id="item_asc">الأقدم</a>
                                    </div>
                                </div>
    
                                <div id="filter_price_from_to ">
                                    <div class="form-group from-to mb-1">
                                        <span class="span-filter-price-from-to d-flex">
                                            <input class="form-control" type="number" name="less_price" id="less_price" placeholder="الأقل سعراً" autocomplete="off">
                                            <span class="to m-1">إلى</span>
                                            <input class="form-control" type="number" name="large_price" id="large_price" placeholder="الأعلى سعراً" autocomplete="off">
                                        </span>
                                    </div>
                                </div>
                                <div class="number-items text-start text-md-center ms-2" id="total_number_items">4266 صنف</div>
                            </div>
                            
                                <div class="items mt-1 ">
                                    <div class="item ">
                                        <div class="card-product d-flex bg-white p-2 rounded-4 ">
                                            <div class="position-relative p-1 bg-light">
                                                <img src="{{asset('assets/images/thumb.jpg')}}" alt="" width="200" height="150">
                                               

                                            </div>
                                            <div class="details-card pe-4 mt-2">
                                               
                                                
                                                <div class=" fs-3 position-absolute mt "><i class="fa-regular fa-heart"></i></div>
                                                 <p>صالة أفراح - قاعة أفراح </p>
                                                 <div class="d-flex mt-2">
                                                    <h5 class="ms-2 text-dark">صالة اللوتس</h5>
                                                    <h6>( صالة اللوتس للأفراح )</h6>
                                                    
                                                </div>
                                                <p class="description-card text-muted h6">
                                                    من شهر 11 إلى شهر 4، غزة، مكيَف، 600 كرسي، 68 طاولة
                                                </p>
                                                <div class="price bg-light rounded-1 pr-2 pe-2 pb-1 fw-bold text-dark ">₪4605</div>
                                                 

                                            </div>


                                        </div>
                                        
                                          
                                    </div>
                                    <div class="item ">
                                        <div class="card-product d-flex  p-2 rounded-4 ">
                                            <div class="position-relative p-1 bg-light ">
                                                <img src="{{asset('assets/images/garden.jpg')}}" alt="" width="200" height="150">
                                               

                                            </div>
                                            <div class="details-card pe-4 mt-2">
                                               
                                                
                                                <div class=" fs-3 position-absolute  "><i class="fa-regular fa-heart"></i></div>
                                                 <p>الكوافيرات - عروسة</p>
                                                 <div class="d-flex mt-2">
                                                    <h5 class="ms-2 text-dark">باقة - 5 خدمات</h5>
                                                    <h6>( كوافير جاردن هاوس )</h6>
                                                    
                                                </div>
                                                <p class="description-card text-muted h6">
                                                    مكياج، تسريحة شعر، دهن جسم، مناكير، بدكير ومنكير
                                                </p>
                                                <div class="price bg-light rounded-1 pr-2 pe-2 pb-1 fw-bold text-dark ">
                                                    <span class="text-dark">₪376</span>
                                                    <span class="text-dark">%16.4</span>
                                                    <span class="text-decoration-line-through text-dark">₪450</span>
                                                </div>

                                                 

                                            </div>


                                        </div>
                                        
                                          
                                    </div>
                                    <div class="item ">
                                        <div class="card-product d-flex  p-2 rounded-4 ">
                                            <div class="position-relative p-1 bg-light ">
                                                <img src="{{asset('assets/images/ward.jpg')}}" alt="" width="200" height="150">
                                               

                                            </div>
                                            <div class="details-card pe-4 mt2">
                                               
                                                
                                                <div class=" fs-3 position-absolute  "><i class="fa-regular fa-heart"></i></div>
                                                 <p>تزيين الورود - مسكة العروس</p>
                                                 <div class="d-flex mt-2">
                                                    <h5 class="ms-2 text-dark">مسكة عروس 55</h5>
                                                    <h6>( فرح روز لمستلزمات الافراح )</h6>
                                                    
                                                </div>
                                                <p class="description-card text-muted h6">
                                                    ورد فلين ،حجم كبير ،غير مرجع
                                                </p>
                                                <div class="price bg-light rounded-1 pr-2 pe-2 pb-1 fw-bold text-dark ">
                                                    <span class="text-dark">₪75</span>
                                                    <span class="text-dark">%6.3</span>
                                                    <span class="text-decoration-line-through text-dark">₪80</span>
                                                </div>
                                                 

                                            </div>


                                        </div>
                                        
                                          
                                    </div>


                                    <div class="item ">
                                        <div class="card-product d-flex  p-2 rounded-4 ">
                                            <div class="position-relative p-1 bg-light ">
                                                <img src="{{asset('assets/images/bus.jpg')}}" alt="" width="200" height="150">
                                               

                                            </div>
                                            <div class="details-card pe-4 mt-2">
                                               
                                                
                                                <div class=" fs-3 position-absolute  "><i class="fa-regular fa-heart"></i></div>
                                                 <p>تأجير الباصات - باص 50 راكب </p>
                                                 <div class="d-flex mt-2">
                                                    <h5 class="ms-2 text-dark"> باص 50 راكب</h5>
                                                    <h6>(شركة باصات أبو علبة للنقل )</h6>
                                                    
                                                </div>
                                                <p class="description-card text-muted h6">
                                                    غزة داخل المحافظة
                                                </p>
                                                <p class="description-card text-muted h6">
                                                    مكيّف ، ذهاب ، غزة داخل المحافظة
                                                </p>
                                                <div class="price bg-light rounded-1 pr-2 pe-2 pb-1 fw-bold text-dark ">
                                                    <span class="text-dark">₪113</span>
                                                </div>
                                                 

                                            </div>



                                        </div>
                                        
                                          
                                    </div>

                                    
                                    <div class="item ">
                                        <div class="card-product d-flex  p-2 rounded-4 ">
                                            <div class="position-relative p-1 bg-light ">
                                                <img src="{{asset('assets/images/hotal.jpg')}}" alt="" width="200" height="150">
                                               

                                            </div>
                                            <div class="details-card pe-4 mt-2">
                                           
                                            
                                                <div class=" fs-3 position-absolute  "><i class="fa-regular fa-heart"></i></div>
                                                 <p> الفنادق - غرفة فندقية</p>
                                                 <div class="d-flex mt-2">
                                                    <h5 class="ms-2 text-dark"> غرفة Deluxe suite</h5>
                                                    <h6>( فندق فينيكس السياحي)</h6>
                                                    
                                                </div>
                                                <p class="description-card text-muted h6">
                                                    مزدوج، 24 ساعة، الاطلالة بحرية، وجبة إفطار
                                                </p>
                                                <div class="price bg-light rounded-1 pr-2 pe-2 pb-1 fw-bold text-dark ">
                                                    <span class="text-dark">₪570</span>
                                           
                                                </div>
                                                 
    
                                            </div>
                                        </div>





                                    </div>
                                    <div class="item ">
                                            <div class="card-product d-flex  p-2 rounded-4 ">
                                                <div class="position-relative p-1 bg-light ">
                                                    <img src="{{asset('assets/images/art.jpg')}}" alt="" width="200" height="150">
                                                   
    
                                                </div>
                                                <div class="details-card pe-4 mt-2">
                                               
                                                
                                                    <div class=" fs-3 position-absolute  "><i class="fa-regular fa-heart"></i></div>
                                                     <p> فدعوس</p>
                                                     <div class="d-flex mt-2">
                                                        <h5 class="ms-2 text-dark"> زفة - 5 أفراد</h5>
                                                        <h6>( فدعوس ثوب الفرح)</h6>
                                                        
                                                    </div>
                                                    <p class="description-card text-muted h6">
                                                        أجمل الألحان وأمتع اللحظات مع فدعوس توب الفرح
                                                    </p>
                                                    <div class="price bg-light rounded-1 pr-2 pe-2 pb-1 fw-bold text-dark ">
                                                        <span class="text-dark">₪250</span>
                                               
                                                    </div>
                                                     
        
                                                </div>
                                            </div>
    
    
    
    
    
                                    </div>
                                    <div class="item ">
                                                <div class="card-product d-flex  p-2 rounded-4 ">
                                                    <div class="position-relative p-1 bg-light ">
                                                        <img src="{{asset('assets/images/masrah.jpg')}}" alt="" width="200" height="150">
                                                       
        
                                                    </div>
                                                    <div class="details-card pe-4 mt-2">
                                                   
                                                    
                                                        <div class=" fs-3 position-absolute  "><i class="fa-regular fa-heart"></i></div>
                                                         <p> حفلة شباب</p>
                                                         <div class="d-flex mt-2">
                                                            <h5 class="ms-2 text-dark"> مسرح النجمة </h5>
                                                            <h6>(مسارح الحسام)</h6>
                                                            
                                                        </div>
                                                        <p class="description-card text-muted h6">
                                                            500 ، أبعاد المسرح 8 متر ،ممر الإضاءة ،18 متر سوفت ،8*8 متر ،
                                                        </p>
                                                        <div class="price bg-light rounded-1 pr-2 pe-2 pb-1 fw-bold text-dark ">
                                                            <span class="text-dark">₪2100</span>
                                                   
                                                        </div>
                                                         
            
                                                    </div>
                                                </div>
        
        
        
        
        
                                    </div>
                                    <div class="item ">
                                        <div class="card-product d-flex  p-2 rounded-4 ">
                                            <div class="position-relative p-1 bg-light ">
                                                <img src="{{asset('assets/images/cake.jpg')}}" alt="" width="200" height="150">
                                               

                                            </div>
                                            <div class="details-card pe-4 mt-2">
                                           
                                            
                                                <div class=" fs-3 position-absolute  "><i class="fa-regular fa-heart"></i></div>
                                                 <p>  حلويات الأفراح - كيك أفراح </p>
                                                 <div class="d-flex mt-2">
                                                    <h5 class="ms-2 text-dark"> كيكة فرح 5 طبقات </h5>
                                                    <h6>(Cake Boss)</h6>
                                                    
                                                </div>
                                                <p class="description-card text-muted h6">
                                                    كيك من 250 لـ 280 شخص، ، تقطيع، توصيل داخل غزة، صحون وشوك، عربة
                                                </p>
                                                <div class="price bg-light rounded-1 pr-2 pe-2 pb-1 fw-bold text-dark ">
                                                    <span class="text-dark">₪500</span>
                                           
                                                </div>
                                                 
    
                                            </div>
                                        </div>





                                    </div>
                                    <div class="item ">
                                        <div class="card-product d-flex  p-2 rounded-4 ">
                                            <div class="position-relative p-1 bg-light ">
                                                <img src="{{asset('assets/images/suit.jpg')}}" alt="" width="200" height="150">
                                               

                                            </div>
                                            <div class="details-card pe-4 mt-2">
                                           
                                            
                                                <div class=" fs-3 position-absolute  "><i class="fa-regular fa-heart"></i></div>
                                                 <p>بدل الزفاف - بدل فرح </p>
                                                 <div class="d-flex mt-2">
                                                    <h5 class="ms-2 text-dark"> بدلة عروس 37 </h5>
                                                    <h6>(معرض عروستي )</h6>
                                                    
                                                </div>
                                                <p class="description-card text-muted h6">
                                                    تركي , أوفوايت , كُم تُل , فستان تُل بقفير مرسم بكريستال وخرز
                                                </p>
                                                <div class="price bg-light rounded-1 pr-2 pe-2 pb-1 fw-bold text-dark ">
                                                    <span class="text-dark">₪1044</span>
                                                    <span class="text-dark">%5.1</span>
                                                    <span class="text-decoration-line-through text-dark">₪1100</span>
                                           
                                                </div>
                                                 
    
                                            </div>
                                        </div>





                                    </div>
                                    <div class="item ">
                                        <div class="card-product d-flex  p-2 rounded-4 ">
                                            <div class="position-relative p-1 bg-light ">
                                                <img src="{{asset('assets/images/suit2.jpg')}}" alt="" width="200" height="150">
                                               

                                            </div>
                                            <div class="details-card pe-4 mt-2">
                                           
                                            
                                                <div class=" fs-3 position-absolute  "><i class="fa-regular fa-heart"></i></div>
                                                 <p>بدل الزفاف - بدلة خطوبة\حنة  </p>
                                                 <div class="d-flex mt-2">
                                                    <h5 class="ms-2 text-dark"> جنى </h5>
                                                    <h6>( ميرا ستايل )</h6>
                                                    
                                                </div>
                                                <div class="price bg-light rounded-1 pr-2 pe-2 pb-1 fw-bold text-dark ">
                                                    <span class="text-dark">₪475</span>
                                                    <span class="text-dark">%5.0</span>
                                                    <span class="text-decoration-line-through text-dark">₪500</span>
                                           
                                                </div>
                                                 
    
                                            </div>
                                        </div>

                                     </div>
                                                
                            </div>
                            <div class="total_items = mb-2" >تم عرض 50 صنف من 4268 صنف</div>
                            <ul class="pagination ">
                                <li class="page-item">
                                  <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                  </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">85</a></li>
                                <li class="page-item"><a class="page-link" href="#">86</a></li>
                                <p class="fw-bold"> .... </p>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                        
                                
                                <li class="page-item">
                                  <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                  </a>
                                </li>
                              </ul>
                            </nav>



                            </div>

                            
 
                <div class="col-md-3 pt-3 pb-3 pl-0">
        <div class="advertising-items">
            <div class="items">
               

                    <div class="item d-block mt-5">
                        <div class="card-product p-2 rounded-4 ">
                            <div class=" p-1 bg-light ">
                                <img src="{{asset('assets/images/ward2.jpg')}}" class="position-relative " alt="" width="130" height="150" >
                               
                               

                            </div>
                            <div class="details-card pe-4 mt-2">
                               
                                 <p>طاولة وسط_20026</p>
                            
                                <div class="price  rounded-1 pr-2 pe-2 pb-1 fw-bold  ">
                                    <span class="text-dark">₪1636</span>
                                    <span class="text-decoration-line-through text-dark">₪1800</span>
                                </div>
                                 

                            </div>


                        </div>
                        
                          
                    </div>
                    <div class="item d-block mt-5">
                        <div class="card-product p-2 rounded-4 ">
                            <div class=" p-1 bg-light ">
                                <img src="{{asset('assets/images/ward3.jpg')}}" class="position-relative " alt="" width="130" height="150" >
                               
                               

                            </div>
                            <div class="details-card pe-4 mt-2">
                               
                                 <p> طاولة وسط - 20016</p>
     
                                <div class="price  rounded-1 pr-2 pe-2 pb-1 fw-bold  ">
                                    <span class="text-dark">₪1400</span>
                                    
                                </div>
                                 

                            </div>


                        </div>
                        
                          
                    </div>
                    <div class="item d-block mt-5">
                        <div class="card-product p-2 rounded-4 ">
                            <div class=" p-1 bg-light ">
                                <img src="{{asset('assets/images/suit3.jpg')}}" class="position-relative " alt="" width="130" height="150" >
                               
                               

                            </div>
                            <div class="details-card pe-4 mt-2">
                               
                                 <p> W-507</p>
                                 <div class="">
                                    ( سنتر اجمل العرائس )
                                 </div>
     
                                <div class="price  rounded-1 pr-2 pe-2 pb-1 fw-bold  ">
                                    <span class="text-dark">₪1400</span>
                                    <span class="text-dark text-decoration-line-through">₪800</span>
                                    
                                </div>
                                 

                            </div>


                        </div>
                        
                          
                    </div>
                    <div class="item d-block mt-5">
                        <div class="card-product p-2 rounded-4 ">
                            <div class=" p-1 bg-light ">
                                <img src="{{asset('assets/images/shabab.jpg')}}" class="position-relative " alt="" width="130" height="150" >
                               
                               

                            </div>
                            <div class="details-card pe-4 mt-2">
                               
                                 <p> فيديو سهرة الشباب</p>
                                 <div>
                                    ( استوديو غرام )
                                 </div>
                            
                                <div class="price  rounded-1 pr-2 pe-2 pb-1 fw-bold  ">
                                    <span class="text-dark">₪106</span>
                                    <span class="text-decoration-line-through text-dark">₪110</span>
                                </div>
                                 

                            </div>


                        </div>
                        
                          
                    </div>


 
                </div>
                <div class="advertising-items-small d-none d-sm-block">
                    <div class=" home-at text-center pt-1 pb-2  text-dark">
                        شركة آت هوم للأثاث العصري

                    </div>
                    <div class="items">
                        <div class="item ">
                            <div class="card-product d-flex p-2 rounded-4 ">
                                <div class="position-relative p-1 ">
                                    <img src="{{asset('assets/images/small_side1.jpg')}}" alt="" width="60" height="70">
                                   

                                </div>
                                <div class="details-card pe-4 mt-2">
                                   <div class="price  rounded-1 pr-2 pe-2 pb-1 fw-bold  ">
                                        <span class="text-dark">₪3900</span>
                                        <span class="text-decoration-line-through text-dark">₪4200</span>
                                    </div>
                                    <p> غرفة نوم اسطنبول - 2010058 </p>
                                     <div class="d-flex mt-2">
                                      <h6> ( شركة آت هوم للأثاث العصري )</h6>
                                        
                                    </div>
                                  
                                    <div class="description-side h6 text-right">
                                        <p> ساندويش + mdf، محلي، قشرة زان، 6 قطعة</p>
                                       

                                    </div>
                                    
                                     

                                </div>


                            </div>
                            
                              
                        </div>
                        <hr class="mt-1 mb-1">
                        <div class="item ">
                            <div class="card-product d-flex p-2 rounded-4 ">
                                <div class="position-relative p-1 ">
                                    <img src="{{asset('assets/images/small_side2.jpg')}}" alt="" width="60" height="70">
                                   

                                </div>
                                <div class="details-card pe-4 mt-2">
                                   <div class="price  rounded-1 pr-2 pe-2 pb-1 fw-bold  ">
                                        <span class="text-dark">₪181</span>
                                        <span class="text-decoration-line-through text-dark">₪200</span>
                                    </div>
                                    <p>  ساعة_100183 </p>
                                     <div class="d-flex mt-2">
                                      <h6> ( شركة آت هوم للأثاث العصري )</h6>
                                        
                                    </div>
                                  
                            
                                    
                                     

                                </div>


                            </div>
                            
                              
                        </div>
                        <hr class="mt-1 mb-1">
                        <div class="item ">
                            <div class="card-product d-flex p-2 rounded-4 ">
                                <div class="position-relative p-1 ">
                                    <img src="{{asset('assets/images/small_side3.jpg')}}" alt="" width="60" height="70">
                                   

                                </div>
                                <div class="details-card pe-4 mt-2">
                                   <div class="price  rounded-1 pr-2 pe-2 pb-1 fw-bold  ">
                                        <span class="text-dark">₪137</span>
                                        <span class="text-decoration-line-through text-dark">₪150</span>
                                    </div>
                                    <p> كرسي سفرة_30009</p>
                                     <div class="d-flex mt-2">
                                      <h6> ( شركة آت هوم للأثاث العصري )</h6>
                                        
                                    </div>
                                  
                            
                                    
                                     

                                </div>


                            </div>
                            
                              
                        </div>
                        <hr class="mt-1 mb-1">
                        <div class="item ">
                            <div class="card-product d-flex p-2 rounded-4 ">
                                <div class="position-relative p-1 ">
                                    <img src="{{asset('assets/images/small_side4.jpg')}}" alt="" width="60" height="70">
                                   

                                </div>
                                <div class="details-card pe-4 mt-2">
                                   <div class="price  rounded-1 pr-2 pe-2 pb-1 fw-bold  ">
                                        <span class="text-dark">₪91</span>
                                        <span class="text-decoration-line-through text-dark">₪100</span>
                                    </div>
                                    <p> كرسي سفرة_30006</p>
                                     <div class="d-flex mt-2">
                                      <h6> ( شركة آت هوم للأثاث العصري )</h6>
                                        
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
   
</div>
   





      
 </div>

</div>


<div class="container">
    <img src="{{asset('assets/images/call-center.jpg')}}" width="100%" height="300"  alt="">

</div>



</html>
@endsection