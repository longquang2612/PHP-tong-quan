<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ứng dụng Future Value Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<div id="content">
        <h1>Future Value Calculator</h1>
        <form action="display_result.php" method="POST">
            <div id="data">
                <label>Invbrestment Amount:</label>
                <input type="text" name="investment"
                value="0">
                <br>
                <label>Yearly Interest Rate:</label>
                <input type="text" name="rate" value="0">
                <br>
                <label>Number of Year:</label>
                <input type="text" name="years" value="0">
            </div>
            <div id="Buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate">
                <br>
           </div>
        </form>
    
</body>
</html>