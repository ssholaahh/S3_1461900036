<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config("app.name") }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Data Buku</h2>
        <a href="{{route('jenis-buku.create')}}" class="button button-hijau">Add Data</a>

        <form action="{{ route('jenis-buku.index') }}" method="GET">
            <input type="text" name="search" id="" class="form-control">

            <input type="submit" value="cari" class="btn btn-success">
        </form>
        <table class="table table-bordered">
            <tr>
                <th>No.</th>
                <th>Jenis Buku</th>
                <th>Action</th>
            </tr>
            @foreach($buku as $b)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$b->jenis}}</td>
                <td>
                    <a href="{{ route('jenis-buku.edit', $b->id) }}" class="btn btn-warning">Edit</a>

                    <form action="{{ route('jenis-buku.destroy', $b->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>