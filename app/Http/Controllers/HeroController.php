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

    public function store(request $request)
    {
        return $this->saveHero($request, null);
    }

    public function update(request $request, $id)
    {
        return $this->saveHero($request, $id);
    }

    public function saveHero(request $request, $id)
    {
        if ($id) {
            $hero = Hero::find($id);
        } else {
            $hero = new Hero();

            $hero->coins = 0;
            $hero->xp = 0;
            $hero->level_id = 1;
        };


        $hero->name = $request->input('name');
        $hero->hp = $request->input('hp');
        $hero->atk = $request->input('atk');
        $hero->def = $request->input('def');
        $hero->luck = $request->input('luck');


        $hero->save();
        return redirect()->route('admin.heroes');
    }


    public function edit($id)
    {
        $hero = Hero::find($id);

        return view('admin.heroes.edit', ['hero' => $hero]);
    }
}
