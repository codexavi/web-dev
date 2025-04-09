@extends('Products.layout.app')

@section('title', 'Products List')

@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-2xl font-bold">Products</h1>
    <a href="{{ route('products.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded shadow">
        + Create Product
    </a>
</div>

@if(session('success'))
    <div class="bg-green-200 p-3 rounded mb-4 text-green-800">
        {{ session('success') }}
    </div>
@endif

<table class="min-w-full bg-white shadow rounded-lg overflow-hidden">
    <thead class="bg-gray-200">
        <tr>
            <th class="py-2 px-4 text-left">Name</th>
            <th class="py-2 px-4 text-left">Price</th>
            <th class="py-2 px-4 text-left">Status</th>
            <th class="py-2 px-4 text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr class="border-t">
            <td class="py-2 px-4">{{ $product->name }}</td>
            <td class="py-2 px-4">${{ number_format($product->price, 2) }}</td>
            <td class="py-2 px-4">{{ ucfirst($product->status) }}</td>
            <td class="py-2 px-4 text-center">
                <a href="{{ route('products.show', $product) }}" class="text-blue-500">View</a> |
                <a href="{{ route('products.edit', $product) }}" class="text-indigo-500">Edit</a> |
                <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="mt-4">
    {{ $products->links() }}
</div>
@endsection
