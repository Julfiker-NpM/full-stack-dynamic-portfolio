@extends('admin.layout')

@section('title', 'Contact Messages')

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
    
    .unread-badge {
        background: #00ff88;
        color: #000;
        padding: 0.25rem 0.75rem;
        border-radius: 12px;
        font-size: 0.75rem;
        font-weight: 600;
        margin-left: 0.5rem;
    }
    
    .read-badge {
        background: #333;
        color: #aaa;
        padding: 0.25rem 0.75rem;
        border-radius: 12px;
        font-size: 0.75rem;
    }
    
    .empty-state {
        text-align: center;
        padding: 3rem;
        color: #aaa;
    }
</style>
@endpush

@section('content')
<div style="padding: 2rem;">
    <div class="page-header">
        <h2>✉️ Contact Messages
            @if($messages->where('is_read', false)->count() > 0)
                <span class="unread-badge">{{ $messages->where('is_read', false)->count() }} Unread</span>
            @endif
        </h2>
    </div>
    
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($messages as $message)
                <tr style="{{ !$message->is_read ? 'background: rgba(0, 255, 136, 0.05);' : '' }}">
                    <td style="color: #fff; font-weight: 500;">{{ $message->name }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($message->message, 50) }}</td>
                    <td>{{ $message->created_at->format('Y-m-d H:i') }}</td>
                    <td>
                        @if($message->is_read)
                            <span class="read-badge">Read</span>
                        @else
                            <span class="unread-badge">Unread</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.messages.show', $message) }}" class="btn btn-primary" style="margin-right: 0.5rem;">View</a>
                        <form action="{{ route('admin.messages.destroy', $message) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this message?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="empty-state">
                        No messages found. Messages from the contact form will appear here.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
