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



    <div class="container">
        <h1 class="text-center text-success" style="font-size: 40px">{{ $url }}</h1>
    </div>
@php


@endphp
@endsection

@push('script')
    <script>
        // write script
    </script>
@endpush

