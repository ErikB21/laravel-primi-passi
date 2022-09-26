<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <style>
        *{
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }
        main{
            width: 100vw;
            height: calc(100vh - 80px);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        h1{
            color: cornflowerblue;
            padding: 10px 0;
            font-size: 4rem;
        }
        p{
            text-align: center;
            padding: 10px 300px;
        }
        main a{
            color: cornflowerblue;
        }
        
    </style>
</head>
<body>
    <x-Header/>
    <main>
        <h1>{{ $welcome }}</h1>
        <p>{{$title}}</p>
        <a href="{{route('programmingLanguage')}}">Linguaggi di Programmazione</a>
    </main>
</body>
</html>