<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .pagination i {
            font-size: 12px;
        }
    </style>
</head>
<body>
<form style="display: inline" action="">
    <input name="search" value="{{request('search')}}">
    <input type="submit" value="جستجو">
</form>
<a href="{{ route('admin.products.create') }}"><button style="color: green">ساخت کالا</button></a><br>
| id | title | summery | category | creator | creator id |
<hr>
@foreach($products as $product)
    | {{ $product->id }} |
    {{ $product->title }} |
    {{ Str::limit($product->detail, 30) }} |
    {{ $product->category->name }}
    |
    {{ $product->user->name }}
    |
    {{ $product->user->id }}
    |
    {{ $product->price }}
    |
    <form action="{{route('admin.products.destroy', ['product' =>$product->id])}}" method="POST" style="display: inline">
        @csrf
        @method('DELETE')
        <button type="submit">حذف</button>
    </form>
    <a href="products/{{$product->id}}/edit"><button>ویرایش</button></a> |
    <br>
    <hr>
@endforeach
<div class="card-footer" style="display: flex">
    {{$products->render()}}
</div>
</body>
</html>
