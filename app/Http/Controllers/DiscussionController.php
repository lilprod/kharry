<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discussion;
use App\Historique;
use Auth;

class DiscussionController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discussions = Discussion::orderby('id', 'desc')->paginate(3); //show only 5 items at a time in descending order

        return view('forum.index', compact('discussions'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forum.create');
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
            'title' => 'required',
            'description' => 'required',
            //'cover_image' =>'image|nullable|max:1999',
        ]);

        $discussion = new Discussion();
        $discussion->title = $request->input('title');
        $discussion->description = $request->input('description');
        $discussion->user_id = auth()->user()->id;
        $discussion->username = auth()->user()->name.' '.auth()->user()->firstname;

        $historique = new Historique();
        $historique->action = 'create';
        $historique->table = 'discussion';
        $historique->user_id = auth()->user()->id;

        $discussion->save();
        $historique->save();

        return redirect('forum')->with('success', 'Discussion created');
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
        $discussion = Discussion::findOrFail($id); //Find discussion of id = $id

        $answers = $discussion->answers;

        return view('forum.show', compact('discussion', 'answers'));
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
        $discussion = Discussion::findOrFail($id); //Find discussion of id = $id

        return view('forum.edit', compact('discussion'));
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
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            //'cover_image' =>'image|nullable|max:1999',
        ]);

        $discussion = Discussion::findOrFail($id);
        $discussion->title = $request->input('title');
        $discussion->description = $request->input('description');
        $discussion->user_id = auth()->user()->id;
        $discussion->username = auth()->user()->name.' '.auth()->user()->firstname;

        $historique = new Historique();
        $historique->action = 'update';
        $historique->table = 'discussion';
        $historique->user_id = auth()->user()->id;

        $discussion->save();
        $historique->save();

        return redirect()->route('forum.index',
            $discussion->id)->with('success',
            'Discussion, '.$discussion->title.' updated');
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
        $discussion = Discussion::findOrFail($id);
        $discussion->delete();

        return redirect()->route('forum.index')
            ->with('success',
             'Discussion successfully deleted');
    }
}
