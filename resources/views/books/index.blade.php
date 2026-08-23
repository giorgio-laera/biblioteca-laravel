@extends('layouts.book')
@section('title', 'libri')

@section('countBooks', $books->count())
    


@section('content')
<div class="d-flex justify-content-between align-items-center my-4">
  <h3 class="m-0 fw-bold">Elenco Libri in Biblioteca</h3>
  {{-- BUTTON FOR CREATE NEW BOOK --}}
  <button class="btn btn-primary d-flex align-items-center gap-2 shadow-sm" data-bs-toggle="modal" data-bs-target="#bookModal">
    <i class="bi bi-plus-circle"></i>  Nuovo Libro
  </button>
</div>
    {{-- Modal form create new book --}}
<x-book-modal modal-id="bookModal" />

<div class="list-group list-group-flush  rounded shadow-sm p-2 default_bg">
   
  <!-- RIGA 1 -->
  <!-- d-flex e justify-content-between separano il testo dai pulsanti di azione sulla destra -->

  @foreach ($books as $book)
  
  <x-bookCard :title="$book->title" :author="$book->author" :year="$book->year" :genre="$book->genre" :available="$book->available"/>
      
  @endforeach
  

</div>
    
@endsection
    
