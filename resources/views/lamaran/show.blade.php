@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Lamaran 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">File Cv</label>	
			  			<input type="text" name="file_cv" class="form-control" value="{{ $lam->file_cv }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Status</label>
						<input type="text" name="status" class="form-control" value="{{ $lam->status }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Lowongan</label>
						<input type="text" name="low_id" class="form-control" value="{{ $l->Lowongan->nama_low }}"  readonly>
			  		</div>
			  		
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection