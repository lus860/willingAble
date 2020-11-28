<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NotesList;
use Illuminate\Support\Facades\Auth;

class NotesListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['notesLists'] = NotesList::where(['user_id' => Auth::id()])->get();
        $data['title'] = 'Notes Lists';
        return view('notes_list.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Add Notes List';
        return view('notes_list.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:30||min:2|',
            'description' => 'required|min:2|',
        ]);

        $notesList = new NotesList([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'user_id' => Auth::id(),
        ]);

        if ($notesList->save()) {

            return redirect('/notes-list')->with('success', 'Note saved !!');
        }

        return redirect()->back()->with('error', 'Some mistake went !!');
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['notesList'] = NotesList::find($id);
        $data['title'] = 'Edit Notes';

        return view('notes_list.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:30||min:2|',
            'description' => 'required|min:2|',
        ]);

        $note = NotesList::find($id);

        if ($note) {
            if ($note->user_id == Auth::id()) {
                $newNote = $note->update(['title' => $request->get('title'), 'description' => $request->get('description')]);
                if ($newNote) {
                    $status = 'success';
                    $meesages = 'Note updated !!';
                } else {

                    return redirect()->back()->with('error', 'Some mistake went !!');
                }

            } else {
                $status = 'error';
                $meesages = 'You have no rights!';
            }

            return redirect('/notes-list')->with($status, $meesages);
        }

        return redirect()->back()->with('error', 'Some mistake went !!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $note = NotesList::find($id);
        if ($note) {
            if ($note->user_id == Auth::id()) {
                if ($note->delete()) {
                    $status = 'success';
                    $meesages = 'Note deleted !!';
                } else {

                    return redirect()->back()->with('error', 'Some mistake went !!');
                }

            } else {
                $status = 'error';
                $meesages = 'You have no rights!';
            }

            return redirect('/notes-list')->with($status, $meesages);
        }

        return redirect()->back()->with('error', 'Some mistake went !!');
    }
}
