<html>
<head>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
	if (isset($_FILES['image'])) {
		$file_name = $_FILES['image']['name'];
		$file_size = $_FILES['image']['size'];
		$file_temp = $_FILES['image']['tmp_name'];
		$file_type = $_FILES['image']['type'];
		$file_path = "./Images/" . $file_name;
		// echo "<pre>";
		// print_r($_FILES);
		// echo "</pre>";
	}
	move_uploaded_file($file_temp, $file_path);
	$num1 = $_POST["name"];
	$num2 = $_POST['lname'];
	$sum = $num1 . " " . $num2;
	print "<img src=$file_path/>";
	?>
	<?php
	if (isset($_POST['textArea'])) {
		$marksInArray = explode("\n", $_POST["textArea"]);
	
		foreach ($marksInArray as $mark) {
			$position = strpos($mark,"|");
			$marksInMap[substr($mark,0,$position)] = substr($mark,$position+1);
		}
	}
	?>
	<table id="marks_table">
            <tr>
                <td>Subject</td>
                <td>Marks</td>
            </tr>
						<?php
            foreach ($marksInMap as $key => $value) {
                echo "<tr><td>$key</td><td>$value</td></tr>";
            }
            ?>
        </table>
	Full Name:
	<input type="text" value="<?PHP echo $sum; ?>" /><br><br>
	Hello:
	<?php echo $sum; ?>
</body>

</html>