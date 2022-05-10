<?php

if ($_POST) {
    $num1 = $_POST['num1'] + 0;
    $op = $_POST['op'];
    $num2 = $_POST['num2'] + 0;
    if ($op == '+')
        $res = $num1 + $num2;
    elseif ($op == '-')
        $res = $num1 - $num2;
    elseif ($op == '*')
        $res = $num1 * $num2;
    elseif ($op == '/'){
        if($num2==0)
        $massage="Division by zero Error";
        else
        $res = $num1 / $num2;
       
    }
    elseif ($op == '%'){
        if($num2==0)
        $massage="Division by zero Error";
        else
        $res = $num1 % $num2;
       
    }
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
        #container {
            border: 12px solid #00CED1;
            border-radius: 10px;
            margin-top: 15px;
            margin-bottom: 15px;
        }

        select {
            display: block;
            margin: 0 auto;
        }
    </style>
    <title>Calculator </title>
</head>

<body>
    <div class="container" id="container">
        <div class="row">
            <div class="col-12 text-center h1 mt-5">
                Calculator
            </div>
            <div class="col-4 offset-4 my-5">
                <form method="post">
                    <div class="form-group">
                        <label name="num1">Enter number 1:</label>
                        <input name="num1" class="form-control " id="num1" required>
                    </div>
                   
                   
                    <div class="form-group ">
                        <label name="num2">Enter number 2:</label>
                        <input name="num2" class="form-control" id="num2" required>
                    </div>
                    <br>
                    <div class="form-group center">
                        <select name="op">
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
                            <option value="%">%</option>
                        </select>
                    </div>
                    <br>
                    <div class="form-group text-center">
                        <button name="culc" class="btn btn-outline-success btn-sm">calculate</button>
                    </div>
                    <br>
                    <?php

                    if (isset($res))
                        echo "Result = " . $res;
                    else  if (isset($massage))
                    echo  $massage;
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