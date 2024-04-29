<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brands Record Database</title>
</head>
<body>
<button onclick="location.href='{{ route('create.clothes') }}'">Add New Brand 
</button>
   
    <h1>Record</h1>
    <table border ="1">
        <thead>
            <tr>
                <th>Brand</th>
                <th>Price</th>
                <th>Color</th>
                <th>Cloth_type</th>
                <th>Size</th>
                <th>Action</th>
</tr>
        </thead> 
        <tbody>
             @foreach ($clothingItems as $clothingItem)    
                 <tr>  
                    <td>{{$clothingItem->brand}}</td>
                    <td>{{$clothingItem->price}}</td>
                    <td>{{$clothingItem->color}}</td>
                    <td>{{$clothingItem->cloth_type}}</td>
                    <td>{{$clothingItem->size}}</td>
                    <td><a href="{{url('/clothes/destroy/')}}/{{$clothingItem->id}}"><button class="btn btn-danger">Delete</button></a> </td>
                    <td><a href="{{url('/clothes/edit/')}}/{{$clothingItem->id}}"><button class="btn btn-danger">Edit</button></a> </td>
                </tr>
            @endforeach
            </tbody>
    </table>
</body>
</html>
                   

</body>
</html>