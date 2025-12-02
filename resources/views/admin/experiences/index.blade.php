@extends('admin.layout')

@section('title', 'Experiences Management')

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
        <h2>💼 Experiences Management</h2>
        <a href="{{ route('admin.experiences.create') }}" class="btn btn-primary">➕ Add New Experience</a>
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
            @forelse($experiences as $experience)
                <tr>
                    <td style="font-size: 1.5rem;">{{ $experience->icon ?? '⭐' }}</td>
                    <td style="color: #fff; font-weight: 500;">{{ $experience->title }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($experience->description, 50) }}</td>
                    <td>{{ $experience->order }}</td>
                    <td>
                        <a href="{{ route('admin.experiences.edit', $experience) }}" class="btn btn-primary" style="margin-right: 0.5rem;">Edit</a>
                        <form action="{{ route('admin.experiences.destroy', $experience) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this experience?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="empty-state">
                        No experiences found. <a href="{{ route('admin.experiences.create') }}">Create your first experience</a>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
