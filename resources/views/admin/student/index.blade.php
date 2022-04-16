@extends('admin.layouts.app')

@section('main-content')

<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Tables</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Data Table</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Settings</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">All Student Data</h6>
				<hr/>
				<div class="card">
					<div class="card-body ">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead class="bg-dark text-white">
									<tr>
										<th>Serial No</th>
										<th>Name</th>
										<th>Email</th>
										<th>cell</th>
										<th>Age</th>
										<th>location</th>
										<th>Photo</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									 @forelse($all_data as $data )
									 <tr>
										 <td>{{ $loop->index+1 }}</td>
										<td>{{ $data->name}}</td>
										<td>{{ $data->email}}</td>
										<td>{{ $data->cell}}</td>
										<td>{{ $data->age}}</td>
										<td>{{ $data->locaton}}</td>
				<td><img style="width: 50px; height:50px;" src="{{url('storage/student/' . $data->photo)}}" alt=""> </td>
							
							
										<td>
											<a href="" class="btn btn-info">View</a>
											<a href="" class="btn btn-warning">Edit</a>
											<a href="" class="btn btn-danger">Edit</a>
										</td>
									</tr>
									 @empty

									 @endforelse
									
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection