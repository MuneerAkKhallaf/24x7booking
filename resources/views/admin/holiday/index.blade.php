@extends('layouts.master')


@section('content')


<div class="container-fluid px-4">

<div class="card mt-4">
    <div class="card-header">
        <h4>
            View Holidays
            <a href="{{ url('admin/add-holidaypackages') }}" class="btn btn-primary float-end">Add HolidayPackage</a>
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
                                            <th>Holidaypackage Name</th>
                                            <th>Category Name</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                           

                                           
                                        
                                    </tr>
                                </thead>

                                <tbody>

                                 @foreach ($holidays as $item)

                                 
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->category->name }}</td>
                                   
                                        <td>{{ $item->status == '1' ? 'Hidden':'Shown' }}</td>
                                        <td>
                                            <a href="{{ url('admin/holiday/'.$item->id)}}" class="btn btn-success">Edit</a>
                                        </td>
                                        <td>
                                            <a href="{{ url('admin/delete-package/'.$item->id)}}" class="btn btn-success">Delete</a>
                                        </td>
                                       
                                       
                                    </tr>

                                 @endforeach
                                </tbody>

                            </table>
    </div>
</div>

</div>

@endsection