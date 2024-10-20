@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Produk</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Tambahkan</a>
    
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-4 mb-3">
            <div class="card">
                @if($product->image)
                <img src="{{ asset('images/'.$product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ Str::limit($product->description, 100) }}</p>
                    <p class="card-text"><strong>Harga: Rp.{{ $product->price }}</strong></p>
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">Lihat</a>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apa anda yakin ingin di hapus?')">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection