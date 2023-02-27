@extends('layouts.app')

@section('content')
    <main class="container " style="direction:ltr">
        <h1 class="text-end my-3" style="color: #3A4C94">الرسائل </h1>
        <section class="  row">
            <div class="card col-8 myChatCard">
                <div class="card-header">
                    <div class="float-end">
                        <span>حمودي نجيب</span>
                        <img src="/images/naguib_dog.jpg" style="max-height: 100px; border-radius: 50%">
                    </div>
                </div>
                <div class="card-body chat-history p-4">
                    <ul id="myulForChat">
                        <li class=" d-flex justify-content-end">

                            <span class="mychat-text text-light text-wrap text-end ">حمودي بسلسهليستخبايسخبياس بثشبشس شسبشس شب شسسش شس بب   شبثبخ يىبيسى
                                خسهعبيسى سيعباب
                                سينعب بشسشسيسبيس
                            </span>
                            <img src="/images/naguib_dog.jpg" style="max-height: 60px; border-radius: 50%">

                        </li>
                        <li class="d-flex justify-content-start">

                            <img src="/images/naguib_dog.jpg" style="max-height: 60px; border-radius: 50%">
                            <span class="otherchat-text text-wrap text-end ">حمودي بسلسهليستخبايسخبياسخ يىبيسى خس  يشسيسش سشيش يثضصب مخن صىمقص لصعخى صمفعخهعبيسى سيعباب
                                سينعبيسبيس
                            </span>
                        </li>
                        <li class="d-flex justify-content-end">
                            <span class="mychat-text text-light text-wrap text-end">حمودي بسلسهليستخبايسخبياسخ يىبيس لقصلق ثصلتع لاصخعصثقل لاعخثعللار 7 رصغبقصقل ى خسهعبيسى سيعباب
                                سينعبيسبيس
                            </span>
                            <img src="/images/naguib_dog.jpg" style="max-height: 60px; border-radius: 50%">
                        </li>
                        <li class="d-flex justify-content-start">
                            <img src="/images/naguib_dog.jpg" style="max-height: 60px; border-radius: 50%">
                            <span class="otherchat-text text-wrap  text-end ">حمودي بسلسهليستخبايسخبياسخ يىبي صثتمل هعص لصلاالصثعه اصثق لعهصغرص بغ7لص بصث سى خسهعبيسى سيعباب
                                سينعبيسبيس
                            </span>
                        </li>

                    </ul>
                </div>
                <div class="input-group mb-3 px-3">
                    <button class="btn btn-lg mx-3" style="background-color: #3A4C94;"><i style="color:white;"
                            class="fa-solid fa-paper-plane fa-flip-horizontal"></i></button>
                    <span class="input-group-text"> <i class="fa-solid fa-microphone"></i>
                    </span>
                    <span class="input-group-text"><i class="fa-solid fa-camera "></i></span>
                    <input type="text" class="form-control" id="chatInput" placeholder="اكتب رسالتك" />

                </div>
            </div>
            <div class="col-4 card">
                <div class="card-body">
                    <div class="float-end my-3">
                        <span>حمودي </span>
                        <i style="color: green" class="fa-solid fa-circle"></i>
                        <img src="/images/naguib_dog.jpg" style="max-height: 60px; border-radius: 50%">
                    </div>
                    <div class="input-group">
                        <span class="input-group-text"> <i class="fa-solid fa-search"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="ابحث عن رسالتك" />
                    </div>
                    {{-- start of one chat card --}}
                    <div class="card mt-2">
                        <div class="row g-0">
                            <div class="col-md-9">
                                <div class="card-body ">
                                    <div class="card-title text-primary text-end">
                                        نجيب العسجدي
                                    </div>
                                    <div class="text-end card-text">

                                        أهلا انا فلان الفلاني
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="float-end m-3    ">
                                    <img src="/images/naguib_dog.jpg "style="max-height: 80px;border-radius: 50%;">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end of one chat card --}}
                    {{-- start of one chat card --}}
                    <div class="card mt-2">
                        <div class="row g-0">
                            <div class="col-md-9">
                                <div class="card-body ">
                                    <div class="card-title text-primary text-end">
                                        نجيب العسجدي
                                    </div>
                                    <div class="text-end card-text">

                                        أهلا انا فلان الفلاني
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="float-end m-3    ">
                                    <img src="/images/naguib_dog.jpg "style="max-height: 80px;border-radius: 50%">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end of one chat card --}}
                    {{-- start of one chat card --}}
                    <div class="card mt-2">
                        <div class="row g-0">
                            <div class="col-md-9">
                                <div class="card-body ">
                                    <div class="card-title text-primary text-end">
                                        نجيب العسجدي
                                    </div>
                                    <div class="text-end card-text">

                                        أهلا انا فلان الفلاني
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="float-end m-3    ">
                                    <img src="/images/naguib_dog.jpg "style="max-height: 80px;border-radius: 50%">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end of one chat card --}}
                    {{-- start of one chat card --}}
                    <div class="card mt-2">
                        <div class="row g-0">
                            <div class="col-md-9">
                                <div class="card-body ">
                                    <div class="card-title text-primary text-end">
                                        نجيب العسجدي
                                    </div>
                                    <div class="text-end card-text">

                                        أهلا انا فلان الفلاني
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="float-end m-3    ">
                                    <img src="/images/naguib_dog.jpg "style="max-height: 80px;border-radius: 50%">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end of one chat card --}}
                </div>
            </div>
            {{-- end of card  --}}
        </section>
    </main>
@endsection
