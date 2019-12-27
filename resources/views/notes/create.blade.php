@extends('layouts.main')

@section('title')
    Create Note
@endsection

@section('content')
    <div class="container-fluid">
        <form action="{{ route('notes.store') }}" method="POST" id="card-creator-form">
            @csrf
            <div class="col-md-6 form-group">
                <label for="creator-name">Author</label>
                <input type="text" class="form-control" id="creator-name" name="creator" required>
            </div>
            <div class="col-md-6 form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="col-md-6 form-group">
                <label for="message">Message</label>
                <textarea type="text" class="form-control" name="message" id="message" required></textarea>
            </div>
            <div class="col-md-1 form-group">
                <button class="btn btn-success form-control">Create</button>
            </div>
        </form>
    </div>
@endsection
