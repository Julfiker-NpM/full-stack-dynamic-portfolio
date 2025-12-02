@extends('admin.layout')

@section('title', 'Projects Management')

@push('styles')
<style>
    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
        padding: 1.5rem;
        background: linear-gradient(135deg, #1a1a1a 0%, #2a2a2a 100%);
        border-radius: 12px;
        border: 1px solid #333;
    }
    
    .page-header h2 {
        margin: 0;
        color: #fff;
    }
    
    .empty-state {
        text-align: center;
        padding: 3rem;
        color: #aaa;
    }
    
    .empty-state a {
        color: #00ff88;
        text-decoration: none;
    }
    
    .empty-state a:hover {
        text-decoration: underline;
    }
</style>
@endpush

@section('content')
<div style="padding: 2rem;">
    <div class="page-header">
        <h2>📁 Projects Management</h2>
        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">➕ Add New Project</a>
    </div>
    
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Category</th>
                <th>Featured</th>
                <th>Active</th>
                <th>Order</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($projects as $project)
                <tr>
                    <td style="color: #fff; font-weight: 500;">{{ $project->title }}</td>
                    <td>{{ $project->category ?? '-' }}</td>
                    <td>
                        @if($project->is_featured)
                            <span style="color: #00ff88;">✓ Yes</span>
                        @else
                            <span style="color: #888;">No</span>
                        @endif
                    </td>
                    <td>
                        @if($project->is_active)
                            <span style="color: #00ff88;">✓ Yes</span>
                        @else
                            <span style="color: #888;">No</span>
                        @endif
                    </td>
                    <td>{{ $project->order }}</td>
                    <td>
                        <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-primary" style="margin-right: 0.5rem;">Edit</a>
                        <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this project?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="empty-state">
                        No projects found. <a href="{{ route('admin.projects.create') }}">Create your first project</a>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
