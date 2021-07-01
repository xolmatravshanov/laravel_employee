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
         <a href="{{ route('create') }}">
                <i class="fa fa-plus" aria-hidden="true"></i>
            </a>
        </button>
    </p>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @isset($users)
        @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->updated_at }}</td>

                <td>

                <form action="{{ route('destroy', $user->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('show', $user->id) }}">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </a>

                        <a class="btn btn-primary" href="{{ route('edit',$user->id) }}">
                            <i class="fa fa-pencil actions-icons" aria-hidden="true"></i>
                        </a>

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash actions-icons" aria-hidden="true"></i>
                        </button>
                    </form>

                </td>
            </tr>
        @endforeach
        @endisset
        </tbody>
    </table>

    {{-- Pagination --}}

  {{ $users->links() }}

@endsection

@push('script')
    <script>
        // write script
    </script>
@endpush

