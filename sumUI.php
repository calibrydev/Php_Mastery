
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> ADDITION CODE</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <style>
            .input{
                padding: 10px;
            }
            .clear{
                background-color: red !important;
                color: white;
                border: none;
                padding: 10px;
                width: 80px;
                cursor: pointer;
            }
            .button{
                background-color: green !important;
                color: white;
                border: none;
                padding: 10px;
                width: 80px;
                cursor: pointer;
            }
            .button:hover{
                background-color: darkgreen !important;
            }
        </style>
    </head>
    <body>
         <h1> Insert two numbers and calculate their sum</h1>
    <form action="sumUI.php">
        <input type="number" class="input" name="num1" placeholder="Number one">
        <input type="number" class="input" name="num2" placeholder="Number two">
        <input type="submit" value="Add" name="add" class="button">
        
    </form>
            <button class="clear" id="clear" >Clear</button>
         <script>
            //this will mainly ensure that the url is cleared 
            let clear=document.getElementById("clear");
            clear.onclick=function(){
                // Clears the URL by removing query parameters
history.replaceState(null, '', window.location.pathname);

            };
         </script>
    </body>
</html><?php
//THis code shows a function that adds two numbers and outputs the results
if(isset($_GET['add'])){
    $number1=$_GET['num1'];
    $number2=$_GET['num2'];

//function to add the numbers
    
    function add($number1,$number2){
        $ans=$number1+$number2;
        echo "Your answer is: ".$ans;
        echo "<br>";
    }
    add($number1,$number2);
}
?>
