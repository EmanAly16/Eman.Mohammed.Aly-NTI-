<?php 
$total=0;

if ($_POST) {
    for($i =1 ;$i<=5;$i++){
       $total+=$_POST['sub'.$i];
    }
    $percentage = ($total/500)*100;
    if($percentage>=90)
    $massage="Grade A";
    else if($percentage>=80)
    $massage="Grade B";
    else if($percentage>=70)
    $massage="Grade C";
    else if($percentage>=60)
    $massage="Grade D";
    else if($percentage>=40)
    $massage="Grade E";
    else
    $massage="Grade F";

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
    <title>Grade</title>
</head>
<body>
<div class="container" id="container">
        <div class="row">
            <div class="col-12 text-center h1 mt-5">
                Grade Calculation
            </div>
            <div class="col-4 offset-4 my-5">
                <form method="post">
                    <!--Physics, Chemistry, Biology, Mathematics and Computer-->
                    <div class="form-group">
                        <label name="sub1">Physics</label>
                        <input name="sub1" class="form-control"  required>
                    </div>
                    <div class="form-group">
                        <label name="sub2">Chemistry</label>
                        <input name="sub2" class="form-control"  required>
                    </div>
                    <div class="form-group">
                        <label name="sub3">Biology</label>
                        <input name="sub3" class="form-control"  required>
                    </div>
                    <div class="form-group">
                        <label name="sub4">Mathematics</label>
                        <input name="sub4" class="form-control"  required>
                    </div>
                    <div class="form-group">
                        <label name="sub5">Computer</label>
                        <input name="sub5" class="form-control"  required>
                    </div>
                    <br>
                    <div class="form-group text-center">
                        <button  name="culc" class="btn btn-outline-success btn-sm">percentage and grade</button>
                    </div>
                    <br>
                    <?php
                    if(isset($massage))
                    echo "Total Grade = ".$total."<br> Percentage = ".$percentage."% <br>".$massage;
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