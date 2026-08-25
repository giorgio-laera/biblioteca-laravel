{{-- @props(['title', 'author', 'year', 'genre' => '', 'available', 'id']) --}}

 @php
      extract($book?->toArray() ?? []) 
 @endphp 

<div class="list-group-item d-flex justify-content-between align-items-center py-3 default_bg">
    <div>
        <!-- Gruppo Titolo + Badge di disponibilità -->
        <div class="d-flex align-items-center gap-2 mb-1">
            <h5 class="m-0 fw-bold ">{{ $title }}</h5>

            <!-- BADGE DISPONIBILE (Stile Pill Minimal) -->
            @if ($available)
                <span
                    class="badge rounded-pill bg-success-subtle text-success border border-success-subtle d-inline-flex align-items-center gap-1 style-badge">
                    <span class="p-1 bg-success rounded-circle animate-pulse" style="width: 6px; height: 6px;"></span>
                    Disponibile
                </span>
        </div>
    @else
        <span
            class="badge rounded-pill bg-warning-subtle text-warning-emphasis border border-warning-subtle d-inline-flex align-items-center gap-1 style-badge">
            <span class="p-1 bg-warning rounded-circle" style="width: 6px; height: 6px;"></span>
            In Prestito
        </span>
        @endif

        <!-- Sottotitolo -->
        <p class="mb-0 text-secondary small">{{ $year }} &bull; {{ $author }} {!! $genre ? "&bull;" : '' !!}
            {{ $genre }}</p>
    </div>

    <!-- Pulsanti di azione rapidi (Modifica / Elimina) -->
    <div class="btn-group btn-group-sm">
        <button  class="btn btn-outline-secondary" title="Modifica" data-bs-toggle="modal" data-bs-target="#editModal{{ $id }}"><i class="bi bi-pencil"></i></button>
        <button class="btn btn-outline-danger" title="Elimina" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $id }}"><i class="bi bi-trash"></i></button>
    </div>
    <x-book-modal modal-id="bookModal" />
    
</div>
