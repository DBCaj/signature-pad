<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>List</title>
  <x-bootstrap-package />
</head>
<body>
  
  <div class="container">
    <a href="{{ route('signpad.home') }}" style="text-size:10px; text-decoration:underline">Back</a>
    <br><br>
    <h1>Signature List</h1>
    <br>

    <div class="table-responsive">
      <table class="table table-striped table-dark table-bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Signature</th>
            </tr>
          </thead>
          <tbody>
          @forelse($signatures as $signature)
            <tr>
              <td>{{ $signature->id }}</td>
              <td>{{ $signature->name }}</td>
              <td>
                <img src="{{ asset($signature->signature_location) }}" alt="{{ $signature->signature_name }}" style="width:191px;height:80px">
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="3">No Data Available.</td>
            </tr>
          @endforelse
          </tbody>
      </table>
    </div>
  </div>

</body>
</html>