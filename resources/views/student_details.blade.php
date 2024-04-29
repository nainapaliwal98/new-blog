<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details Form</title>
</head>
<body>
    <h2>Student Details Form</h2>
    <form method="POST" action="{{ route('store.student') }}">
        @csrf
        <label for="id">ID:</label><br>
        <input type="text" id="id" name="id"><br>

        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>

        <label for="roll_no">Roll No:</label><br>
        <input type="text" id="roll_no" name="roll_no"><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>

        <label for="contact">Contact:</label><br>
        <input type="text" id="contact" name="contact"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
