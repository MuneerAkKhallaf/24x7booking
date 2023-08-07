@extends('layouts.master')


@section('content')


<div class="container-fluid px-4">
                        <div class="card">
                            <div class="card-header">
                            <h4>View Category 
                                <a href="{{ url('admin/add-holidaycategory') }}" class=" btn btn-primary float-end ">Add-HolidayCategory</a>
                            </h4>
                            </div>
                            <div class="card-body">
                            @if (session('message')) 
                        <div class="alert alert-success"> {{ session('message') }}</div>
                            @endif

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                    
                                            <th>ID</th>
                                            <th>HolidayCategory Name</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Delete</th>

                                           
                                        
                                    </tr>
                                </thead>

                                <tbody>

                                 @foreach ($holidaycategory as $item)

                                 
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            <img src="{{ asset('uploads/holidaycategory/'.$item->image) }}" widht = "50px" height = "50px" alt="">
                                        </td>
                                        <td>{{ $item->status == '1' ? 'Hidden':'Shown' }}</td>
                                        <td>
                                            <a href="{{ url('admin/edit-holidaycategory/'.$item->id) }}" class="btn btn-success">Edit</a>
                                        </td>
                                        <td>
                                            <a href="{{ url('admin/delete-holidaycategory/'.$item->id) }}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>

                                 @endforeach
                                </tbody>

                            </table>
                            </div>
                        </div>
                       


                        
                        
</div>


@endsection