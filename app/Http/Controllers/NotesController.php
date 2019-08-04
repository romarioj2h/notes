<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function index() {
        $notes = Note::paginate(10);

        return view('notes.index', [
            'notes' => $notes
        ]);
    }

    public function note($id) {
        $note = Note::findOrFail($id);
        
        return view('notes.note', [
            'note' => $note
        ]);
    }

    public function delete($id) {
        $note = Note::findOrFail($id);
        $note->delete();

        return redirect()->route('notes.index');
    }

    public function edit($id) {
        $note = Note::findOrFail($id);
        return view('notes.form', [
            'note' => $note
        ]);
    }

    public function add() {
        return view('notes.form');
    }

    public function create() {
        return view('notes.create');
    }

    public function save(Request $request) {
        if ($request->has('id')) {
            $note = Note::findOrFail($request->input('id'));
        } else {
            $note = new Note();
        }
        $note->title = $request->input('title');
        $note->text = $request->input('text');
        $note->color = $request->input('color');
        $note->save();
        
        return redirect()->route('notes.index');
    }
}
