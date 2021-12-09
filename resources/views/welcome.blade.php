@extends('layouts.main')

@section('link')
    <link rel="stylesheet" href="/css/modal.css">
@endsection
@section('title', 'Home')

@section('content')

    @if(session('msg'))
        <p class="msg">{{ session('msg') }}</p>
    @endif
    <section class="search-container">
        <div class="content-search">
            <h1>Procure pelo Termo desejado</h1>
            <form action="/" method="get">
                @csrf
                <input type="search" name="search" id="search" placeholder="Procurar...">
            </form>
        </div>
    </section>

    <section class="content">
        @if($search)
            <h1>Buscando por: <strong>{{$search}}</strong></h1>
        @else
            <h1>Veja aqui todos os Termos</h1>
            <p>Termos Cadastrados</p>
        @endif

            <div class="cards">
                @foreach($terms as $term)
                    <div class="card">
                        <div class="card-content-title">
                            <div class="card-opacity">
                                <h1>{{$term->name}}</h1>
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 id="title">{{$term->name}}</h2>
                            <p>{{$term->description}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            @if(count($terms)==0 && $search)
                <h3>Nenhum Termo com o nome "<strong>{{$search}}</strong>" encontrado. Veja todos os termos <a href="/">aqui</a></h3>
            @elseif(count($terms)==0)
                <h3>Nenhum Termo Cadastrado</h3>
            @endif
    </section>

@endsection

@extends('layouts.modal')
