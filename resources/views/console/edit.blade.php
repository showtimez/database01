<x-layout>

    <x-header header="Modifica una console"></x-header>
    <nav class="navbar navbar-expand-lg bg-dark p-3 navbar-dark">
        <div class="container-fluid">
        </div>
    </nav>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            {{-- form --}}
            <form action="{{ route('console.update', compact('console'))}}" method="POST" class="p-5 shadow" enctype="multipart/form-data">
                @csrf
                @method('put')
                
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
                

                <div class="mb-3">
                    <label for="name" class="form-label">Nome della console <span class="text-danger small">*</span></label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ $console->name }}">
                </div>

                <div class="mb-3">
                    <label for="brand" class="form-label">Brand <span class="text-danger small">*</span></label>
                    <input type="text" name="brand" class="form-control" id="brand" value="{{ $console->brand }}">
                </div>
                 <div class="mt-3 text-center">
                    <label for="actualLogo" class="form-label">Logo attuale</label> <br>
                    <img width="200" src="{{ Storage::url($console->logo) }}" alt="actualLogo">
                </div>
                <div class="mb-3">
                    <label for="logo" class="form-label">Nuovo Logo <span class="text-danger small">*</span></label>
                    <input type="file" name="logo" class="form-control" id="logo">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Cenni di storia <span class="text-danger small">*</span></label>
                    <textarea name="description" id="description" cols="30" rows="7" class="form-control">
                        {{ $console->description }}
                    </textarea>
                </div>

                <button type="submit"  class="btn btn-primary">Modifica la tua console</button>
                <a href="{{ route('console.index') }}" type="submit" class="btn btn-outline-warning">Torna indietro</a>
            </form>
        </div>
    </div>
</div>






</x-layout>
