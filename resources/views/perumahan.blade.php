@extends('/template/nav')
@section('content')
<header class="bg-light py-5" style="background-color: grey;" >
    <div class="container">
        <h1>Selamat Datang di Perumahan Impian</h1>
        <p class="lead">Hunian nyaman dan modern untuk keluarga Anda.</p>
        <a href="perumahan2" class="btn btn-light btn-lg">Pelajari Lebih Lanjut</a>
    </div>
</header>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <img src="foto/image1.jpeg" class="img-fluid" alt="Tentang Kami" style="width: 500px;">
        </div>
        <div class="col-md-6" style="margin-top: 7.5%;" id="tentangkami">
            <h2>Tentang Perumahan Kami</h2>
            <p>Kami menyediakan hunian berkualitas tinggi dengan fasilitas lengkap. Lokasi strategis dan lingkungan yang asri, cocok untuk keluarga yang ingin hidup nyaman dan tenang.</p>
            <ul>
                <li>Rumah modern dengan desain terkini</li>
                <li>Lokasi strategis di pusat kota</li>
                <li>Fasilitas umum yang memadai</li>
                <li>Keamanan 24 jam</li>
            </ul>
        </div>
        
        {{-- <div class="col-md-6">
            <h2>Tentang Perumahan Kami</h2>
            <p>Kami menyediakan hunian berkualitas tinggi dengan fasilitas lengkap. Lokasi strategis dan lingkungan yang asri, cocok untuk keluarga yang ingin hidup nyaman dan tenang.</p>
            <ul>
                <li>Rumah modern dengan desain terkini</li>
                <li>Lokasi strategis di pusat kota</li>
                <li>Fasilitas umum yang memadai</li>
                <li>Keamanan 24 jam</li>
            </ul>
        </div> --}}
    </div>
</div>

<div class="container mt-5" id="fasilitas">
    <h2 class="text-center mb-4">Fasilitas Unggulan</h2>
    <div class="row">
        @foreach ($artikel as $key => $item)
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('/storage/foto/'.$item->foto) }}" class="card-img-top" alt="Fasilitas 1">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->luas_tanah }}</h5>
                    <p class="card-text">Area bermain yang luas dan aman untuk anak-anak.</p>
                </div>
            </div>
        </div>
            
        @endforeach
        <div class="col-md-4">
            <div class="card">
                <img src="foto/image3.jpeg" class="card-img-top" alt="Fasilitas 2">
                <div class="card-body">
                    <h5 class="card-title">Kolam Renang</h5>
                    <p class="card-text">Kolam renang bersih dengan fasilitas lengkap untuk keluarga.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="foto/image4.jpeg" class="card-img-top" alt="Fasilitas 3">
                <div class="card-body">
                    <h5 class="card-title">Keamanan 24 Jam</h5>
                    <p class="card-text">Sistem keamanan yang handal dan profesional.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5" id="kontak">
    <h2 class="text-center mb-4">Hubungi Kami</h2>
    <div class="row">
        <div class="col-md-6">
            <form>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Nama Anda">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email Anda">
                </div>
                <div class="mb-3">
                    <label for="pesan" class="form-label">Pesan</label>
                    <textarea class="form-control" id="pesan" rows="3" placeholder="Pesan Anda"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
        <div class="col-md-6">
            <h5>Alamat Kantor</h5>
            <p>Jl. Contoh No.123, Jakarta, Indonesia</p>
            <h5>Telepon</h5>
            <p>+62 123-456-789</p>
            <h5>Email</h5>
            <p>info@perumahanimpian.com</p>
        </div>
    </div>
</div>

<footer class="bg-light text-center text-lg-start mt-5">
    <div class="text-center p-3">
        © 2024 Perumahan Impian | Semua Hak Cipta Dilindungi
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}">

@endsection

    
