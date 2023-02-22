@extends('layouts.app')
@section('content')
    <div class="myorder-body-color p-4 ">
        <div class="container">
            <h4 class="m-3 contact-txt-color-1 fw-bold m-0 text-end">طلباتي</h4>
            <div class="row card rounded-3 myorder-bg-color border-0 ">
                <div class="rounded-3 p-0">
                    <div class="d-flex flex-row-reverse myorder-header">
                        <h2 class="col myorder-active myorder-header-txt">طلبات نشطة</h2>
                        <h2 class="col myorder-header-txt">طلبات منتهية</h2>
                    </div>
                </div>
                <div style="max-width: 1200px" class="mt-3 myorder-card  p-2 mx-auto">
                    <div class="card border-0 p-3 w-100 m-0">
                        <div class="d-flex flex-row-reverse align-items-start ">
                            <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-pill"
                                style="width: 80px; height: 80px; object-fit:cover " alt="Avatar" />
                            <div class="w-100">
                                <div class="me-4 d-flex flex-row-reverse align-items-start justify-content-between w-100">
                                    <h6 class="contact-txt-color-2 fw-bold m-0 me-4">سيارة ديجيتال</h6>
                                    <div>
                                        <a href="">
                                            <h6 class="me-3 contact-txt-color-1 fw-bold m-0">إلغاء الطلب</h6>
                                        </a>
                                    </div>
                                </div>
                                <h6 class="text-end m-0 my-2 me-4 text-black-50">مكة المكرمة ، حي شرق</h6>
                                <h6 class="text-end m-0 my-2 me-4"> إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح
                                    لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        addEventListener("load", function() {
            let orderStauts = document.querySelectorAll(".myorder-header-txt");
            orderStauts.forEach(function(element) {
                element.addEventListener("click", () => {
                    element.classList.toggle("myorder-active");
                });
            });
        });
    </script>
@endsection
