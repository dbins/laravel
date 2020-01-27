@extends('layout.base')
@section('titulo', 'Home')
@section('jumbo')
@include('layout.carousel_home')
@endsection
@section('conteudo')
<section id="conteudo">

		<div class="row">
			<div class="col-lg-12">
				<p>&nbsp;</p>
				<p align="center"><img class="img-responsive" src="img/logo.png" alt=""></p>
				<p class="text-center"><strong>Programação Web e Mobile</strong></p>
				<hr/>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<p>Seja bem vindo! Sou um profissional de inform&aacute;tica da cidade de S&atilde;o Paulo, que trabalha com a cria&ccedil;&atilde;o de sites, sistemas para a web, e-commerces, dashboards e aplicativos. Neste site, voc&ecirc; vai poder ver v&aacute;rios trabalhos e projetos realizados por mim. </p>
				<p>Todo problema espera por uma solução. Deixe eu ajudar você a atingir seus objetivos!</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2 mx-auto">
				<a href="{{ route('portfolio')}}" rel="tag" class="btn btn-lg btn-block btn-primary">
				Currículo...
				</a>
				<p>&nbsp;</p>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12 text-center">
				<h2>Habilidades</h2>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<div class="text-center">
					<img src="{{ asset('habilidades/analise.png')}}" border="0" alt="Análise de requisitos">
				</div>
				<p class="text-center">Análise de Dados</p>
			</div>
			<div class="col-sm-4">
				<div class="text-center">
					<img src="{{ asset('habilidades/sites.png')}}" border="0" alt="Criação de sites">
				</div>
				<p class="text-center">Criação de sites</p>
			</div>

			<div class="col-sm-4">
				<div class="text-center">
					<img src="{{ asset('habilidades/integracao.png')}}" border="0" alt="Integração entre sistemas">
				</div>
				<p class="text-center">Integração entre sistemas</p>
			</div>

			<div class="col-sm-4 portfolio-item">
				<div class="text-center">
					<img src="{{ asset('habilidades/dashboard.png')}}" border="0" alt="Dashboards">
				</div>
				<p class="text-center">Dashboards</p>
			</div>

			<div class="col-sm-4 portfolio-item">
				<div class="text-center">
					<img src="{{ asset('habilidades/database.png')}}" border="0" alt="Banco de Dados">
				</div>
				<p class="text-center">Banco de Dados</p>
			</div>

			<div class="col-sm-4 portfolio-item">
				<div class="text-center">
					<img src="{{ asset('habilidades/aplicativos.png')}}" border="0" alt="Aplicativos">
				</div>
				<p class="text-center">Aplicativos</p>
			</div>

		</div>
		<div class="row">
			<div class="col-lg-2 mx-auto">
				<a href="{{ route('portfolio')}}" rel="tag" class="btn btn-lg btn-block btn-primary">
				Saiba mais...
			</a>
            <p>&nbsp;</p>
            </div>
		</div>
        <div class="row">
			<div class="col-lg-12 text-center">
				<h2>Projetos em destaque</h2>
				<hr>
			</div>
		</div>
        <div class="row">
        @foreach ($resultados as $item)
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22347%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20347%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16fd9326209%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16fd9326209%22%3E%3Crect%20width%3D%22347%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22116.203125%22%20y%3D%22120.103125%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text"><strong>{{ $item->titulo}}</strong></p>
                  <p class="card-text">{{ $item->descricao}}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Detalhes</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        @endforeach
	</div>
</section>
@endsection
