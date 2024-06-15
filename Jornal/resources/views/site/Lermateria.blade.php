@extends('site.layouts.basico')


@section('conteudo')
    <main>
    @foreach ($materia as $item)
        
    
            <div class = "container-fluid" id = "container-ler-materia">
                <div class ="container">
                <h2>{!!$item->nome_materia!!}</h2>
                <p>{!!$item->resumo_materia!!}</p>
                <img src="../public/img/{{$item->imagem_1}}" class="img-fluid" alt="..." loading="lazy">
                <p>{!!$item->materia_p1!!}</p>
                <p>{!!$item->materia_p2!!}</p>
                <img src="../public/img/{{$item->imagem_2}}" class="img-fluid" alt="..." loading="lazy">
                <p>{!!$item->materia_p3!!}</p>
                <p>{!!$item->materia_p4!!}</p>
                <a href="{{ route('site.escritor') }}"><p class="fs-6"><p class = ".fs-6 text"><b>Prof. Manfrim, L. R.</b></p></a>
                </div>
            </div>
    @endforeach
    </main>

@endsection