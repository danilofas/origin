@include('layout._includes.header')
<div class="row">
    <form action="{{route('login.logar')}}" method="post">
        <div class="row center">
            @csrf
            <p style="text-align: center; font-size: 20px">Digite seus dados:</p>
            <div class="input-field col s3 offset-s3">
                <input id="email" name="email" type="text" class="validate">
                <label for="email">E-mail</label>
            </div>
            <div class="input-field col s3">
                <input id="senha" name="senha" type="password" class="validate">
                <label for="senha">Senha</label>
            </div>

        </div>
        <div class="row center">
                <button class="btn waves-ligth">Entrar</button>
            </div>
    </form>
</div>
@include('layout._includes.footer')
