<!doctype html>
<html lang="en">
  <head>
    <title>Botmaster - State Details</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 style="text-align:center">
                    State Details
                </h1>
                <a class="btn btn-info float-right" href="{{route('address.state.index', )}}">State List</a>
                <a class="btn btn-warning float-right" href="{{route('address.state.edit', $data->id)}}">Edit State</a>
                <a class="btn btn-primary float-right" href="{{route('address.state.create')}}">Add State</a>
                <hr>

                <table class="table table-light table-bordered table-hover table-striped">
                    <tbody>
                        @foreach ($data->toArray() as $key=>$item)
                            <tr>
                                <td>{{ $key }}</td>
                                <td>{{ $item }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>
