<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- css file -->
    <link href = "style.css" rel = "stylesheet" type = "text/css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
             <?php include 'partials/_dbconnect.php' ?>
             <?php include 'partials/_navbar.php' ?>
           

             <?php
                
                echo '<div class="alert alert-success alert-dismissible fade show m-0" role="alert">
                <strong>Welcome! </strong>'.$_SESSION['username'].'
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'
             
             ?>

              <div class="container-fluid row p-0 m-0" style = "background-color : rgba(0, 255, 191, 0.22)">
               <?php 
                   $id = $_GET['userid'];
                //    echo $id;
                //    echo '<br>';
                   $sql = "SELECT * FROM `budgets` WHERE userid = '$id'";
                   $result = mysqli_query($conn,$sql);
                   $numrows = mysqli_num_rows($result);
                //    echo $numrows;
                   if($numrows > 0){
                        echo 'you have previous items';
                   }else{
                       include 'addnewbudget.php';
                       echo '<div class = "col-md-2 m-3">
                       <div class="card text-dark bg-warning mb-3" style="max-width: 18rem;">
                       <div class="card-header"><h4>Start a new budget</h4></div>
                       <div class="card-body">
                       <button type="button" class="btn btn-success mx-2" data-bs-toggle="modal" data-bs-target="#nbudgetModal">
                       Add new budget
                       </button>
                       </div>
                       </div>';
                   }


                
                ?>
                
                <!-- <div class="col-md-4">
                      <h1>hello</h1>
                </div> -->
               
                
 
              </div>
             
            
              
             <?php include 'partials/_footer.php' ?>

          


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>