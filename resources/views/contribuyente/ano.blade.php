@extends('base.base')

@section('title','Seleccion de año para Contribuyente')

@section('boostrap')
        
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet" />

@endsection

@section('content')
		<br>
		<div class="container-sm">
		      <br>
					<h1 align="center">Seleccion de años para Contribuyente</h1>
					
					@include('base.session-status')
					<form method="POST" action="{{route('contribuyente.reporte')}}">
					
						@csrf
		        <br>
						<div class="col-sm-12">
		                <div class="card border-primary" >
		                <div class="card-header">Seleccione año</div>
		                  <div class="card-body">
		                      <div class="row">
		                        <div class="col">
		                            <div class="col-md-6">
		                                <select class="form-control" id="ano" name="ano">
		                                  <option value="" selected>Año</option>
		                                 @foreach($anos as $ano)
		                                        <option value="{{$ano}}">{{$ano}}</option>
		                                  @endforeach
		                                </select>
		                            </div>
		                          </div>
		                      </div>
		                      <br>
		                      <div align="center">
		                      <button type="submit" class="btn btn-success">Ver Reporte anual por Contribuyente</button>
		                      <a type="button" class="btn btn-primary" href="">Regresar</a>
		                      </div>
		                  </div>
		                  
		                </div>
		                
		          		</div>

		    		</form>
		</div>  
		
        

@endsection


@section('finalboostrap')
	<!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
        
@endsection