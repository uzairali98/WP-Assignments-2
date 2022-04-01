
<html>
    <body>
    <h1>Welcome to PHP based calculator</h1>
        <form method="POST">
            <label>Enter First Number</label><input type="number" name="Fno">
            <label>Enter operator</label><input type="text" name="Op">
            <label>Enter Second Number</label><input type="number" name="Sno">
            <input type="submit" value="Calculate">
        </form>
    </body>
</html>

<?php
    $Fno = $_POST['Fno'];
    $Sno = $_POST['Sno'];
    $Op = $_POST['Op'];
    $result = 0;

    switch($Op)
    {
        case "*":
            $result = $Fno * $Sno;
            break;
        
        case "-":
            $result = $Fno - $Sno;
            break;

        case "+":
            $result = $Fno + $Sno;
            break;

        case "/":
            $result = $Fno / $Sno;
            break;
    }
    echo "<h2>Result is : ".$result."</h2>";
?>