@extends('layouts.admin')

@section('content')
    {{--    write  html here --}}

    @push('styles')
        <style>

            .actions-icons {
                font-size: 18px;
            }

            .color-danger {
                color: #f50c3b;
            }

            .color-warning {
                color: #1fe00e;
            }

            .color-primary {
                color: #28b0f8;
            }
        </style>

    @endpush

    @if (session()->has('success'))
        <div class="alert alert-success">
            @if(is_array(session('success')))
                <ul>
                    @foreach (session('success') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @else
                {{ session('success') }}
            @endif
        </div>
    @endif

    <p class="text-right">
        <button class="btn btn-success">
            <a href="{{ route('admin.blog.create') }}">
                <i class="fa fa-plus" aria-hidden="true"></i>
            </a>
        </button>
    </p>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">WriterID</th>
            <th scope="col">CheckerID</th>
            <th scope="col">Status</th>
            <th scope="col">CheckerStatus</th>
            <th scope="col">CategoryID</th>
            <th scope="col">CreatedAt</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>

        @foreach($blogs as $blog)
            <tr>
                <th scope="row">{{$blog->id}}</th>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->writer_id }}</td>
                <td>{{ $blog->checker_id }}</td>
                <td>{{ $blog->status }}</td>
                <td>{{ $blog->checker_status }}</td>
                <td>{{ $blog->category_id }}</td>
                <td>{{ $blog->created_at }}</td>
                <td>

                    <form action="{{ route('admin.blog.destroy', $blog->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('admin.blog.show',$blog->id) }}">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </a>

                        <a class="btn btn-primary" href="{{ route('admin.blog.edit',$blog->id) }}">
                            <i class="fa fa-pencil actions-icons" aria-hidden="true"></i>
                        </a>

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash actions-icons" aria-hidden="true"></i>
                        </button>
                    </form>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{-- Pagination --}}
    {{ $blogs->links() }}

@endsection

@push('script')
    <script>
        // write script
    </script>
@endpush

