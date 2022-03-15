<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
    <style>
        body{
            background-color: rgba(27, 18, 18, 0.842);
        }

        h1,h2,h4{
            color: whitesmoke;
        }
    </style>
</head>
<body>

<h1><center>TP sur les controlleurs </center></h1>

<br><br>

<h2><center>Table de multiplication par 7</center></h2>

<br>

    <h4>


            @php
            for ( $i = 0; $i <= 10; $i +=1){
                $result = 7*$i;
                echo $result."<br>";
            }
            @endphp


    </h4>

</body>
</html>
