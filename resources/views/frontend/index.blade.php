@extends('layouts.app')

@section('content')

<!--button start-->
<div class="container pt-3">
    <div class="row d-flex justify-content-between">
        <div class="col-lg-5"> 
            <div class="d-flex flex-column">
                <div class="d-flex align-items-center pt-3 ">
                    <a href="{{ url('/')}}"> 
                        <div class="btn btn-primary fw-bold text-white" onmousedown="changeColor(this)" onmouseup="changeColor(this)">
                            <i class='bx bxs-plane-alt mx-1'></i>Flights
                        </div>
                    </a>
                    <a href="{{ url('/holidays')}}">
                        <div class="btn btn-primary fw-bold text-white custom-btn mx-1" onmousedown="changeColor(this)" onmouseup="changeColor(this)">
                            <i class='bx bx-hotel mx-1' ></i>Holidays
                        </div>
                    </a>
                    <a href="{{ url('/hotels')}}">
                        <div class="btn btn-primary fw-bold text-white custom-btn " onmousedown="changeColor(this)" onmouseup="changeColor(this)">
                            <i class='bx bxs-car mx-1' ></i>Hotels
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--button end-->

<!--Flight Start-->
<!--LG/MD-->
<div class="flightimg d-md-flex d-lg-flex flex-column">
    <h1 class="text-white fw-bold" style="font-size: 55px; padding: 7% 0 2% 16%;">Start Journey with 24x7booking</h1>
    <div class="container-fluid" style="padding-bottom: 22%;">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8 bg-warning p-4 rounded-1">
                <div class="d-flex flex-column">
                    <!--RADIO BUTTON START--> 
                    <div class="d-flex align-items-center text-white fw-bold">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Round Trip
                            </label>
                        </div>
                        <div class="form-check mx-4">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                One-Way
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Multi-City
                            </label>
                        </div>
                    </div>
                    <!--RADIO BUTTON END-->

                    <!--INPUT FIELD-->
                    <div class="d-flex flex-wrap align-items-center py-2">
                        <!--from-->
                        <div class="flex-grow-1">
                            <label for="exampleDataList" class="form-label mb-0 text-white fs-8 fw-bold">From</label>
                            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Country, city or airport">
                            <datalist id="datalistOptions">
                                <option value="San Francisco">
                                <option value="New York">
                                <option value="Seattle">
                                <option value="Los Angeles">
                                <option value="Chicago">
                            </datalist>
                        </div>
                        <!--from end-->

                        <!--to-->
                        <div class="flex-grow-1">
                            <label for="exampleDataList" class="form-label mb-0 text-white fs-8 fw-bold">To</label>
                            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Country, city or airport">
                            <datalist id="datalistOptions">
                                <option value="San Francisco">
                                <option value="New York">
                                <option value="Seattle">
                                <option value="Los Angeles">
                                <option value="Chicago">
                            </datalist>
                        </div>
                        <!--to end-->

                        <!--Departure -->
                        <div class="flex-grow-1">
                            <label for="" class="form-label mb-0 text-white fw-bold">Departure</label>
                            <input type="date" class="form-control">
                        </div>
                        <!--Departure end -->

                        <!--Return -->
                        <div class="flex-grow-1">
                            <label for="" class="form-label mb-0 text-white fw-bold">Return</label>
                            <input type="date" class="form-control">
                        </div>
                        <!--Return end -->

                        <!--cabin class-->
                        <div class="flex-grow-1">
                            <label for="" class="form-label mb-0 text-white fw-bold">Cabin Class & Travellers</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>1 adult, Economy</option>
                                <option value="1">Premium Economy</option>
                                <option value="2">Business class</option>
                                <option value="3">First class</option>
                            </select>
                        </div>
                        <!--cabin class end-->
                    </div>
                    <!--INPUT FIELD  END-->

                    <!--Check Buttons-->
                    <div class="d-flex align-items-center justify-content-between pt-2">
                        <div class="d-flex flex-column">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label text-white fw-bold" for="flexCheckDefault">
                                    Add Nearby Airports
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label text-white fw-bold" for="flexCheckChecked">
                                    Non-stop flights only
                                </label>
                            </div>
                        </div>
                        <div class="btn btn-primary fw-bold text-white">Search Flights</div>
                    </div>
                    <!--Check Buttons end-->
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</div>
<!--LG/MD-->
<!--Flight end-->

<!--Hotels and Car Rentals-->
<div class="container pc-5" style="margin-top: 5%; margin-bottom: 5%;">
    <h3>Plan Your Next Stay</h3>
    <div class="d-flex align-items-center justify-content-between pt-3">
        <div>
            <button class="btn-primary">Bangalore</button>
            <button class="btn-light-rounded-pill">Chennai</button>
            <button class="btn-light-rounded-pill">Delhi</button>
            <button class="btn-light-rounded-pill">Hyderabad</button>
            <button class="btn-light-rounded-pill">Mumbai</button>
        </div>
        <button class="btn-link">View More Hotels</button>
    </div>
