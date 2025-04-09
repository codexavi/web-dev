@extends('Projects.layout.app')

@section('title', 'Edit Project')

@section('content')
<div class="container mx-auto py-6">
    <h1 class="text-2xl font-semibold mb-4">Edit Project</h1>

    <form action="{{ route('projects.update', $project->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block">Title</label>
            <input type="text" name="title" class="w-full border rounded px-3 py-2" value="{{ old('title', $project->title) }}" required>
            @error('title')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block">Description</label>
            <textarea name="description" class="w-full border rounded px-3 py-2">{{ old('description', $project->description) }}</textarea>
            @error('description')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block">Status</label>
            <select name="status" class="w-full border rounded px-3 py-2">
                <option value="active" {{ $project->status == 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ $project->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
            @error('status')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
        </div>

        <button type="submit" class="bg-yellow-600 text-white px-4 py-2 rounded">Update Project</button>
    </form>
</div>
@endsection
