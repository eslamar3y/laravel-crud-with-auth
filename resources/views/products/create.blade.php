<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>create a product</h1>
<form method="POST" action="{{route('product.store')}}" >
    @csrf
    @method('post')
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="name...">
    </div>
    <div>
        <label for="qty">Qty:</label>
        <input type="text" id="qty" name="qty" placeholder="qty...">
    </div>
    <div>
        <label for="price">Price:</label>
        <input type="text" id="price" name="price" placeholder="price...">
    </div>
    <div>
        <label for="description">Description:</label>
        <input type="text" id="description" name="description" placeholder="description...">
    </div>
    <div>
        <input type="submit" value="Save a new product">
    </div>
</form>
</body>
</html>
