<x-layout header="Chi siamo">

    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($partners as $partner)
                    <div class="col-12 col-md-3">
                        <div class="card" ">
                            <img src="https://picsum.photos/300" class="card-img-top" alt="...">
                            <div class="card-body">
                             <h5 class="card-title">{{ $partner->name }} {{ $partner->surname }}</h5>
                            <p class="small fst-italic text-muted">{{ $partner->age }}</p>
                            <p class="card-text">{{ $partner->description }}</p>
                             <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
