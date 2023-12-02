<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{ route('admin.products.update', $product->id) }}" method="post">
    @csrf
    @method('PATCH')
    <input name="title" id="title" type="text" placeholder="title" required value="{{$product->title}}"><br><br>
    <input name="slug" id="slug" type="text" placeholder="slug" required value="{{$product->slug}}"><br><br>
    <input name="price" id="price" type="number" placeholder="price" required value="{{$product->price}}"><br><br>
    <input name="category" id="category" type="text" placeholder="category" required value="{{$product->category->name}}"><br><br>
    <textarea name="detail" id="detail" placeholder="detail" required>{{$product->detail}}</textarea><br><br>
    <input type="submit" value="submit">
</form>
</body>
</html>
