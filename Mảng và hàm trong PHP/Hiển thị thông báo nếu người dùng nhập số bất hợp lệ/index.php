<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Thông báo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<div id="content">
    <h1>Simple Calculator</h1>
    <form method="post" action="tinh.php">
        <div id="data">
            <label>First Operand:</label>
            <input type="text" name="num1"/><br/>
            <label>Operator:</label>
            <select id="operator" name="pheptinh">
                <option>Addition</option>
                <option>Substraction</option>
                <option>Multiply</option>
                <option>Division</option>
            </select><br/>
            <label>Second Operand:</label>
            <input type="text" name="num2"/><br/>

        </div>
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"/>
        </div>
    </form>
</div>

    
</body>
</html>