<?php

namespace App\Repositories\Note;

interface NoteRepositoryInterface
{
    /**
     * Find a note by ID
     *
     * @param int
     */
    public function find($id);

    /**
     * Get all notes
     *
     * @return mixed
     */
    public function all();

    /**
     * Deletes a note
     *
     * @param int
     */
    public function delete($id);

    /**
     * Updates a note
     *
     * @param int
     * @param array
     */
    public function update($id, array $note_data);

    /**
     * Creates new note
     *
     * @param array
     */
    public function store(array $note_data);
}
