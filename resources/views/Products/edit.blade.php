@extends('Products.layout.app')

@section('title', 'Edit Product')

@section('content')
<h2 class="text-xl font-bold mb-4">Edit Product</h2>

<form action="{{ route('products.update', $product) }}" method="POST" class="bg-white shadow-md rounded p-6">
    @csrf
    @method('PUT')

    @include('Products._form', ['buttonText' => 'Update Product'])
</form>
@endsection
