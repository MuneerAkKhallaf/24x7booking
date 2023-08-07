
@extends('layouts.app')

@section('content')




<div class="py-4 mt-4">
    <div class="container">
        <div class="row">

        
            <div class="col-md-9">

              <div class="category-heading">
                    <h4 class="mb-0">{!! $post->name !!}</h4>
                </div>

                <div class="col-md-12">
            <div class="col-md-4">
            <img src="{{ asset('uploads/post/'.$post->image)}}" width=200px height=400px alt="">

            </div>

        </div>


                <div class="div">
                    <h6>{!!$post->category->name!!}</h6>
                </div>

               

               
                <div class="card card-shadow mt-4">
                    <div class="card-body">
                    {!! $post->description !!}


                    </div>
                 </div>
            </div>

            <div class="col-md-3">
                <h4>Related posts</h4>
            </div>
            </div>
            </div>
            </div>















@endsection