@extends('layouts.admin')


@push('styles')
    <style>

        .content-container {
            margin: 0 auto;
            width: 60%;
        }

        form > div {
            margin-top: 20px;
        }


    </style>
@endpush

@section('content')

    <div class="content-container">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h1 class="text-center">Create Blog</h1>
        <form action="{{ route('admin.blog.store') }}" method="post">
            @csrf

            <div>
                <label for="title">Title</label>
                <input
                    name="title"
                    type="text"
                    class="form-control"
                    placeholder="Title"
                    required
                >
            </div>
            {{--
                Status
            --}}
            <div>

                @include('components.common.select2', [
                    'data' => [
                         'name' => 'status',
                         'labelText' => 'Status',
                         'class' => 'writer_status',
                         'placeholder' => 'PlaceHolder',
                         'items' => $writer_statuses
                        ]
                ])
            </div>
            {{-- Category --}}
            <div>

                @include('components.common.select2', [
                    'data' => [
                         'name' => 'category_id',
                         'class' => 'category',
                         'labelText' => 'Category',
                         'items' => $categories
                        ]
                ])

            </div>

            <div>
                @include('components.common.ckeditor', [
                    'data' => [
                        'name' => 'body',
                        'id' => 'body',
                        'defaultValue' => 'Writing Blog'
                        ]
                    ])
            </div>

            <div>
                @include('components.common.select2', [
                'data' => [
                     'name' => 'tags',
                     'labelText' => 'Tags',
                     'class' => 'tags',
                     'multiple' => 'multiple',
                     'items' => $tags
                    ]
                 ])
            </div>

            <div>
                <button
                    class="btn btn-outline-primary w-100"
                    type="submit">
                    Save
                </button>
            </div>

        </form>
    </div>
@endsection


@push('scripts')
    <script>

    </script>
@endpush
