@extends('layout.base')
@section('titulo', 'Videos')
@section('jumbo')
<section class="jumbotron text-center">
    <div class="container">
	    <h1 class="jumbotron-heading">Videos</h1>
	    <p class="lead text-muted">Alguns exemplos de sistemas em ação!</p>
	</div>
</section>
@endsection
@section('conteudo')
		<div class="container">

          <div class="row">
          @foreach ($resultados as $item)
            <div class="col-md-6">
			  <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
              <div class="card mb-6 shadow-sm">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22347%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20347%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16fd9326209%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16fd9326209%22%3E%3Crect%20width%3D%22347%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22116.203125%22%20y%3D%22120.103125%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text"><strong>{{ $item->titulo}}</strong></p>
                  <p class="card-text">{{ $item->descricao}}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
			  </a>
			  <br/>
            </div>
            @endforeach

        </div>

		<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-content">
				<div class="close-modal" data-dismiss="modal">
					<div class="lr">
						<div class="rl">
						</div>
					</div>
				</div>
				<div class="modal-body modal-video">
					<div class="embed-responsive embed-responsive-16by9">
					<video controls>
						<source src="videos/dash_votorantim.mp4" type="video/mp4">
					</video>
					</div>
				</div>
			</div>
		</div>
    </div>
@endsection
