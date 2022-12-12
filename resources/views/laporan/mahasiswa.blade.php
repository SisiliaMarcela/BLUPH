@extends('layouts.app')

@section('title','Laporan Mahasiswa')

@section('content')

        <html>
        <body>
        <h2></h2>
        <div class="media">
        <img src='{{ asset("adminlte/dist/img/logo-uph.png") }}' alt="User Avatar" class="img-size-50 img-circle mr-10"> 
        <div class="media-body">
        <h3 class="dropdown-item-title">
        Name : Sisilia Marcela
        <h3 class="dropdown-item-title">
        StudentID : 03081190050
        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
        </h3>
        <p class="text-sm">19SI2 | Bussiness Aplication Programming</p>
        <p class="text-sm text-muted"><i class="far fa-file mr-1"></i> Final Exam Bussiness Aplication Programming</p>
        </div>
        </div>
        <hr
        </html>
        <style>
            body{
                padding: 15px;
            }
            h5{
                margin-top: -15px;
            }
            table, th, td {
            border: 1px solid;
            }
        </style>
        <br>
        <a target="_blank" href="/laporan/mahasiswa/pdf" 
        class="btn btn-primary">Cetak PDF</a>
        <br>
        <h1>
            <center>LOUNGE BOOKING<br></center>
            <center>UNIVERSITAS PELITA HARAPAN<br></center>
        <br>
        </h1>
        <h5>Jalan. Imam Bonjol No. 1<br>
            Tlp. 061.7777
        </h5>
        <hr>
        <center><h3>Laporan Mahasiswa</h3></center>
        <table>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Email</th>
            </tr>
            @foreach ($mahasiswa as $mhs)
                <tr>
                    <td>{{$mhs->nim}}</td>
                    <td>{{$mhs->nama}}</td>
                    <td>{{$mhs->kelas}}</td>
                    <td>{{$mhs->email}}</td>
                </tr>
            @endforeach
        </table>
@endsection
