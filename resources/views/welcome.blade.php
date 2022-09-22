<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake News</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">
    <style>
        .heading{
            text-align:center;
            letter-spacing:1px;
            text-transform:capitalize;
        }
        body{
            padding:4rem;
            background-color:blue;
            color:#fff;
            font-family: 'Baloo Bhai 2', cursive;
        }
        div{
            background-color:orange;
            display:inline-block;
            padding:0.5rem;
            margin:1.5rem;
            border-radius:5px;
            font-weight:bolder;
            text-shadow: 2px 2px 3px #000;
            transition: all .3s ease-in-out;
        }
        div:hover{
            cursor:pointer;
            scale:1.2;
            margin:1.8rem;
        }
    </style>
</head>
<body>
    <h1 class="heading">{{$header}}</h1>
    @foreach($articles as $value)
    <div class="news">
        <h2>{{$value['title']}}</h2>
        <p>{{$value['description']}}</p>
    </div>
    @endforeach
</body>
</html>