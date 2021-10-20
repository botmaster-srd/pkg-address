<!DOCTYPE html>
<html>
<head>
	<title>States</title>
</head>
<body>
	<h1 style="text-align:center">
		This is State List Page!
	</h1>
    <hr>
    <table class="table table-light">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($state as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


</body>
</html>
