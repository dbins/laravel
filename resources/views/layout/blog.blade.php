@extends('layout.base')
@section('titulo', 'Blog')
@section('conteudo')
<section id="conteudo">
        <p>&nbsp;</p>
		<div class="jumbotron  text-white rounded bg-dark">
            <div class="container">
			  <h1 class="display-4 font-italic">Calculando distâncias com SQL</h1>
			  <p class="lead my-3">Aprenda as várias formas de calcular distâncias entre dois pontos.</p>
			  <p class="lead mb-0"><a href="#" rel="tag" class="text-white font-weight-bold">Continue lendo...</a></p>
			</div>
		</div>


	<div class="row">
    @foreach ($resultados as $item)
    <div class="col-md-6">
        <div class="card mb-4">
          <div class="card-block">
			<img class="card-img-top flex-auto" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail" style="width: 100%; height: 250px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16fd91c2d0a%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16fd91c2d0a%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.1875%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">

            <h4 class="card-title">{{ $item->titulo}}</h4>
            <p class="card-text">{{ $item->descricao}}</p>
          </div>
          <div class="card-footer">
            <p class="card-text text-right">{{ $item->categoria}}</p>
          </div>
        </div>
	</div>
    @endforeach
	</div>

</section>
@endsection
