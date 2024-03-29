<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <title></title>
</head>
<body>
    <header>
        <ul>
            <li><a class="icon-header" href="{{route('HomePage')}}"><i class="fa-solid fa-house"></i></a></li>
            <li><a class="icon-header" href="{{route('programmingLanguage')}}"><i class="fa-solid fa-code"></i></a></li>
            <li><a class="icon-header" href="{{route('aboutMe')}}"><i class="fa-solid fa-code-fork"></i></a></li>
        </ul>
    </header>
</body>
</html>