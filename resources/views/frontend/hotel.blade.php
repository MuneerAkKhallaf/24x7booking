@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-5">
            <div class="d-flex flex-column">
                <div class="d-flex align-items-center pt-3  ">
               


            <a href="{{ url('/')}}"> <div class="btn btn-primary fw-bold text-white" onmousedown="changeColor(this)" onmouseup="changeColor(this)"><i class='bx bxs-plane-alt mx-1'></i>Flights</div></a>
                       <a href="{{ url('/holidays')}}"><div class="btn btn-primary fw-bold text-whitemx-1" onmousedown="changeColor(this)" onmouseup="changeColor(this)"><i class='bx bx-hotel mx-1' ></i>Holidays</div></a>
                       <a href="{{ url('/hotels')}}"><div class="btn btn-primary fw-bold text-white onmousedown="changeColor(this)" onmouseup="changeColor(this)"  "><i class='bx bxs-car mx-1' ></i>Hotels</div></a>


                       </div>
            </div>


        </div>

    </div>

</div>

<!--hotel section design-->
<div class="hotelimg  d-md-flex d-lg-flex  flex-column">
<h1 class="text-white fw-bold" style="font-size: 55px; padding: 7% 0 2% 16%;">Start Journey with 24x7booking</h1>
<div class="container-fluid" style="padding-bottom:22;">
<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8 bg-warning p-4 rounded-1">
        <div class="d-flex flex-column">
        <div class="d-flex flex-wrap align-items-center justify-content-between py-2">
            <div class="flex-grow-1">
            <label class="form-label mb-0 text-white fs-6 fw-bold" for="stay">Where do you want to stay</label>
            <input type="text" placeholder="Enter Destination or Hotel name"  class="form-control" name="stay" id="" >
            </div>

            <div class="flex-grow-1">
                            <label for="" class="form-label mb-0 text-white fw-bold">Check-in</label>
                            <input type="date"  class="form-control">
                        </div>

                        <div class="flex-grow-1">
                            <label for="" class="form-label mb-0 text-white fw-bold">Check-out</label>
                            <input type="date"  class="form-control">
                        </div>

                        <div class="flex-grow-1">
    <label for="" class="form-label mb-0 text-white fw-bold">Guests and Room</label>
    <select id="guests-select" class="form-select" aria-label="Default select example">
        <option value="1">Adults</option>
        <option value="2">Children</option>
        <option value="3">Room</option>
    </select>
</div>



        </div>
        </div>



        <!--Check Buttons-->
        <div class="d-flex align-items-center justify-content-between pt-2">
                            <div class="d-flex flex-column">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label text-white fw-bold" for="flexCheckDefault">
                                      5 star
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label text-white fw-bold" for="flexCheckChecked">
                                      4 star
                                    </label>
                                  </div>
                            </div>
                            <div class="btn btn-primary fw-bold text-white">Search Hotels </div>
                         </div>

                          <!--Check Buttons end-->




    </div>
    <div class="col-lg-2"></div>

</div>

</div>

</div>






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
        <div class="row col-md-1">
            
        </div>
        <div class="row col-md-10">
            <div class="card" style="width:18rem;">
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
        <div class="row col-md-1">
          
        </div>
    </div>



      <!-- Car Rentals start-->

      <div class="container  d-md-flex d-xl-flex flex-column mt-4">
        <div class="row col-md-1">
            
        </div>
        <div class="row col-md-10">
            <div class="card" style="width:18rem;">
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
                  <h5 class="card-title"> Innova Sedan</h5>
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
                  <h5 class="card-title">mini</h5>
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
        <div class="row col-md-2">
          
        </div>
    </div>
      
      

      <!--Car Rentals end-->





@endsection