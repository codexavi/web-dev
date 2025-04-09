@extends('Products.layout.app')

@section('title', 'Product Details')

@section('content')
<div class="bg-white shadow-md rounded p-6">
    <h2 class="text-xl font-bold mb-2">{{ $product->name }}</h2>
    <p class="mb-2"><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
    <p class="mb-2"><strong>Status:</strong> {{ ucfirst($product->status) }}</p>
    <p><strong>Description:</strong> {{ $product->description }}</p>

    <a href="{{ route('products.index') }}" class="mt-4 inline-block bg-gray-500 text-white py-2 px-4 rounded">Back</a>
</div>
@endsection
