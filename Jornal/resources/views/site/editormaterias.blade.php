@extends('site.layouts.basico')


@section('conteudo')
    @if($auth)
    <section>
        <div class = "container-fluid" id ="botoes-editor-materia">
            <div class = "row">
                <div class = "col-md-2">
                    <button class = "btn btn-outline-dark"  onclick="aparecer1()">Adicionar Matéria</button>
                </div>
                <div class = "col-md-2">
                    <button class = "btn btn-outline-dark" onclick="aparecer2()">Editar Matéria</button>
                </div>
                <div class = "col-md-2">
                    <button class = "btn btn-outline-dark" onclick="aparecer3()">Excluir Matéria</button>
                </div>
                <div class = "col-md-2">
                    <button class = "btn btn-outline-dark" onclick="aparecer4()">Pensamento Do Dia</button>
                </div>
                <div class = "col-md-2">
                    <button class = "btn btn-outline-dark" onclick="aparecer5()">Adicionar Poritfolio</button>
                </div>
                <div class = "col-md-2">
                    <button class = "btn btn-outline-dark" onclick="aparecer6()">Adicionar e-book</button>
                </div>
            </div>
        </div>
    </section>
    <main>
        <div class = "d-none" id = "adicionarmateria">
            <div class = "container fluid">
                <form method="POST" action="{{ route('site.adicionamateria') }}">
                        <div class = "container">
                            <div class="alert">
                                <p>Para criar um título ou tópico, coloque o texto entre as tags &lt;b&gt;&lt;/b&gt;. Por exemplo: &lt;b&gt;<b>Título teste</b>&lt;/b&gt;.</p>
                                <p>Para criar espaços entre um titulo e um paragrafo utilize a tag &lt;br&gt;, poderá usar varias seguidas para criar o espaçamento necessário depois do paragrafo</p>
                                <p>Pelos testes coloque duas antes de criar um titulo dentro da area de um paragrafo e outra depois do titulo, exemplo: </p>
                                <p>&lt;br&gt;</p>
                                <p>&lt;br&gt;</p>
                                <p>&lt;b&gt;II - Titulo teste&lt;/b&gt;</p>
                                <p>&lt;br&gt;</p>
                                <p>Para texto <i>italico</i> coloque a palvara ou frase entre as tags &lt;i&gt;&lt;/i&gt;</p>
                                <p>para adicionar fotos coloque o nome da foto ex: foto_inovation.png. A foto dois ficara depois do segundo paragrafo e a foto de capa nao aparecerá na materia</p>
                            </div>
                        </div>
                @csrf
                <h5>Coloque o titulo da matéria</h5>
                <textarea class="form-control" placeholder="Leave a comment here" name="titulo"></textarea>
                <h5>Coloque o resumo da matéria</h5>
                <textarea class="form-control" placeholder="Leave a comment here" name="resumo"></textarea>
                <h5>Coloque o primeiro paragrafo</h5>
                <textarea class="form-control" placeholder="Leave a comment here" name="materia_p1"></textarea>
                <h5>Coloque o segundo paragrafo</h5>
                <textarea class="form-control" placeholder="Leave a comment here" name="materia_p2"></textarea>
                <h5>Coloque o terceiro paragrafo</h5>
                <textarea class="form-control" placeholder="Leave a comment here" name="materia_p3"></textarea>
                <h5>Coloque o quarto paragrafo</h5>
                <textarea class="form-control" placeholder="Leave a comment here" name="materia_p4"></textarea>
                <h5>Coloque o nome da imagem da capa</h5>
                <textarea class="form-control" placeholder="Leave a comment here" name="imagem_capa"></textarea>
                <h5>Coloque o nome da primeira imagem</h5>
                <textarea class="form-control" placeholder="Leave a comment here" name="imagem_1"></textarea>
                <h5>Coloque o nome da segunda imagem</h5>
                <textarea class="form-control" placeholder="Leave a comment here" name="imagem_2"></textarea>
                <h5>Categoria da Materia<h5>
                <textarea class="form-control" placeholder="Leave a comment here" name="categoria"></textarea>
                <br>
                <button type="submit" class="btn btn-outline-danger">Adicionar Matéria</button>
            </form>
            </div>
        </div>

        <div class = "d-none" id = "editarmateria">
            <div class = "container">   
                @foreach(DB::table('jornal')->get() as $item)
                    <h2>{{$item->nome_materia}}</h2>
                    <button class = "btn btn-outline-dark" onclick="edicaomateria({{$item->id}})">Editar</button>
                    <div class = "d-none" id = "form-editar-materia-{{$item->id}}">
                        <div class = "container">
                            <div class="alert">
                                <p>Para criar um título ou tópico, coloque o texto entre as tags &lt;b&gt;&lt;/b&gt;. Por exemplo: &lt;b&gt;<b>Título teste</b>&lt;/b&gt;.</p>
                                <p>Para criar espaços entre um titulo e um paragrafo utilize a tag &lt;br&gt;, poderá usar varias seguidas para criar o espaçamento necessário depois do paragrafo</p>
                                <p>Pelos testes coloque duas antes de criar um titulo dentro da area de um paragrafo e outra depois do titulo, exemplo: </p>
                                <p>&lt;br&gt;</p>
                                <p>&lt;br&gt;</p>
                                <p>&lt;b&gt;II - Titulo teste&lt;/b&gt;</p>
                                <p>&lt;br&gt;</p>
                                <p>Para texto <i>italico</i> coloque a palvara ou frase entre as tags &lt;i&gt;&lt;/i&gt;</p>
                                <p>para adicionar fotos coloque o nome da foto ex: foto_inovation.png. A foto dois ficara depois do segundo paragrafo e a foto de capa nao aparecerá na materia</p>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('site.editarmateria') }}">
                        @csrf
                        <h5>Coloque o titulo da matéria</h5>
                        <textarea class="form-control" placeholder="Leave a comment here" name="titulo">{{$item->nome_materia}}</textarea>
                        <h5>Coloque o resumo da matéria</h5>
                        <textarea class="form-control" placeholder="Leave a comment here" name="resumo">{{$item->resumo_materia}}</textarea>
                        <h5>Coloque o primeiro paragrafo</h5>
                        <textarea class="form-control" placeholder="Leave a comment here" name="materia_p1">{{$item->materia_p1}}</textarea>
                        <h5>Coloque o segundo paragrafo</h5>
                        <textarea class="form-control" placeholder="Leave a comment here" name="materia_p2">{{$item->materia_p2}}</textarea>
                        <h5>Coloque o terceiro paragrafo</h5>
                        <textarea class="form-control" placeholder="Leave a comment here" name="materia_p3">{{$item->materia_p3}}</textarea>
                        <h5>Coloque o quarto paragrafo</h5>
                        <textarea class="form-control" placeholder="Leave a comment here" name="materia_p4">{{$item->materia_p4}}</textarea>
                        <h5>Coloque o nome da imagem da capa</h5>
                        <textarea class="form-control" placeholder="Leave a comment here" name="imagem_capa">{{$item->imagem_capa}}</textarea>
                        <h5>Coloque o nome da primeira imagem</h5>
                        <textarea class="form-control" placeholder="Leave a comment here" name="imagem_1">{{$item->imagem_1}}</textarea>
                        <h5>Coloque o nome da segunda imagem</h5>
                        <textarea class="form-control" placeholder="Leave a comment here" name="imagem_2">{{$item->imagem_2}}</textarea>
                        <h5>Categoria da Materia<h5>
                        <textarea class="form-control" placeholder="Leave a comment here" name="categoria">{{$item->categoria}}</textarea>
                        <br>
                        <br>
                        
                        <button type="submit" class="btn btn-outline-danger" value = "{{$item->id}}" name = "id">Atualizar Matéria</button>
                    </form>
                    </div>
                @endforeach
            </div>
        </div>

        <div class = "d-none" id = "excluirmateria">
            <div class = "container">
            @foreach(DB::table('jornal')->get() as $item)
                <form action= {{ route("site.excluirmateria") }}>
                    
                    
                    <h2>{{$item->nome_materia}}</h2>
                    <button type = "submit" value = "{{$item->id}}" name = "id" class = "btn btn-outline-danger">excluir</button>
                
                </form>
            @endforeach
            </div>
        </div>
        <div class = "d-none" id = "pensamentododia">
            <div class = "container">
                <form action = {{ route("site.adicionarpensamento")}}>
                    @csrf
                    <h5>Coloque o pensamento do dia</h5>
                    <textarea class="form-control" placeholder="Leave a comment here" name="pensamentodia"></textarea>
                    <h5>Nome do autor</h5>
                    <textarea class="form-control" placeholder="Leave a comment here" name="nomeautor"></textarea>
                    <button type="submit" class="btn btn-outline-danger">Adicionar pensamento</button>
                </form>
            </div>
        </div>
        
        <div class = "d-none" id = "AdicionarPDF">
            <div class = "container">
                <form method="POST" action="{{ route('site.adicionarportifolio') }}" enctype="multipart/form-data">
                    @csrf
                    <h5>Adicione o arquivo</h5>
                    <input type="file" name="pdf">
                    <h5>Coloque o Titulo</h5>
                    <textarea class="form-control" placeholder="Leave a comment here" name="nome"></textarea>
                    <h5>Coloque a descrição</h5>
                    <textarea class="form-control" placeholder="Leave a comment here" name="descricao"></textarea>
                    <h5>Coloque o nome da imagem</h5>
                    <textarea class="form-control" placeholder="Leave a comment here" name="imagem_capa"></textarea>
                    <button type="submit" class="btn btn-outline-danger">Enviar PDF</button>
                  </form>
            </div>
        </div>
    </main>
    <script>
    var adicionar_materia = document.getElementById("adicionarmateria");
    var editarmateria = document.getElementById("editarmateria");
    var excluirmateria = document.getElementById("excluirmateria");
    var adicionarpensamento = document.getElementById("pensamentododia");
    var adicionarPDF = document.getElementById("AdicionarPDF")


    function hideElement(element) {
        if (!element.classList.contains("d-none")) {
            element.classList.add("d-none");
        }
    }

    function toggleVisibility(element) {
        if (element.classList.contains("d-none")) {
            element.classList.remove("d-none");
        } else {
            element.classList.add("d-none");
        }
    }

    function aparecer1() {
        hideElement(editarmateria);
        hideElement(excluirmateria);
        toggleVisibility(adicionar_materia);
        hideElement(adicionarPDF);
        hideElement(adicionarpensamento);
    }

    function aparecer2() {
        hideElement(adicionar_materia);
        hideElement(excluirmateria);
        toggleVisibility(editarmateria);
        hideElement(adicionarPDF);
        hideElement(adicionarpensamento);
    }

    function aparecer3() {
        hideElement(adicionar_materia);
        hideElement(editarmateria);
        toggleVisibility(excluirmateria);
        hideElement(adicionarPDF);
        hideElement(adicionarpensamento);
    }
    function aparecer4() {
    hideElement(adicionar_materia);
    hideElement(editarmateria);
    hideElement(excluirmateria);
    hideElement(adicionarPDF);
    toggleVisibility(adicionarpensamento);
    }
    function aparecer5() {
    hideElement(adicionar_materia);
    hideElement(editarmateria);
    hideElement(excluirmateria);
    toggleVisibility(adicionarPDF);
    }
    function edicaomateria(id){
    var divEditarMateria = document.getElementById("form-editar-materia-" + id);
    if (divEditarMateria.classList.contains("d-none")) {
        divEditarMateria.classList.remove("d-none");
    } else {
        divEditarMateria.classList.add("d-none");
    }
    }

    </script>
    @else
    <script>
        window.location.href = "{{ route('site.login') }}";
    </script>
    @endif
@endsection