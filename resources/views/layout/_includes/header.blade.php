<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Projeto Laravel</title>
        {{-- Links css --}}
        <link rel="stylesheet" href="{{ asset('css/materialize.css')}}" />
        <link rel="stylesheet" href="{{ asset('css/standard.css')}}" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>
    <body>
        <header>
        <nav>
            <div class="nav-wrapper blue darken-4">
                <a href="{{route('index')}}" class="brand-logo">Senac</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                <li><a class="modal-trigger" href="#modalCadastros">Cadastros</a></li>
                <li><a href="badges.html">Relatórios</a></li>
                <li><a href="collapsible.html">Usuários</a></li>
                <li><a href="#modalBuscas" class="modal-trigger">Buscas</a></li>
                <li><a href="mobile.html">Mobile</a></li>
                </ul>
                <!-- Modal Structure Cadastros-->
                <div id="modalCadastros" class="modal">
                    <div class="modal-content center">
                        <h5 style="color: black;">Opções de Cadastros</h5>
                        <p style="color: black;">Selecione uma das opções</p>
                    <a href="{{ route('cursos.add')}}"><button type="button" class="btn waves-effect waves-green waves-light">Cursos</button></a>
                    <button type="button" href="{{ route('cursos.add')}}" class="btn waves-effect waves-green waves-light">Turmas</button>
                    <button type="button" href="{{ route('cursos.add')}}" class="btn waves-effect waves-green waves-light">Pesquisas</button>
                    <button type="button" href="{{ route('cursos.add')}}" class="btn waves-effect waves-green waves-light">Usuários</button>
                    </div>
                    <div class="modal-footer">
                    <a href="" class="modal-close waves-effect waves-green btn-flat">Sair</a>
                    </div>
                </div>

                <!-- Modal Structure Buscas-->
                <div id="modalBuscas" class="modal">
                    <div class="modal-content center">
                        <h5 style="color: black;">Opções de buscas</h5>
                        <p style="color: black;">Selecione uma das opções</p>
                    <a href="{{ route('cursos.search')}}"><button type="button" class="btn waves-effect waves-green waves-light">Cursos</button></a>
                    <button type="button" href="{{route('cursos.search')}}" class="btn waves-effect waves-green waves-light">Turmas</button>
                    <button type="button" href="{{ route('cursos.add')}}" class="btn waves-effect waves-green waves-light">Pesquisas</button>
                    <button type="button" href="{{ route('cursos.add')}}" class="btn waves-effect waves-green waves-light">Usuários</button>
                    </div>
                    <div class="modal-footer">
                    <a href="" class="modal-close waves-effect waves-green btn-flat">Sair</a>
                    </div>
                </div>
            </div>
            </nav>

            <ul class="sidenav" id="mobile-demo">
                <li><a href="sass.html">Sass</a></li>
                <li><a href="badges.html">Components</a></li>
                <li><a href="collapsible.html">Javascript</a></li>
                <li><a href="mobile.html">Mobile</a></li>
            </ul>

        </header>
