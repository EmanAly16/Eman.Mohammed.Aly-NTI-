<?php
session_start();
$total = 0;
//echo $_SESSION['phone'];
$qes = [
    'Are you satisfied with the level of cleanliness?', 'Are you satisfied with the service prices?', 'Are you satisfied with the the nursing service?', 'Are you satisfied with the the docter service?', 'Are you satisfied with the the calmness in the hospital?'
];
if ($_POST) {
    for ($i = 0; $i < 5; $i++) {
        if (isset($_POST['rate' . $i]))
            $_SESSION['review' . $i] = $_POST['rate' . $i];
    }
   // var_dump($_SESSION);
}
//var_dump($_SESSION);
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
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }
    </style>
    <title> Review Result </title>
</head>

<body>
    <div class="container" id="container">
        <div class="row">
            <div class="col-12 text-center h1 mt-5">
                Review Result
            </div>
            <table>
                <tr>
                    <th>Question</th>
                    <th>Reviews</th>
                </tr>
                <?php for ($i = 0; $i < 5; $i++) { ?>
                    <tr>

                        <td><?= $qes[$i]; ?></td>

                        <td> <?php
                                if ($_SESSION['review' . $i] == 'bad') {
                                    echo "Bad";
                                    $total += 0;
                                } else  if ($_SESSION['review' . $i] == 'good') {
                                    echo "Good";
                                    $total += 3;
                                } else  if ($_SESSION['review' . $i] == 'very good') {
                                    echo "Very Good";
                                    $total += 5;
                                } else  if ($_SESSION['review' . $i] == 'excellent') {
                                    echo "Excellent";
                                    $total += 10;
                                }

                                ?></td>
                    </tr>
                <?php } ?>
               
            </table>
            <table>
            <tr><?php
                    if ($total < 25)
                        echo "<h4 class='text-center mt-4 'style='background-color:red;'>We will call you later on this phone :{$_SESSION['phone']}</h4>";
                    else
                        echo "<h4 class='text-center mt-4'style='background-color:green;'>Thanks</h4>";
                    ?></tr>
            </table>

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