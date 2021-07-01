@extends('layouts.index')

@section('content')

    @php
        $item =  [];
        $item[]= "https://images.unsplash.com/photo-1611896154563-70f0a227013a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80";
        $item[]= "https://images.unsplash.com/photo-1621416945515-7682f934e824?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=751&q=80";
        $item[]= "https://images.unsplash.com/photo-1611896154563-70f0a227013a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80";
    @endphp

    <x-carousel :items="$item"/>
    <div class="container font-mono">

        <div class="row justify-content-center">
            @for($i = 0; $i < 48; $i ++)
                <div class="col-md-4 mt-4">
                    <x-blog-card/>
                </div>
            @endfor
        </div>
    </div>
@endsection
