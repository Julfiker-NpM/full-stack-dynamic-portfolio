@extends('admin.layout')

@section('title', 'Create Project')

@section('content')
    <h2>Create New Project</h2>
    
    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data" style="max-width: 800px;">
        @csrf
        <div>
            <label>Title *</label>
            <input type="text" name="title" value="{{ old('title') }}" required>
        </div>
        <div>
            <label>Description *</label>
            <textarea name="description" rows="5" required>{{ old('description') }}</textarea>
        </div>
        <div>
            <label>Image</label>
            <input type="file" name="image" accept="image/*">
        </div>
        <div>
            <label>Tech Tags (comma separated)</label>
            <input type="text" name="tech_tags" value="{{ old('tech_tags') }}" placeholder="Figma, Mobile UI, UX Design">
        </div>
        <div>
            <label>Category</label>
            <input type="text" name="category" value="{{ old('category') }}">
        </div>
        <div>
            <label>Project URL</label>
            <input type="url" name="project_url" value="{{ old('project_url') }}">
        </div>
        <div>
            <label>Order</label>
            <input type="number" name="order" value="{{ old('order', 0) }}">
        </div>
        <div>
            <label>
                <input type="checkbox" name="is_featured" value="1" {{ old('is_featured') ? 'checked' : '' }}>
                Featured
            </label>
        </div>
        <div>
            <label>
                <input type="checkbox" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                Active
            </label>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Create Project</button>
            <a href="{{ route('admin.projects.index') }}" class="btn">Cancel</a>
        </div>
    </form>
@endsection


