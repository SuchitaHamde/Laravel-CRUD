<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Add Product</title>
</head>
<body>

    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-10 ms-1 offset-md-2">
                    <div class="card">
                        <div class="card-header ">
                            Product Records <a href="/add-product" class="btn btn-primary">Add Product</a>
                        </div>
                        <div class="card-body">
                            @if(Session::has('deleted'))
                            <div class="alert alert-success" role="alert">
                               {{ Session::get('deleted') }} 
                            </div>
                            @endif
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Category</th>
                                        {{-- <th>Details</th> 
                                        <th>Image</th> --}}
                                        <th>Action</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ $product->category }}</td>
                                            {{-- <td>{{ $product->details }}</td>
                                            <td><img src="{{ asset('images') }}/{{ $product->image }}" style="width:100px;" alt=""></td>     --}}
                                            <td>
                                                <a href="/edit/{{ $product->id }}" class="btn btn-success mb-4">Edit</a>
                                                <a href="/delete/{{ $product->id }}" class="btn btn-danger mb-4 ">Delete</a>
                                                <a href="/show/{{ $product->id }}" class="btn btn-info mb-4">Read</a>
                                            </td>                                        
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
                            

                              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
       
</body>
</html>