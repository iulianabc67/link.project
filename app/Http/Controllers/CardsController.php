<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Auth;


class CardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public  function __construct()
    {
        //$this->middleware('auth');



        /*
         * $this->middleware('auth');  //toate metodele pot fi accesate doar logat

         */
        /*
        * $this->middleware('auth', ['only' => ['create', 'store', 'edit', 'delete']]);//lista de metode ce pot fi accesate doar logat
        */
        /*
         * $this->middleware('auth', ['except' => ['cart', 'listProducts']]); //lista de metode ce pot fi accesate nelogat
         */
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards = card::latest()->paginate(5);

        return view('cards',compact('cards'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listCards()
    {
        $cards = Card::all();

        return view('cards', compact('cards'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Card $card)
    {
        return view('cards',compact('card',$card));
    }
}