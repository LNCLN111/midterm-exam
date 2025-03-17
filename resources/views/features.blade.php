<html>
<head>
    <title>Laravel Features</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>
    <h1>Laravel Features</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Feature Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($features as $feature)
                <tr>
                    <td>{{ $feature->id }}</td>
                    <td>{{ $feature->name }}</td>
                    <td>{{ $feature->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>