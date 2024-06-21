@extends('authMaster')
@section('isiAuth')
<div class="auth-wrapper">
	<div class="auth-content text-center">
		<img src="{{ asset('tema') }}/dist/assets/images/logo.png" alt="" class="img-fluid mb-4">
		<div class="card borderless">
			<div class="row align-items-center ">
				<div class="col-md-12">

					@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $item)
									<li>{{ $item }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form action="" method="POST">
						@csrf
						<div class="card-body">
							<h4 class="mb-3 f-w-400">Masuk</h4>
							<hr>
							<div class="form-group mb-3">
								<input type="text" class="form-control" id="Email" placeholder="Email address" value="{{ old('email') }}" name="email">
							</div>
							<div class="form-group mb-4">
								<input type="password" class="form-control" id="Password" placeholder="Password" name="password">
							</div>
							<a href="/dashboard"><button class="btn btn-block btn-primary mb-4 btn-kirim">Login</button></a>
							<hr>
							<p class="mb-2 text-muted">Lupa Password? <a href="auth-reset-password.html" class="f-w-400">Reset</a></p>
							<p class="mb-0 text-muted">Belum Mempunyai Akun? <a href="/daftar" class="f-w-400">Daftar</a></p>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection