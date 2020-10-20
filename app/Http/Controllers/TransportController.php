<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Historique;
use App\Transport;
use Auth;

class TransportController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'isAdmin']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transports = Transport::all();

        return view('transports.index')->with('transports', $transports);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transports.create');
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
            //'cover_image' =>'image|nullable|max:1999',
        ]);

        $title = $request['title'];

        $historique = new Historique();
        $historique->action = 'create';
        $historique->table = 'transport';
        $historique->user_id = auth()->user()->id;

        $transport = Transport::create($request->only('title'));
        $historique->save();

        return redirect('transports')->with('success', 'Transport created');
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
        $transport = Transport::findOrFail($id); //Find transport of id = $id

        return view('transports.show', compact('transport'));
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
        $transport = Transport::findOrFail($id); //Find transport of id = $id

        return view('transports.edit', compact('transport'));
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
            //'cover_image' =>'image|nullable|max:1999',
        ]);

        $transport = Transport::findOrFail($id);
        $transport->title = $request->input('title');

        $historique = new Historique();
        $historique->action = 'update';
        $historique->table = 'transport';
        $historique->user_id = auth()->user()->id;

        $transport->save();
        $historique->save();

        return redirect()->route('transports.index',
            $transport->id)->with('success',
            'Transport, '.$transport->title.' updated');
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
        $transport = Transport::findOrFail($id);
        $transport->delete();

        return redirect()->route('transports.index')
            ->with('success',
             'Transport successfully deleted');
    }
}
