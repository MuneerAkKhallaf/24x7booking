@extends('layouts.master')


@section('title', 'Category')

@section('content')



                        
                       
                       
                            
  <div class="container-fluid">             

                        <div class="card mt-4">
                            <div class="card-header">
                            <h4 class="">Add HolidayCategory</h4>

                            </div>
                            <div class="card-body" >
                            @if ($errors->any()) 
                            <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                            <div>{{$error}}</div>
                            @endforeach
                            </div>
                            @endif
                                <form action="{{ url('admin/add-holidaycategory') }}" method="POST" enctype="multipart/form-data">

                               @csrf
                               
                               <div class="mb-3">
                               <label for="">HolidayCategory Name</label>
                               <input type="text" name="name" class="form-control">
                               </div>
                               <div class="mb-3">
                               <label for="">Slug</label>
                               <input type="text" name="slug" class="form-control" id="Slug">

                               </div>



                               <div class="mb-3">
                               <label for="">Description</label>
                               <textarea name="description" rows="5" class="form-control"></textarea>

                               </div>

                               <div class="mb-3">
                               <label for="">Image</label>
                               <input type="file" name="image" class="form-control">

                               </div>

                               <h6>SEO TAGS</h6>

                               <div class="mb-3">
                               <label for="">META TITLE</label>
                               <input type="text" name="meta_title" class="form-control">

                               </div>

                               <div class="mb-3">
                               <label for="">META Description</label>
                               <textarea name="meta_description" rows="3" class="form-control"></textarea>
                               </div>

                               <div class="mb-3" >
                               <label for="">META KEYWORDS</label>
                               <textarea name="meta_keyword" rows="3" width="100%" class="form-control"></textarea>
                               </div>

                               <h6>STATUS MODE</h6>
                             <div class="row"> 
                               <div class="col-md-3 mb3">
                                <label>NAVBAR STATUS</label>
                                <input type="checkbox" name="navbar_status"/>
                               </div>
                               <div class="col-md-3 mb3">
                                <label>STATUS</label>
                                <input type="checkbox" name="status"/>
                               </div>
                               <div class="col-md-3 mb3">
                                <button type= "submit" class="btn btn-primary">Save HolidayCategory</button>
                               </div>
                             </div> 

                                </form>

                            </div>
                        
    </div>                            



@endsection


