@extends('dashboard')

@section('head')
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"> -->

<!-- modal -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> -->
@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection

@endsection


@section('content')

<style>
    /* Style yang sudah ada */
    .gambar {
        height: 200px;
        border-radius: 0px;
        border: 2px solid #ddd;
        background-image: none;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        width: 300px;
    }
    .text-start h4 {
        margin-top: 5px; /* Kurangi margin atas pada teks */
        margin-bottom: 5px; /* Kurangi margin bawah pada teks */
        margin-right: 2px;
        margin-left: 1px !important;
    }

    .gambarKelas {
        width: 300px;
        border-radius: 0px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        height: 200px;
    }

    .card {
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
        width: 1300px;
        height: auto; /* Sesuaikan tinggi card */
    }

    .card:hover {
        transform: scale(1.03);
    }

    .card-img-top {
        height: 150px; /* Ubah tinggi gambar di card */
        object-fit: cover; /* Menjaga proporsi gambar */
    }

    .rating-icon {
        color: gold;
    }

    .table {
        border: 1px solid #ddd;
        border-radius: 5px;
        overflow: hidden;
    }

    .table th,
    .table td {
        vertical-align: middle;
        padding: 15px;
    }

    .main-sidebar {
        width: 250px; /* Atur lebar sidebar */
        min-height: 100vh; /* Membuat sidebar mengisi tinggi viewport */
    }

    .content-wrapper {
        flex: 1; /* Membuat konten mengambil sisa ruang yang tersedia */
        padding: 20px; /* Ruang di sekitar konten */
    }

    .main-footer {
        background-color: #f8f9fa;
        border-top: 1px solid #dee2e6;
        padding: 10px;
        text-align: center;
        position: relative;
        width: 100%;
    }

    /* Kontainer untuk card member */
    .card-container {
        margin-top: 10px; /* Mengurangi margin atas untuk mengangkat kontainer */
        padding: 20px; /* Ruang di dalam kontainer */
        border: 1px solid #ddd; /* Border untuk kontainer */
        border-radius: 10px; /* Membuat sudut kontainer melengkung */
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Bayangan kontainer */
    }

    .small-img{
        width: 150px; /* Atur lebar sesuai keinginan */
        height: 150px; /* Mempertahankan rasio aspek gambar */
    }
    .card-container-2{
        margin-top: 10px; /* Mengurangi margin atas untuk mengangkat kontainer */
        padding: 20px; /* Ruang di dalam kontainer */
        border: 1px solid #ddd; /* Border untuk kontainer */
        border-radius: 10px; /* Membuat sudut kontainer melengkung */
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Bayangan kontainer */
        width: 800px;
    }

    .badge-custom {
        background-color: transparent; /* Latar belakang transparan */
        border: 2px solid black; /* Border hitam */
        border-radius: 20px; /* Radius hampir bulat, sesuaikan sesuai keinginan */
        color: black; /* Warna teks */
        padding: 5px 10px; /* Menambahkan sedikit padding */
    }
</style>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<div class="content mt-4 d-flex justify-content-center">
    <!-- <div class="container-fluid justify-content-center"> -->
        <div class="row align-items-center mt-3">
            <!-- Column 1 -->
            <div class="col-md-6">
                <div class="card p-0 mx-3 justify-content-center">
                    <div class="card-body d-flex justify-content-between">
                        <div class="d-flex justify-content-center align-items-center">
                            <!-- <div class="col mb-4"> -->
                            <img class="gambar p-1 me-2" src="{{ asset('img/yoga.jpg') }}" alt="Gym Class">
                            <!-- </div> -->
                            <div class="ml-2 text-start">
                                <!-- coba -->
                                <!-- <div class="row mb-4">
                                    <div class="col d-flex justify-content-between align-items-center">
                                        <h4 class="me-4"><i class="bi bi-eye" style="color: green;"></i>Gaming</h4> 
                                        <h4 class="text-end">Tanggal: Saturday, 05-Oct-2024</h4>
                                    </div>
                                </div> -->
                                <div class="d-flex justify-content-between align-items-center mb-4" style="gap: 500px;">
                                <h5><strong>Gaming</strong> 
                                    <span class="badge-text-bg-secondary">
                                        <button class="btn btn-success ml-1" data-bs-toggle="modal" data-bs-target="#iconEyeButton">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </span>
                                </h5>

                                <h5>Tanggal : Saturday, 05-Oct-2024</h5>
                                </div>
                                <p>Instruktur : Nicodemus Anggit Krisnauaji</p>
                                <p>Ruang Kelas : B</p>
                                <p>Total Member : 6</p>
                                <ul class="mb-0 list-unstyled d-flex flex-row rating-icon">
                                        <p class="mb-2 me-1" style="color: black">Rating :</p>
                                    <li><i class="fas fa-star fa-xs"></i></li>
                                    <li><i class="fas fa-star fa-xs"></i></li>
                                    <li><i class="fas fa-star fa-xs"></i></li>
                                    <li><i class="fas fa-star fa-xs"></i></li>
                                    <li><i class="fas fa-star fa-xs"></i></li>
                                </ul>
                                <!-- end coba -->
                                <!-- <h4>Instruktur : Nicodemus Anggit Krisnauaji</h4> -->
                                <!-- <h4>Ruang Kelas : B</h4> -->
                                <!-- <h4>Total Member : 6</h4> -->
                                <!-- <h4>Rating <i class="bi bi-star-fill" style="color: yellow;"></i>
                                    <i class="bi bi-star-fill" style="color: yellow;"></i>
                                    <i class="bi bi-star-fill" style="color: yellow;"></i>
                                    <i class="bi bi-star-fill" style="color: yellow;"></i>
                                    <i class="bi bi-star-fill" style="color: yellow;"></i>
                                </h4> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Akhir row untuk column 1 -->
    <!-- </div> -->
    
