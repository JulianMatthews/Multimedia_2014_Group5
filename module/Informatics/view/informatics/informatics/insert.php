
<?php
if (isset($_POST['submit'])){
$con=mysqli_connect("localhost","root","","db");
$sql="INSERT INTO drafts (id, title, description, post, author, category, declined)
VALUES
('','$_POST[title]',$_POST[description],$_POST[post],$_POST[author],$_POST[category],0)";
echo "Droplet Successfully Added!";}
?>

<form action="register.phtml.php" method="post">
  Title: <br /><input type="text" name="title"><br /><br />
  Description: <br /><textarea name="description"></textarea><br /><br />
  Post: <br /><textarea name="post"></textarea><br /><br />
  Author: <br /><input type="text" name="author"><br /><br />
  Category: <br /><input type="text" name="category"><br /><br />
  <input class="btn btn-info" type="submit" value="Submit for review">
</form>