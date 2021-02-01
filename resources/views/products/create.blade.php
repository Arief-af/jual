@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/products" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama_barang" class="form-label">nama barang</label>
                <input class="form-control @error('nama_barang') is-invalid @enderror" type="text" value="{{ old('nama_barang', '') }}" name="nama_barang" id="nama_barang" />
                @error('nama_barang')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="satuan" class="form-label">satuan</label>
                <textarea class="form-control @error('satuan') is-invalid @enderror" type="text" name="satuan" id="satuan">{{ old('satuan', '') }}</textarea>
                @error('satuan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">stok</label>
                <input class="form-control @error('stok') is-invalid @enderror" type="text" value="{{ old('stok', '') }}" name="stok" id="stok" />
                @error('stok')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="harga_beli" class="form-label">harga beli</label>
                <input class="form-control @error('harga_beli') is-invalid @enderror" type="text" value="{{ old('harga_beli', '') }}" name="harga_beli" id="harga_beli" />
                @error('harga_beli')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="harga_jual" class="form-label">harga jual</label>
                <input class="form-control @error('harga_jual') is-invalid @enderror" type="text" value="{{ old('harga_jual', '') }}" name="harga_jual" id="harga_jual" />
                @error('harga_jual')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Jenis barang</label>
                <select name="category_id" class="form-control @error('category_id') is-invalid @enderror">
                    <option value="">-- Pilih Jenis barang --</option>
                    @foreach ($categories as $category)
                        @if (old('category_id') == $category->id)
                            <option selected value="{{ $category->id }}">{{ $category->jenis_barang }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->jenis_barang }}</option>
                        @endif
                    @endforeach
                </select>
                @error('category_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
