<?php
//class form start from here
class form{
public $firstname, $lastname,$fullname,$file_name,$temp_name,$file_path,$subject,$phone;
//constructor for set values 
function __construct($first,$last,$file_name,$temp_name,$file_path,$subject,$phone) {
    $this->firstname = $first;
    $this->lastname = $last;
    $this->fullname = $this->firstname.' '.$this->lastname;
    $this->file_name = $file_name;
    $this->temp_name = $temp_name;
    $this->file_path = $file_path;
    $this->subject = $subject;
    $this->phone = $phone;
}

function checkInput() //it checks that there is only alphabets in input string.
{
  if(ctype_alpha($this->firstname) && ctype_alpha($this->lastname))
  {
      echo "HELLO : ". $this->fullname;
  }
  else
  {
      echo "please enter valid name";
  }
}
//function checkInput ends here.
  function displayImage() //function use to store and display image 
{
    if (isset($_FILES["image"])) {
        //storing image in images folder
        move_uploaded_file($this->temp_name, $this->file_path);
        // displaying image from the images folder
        echo "<img src='$this->file_path' />";
      }
}
function displayMarks() //textArea function to show subject with marks 
    {
        if(isset($_POST['content'])){
        echo "<table border='1'>";
        echo "<tr><th>Subject</th><th>Marks</th></tr>";
        $this->subject=explode("\n",$this->subject);
        foreach($this->subject as $marks)
        {
        $marks_array=explode("|",$marks);

        echo "<tr><td>".$marks_array[0]."</td> <td>".$marks_array[1]."</td><tr>";
        }
    }
    }
    function validate_mobile()	
    {
        if(preg_match('/^\+91[1-9]\d{9}$/',$this->phone))
        {
           echo $this->phone;
        }
        else
        {
            echo "invalid phone number";
        }
    }

}
if (isset($_POST['firstname']) && isset($_POST['lastname']))
{
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$image=$_FILES['image'];
$file_name=$_FILES['image']['name'];
$file_temp=$_FILES['image']['tmp_name'];
$file_path = "./Images/" . $file_name;
$subject=$_POST['content'];
$phone = $_POST['phone'];
$user1=new form($fname,$lname,$file_name,$file_temp,$file_path,$subject,$phone);//object for form class 
$user1->checkInput();
$user1->displayImage();
$user1->displayMarks();
$user1->validate_mobile();
}
?>