

@extends('layouts.app')

@section('content')
    <div class="containerdiv">
        <div class="container text-end p-4">
            <div class="d-flex flex-column mx-auto about ">
                <h1 class="col-12 my-3 px-4" >من نحن </h1>
                <p class="col-12 px-4"> هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا
                     النص من مولد النص العربى، حيث يمكنك 
                    أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة
                    عدد الحروف التى يولدها التطبيق. إذا كنت تحتاج 
                    إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن
                     يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص،
                     حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع. 
                </p>
                <h2 class="text-center call  my-2"> تواصل معنا</h2>
                <div class="row text-center my-3">
                    <div class="col-12 col-md-6"> <i class="fa-solid fa-phone mx-2"></i> 050 3222 2119 9221 </div>
                    <div class="col-12 col-md-6"><i class="fa-solid fa-copy  mx-3"></i> نسخ </div>
                </div>
                <div class="text-center my-3" >
                    <img src="images/face.png"  width="40px" height="40px" class="mx-2">
                    <img src="images/insta.jpg"  width="40px" height="40px" class="mx-2">
                    <img src="images/youtyoub.png"  width="40px" height="40px" class="mx-2">
                    <img src="images/snap.png"  width="40px" height="40px" class="mx-2">
                    
                </div>
                
            </div>
        </div>
        
    </div>
@endsection