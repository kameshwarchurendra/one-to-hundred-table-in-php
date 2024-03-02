  
  <!DOCTYPE html>
<html lang="en">
<head>
  <title>Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <table class="table table-bordered table-hover">
    <tbody>
    <?php
    for($i=1;$i<=10;$i++){
    ?>
        <tr>
        <?php 
             for($j=0;$j<10;$j++){

        ?>
        <td>
            <?php 
            echo $i+$j*10;
            ?>
         </td>
        <?php 
             }
        echo"<br>";
    ?>
    </tr>
    <?php 
    }
?>
   </tbody>
  </table>
  </body>
  </html>