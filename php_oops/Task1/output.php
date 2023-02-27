<?php
//class form start from here
class form{
public $firstname, $lastname,$fullname;
//constructor for set values 
function __construct($first,$last) {
    $this->firstname=$first;
    $this->lastname=$last;
    $this->fullname=$this->firstname.' '.$this->lastname;
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

}
if (isset($_POST['firstname']) && isset($_POST['lastname']))
{
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$user1=new form($fname,$lname);//object for form class 
$user1->checkInput();
}
?>