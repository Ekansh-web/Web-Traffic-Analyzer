
<?php 
require 'common.php';
  
  // If upload button is clicked ... 
  if (isset($_POST['sumit'])) { 
  
    if(getimagesize($_FILES["image"]["tmp_name"])==FALSE)
    {
    echo "please select an image";    
    }
    else{
        $image = addslashes($_FILES["image"]["tmp_name"]);
        $name = addslashes($_FILES["image"]["name"]);
        $image = file_get_contents($image);
        $image = base64_encode($image);
        saveimage($name, $image);
    }
  } 
function saveimage($name, $image)
{
    require 'common.php';
    $user_id = $_SESSION['user_id'];
    $qry = "insert into images (name, image, user_id) value ('$name','$image','$user_id')";
    $result = mysqli_query($con, $qry);
    if($result)
    {
        header("location:index.php?login_success=1");
    }
 else {
     echo"<br/>Image not uploaded";
 }
}
?> 