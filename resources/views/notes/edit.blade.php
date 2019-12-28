@extends('layouts.main')

@section('title')
    Edit Note
@endsection

@section('content')
    <div class="container-fluid">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h4>{{ $note->title }}</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('notes.update', $note->id) }}" method="POST" id="card-creator-form">
                        @csrf
                        @method('PUT')
                        <div class="col-md-6 form-group">
                            <label for="creator-name">Author</label>
                            <input type="text" class="form-control" id="creator-name" name="creator" value="{{ $note->creator }}" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $note->title }}" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="message">Message</label>
                            <textarea type="text" class="form-control" name="message" id="message" required>{!! $note->message !!}</textarea>
                        </div>
                        <div class="col-md-2 form-group">
                            <button class="btn btn-success form-control">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
