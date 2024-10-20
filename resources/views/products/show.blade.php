@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $product->name }}</h1>
    <div class="row">
        <div class="col-md-6">
            @if($product->image)
                <img src="{{ asset('images/'.$product->image) }}" alt="{{ $product->name }}" class="img-fluid">
            @else
                <div class="bg-secondary text-white p-5 text-center">No Image Available</div>
            @endif
        </div>
        <div class="col-md-6">
            <p><strong>Keterangan Barang:</strong> {{ $product->description }}</p>
            <p><strong>harga Barang:</strong> ${{ $product->price }}</p>
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Hapus</button>
            </form>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection