<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Historique;
use App\Currency;
use Auth;

class CurrencyController extends Controller
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
        $currencies = Currency::all();

        return view('currencies.index')->with('currencies', $currencies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('currencies.create');
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
            'currency_code' => 'required|max:100',
            'currency_title' => 'required',
            //'cover_image' =>'image|nullable|max:1999',
        ]);

        $currency_code = $request['currency_code'];
        $currency_title = $request['currency_title'];

        $historique = new Historique();
        $historique->action = 'create';
        $historique->table = 'currency';
        $historique->user_id = auth()->user()->id;

        $currency = Currency::create($request->only('currency_code', 'currency_title'));
        $historique->save();

        return redirect('currencies')->with('success', 'Currency created');
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
        $currency = Currency::findOrFail($id); //Find currency of id = $id

        return view('currencies.show', compact('currency'));
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
        $currency = Currency::findOrFail($id); //Find currency of id = $id

        return view('currencies.edit', compact('currency'));
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
            'currency_code' => 'required|max:100',
            'currency_title' => 'required',
            //'cover_image' =>'image|nullable|max:1999',
        ]);

        $currency = Currency::findOrFail($id);
        $currency->currency_code = $request->input('currency_code');
        $currency->currency_title = $request->input('currency_title');

        $historique = new Historique();
        $historique->action = 'update';
        $historique->table = 'currency';
        $historique->user_id = auth()->user()->id;

        $currency->save();
        $historique->save();

        return redirect()->route('currencies.show',
            $currency->id)->with('success',
            'Currency, '.$currency->title.' updated');
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
        $currency = Currency::findOrFail($id);
        $currency->delete();

        return redirect()->route('currencies.index')
            ->with('success',
             'Currency successfully deleted');
    }
}
