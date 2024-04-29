<!DOCTYPE html>
<html>
<head>
    <title>CCustomer List</title>
</head>
<body>
<body>
    <h1>CCustomer List</h1>
               
    <!-- Link the "New Register" button to the register route -->

    <a href="{{ route('ccustomer') }}" <button class ="btn btn-primary">ADD</button></a>
   
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($ccustomers as $ccustomer)
            <tr>
                <td>{{ $ccustomer->name }}</td>
                <td>{{ $ccustomer->email }}</td>
                <td>{{ $ccustomer->password }}</td>
                <td> 
                    <a href="{{url('ccustomer/destroy/')}}/{{$ccustomer->customer_id}}"><button class="btn btn-danger">Delete</button></a>
                    <a href="{{url('ccustomer/edit/')}}/{{$ccustomer->customer_id}}"><button class ="btn btn-primary">Edit</button>
            </td>
                
                
            </tr>
            @endforeach
            
        </tbody>
    </table>
</body>
</html>
