@extends('layouts.main')


@section('content')

    <div class="content">
        <h3 class="center" style="margin-top: 50px">The Arspect Team</h3>
        <div class="row" style="margin-top: 80px">
            <div class="col s12 m3  z-depth-3" style="padding-top: 10px;">
                <div>
                    <img class="responsive-img" src="{{url('/img/Josep.png')}}">
                </div>
                <div style="min-height: 150px;">
                    <strong>Josep Arguimbau Marqués</strong>
                    <p>
                        CEO & Founder
                    </p>
                </div>
                <div>
                    <a href="https://es.linkedin.com/in/josep-arguimbau-marques-70a730117" target="_blank"><img src="{{url('/img/linkedin.png')}}" style="height: 40px;margin-bottom: 4px"></a>
                </div>
            </div>
            <div class="col s12 m3 offset-l1 z-depth-3 " style="padding-top: 10px;">
                <div>
                    <img class="responsive-img" src="http://www.freeiconspng.com/uploads/no-image-icon-11.PNG">
                </div>
                <div style="min-height: 150px;">
                    <strong>Agustín Silveira Da Silva</strong>
                    <p>
                        asdfasdfasdfsfd
                    </p>
                </div>
                <div>
                    <img src="{{url('/img/linkedin.png')}}" style="height: 40px;margin-bottom: 4px">
                </div>
            </div>
            <div class="col s12 m3 offset-l1 z-depth-3" style="padding-top: 10px;">
                <div>
                    <img class="responsive-img" src="{{url('/img/Jesus.png')}}">
                </div>
                <div style="min-height: 150px;">
                    <strong>Jesús Liz Allés</strong>
                    <p>
                        Web Developer
                        <br/>
                        Frontend & Backend
                    </p>
                </div>
                <div>
                    <img src="{{url('/img/linkedin.png')}}" style="height: 40px;margin-bottom: 4px">
                </div>
            </div>
        </div>
    </div>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>

@endsection

@section('scripts')
    <script type="text/javascript">
    </script>
@endsection