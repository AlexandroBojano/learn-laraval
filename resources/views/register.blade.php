<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

    <h1>register</h1>

    <a href="/login">login</a>

    <form action="/register" method="post">
        @csrf

        <input type="text" name="name" id="name" class="name" placeholder="name">
        <input type="email" name="email" id="email" required placeholder="email">
        <input type="password" name="password" id="password" class="password" required placeholder="password">    

        <button type="submit">criar conta</button>   
    </form>
	
</body>
</html>