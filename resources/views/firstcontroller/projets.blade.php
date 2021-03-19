@extends('layouts.template')

@section('content')

    

    <section class="sectiongrid">

        @foreach ($titre as $p)
            <div class="headerProjet container" style="text-align: center">
                <h3>{{ $p->titre }}</h3>
            </div>
            
        @endforeach


        <div class="work_grid">
            <div class="work_img">
                <img src="{{ $p->url }}" alt="">
            </div>
    
            <div class="work_img">
                <img src="{{ $p->urlp1 }}" alt="">
            </div>
    
            <div class="work_img">
                <img src="{{ $p->urlp2 }}" alt="">
            </div>
        </div>
    
        <div class="container-md p-desc">
            <div>
                <h3>Le projet</h3>
                <p>{{$p->urlp3}}</p>
            </div>

            <div>
                <h3>Conception du projet</h3>
                <p>{{$p->urlp4}}</p>
            </div>
        </div>

       <div class="behance-lnk">
        <button onclick="window.location.href='{{ $p->urlp5 }}'" type="button" class="btn btn-dark">Le behance</button>
       </div>

    </section>

@endsection