@extends('layouts.app')

@section('content')

<div class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-9">

              <div class="category-heading">
                    <h4>{{$category->name}}</h4>
                </div>

                @forelse ($post as $postitem)
                <div class="card card-shadow mt-4">
                    <div class="card-body">
                      <a href="{{ url('/'.$category->slug.'/'.$postitem->slug)}}">
                    <h2>{!! $postitem->name !!}</h2>
                    </a>  
                    <p>Posted on: {!! $postitem->created_at->format('d-m-Y') !!}</p>
                    <p>Posted by: {!! $postitem->user->name !!}</p>
                    </div>
                    {!! $postitem->description !!}
                </div>
                @empty

                <div class="card card-shadow mt-4">
                    <div class="card-body">
                        <h4>No Post Available</h4>

                    </div>
                </div>

                @endforelse

            </div>
            <div class="col-md-3">

            </div>
        </div>
    </div>
</div>

@endsection