<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>login form</title>
</head>
<body>

    <h1>login</h1>

    <a href="/register">criar</a>

    <form action="/login" method="post">
        @csrf

        <input type="email" name="email" id="email" required placeholder="email">
        <input type="password" name="password" id="password" class="password" required placeholder="password">    

        <button type="submit">Logar</button>   
    </form>
	
</body>
</html>