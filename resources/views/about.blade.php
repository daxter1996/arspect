@extends('layouts.main')


@section('content')

    <div class="content">
        <h3 class="center" style="margin-top: 50px">The Arspect Team</h3>
        <div class="row" style="margin-top: 80px">
            <div class="col s12 m4 z-depth-3" style="padding-top: 10px;">
                <div>
                    <img class="responsive-img" src="{{url('/img/Josep.png')}}">
                </div>
                <div style="min-height: 150px;">
                    <strong>Josep Arguimbau Marqués</strong>
                    <ul>
                        <li>CEO & Founder</li>
                    </ul>
                </div>
                <div>
                    <a href="https://es.linkedin.com/in/josep-arguimbau-marques-70a730117" target="_blank"><img src="{{url('/img/linkedin.png')}}" style="height: 40px;margin-bottom: 4px"></a>
                </div>
            </div>
            <div class="col s12 m4 offset-m4 z-depth-3" style="padding-top: 10px;">
                <div>
                    <img class="responsive-img" src="{{url('/img/Jesus.png')}}">
                </div>
                <div style="min-height: 150px;">
                    <strong>Jesús Liz Allés</strong>
                    <ul>
                        <li>Web Developer</li>
                        <li>Frontend & Backend</li>
                    </ul>
                </div>
                <div>
                    <img src="{{url('/img/linkedin.png')}}" style="height: 40px;margin-bottom: 4px">
                </div>
            </div>
        </div>
    </div>
    <br/>


@endsection

@section('scripts')
    <script type="text/javascript">
    </script>
@endsection