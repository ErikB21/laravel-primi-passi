
    @extends('layout.app')
        
    @section('title', 'About Me')
    
    @section('content')
        <h1>Contattami!</h1>
        <p>{{$email}}</p>
        <ul>
            @foreach($sites as $site)
                <li><a class="icon" href="{{$site['url']}}"><i class="fa-brands fa-{{$site['title']}}"></i> </a></li>
            @endforeach
        </ul>
    @endsection

    @section('css')
        <link rel="stylesheet" href="{{asset('css/about.css')}}"/>
    @endsection
