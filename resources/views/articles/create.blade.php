@extends('layout')

@section('content')
<h1>hallo wak</h1>
<form action="{{ route('articles.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">nami</label>
        <input type="text" name="title" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="content">masukan</label>
        <textarea name="content" class="form-control" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
    <a href="{{ route('articles.index') }}" class="btn btn-secondary">Back</a>
</form>
@endsection
