@extends('layouts.app')



@section('content')

<div class="container-fluid p-0">
    <!-- Hero Section -->
    <div class="bg-primary text-white py-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-8">
                    <h1 class="display-4 mb-4">Selamat datang di Afrisa Store</h1>
                    <p class="lead mb-4">Silahkan Cari barang yang anda butuhkan, Semua tersedia di Afrisa store</p>
                    <a href="{{ route('products.index') }}" class="btn btn-light btn-lg">Klik disini</a>
                </div>
            </div>
          
        </div>
    </div>

</div>
@endsection