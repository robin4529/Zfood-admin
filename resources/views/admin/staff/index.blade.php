@extends('admin.layouts.app')

@section('main-content')

<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>

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
								<div class="dropdown-divider">
							</div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">All Staff Table</h6>
				<hr>
				<div class="card">
					<div class="card-body">
						<table class="table table-striped" >
							<thead>
								<tr>
									<th>#</th>
									<th>Name</th>
									<th>Photo</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>

								@forelse( $Staff_data as $data )
									<tr>
									<td>{{ $loop->index+1 }}</td>
									<td>{{ $data->name }}</td>
								<td>
								<img style="height:50px; width:50px;" src="{{url('storage/staff/' . $data->photo)}}" alt="">
								</td>
									<td>
									<label class="switch">
 						 		<input type="checkbox" @if($data-> status )checked @endif>
  								<span class="slider round"></span>
								</label>
									</td>
									<td>
										<a class="btn btn-success" href="{{ route('staff.show',$data->id )}}">View</a>
										<a class="btn btn-info "href="{{ route('staff.edit' , $data->id )}}">Edit</a>
										<a class="btn btn-danger btn_delete" href="{{url('staff-delete/'. $data->id )}}">delete</a>
									</td>
								</tr>
								@empty
								@endforelse


								
							</tbody>
						</table>
						{{ $Staff_data-> links() }}
					</div>
				</div>
				
				
			</div>
		</div>

@endsection