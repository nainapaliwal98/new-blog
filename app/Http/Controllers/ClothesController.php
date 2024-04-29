<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clothes;

class ClothesController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        
        
        $clothingItem = new Clothes();
        $clothingItem->brand = $request->brand;
        $clothingItem->price = $request->price;
        $clothingItem->color = $request->color;
        $clothingItem->cloth_type = $request->cloth_type;
        $clothingItem->size = $request->size;
        $clothingItem->save();

        
        return redirect()->route('create.clothes');
    }
    public function list()
    {
        $clothingItems = Clothes::all();
        $data = compact('clothingItems');
        return view('brand_record')->with($data);


    }
    public function destroy($id)
    {
        $clothingItems= Clothes::find($id)->delete();
        return redirect('/clothes/list');
    }
    public function edit($id)
    {
        $clothingItem = Clothes::find($id);
        return view('edit_cloth', compact('clothingItem'));
    }
    public function update(Request $request, $id)
{
   
    $validatedData = $request->validate([
        'brand' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'color' => 'required|string|max:255',
        'cloth_type' => 'required|string|max:255',
        'size' => 'required|string|max:255',
    ]);

   
    $clothingItem = Clothes::find($id);

    
    $clothingItem->brand = $validatedData['brand'];
    $clothingItem->price = $validatedData['price'];
    $clothingItem->color = $validatedData['color'];
    $clothingItem->cloth_type = $validatedData['cloth_type'];
    $clothingItem->size = $validatedData['size'];
    $clothingItem->save();

    
    return redirect('clothes/list');
}

    
}
