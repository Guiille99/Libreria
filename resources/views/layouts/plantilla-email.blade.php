<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
       body{
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
       }
       .container{
        max-width: 600px;
        padding: 10px 20px;
        background-color: #f4f4f4;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
       }
       h1{
        color: #333333;
       }
       p{
        color: #666666;
        line-height: 1.5;
       }

       @media only screen and (max-width: 600px){
        .container{
            padding: 10px;
        }
       }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>