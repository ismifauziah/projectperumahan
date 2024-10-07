@extends('/template/nav')
@section('content')
    <div class="container mt-5">
        <h1 class="text-center-mb-4">Tambah Artikel</h1>
        <form action="/artikel/create" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="alamat" class="form-label">Nama</label>
                <input type="text" class="form-control-text" name="nama" placeholder="nama">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control-text" name="alamat" placeholder="alamat">
            </div>
            <div class="mb-3">
                <label for="luas tanah dan bangunan" name="luas_tanah" class="form-label">Luas tanah dan bangunan</label>
                <input type="number" class="form-control" id="luas_tanah" placeholder="masukan luas tanah dan bangunan" name="luas_tanah">
            </div>
            <div class="mb-3">
                <label for="jumlah_kamar" class="form-label">Jumlah kamar</label>
                <input type="number" class="form-control" id="jumlah_kamar" placeholder="masukan jumlah kamar" name="jumlah_kamar">
            </div>
            <div class="mb-3">
                <label for="tahun_dibangun" class="form-label">Tahun dibangun</label>
                <input type="date" class="form-control" id="tahun_dibangun" placeholder="masukan tahun dibangun" name="tahun_dibangun">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" placeholder="masukan harga" name="harga">
            </div>
            <div class="form-group pt-2">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control-text" name="foto" placeholder="foto">
            </div>


            <button type="submit" class="btn" style="background-color: #90EE90">Simpan artikel</button>
        </form>
    </div>
@endsection