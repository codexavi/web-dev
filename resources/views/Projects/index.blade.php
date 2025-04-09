@extends('Projects.layout.app')

@section('title', 'Projects')

@section('content')
<div class="container mx-auto py-6">
    <div class="flex justify-between mb-4">
        <h1 class="text-2xl font-semibold">Project List</h1>
        <a href="{{ route('projects.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">+ New Project</a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 p-3 rounded text-green-700 mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="min-w-full bg-white border rounded">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2 border">Title</th>
                <th class="px-4 py-2 border">Status</th>
                <th class="px-4 py-2 border text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($projects as $project)
                <tr>
                    <td class="px-4 py-2 border">{{ $project->title }}</td>
                    <td class="px-4 py-2 border capitalize">{{ $project->status }}</td>
                    <td class="px-4 py-2 border text-center space-x-2">
                        <a href="{{ route('projects.show', $project->id) }}" class="text-blue-500">View</a>
                        <a href="{{ route('projects.edit', $project->id) }}" class="text-yellow-500">Edit</a>
                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Delete this project?')" class="text-red-500">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="3" class="text-center py-4">No projects found.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
