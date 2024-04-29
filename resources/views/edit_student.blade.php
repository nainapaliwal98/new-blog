
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
</head>
<body>
    <h2>Edit Student</h2>
    <form action="{{url('student/update',$student->id)}}" method="post">
    
        @csrf
        @method('POST')
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="{{ $student->name }}"><br>

        <label for="roll_no">Roll No:</label><br>
        <input type="text" id="roll_no" name="roll_no" value="{{ $student->roll_no }}"><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="{{ $student->email }}"><br>

        <label for="contact">Contact:</label><br>
        <input type="text" id="contact" name="contact" value="{{ $student->contact }}"><br><br>

        <input type="submit" value="Update">
    </form>
</body>
</html>
