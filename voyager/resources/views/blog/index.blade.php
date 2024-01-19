@extends('master')



@section('content')
<div class="row">

    <div class="col-md-12">

<h1>Listes des Projets </h1>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>
  </div>
  <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">

      </div>

  </div>
  <div class="row">
  @foreach ($Myprojets as $projets)

  <div class="col-md-4 my-2">
  <div class="card">
       <img class="card-img-top" src="{{ asset('storage/'.$projets->image) }}" alt="">
       <div class="card-body">
      <h4 class="card-title">{{ $projets->categorie }}</h4>
      <h4 class="card-title">{{ $projets->description }}</h4>
      <h4 class="card-title">{{ $projets->date }}</h4>
      <h4 class="card-title">{{ $projets->addresse }}</h4>
      <h4 class="card-title">{{ $projets->prix }}</h4>
      <p class="card-text">{{ str_limit($projets->body,100) }} </p>

  </div>
  </div>
  </div>
  @endforeach
  </div>
  </div>
  @endsection
