@extends('layouts.app')

@section('title','Replacement Lounge')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Replacement Lounge {{ $replacementlounge->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/replacement-lounge') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/replacement-lounge/' . $replacementlounge->id . '/edit') }}" title="Edit replacementLounge"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/replacementlounge' . '/' . $replacementlounge->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete replacementLounge" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $replacementlounge->id }}</td>
                                    </tr>
                                    <tr><th> Nama Student </th><td> {{ $replacementlounge->nama_student }} </td></tr><tr><th> Student ID </th><td> {{ $replacementlounge->studentID }} </td></tr><tr><th> Intake </th><td> {{ $replacementlounge->intake }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
