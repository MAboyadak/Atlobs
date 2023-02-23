@extends('layouts.app')

@section('content')
    <main class="container">
        <section class="row">
            <div class="card col-8">
                <div class="card-header">
                    <div class="float-end">
                        <span>حمودي </span>
                        <img src="/images/face.png" style="max-height: 100px; border-radius: 50%">
                    </div>
                </div>
                <div class="card-body chat-history">
                    <ul>
                        <li class="float-end">
                            <span class="mychat-text text-light text-wrap">حمودي بسلسهليستخبايسخبياسخ يىبيسى خسهعبيسى سيعباب
                                سينعب بشسشسيسبيس
                            </span>
                            <img src="/images/face.png" style="max-height: 80px; border-radius: 50%">
                        </li>
                        <li class="float-start">
                            <img src="/images/face.png" style="max-height: 80px; border-radius: 50%">
                            <span class="otherchat-text text-wrap ">حمودي بسلسهليستخبايسخبياسخ يىبيسى خسهعبيسى سيعباب
                                سينعبيسبيس
                            </span>
                        </li>
                        <li class="float-end">
                            <span class="mychat-text text-light text-wrap">حمودي بسلسهليستخبايسخبياسخ يىبيسى خسهعبيسى سيعباب
                                سينعبيسبيس
                            </span>
                            <img src="/images/face.png" style="max-height: 80px; border-radius: 50%">
                        </li>
                        <li class="float-start">
                            <img src="/images/face.png" style="max-height: 80px; border-radius: 50%">
                            <span class="otherchat-text text-wrap ">حمودي بسلسهليستخبايسخبياسخ يىبيسى خسهعبيسى سيعباب
                                سينعبيسبيس
                            </span>
                        </li>

                    </ul>
                </div>
                <div class="input-group mb-3">
                    <button class="btn btn-lg mx-3" style="background-color: #160D60;"><i style="color:white;" class="fa-solid fa-paper-plane fa-flip-horizontal"></i></button>
                    <span class="input-group-text"> <i class="fa-solid fa-microphone"></i>
                    </span>
                    <span class="input-group-text"><i class="fa-solid fa-camera "></i></span>
                    <input type="text" class="form-control" id="chatInput" placeholder="اكتب رسالتك" />

                </div>
            </div>
            <div class="col-4 card" >
                <div class="card-body">
                    <div class="float-end mb-3">
                        <span>حمودي </span>
                        <i style="color: green" class="fa-solid fa-circle"></i>
                        <img src="/images/face.png" style="max-height: 70px; border-radius: 50%">
                    </div>
                    <div class="input-group">
                        <span class="input-group-text"> <i class="fa-solid fa-search"></i>
                        </span>
                        <input type="text" class="form-control"  placeholder="ابحث عن رسالتك" />
                    </div>

                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <div class="card-body">
                                    أهلا انا فلان الفلاني
                                </div>
                            </div>
                            <div class="col-md-6 float-end">
                                    <img src="/images/face.png "style="max-height: 50px; border-radius: 50%">
                            </div>
                        </div>
                      </div>
                </div>
                </div>
{{-- end of card  --}}
        </section>
    </main>
@endsection
