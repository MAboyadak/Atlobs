@extends('layouts.app')
@section('content')
   <div class="one">
      <div class=" row text-end py-4 px-3 ">
       
           
            <div class="col-12 col-md-7 row rightdiv">
               <div class="col-12 row upp">
                  <div class="col-6 col-md-4 row">
                  <img class="person col-6" src="{{asset('images/person.jpg')}}" width="70px" height="60px">
                  <p class="col-6"><br>
                     <span style="color:#160D60 ;">أحمد محمد</span>
                  </p>
                  </div>
                  <p class=" col-6 col-md-5"><br><i class="fa-solid fa-location-dot"></i> مكه المكرمه , حي شرق </p>
                  <button class=" btn col-12 col-md-2 buttun"> تواصل</button>
               </div>
               <div class="col-12 dowwn my-2" >
                  <div class="row col-12">
                     <h2  style="color:  #160D60 ;  font-weight: bold;"  class="col-12 col-md-6"> سيارة ديچيتال </h2>
                     <h3 style="color:  #160D60 ;" class="col-12 col-md-6"> الكمية : 9 سيارات</h3>
                     <p class="col-12">
                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا
                        النص من مولد النص العربى
                     </p>
                  </div>

               </div>
               <div class="col-12 py-2 contslide">
                  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                     <div class="carousel-indicators">
                       <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                       <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                       <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" ></button>
                     </div>
                     <div class="carousel-inner slidshow">
                       <div class="carousel-item active ">
                         <img src="{{asset('images/car.jpg')}}" class="d-block w-100 sliimg" alt="..." >
                       </div>
                       <div class="carousel-item">
                         <img src="{{asset('images/car.jpg')}}" class="d-block w-100 sliimg" alt="...">
                       </div>
                       <div class="carousel-item">
                         <img src="{{asset('images/car.jpg')}}" class="d-block w-100 sliimg" alt="...">
                       </div>
                     </div>
                     <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                       <span class="visually-hidden">Previous</span>
                     </button>
                     <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                       <span class="carousel-control-next-icon" aria-hidden="true"></span>
                       <span class="visually-hidden">Next</span>
                     </button>
                   </div>
                  
               </div>
            </div>
            <div class="col-12 col-md-4  row leftdiv mx-3">
               <div class=" col-12 row details">
                  <h3 class="col-12" >التفاصيل</h3>
                  <div class="row col-12">
                  <p class="col-12 col-md-6">القسم الفرعي:بيضاء اللون</p>
                  <p class="col-12 col-md-6">القسم الرئيسي: سيارة</p>
                  <p class="col-12">الخدمة الاضافية:موديل2022</p>
               </div>
               <hr>
               <div class="row col-12 comments">
                  <h5 class="col-12"> التعليقات</h5>
                  <div class="col-12 row px-0">
                     <div class=" col-6 col-md-2 mx-0">
                        <img class="person" src="{{asset('images/person.jpg')}}" width="50px" height="40px">
                     </div>
                     <div class=" col-6 col-md-5 row">
                        <h5 class="col-12">أحمد محمد</h5>
                        <p class="col-12">المنتج مناسب جدا</p>
                     </div>
                     <p class="col-12 col-md-5">
                        <br>
                           تم النشر فى 3:14 مساءا
                     </p>
                   
                  </div>
                  <div class="col-12 row px-0">
                     <div class=" col-6 col-md-2 mx-0">
                        <img class="person" src="{{asset('images/person.jpg')}}" width="50px" height="40px">
                     </div>
                     <div class=" col-6 col-md-5 row">
                        <h5 class="col-12">أحمد محمد</h5>
                        <p class="col-12">المنتج مناسب جدا</p>
                     </div>
                     <p class="col-12 col-md-5">
                        <br>
                           تم النشر فى 3:14 مساءا
                     </p>
                   
                  </div>
                  <div class="col-12 row px-0">
                     <div class=" col-6 col-md-2 mx-0">
                        <img class="person" src="{{asset('images/person.jpg')}}" width="50px" height="40px">
                     </div>
                     <div class=" col-6 col-md-5 row">
                        <h5 class="col-12">أحمد محمد</h5>
                        <p class="col-12">المنتج مناسب جدا</p>
                     </div>
                     <p class="col-12 col-md-5">
                        <br>
                           تم النشر فى 3:14 مساءا
                     </p>
                   
                  </div>
                  <div class="col-12 row px-0">
                     <div class=" col-6 col-md-2 mx-0">
                        <img class="person" src="{{asset('images/person.jpg')}}" width="50px" height="40px">
                     </div>
                     <div class=" col-6 col-md-5 row">
                        <h5 class="col-12">أحمد محمد</h5>
                        <p class="col-12">المنتج مناسب جدا</p>
                     </div>
                     <p class="col-12 col-md-5">
                        <br>
                           تم النشر فى 3:14 مساءا
                     </p>
                   
                  </div>
                  
                  
               <br>
               <br>
               <div class="col-12 py-3">
                  <img class="person col-12 col-md-1 mx-1" src="{{asset('images/person.jpg')}}" width="40px" height="30px">
                  <input class="col-6 col-md-7" placeholder="اكتب تعليقك هنا" >
                  <i class="fa-solid fa-camera col-1 "></i>
                  <button class=" btn col-12 col-md-2 buttun"> ارسال</button>
               </div>

            </div>
         </div>
         
     
    </div>
   </div>
   
@endsection
