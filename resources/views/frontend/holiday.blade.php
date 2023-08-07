@extends('layouts.app')

@section('content')

<!--button start-->
<div class="container pt-3">
        <div class="row d-flex justify-content-between">
            <div class="col-lg-5"> 
                <div class="d-flex flex-column">
                    
                    <div class="d-flex align-items-center pt-3  ">
                       <a href="{{ url('/')}}"> <div class="btn btn-primary fw-bold text-white" onmousedown="changeColor(this)" onmouseup="changeColor(this)"><i class='bx bxs-plane-alt mx-1'></i>Flights</div></a>
                       <a href="{{ url('/holidays')}}"><div class="btn btn-primary fw-bold text-white mx-1" onmousedown="changeColor(this)" onmouseup="changeColor(this)"><i class='bx bx-hotel mx-1' ></i>Holidays</div></a>
                       <a href="{{ url('/hotels')}}"><div class="btn btn-primary fw-bold text-white " onmousedown="changeColor(this)" onmouseup="changeColor(this)"><i class='bx bxs-car mx-1 custom-btn' ></i>Hotels</div></a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <!--button end-->


    <!--Flight Start-->
    <!--LG/MD-->

    <div class="holidayimg d-md-flex d-lg-flex  flex-column">
        <h1 class="text-warning fw-bold" style="font-size: 55px; padding: 7% 0 2% 16%;">Start Journey with 24x7booking</h1>
        <div class="container-fluid" style="padding-bottom: 22%;">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8 bg-warning p-4 rounded-1">
                    <div class="d-flex flex-wrap align-items-center justify-content-between py-2">
                      
                <input type="text" class="center-placeholder" class="form-control" placeholder="Enter Your Destination " style="width: 500px; height: 50px;" >
                <div class="btn btn-primary justify-content-center fw-bold text-white py-2 px-5 m-3 fs-5">Explore</div>
                
                </div>
            
  
                </div>
                <div class="col-2"></div>
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