@extends('layouts.app')

@section('content')
<div class="container">
    <h2> Edit Products </h2>
    <hr>
     <form action="/products/{{ $product->id }}" method="POST">
         @csrf
         @method('PUT')
         <div class="mb-3">
             <label for="nama_barang" class="form-label">Name</label>
             <input class="form-control @error('nama_barang') is-invalid @enderror" type="text" value="{{ old('nama_barang', $product->nama_barang) }}" name="nama_barang" id="nama_barang" />
             @error('nama_barang')
                 <div class="invalid-feedback">{{ $message }}</div>
             @enderror
         </div>
         <div class="mb-3">
             <label for="satuan" class="form-label">satuan</label>
             <textarea class="form-control @error('satuan') is-invalid @enderror" type="text" name="satuan" id="satuan">{{ old('satuan', $product->satuan) }}</textarea>
             @error('satuan')
                 <div class="invalid-feedback">{{ $message }}</div>
             @enderror
         </div>
         <div class="mb-3">
             <label for="stok" class="form-label">Stok</label>
             <input class="form-control @error('stok') is-invalid @enderror" type="text" value="{{ old('stok', $product->stok) }}" name="stok" id="stok" />
             @error('stok')
                 <div class="invalid-feedback">{{ $message }}</div>
             @enderror
         </div>
         <div class="mb-3">
             <label for="harga_beli" class="form-label">harga beli</label>
             <input class="form-control @error('harga_beli') is-invalid @enderror" type="text" value="{{ old('harga_beli', $product->harga_beli) }}" name="harga_beli" id="harga_beli" />
             @error('harga_beli')
                 <div class="invalid-feedback">{{ $message }}</div>
             @enderror
         </div>
         <div class="mb-3">
             <label for="harga_jual" class="form-label">harga jual</label>
             <input class="form-control @error('harga_jual') is-invalid @enderror" type="text" value="{{ old('harga_jual', $product->harga_jual) }}" name="harga_jual" id="harga_jual" />
             @error('harga_jual')
                 <div class="invalid-feedback">{{ $message }}</div>
             @enderror
         </div>
         <div class="mb-3">
             <label for="category_id" class="form-label">jenis barang</label>
             <select class="form-control @error('category_id') is-invalid @enderror" name="category_id">
                 <option value="">-- Pilih Jenis barang --</option>
                 @foreach ($categories as $category)
                     @if (old('category_id', $product->category_id) == $category->id)
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
