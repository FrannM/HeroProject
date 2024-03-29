<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Hero;

class HeroController extends Controller
{
    public function index()
    {
        $heroes = Hero::all();

        return view('admin.heroes.index', ['heroes' => $heroes]);
    }

    public function create()
    {
        return view('admin.heroes.create');

    }

    public function store(request $request){

        return $this->saveHero($request, null);
    }

    public function saveHero(request $request, $id){

        if ($id){
            $hero = Hero::find($id);
        } else {
            $hero = new Hero();


            $hero->level_id = 1;
            $hero->xp = 0;
        };


        $hero->name = $request->input('name');
        $hero->hp = $request->input('hp');
        $hero->atk = $request->input('atk');
        $hero->def = $request->input('def');
        $hero->luck = $request->input('luck');
        $hero->coins = $request->input('coins');


        $hero->save();

        return redirect()->route('heroes.index');
    }

    public function update(request $request, $id)
    {
        $hero = Hero::find($id);
        return $this->saveHero($request, $id);
    }

    public function edit($id)
    {

        $hero = Hero::find($id);

        return view('admin.heroes.edit', ['hero' => $hero]);
    }

    public function destroy($id){

        $hero = Hero::find($id);

        $hero->delete();

        return redirect()->route('heroes.index');
    }
}
