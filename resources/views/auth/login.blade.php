<x-layout>
    <x-header header="Accedi"></x-header>
    <nav class="navbar navbar-expand-lg bg-dark p-3 navbar-dark">
        <div class="container-fluid">
        </div>
    </nav>


<div class="containter my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <form class="p-5 shadow" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                  <label for="email" class="form-label">Email </label>
                  <input type="email" name="email" class="form-control" id="email">

                </div>

                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="password">
                </div>

                <div class="mb-3 form-check">
                  <input type="checkbox"  name="remember" class="form-check-input" id="remember">
                  <label class="form-check-label" for="remember">Ricordami</label>
                </div>

                <button type="submit" class="btn btn-primary">Accedi</button>
              </form>
        </div>
    </div>
</div>











</x-layout>
