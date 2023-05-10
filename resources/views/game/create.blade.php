<x-layout>
    <x-header header="Inserisci un videogame"></x-header>

    <nav class="navbar navbar-expand-lg bg-dark p-3 navbar-dark">
        <div class="container-fluid">
        </div>
    </nav>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            {{-- form --}}
            <form action="{{ route('game.store') }}" method="POST" class="p-5 shadow" enctype="multipart/form-data">

                {{-- inserire errore session --}}
                @if (count($errors) > 0)
                <div class = "alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @csrf

                <div class="mb-3">
                  <label for="title" class="form-label">Titolo del videogioco <span class="text-danger">*</span> </label>
                  <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}" >
                </div>

                <div class="mb-3">
                    <label for="cover" class="form-label">Inserisci immagine <span class="text-danger">*</span> </label>
                    <input type="file" name="cover" class="form-control" id="cover"  >
                  </div>

                <div class="mb-3">
                    <label for="producer" class="form-label">Casa Produttrice <span class="text-danger">*</span></label>
                    <input type="text" name="producer" class="form-control" id="producer" value="{{ old('producer') }}" >
                  </div>

                  <div class="mb-3">
                    <label for="description" class="form-label">Descrizione <span class="text-danger">*</span></label>
                    <textarea name="description" id="desctiption" cols="30" rows="7" class="form-control" >{{ old('description') }}</textarea>
                  </div>

                <button type="submit" class="btn btn-primary">Inserisci</button><p class="my-3"><span class="text-danger">*</span>Required</p>
              </form>
        </div>
    </div>
</div>







</x-layout>
