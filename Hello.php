<html>
<body>
        <?php
        if(isset($_FILES['image'])){
                $file_name = $_FILES['image']['name'];
                $file_size = $_FILES['image']['size'];
                $file_temp = $_FILES['image']['tmp_name'];
                $file_type = $_FILES['image']['type'];
                $file_path = "./Images/".$file_name;
                // echo "<pre>";
                // print_r($_FILES);
                // echo "</pre>";
        } 
        move_uploaded_file($file_temp,"Images/". $file_name);
        $num1 = $_POST["name"];
        $num2 = $_POST['lname'];
        $sum = $num1." ".$num2;
        print "<img src=$file_path/>";
        ?>
        
        Full Name:
        <input type="text" value="<?PHP echo $sum; ?>" /><br><br>
        Hello: <?php echo $sum; ?>
</body>
</html>
 