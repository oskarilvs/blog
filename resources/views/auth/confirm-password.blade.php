@extends('partials.layout')
@section('title', 'Confirm Password')
@section('content')
    <div class="card bg-base-300">
        <div class="card-body">
            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <fieldset class="fieldset">
                    <legend class="fieldset-legend">{{ __('Password') }}</legend>
                    <input name="password" type="password" required autocomplete="current-password"
                        class="input w-full @error('password') input-error @enderror" placeholder="Password" />
                    @error('password')
                        <p class="label text-error">{{ $message }}</p>
                    @enderror
                </fieldset>
                
                <div class="flex justify-end mt-4">
                    <button class="btn btn-primary">
                        {{ __('Confirm') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
