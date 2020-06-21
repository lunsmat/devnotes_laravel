<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;

class NotesController extends Controller
{

    private $response = [
        'error' => '',
        'result' => []
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = Note::all(['id', 'title']);

        $this->response['result'] = $notes;

        return $this->response;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = $request->input('title');
        $body = $request->input('body');

        if ($title && $body) {
            $note = new Note();

            $note->title = $title;
            $note->body = $body;

            $note->save();

            $this->response['result'] = $note;
        } else {
            $this->response['error'] = "The params (title, body) was not send";
        }

        return $this->response;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $note = Note::find($id);

        if ($note) {
            $this->response['result'] = $note;
        } else {
            $this->response['error'] = 'ID that was send, don\'t exists in database';
        }

        return $this->response;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
