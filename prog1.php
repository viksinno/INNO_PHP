<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src ="./jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
</head>
<body>
<form action="Hello.php" method="post" enctype="multipart/form-data">
First Name: <input type="text" name="name" class="fname" pattern="[A-Za-z]{1,}"><br>
Last Name: <input type="text" name="lname" class="lname" pattern="[A-Za-z]{1,}"><br>
Full Name: <input type="text" name="Fname" class="Fulname" disabled><br>
Image: <input type="file" name = "image" />
<input type="submit" class="submit">
</form>
</body>
</html>