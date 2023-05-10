<x-layout >
    <x-header header="Tutti i videogame inseriti"></x-header>

    <nav class="navbar navbar-expand-lg bg-dark p-3 navbar-dark ">
        <div class="container-fluid ">
        </div>
    </nav>
<div class="container my-5 shadow">
    <div class="row justify-content-center">
        @foreach ($games as $game)
                <div class="col-12 col-md-3 py-5 text-center">
                    <div class="card customCard shadow" >
                        <div class="justify-content-center py-3">
                            <img src="{{ Storage::url($game->cover) }}" class="card-img-top gameImg" alt="...">
                        </div>
                        <div class="card-body shadow ">
                            <h5 class="card-title">{{ $game->title }}</h5>
                            <p class="small fst-italic text-muted">{{ $game->producer }}</p>
                            <p class="card-text">{{ $game->description }}</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


</x-layout>
