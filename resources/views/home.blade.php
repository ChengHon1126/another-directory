<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('sample.success')
    <form action="{{route('idea.create')}}" method="post">
        @csrf
        <div class="mb-3">
            <tr>
                <td>帳號</td>
                <td>
                    <input type="text" name="account">
                </td>
                <td>郵件</td>
                <td>
                    <input type="text" name="email">
                </td>
                <td>密碼</td>
                <td>
                    <input type="password" name="password">
                </td>
            </tr>
            <button type="submit">Submit</button>
        </div>
        <div>
        </div>
    </form>
    <h1>歡迎來到我的家</h1>
    @foreach ($ideas as $id)
    <h2>{{$id->name}}</h2>
    @endforeach
</body>
</html>