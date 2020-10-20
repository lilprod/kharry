<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;
use App\Discussion;
use App\Historique;

class AnswerController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required',
            //'cover_image' =>'image|nullable|max:1999',
        ]);

        $answer = new Answer();
        $answer->body = $request->input('body');
        $answer->discussion_id = $request->input('discussion_id');
        $answer->user_id = auth()->user()->id;
        $answer->username = auth()->user()->name.' '.auth()->user()->firstname;

        $historique = new Historique();
        $historique->action = 'create';
        $historique->table = 'answer';
        $historique->user_id = auth()->user()->id;

        $answer->save();
        $historique->save();

        return redirect()->route('forum.show',
        $answer->discussion_id);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $answer = Answer::findOrFail($id);
        if($answer->user_id == auth()->user()->id){

            $discussion = Discussion::findOrFail($answer->discussion_id);
            $answer->delete();

            return redirect()->route('forum.show', $discussion->id);
            
        }else{
            return redirect('forum')->with('error', 'You Have permission to delete this comment');
        }
        
    }
}
