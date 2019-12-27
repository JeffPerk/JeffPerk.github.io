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

@section('js_includes')
    <script>
        $(function() {
            $("[data-action=delete]").click(function(event) {
                $.ajax({
                    url: '/notes/'+$(this).data('id')+'/destroy',
                    type: 'DELETE',
                    success: function(result) {
                        $(event.target).closest(".card").addClass('hidden');
                    }
                });
            });
        });
    </script>
@endsection
