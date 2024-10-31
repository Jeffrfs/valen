@extends('layout')

@section('content')
<h1>Edit Article</h1>
<form action="{{ route('articles.update', $article) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">nami</label>
        <input type="text" name="title" class="form-control" value="{{ $article->title }}" required>
    </div>
    <div class="form-group">
        <label for="content">masukan</label>
        <textarea name="content" class="form-control" required>{{ $article->content }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('articles.index') }}" class="btn btn-secondary">Back</a>
</form>
@endsection
