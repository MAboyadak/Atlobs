@extends('layouts.app')

@section('content')
    <div class="container text-end p-4">
        <div class="d-flex flex-column mx-auto card col col-lg-6 mx-auto">
            <h3 class="col-12 my-3 px-4 fw-bold ">من نحن </h3>
            <p class="col-12 px-4 lh-lg"> هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا
                النص من مولد النص العربى، حيث يمكنك
                أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة
                عدد الحروف التى يولدها التطبيق. إذا كنت تحتاج
                إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن
                يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص،
                حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
            </p>
            <h4 class="text-center call  my-2"> تواصل معنا</h4>
            <div class="row text-center my-3">
                <div class="col-12 col-md-6"> <i class="fa-solid fa-phone mx-2"></i> 050 3222 2119 9221 </div>
                <div class="col-12 col-md-6 copy-number"><i class="fa-solid fa-copy  mx-3"></i> نسخ </div>
            </div>
            <div class="text-center mb-4 mt-2 social-icon">
                <a href=""> <img src="images/face.png" width="40px" height="40px" class="mx-2"></a>
                <a href=""> <img src="images/insta.jpg" width="40px" height="40px" class="mx-2"></a>
                <a href=""> <img src="images/youtyoub.png" width="40px" height="40px" class="mx-2"></a>
                <a href=""> <img src="images/snap.png" width="40px" height="40px" class="mx-2"></a>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        document.querySelector('body').classList.add('orderBg1');
    </script>
@endsection
