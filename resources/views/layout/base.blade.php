<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>:: {{config('app.name')}} :: @yield('titulo')</title>
		<link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
		<meta name="author" content="Bins - Desenvolvimento de sistemas">
		<meta name="description" content="Portfólio Bins - Desenvolvimento de sistemas para a web"/>
		<meta name="keywords" content="Sistemas, Sites, PHP, ASP Clássico, SQL, MySQL, Mobile" />

		<meta property="og:url"  content="http://www.dbins.com.br" />
		<meta property="og:type" content="article" />
		<meta property="og:title"  content="Bins - Programador" />
		<meta property="og:description" content="Portfólio Bins - Desenvolvimento de sistemas para a web, sites, mobile e lojas virtuais" />
		<meta property="og:image" content="http://www.dbins.com.br/logo.jpg" />


		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@b1n5">
		<meta name="twitter:title" content="Bins - Programador">
		<meta name="twitter:description" content="Portfólio Bins - Desenvolvimento de sistemas para a web, sites, mobile e lojas virtuais">
		<meta name="twitter:creator" content="@b1n5">
		<meta name="twitter:image" content="http://www.dbins.com.br/logo.jpg">
	</head>

	<body id="index">
        @include('layout.header')
        @yield('jumbo')
		<div class="container">
        @yield('conteudo')
        </div>
        @include('layout.footer')
		<script src="{{ asset('js/jquery-3.4.1.min.js')}}"></script>
		<script src="{{ asset('js/bootstrap.min.js')}}"></script>
		<script src="{{ asset('js/contato.js')}}"></script>
	</body>
</html>
