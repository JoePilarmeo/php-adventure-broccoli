<!-- 
    Write a program that outputs the first n triangular numbers.
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
        Enter a number: <input type="text" name="nums" style="margin-left: 10px">
        <input value="SUBMIT" type="submit" name="submit" style="margin-left: 10px">
    </form>
    </body>
</html>

<?php
if(isset($_POST['submit'])){

 echo '<div class="output"> First ' . $_POST['nums'] . ' triangular numbers are: <br>';
for ($i = 1; $i <= $_POST['nums']; $i++) {
    $triangular_number = $i * ($i + 1) / 2;
    echo $triangular_number . "<br>";
}
echo '</div>';
}
?>