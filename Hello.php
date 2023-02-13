<html>
<body>
        <?php 
        $num1 = $_POST["name"];
        $num2 = $_POST['lname'];
        $sum = $num1." ".$num2;
        ?>
        Full Name:
        <input type="text" value="<?PHP echo $sum; ?>" /><br>
        Hello: <?php echo $sum; ?>
</body>
</html>
 