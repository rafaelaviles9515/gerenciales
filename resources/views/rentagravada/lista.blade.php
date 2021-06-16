@extends('base.base')

@section('title','Lista Renta Gravada')

@section('boostrap')
        
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet" />

@endsection

@section('content')
		<br>
		
		<div class="container">
			<form action="{{route('rentasgravadasimport.store')}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<input type="file" name="file">
				<button type="submit" class="btn btn-primary">Importar</button>
			</div>
			</form>
		</div>
		
        <div class="container-xxxl">
		    @if(session('status'))
		    <div class="alert alert-success" role="alert">
		    @include('base.session-status')
		    </div>
		    @endif
		    @if($errors->any())
		    <div class="alert alert-danger" role="alert">
		    @include('base.validation-errors')
		    </div>
		    @endif
		    
		    
		 <div class="col-sm-12 mx-auto my-auto">
		    <div class="card">
		        <div class="card-header bg-success">
		            <div class="row justify-content-between">
		                    <h5 class="card-title  float-left" style="color: white">Renta Gravadas</h5>
		            </div>
		         </div>
		        
		        <div class="card-body">
		            <div class="table-responsive">
		                <table id="datatable" class="table table-striped table-bordered table-hover" >
		                    <thead>
		                        <tr>
		                            
		                            <th scope="col" >#</th>
		                            <th scope="col" >Contribuyente</th>
		                            <th scope="col" >Departamento</th>
		                            <th scope="col" >Clase</th>
		                            <th scope="col" >Cartera</th>
		                            <th scope="col" >Actividad</th>
		                            <th scope="col" >Ano</th>
		                            <th scope="col" >Sueldos</th>
		                            <th scope="col" >Profesiones</th>
		                            <th scope="col" >Servicios</th>
		                            <th scope="col" >Comerciales</th>
		                            <th scope="col" >Industriales</th>
		                            <th scope="col" >Agropecuarios</th>
		                            <th scope="col" >Dividendos</th>
		                            <th scope="col" >Otros</th>
		                            <th scope="col" >Total Renta Gravada</th>
		                            
		                            
		                            @if(Auth::user()->rol_id==1)
		                            @else
		                            @endif  
		                        </tr>
		                    </thead>
		                    <tbody>
		                        
		                        @forelse($rentasgravadas as $rentagravada)
		                        <tr>
		                            
		                            <td></td>
		                            <td>{{$rentagravada->contribuyente->nombre_contribuyente}}</td>
		                            <td>{{$rentagravada->departamento->nombre}}</td>
		                            <td>{{$rentagravada->clase->nombre}}</td>
		                            <td>{{$rentagravada->cartera->nombre}}</td>
		                            <td>{{$rentagravada->actividad->nombre}}</td>
		                            <td>{{$rentagravada->ano}}</td>
		                            <td>{{$rentagravada->sueldos}}</td>
		                            <td>{{$rentagravada->profesiones}}</td>
		                            <td>{{$rentagravada->servicios}}</td>
		                            <td>{{$rentagravada->comerciales}}</td>
		                            <td>{{$rentagravada->industriales}}</td>
		                            <td>{{$rentagravada->agropecuarios}}</td>
		                            <td>{{$rentagravada->dividendos}}</td>
		                            <td>{{$rentagravada->otros}}</td>
		                            <td>{{$rentagravada->total_renta_gravada}}</td>
		                            
		                            <!--@if(Auth::user()->rol_id==1)-->
		                            <!--@endif-->                      
		                        </tr>
		                        @empty
									<tr>
									  <td>No Hay Rentas Gravadas</td>
									</tr>
		                        @endforelse
		                    </tbody>
		                </table>
		            </div>
		        </div>
		        </div>
		 </div>
		</div>

@endsection


@section('finalboostrap')

	<!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
        

	<script type="text/javascript">
    $(document).ready(function (){
	   var table = $('#datatable').DataTable({ 
	    "language": {
	                "lengthMenu": "Mostrar _MENU_ registros",
	                "zeroRecords": "No se encontraron resultados",
	                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
	                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
	                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
	                "sSearch": "Buscar:",
	                "oPaginate": {
	                    "sFirst": "Primero",
	                    "sLast":"Último",
	                    "sNext":"Siguiente",
	                    "sPrevious": "Anterior"
				     },
				     "sProcessing":"Procesando...",
	            },
	    "columnDefs": [    { "visible": false, "targets": 0 }  ],
	    "responsive": "true"        
	   });
	  });

	  $(function () {
	    $('[data-toggle="tooltip"]').tooltip()
	  })  
	</script>


@endsection