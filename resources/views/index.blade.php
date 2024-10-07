{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
</head>
<body> --}}
@extends('dashboard')
@section('content')
            <div class="container">
                <div class="page-inner">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                        <div class="container pt-5">
                            @if (Session::has('pesan'))
                                <div class="alert">{{ Session::get('pesan')}}</div>
                            @endif
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="/artikel/create" class="btn" style="background-color:aqua; color:black">Tambah Data</a>
                                </div>
                                <div  class="col-md-6">
                                    <form action="/search" method="post">
                                        @csrf
                                        <div class="input-group mb-3">
                                            <input type="text" name="cari" class="form-control" placeholder="Search">
                                            <button class="btn" type="submit" style="background-color: rgb(0, 242, 255); color:black">Go</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            Total data perumahan: {{ $total }}
                            <table class="table" style="background-color: white">
                                <thead class="table-primary" style="background-color: white">
                                    <tr>
                                        <th>NO</th>
                                        <th>NAMA</th>
                                        <th>ALAMAT</th>
                                        <th>LUAS TANAH DAN BANGUNAN</th>
                                        <th>JUMLAH KAMAR</th>
                                        <th>TAHUN DIBANGUN</th>
                                        <th>HARGA</th>
                                        <th>FOTO</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($artikel as $key => $item)
                                    <tr>
                                        <td>{{ $key+1}}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->alamat}}</td>
                                        <td>{{ $item->luas_tanah}}</td>
                                        <td>{{ $item->jumlah_kamar}}</td>
                                        <td>{{ $item->tahun_dibangun}}</td>
                                        <td>{{ $item->harga}}</td>
                                        <td><img src="{{ asset('/storage/foto/'.$item->foto) }}" alt=""  style="width: 50px; height: 50px"></td>
                                        <td>
                                            <a href="/artikel/delete/{{ $item->id}}" onclick="return window.confirm('yakin hapus data ini')" class="btn" style="background-color: grey">Delete</a>
                                            <a href="/artikel/edit/{{ $item->id}}" class="btn btn-info">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                     </div>
               </div>
            </div>
         </div>
    @endsection
{{-- </body>
</html> --}}