@extends('partials.layout')
@section('title', 'Create Tag')
@section('content')
    <div class="card bg-base-300">
        <div class="card-body">
            <form action="{{ route('tags.store') }}" method="POST">
                @csrf
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">Tag Name</legend>
                    <input value="{{ old('name') }}" name="name" type="text" maxlength="20" class="input w-full @error('name') input-error @enderror" placeholder="Tag name" />
                    @error('name')
                        <p class="label text-error">{{ $message }}</p>
                    @enderror
                </fieldset>
                <button class="btn btn-primary">Create Tag</button>
            </form>
        </div>
    </div>
@endsection

