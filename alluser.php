<!DOCTYPE html>
<?php
include 'connection.php';
$select="SELECT * from Users ";
$query=$connection->query($select);
$nums=mysqli_num_rows($query);
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Users</title>
    <!-- Custom CSS--->
    <link rel="Stylesheet" href="index.css">
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  </head>
    <body>  

        <header class="headera">
            <h1>All Users Details</h1>
        </header> 

        <div class="col-md-9 mx-auto mt-4">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">S no:</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Balance &#8377;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                  while($res=mysqli_fetch_array($query))
                  {
                 ?>

                    <tr>
                        <th scope="row"><?php echo $res['Id']?></th>
                        <td class="list"><?php echo $res['Name']?></td>
                        <td class="list"><?php echo $res['Email']?></td>
                        <td class="list"><?php echo $res['Balance']?></td>
                        <form action="transfer.php">
                        <td><button type="submit" class="buttona">Transact</button></td>
                        </form>
                    </tr>
                    <?php
                  }
                  ?>
            </tbody>
          </table>
          <div class="home">
            <a href="index.html"><button class="buttona">Home</button></a>
          </div> 
        </div>  
        
         <!--Proper JS-->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
      <!--Bootstrap JS-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    </body> 
</html>     