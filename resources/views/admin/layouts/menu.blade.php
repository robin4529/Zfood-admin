
<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Synadmin</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
            <li>
					<a href="{{ route('dashboard.page')}}">
						<div class="parent-icon"><i class='bx bx-home'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-spa' ></i>
						</div>
						<div class="menu-title">Posts</div>
					</a>
					<ul>
						<li> <a href="app-emailbox.html"><i class="bx bx-right-arrow-alt"></i>All Posts</a>
						</li>
						<li> <a href="app-chat-box.html"><i class="bx bx-right-arrow-alt"></i>Catageory</a>
						</li>
						<li> <a href="app-file-manager.html"><i class="bx bx-right-arrow-alt"></i>Tags</a>
						</li>
						<li> <a href="app-contact-list.html"><i class="bx bx-right-arrow-alt"></i>Add new Post</a>
						</li>
					</ul>
				</li>
				<ul>
				<li class="menu-label">UI Elements</li>
                <li>
					<a href="widgets.html">
						<div class="parent-icon"><i class='bx bx-home'></i>
						</div>
						<div class="menu-title">widgets</div>
					</a>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-book' ></i>
						</div>
						<div class="menu-title">Student</div>
					</a>
					<ul>
					<li> <a href="{{route('student.index')}}"><i class="bx bx-right-arrow-alt"></i>All Student</a>
						</li>
						<li> <a href="{{ route('student.create') }}"><i class="bx bx-right-arrow-alt"></i>Add new Student</a>
						</li>
					</ul>
				</li>
			
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-book' ></i>
						</div>
						<div class="menu-title">Staff</div>
					</a>
					<ul>
					<li> <a href="{{route('staff.index')}}"><i class="bx bx-right-arrow-alt"></i>All Staff</a>
						</li>
						<li> <a href="{{ route('staff.create') }}"><i class="bx bx-right-arrow-alt"></i>Add new Staff</a>
						</li>
					</ul>
				</li>
			
			</ul>
			<!--end navigation-->
		</div>

