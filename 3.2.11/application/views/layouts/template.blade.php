<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>テンプレート</title>
@yield('jqmobile')
</head>
<body>
<div data-role="page" id="page1">
<div data-role="header" style="text-align:center" data-theme="b">
<!--<header style="background-color:#6FF">-->
{{ $header }}
<!--</header>-->
</div>
<!--<section style="background-color:#6F3">-->
<div data-role="content">
{{ $content }}
</div>
<!--</section>-->
<!--<footer>-->
<div data-role="footer" style="text-align:center" data-theme="b">
view/layouts/template
</div>
</div>
<!--</footer>-->
</body>
</html>