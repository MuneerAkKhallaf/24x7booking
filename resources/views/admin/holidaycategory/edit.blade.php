@extends('layouts.master')


@section('title', 'Category')

@section('content')



                        
                       
                       
                            
  <div class="container-fluid">             

                        <div class="card mt-4">
                            <div class="card-header">
                            <h4 class="">Edit HolidayCategory</h4>

                            </div>
                            <div class="card-body" >
                            @if ($errors->any()) 
                            <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                            <div>{{$error}}</div>
                            @endforeach
                            </div>
                            @endif
                                <form action="{{ url('admin/update-holidaycategory/'.$holidaycategory->id) }}" method="POST" enctype="multipart/form-data">

                               @csrf
                               @method('PUT')
                               
                               <div class="mb-3">
                               <label for="">HolidayCategory Name</label>
                               <input type="text" name="name" value="{{$holidaycategory->name }}" class="form-control">
                               </div>
                               <div class="mb-3">
                               <label for="">Slug</label>
                               <input type="text" name="slug" value="{{$holidaycategory->slug }}" class="form-control" id="Slug">

                               </div>

                               <div class="mb-3">
                               <label for="">Description</label>
                               <textarea name="description"  rows="5" class="form-control">{{$holidaycategory->description}}</textarea>

                               </div>

                               <div class="mb-3">
                               <label for="">Image</label>
                               <input type="file" name="image" class="form-control">

                               </div>

                               <h6>SEO TAGS</h6>

                               <div class="mb-3">
                               <label for="">META TITLE</label>
                               <input type="text" name="meta_title" value="{{$holidaycategory->meta_title }}" class="form-control">

                               </div>

                               <div class="mb-3">
                               <label for="">META Description</label>
                               <textarea name="meta_description"  rows="3" class="form-control">{{$holidaycategory->meta_description }}</textarea>
                               </div>

                               <div class="mb-3" >
                               <label for="">META KEYWORDS</label>
                               <textarea name="meta_keyword"  rows="3" width="100%" class="form-control">{{$holidaycategory->meta_keyword }}</textarea>
                               </div>

                               <h6>STATUS MODE</h6>
                             <div class="row"> 
                               <div class="col-md-3 mb3">
                                <label>NAVBAR STATUS</label>
                                <input type="checkbox" name="navbar_status" {{ $holidaycategory->navbar_status == '1'? 'checked':'' }}/>
                               </div>
                               <div class="col-md-3 mb3">
                                <label>STATUS</label>
                                <input type="checkbox" name="status" {{ $holidaycategory->status == '1'? 'checked':'' }}/>
                               </div>
                               <div class="col-md-3 mb3">
                                <button type= "submit" class="btn btn-primary">Update HolidayCategory</button>
                               </div>
                             </div> 

                                </form>

                            </div>
                        
    </div>                            



@endsection