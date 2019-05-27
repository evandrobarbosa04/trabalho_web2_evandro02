<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemRequest;
use App\Item;
use App\Repositories\ItemRepositoryInterface;
use Illuminate\Http\Request;

use App\Http\Requests;

class ItemController extends Controller
{

    protected $items;

    public function __construct(ItemRepositoryInterface $itemRepository)
    {
        $this->items = $itemRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = $this->items->all();

        return view('home', compact('items'));
        //return response()->json(compact('items'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('item.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ItemRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ItemRequest $request)
    {
        $this->items->create($request);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param Item $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return view('item.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Item $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view('item.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ItemRequest|Request $request
     * @param Item $item
     * @return \Illuminate\Http\Response
     */
    public function update(Item $item, ItemRequest $request)
    {
        $this->items->update($item, $request);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Item $item
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function destroy(Item $item)
    {
        $this->items->delete($item);

        return redirect('/');
    }
}
