@extends('layouts.app')

@section('content')

<div class="container">
  <div class="card-container">
    @foreach($formati as $tipo=> $formato)
    <h2>{{ $tipo }}</h2>
    @foreach ($formato as $key=> $pasta)

      <div class="card">
        <img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}">
        <div class="overlay">
          <a href="{{ route('pagina-dettagli', ['id'=> $key]) }}"> {{$pasta ['titolo'] }} </a>
        </div>
      </div>
     @endforeach

    @endforeach



  </div>
</div>

@endsection
