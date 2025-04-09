@extends('Products.layout.app')

@section('title', 'Create Product')

@section('content')
<h2 class="text-xl font-bold mb-4">Create New Product</h2>

<form action="{{ route('products.store') }}" method="POST" class="bg-white shadow-md rounded p-6">
    @csrf

    @include('Products._form', ['buttonText' => 'Save Product'])
</form>
@endsection
