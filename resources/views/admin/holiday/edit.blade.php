@extends('layouts.master')

@section('content')


<div class="container-fluid px-4">

<div class="card mt-4">
    <div class="card-header">
        <h4>
            Edit Package
            <a href="{{ url('admin/add-holidaypackages') }}" class="btn btn-primary float-end">BACK</a>
        </h4>
        
    </div>
    <div class="card-body">

    @if ($errors->any()) 
                            <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                            <div>{{$error}}</div>
                            @endforeach
                            </div>
                            @endif
                            
                            <form action="{{ url('admin/update-package/' . $holiday->id) }}" method="POST" enctype="multipart/form-data">


@csrf
@method('PUT')

<div class="mb-3">
    <label for="">Category</label>
    <select name="category_id" class="form-control">
    @foreach ($category as $cateitem)

  
    <option value="{{ $cateitem->id}}">{{ $cateitem->name }}</option>
    @endforeach
    </select>
</div>

<div class="mb-3">
<label for="">Holiday Package Name</label>
<input type="text" name="name" value="{{$holiday->name}}"class="form-control">
</div>
<div class="mb-3">
<label for="">Slug</label>
<input type="text" name="slug" value="{{$holiday->slug}}" class="form-control" id="Slug">

</div>

<div class="mb-3">
<label for="">Description</label>
<textarea name="description" id="mysummernote" rows="5" class="form-control">{{$holiday->description}}</textarea>

</div>

<div>
                               <label for="days">Number of Days:</label>
    <input type="number" name="days" value="{{$holiday->days}}" id="days" min="1" max="20" class="form-control" required>

                               </div>

                
    <!-- Display the itinerary data -->
    <h2>Itinerary:</h2>
@foreach ($itineraryData as $day => $description)
    <div class="mb-3">
        <label for="itinerary{{ $day + 1 }}">Itinerary - Day {{ $day + 1 }}</label>
        <textarea name="itinerary[]" id="itinerary{{ $day + 1 }}" rows="3" class="form-control itinerary-editor" required>{{ $description }}</textarea>
    </div>
@endforeach





<div class="mb-3">
<label for="">Image</label>
<input type="file" name="image" class="form-control">

</div>

<h6>SEO TAGS</h6>

<div class="mb-3">
<label for="">META TITLE</label>
<input type="text" name="meta_title" value="{{$holiday->meta_title}}" class="form-control">

</div>

<div class="mb-3">
<label for="">META Description</label>
<textarea name="meta_description" rows="3" class="form-control">{{$holiday->meta_description}}</textarea>
</div>

<div class="mb-3" >
<label for="">META KEYWORDS</label>
<textarea name="meta_keyword" rows="3" width="100%"  class="form-control">{{$holiday->meta_keyword}}</textarea>
</div>

<h6>STATUS MODE</h6>
<div class="row"> 
<div class="col-md-4 mb3">
 <label>STATUS</label>
 <input type="checkbox" name="status" {{ $holiday->status == '1'? 'checked':'' }}/>
</div>
<div class="col-md-8 mb3">
 <button type= "submit" class="btn btn-primary">update Holiday package</button>
</div>
</div> 

 </form>

    </div>
</div>

</div>

@endsection