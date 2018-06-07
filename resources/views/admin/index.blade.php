@extends('layouts.admin')
@section('content')

<div class="container">
	<div class="row justfy-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Selamat Datang Admin</div>

					<div class="card-body">
						@if (session('status'))
							<div class="alert alert-succes">
								{{session ('status')}}
							</div>
						@endif

							Berhasil Masuk!
						</div>
					</div>
				</div>
			</div>
		</div>
		@endsection	