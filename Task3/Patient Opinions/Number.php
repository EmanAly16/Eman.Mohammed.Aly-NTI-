<?php
session_start();
// if($_POST)
// $_SESSION['phone'] = $_POST['phone'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" rel="stylesheet" />

    <title>Pationt Opinions</title>
    <style>
        #sticky-sidebar {
            position: fixed;
            max-width: 20%;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        body {
            background-image: url('back.jpg');
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-7">
                <div class="col-xs-12" id="sticky-sidebar">
                    <div class=" offset-4 my-5">

                        <form method="post" action="Review.php">
                            <div class="form-group">
                                <label name="phone">Enter Phone:</label>
                                <input name="phone" class="form-control " required>
                            </div>

                            <br>
                            <div class="form-group text-center">
                                <button name="submit" class="btn btn-outline-success btn-sm">Login<!--<a href="Review.php">Login</a>--></button>
                            </div>
                            <br>

                        </form>

                    </div>
                    <?php
                    ?>
                </div>
            </div>
        </div>
    </div>


</body>

</html>