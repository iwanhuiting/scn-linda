@extends('layouts.container')

@section('main')

    <div class="uk-card">

            @if($catagories->count() > 0)

                <table id="leads" class="uk-table uk-table-small uk-text-small uk-table-hover">

                    <thead>
                        <tr>
                            <th>Gecreërd op</th>
                            <th>Titel</th>
                            <th>Foto link</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($catagories as $catagorie)
                            @include('admin.catagory.tablebody')
                        @endforeach
                    </tbody>

                </table>

            @else
                <p class="uk-text-bold">Er zijn geen resultaten gevonden.</p>
            @endif

    </div>

@endsection

@section('stylesheets.header.after')
    <link rel="stylesheet" href="/css/datatables.css">
    <link rel="stylesheet" href="/css/datatables-buttons.css">
@endsection

@section('scripts.footer')
    <script src="/js/datatables.min.js"></script>
    <script src="/js/datatables-buttons.min.js"></script>
    <script src="/js/datatables-buttons-html5.min.js"></script>
    <script src="/js/datatables-buttons-print.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#leads').DataTable({
                buttons: [ 'print', 'pdf', 'csv', 'excel' ],
                pageLength: 25,
                language: {
                    processing: "Bezig met verwerken...",
                    search: "Doorzoek het overzicht:",
                    lengthMenu: "Toon _MENU_ gebruikers",
                    info: "Offertes _START_ tot _END_ van _TOTAL_ totaal",
                    infoEmpty: "Helaas, geen gebruikers gevonden die voldoen aan de zoekopdracht",
                    infoFiltered: "(gefilterd uit _MAX_ totaal)",
                    infoPostFix: "",
                    loadingRecords: "Bezig met laden...",
                    zeroRecords: "Geen gebruikers gevonden",
                    emptyTable: "Geen gebruikers gevonden",
                    paginate: {
                        first: "Eerste",
                        previous: "Vorige",
                        next: "Volgende",
                        last: "Laatste"
                    },
                    aria: {
                        sortAscending:  ": activer pour trier la colonne par ordre croissant",
                        sortDescending: ": activer pour trier la colonne par ordre décroissant"
                    }
                }
            });

        });
    </script>

@endsection
