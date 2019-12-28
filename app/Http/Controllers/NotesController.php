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

    public function index()
    {
        $notes = $this->note->all();

        return view('notes.index', compact('notes'));
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store()
    {
        $this->note->store(request()->all());

        request()->session()->flash('success', 'Note was successfully created!');

        return redirect(route('notes.index'));
    }

    public function destroy($id)
    {
        $this->note->delete($id);

        return response()->json([
            'success' => true,
            'message' => "Note deleted successfully!"
        ]);
    }

    public function edit($id)
    {
        $note = $this->note->find($id);

        return view('notes.edit', compact('note'));
    }

    public function update($id)
    {
        $this->note->update($id, request()->all());

        request()->session()->flash('success', 'Note successfully updated!');

        return redirect(route('notes.index'));
    }

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
