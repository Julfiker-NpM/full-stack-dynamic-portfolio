@extends('admin.layout')

@section('title', 'Edit Skill')

@push('styles')
<style>
    .form-container {
        padding: 2rem;
    }
    
    .form-header {
        padding: 1.5rem;
        background: linear-gradient(135deg, #1a1a1a 0%, #2a2a2a 100%);
        border-radius: 12px;
        border: 1px solid #333;
        margin-bottom: 2rem;
    }
    
    .form-header h2 {
        margin: 0;
        color: #fff;
    }
    
    .form-group {
        margin-bottom: 1.5rem;
    }
    
    .form-group label {
        display: block;
        color: #aaa;
        margin-bottom: 0.5rem;
        font-size: 0.9rem;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 0.75rem;
        border: 1px solid #333;
        border-radius: 6px;
        background: #0a0a0a;
        color: #fff;
        font-size: 1rem;
    }
    
    .form-group input:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: #00ff88;
        box-shadow: 0 0 0 3px rgba(0, 255, 136, 0.1);
    }
    
    .form-actions {
        display: flex;
        gap: 1rem;
        margin-top: 2rem;
    }
    
    .btn {
        padding: 0.6rem 1.5rem;
        border-radius: 6px;
        font-weight: 500;
        text-decoration: none;
        display: inline-block;
        transition: all 0.3s ease;
    }
    
    .btn-cancel {
        background: #333;
        color: #aaa;
        border: 1px solid #444;
    }
    
    .btn-cancel:hover {
        background: #444;
        color: #fff;
    }
</style>
@endpush

@section('content')
<div class="form-container">
    <div class="form-header">
        <h2>✏️ Edit Skill</h2>
    </div>
    
    <form action="{{ route('admin.skills.update', $skill) }}" method="POST" style="max-width: 800px; background: linear-gradient(135deg, #1a1a1a 0%, #2a2a2a 100%); padding: 2rem; border-radius: 12px; border: 1px solid #333;">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label>Icon (Emoji)</label>
            <input type="text" name="icon" value="{{ old('icon', $skill->icon) }}" placeholder="🎨">
            <small style="color: #666; font-size: 0.85rem; margin-top: 0.25rem; display: block;">Enter an emoji icon (e.g., 🎨, 🧩, 📱)</small>
        </div>
        
        <div class="form-group">
            <label>Title *</label>
            <input type="text" name="title" value="{{ old('title', $skill->title) }}" required placeholder="Enter skill title">
        </div>
        
        <div class="form-group">
            <label>Description *</label>
            <textarea name="description" rows="5" required placeholder="Enter skill description">{{ old('description', $skill->description) }}</textarea>
        </div>
        
        <div class="form-group">
            <label>Order</label>
            <input type="number" name="order" value="{{ old('order', $skill->order) }}" placeholder="0">
            <small style="color: #666; font-size: 0.85rem; margin-top: 0.25rem; display: block;">Lower numbers appear first</small>
        </div>
        
        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Update Skill</button>
            <a href="{{ route('admin.skills.index') }}" class="btn btn-cancel">Cancel</a>
        </div>
    </form>
</div>
@endsection
