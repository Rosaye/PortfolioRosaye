@extends('layouts.template')

@section('content')

<div class="title">

    <h1>Nicolas Rosaye</h1>
    <p>Étudiant en conception UX / UI</p>

    <div class="getdown_button">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
            <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
        </svg>
    </div>

</div>

<div class="container-fluid p-0">
    <div class="row portfolio-area" id="spacement">

        @foreach ($photos as $p)
            <div class="mix col-md-6 col-lg-3 rened">
                <a onClick="parent.location='/projets/{{ $p->id }}'" class="portfolio-item pi-style2 set-bg"
                data-setbg="{{ $p->url }}">
                <div class="pi-inner">
                    <h2>Voir le projet</h2>
                </div>
                </a>
                <div class="portfolio-meta">
                    <h2>{{$p->titre}}</h2>
                    <p>Graphic design</p>
                </div>
            </div>
        @endforeach

    </div>
</div>    

<div class="container-md cv">
    <div>
        <a href="https://i.ibb.co/KW8Fyt1/cv-pageweb-nicolasrosaye-white-fr-1.jpg" class="appear btn btn-dark">Téléchargez mon cv!</a>
    </div>
</div>





@endsection