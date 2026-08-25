

<div class="modal fade" id="{{ $modalId }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ $book ? route('books.update', $book) : route('books.store') }}"  method="POST" enctype="multipart/form-data">
                @csrf
                @if ($book)
                    @method('PUT')
                @endif
                <div class="modal-header">
                    <h5 class="modal-title">{{ $book ? 'Modifica libro' : 'Nuovo libro' }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    @include('books.form', ['book' => $book])
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                    <button type="submit" class="btn btn-primary">{{ $book ? 'Aggiorna' : 'Salva' }}</button>
                </div>
            </form>
        </div>
    </div>
</div>