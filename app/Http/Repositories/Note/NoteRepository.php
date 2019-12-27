<?php

namespace App\Repositories\Note;

use App\Models\Note;

class NoteRepository implements NoteRepositoryInterface
{
    /**
     * Get a note by ID
     *
     * @param int
     * @return collection
     */
    public function find($id)
    {
        return Note::find($id);
    }

    /**
     * Get all notes
     *
     * @return mixed
     */
    public function all()
    {
        return Note::all();
    }

    /**
     * Deletes a note
     *
     * @param int
     */
    public function delete($id)
    {
        Note::destory($id);
    }

    /**
     * Updates a note
     *
     * @param int
     * @param array
     */
    public function update($id, array $note_data)
    {
        Note::find($id)->update($note_data);
    }

    /**
     * Creates new note
     *
     * @param array
     */
    public function store(array $note_data)
    {
        Note::create($note_data);
    }
}
