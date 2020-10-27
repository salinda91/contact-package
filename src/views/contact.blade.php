<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Contact us now</h2>
    <form action="" method="POST">
        @csrf
        <input type="text" name="name" placeholder="name"> <br><br>
        <input type="emal" name="email" placeholder="email"> <br><br>
        <textarea name="message" id="" cols="30" rows="10" placeholder="message"></textarea> <br><br>
        <input type="submit" value="send">
    </form>
</body>
</html>