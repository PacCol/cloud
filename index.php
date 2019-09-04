<!DOCTYPE html>
<html>

<head>
<style>

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}

.button2 {
  background-color: white;
  color: black;
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}


</style>
</head>

<body>

  <h1>Cloud</h1>
  <p><a class="button button2" href="uploader.html">Upload a new file</a></p>
  <br>

  <table style="width:50%">
  <tr>
    <th>File</th>
    <th>Download</th>
  </tr>

  <?php
  $dir = "uploads/";
  if (is_dir($dir)){
    if ($dh = opendir($dir)){
      while (($file = readdir($dh)) !== false){
        if ($file != "." && $file != ".."){
          echo "<tr>";
          echo "<th>".$file."</th>";
          echo "<th>".'<a href="uploads/'.$file.'" download>
<button>Download</button>
</a>'."</th>";
          echo "<tr>";
        }
      }
      closedir($dh);
    }
  }
  ?>

</table>

<br>
<br>
<br>

<form action="delete.php" method="post">
Enter the name of the file that you want to delete : <input type="text" name="file"><br>
<input type="submit">
</form>

</body>
</html>
