<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body class="font-sans antialiased">

    <form action="/admin/auth/login" method="post">
        @csrf
        <div>
            <label>Email</label>
            <input name="email" type="email" placeholder="Input your email" />
        </div>
        <div>
            <label>Password</label>
            <input name="password" type="password" placeholder="input your password" />
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>

</html>
