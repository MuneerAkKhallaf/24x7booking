@extends('layouts.master')

@section('content')


<div class="container-fluid px-4">

<div class="card mt-4">
    <div class="card-header">
        <h4>
            Edit Post
            <a href="{{ url('admin/posts') }}" class="btn btn-primary float-end">Back</a>
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
                            
    <form action="{{ url('admin/update-post/'.$post->id) }}" method="POST" enctype="multipart/form-data">

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
<label for="">Post Name</label>
<input type="text" name="name" value="{{$post->name}}" class="form-control">
</div>
<div class="mb-3">
<label for="">Slug</label>
<input type="text" name="slug" value="{{$post->slug}}" class="form-control" id="Slug">

</div>

<div class="mb-3">
<label for="">Description</label>
<textarea name="description"  rows="5" class="form-control">{{$post->description}}</textarea>

</div>

<div class="mb-3">
<label for="">Image</label>
<input type="file" name="image"  class="form-control">

</div>

<h6>SEO TAGS</h6>

<div class="mb-3">
<label for="">META TITLE</label>
<input type="text" name="meta_title" value="{{$post->meta_title}}" class="form-control">

</div>

<div class="mb-3">
<label for="">META Description</label>
<textarea name="meta_description" rows="3"  class="form-control">{{$post->meta_description}}</textarea>
</div>

<div class="mb-3" >
<label for="">META KEYWORDS</label>
<textarea name="meta_keyword" rows="3"  width="100%" class="form-control">{{$post->meta_keyword}}</textarea>
</div>

<h6>STATUS MODE</h6>
<div class="row"> 
<div class="col-md-4 mb3">
 <label>STATUS</label>
 <input type="checkbox" name="status" {{ $post->status == '1'? 'checked':''}}/>
</div>
<div class="col-md-8 mb3">
 <button type= "submit" class="btn btn-primary">Update Post</button>
</div>
</div> 

 </form>

    </div>
</div>

</div>

@endsection