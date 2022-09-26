<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programming Language</title>
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
        ul{
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            padding: 10px 0;
            list-style: none;
        }
        li{
            padding: 0 20px;
            color: steelblue;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .logo{
            width: 60px;
            height: 60px;
        }

        .logo img{
            width: 100%;
        }
    </style>
</head>
<body>
    <x-Header/>
    <main>
        <ul>
            @foreach ($programmingLanguage as $val)
                <li>
                    <div class="logo">
                        <img src="{{$val['path']}}" alt="{{$val['title']}}">
                    </div>   
                    <h2>{{ $val['title']}}</h2>
                </li>
            @endforeach
        </ul>
    </main>
</body>
</html>