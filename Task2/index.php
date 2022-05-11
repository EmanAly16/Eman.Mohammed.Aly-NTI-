<?php
// dynamic table
// dynamic rows
// dynamic columns
// check if gender of user == m ==> male
// check if gender of user == f ==> female
//indexed->object has assosit
$users = [
    (object)[
        'id' => 1,
        'name' => 'ahmed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'football', 'swimming', 'running'
        ],
        'activities' => [
            "school" => 'drawing',
            'home' => 'painting'
        ], 
        'hobbies2' => [
            'running',
        ],
        'name2' => 'test',
        'activities2' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
    ],
    (object)[
        'id' => 2,
        'name' => 'mohamed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'swimming', 'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
        'hobbies2' => [
            'running',
        ],
        'name2' => 'test',
        'activities2' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
    ],
    (object)[
        'id' => null,
        'name' => 'menna',
        "gender" => (object)[
            'gender' => 'f'
        ],
        'hobbies' => [
            'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
        'hobbies2' => [
            'running',
        ],
        'name2' => 'test',
        'activities2' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
    ],  
    (object)[
        'id' => null,
        'name' => 'menna',
        "gender" => (object)[
            'gender' => 'f'
        ],
        'hobbies' => [
            'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
        'hobbies2' => [
            'running',
        ],
        'name2' => 'test',
        'activities2' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
    ],  
];
$rows=count($users);
//var_dump(count((array)$users[0]));
$columns=0;
$columns=count((array)$users[0]);
//echo $columns;
//var_dump($users)
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
    <title> User Data   </title>
</head>
<body>
<div class="container" id="container">
        <div class="row">
            <div class="col-12 text-center h1 mt-5">
            User Data  
            </div>
            <div >
               <table>
                  <?php foreach($users[0] as $property=>$value){?>
                       <th><?= $property ?></th>
                       <?php } ?>
                   <?php for($i=1;$i<=$rows;$i++){ ?>
                   <tr>
                   <?php foreach($users[$i-1] as $property=>$value){?>
                      
                       <td><?php 
                       $arr_cast=(array) $value;
                       
                       foreach($arr_cast as $key=>$value){
                        if($key=="gender"){
                            if($value=="m")
                            echo "male";
                            if($value=="f")
                            echo "female";
                        }
                        else{
                            if(gettype($key)=='integer')
                            echo $value."<br>";
                            else
                            echo $key ." => ".$value."<br>";
                            //echo gettype($key);
                        }
                       }
                    
                       // var_dump((array) $value) 
                        ?></td>
                       <?php } ?>
                 
                   </tr>
                   <?php }?>
               </table>
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