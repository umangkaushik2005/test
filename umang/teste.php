<!DOCTYPE html>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>

    <title>Student Details Form</title>
</head>
<body>
    <h2><center>Student Details Form</center></h2>
    <form action="teste.php" method="post">
        <label for="Number">Number:</label>
        <input type="text" id="Table" name="Table" placeholder="Number" required><br><br>

        


  

        <input type="submit" name="Even" value="Even" required>
        <input type="submit" name="Odd" value="Odd" >
        <input type="submit" name="Prime" value="Prime" >
        
    </form>
</body>
</html>






<?php

// print_r ($_POST);die;

if (isset($_POST['Even'])){
    $Table =$_POST["Table"];

if (!preg_match ("/^[0-9]*$/", $Table) ){  
    $ErrMsg = "Only numeric value is allowed";  
    echo $ErrMsg;die;  
}  




    for ($i=$Table; $i<=100; $i++)
    {
       if($i%2 == 0){
        echo "$i<br>";
       }
    }
}

if(isset($_POST['Odd'])){
    $Table =$_POST["Table"];

if (!preg_match ("/^[0-9]*$/", $Table) ){  
    $ErrMsg = "Only numeric value is allowed";  
    echo $ErrMsg;die;  
}  




    for ($i=$Table; $i<=100; $i++)
    {
       if($i%2 !== 0){
        echo "$i<br>";
       }
    }
}


// if(isset($_POST['Prime'])){
//     $Table =$_POST["Table"];

// if (!preg_match ("/^[0-9]*$/", $Table) ){  
//     $ErrMsg = "Only numeric value is allowed";  
//     echo $ErrMsg;die;  
// }  




//     for ($i=$Table; $i<=100; $i++)
//     {
//        if($i%$i == 0){
//         echo "$i<br>";
//        }
//     }
// }

// if ($_SERVER["REQUEST_METHOD"] == "POST")
//  {

//     // function test_input($data) {
//     //     $data = trim($data);
//     //     $data = stripslashes($data);
//     //     $data = htmlspecialchars($data);
//     //     return $data;
//     // }
// $Table =$_POST["Table"];

// if (!preg_match ("/^[0-9]*$/", $Table) ){  
//     $ErrMsg = "Only numeric value is allowed";  
//     echo $ErrMsg;die;  
// }  




//     for ($i=$Table; $i<=100; $i++)
//     {
//        if($i%2 == 0){
//         echo "$i<br>";
//        }
//     }

// }

?>


