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
        $notes = $this->note->all();

        return view('notes.index', compact('notes'));
    }
}
