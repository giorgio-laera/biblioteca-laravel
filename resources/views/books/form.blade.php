
{{-- FORM GENERICO CHE GESTISCE SIA IL NUOVO CHE LA MODIFICA --}}
<div class="mb-3">
    <label class="form-label">Titolo</label>
    <input type="text" name="title" class="form-control" value="{{ old('title' , $book->title ?? '') }} " @required(true)>
    @error('title') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Copertina</label>
    <input type="file" name="cover" class="form-control" accept="image/*">
    @error('cover') <div class="text-danger">{{ $message }}</div> @enderror

    @if (isset($book) && $book->cover)
        <div class="mt-2">
            <img src="{{asset('storage/' . $book->cover) }}" alt="Copertina attuale" style="max-height: 100px;">
        </div>
    @endif
</div>

<div class="mb-3">
    <label class="form-label">Autore</label>
    <input type="text" name="author" class="form-control" value="{{ old('author', $book->author ?? '') }}" @required(true)>
    @error('author') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Anno</label>
    <input type="number" name="year" maxlength="4" class="form-control" value="{{ old('year', $book->year ?? '') }}"@required(true)>
    @error('year') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Genere</label>
    <input type="text" name="genre" class="form-control" value="{{ old('genre', $book->genre ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Descrizione</label>
    <textarea name="description" class="form-control" rows="4">{{ $errors->any() ? old('description') : ($book->description ?? '') }}</textarea>
</div>
