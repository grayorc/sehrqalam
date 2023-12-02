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
            font-size: 12px; /* Adjust the font size as needed */
        }
    </style>
</head>
<body>
<form style="display: inline" action="">
    <input name="search" value="{{request('search')}}">
    <input type="submit" value="جستجو">
</form>
<a href="{{ route('admin.posts.create') }}"><button style="color: green">ساخت پست</button></a><br>
| id | title | summery | category | creator | creator id |
<hr>
@foreach($posts as $post)
    | {{ $post->id }} |
    {{ $post->title }} |
    {{ Str::limit($post->content, 30) }} |
    {{ $post->category->name }}
{{--    [ctegory_name]--}}
    |
    {{ $post->user->name }}
    |
    {{ $post->user->id }}
    |
    <form action="{{route('admin.posts.destroy', ['post' =>$post->id])}}" method="POST" style="display: inline">
        @csrf
        @method('DELETE')
        <button type="submit">حذف</button>
    </form>
    <a href="posts/{{$post->id}}/edit"><button>ویرایش</button></a> |
    <br>
    <hr>
@endforeach
<div class="card-footer" style="display: flex">
    {{$posts->render()}}
</div>
</body>
</html>