</div>

<!-- accordion -->
<!-- <div class="card-container">
<div class="container mt-4"> -->
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Section 1 : Informasi Umum
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Olahraga untuk menjadi lebih sehat</strong>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      Section 2 : Jadwal Kelas
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Friday, 25-Oct-2024</strong>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      Section 3 : Informasi Tambahan
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Gym bisa meningkatkan kinerja otak jadi ayo ikut!</strong>
      </div>
    </div>
  </div>
</div>
<!-- </div>
</div> -->
 <!-- end accordion -->

<!-- Card Member Kontainer -->
<div class="card-container">
    <div class="container mt-4">
        <!-- Row for the heading and button -->
        <div class="row mb-4">
            <div class="col d-flex justify-content-between align-items-center">
                <h3>Daftar Member</h3>
                <button type="button" class="btn btn-primary" id="presensiButton">
                <i class="fa fa-check" aria-hidden="true"></i> Presensi
                </button>
            </div>
        </div>

        <div class="row d-flex flex-wrap">
            @foreach ($members as $member)
            <div class="col-md-4 mb-4 d-flex">
                <!-- <div class="card flex-fill
                    @if ($member['jenisKartu'] == 'Gold')
                        bg-warning 
                    @elseif ($member['jenisKartu'] == 'Silver')
                        bg-secondary
                    @endif"> -->

                    <div class="card flex-fill" 
                    style="
                        @if ($member['jenisKartu'] == 'gold')
                            background-color: #ffd700; border: 1px solid black;
                        @elseif ($member['jenisKartu'] == 'silver')
                            background-color: #d3d3d3; border: 1px solid black;
                        @else
                            background-color: white; border: 1px solid black;
                        @endif
                    ">
                    
                    <!-- <div class="card flex-fill"
                    style="background-color: yellow; border: 1px solid transparent;"> -->

                <img src="{{ asset('img/gymFoto.jpg') }}" class="card-img-top" alt="{{ $member['nama'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $member['nama'] }}</h5>
                    <p class="card-text">Email: {{ $member['email'] }}</p>
                    <p class="card-text">No Telp: {{ $member['noTelp'] }}</p>

                        <!-- Card Type Badge -->
                        <p class="card-text">
                            Jenis Kartu:
                            <span class="badge badge-custom 
                                @if ($member['jenisKartu'] == 'gold') 
                                     text-light 
                                @elseif ($member['jenisKartu'] == 'silver') 
                                     text-light 
                                @endif">
                                {{ $member['jenisKartu'] }}
                            </span>
                        </p>

                        <!-- Payment Method Badge -->
                        <p class="card-text">
                            Metode Pembayaran:
                            <span class="badge 
                                @if ($member['metode'] == 'hutangTeman') bg-danger
                                @elseif ($member['metode'] == 'langsungBayar') bg-success
                                @endif">
                                {{ $member['metode'] }}
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Toast -->
<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="presensiToast" class="toast align-items-center text-bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
            <i class="bi bi-check-lg"></i>Berhasil Mempresensi Member
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="iconEyeButton" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success text-ligh">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Kelas</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h3><strong>Gaming</strong></h3>
        <h5><strong>Instruktur:</strong> Nicodemus Anggit Krisnauaji</h5>
        <h5><strong>Kode Instruktur:</strong> 220711679</h5>
        <h5><strong>Hari Kelas:</strong> Saturday</h5>
        <h5><strong>Tanggal:</strong> 05-Oct-2024</h5>
        <h5><strong>Ruang Kelas:</strong> B</h5>
        <ul class="mb-0 list-unstyled d-flex flex-row rating-icon">
          <h5 class="mb-2 me-1" style="color: black"><strong>Rating:</strong></h5> 
          <li><i class="fas fa-star fa-xs" style="color: black"></i></li>
          <li><i class="fas fa-star fa-xs" style="color: black"></i></li>
          <li><i class="fas fa-star fa-xs" style="color: black"></i></li>
          <li><i class="fas fa-star fa-xs" style="color: black"></i></li>
          <li><i class="fas fa-star fa-xs" style="color: black"></i></li>
        </ul>
      </div>
    </div>
  </div>
</div>



<script>
    document.getElementById('presensiButton').addEventListener('click', function() {
        // Tampilkan toast
        var toastEl = document.getElementById('presensiToast');
        var toast = new bootstrap.Toast(toastEl);
        toast.show();
    });

    document.addEventListener('DOMContentLoaded', function () {
    var myModalEl = document.getElementById('iconEyeButton');
    myModalEl.addEventListener('show.bs.modal', function (event) {
        // Logika tambahan saat modal dibuka
    });
});
</script>


@endsection