@extends('layouts.sidebar')

@section('content')
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
    </svg>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Film</h1>
    </div>
    <a href="/film/create" type="button" class="btn btn-success mb-3">Tambah +</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                <use xlink:href="#check-circle-fill" />
            </svg>
            <div>
                {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif
    <table id="example" class="table table-striped dt-responsive nowrap" style="width:100%">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Poster</th>
                <th scope="col">Genre</th>
                <th scope="col">Rating Usia</th>
                <th scope="col">status</th>
                <th scope="col">Updated</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody class="align-middle">
            @php $no=1; @endphp
            @foreach ($data as $row)
                <tr>
                    <th>{{ $no++ }}</th>
                    <td>{{ $row->title }}</td>
                    <td>
                        <img src="{{ asset('/assets/img/posterfilm/' . $row->poster) }}" alt="" width="100px">
                    </td>
                    <td>{{ $row->genre }}</td>
                    <td>{{ $row->rating_usia }}</td>
                    <td>{{ $row->status }}</td>
                    <td>{{ $row->updated_at->diffForHumans() }}</td>
                    <td>
                        <div class="btn-group-horizontal" role="group" aria-label="Basic mixed styles example">
                            <a href="/film/edit/{{ $row->id }}" type="button" class="btn btn-warning"><i
                                    class="bi bi-pencil-square"></i></a>
                            <a href="/film/delete/{{ $row->id }}" type="button" class="btn btn-danger"><i
                                    class="bi bi-trash"></i></a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
