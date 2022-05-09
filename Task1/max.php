<?php 
$min=PHP_FLOAT_MAX;
$max=PHP_FLOAT_MIN;
$flag=0;

if ($_POST) {
   // var_dump($_POST);
    for($i =1 ;$i<=3;$i++){
       // echo $_POST['num'.$i];
        if($_POST['num'.$i]>$max)
        $max=$_POST['num'.$i];
        if($_POST['num'.$i]<$min)
        $min=$_POST['num'.$i];
    }
    if(isset($_POST["min"])){
        if($_POST["min"]=="")
        $flag=1;
        else
        $flag=2;
    }
    else
        $flag=2;

  

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <style>
      
        #container{
        border: 12px solid #00CED1;
        border-radius: 10px;
        margin-top: 15px;
        margin-bottom: 15px;
        }

       
   </style>
    <title>Max & Min</title>
</head>
<body>
<div class="container" id="container">
        <div class="row">
            <div class="col-12 text-center h1 mt-5">
                Min & Max
            </div>
            <div class="col-4 offset-4 my-5">
                <form method="post">
                    <div class="form-group">
                        <label name="num1">Enter number 1:</label>
                        <input name="num1" class="form-control " id="num1" required>
                    </div>
                    <div class="form-group">
                        <label name="num2">Enter number 2:</label>
                        <input name="num2" class="form-control" id="num2" required>
                    </div>
                    <div class="form-group">
                        <label name="num3">Enter number 3:</label>
                        <input name="num3" class="form-control" id="num3" required>
                    </div>
                    <br>
                    <div class="form-group text-center">
                        <button  name="min" class="btn btn-outline-success btn-sm">Min</button>
                        <button  name="max" class="btn btn-outline-success btn-sm">Max</button>
                    </div>
                    <br>
                    <?php
                    if($flag==1)
                    echo "minmum number is ".$min."<br>";
                    else if($flag==2)
                    echo "muximum number is ".$max."<br>" ;
                    ?>
                    </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</body>
</html>