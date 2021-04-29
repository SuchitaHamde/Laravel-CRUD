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
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Add New Product
                        </div>
                        <div class="card-body">
                            @if(Session::has('product-add'))
                            <div class="alert alert-success" role="alert">
                               {{ Session::get('product-add') }} 
                            </div>
                            @endif
                            <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group mb-3">
                                    <label for="name">Product Name</label>
                                    <input type="text" name="name" class="form-control"/>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="price">Product Price</label>
                                    <input type="text" name="price" class="form-control"/>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="category">Product Category</label>
                                    <input type="text" name="category" class="form-control"/>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="details">Product Details</label>
                                    <input type="text" name="details" class="form-control"/>                                </div>
                                <div class="form-group mb-3">
                                    <label for="file">Product Image</label>
                                    <input type="file" name="image" class="form-control" onchange="previewFile(this)"/>
                                    {{-- <img id="previewImg" alt="product image" style="max-width:130px;margin-top:20px;"> --}}
                                </div>

                                <button type="submit" class="btn btn-primary ">
                                    Submit
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
       {{-- <script>
            function previewFile(input){
                var image=$("input[type=file]").get(0).images[0];
                if(image)
                {
                    var reader = new FileReader();
                    reader.onload = function(){
                        $('#previewImg').attr("src",reader.result);
                    }
                    reader.readAsDataURL(file);
                }
        }
       </script> --}}
</body>
</html>