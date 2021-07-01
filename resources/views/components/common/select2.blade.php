@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
@endpush


@php


    /**
      *   in order to work with select2 component need to give array like below
     */
    if(!isset($data)){
            $data = [
                'name' => 'selectName',
                'class' => 'selectClass',
                'multiple' => '',
                'placeholder' => 'Default PlaceHolder',
                'labelText' => 'Label Text',
                'items' => [
                    'uz' => 'Uzbekistan',
                    'us' => 'Unitet State'
                ]
        ];
    }else{

        if(!array_key_exists('multiple', $data)){
            $data['multiple'] = '';
        }

        if(!array_key_exists('placeholder', $data)){
            $data['placeholder'] = 'Default PlaceHolder';
        }

        if(!array_key_exists('labelText', $data)){
            $data['labelText'] = 'Label Text';
        }

    }



@endphp

<label for="{{ $data['name'] }}">{{ $data['labelText'] }}</label>
<select id="{{$data['class']}}" name="{{$data['multiple'] ? $data['name'].'[]' : $data['name']}}" class="{{ $data['class'] }} form-control"
    {{ $data['multiple'] }}>
    @foreach($data['items'] as $key => $item)
        <option value="{{ $key }}">{{ $item }}</option>
    @endforeach
</select>



@push('script')


    <script>
        $(document).ready(function () {
            $("#{{$data['class']}}").select2({
                placeholder: "{{ $data['placeholder'] }}"
            });
        });
    </script>

@endpush
