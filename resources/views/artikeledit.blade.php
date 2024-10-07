@extends('/template/nav')
@section('content')
    <div class="container mt-5">
        <h1 class="texxt-center-mb-4">Tambah Artikel</h1>
        <form action="/artikel/edit/{{ $artikel->id }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group pt-2">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control-text" name="nama" placeholder="nama" value="{{$artikel->nama}}">
            </div>
            <div class="form-group pt-2">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control-text" name="alamat" placeholder="alamat" value="{{$artikel->alamat}}">
            </div>
            <div class="mb-3">
                <label for="luas tanah dan bangunan" name="luas_tanah" class="form-label">Luas tanah dan bangunan</label>
                <input type="number" class="form-control" id="luas" placeholder="masukan luas tanah dan bangunan" name="luas_tanah" value="{{ $artikel->luas_tanah }}">
            </div>
            <div class="mb-3">
                <label for="jumlah kamar">Jumlah kamar</label>
                <input type="number" class="form-control" id="jumlah" placeholder="masukan jumlah kamar" name="jumlah_kamar" value="{{  $artikel->jumlah_kamar }}">
            </div>
            <div class="mb-3">
                <label for="tahun dibangun">Tahun dibangun</label>
                <input type="date" class="form-control" id="jumlah" placeholder="masukan tahun dibangun" name="tahun_dibangun" value="{{ $artikel->tahun_dibangun }}">
            </div>
            <div class="mb-3">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" id="harga" placeholder="masukan harga" name="harga" value="{{ $artikel->harga }}">
            </div>
            <div class="form-group pt-2">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control-text" name="foto" placeholder="foto">
            </div>


            <button type="submit" class="btn" style="background-color: #90EE90">Simpan artikel</button>
        </form>
    </div>
@endsection