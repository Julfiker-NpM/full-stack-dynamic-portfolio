@extends('admin.layout')

@section('title', 'Edit Project')

@section('content')
    <h2>Edit Project</h2>
    
    <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data" style="max-width: 800px;">
        @csrf
        @method('PUT')
        <div>
            <label>Title *</label>
            <input type="text" name="title" value="{{ old('title', $project->title) }}" required>
        </div>
        <div>
            <label>Description *</label>
            <textarea name="description" rows="5" required>{{ old('description', $project->description) }}</textarea>
        </div>
        <div>
            <label>Current Image</label>
            @if($project->image)
                <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" style="max-width: 200px; display: block; margin: 0.5rem 0;">
            @else
                <p>No image</p>
            @endif
            <input type="file" name="image" accept="image/*">
        </div>
        <div>
            <label>Tech Tags (comma separated)</label>
            <input type="text" name="tech_tags" value="{{ old('tech_tags', is_array($project->tech_tags) ? implode(', ', $project->tech_tags) : '') }}" placeholder="Figma, Mobile UI, UX Design">
        </div>
        <div>
            <label>Category</label>
            <input type="text" name="category" value="{{ old('category', $project->category) }}">
        </div>
        <div>
            <label>Project URL</label>
            <input type="url" name="project_url" value="{{ old('project_url', $project->project_url) }}">
        </div>
        <div>
            <label>Order</label>
            <input type="number" name="order" value="{{ old('order', $project->order) }}">
        </div>
        <div>
            <label>
                <input type="checkbox" name="is_featured" value="1" {{ old('is_featured', $project->is_featured) ? 'checked' : '' }}>
                Featured
            </label>
        </div>
        <div>
            <label>
                <input type="checkbox" name="is_active" value="1" {{ old('is_active', $project->is_active) ? 'checked' : '' }}>
                Active
            </label>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Update Project</button>
            <a href="{{ route('admin.projects.index') }}" class="btn">Cancel</a>
        </div>
    </form>
@endsection


