<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ứng dụng Future Value Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    <style>
    #content{
        width: 450px;
        margin: 0 auto;
        padding: 0px 20px 20px;
        background: white;
        border: 2px solid navy;
    }

    h1{
        color: navy;
    }

    label{
        width: 10em;
        padding-right: 1em;
        float: left;
    }

    #data input{
        float: left;
        width: 15em;
        margin-bottom: .5em;
    }

    #buttons input{
        float: left;
        margin-bottom: .5em;
    }
    br{
        clear: left;
    }
</style>
</head>
<body>


<form method="Post" action="year.php">
    <table>
        <h1> Ứng dụng Future Value Calculator </h1>
		<div>Inventment Amounu<input type="number" name="numberone"></div>
		<div>Yearly Interest Rate<input type="number" name="numbertwo"></div>
		<div>Number of Years<input type="number" name="numberthree"></div>
		<input type="submit" name="submit" value="count">
    </table>    
</form>
    
</body>
</html>