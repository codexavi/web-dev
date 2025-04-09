<div class="mb-4">
    <label class="block font-semibold mb-1">Name</label>
    <input type="text" name="name" value="{{ old('name', $product->name ?? '') }}"
        class="w-full border-gray-300 rounded shadow-sm" required>
    @error('name')<span class="text-red-500">{{ $message }}</span>@enderror
</div>

<div class="mb-4">
    <label class="block font-semibold mb-1">Description</label>
    <textarea name="description" class="w-full border-gray-300 rounded shadow-sm">{{ old('description', $product->description ?? '') }}</textarea>
    @error('description')<span class="text-red-500">{{ $message }}</span>@enderror
</div>

<div class="mb-4">
    <label class="block font-semibold mb-1">Price</label>
    <input type="number" step="0.01" name="price" value="{{ old('price', $product->price ?? '') }}"
        class="w-full border-gray-300 rounded shadow-sm" required>
    @error('price')<span class="text-red-500">{{ $message }}</span>@enderror
</div>

<div class="mb-4">
    <label class="block font-semibold mb-1">Status</label>
    <select name="status" class="w-full border-gray-300 rounded shadow-sm">
        <option value="active" {{ old('status', $product->status ?? '') == 'active' ? 'selected' : '' }}>Active</option>
        <option value="inactive" {{ old('status', $product->status ?? '') == 'inactive' ? 'selected' : '' }}>Inactive</option>
    </select>
    @error('status')<span class="text-red-500">{{ $message }}</span>@enderror
</div>

<button type="submit" class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded">
    {{ $buttonText }}
</button>
