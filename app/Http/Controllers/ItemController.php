<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();

        return view('admin.items.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->saveItem($request, null);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::find($id);

        return view('admin.items.edit', ['item'=>$item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Item::find($id);
        return $this->saveItem($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::find($id);

        $item->delete();

        return redirect()->route('items.index');

    }

    public function saveItem(request $request, $id)
    {

        if ($id) {
            $item = Item::find($id);
        } else {
            $item = new Item();
        };

        $item->name = $request->input('name');
        $item->hp = $request->input('hp');
        $item->atk = $request->input('atk');
        $item->def = $request->input('def');
        $item->luck = $request->input('luck');
        $item->cost = $request->input('cost');

        $item->save();

        return redirect()->route('items.index');
    }
}
