@extends('layouts.app')

@section('content')

<div class="container">
  <div class="card-container">
    @foreach($formati as $key=> $formato)
    <div class="card">
      <img src="{{ $formato['src'] }}" alt="">
      <div class="overlay">
        <a href="{{ route('pagina-dettagli', ['id'=> $key]) }}"> {{$formato ['titolo'] }} </a>
      </div>
    </div>
   @endforeach
  </div>
</div>

@endsection
