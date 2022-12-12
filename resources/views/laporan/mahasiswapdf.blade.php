<html>
    <head>
        <title>Laporan Mahasiswa</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
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
        <br>
        <br>
        <h1>
            UNIVERSITAS PELITA HARAPAN<br>
            MEDAN CAMPUS
        </h1>
        <h5>Jalan. Imam Bonjol No. 1<br>
            Tlp. 061.7777
        </h5>
        <br>
        <hr>
            <center>LOUNGE BOOKING<br></center>
            <center>UNIVERSITAS PELITA HARAPAN<br></center>
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
    </body>
</html>
