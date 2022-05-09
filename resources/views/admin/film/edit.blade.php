@extends('layouts.sidebar')

@section('content')
    <section class="py-3">
        <div class="    row">
            <div class="col-md-12">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Edit Data Film</h1>
                </div>
                <form action="/film/edit/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating mb-2">
                        <input type="text" name="title" id="title" class="form-control" placeholder="title"
                            value="{{ $data->title }}">
                        <label for="title" class="form-label">Title</label><br>
                    </div>
                    <div class="mb-4">
                        <label for="poster" class="form-label">Poster</label><br>
                        <input type="file" name="poster" id="poster" class="form-control" placeholder="poster">
                    </div>
                    <div class="   form-floating mb-2">
                        <input type="text" name="genre" id="genre" class="form-control" placeholder="genre"
                            value="{{ $data->genre }}">
                        <label for=" genre" class="form-label">Genre</label><br>
                    </div>
                    <div class="form-floating mb-4">
                        <select name="rating_usia" id="rating_usia" class="form-select"
                            aria-label="Floating label select">
                            <option selected>{{ $data->rating_usia }}</option>
                            <option value="G">G</option>
                            <option value="PG">PG</option>
                            <option value="PG-13">PG-13</option>
                            <option value="R">R</option>
                            <option value="D">D</option>
                        </select>
                        <label for="rating_usia" class="form-label">Rating Usia</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" name="rating" id="rating" class="form-control" placeholder="rating"
                            value="{{ $data->rating }}">
                        <label for="rating" class="form-label">Rating</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" name="release_date" id="release_date" class="form-control"
                            placeholder="release_date" value="{{ $data->release_date }}">
                        <label for="release_date" class="form-label">Release Date</label>
                    </div>
                    <div class="form-floating mb-4">
                        <select name="status" id="status" class="form-select" aria-label="Floating label select">
                            <option selected>{{ $data->status }}</option>
                            <option value="Popular">Popular</option>
                            <option value="Now Playing">Now Playing</option>
                            <option value="Coming Soon">Coming Soon</option>
                        </select>
                        <label for="release_date" class="form-label">Status</label>
                    </div>
                    <div class="form-floating mb-2">
                        <textarea class="form-control" placeholder="overview" name="overview" id="overview"
                            style="height: 100px">{{ $data->overview }}</textarea>
                        <label for="overview">Overview</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="text" name="kode_film" id="kode_film" class="form-control" placeholder="kod_film"
                            value="{{ $data->kode_film }}">
                        <label for="kode_film">Kode Film</label>
                    </div>
                    <input type="submit" value="Save" name="edit" class="btn btn-primary">
                </form>
            </div>
        </div>
    </section>
@endsection
