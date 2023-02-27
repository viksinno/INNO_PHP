<!DOCTYPE html>
<html>
<head>
    <script src="./jquery.js"></script>
</head>
<?php include 'output.php';?>

<body>
<form  method="post" enctype="multipart/form-data">
FirstName: <input class ="fname" type="text" name="firstname" required><br>
LastName: <input class="lname" type="text" name="lastname" required><br>
FullName: <input class="fullname" type="text" readonly name="fullname"><br>
Image: <input type="file" name="image"> <br><br>
</form>
<script>
    $(document).ready(function(){
    $(".fname , .lname").on('input', function(){
        var fnamevar= $('.fname').val();
        var lnamevar= $('.lname').val();
        var fullnamevar = fnamevar + " " + lnamevar;
        // Print entered value in a div box
        $(".fullname").val(fullnamevar);
    });
});
</script>
</body>
