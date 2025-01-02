<?php

namespace App\Http\Controllers;

use App\Models\Item;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $items = Item::all();
        return view('items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // new code
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $name = time() . '.' . $image->getClientOriginalExtension();
        //     $destinationPath = public_path('/images');
        //     $image->move($destinationPath, $name);
        // }

        // Item::create([
        //     'name' => $request->name,
        //     'description' => $request->description,
        //     'image' => $name,
        // ]);

        // return redirect()->route('items.index')->with('success', 'Item created successfully.');

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }
        Item::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imageName
        ]);
        return redirect()->route('items.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $item = Item::findOrFail($id);
        return view('items.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $item = Item::findOrFail($id);

        $imageName = $item->image;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        $item->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imageName
        ]);
        return redirect()->route('items.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $item = Item::findOrFail($id);
        if ($item->image) {
            unlink(public_path('images/' . $item->image));
        }
        $item->delete();
        return redirect()->route('items.index');
    }
}
