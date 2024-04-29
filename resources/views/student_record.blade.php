<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
</head>
<body>

    <h1>Student List</h1>

    <button onclick="location.href='{{ route('create.student') }}'">Add New Student</button>
   
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Roll No</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr> 
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->roll_no }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->contact }}</td>
                <td><a href="{{url('/student/destroy/')}}/{{$student->id}}"><button class="btn btn-danger">Delete</button></a> </td>
                <td><a href="{{url('/student/edit/')}}/{{$student->id}}"><button class="btn btn-danger">Edit</button></a> </td>
                </tr>
            @endforeach
            </tbody>
    </table>
</body>
</html>
