<?php
session_start();
//print_r($_POST);
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    header('Location:Subscribe.php');
}

$_SESSION['Games']=$_POST;
$total=0;
$games_arr=['football','swimming','volley_ball','others'];
$games_price=[300,250,150,100];
for($game=0;$game<4;$game++){
    if(isset($_SESSION['Games'][$games_arr[$game]])){
        $games_price[$game]*=count($_SESSION['Games'][$games_arr[$game]]);
        $total+=$games_price[$game];
        }
    else{
        $games_price[$game]*=0;
    }
}

$users_game=[];
$users_game_price=array_fill(0,$_SESSION['members_count']+1,0);

for($user=1;$user<=$_SESSION['members_count'];$user++){
    $users_game[$user]=array();
    if(isset($_SESSION['Games']['football'])){  
        if(in_array($user,$_SESSION['Games']['football'])){
        array_push($users_game[$user],'football');
        $users_game_price[$user]+=300;
        }
    }
    if(isset($_SESSION['Games']['swimming'])){
        if(in_array($user,$_SESSION['Games']['swimming'])){
        array_push($users_game[$user],'swimming');
        $users_game_price[$user]+=250;
        }
    }
    if(isset($_SESSION['Games']['volley_ball'])){
        if(in_array($user,$_SESSION['Games']['volley_ball'])){
        array_push($users_game[$user],'volley_ball');
        $users_game_price[$user]+=150;
        }
    }
    if(isset($_SESSION['Games']['others'])){
        if(in_array($user,$_SESSION['Games']['others'])){
        array_push($users_game[$user],'others');
        $users_game_price[$user]+=100;
        }
    }
    }


// // echo "<br> this val";
// var_dump($_SESSION['Games']['member_name']); // name of members (1 indexing)
// var_dump($games_price); // as index of game with it's price (0 indexing)
// var_dump($users_game);//as index of user with it's games_name (1 indexing)
// var_dump($users_game_price);//as index of user with it's price (1 indexing)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>Result</title>
    <style>
      
     
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
</head>
<body>
<div class="container" id="container">
        <div class="row">
            <div class="col-12 text-center h1 mt-5">
                <div class="fadeIn first">
                    <img src="club.png" width="50%" height="50%" id="icon" alt="User Icon" />
                </div>
            </div>
            <table>
                 <th>
                  Subscriber
                 </th>
                 <th>
                <?= $_SESSION['username']?>
                 </th>
                 <th>
                    Price
                 </th>
                <?php
                for($i=1;$i<=$_SESSION['members_count'];$i++){?>
                <tr>
                   <td><?= $_SESSION['Games']['member_name'][$i] ?></td>
                   <td>
                <?php foreach($users_game[$i] as $game){?>
                      <?= $game ?>
                <?php }?>
                   </td>
                   <td>
                       <?= $users_game_price[$i] ." EGP" ?? ""?>
                   </td>
                </tr>
                <?php } ?>
                <tr>
                    <td>Total Price</td>
                    <td> </td>
                    <td><?=$total?></td>
                </tr>
            </table>
            <div class="col-12 text-center  mt-2">
                <div class="fadeIn first">
                    <img src="sport.png" width="50%" height="30%" id="icon" alt="User Icon" />
                </div>
                <table>
                <tr>
                    <td>Football Club</td>
                    <td><?=$games_price[0] ." EGP"?></td>
                </tr>
                <tr>
                    <td>Swimming Club</td>
                    <td><?=$games_price[1] ." EGP"?></td>
                </tr>  
                <tr>
                    <td>Volley Club</td>
                    <td><?=$games_price[2] ." EGP"?></td>
                </tr>  
                <tr>
                    <td>Others Club</td>
                    <td><?=$games_price[3] ." EGP"?></td>
                </tr>
                <tr>
                    <td>Club Subscription</td>
                    <td><?php
                    $sub_cost=10000 + ((int)($_SESSION['members_count'])*2500);
                    echo $sub_cost ." EGP";
                    ?></td>
                </tr>
                <tr>
                    <td>Total Price</td>
                    <td><?php
                  
                    echo $total+$sub_cost ." EGP";
                    ?></td>
                </tr>
            </table>
            </div>
           
    
</body>
</html>