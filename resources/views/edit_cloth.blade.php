
<form method="POST" action="{{ URL('clothes/update', $clothingItem->id) }}" method="post">
    @csrf
    @method('POST')
    <Header><h1>Edit Brand Listing</h1> </Header>
    <div>
        <label for="brand">Brand:</label>
        <input type="text" name="brand"value ="{{$clothingItem->brand}}" id="brand">
    </div>

    <div>
        <label for="price">Price:</label>
        <input type="number" name="price"value="{{ $clothingItem->price }}" id="price">
    </div>

    <div>
        <label for="color">Color:</label>
        <input type="text" name="color" value="{{ $clothingItem->color }}"  id="color">
    </div>

    <div>
        <label for="cloth_type">Cloth Type:</label>
        <input type="text" name="cloth_type" value="{{ $clothingItem->cloth_type }}"  id="cloth_type">
    </div>

    <div>
        <label for="size">Size:</label>
        <input type="text" name="size" value="{{ $clothingItem->size }}"  id="size">
    </div>

    <button type="submit">Submit</button>
</form>
