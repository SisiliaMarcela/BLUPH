@extends('layouts.app')

@section('title','Customized Limit')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">customized_limit {{ $customized_limit->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/customized_limit') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/customized_limit/' . $customized_limit->id . '/edit') }}" title="Edit customized_limit"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/customized_limit' . '/' . $customized_limit->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete customized_limit" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $customized_limit->id }}</td>
                                    </tr>
                                    <tr><th> Id Location </th><td> {{ $customized_limit->id_location }} </td></tr><tr><th> Date </th><td> {{ $customized_limit->date }} </td></tr><tr><th> Limit </th><td> {{ $customized_limit->limit }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
