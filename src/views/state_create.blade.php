<!doctype html>
<html lang="en">
  <head>
    <title>Botmaster - State Create</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>

    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        Create State
                        <a class="btn btn-info" style="float:right:" href="{{route('address.state.index' )}}">State List</a>
                    </div>
                    <div class="card-body">

                        @if($errors)
                            <h4>{{$errors->first()}}</h4>
                        @endif

                        <form action="{{route('address.state.store')}}" method="post">
                            <div class="form-group mt-3">
                                <label for="name">State Name</label>
                                <input id="name" class="form-control " type="text" name="name" placeholder="State Name">
                            </div>

                            <div class="form-group mt-3">
                                <label for="status">status</label>
                                <select id="status" class="form-control" name="status">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>

                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>
