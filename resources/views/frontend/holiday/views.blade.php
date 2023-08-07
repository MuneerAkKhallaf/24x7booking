
@extends('layouts.app')

@section('content')




<div class="py-4 mt-4">
    <div class="container">
        <div class="row">

        
            <div class="col-md-9">

              <div class="category-heading">
                    <h4 class="mb-0">{!! $holiday->name !!}</h4>
                </div>

                <div class="col-md-12">
            <div class="col-md-4">
            <img src="{{ asset('uploads/holiday/'.$holiday->image)}}" width=200px height=400px alt="">

            </div>

        </div>


                <div class="div">
                    <h6>{!! $holiday->category->name !!}</h6>
                </div>
<!-- Display other fields -->
<h4>{!! $holiday->name !!}</h4>
<p>{!! $holiday->description !!}</p>

<!-- Display the itinerary data -->
<h2>Itinerary:</h2>
@foreach (explode("\n", $holiday->itinerary) as $day => $itinerary)
    <h3>Day {{ $day + 1 }}</h3>
    <p>{!! $itinerary !!}</p>
@endforeach

               

               
                <div class="card card-shadow mt-4">
                    <div class="card-body">
                    {!! $holiday->description !!}


                    </div>
                 </div>
            </div>

            <div class="col-md-3">
                <h4>Related packages</h4>
            </div>
            </div>
            </div>
            </div>















@endsection