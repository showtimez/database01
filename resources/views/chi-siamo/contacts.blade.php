<x-layout header="Contattaci">




<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            {{-- form --}}
            <form action="{{ route('chi-siamo.contacts.save') }}" method="POST" class="p-5 shadow">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">@if(session('contactReceived'))
                <div class="alert alert-success text-center">
                    {{ session('contactReceived') }}
                </div>
                @endif
                    </div>
                    </div>
                </div>
                @if (session('emailError'))
                <div class="alert alert-danger text-center">
                    {{ session('emailError') }}
                </div>
                @endif



                @csrf

                <div class="mb-3">
                  <label for="name" class="form-label">Inserisci il tuo nome</label>
                  <input type="text" name="name" class="form-control" id="name">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Inserisci la tua email</label>
                    <input type="email" name="email" class="form-control" id="email">
                  </div>

                  <div class="mb-3">
                    <label for="number" class="form-label">Inserisci il tuo numero</label>
                    <input type="number" name="number" class="form-control" id="number">
                  </div>

                  <div class="mb-3">
                    <label for="user_message" class="form-label">Messaggio</label>
                    <textarea name="user_message" id="user_message" cols="30" rows="7" class="form-control"></textarea>
                  </div>

                <button type="submit" class="btn btn-primary">Invia</button>
              </form>
        </div>
    </div>
</div>






</x-layout>
