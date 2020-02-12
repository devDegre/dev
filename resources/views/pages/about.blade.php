@extends('layouts.default',['title'=>'About'])

@section('content')
  <div class="container">
 	<h2>What is laraDev?</h2>
 	<p>laraDev is a clone app of <a href="htpp://laramap.com" target="_blank">Laramap.com</a></p>

 	<div class="row">
 		<div class="col-md-6">
 			<p class="alert alert-warning">
 				<strong><i class="fa fa-exclamation-triangle"></i>This app has been built by <a href="https://twitter.com/degre">@degre </a> for learning purposes</strong>
 			</p>
 		</div>
 	</div>
 	<p>Feel free to help to improve the <a href="https://github.com/devDegre/dev">source code</a></p>
 	<hr>
    
    <h2>What is the website by which laraDev was inspired:).</h2>
    <p>More info <a href="https://laramap.com/p/about">here</a></p>

    <hr>

    <h2>which tools and services are used in Laracarte?</h2>
    <p>Basically it's built on laravel &amp; Bootstrap. but there's a bunch of services used for email and other sections.</p>

    <ul>
    	<li>Laravel</li>
    	<li>Bootstrap</li>
    	<li>Amazon S3</li>
    	<li>Mandrill</li>
    	<li>Google Maps</li>
    	<li>Gravatar</li>
    	<li>Antony Martin's Geolocation Package</li>
    	<li>Michel Fortin's Markdown Parser Package</li>
    	<li>Heroku</li>
    </ul>

 </div>
@stop 