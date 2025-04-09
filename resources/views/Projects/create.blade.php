@extends('Projects.layout.app')

@section('title', 'Create Project')

@section('content')
<div class="container mx-auto py-6">
    <h1 class="text-2xl font-semibold mb-4">Create New Project</h1>

    <form action="{{ route('projects.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block">Title</label>
            <input type="text" name="title" class="w-full border rounded px-3 py-2" value="{{ old('title') }}" required>
            @error('title')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block">Description</label>
            <textarea name="description" class="w-full border rounded px-3 py-2">{{ old('description') }}</textarea>
            @error('description')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block">Status</label>
            <select name="statussasa" class="w-full border rounded px-3 py-2">
                <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
            @error('status')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
        </div>

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Create Project</button>
    </form>
</div>
@endsection
