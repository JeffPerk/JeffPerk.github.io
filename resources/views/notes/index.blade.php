@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        @if (session('status'))
            @include('shared.alert', ['message' => session('status')])
        @endif
        <div class="col-md-4">
            <div class="input-group mb-3 nav-item note-search">
                <input type="text" class="form-control note-search-input" placeholder="Search Notes..." aria-label="Recipient's username" aria-describedby="button-addon2">
            </div>
        </div>
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

            // This is the mass delete functionality
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

            // This is the single delete functionality
            $("[data-action=delete]").click(function(event) {
                $.ajax({
                    url: '/notes/'+$(this).data('id')+'/destroy',
                    type: 'DELETE',
                    success: function(result) {
                        $(event.target).closest(".card").addClass('hidden');
                    }
                });
            });

            // This is the functionality for the search filter
            $(".note-search-input").keyup(function(e) {
                let value = $(this).val();
                $(".card-title>h4").each(function() {
                    let text = $(this).text().toLowerCase();
                    (text.indexOf(value) == 0) ? $(this).closest('.card').show() : $(this).closest('.card').hide();
                });
            })
        });
    </script>
@endsection
