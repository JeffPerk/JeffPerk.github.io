<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Repositories\Note\NoteRepositoryInterface;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    protected $note;

    /**
     * NoteController constructor
     *
     * @param NoteRepositoryInterface
     */
    public function __construct(NoteRepositoryInterface $note)
    {
        $this->note = $note;
    }

    /**
     * Gets all notes
     */
    public function index()
    {
        $notes = $this->note->all();

        return view('notes.index', compact('notes'));
    }

    /**
     * Directs to the create a note view
     */
    public function create()
    {
        return view('notes.create');
    }

    /**
     * Stores the newly created note
     */
    public function store()
    {
        $this->note->store(request()->all());

        return redirect(route('notes.index'))->with('status', 'Note successfully created!');
    }

    /**
     * Deletes a note
     */
    public function destroy($id)
    {
        $this->note->delete($id);

        return response()->json([
            'success' => true,
            'message' => "Note deleted successfully!"
        ]);
    }

    /**
     * Directs the user to the edit a note view
     */
    public function edit($id)
    {
        $note = $this->note->find($id);

        return view('notes.edit', compact('note'));
    }

    /**
     * Updates a note
     */
    public function update($id)
    {
        $this->note->update($id, request()->all());

        return redirect(route('notes.index'))->with('status', 'Note successfully updated!');
    }

    /**
     * Mass deletion of notes
     */
    public function massDelete()
    {
        if (!request('ids')) {
            return response()->json([
                'success' => false,
                'message' => "No ids were provided"
            ]);
        }

        foreach (request('ids') as $id) {
            $this->note->delete($id);
        }

        return response()->json([
            'success' => true,
            'message' => "Notes deleted!"
        ]);
    }
}
