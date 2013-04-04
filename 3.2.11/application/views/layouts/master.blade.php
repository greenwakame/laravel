<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>マスタービュー</title>
<meta name="viewport" content="width=device-width,minimum-scale=1">
{{ Asset::styles() }}
<!--
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
-->
</head>
<body>
<div class="navbar">
<div class="navbar-inner">
<a class="brand" href="#">Laravel</a>
<ul class="nav">
 @section('navigation')
 <li>{{ HTML::link('collection/index','トップページ') }}</li>
 <li>{{ HTML::link('collection/create','新規作成') }}</li>
 <li>{{ HTML::link('mail/index','お問い合わせ') }}</li>
 @yield_section
</ul>
</div>
</div>
<div class="container">
<div class="row">
 @yield('content')
</div>
</div>
{{ Asset::scripts() }}
<!--
<script src="js/jquery-1.9.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
-->
</body>
</html>