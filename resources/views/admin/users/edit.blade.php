<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit user</title>
</head>
<body>

<form action="{{ route('admin.users.update' , $user->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <input name="name" id="name" type="text" placeholder="Name" value="{{$user->name}}" required>
    <input name="phone_number" id="phone_number" type="text" placeholder="phone_number" value="{{$user->phone_number}}" required>
    <input name="wallet" id="wallet" type="text" placeholder="wallet" value="{{$user->wallet}}" required>
    <input name="email" id="email" type="email" placeholder="Email" value="{{$user->email}}" required >
    <input name="password" id="password" type="password" placeholder="Password">
    <input name="password_confirmation" id="password_confirmation" type="password" placeholder="Confirm Password"><br>
    <label for="use">ارتقا یا عزل</label>
    <input type="checkbox" id="use" name="use" onclick="toggle()">

    <select name="promote" id="promote" disabled>

        @if($user->is_staff)
            <option value="user">عزل به کاربر عادی</option>
            <option value="admin">ارتقا به ادمین</option>
        @elseif($user->is_superuser)
            <option value="user">عزل به کاربر عادی</option>
            <option value="staff">عزل به کارمند</option>
        @else
            <option value="admin">ارتقا به ادمین</option>
            <option value="staff">ارتقا به کارمند</option>
        @endif
    </select><br>
    <input type="submit" value="submit">
    <script>

        function toggle() {
            var checkbox = document.getElementById("use");
            var select = document.getElementById("promote");

            select.disabled = !checkbox.checked;
        }
    </script>
</form>
</body>
</html>
