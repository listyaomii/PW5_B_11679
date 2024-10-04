@extends('dashboard')

@section('content')

<style>
    .gambar {
        height: 100px;
        border-radius: 100px;
        border: 2px solid #ddd;
        background-image: none;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }
    .gambarKelas {
        width: 300px;
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }
    .card {
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
    }

    .card:hover {
        transform: scale(1.03);
    }
    .rating-icon {
        color: gold;
    }

    .table {
        border: 1px solid #ddd;
        border-radius: 5px;
        overflow: hidden;
    }
    .table th, .table td {
        vertical-align: middle;
        padding: 15px;
    }
</style>

<div class="content">
    <div class="container-fluid">
        <h1>Primefit Analysis</h1>
        <div class="row align-items-center mt-3"> <!-- Fixed the row class -->
            <!-- Column 1 -->
            <div class="col-md-3 col-sm-6">
                <div class="card p-0 mx-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center">
                            <img class="gambar p-1 me-2" src="{{ asset('img/foto1.png') }}" alt="">
                            <div class="text-start mt-2">
                                <p class="m-0">Total Member</p>
                                <h4>100</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Column 2 -->
            <div class="col-md-3 col-sm-6">
                <div class="card p-0 mx-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center">
                            <img class="gambar p-1 me-2" src="{{ asset('img/foto2.png') }}" alt="">
                            <div class="text-start mt-2">
                                <p class="m-0">Jumlah Trainer</p>
                                <h4>20</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Column 3 -->
            <div class="col-md-3 col-sm-6">
                <div class="card p-0 mx-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center">
                            <img class="gambar p-1 me-2" src="{{ asset('img/foto3.png') }}" alt="">
                            <div class="text-start mt-2">
                                <p class="m-0">Pendapatan</p>
                                <h4>Rp 3.000.000</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Column 4 -->
            <div class="col-md-3 col-sm-6">
                <div class="card p-0 mx-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center">
                            <img class="gambar p-1 me-2" src="{{ asset('img/foto4.png') }}" alt="">
                            <div class="text-start mt-2">
                                <p class="m-0">Rating</p>
                                <h4>
                                    <ul class="mb-0 list-unstyled d-flex flex-row rating-icon">
                                        <li><i class="fas fa-star fa-xs"></i></li>
                                        <li><i class="fas fa-star fa-xs"></i></li>
                                        <li><i class="fas fa-star fa-xs"></i></li>
                                        <li><i class="fas fa-star fa-xs"></i></li>
                                        <li><i class="fas fa-star-half fa-xs"></i></li>
                                    </ul>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table Section -->

        <h1>Fasilitas Kelas Primefit</h1>
        <table class="table table-striped border-dark text-center">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama Fasilitas</th>
                    <th>Instruktur</th>
                    <th>Ruang</th>
                    <th>Rating</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($kelas as $item)
                <tr>
                    <td>{{ $item['no'] }}</td>
                    <td><img class="gambarKelas" src="{{ $item['gambar'] }}" alt=""></td> <!-- Fixed the array key -->
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['instruktur'] }}</td>
                    <td>{{ $item['ruang'] }}</td> <!-- Fixed the array key -->
                    <td>
                        @if ($item['rating'] == 5)
                        <div class="rating-icon">
                            <i class="fas fa-star fa-xs"></i>
                            <i class="fas fa-star fa-xs"></i>
                            <i class="fas fa-star fa-xs"></i>
                            <i class="fas fa-star fa-xs"></i>
                            <i class="fas fa-star fa-xs"></i>
                        </div>
                        @elseif ($item['rating'] == 4)
                        <div class="rating-icon">
                            <i class="fas fa-star fa-xs"></i>
                            <i class="fas fa-star fa-xs"></i>
                            <i class="fas fa-star fa-xs"></i>
                            <i class="fas fa-star fa-xs"></i>
                        </div>
                        @elseif ($item['rating'] == 3)
                        <div class="rating-icon">
                            <i class="fas fa-star fa-xs"></i>
                            <i class="fas fa-star fa-xs"></i>
                            <i class="fas fa-star fa-xs"></i>
                        </div>
                        @endif
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="alert alert-danger">Data Kelas Masih Kosong</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
