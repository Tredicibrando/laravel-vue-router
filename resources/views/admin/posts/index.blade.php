@extends('layouts.app')

@section('content')
<div class="container py-4">
    <a class="btn btn-primary" href="{{route('admin.posts.create')}}"> Nuovo post</a>
</div>

<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Cover</th>
            <th scope="col">Description</th>
            <th scope="col">Published At</th>
          </tr>
        </thead>
        <tbody>
         @foreach ($posts as $post)
          <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->slug }}</td>
            <td>{{ $post->cover }}</td>
            <td>{{ $post->description }}</td>
            <td>{{ $post->published_at }}</td>
            <td>
                <a class="btn btn-warning" href="{{route('admin.posts.edit', $post )}}">Modifica</a>
            </td>
            <td>
                <form action="{{route('admin.posts.destroy',$post)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Elimina</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
</div>


 

@endsection