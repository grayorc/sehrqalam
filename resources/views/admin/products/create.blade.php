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
<form action="{{ route('admin.products.store') }}" method="post">
    @csrf

    <input name="title" id="title" type="text" placeholder="title" required><br><br>
    <input name="slug" id="slug" type="text" placeholder="slug" required ><br><br>
    <input name="price" id="price" type="number" placeholder="price" required ><br><br>
    <input name="category" id="category" type="text" placeholder="category" required ><br><br>
    <textarea name="detail" id="detail" placeholder="detail" required></textarea><br><br>
    <input type="submit" value="submit">
</form>
</body>
</html>
