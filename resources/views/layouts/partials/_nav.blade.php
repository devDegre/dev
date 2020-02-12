<nav class="navbar navbar-default navbar-static-top">
<div class="container-fluid">

<!-- BRAND -->
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#alignment-example" aria-expanded="false">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="{{ route('root_path') }}">{{ config('app.name') }}</a>
</div>

<!-- COLLAPSIBLE NAVBAR -->
<div class="collapse navbar-collapse" id="alignment-example">

<!-- Links -->
<ul class="nav navbar-nav">
<li class=""><a href="{{ route('root_path') }}">Home</a></li>
<li class=""><a href="{{ route('about_path') }}">About</a></li>
<li><a href="#">Artisans</a></li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Planet<span class="caret"></span></a>
<ul class="dropdown-menu" aria-labelledby="about-us">
<li><a href="http://laravel.com">Laravel.com</a></li>
<li><a href="http://laravel.io">Laravel.io</a></li>
<li><a href="http://laracasts.com">Laracasts</a></li>
<li><a href="http://larajobs.com">Larajobs</a></li>
<li><a href="http://laravel-news.com">Laravel News</a></li>
<li><a href="http://larachat.com">Larachat</a></li>

</ul>
</li>
<li class=""><a href="">Contacts</a></li>
</ul>
 <ul class="nav navbar-nav navbar-right">
   <li><a href="#">Login</a></li>
<li><a href="#">Register</a></li>
 </ul>
</div>

</div>
</nav>