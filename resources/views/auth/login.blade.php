<x-layout>
    
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                
                <form method="POST" action="{{route('login')}}" class="p-5 shadow rounded-5 ">

                    @csrf

                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-6">
                                <h1 class="fw-bold p-5 text-center">Accedi</h1>
                            </div>
                        </div>
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
                    
                    <button type="submit" class="btn btn-primary mt-5">Accedi</button>
                    
                </form>

            </div>
        </div>
    </div>
    
</x-layout>