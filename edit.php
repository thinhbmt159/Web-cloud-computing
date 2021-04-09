<?php

include "connection.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($conn,"select * from menu where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $menu = $_POST['menu'];
	
    $edit = mysqli_query($conn,"update menu set menu='$menu' where id='$id'");
	
    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:menu.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="menu" value="<?php echo $data['menu'] ?>" placeholder="Enter name university" Required>
  <input type="submit" name="update" value="Update">
</form>