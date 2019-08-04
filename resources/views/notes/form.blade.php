@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('notes.save') }}" method="POST">
                @csrf
                @if(isset($note))
                    <input type="hidden" name="id" value="{{ $note->id }}"/>
                @endif
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter title" value="{{ isset($note) ? $note->title : '' }}">
                </div>
                <div class="form-group">
                    <label for="text">Text</label>
                    <textarea class="form-control" id="text" name="text" rows="5">{{ isset($note) ? $note->text : '' }}</textarea>
                </div>
                <div class="form-group">
                    <label for="color">Color</label>
                    <select class="custom-select" name="color" id="color">
                        <option 
                        @if(isset($note) && $note->color == 'primary')
                            selected
                        @endif
                        value="primary">Primary</option>
                        <option 
                        @if(isset($note) && $note->color == 'secondary')
                            selected
                        @endif
                        value="secondary">Secondary</option>
                        <option 
                        @if(isset($note) && $note->color == 'success')
                            selected
                        @endif
                        value="success">Success</option>
                        <option 
                        @if(isset($note) && $note->color == 'danger')
                            selected
                        @endif
                        value="danger">Danger</option>
                        <option 
                        @if(isset($note) && $note->color == 'warning')
                            selected
                        @endif
                        value="warning">Warning</option>
                        <option 
                        @if(isset($note) && $note->color == 'info')
                            selected
                        @endif
                        value="info">Info</option>
                        <option 
                        @if(isset($note) && $note->color == 'light')
                            selected
                        @endif
                        value="light">Light</option>
                        <option 
                        @if(isset($note) && $note->color == 'dark')
                            selected
                        @endif
                        value="dark">Dark</option>
                    </select>
                </div>  
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
