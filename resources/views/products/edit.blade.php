<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Edit a product</h1>
<form method="POST" action="{{route('product.update', ['product'=>$product])}}" >
    @csrf
    @method('put')
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="name..." value="{{$product->name}}">
    </div>
    <div>
        <label for="qty">Qty:</label>
        <input type="text" id="qty" name="qty" placeholder="qty..." value="{{$product->qty}}">
    </div>
    <div>
        <label for="price">Price:</label>
        <input type="text" id="price" name="price" placeholder="price..." value="{{$product->price}}">
    </div>
    <div>
        <label for="description">Description:</label>
        <input type="text" id="description" name="description" placeholder="description..." value="{{$product->description}}">
    </div>
    <div>
        <input type="submit" value="Update product">
    </div>
</form>
</body>
</html>
