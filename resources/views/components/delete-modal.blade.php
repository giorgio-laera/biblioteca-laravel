


<div class="modal fade" id="{{ $modalId }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-between">
        <h5 class="modal-title text-danger" id="exampleModalCenterTitle">ATTENZIONE</h5>
        <button type="button" class="close bg-white border-0" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Sei sicuro di voler eliminare il libro?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
         <form action="{{route('books.destroy', $book)}}" method="POST">
          @csrf
          @method('DELETE')

          <button type="submit" class="btn btn-danger">Elimina definitivamente</button>
        </form> 
      </div>
    </div>
  </div>
</div>
