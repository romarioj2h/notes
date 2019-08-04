@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h3>
                Notes List
                <a href="{{ route('notes.add') }}" class="btn btn-primary">Add new</a>
            </h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Updated at</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($notes as $note)
                        <tr>
                            <th scope="row">{{ $note->id }}</th>
                            <td>{{ $note->title }}</td>
                            <td>{{ $note->created_at }}</td>
                            <td>{{ $note->updated_at }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('notes.note', ['id' => $note->id]) }}">See</a>
                                <a class="btn btn-warning" href="{{ route('notes.edit', ['id' => $note->id]) }}">Edit</a>
                                <a class="btn btn-danger" href="{{ route('notes.delete', ['id' => $note->id]) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $notes->links() }}
        </div>
    </div>
</div>
@endsection
