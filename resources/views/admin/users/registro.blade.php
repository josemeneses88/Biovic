@extends('admin.layouts.app')
@section('content')
    <div class="page-inner">
        <div class="col-12">

            @component('components.card-form', [
                //la direccion de la carpeta donde esta el componente
                'titulo' => 'Registrar usuario', //titulo que se ve en el cajon azul
                'show' => false, // salso o verdadero para que se muestre
            ])
                Hola mundo!
            @endcomponent
            {{-- <div class="card">
            <h1>nuevo elemento</h1>
        </div> --}}
            <form action="{{ route('usuarios.store') }}" method="POST" class="needs-validation" novalidate>
                @csrf
                @method ('POST')
                <div class="form-group">
                    <label class="form-label" for="name">Nombre <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name') }}" required>

                    @error('name')
                        <div class="invalid-feedback">
                            ${{ message }}

                        </div>
                    @enderror

                </div>
                <div class="form-group">
                    <label class="form-label" for="email">Correo electronico <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror"
                        value="{{ old('email') }}" required>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="form-group">
                    <label class="form-label" for="password">contraseña <span class="text-danger">*</span></label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                        value="{{ old('password') }}" required>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>



                <div class="form-group">
                    <label class="form-label" for="confirm-password">confirmar contraseña <span
                            class="text-danger">*</span></label>
                    <input type="password" class="form-control @error('confirm-password') is-invalid @enderror"
                        value="{{ old('confirm-password') }}" required>
                    @error('confirm-password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="row justify-content-between mx-2 mt-4">
                    <a href="{{ route('usuarios.index') }}" class="btn btn-default col-12 col-md-5">cancelar</a>
                        <button class="btn btn-success col-12 col-md-5"> registrar</button>
                    
                </div>

            </form>
        </div>
    </div>
@endsection
