<?php

namespace App\Http\Controllers;

use App\Repositories\NoteRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoteController extends Controller
{
    protected $noteRepository;

    public function __construct(NoteRepository $noteRepository)
    {
        $this->noteRepository = $noteRepository;
    }

    public function index()
    {
        $notes = $this->noteRepository->getAll();
        return view("backend.note.list", compact("notes"));
    }

    public function showFormCreate()
    {
        return view("backend.note.create");
    }

    public function create(Request $request)
    {
        $request->validate([
            "name" => "required | max:10 | min:3",
            "category" => "required",
            "description" => "required"
        ]);
        $this->noteRepository->create($request);
        return redirect()->route("notes.index");
    }

    public function showDetail($id)
    {
        $note = $this->noteRepository->getById($id);
        return view("backend.note.detail", compact("note"));
    }

    public function showFormUpdate($id)
    {
        $note = DB::table("notes")->where('id','=',$id)->get()->first();
        return view("backend.note.update", compact("note"));
    }

    public function update(Request $request, $id)
    {
//        dd($id);
        $data = $request->only('name','category','description');
        DB::table('notes')->where('id','=',$id)->update($data);
        return redirect()->route("notes.index");
    }

    public function destroy($id)
    {
//        $note = Note::findOrFail($id);
//        $note->delete();
        DB::table('notes')->where('id',$id)->delete();
        return redirect()->route("notes.index");
    }

    public function search(Request $request)
    {
        $notes = $this->noteRepository->search($request);
        return view("backend.note.list", compact("notes"));
    }
}
