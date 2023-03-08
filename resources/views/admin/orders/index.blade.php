@extends('admin.layout.main')
@section('title', 'Dashboard')

@section('dash-css')
    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .dropdown-center button:active {
            background-color: white !important;
        }

        .chat .search-cat input {
            border-radius: 0;
            border: 1px solid #eee;
            outline-style: none;
            background-color: white;
            padding: 6px;
            padding-left: 45px;
        }

        .chat .search input::placeholder {
            /* Chrome, Firefox, Opera, Safari 10.1+ */
            opacity: 1;
            font-weight: 600;
            font-size: 14px;
            /* Firefox */
        }

        .filter-head {
            padding: 8px;
            background-color: blue;
            border-top-right-radius: 12px;
            border-top-left-radius: 12px;
            text-align: center;
            color: white;
        }

        .accordion-button::after {
            position: absolute;
            left: 15px;
        }
    </style>
@endsection
@section('content')
    <div class="container" dir="rtl">
        {{-- filtter card --}}
        <div class="d-flex justify-content-between py-3">
            <div class="col-12 col-lg-3 " style="max-height: 672px">
                <div class="filter-head">
                    <i class="fa-solid fa-filter mx-2"></i>
                    الفلترة
                </div>
                <div class="card border-0 rounded-0 rounded-bottom bg-white">
                    {{-- القسم الرئيسي --}}
                    <div class="accordion accordion-flush bg-white " id="accordionFlushExample">
                        <div class="accordion-item bg-white ">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed border-bottom bg-white fw-bold w-100"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1"
                                    aria-expanded="false" aria-controls="flush-collapse1">
                                    القسم الرئيسي
                                </button>
                            </h2>
                            <div id="flush-collapse1" class="accordion-collapse collapse w-100"
                                aria-labelledby="flush-heading1" data-bs-parent="#accordionFlushExample1">
                                <div class="accordion-body p-0 px-3 bg-white">
                                    @foreach ($category as $cat)
                                        <div class="form-check form-check-reverse my-2">
                                            <input class="form-check-input" type="radio" name="category"
                                                id="{{ $cat->name }}">
                                            <label class="form-check-label" for="{{ $cat->name }}">
                                                {{ $cat->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- القسم الفرعي --}}
                    <div class="accordion accordion-flush bg-white " id="accordionFlushExample">
                        <div class="accordion-item bg-white ">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed border-bottom bg-white fw-bold w-100"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2"
                                    aria-expanded="false" aria-controls="flush-collapse2">
                                    القسم الفرعي
                                </button>
                            </h2>
                            <div id="flush-collapse2" class="accordion-collapse collapse w-100"
                                aria-labelledby="flush-heading2" data-bs-parent="#accordionFlushExample2">
                                <div class="accordion-body p-0 px-3 bg-white">
                                    @foreach ($sub_category as $sub)
                                        <div class="form-check form-check-reverse my-2">
                                            <input class="form-check-input" type="radio" name="sub_category"
                                                id="{{ $sub->name }}">
                                            <label class="form-check-label" for="{{ $sub->name }}">
                                                {{ $sub->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- خدمات إضافية --}}
                    <div class="accordion accordion-flush bg-white " id="accordionFlushExample">
                        <div class="accordion-item bg-white ">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed border-bottom bg-white fw-bold w-100"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse3"
                                    aria-expanded="false" aria-controls="flush-collapse3">
                                    خدمات إضافية
                                </button>
                            </h2>
                            <div id="flush-collapse3" class="accordion-collapse collapse w-100"
                                aria-labelledby="flush-heading3" data-bs-parent="#accordionFlushExample3">
                                <div class="accordion-body p-0 px-3 bg-white">
                                    @foreach ($extra as $ext)
                                        <div class="form-check form-check-reverse my-2">
                                            <input class="form-check-input" type="radio" name="extra"
                                                id="{{ $ext->id }}">
                                            <label class="form-check-label" for="{{ $ext->id }}">
                                                {{ $ext->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dropdown-center w-100">
                <button class="custom-toggle-dwn btn border-0 rounded-0 rounded-top card bg-white fw-bold w-100"
                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="d-flex justify-content-between w-100">
                        <span>التصنيف</span>
                        <span><i class="fa-solid fa-angle-down"></i></span>
                    </div>
                </button>
                <ul class="dropdown-menu border-0 rounded-0 rounded-bottom w-100 text-end">
                    <li><a class="dropdown-item" href="#">الأحدث</a></li>
                    <li><a class="dropdown-item" href="#">الأقدم</a></li>
                </ul>
            </div>
            <div class="head form-group w-100">
                <div class="search_select_box position-relative p-0">
                    <select data-live-search="true" name="" id="country-dd" class="w-100 form-control select">
                        <option value="" disabled selected>اختر المدينة</option>
                        @foreach ($city as $cit)
                            <option value="{{ $cit->id }}">
                                {{ $cit->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            {{-- <div class="dropdown-center chat w-100 mx-3">
                <button class="custom-toggle-dwn btn border-0 rounded-0 rounded-top card bg-white fw-bold w-100"
                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="d-flex justify-content-between w-100">
                        <span>المدينة</span>
                        <span><i class="fa-solid fa-angle-down"></i></span>
                    </div>
                </button>
                <ul class="dropdown-menu border-0 rounded-0 rounded-bottom w-100 text-end">
                    <div class="search-cat w-100 position-relative">
                        <input type="search" name="search" class="p-10 w-100" placeholder="ابحث عن المدينة" />
                    </div>
                    <div class="accordion-body p-0 px-3 bg-white">
                        @foreach ($city as $cit)
                            <li><a class="dropdown-item" href="#"> {{ $cit->name }}</a></li>
                        @endforeach
                    </div>
                </ul>
            </div> --}}
            {{-- <div class="dropdown-center chat w-100">
                <button class="custom-toggle-dwn btn border-0 rounded-0 rounded-top card bg-white fw-bold w-100"
                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="d-flex justify-content-between w-100">
                        <span>الدولة</span>
                        <span><i class="fa-solid fa-angle-down"></i></span>
                    </div>
                </button>
                <ul class="dropdown-menu border-0 rounded-0 rounded-bottom w-100 text-end">
                    <div class="search-cat w-100 position-relative">
                        <input type="search" name="search" class="p-10 w-100" placeholder="ابحث عن الدولة" />
                    </div>
                    @foreach ($country as $con)
                        <li><a class="dropdown-item" href="#"> {{ $con->name }}</a></li>
                    @endforeach
                </ul>
            </div> --}}
            <div class="head form-group w-100">
                <div class="search_select_box position-relative p-0">
                    <select data-live-search="true" name="" id="country-dd" class="w-100 form-control select">
                        <option value="" disabled selected>اختر الدولة</option>
                        @foreach ($country as $con)
                            <option value="{{ $con->id }}">
                                {{ $con->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            {{-- <div class="search_select position-relative p-0 choseCity">
                <select data-live-search="true" name="" id="city-dd" class="w-100 form-control">
                    <option value="" disabled selected>اختر المدينة</option>
                    @foreach ($country as $con)
                        <option value="{{ $con->name }}">{{ $con->name }}</option>
                    @endforeach

                </select>
            </div> --}}

        </div>
        {{-- Orders card --}}
        <div class="row" dir="ltr">
            <div class="col-md-12">
                @if (session('message'))
                    <div class="alert alert-success mt-5">{{ session('message') }}</div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h3 class="d-inline">View orders</h3>
                        <a href="" class="btn btn-primary btn-sm text-white float-right">Add
                            orders</a>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Main branch</th>
                                    <th>Second branch</th>
                                    <th>Extra</th>
                                    <th>Desc</th>
                                    <th>Starter Price</th>
                                    <th>End Price</th>
                                    <th>Country</th>
                                    <th>City</th>
                                    <th>Phone</th>
                                    <th>Contact</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td class="align-middle"><img
                                                src="{{ $order->image }}random=1{{ $order->id }}" alt=""
                                                srcset="" width="40px" height="40px">
                                        </td>
                                        <td>{{ $order->name }}</td>
                                        <td>{{ $order->main_branch }}</td>
                                        <td>{{ $order->second_branch }}</td>
                                        <td>{{ $order->extra }}</td>
                                        <td>{{ $order->description }}</td>
                                        <td>{{ $order->starter_price }}</td>
                                        <td>{{ $order->end_price }}</td>
                                        <td>{{ $order->country }}</td>
                                        <td>{{ $order->city }}</td>
                                        <td>{{ $order->phone }}</td>
                                        <td>{{ $order->contact }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.content -->
@endsection

@section('dash-script')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
@endsection
