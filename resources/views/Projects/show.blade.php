@extends('Projects.layout.app')

@section('title', 'View Project')

@section('content')
<div class="container mx-auto py-6">
    <h1 class="text-2xl font-semibold mb-4">Project Details</h1>

    <div class="bg-white shadow-md rounded p-6">
        <p><strong>Title:</strong> {{ $project->title }}</p>
        <p class="mt-2"><strong>Description:</strong> {{ $project->description }}</p>
        <p class="mt-2"><strong>Status:</strong> {{ ucfirst($project->status) }}</p>
    </div>

    <div class="mt-6">
        <a href="{{ route('projects.index') }}" class="text-blue-600 underline">← Back to List</a>
    </div>
</div>
@endsection
