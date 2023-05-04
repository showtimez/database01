<x-layout header="Tutti i videogame inseriti">


    <div class="container my-5 shadow">
        <div class="row justify-content-center">
            @foreach ($games as $index => $game)
                <div class="col-12 col-md-4 py-5">
                    <div class="card customCard shadow" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-delay="{{ $index * 100 }}">
                        <img src="https://picsum.photos/300" class="card-img-top" alt="...">
                        <div class="card-body">
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
