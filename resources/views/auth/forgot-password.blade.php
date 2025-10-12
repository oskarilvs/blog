@extends('partials.layout')
@section('title', 'Forgot Password')
@section('content')
    <div class="card bg-base-300">
        <div class="card-body">
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                @if (session('status'))
                <div class="alert alert-success mb-4">
                    {{ session('status') }}
                </div>
            @endif

                <fieldset class="fieldset">
                    <legend class="fieldset-legend">{{ __('Email') }}</legend>
                    <input value="{{ old('email') }}" name="email" type="email" required autofocus
                        class="input w-full @error('email') input-error @enderror" placeholder="Email" />
                    @error('email')
                        <p class="label text-error">{{ $message }}</p>
                    @enderror
                </fieldset>

                <div class="flex items-center justify-end mt-4">
                    <button class="btn btn-primary">
                        {{ __('Email Password Reset Link') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection


