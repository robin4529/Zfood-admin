@extends('admin.layouts.app')

@section('main-content')

<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Created New Student</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-info">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<div><i class="bx bxs-user me-1 font-22 text-info"></i>
										</div>
										<h5 class="mb-0 text-info">Student Registration</h5>
									</div>
									<hr/>

									@if( $errors->any())
									<p class="alert alert-danger d-flex justify-content-between">{{ $errors->first() }}
										 <button class="btn-close" data-bs-dismiss="alert"></button></p>
									@endif

								@if( Session::has('success'))
								<p class="alert alert-success d-flex justify-content-between">{{ Session::get('success')}}
								<button class="btn-close" data-bs-dismiss="alert"></button>
								</p>

								@endif

									<form action="{{route('student.store')}}" method="Post" enctype="multipart/form-data">
										@csrf
										<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Enter Your Name</label>
										<div class="col-sm-9">
											<input name="name" type="text" class="form-control" id="inputEnterYourName" placeholder="Enter Your Name">
										</div>
									</div>
						
									<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Email</label>
										<div class="col-sm-9">
											<input name="email" type="text" class="form-control" id="inputEnterYourName" placeholder="Enter Your email account">
										</div>
									</div>
						
									<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Cell</label>
										<div class="col-sm-9">
											<input name="cell" type="text" class="form-control" id="inputEnterYourName" placeholder="Enter Your cell number">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Age</label>
										<div class="col-sm-9">
											<input name="age" type="text" class="form-control" id="inputEnterYourName" placeholder="Enter Your Age">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">location</label>
										<div class="col-sm-9">
											<input name="locaton" type="text" class="form-control" id="inputEnterYourName" placeholder="Enter Your location">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Images Upload</label>
										<div class="col-sm-9">
											<input name="photo" type="file" class="form-control">
										</div>
									</div>
									
									<div class="row mb-3p">
										<button type="submit" class="btn btn-info px-5">Register</button>
										</div>
								</form>
									
								</div>
							</div>
						</div>
					</div>
				</div>

				
@endsection


