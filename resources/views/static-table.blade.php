<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Table</title>
</head>
<body>
    @php
        $tableData = [
            ['id' => 1, 'name' => 'John', 'email' => 'john@example.com'],
            ['id' => 2, 'name' => 'Henry', 'email' => 'henry@example.com'],
            // Add more data as needed
        ];
    @endphp

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tableData as $data)
            <tr>
                <td>{{ $data['id'] }}</td>
                <td>{{ $data['name'] }}</td>
                <td>{{ $data['email'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
