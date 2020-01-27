@extends('layout.base')
@section('titulo', 'Contato')
@section('conteudo')
<div class="container-fluid">
    <form method="POST" action="{{ route('enviar')}}" class="needs-validation" novalidate="" onSubmit="return checkform_contato(this);">
        @csrf
        <div class="py-5 text-center">
			<h2>Contato</h2>
			<p class="lead">Precisa de um site ou aplicativo? Entre em contato comigo!</p>
		</div>

        <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="nome">Nome</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">N</span>
                        </div>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="nome" required="">
                        <div class="invalid-feedback" style="width: 100%;">
                            Seu nome é obrigatório.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email">E-mail</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input type="text" class="form-control" name="email" id="email" placeholder="email" required="">
                        <div class="invalid-feedback" style="width: 100%;">
                            Seu e-mail é obrigatório.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="telefone">Telefone</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">T</span>
                        </div>
                        <input type="text" class="form-control" name="telefone" id="telefone" placeholder="telefone" required="">
                        <div class="invalid-feedback" style="width: 100%;">
                            Por favor informe o seu telefone.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="mensagem">Mensagem</span></label>
                    <textarea class="form-control" name="mensagem" id="mensagem" rows="10"></textarea>
                </div>
            </div>
        </div>

        <div class="row">
			<div class="col-md-12">
				<input type="submit" class="btn btn-lg btn-block btn-primary" value="Enviar mensagem">
			</div>
		</div>
    </form>
</div>
@endsection
