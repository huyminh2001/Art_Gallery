@extends('layouts.admin_layout')

@section('content')

<div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back @if (session()->has('username')) {{ session()->get('username') }}! @endif!</h4>
                            <span class="ml-1">Datatable</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Photos</h4>
                            </div>
                            <div class ="btn btn-primary" style=" margin-right: 960px; margin-left: 20px; ">
                                <a href="{{url('/admin/photos/addPhotos')}}">Upload Photos</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="photos" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Photo</th>
                                                <th>status</th>
                                                <th>Painting Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($photos as $photo)
                                            <tr>
                                                <td>{{$photo -> id}}</td>
                                                <td>{{$photo -> name}}</td>
                                                <td><img scr="{{asset('admin/images/paintingImages/' .$photo -> name)}}" width="100px" height="100px" title="painting image"></td>
                                                <td>{{$photo -> status ? "Main-Image" : "Sub-Image"}}</td>
                                                <td>
                                                    @if(isset($paintings))
                                                        @foreach($paintings as $painting)
                                                            @if(($painting -> id == $photo -> painting_id))
                                                                {{$painting -> paintingName}}
                                                            @endif
                                                        @endforeach
                                                        - {{$photo -> painting_id}}
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{url('/admin/photos/editPhotos/'.$photo -> id)}}" class="btn btn-primary">Edit</a>
                                                    <a href="{{url('/admin/photos/deletePhotos/'.$photo -> id)}}" class="btn btn-danger"
                                                    onclick="return confirm('Are you sure you want to delete this photo?')">Delete</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Photo</th>
                                                <th>status</th>
                                                <th>Painting Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


@endsection