</div>
<!--Hotels LG/MD-->

<!--Hotels LG/MD END-->
<div class="container d-md-flex d-xl-flex flex-column">
    <div class="row col-md-1"></div>
    <div class="row col-md-10">
        <div class="card" style="width: 18rem;">
            <img src="./assets/img/hotel1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <div class="card-subtitle mb-2 text-muted">Bangalore, INDIA</div>
                <h5 class="card-title">Season International Hotel, Bangalore</h5>
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                    </div>
                    <p class="card-text text-dark">$94 <span>per day</span></p>
                </div>
                <a href="#" class="btn btn-primary">Book Now</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="./assets/img/hotel2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <div class="card-subtitle mb-2 text-muted">Bangalore, INDIA</div>
                <h5 class="card-title">Sydney International Hotel, Bangalore</h5>
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                    </div>
                    <p class="card-text text-dark">$94 <span>per day</span></p>
                </div>
                <a href="#" class="btn btn-primary">Book Now</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="./assets/img/hotel3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <div class="card-subtitle mb-2 text-muted">Bangalore, INDIA</div>
                <h5 class="card-title">Novetal International Hotel, Bangalore</h5>
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                    </div>
                    <p class="card-text text-dark">$94 <span>per day</span></p>
                </div>
                <a href="#" class="btn btn-primary">Book Now</a>
            </div>
        </div>
    </div>
    <div class="row col-md-1"></div>
</div>

<!-- Car Rentals start-->
<div class="container d-md-flex d-xl-flex flex-column mt-4">
    <div class="row col-md-1"></div>
    <div class="row col-md-10">
        <div class="card" style="width: 18rem;">
            <img src="./assets/img/car1.jpg" width="100%" height="50%"  class="card-img-top" alt="...">
            <div class="card-body">
                <div class="card-subtitle mb-2 text-muted">Bangalore, INDIA</div>
                <h5 class="card-title">Prime sedan</h5>
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                    </div>
                    <p class="card-text text-dark">$94 <span>per day</span></p>
                </div>
                <a href="#" class="btn btn-primary">Book Now</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="./assets/img/car2.jpg" width="100%" height="50%"  class="card-img-top" alt="...">
            <div class="card-body">
                <div class="card-subtitle mb-2 text-muted">Bangalore, INDIA</div>
                <h5 class="card-title">Innova Sedan</h5>
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                    </div>
                    <p class="card-text text-dark">$94 <span>per day</span></p>
                </div>
                <a href="#" class="btn btn-primary">Book Now</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="./assets/img/car3.jpg" width="100%" height="50%" class="card-img-top" alt="...">
            <div class="card-body">
                <div class="card-subtitle mb-2 text-muted">Bangalore, INDIA</div>
                <h5 class="card-title">Mini</h5>
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                    </div>
                    <p class="card-text text-dark">$94 <span>per day</span></p>
                </div>
                <a href="#" class="btn btn-primary">Book Now</a>
            </div>
        </div>
    </div>
    <div class="row col-md-2"></div>
</div>
<!-- Car Rentals end-->



<!--Categories-->

<section id="services" class="bg-cover">
  <div class="container">
    <div class="row">
        <div class="col-12 intro text-center">
            <h3>Categories</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-sm-6 d-flex flex-wrap align-items-start justify-content-center catpost">
            @php
                $categories = App\Models\Category::where('navbar_status', '0')->where('status', '0')->get();
            @endphp
            @foreach($categories as $cateitem)
                <div class="catchild">
                    <h5>{{$cateitem->name}}</h5>
                    <a href="{{$cateitem->slug}}" class="tag">
                        <img src="{{ asset('uploads/category/'.$cateitem->image)}}" width="300" height="300" alt="">
                    </a>
                    <p>{{$cateitem->meta_description}}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
</section>


<!--Categories-->

<section id="services" class="bg-cover">
  <div class="container">
    <div class="row">
        <div class="col-12 intro text-center">
            <h3> Holiday Packages Categories</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-sm-6 d-flex flex-wrap align-items-start justify-content-center catpost">
            @php
                $categories = App\Models\HolidayCategory::where('navbar_status', '0')->where('status', '0')->get();
            @endphp
            @foreach($categories as $cateitem)
                <div class="catchild">
                    <h5>{{$cateitem->name}}</h5>
                    <a href="{{$cateitem->slug}}" class="tag">
                        <img src="{{ asset('uploads/holidaycategory/'.$cateitem->image)}}" width="300" height="300" alt="">
                    </a>
                    <p>{{$cateitem->meta_description}}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
</section>

@endsection
