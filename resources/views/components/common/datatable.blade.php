@push('styles')
    <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet"/>
@endpush


@php

    /**
      *   in order to work with select2 component need to give array like below
     */
    if(!isset($data)){
            $data = [
                'id' => 'datatable',
            ];
    }

@endphp



@push('script')

    <script>
        $(document).ready( function () {
            $("#{{ $data['id'] }}").DataTable({
                dom: 'CBlfrtip',
                buttons: [
                    { extend: 'copyHtml5', footer: true },
                    { extend: 'excelHtml5', footer: true },
                    { extend: 'pdfHtml5', footer: true },
                    { extend: 'print', footer: true }
                ],
                paging: false,
            });
        } );
    </script>

@endpush
