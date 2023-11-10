@extends('layouts.app')
@section('template')
@section('content')

<style>


#botonpass{
color:rgb(255, 255, 255);
letter-spacing: 4px;
font-size: 24px;
border:10px;
border: 2px solid #feffff;


transition: 0.5s;
}

 #botonpass:hover{
background: #04f066;
box-shadow: 0 0 10px #04f066, 0 0 40px 
#04f066, 0 0 80px #04f066;

 }

.container{
background-image:url("img/capula.png");
background-repeat: no-repeat;
background-size: cover;

}


#pri{
    border-radius: 5%;
   background: hsla(0, 8%, 53%, 0.2);
   backdrop-filter: blur(5px);
   height: 20ch;

}




</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div id="pri" class="card">

                <div class="card-header">{{ __('Restablecer Contraseña') }}</div>

                <div  class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('Estado') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Dirección de correo electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('Correo electrónico')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div id="botonpass" class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-white">
                                    {{ __('Enviar enlace para restablecer contraseña') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
