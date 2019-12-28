<div class="col-md-4" style="margin-top: 15px;">
    <div class="card" data-id="{{ $note->id }}">
        <div class="card-header">
            <div class="card-title">
                <h4>{{ $note->title }}</h4>
            </div>
            <div>
                <button class="close delete" data-dismiss="alert" data-action="delete" data-id="{{ $note->id }}" style="margin-left: 5px;">
                    <span aria-hidden="true"><i class="fas fa-trash"></i></span>
                    <span class="sr-only">Close</span>
                </button>
                <a href="{{route('notes.edit', $note->id)}}">
                    <button class="close edit" data-action="edit" data-id="{{ $note->id }}">
                        <span aria-hidden="true"><i class="fas fa-edit"></i></span>
                        <span class="sr-only">Close</span>
                    </button>
                </a>
            </div>
        </div>
        <div class="card-body">
            <h6>Creator: {{ $note->creator }}</h6>
            <p>{{ $note->message }}</p>
        </div>
        <div class="card-footer mass-delete-footer">
            <input type="checkbox" name="notes[]" class="form-check-input mass-delete" data-id="{{ $note->id }}" value="{{ $note->id }}">
        </div>
    </div>
</div>
