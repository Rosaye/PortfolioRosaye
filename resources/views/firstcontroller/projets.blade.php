@extends('layouts.template')

@section('content')

    

    <section class="sectiongrid">

        @foreach ($titre as $p)
            <div class="headerProjet container" style="text-align: center">
                <h1>{{ $id }} {{ $p->titre }}</h1>
            </div>

            {{ $p->url }}
                
        @endforeach

       <div class="main">
           <div class="gallery">
               <div class="img">
                   <img src="/images/thumbnails/thumbnail_fenderTune.png" alt="latete"/>
               </div>

               <div class="img">
                <img src="/images/Nicolas_face.png" alt="latete"/>
            </div>

            <div class="img">
                <img src="/images/thumbnails/thumbnail_mminetwork.png" alt="latete"/>
            </div>

            <div class="img">
                <img src="/images/portfolio/1.jpg" alt="latete"/>
            </div>

            <div class="img">
                <img src="/images/portfolio/2.jpg" alt="latete"/>
            </div>

           </div>

       </div>
    </section>

@endsection