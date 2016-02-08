<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <title>NUNC EST BIBENDUM, NUC PEDE LIBERO PULSANDA TELLUS</title>
  <meta http-equiv="Content-Style-Type" content="text/css">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

</head>
<body>

  <?php
  $servername = "localhost";
  $username = "";//mydata
  $password = "";//mydata
  $dbname = "myLIQ";

  //Check connection
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
    $result = $conn->query("select itemName, mediumImageUrls, itemPrice, availability, itemUrl from liquor_t order by rand() limit 0, 20");

      if (($result->rowCount())> 0) {
        echo "<table class=randtable;><tr><th>NAME</th><th>IMAGE</th><th>AVILABILITY</th><th>PRICE</th><th>URL</th></tr>";
          //output data of each row
          foreach($result as $row){
            echo "<tr><td>" . $row["itemName"]. "</td><td>"."<img src =$row[mediumImageUrls]>"."</td><td>".$row["availability"]."</td><td>".$row["itemPrice"]."</td><td>"."<a href = $row[itemUrl] target=_blank>$row[itemUrl]</a>"."</td></tr>";
           }
            echo "</table>";
    }

  }catch (Exception $e) {
    echo $sql_sel."<br>".$e->getMessage();
  }

  $conn =null;
  ?>
  <script type="text/javascript">

  $("tr").not(':first').hover(
    function () {
      $(this).css("background","silver");
    },
    function () {
      $(this).css("background","");
    }
  );

  </script>

</body>
</html>
