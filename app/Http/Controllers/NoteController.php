<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Note;
use Illuminate\Support\Facades\DB;

class NoteController extends Controller
{
    public function create($id){
        $note = request('comment-create');
    // echo $note;
    // echo $id;
    // exit;
        $note = new Note();
        $note->note = request('comment-create');
        $note->site = request('id');
        $note->save();
        return redirect('/app/location/'.request("location"))->with('success','Note updated');
    }

    public function update($id){
        $note = request('comment-update');
        $id = request('id');
        DB::update('update notes set note = ? where id = ?',[$note,$id]);
    // echo $note;
    // echo $id;
    // exit;
        return redirect('/app/location/'.request("location"))->with('success','Note updated');
    }
}
