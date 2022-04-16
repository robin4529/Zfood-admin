@extends('admin.layouts.app')

@section('main-content')

<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Created New Staff</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-info">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<div><i class="bx bxs-user me-1 font-22 text-info"></i>
										</div>
										<h5 class="mb-0 text-info">Staff Registration</h5>
									</div>
									<hr/>
                                    @if( $errors->any())
									<div class="alert border-0 border-start border-5 border-danger alert-dismissible fade show py-2">
									<div class="d-flex align-items-center">
										<div class="font-35 text-danger"><i class="bx bxs-message-square-x"></i>
										</div>
										<div class="ms-3">
											<h6 class="mb-0 text-danger">Danger Alerts</h6>
											<div>{{ $errors->first() }}</div>
										</div>
									</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
                                @endif
                                @if( Session::has('success'))
								<div class="alert border-0 border-start border-5 border-success alert-dismissible fade show py-2">
									<div class="d-flex align-items-center">
										<div class="font-35 text-success"><i class="bx bxs-check-circle"></i>
										</div>
										<div class="ms-3">
											<h6 class="mb-0 text-success">Success Alerts</h6>
											<div>{{ Session::get('success')}}</div>
										</div>
									</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								</p>

								@endif

                        

								    <form action="{{route('staff.update' , $edit_data->id)}}" method="Post" enctype="multipart/form-data">
										@csrf
                                        @method('PUT')
                                       
									</div>
										<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Enter Your Name</label>
										<div class="col-sm-9">
											<input name="name" type="text" class="form-control" value="{{ $edit_data-> name}}" id="inputEnterYourName" >
										</div>
									</div>
						
									<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">facebook</label>
										<div class="col-sm-9">
											<input name="facebook" type="text" class="form-control" value="{{ $edit_data-> facebook}} id="inputEnterYourName" placeholder="Enter Your email account">
										</div>
									</div>
						
									<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">instagram</label>
										<div class="col-sm-9">
											<input name="Instagram" type="text" class="form-control" id="inputEnterYourName" placeholder="Enter Your cell number">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">twitter</label>
										<div class="col-sm-9">
											<input name="twitter" type="text" class="form-control" id="inputEnterYourName" placeholder="Enter Your Age">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">linkdein</label>
										<div class="col-sm-9">
											<input name="linkdein" type="text" class="form-control" id="inputEnterYourName" placeholder="Enter Your location">
										</div>
									</div>
								
							
									<div class="row mb-3p">
										<button type="submit" class="btn btn-info px-5"> Staff Register</button>
										</div>
								</form>
									
								</div>
							</div>
						</div>
					</div>
				</div>

				
@endsection


