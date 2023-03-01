@extends('layouts.app')

@section('content')
    <div class="container text-end p-4">
        <div class="d-flex flex-column mx-auto card col col-lg-6 mx-auto p-2">
            <h3 class="col-12 my-3 px-3 fw-bold"> الحساب البنكى </h3>
            <p class="col-12 px-3 lh-lg"> هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا
                النص من مولد النص العربى، حيث يمكنك
                أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة
                عدد الحروف التى يولدها التطبيق. إذا كنت تحتاج
                إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن
                يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص،
                حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
            </p>
            <h4 class="text-center call fw-bold  my-4"> البنك العربي السعودى </h4>
            <div class="d-flex justify-content-center">
                <p class="fw-bold">رقم IBAN</p>
                <span class="mx-3 contact-txt-color-2 fw-bold" style="direction: ltr"> 050 3222 1199 221</span>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        document.querySelector('body').classList.add('orderBg1');
    </script>
@endsection
