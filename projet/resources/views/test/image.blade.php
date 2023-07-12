@extends('test.page.app')
@section('contenu')
<style>
    body {
    background: #f1f1f1 !important;
  }
  
  body .container {
    max-width: 1100px;
  }
  
  #filter-buttons button {
    border-radius: 3px;
    background: #fff;
    border-color: transparent;
  }
  
  #filter-buttons button:hover {
    background: #ddd;
  }
  
  #filter-buttons button.active {
    color: #fff;
    background: #6c757d;
  }
  
  #filterable-cards .card {
    width: 15rem;
    border: 2px solid transparent;
  }
  
  #filterable-cards .card.hide {
    display: none;
  }
  
  @media (max-width: 600px) {
    #filterable-cards {
      justify-content: center;
    }
  
    #filterable-cards .card {
      width: calc(100% / 2 - 10px);
    }
  }
</style>
<!-- Website - www.codingnepalweb.com -->
    <div class="container">
       @if(Session::get('ajout'))
       <div class="alert alert-info alert-dismissible fade show">
            {{ Session::get('ajout') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
       </div>

       @endif

       @if(Session::get('pas'))
       <div class="alert alert-danger alert-dismissible fade show">
            {{ Session::get('pas') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>

       </div>

       @endif
      <!-- Images Filter Buttons Section -->
      <div class="row mt-1" id="filter-buttons">
        <div class="col-12">
          <button class="btn mb-2 me-1 active" data-filter="all">afficher tout</button>
          <button class="btn mb-2 mx-1" data-filter="musculation">musculation</button>
          <button class="btn mb-2 mx-1" data-filter="culturisme">culturisme</button>
          <button class="btn mb-2 mx-1" data-filter="course">course</button>
          <a href="#materiel" class="btn btn-primary " data-toggle="modal">+ ajouter materiel</a>
        </div>
      </div>

      <!-- Filterable Images / Cards Section -->
      <div class="row px-2 mt-4 gap-3" id="filterable-cards">

        @foreach($image as $images)
        <div class="card p-0" data-name="{{$images->type}}">
          <img src="{{asset('uploads/materiel/'.$images->image)}}" alt="img" height="200px">
          <div class="card-body">
            <h6 class="card-title">{{$images->nom}}</h6>
            <p class="card-text">{{$images->description}}</p>
          </div>
        </div>
        @endforeach

      </div>
    </div>

    @include('test.modalmateriel')

@endsection
