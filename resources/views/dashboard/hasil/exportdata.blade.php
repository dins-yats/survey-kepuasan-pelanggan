<x-app-layout>
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    

<div class="py-12">
        <div class="">
            <div class="">
                <x-welcome />
                <div class="p-4 sm:ml-64">
                    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">                
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            
    <p class="px-4 text-center max-w-lg text-3xl font-semibold  bg-gradient-to-r from-blue-400 via-teal-300 to-rose-300 inline-block text-transparent bg-clip-text">Export Data Hasil Survei</p>


                            <div id="table" class="table-responsive col-lg-10 shadow-lg mb-3 mx-auto">
                                <table id="tableT" class="table table-striped table-sm">
                                  <thead>
                                    <tr>
                                      <th scope="col" >No</th>
                                      <th scope="col">Nama</th>
                                      <th scope="col">No HP</th>
                                      <th scope="col"> Pertanyaan 1</th>
                                      <th scope="col"> Pertanyaan 2</th>
                                      <th scope="col"> Pertanyaan 3</th>
                                      <th scope="col"> Pertanyaan 4</th>
                                      <th scope="col"> Pertanyaan 5</th>
                                      <th scope="col"> Tanggal Survei</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                            
                                    @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $loop->iteration  }}</td>
                                        <td>{{ $post->namacs }}</td>
                                        <td>{{ $post->nohp }}</td>
                                        <td>{{ $post->ask1 }}</td>
                                        <td>{{ $post->ask2 }}</td>
                                        <td>{{ $post->ask3 }}</td>
                                        <td>{{ $post->ask4 }}</td>
                                        <td>{{ $post->ask5 }}</td>
                                     
                                        <td>{{ $post->created_at->format('Y-M-d')}}</td>
                                        {{-- <td>{{ $post->created_at->diffForHumans()}}</td> --}}
                                     
                                      </tr>  
                                    @endforeach
                                   
                                  </tbody>
                                </table>
                              </div>
                                                        


          
                        </div>
                    </div>
                 
                </div>

            
            </div> 
        </div>
    </div>
    <script>
        $(document).ready(function() {
    $('#tableT').DataTable( {
        dom: 'Bfrtip',
        buttons: [ 
            {
                extend: 'pdfHtml5',
                title: 'Hasil Survey Pelanggan',
                orientation: 'landscape',
                pageSize: 'A4',
                customize: function (doc) {
                    doc.styles.tableHeader.alignment = 'center';

                    doc.content[1].table.body.forEach(function(row) {
                        row.forEach(function(cell) {
                            cell.alignment = 'center';
                        });
                    });

                    doc.pageMargins = [40, 60, 40, 60];

                    doc.content[1].layout = 'lightHorizontalLines';
                    doc.content[1].alignment = 'center';
                }
            },
            {
                extend: 'print',
                customize: function ( win ) {
                    $(win.document.body)
                        .css('font-size', '10pt');
                    $(win.document.body).find('table')
                        .addClass('compact')
                        .css('font-size', 'inherit');
                }
            },
        ]
    } );
} );
    </script>
    {{-- <script>
        $(document).ready(function() {
        $('#tableT').DataTable( {
            dom: 'Bfrtip',
            buttons: [ 
                {
                extend: 'pdfHtml5',
                title: 'Hasil Survey Pelanggan',
                orientation: 'landscape',
                pageSize: 'A4',
                extend: 'pdfHtml5',
              
    
               
            },
                {
                    extend: 'print',
                    customize: function ( win ) {
                        $(win.document.body)
                            .css( 'font-size', '10pt' )
                        $(win.document.body).find( 'table' )
                            .addClass( 'compact' )
                            .css( 'font-size', 'inherit' );
                    }
                },
                
            ]
        } );
    } );
        </script>
     --}}
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
</x-app-layout>