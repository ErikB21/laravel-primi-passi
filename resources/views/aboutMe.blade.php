<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
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
        main h1{
            color: cornflowerblue;
            padding: 10px 0;
            font-size: 4rem;
        }
        main p{
            padding: 20px 0;
            font-size: 1.3rem;
            color: darkgray;
        }
        main ul{
            list-style: none;
        }
        main ul li a i{
            color: black;
            font-size: 2rem;
        }
    </style>
</head>
<body>
    <x-Header/>
    <main>
        <h1>Contattami!</h1>
        <p>{{$email}}</p>
        <ul>
            @foreach($sites as $site)
                <li><a href="{{$site['url']}}"><i class="fa-brands fa-{{$site['title']}}"></i> </a></li>
            @endforeach
        </ul>
    </main>

    
</body>
</html>