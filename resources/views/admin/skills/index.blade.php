@extends('admin.layout')

@section('title', 'Skills Management')

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
</style>
@endpush

@section('content')
<div style="padding: 2rem;">
    <div class="page-header">
        <h2>🎨 Skills Management</h2>
        <a href="{{ route('admin.skills.create') }}" class="btn btn-primary">➕ Add New Skill</a>
    </div>
    
    <table>
        <thead>
            <tr>
                <th>Icon</th>
                <th>Title</th>
                <th>Description</th>
                <th>Order</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($skills as $skill)
                <tr>
                    <td style="font-size: 1.5rem;">{{ $skill->icon ?? '🎯' }}</td>
                    <td style="color: #fff; font-weight: 500;">{{ $skill->title }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($skill->description, 50) }}</td>
                    <td>{{ $skill->order }}</td>
                    <td>
                        <a href="{{ route('admin.skills.edit', $skill) }}" class="btn btn-primary" style="margin-right: 0.5rem;">Edit</a>
                        <form action="{{ route('admin.skills.destroy', $skill) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this skill?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="empty-state">
                        No skills found. <a href="{{ route('admin.skills.create') }}">Create your first skill</a>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
