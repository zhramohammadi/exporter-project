<?php
include "process.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exporter</title>
    <style>
        html,
        body{
            background-color: cornflowerblue;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;

        }
        .main{
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 400px;
            height: 400px;
        }
        input{
            width: 100%;
            height: 40px;
            margin-bottom: 10px;
        }
        textarea{
            width: 100%;
            height: 100px;
            margin-bottom: 10px;
        }
        select{
            width: 100%;
            height: 40px;
            margin-bottom: 10px;
        }
        button{
            width: 100%;
            height: 60px;
            background-color: powderblue;
            border: none;
            font-size: 20px;
        }

    </style>
</head>
<body>
    <div class="main">
        <h1>exporter</h1>
        <form action="" method="post">
            <input type="texe" name="title" placeholder="title here">
            <textarea name="content" placeholder="content here " style="height:100px"></textarea>
            <select name="format">
                <option value="text">text file</option>
                <option value="pdf">pdf format</option>
                <option value="json">json file</option>
            </select>
            <button type="submit">export file</button>
        </form>
    </div>
</body>
</html>

