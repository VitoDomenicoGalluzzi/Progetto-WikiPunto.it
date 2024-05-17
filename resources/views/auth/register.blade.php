<x-layout>
    
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                
                <form method="POST" action="{{route('register')}}" class="p-5 shadow rounded-5 ">

                    @csrf

                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-6">
                                <h1 class="fw-bold p-5 text-center">Registrati</h1>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="InputName" class="form-label">Nome Cognome</label>
                        <input name="name" type="text" class="form-control" id="InputName">
                        @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="InputEmail" class="form-label">Indirizzo Email</label>
                        <input name="email" type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp">
                        @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="InputPassword" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="InputPassword">
                        @error('password') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="InputPasswordConfirm" class="form-label">Conferma Password</label>
                        <input name="password_confirmation" type="password" class="form-control" id="InputPasswordConfirm">
                        @error('password_confirmation') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-primary mt-5">Registrati</button>
                    
                </form>

            </div>
        </div>
    </div>
    
</x-layout>