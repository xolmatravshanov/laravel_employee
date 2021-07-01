@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
@endpush


@php

@endphp

<input type="file" class="my-pond" name="filepond"/>


@push('scripts')
    <!-- include FilePond library -->
    <script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>

    <!-- include FilePond plugins -->
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"></script>

    <!-- include FilePond jQuery adapter -->
    <script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>



    <script>
        $(function(){

            // First register any plugins
            $.fn.filepond.registerPlugin(FilePondPluginImagePreview);

            // Turn input element into a pond
            $('.my-pond').filepond();

            // Set allowMultiple property to true
            $('.my-pond').filepond('allowMultiple', true);

            // Listen for addfile event
            $('.my-pond').on('FilePond:addfile', function(e) {
                console.log('file added event', e);
            });

            // Manually add a file using the addfile method
            $('.my-pond').first().filepond('addFile', 'index.html').then(function(file){
                console.log('file added', file);
            });

        });
    </script>





@endpush
