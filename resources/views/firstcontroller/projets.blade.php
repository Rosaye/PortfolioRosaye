@extends('layouts.template')

@section('content')

    @foreach ($titre as $p)
        <div class="headerProjet" style="text-align: center"><h1>La page {{ $id }} {{ $p->titre }} de mon projet</h1></div>

        {{ $p->url }}
                
    @endforeach

    <section class="sectionlol">
        skrrt
    </section>

@endsection