@push('styles')

@endpush


@php

    if(!isset($data))
        $data = [
            'name'=> 'body',
            'id' => 'body',
            'cols' => 30,
            'rows' => 10,
            'defaultValue' => 'Defalut Value',
            ];
    else{
        if(!array_key_exists('id', $data))
                $data['id'] = 'body';

         if(!array_key_exists('cols', $data))
                $data['cols'] = 30;

        if(!array_key_exists('rows', $data))
                $data['rows'] = 10;

        if(!array_key_exists('defaultValue', $data))
                $data['defaultValue'] = 'Defalut Value';

}


@endphp

<div id="editor">
    <textarea name="{{ $data['name'] }}"
              id="{{ $data['id'] }}"
              cols="{{ $data['cols'] }}"
              rows="{{ $data['rows'] }}"
              class="form-control"
    >
        {{ $data['defaultValue'] }}
    </textarea>
</div>


@push('script')
    {{--
        <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
    --}}
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script>


        $(document).ready(function () {
            CKEDITOR.replace( '{{ $data['name'] }}' );
        });

    </script>
@endpush
