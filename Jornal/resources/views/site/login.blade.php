@extends('site.layouts.basico')


@section('conteudo')
    <main>
        <div class = "container-fluid vh-100 d-flex justify-content-center align-items-center" id = "estrutura-login">
            <form method="POST" action="{{ route('site.validalogin') }}">
            @csrf
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label" style="margin-right:1px;">Usuário:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" name="email">
                    </div>
                </div>
                <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label" style="margin-right:1px;">Senha:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" name="password">
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-dark">Entrar</button>
                </form>
        </div>
    </main>
@endsection