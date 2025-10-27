@extends('partials.layout')
@section('title', 'Tags')
@section('content')
    <h1 class="text-3xl">Tags</h1>
    <a href="{{ route('tags.create') }}" class="btn join-item btn-primary">New Tag</a>
    {{ $tags->links() }}
    <table class="table table-zebra">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Posts Count</th>
            <th>Created</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach($tags as $tag)
                <tr>
                    <td>{{ $tag->id }}</td>
                    <td>{{ $tag->name }}</td>
                    <td>{{ $tag->posts_count }}</td>
                    <td>{{ $tag->created_at }}</td>
                    <td>
                        <div class="join">
                            <a href="{{ route('tag', ['tag' => $tag]) }}" class="btn join-item btn-info">View Posts</a>
                            <a href="{{ route('tags.edit', ['tag' => $tag]) }}" class="btn join-item btn-warning">Edit</a>
                            <button type="submit" form="delete-form-{{$tag->id}}" class="btn join-item btn-error">Delete</button>
                        </div>
                        <form id="delete-form-{{$tag->id}}" action="{{ route('tags.destroy', ['tag' => $tag])}}" method="POST">
                                @csrf
                                @method('DELETE')
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $tags->links() }}
@endsection

