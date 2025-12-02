@extends('admin.layout')

@section('title', 'Message Details')

@push('styles')
<style>
    .message-container {
        padding: 2rem;
    }
    
    .message-header {
        padding: 1.5rem;
        background: linear-gradient(135deg, #1a1a1a 0%, #2a2a2a 100%);
        border-radius: 12px;
        border: 1px solid #333;
        margin-bottom: 2rem;
    }
    
    .message-header h2 {
        margin: 0;
        color: #fff;
    }
    
    .message-card {
        background: linear-gradient(135deg, #1a1a1a 0%, #2a2a2a 100%);
        border: 1px solid #333;
        border-radius: 12px;
        padding: 2rem;
        max-width: 900px;
    }
    
    .message-info {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1.5rem;
        margin-bottom: 2rem;
        padding-bottom: 2rem;
        border-bottom: 1px solid #333;
    }
    
    .info-item {
        display: flex;
        flex-direction: column;
    }
    
    .info-label {
        color: #aaa;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 0.5rem;
        font-weight: 500;
    }
    
    .info-value {
        color: #fff;
        font-size: 1rem;
        font-weight: 500;
    }
    
    .info-value a {
        color: #00ff88;
        text-decoration: none;
    }
    
    .info-value a:hover {
        text-decoration: underline;
    }
    
    .status-badge {
        display: inline-block;
        padding: 0.5rem 1rem;
        border-radius: 6px;
        font-size: 0.85rem;
        font-weight: 600;
    }
    
    .status-unread {
        background: #00ff88;
        color: #000;
    }
    
    .status-read {
        background: #333;
        color: #aaa;
    }
    
    .message-content {
        margin-top: 2rem;
    }
    
    .message-content-label {
        color: #aaa;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 1rem;
        font-weight: 500;
    }
    
    .message-text {
        background: #0a0a0a;
        border: 1px solid #333;
        border-radius: 8px;
        padding: 1.5rem;
        color: #fff;
        line-height: 1.6;
        white-space: pre-wrap;
        word-wrap: break-word;
    }
    
    .message-actions {
        display: flex;
        gap: 1rem;
        margin-top: 2rem;
        padding-top: 2rem;
        border-top: 1px solid #333;
    }
    
    .btn-back {
        background: #333;
        color: #aaa;
        border: 1px solid #444;
        padding: 0.6rem 1.5rem;
        border-radius: 6px;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
        display: inline-block;
    }
    
    .btn-back:hover {
        background: #444;
        color: #fff;
    }
</style>
@endpush

@section('content')
<div class="message-container">
    <div class="message-header">
        <h2>✉️ Message Details</h2>
    </div>
    
    <div class="message-card">
        <div class="message-info">
            <div class="info-item">
                <span class="info-label">Name</span>
                <span class="info-value">{{ $message->name }}</span>
            </div>
            <div class="info-item">
                <span class="info-label">Email</span>
                <span class="info-value">
                    <a href="mailto:{{ $message->email }}">{{ $message->email }}</a>
                </span>
            </div>
            <div class="info-item">
                <span class="info-label">Date</span>
                <span class="info-value">{{ $message->created_at->format('F d, Y h:i A') }}</span>
            </div>
            <div class="info-item">
                <span class="info-label">Status</span>
                <span class="info-value">
                    @if($message->is_read)
                        <span class="status-badge status-read">Read</span>
                    @else
                        <span class="status-badge status-unread">Unread</span>
                    @endif
                </span>
            </div>
        </div>
        
        <div class="message-content">
            <div class="message-content-label">Message</div>
            <div class="message-text">{{ $message->message }}</div>
        </div>
        
        <div class="message-actions">
            <a href="{{ route('admin.messages.index') }}" class="btn-back">← Back to Messages</a>
            <form action="{{ route('admin.messages.destroy', $message) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this message?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete Message</button>
            </form>
        </div>
    </div>
</div>
@endsection
