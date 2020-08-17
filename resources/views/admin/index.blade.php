<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="container">
    <form action="/additems" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Product Name</label>
          <input type="text" class="form-control" id="product_name" name="product_name" aria-describedby="emailHelp" >
        </div>
<div class="form-group">
          <label for="exampleInputEmail1">Product Price</label>
          <input type="text" class="form-control" id="product_price" name="product_price" aria-describedby="emailHelp" >
        </div>
<div class="form-group">
          <label for="exampleInputEmail1">Product Qty</label>
          <input type="text" class="form-control" id="product_qty" name="product_qty_available" aria-describedby="emailHelp" >
        </div>

<div class="form-group">
          <label for="exampleInputEmail1">Product description</label>
          <input type="text" class="form-control" id="product_qty" name="description" aria-describedby="emailHelp" >
        </div>
        <div class="custom-file col-xs-6 col-sm-6 ">
            <input type="file" class="custom-file-input" name="img_pro" id="customFile">
            <label class="custom-file-label" for="customFile">Choose img</label>
        </div>



        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</body>
</html>
