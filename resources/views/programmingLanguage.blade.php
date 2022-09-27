    @extends('layout.app')

    @section('css')
        <link rel="stylesheet" href="{{asset('css/language.css')}}"/>
    @endsection

    @section('title', 'Programming Language')

    @section('content')
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
    @endsection