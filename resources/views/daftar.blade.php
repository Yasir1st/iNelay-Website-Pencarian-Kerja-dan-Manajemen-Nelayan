@extends('authMaster')
@section('isiAuth')
<!-- [ auth-signup ] start -->
<div class="auth-wrapper">
	<div class="auth-content text-center">
		<img src="{{ asset('tema') }}/dist/assets/images/logo.png" alt="" class="img-fluid mb-4">
		<div class="card borderless">
			<div class="row align-items-center text-center">
				<form action="{{ route('input.user') }}" method="POST">
					@csrf
					<div class="col-md-12">
						<div class="card-body">
							<h4 class="f-w-400">Daftar</h4>
							<hr>
							<div class="form-group mb-3">
								<input type="text" class="form-control" id="Username" placeholder="Username" name="nama">
							</div>
							<div class="form-group mb-3">
								<input type="text" class="form-control" id="Email" placeholder="Email address" name="email">
							</div>
							<div class="form-group mb-4">
								<input type="password" class="form-control" id="Password" placeholder="Password" name="password">
							</div>
							<div class="dropdown">
								<button class="btn btn-secondary dropdown-toggle authDrop" type="button" data-bs-toggle="dropdown" aria-expanded="false">
								  Daftar Sebagai
								</button>
								<ul class="dropdown-menu p-2">
									<div class="mb-3 form-check">
										<input type="radio" class="form-check-input" id="exampleCheck1" name="role" checked value="boss">
										<label class="form-check-label" for="exampleCheck1">Boss</label>
									</div>
									<div class="mb-3 form-check">
										  <input type="radio" class="form-check-input" id="exampleCheck1" name="role" value="kru">
										  <label class="form-check-label dropdown-item" for="exampleCheck1">Kru</label>
									</div>
								</ul>
							</div>
							<button class="btn btn-secondary btn-block mb-4 btn-kirim mt-3">Daftar</button>
							<hr>
							<p class="mb-2">Sudah Punya Akun? <a href="/" class="f-w-400">Login</a></p>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signup ] end -->
@endsection