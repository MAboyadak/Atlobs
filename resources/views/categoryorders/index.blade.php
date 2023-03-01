@extends('layouts.app')
@section('content')
    <div class="container text-center">
        <div class="text-center">
            <h1 class="heading1 fw-bold mt-5">الفئات المتاحة</h1>
        </div>
        <div class=" row row-cols-auto justify-content-start align-items-start">
            @foreach (range(9, 1) as $count)
                <div class="container col-12 col-md-6 col-lg-3 my-3">
                    <a href="">
                        <div class="category py-5 mx-3">
                            <div class="icon">
                                <i class="fa-solid fa-screwdriver-wrench fa-3x"></i>
                            </div>
                            <h4 class="myparagraph fw-bold mt-3">قطع الغيار</h4>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
