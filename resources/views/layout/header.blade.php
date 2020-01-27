<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand" href="{{ route('home')}}" rel="tag">:: BINS ::</a>
	<div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="{{ route('portfolio')}}" rel="tag">Portfolio</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('aplicativos')}}" rel="tag">Aplicativos</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('ferramentas')}}" rel="tag">Ferramentas</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('videos')}}" rel="tag">Videos</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('blog')}}" rel="tag">Blog</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('contato')}}" rel="tag">Contato</a>
			</li>
		</ul>
	</div>
</nav>
