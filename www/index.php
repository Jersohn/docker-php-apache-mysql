<html>
 <head>
  <title>Ranjit Swain | Docker class</title>

  <meta charset="utf-8">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
    <?php echo "<h1>Hi! I'm Jersohn</h1>"; ?>
	<?php echo "<h3>This is Docker Compose Class!</h3>"; ?>

    <?php
    $conn = mysqli_connect('db', 'afj', 'afj', "myDb");
    $query = 'SELECT * FROM Person';
    $result = mysqli_query($conn, $query);

    echo '<table class="table table-striped">';
    echo '<thead><tr><th></th><th>id</th><th>name</th><th>age</th></tr></thead>'; 
    echo '<tbody>';

    while($value = $result->fetch_array(MYSQLI_ASSOC)){
        echo '<tr>';
        echo '<td><a href="#"><span class="glyphicon glyphicon-search"></span></a></td>';
        echo '<td>' . $value['id'] . '</td>';      
        echo '<td>' . $value['name'] . '</td>';   
        echo '<td>' . $value['age'] . '</td>';   
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';

    $result->close();
    mysqli_close($conn);
?>
    </div>
</body>
</html>
