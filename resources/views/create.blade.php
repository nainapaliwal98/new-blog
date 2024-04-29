<!-- resources/views/clothes/create.blade.php -->
<form method="POST" action="{{ route('store.clothes') }}">
    @csrf
    <Header><h1>Brand Listing</h1> </Header>
    <div>
        <label for="brand">Brand:</label>
        <input type="text" name="brand" id="brand">
    </div>

    <div>
        <label for="price">Price:</label>
        <input type="number" name="price" id="price">
    </div>

    <div>
        <label for="color">Color:</label>
        <input type="text" name="color" id="color">
    </div>

    <div>
        <label for="cloth_type">Cloth Type:</label>
        <input type="text" name="cloth_type" id="cloth_type">
    </div>

    <div>
        <label for="size">Size:</label>
        <input type="text" name="size" id="size">
    </div>

    <button type="submit">Submit</button>
</form>
