<?php 
if($_GET["id"]){
    
    include 'connection.php';
    $userid = $_GET["id"];
    $sql = "SELECT * FROM users WHERE id = $userid";
    $result = mysqli_query($con,$sql);

    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
    }

}
?>


































<center>
<h1>Edit Users</h1>
<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?=$row["id"]?>">
    <input type="text" class="rounded-input "name="name" value= "<?=$row["name"]?>">
    <input type="text" class="rounded-input "name="surname"value= "<?=$row["surname"]?>">
    <input type="submit" value="Save"class="floating-button">

</form>
</center>
<style> body {
  background: url(https://html5book.ru/wp-content/uploads/2015/07/background39.png);
}
.floating-button {
  text-decoration: none;
  display: inline-block;
  width: 140px;
  height: 45px;
  line-height: 45px;
  border-radius: 45px;
  margin: 10px 20px;
  font-family: 'Montserrat', sans-serif;
  font-size: 11px;
  text-transform: uppercase;
  text-align: center;
  letter-spacing: 3px;
  font-weight: 600;
  color: #524f4e;
  background: white;
  box-shadow: 0 8px 15px rgba(0, 0, 0, .1);
  transition: .3s;
}
.floating-button:hover {
  background: #2EE59D;
  box-shadow: 0 15px 20px rgba(46, 229, 157, .4);
  color: white;
  transform: translateY(-7px);
}

.rounded-input {
  padding:10px;
  border-radius:10px;
}</style>