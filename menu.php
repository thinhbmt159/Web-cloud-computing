<html>
<head>
	<title>ADMIN</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

<?php
require_once("connection.php");
$sql = "SELECT id, menu FROM Menu";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Menu: " . $row["menu"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

    <h2>MENU MANAGER</h2>

    <form action="menu-add.php" method="POST"> Menu name:

        <input type="text" name="menu">

        <input type="hidden" name="form_submitted" value="1" />

        <input type="submit" name ="btn_submit" value="Add">

    </form>
</body>
</html>