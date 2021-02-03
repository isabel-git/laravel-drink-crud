<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Drink;

class DrinkController extends Controller
{
    public function index() {

        $drinks = Drink::all();
        return view('pages.drink-index', compact('drinks'));
    }
    public function show($id) {

        $drink = Drink::findOrFail($id);
        return view('pages.drink-show', compact('drink'));
    }
    public function create() {

        return view('pages.drink-create');
    }
    public function store(Request $request) {

        // $newDrink = new Drink;

        // $newDrink -> name = $request -> get('name'); 
        // $newDrink -> degres = $request -> get('degres');
        // $newDrink -> price = $request -> get('price');

        // $newDrink -> save();

        // dd($newDrink);
        // $newDrink = Drink::create($request -> all());
        return redirect() -> route('show', $newDrink -> id);
    } 
    public function edit($id) {

        $drink = Drink::findOrFail($id);
        return view('pages.drink-edit', compact('drink'));
    }
    public function update(Request $request, $id) {

        // dd($request -> all(), $id);
        $drink = Drink::findOrFail($id);
        $drink -> update($request -> all());

        return redirect() -> route('show', $drink -> id);

    }
    public function delete($id) {

        $drink = Drink::findOrFail($id);
        $drink -> delete();
        
        return redirect() -> route('index');
    }
}
