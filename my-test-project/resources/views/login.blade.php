<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    @if($errors->any())
        <div class="container">
           <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
           </ul>


        </div>
    @endif
    <form action="{{route('login')}}" method="post">
        @csrf
        <input type="email" name="email">
        <input type="password" name="password">

        <button class="btn" type="submit">submit</button>
    </form>


</div>
</body>
</html>
