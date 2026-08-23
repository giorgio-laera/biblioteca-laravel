
@props(['title','author', 'year', 'genre'=>''])

<div class="list-group-item d-flex justify-content-between align-items-center py-3 default_bg">
    <div>
      <!-- Gruppo Titolo + Badge di disponibilità -->
      <div class="d-flex align-items-center gap-2 mb-1">
        <h5 class="m-0 fw-bold ">{{$title}}</h5>
        
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
      <p class="mb-0 text-secondary small">{{$year}} &bull; {{$author}} {{$genre ?? " &bull;"}} {{$genre}}</p>
    </div>
    
    <!-- Pulsanti di azione rapidi (Modifica / Elimina) -->
    <div class="btn-group btn-group-sm">
      <a href="#" class="btn btn-outline-secondary" title="Modifica"><i class="bi bi-pencil"></i></a>
      <button class="btn btn-outline-danger" title="Elimina"><i class="bi bi-trash"></i></button>
    </div>
  </div>