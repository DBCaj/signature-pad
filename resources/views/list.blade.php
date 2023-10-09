<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>List</title>
</head>
<body>
  <a href="{{ route('signpad.home') }}" style="text-size:10px; text-decoration:underline">Back</a>
  <h1>List</h1>
  <table border="1">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Signature</th>
      </tr>
    </thead>
    <tbody>
      @foreach($signatures as $signature)
      <tr>
        <td>{{ $signature->id }}</td>
        <td>{{ $signature->name }}</td>
        <td>{{ $signature->signature }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>