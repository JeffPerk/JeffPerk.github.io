@extends('layouts.main')

@section('title', 'Notes')

@section('content')
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6" style="margin: auto; padding-top: 30px;">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                <h4><strong>Hello!</strong> This is the note manager.</h4>
                            </div>
                            <div class="card-body">
                                <button class="btn btn-success" data-btn-action="create-note" style="margin: auto;">New Card</button>
                                <form action="" id="card-creator-form">
                                    <div class="col-md-6 form-group">
                                        <label for="creator-name">Author</label>
                                        <input type="text" class="form-control" id="creator-name">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="message">Message</label>
                                        <input type="text" class="form-control" id="message">
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <button type="button" class="btn btn-success form-control">Create</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js_includes')
    <script>
        $(function() {
            $("#card-creator-form").hide();

            function showNoteForm(element) {
                element.hide();
                $("#card-creator-form").show();
            }

            $("[data-btn-action=create-note]").click(function() {
                showNoteForm($(this));
            });

        });
    </script>
@endsection
