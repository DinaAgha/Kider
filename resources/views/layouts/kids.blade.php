<!DOCTYPE html>
<html lang="en">
<head>
  <title>school Kids</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    @include('includes.head')
    @include('includes.navbar')

<div class="container">
  <h2>School Kids Data</h2>
  <table class="table table-hover">
    <thead>
      <tr>
      <th>Child Name</th>
      <th>Child Age</th>
      <th>Gurdian Name</th>
      <th>Gurdian Email</th>
      <th>Phone</th>
      <th>Classes</th>
      <th>Edit</th>
      <th>Show</th>
      <th>Delete</th>
 
      </tr>
    </thead>
    <tbody>
      @foreach ($kis as $kid)
      <tr>
      <td>{{ $kid->cname }}</td>
      <td>{{ $kid->age }}</td>
      <td>{{ $kid->gname }}</td>
      <td>{{ $kid->email }}</td>
      <td>{{ $kid->phone }}</td>
      <td>{{ $kid->class }}</td>

        <td><a href="{{ route('editKids', $kid->id)}}">Edit</a></td>
        <td><a href="{{ route('showKids', $kid->id)}}">Show</a></td>
        <td>
          <form action="{{ route('delKid')}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="hidden" value="{{ $kid->id }}" name="id">
            <input type="submit" value="Delete" onclick="return confirm('Are you sure you want to delete this client?')">
          </form>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>

</body>
</html>
