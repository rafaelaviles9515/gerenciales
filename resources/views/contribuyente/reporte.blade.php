@extends('base.base')

@section('title','Reporte anual Contribuyente')

@section('boostrap')
        
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet" />

@endsection

@section('content')
		<br>
		<div class="container-sm">
		      <br>
					<h1 align="center">Numero de Contribuyentes que presentaron Renta Grabada del año {{$ano}}</h1>
					
					@include('base.session-status')
									
						@csrf
		        <br>
						<div class="col-sm-12">
		                <div class="card border-primary" >
		                <div class="card-header">Contribuyentes</div>
		                  <div class="card-body">
		                      <div class="row">
		                        <div class="col">
		                            <div class="col-md-6">
		                                <label>Numero de Contribuyentes</label>
		                            </div>		                            
		                         </div>
		                         <div class="col">
		                            <div class="col-md-6">
		                                <label>{{$contribuyentesAnoSeleccionado}}</label>
		                            </div>
		                          </div>
		                      </div>
		                      <br>
		                      <div align="center">
		                      <a type="button" class="btn btn-primary" href="{{route('contribuyente.ano')}}">Regresar</a>
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
        
@endsection