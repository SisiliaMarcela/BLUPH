@extends('layouts.app')

@section('title','Location Time')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">location_time {{ $location_time->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/location_time') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/location_time/' . $location_time->id . '/edit') }}" title="Edit location_time"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/location_time' . '/' . $location_time->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete location_time" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $location_time->id }}</td>
                                    </tr>
                                    <tr><th> Id Location Time </th><td> {{ $location_time->id_location_time }} </td></tr><tr><th> Id Location </th><td> {{ $location_time->id_location }} </td></tr><tr><th> Id Time </th><td> {{ $location_time->id_time }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
