@extends('layouts.book')
@section('title', 'libri')

@section('content')
<div class="d-flex justify-content-between align-items-center my-4">
  <h3 class="m-0 fw-bold">Elenco Libri in Biblioteca</h3>
  {{-- BUTTON FOR CREATE NEW BOOK --}}
  <button href="#" class="btn btn-primary d-flex align-items-center gap-2 shadow-sm">
    <i class="bi bi-plus-circle"></i>  Nuovo Libro
  </button>
</div>

<div class="list-group list-group-flush  rounded shadow-sm p-2 default_bg">
    
  <!-- RIGA 1 -->
  <!-- d-flex e justify-content-between separano il testo dai pulsanti di azione sulla destra -->
  <div class="list-group-item d-flex justify-content-between align-items-center py-3 default_bg">
    <div>
      <!-- Gruppo Titolo + Badge di disponibilità -->
      <div class="d-flex align-items-center gap-2 mb-1">
        <h5 class="m-0 fw-bold ">Il Signore degli Anelli</h5>
        
        <!-- BADGE DISPONIBILE (Stile Pill Minimal) -->
        <span class="badge rounded-pill bg-success-subtle text-success border border-success-subtle d-inline-flex align-items-center gap-1 style-badge">
          <span class="p-1 bg-success rounded-circle animate-pulse" style="width: 6px; height: 6px;"></span>
          Disponibile
        </span>
      </div>
      {{-- variante per lo stato in prestito --}}
      {{-- <span class="badge rounded-pill bg-warning-subtle text-warning-emphasis border border-warning-subtle d-inline-flex align-items-center gap-1 style-badge">
        <span class="p-1 bg-warning rounded-circle" style="width: 6px; height: 6px;"></span>
        In Prestito
      </span> --}}
      
      <!-- Sottotitolo -->
      <p class="mb-0 text-secondary small">Autore: J.R.R. Tolkien &bull; Fantasy</p>
    </div>
    
    <!-- Pulsanti di azione rapidi (Modifica / Elimina) -->
    <div class="btn-group btn-group-sm">
      <a href="#" class="btn btn-outline-secondary" title="Modifica"><i class="bi bi-pencil"></i></a>
      <button class="btn btn-outline-danger" title="Elimina"><i class="bi bi-trash"></i></button>
    </div>
  </div>

 

</div>
    
@endsection
    
