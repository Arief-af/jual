@extends('layouts.app')
@section('heading')
Product
@endsection
@section('content')
    <div class="mb-3">
        <a href="/products/create" class="btn btn-primary">Create</a>
    </div>
    @if (session()->has('success_message'))
        <div class="alert alert-success">{{ session('success_message') }}</div>
    @endif
    @if (session()->has('error_message'))
        <div class="alert alert-danger">{{ session('error_message') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>nama barang</th>
                <th>satuan</th>
                <th>stok</th>
                <th>harga beli</th>
                <th>harga jual</th>
                <th>Jenis barang</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->nama_barang}}</td>
                    <td>{{ $product->satuan }}</td>
                    <td>{{ $product->stok }}</td>
                    <td>{{ $product->harga_beli }}</td>
                    <td>{{ $product->harga_jual }}</td>
                    <td>{{ $product->category->jenis_barang }}</td>
                    <td>
                        <a href="/products/{{ $product->id }}/edit" class="btn btn-link text-info">Edit</a>
                        @if ($product->deletable)
                            <form class="d-inline-block" action="/products/{{ $product->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-link text-danger">Delete</button>
                            </form>
                        @endif
                    </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
