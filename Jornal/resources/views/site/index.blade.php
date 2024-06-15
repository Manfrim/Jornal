@extends('site.layouts.basico')


@section('conteudo')
    <style>
        #opcoes a{
            color: white;
        }
        #botao-pesquisar:hover{
            color: white;
        }
    </style>
    <section>
        <img id = "imagem_fundo" src="public/img/Capa.jpg" alt="logotipo">
    </section>
    <main>
        <div class = "container-fluid" id = "separador">
            <div class = "row">
                <div class = "col-md-3">
                    <h1>ÚLTIMAS NOTÍCIAS</h1>
                </div>
                <div class = "col-md-9">
                    <hr id = "linha-separador">
                </div>
            </div>
        </div>
        <div class = "container-fluid" id = "materias-principais">
            <div class = "row">
                @foreach($ultimos3 as $item)
                    <div class = "{{$i}}">
                        <div class="card" style="width: 24rem;  max-height: 30em;">
                            <a href="{{ route('site.lermateria', ['id' => $item->id]) }}">
                                <img src="public/img/{{$item->imagem_capa}}" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body" style="overflow-y: auto;">
                                <h5 class="card-title">{{$item->nome_materia}}</h5>
                                <p>Categoria Matéria</p>
                                <div class = "row" style = "justify-content: center;">
                                    <div class = "col-md-5">
                                        <a href="{{ route('site.lermateria', ['id' => $item->id]) }}" class="btn btn-outline-dark">Leia Agora</a>
                                    </div>
                                    <div class = "col-md-5">
                                        <a class="btn btn-outline-dark" data-bs-toggle="collapse" href="#{{$item->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            Saiba Mais
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class = "container-fluid" id = "resumos-materias">
                @foreach($ultimos3 as $item)
                <div style="min-height: 120px;">
                    <div class="collapse collapse-vertical" id="{{$item->id}}">
                        <div class="card card-body" style="width: 80vw;">
                        {{$item->resumo_materia}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>
    <section alt = "principal-escritor">
        <div class = "container-fluid" id = "pensamento_dia">
            <div class = "container">
                <div class = "row" style="justify-content: center;">
                    <div class = "col-md-4">
                        <img src="public/img/ideia.png" class="img-fluid" alt="...">
                    </div>
                    <div class = "col-md-8">
                        <h2><b>Pensamentos do Dia</b></h2>
                        @foreach($pensamento_do_dia as $item)
                        <p>{{$item->pensamento_do_dia}}</p>
                        <h3><b>{{$item->nome_autor}}</b></h3>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection