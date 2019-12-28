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
        <button class="btn btn-danger" id="fixedbutton">Bulk Delete</button>
    </div>
@endsection

@section('js_includes')
    <script>
        $(function() {
            // Some validation here to disable the button until some notes have been checked
            // $("#fixedbutton").attr('disabled', true);
            $("#fixedbutton").click(function(e) {
                let allIDs = [];

                $(".mass-delete:checked").each(function() {
                    allIDs.push($(this).data('id'));
                });

                if (allIDs.length > 0) {
                    $.ajax({
                        url: '/notes/mass-delete',
                        type: 'DELETE',
                        data: {
                            ids: allIDs
                        },
                        success: function(result) {
                            location.reload();
                        }
                    });
                }
            });

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
