@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                @foreach ($notes as $note)
                    @include('shared.note-card', ['note' => $note])
                @endforeach
            </div>
        </div>
    </div>
@endsection
