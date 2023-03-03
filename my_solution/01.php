<!-- 
    Write a program that takes a character as input and outputs whether it is a vowel or a consonant.
-->

<html>
<head>
    <style>
        .output{
            border: 2px solid black;
            background-color: #e0e0e0;
            width: 250px;
            padding: 10px 10px;
            text-align: center;
            border-radius: 20px;
            margin: auto;

            align-items: center;
        }
        form{
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 250px;
        }      
    </style>
</head>

    <body>
    <form action=<?php echo $_SERVER["PHP_SELF"]; ?> method="post">
        Enter a character: <input type="text" name="chars" style="margin-left: 10px">
        <input value="SUBMIT" type="submit" name="submit" style="margin-left: 10px">
    </form>
    </body>
</html>

<?php

if(isset($_POST['submit'])){
      

     

if(is_numeric($_POST['chars'])){
    echo '<div class="output">Please input string character </div>';
} else {
    
    $vowels = array("a","e","i","o","u","A","E","I","O","U");
    
if(in_array($_POST['chars'],$vowels)){
    echo '<div class="output">Character is a <strong> vowel </strong> </div>';
} else {
        echo '<div class="output">Character is a <strong> consonant </strong> </div>';
       }
    }
}

?>


