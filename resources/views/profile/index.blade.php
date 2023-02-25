@extends('layouts.app')

@section('content')
    <div class="orderBg1 p-4">
        <div class="container card p-3 ps-4 ">
            <div class="position-relative d-flex flex-wrap justify-content-between align-items-center">
                <div class="py-2 btn edit-btn"><a href="{{ route('profile.edit') }}" class="col">تعديل
                        البيانات</a></div>
                <div class="col-12 col-md-6   img-container d-flex align-items-center justify-content-start">
                    <img id="avatar" src="images/user.png" class="avatar-circlye fill " style="width: 100px; hight:100px;"
                        alt="Avatar" />
                    <h6 class="me-3 contact-txt-color-1 fw-bold m-0">محمد عبدالعظيم</h6>
                </div>
                <div
                    class=" d-flex col-12 col-md-6  mt-md-3 align-items-center justify-content-center justify-content-md-between ">
                    <div class=" d-flex align-items-center  justify-content-center ">
                        <i class="fa-solid fa-location-dot icon-24"></i>
                        <h6 class="fw-bold me-3 m-0 ">مكة المكرمة ، حي شرق</h6>
                    </div>
                </div>
            </div>
            <br>
            <div class="d-flex flex-wrap align-items-center justify-content-between">
                <div class="d-flexjustify-content-start col-6 col-md-4">
                    <div class="text-end">
                        <p class="my-2 fw-bold m-0">البريد الإلكتروني</p>
                        <p class="contact-txt-color-2 m-0">user@email.com</p>
                    </div>
                </div>
                <div class="d-flex  justify-content-md-center justify-content-end col-6 col-md-4">
                    <div class="text-end">
                        <p class="my-2 fw-bold m-0">رقم الجوال</p>
                        <p class="contact-txt-color-2 m-0">050 3222 4322 111</p>
                    </div>
                </div>
                <div class="d-flex  justify-content-md-end justify-content-end  col-12 col-md-4">
                    <div class="text-end">
                        <p class="my-2 fw-bold m-0">طريقة التواصل</p>
                        <p class="contact-txt-color-2 m-0">عبر رسائل الموقع</p>
                    </div>
                </div>
            </div>
            <br>
            <div class="d-flex flex-wrap align-items-center justify-content-start">
                <h6 class="mb-3  fw-bold m-0">نبذة عن المستخدم</h6>
                <p class="text-end lh-lg">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد
                    النص
                    العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها
                    التطبيق.
                    إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو
                    مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى
                    كثير من
                    الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
                    ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن
                    يوفر
                    على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.
                    هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى
                    غير
                    مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>
            </div>
        </div>
    </div>
@endsection
