<div class="main-container" id="main-container">
	<script type="text/javascript">
		try{ace.settings.check('main-container' , 'fixed')}catch(e){}
	</script>

	<div id="sidebar" class="sidebar responsive">
		<script type="text/javascript">
			try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
		</script>

		<div class="sidebar-shortcuts" id="sidebar-shortcuts">
			<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
				<button class="btn btn-success">
					<i class="ace-icon fa fa-signal"></i>
				</button>

				<button class="btn btn-info">
					<i class="ace-icon fa fa-pencil"></i>
				</button>

				<button class="btn btn-warning">
					<i class="ace-icon fa fa-users"></i>
				</button>

				<button class="btn btn-danger">
					<i class="ace-icon fa fa-cogs"></i>
				</button>
			</div>

			<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
				<span class="btn btn-success"></span>

				<span class="btn btn-info"></span>

				<span class="btn btn-warning"></span>

				<span class="btn btn-danger"></span>
			</div>
		</div><!-- /.sidebar-shortcuts -->

			<ul class="nav nav-list">
				<li >
					<a href="{{ url('dashboard') }}">
						<i class="menu-icon fa fa-tachometer"></i>
						<span class="menu-text">Dashboard</span>
					</a>
					<b class="arrow"></b>
				</li>			

				<li>
					<a href="{{ url('manage-slide') }}">
						<i class="menu-icon fa fa-picture-o"></i> 
						<span class="menu-text">Slider Management</span>
					</a>
					<b class="arrow"></b>
				</li>
				<li>
					<a href="{{ url('manage-videos') }}">
						<i class="menu-icon fa fa-youtube-play"></i> 
						<span class="menu-text">Video Testimonials</span>
					</a>
					<b class="arrow"></b>
				</li>

				<li>
					<a href="{{ url('manage-people') }}">
						<i class="menu-icon fa fa-users"></i>
						<span class="menu-text">People Management</span>
					</a>
					<b class="arrow"></b>
				</li>
				<li>
					<a href="{{ url('manage-university') }}">
						<i class="menu-icon fa fa-university"></i> 
						<span class="menu-text">Uni Management</span>
					</a>
					<b class="arrow"></b>
				</li>

				<li>
					<a href="{{ url('manage-news') }}">
						<i class="menu-icon fa fa-newspaper-o"></i> 
						<span class="menu-text">News Management</span>
					</a>
					<b class="arrow"></b>
				</li>
				<li>
					<a href="{{ url('manage-accreditation') }}">
						<i class="menu-icon  fa fa-rss"></i>
						<span class="menu-text"> Accreditation</span>
					</a>
					<b class="arrow"></b>
				</li>

				<li>
					<a href="{{ url('manage-event') }}">
						<i class="menu-icon fa fa-calendar-o"></i> 
						<span class="menu-text">Event Management</span>
					</a>
					<b class="arrow"></b>
				</li>

				<li>
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-book"></i>
						<span class="menu-text">Study Abroad</span>
						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>	
					
					<ul class="submenu">
						{{-- <li>
							<a href="{{ url('manage-lavel') }}">
								<i class="menu-icon fa fa-crosshairs"></i> 
								<span class="menu-text">Lavel</span>
							</a>
							<b class="arrow"></b>
						</li> --}}
						<li>
							<a href="{{ url('manage-study-option') }}">
								<i class="menu-icon fa fa-crosshairs"></i> 
								<span class="menu-text">Manage Study Option</span>
							</a>
							<b class="arrow"></b>
						</li>
						<li>
							<a href="{{ url('manage-subject') }}">
								<i class="menu-icon fa fa-crosshairs"></i> 
								<span class="menu-text">Subject</span>
							</a>
							<b class="arrow"></b>
						</li>
						{{-- <li>
							<a href="{{ url('manage-school') }}">
								<i class="menu-icon fa fa-crosshairs"></i> 
								<span class="menu-text">School</span>
							</a>
							<b class="arrow"></b>
						</li> --}}

						<li>
							<a href="{{ url('manage-course') }}">
								<i class="menu-icon fa fa-crosshairs"></i> 
								<span class="menu-text">Course</span>
							</a>
							<b class="arrow"></b>
						</li>

						{{-- <li>
							<a href="{{ url('manage-prerequisites-counselling') }}">
								<i class="menu-icon fa fa-crosshairs"></i> 
								<span class="menu-text">Prerequisites & Counselling</span>
							</a>
							<b class="arrow"></b>
						</li> --}}
					</ul>
				</li>

				<li>
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-folder-open"></i>
						<span class="menu-text">Manage Gallery</span>
						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>	
					
					<ul class="submenu">
						<li>
							<a href="{{ url('manage-album') }}">
							<i class="menu-icon fa fa-crosshairs"></i> 
							<span class="menu-text">Manage Album</span>
							</a>
							<b class="arrow"></b>
						</li>

						<li>
							<a href="{{ url('manage-gallery') }}">
							<i class="menu-icon fa fa-crosshairs"></i> 
							<span class="menu-text">Manage Photo</span>
							</a>
							<b class="arrow"></b>
						</li>
					</ul>
				</li>

				<li>
					<a href="{{ url('manage-testimonial') }}">
						<i class="menu-icon fa fa-file"></i> 
						<span class="menu-text">Testimonial</span>
					</a>
					<b class="arrow"></b>
				</li>

				<li>
					<a href="{{ url('manage-office-address') }}">
						<i class="menu-icon fa fa-map-marker"></i> 
						<span class="menu-text">Address Manage</span>
					</a>
					<b class="arrow"></b>
				</li>
				<li>
					<a href="{{ url('manage-pages') }}">
						<i class="menu-icon fa fa-file-text" aria-hidden="true"></i> 
						<span class="menu-text">Pages</span>
					</a>
					<b class="arrow"></b>
				</li>

				<li>
					<a href="{{ url('glances') }}">
						<i class="menu-icon fa fa-leaf"></i> 
						<span class="menu-text">Glances Management</span>
					</a>
					<b class="arrow"></b>
				</li>

				<li>
					<a href="{{ url('manage-user') }}">
						<i class="menu-icon fa fa-user"></i> 
						<span class="menu-text">User Management</span>
					</a>
					<b class="arrow"></b>
				</li>

				<li>
					<a href="{{ route('admin.blogs.index') }}">
						<i class="menu-icon fa fa-cube"></i> 
						<span class="menu-text">Blog Management</span>
					</a>
					<b class="arrow"></b>
				</li>

				<li>
					<a href="{{ route('admin.faqs.index') }}">
						<i class="menu-icon fa fa-question-circle"></i> 
						<span class="menu-text">FAQ Management</span>
					</a>
					<b class="arrow"></b>
				</li>

				<li>
					<a href="{{ route('admin.bookings.index').'?booking_type=1' }}">
						<i class="menu-icon fa fa-meetup"></i> 
						<span class="menu-text">E-Meetings</span>
					</a>
					<b class="arrow"></b>
				</li>

				<li>
					<a href="{{ route('admin.bookings.index').'?booking_type=2' }}">
						<i class="menu-icon fa fa-calendar-o"></i> 
						<span class="menu-text">Event Registrations</span>
					</a>
					<b class="arrow"></b>
				</li>

				<li>
					<a href="{{ route('admin.bookings.index').'?booking_type=3' }}">
						<i class="menu-icon fa fa-free-code-camp"></i> 
						<span class="menu-text">Free Consultations</span>
					</a>
					<b class="arrow"></b>
				</li>

				<li>
					<a href="{{ route('admin.settings.index') }}">
						<i class="menu-icon fa fa-cog"></i> 
						<span class="menu-text">Settings</span>
					</a>
					<b class="arrow"></b>
				</li>

			</ul><!-- /.nav-list -->

		<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
			<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
		</div>

		<script type="text/javascript">
			try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
		</script>
	</div>

	<div class="main-content">
		<div class="breadcrumbs" id="breadcrumbs">
			<script type="text/javascript">
				try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
			</script>

			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="#">Home</a>
				</li>
				<li class="active">
					<?php 
						// $url = current_url();
						// $end = end(explode('/', $url));
						// echo "<a href='$end'>".$end."</a>";
						// $end = explode('/', $url);
						// $length = sizeof($end);
						// $lasttwo=$end[$length-2].' > '.$end[$length-1];
						// echo '<a href="">'.$lasttwo.'</a>';
					?>
				</li>
			</ul><!-- /.breadcrumb -->

			<div class="nav-search" id="nav-search">
				<form class="form-search">
					<span class="input-icon">
						<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
						<i class="ace-icon fa fa-search nav-search-icon"></i>
					</span>
				</form>
			</div><!-- /.nav-search -->
		</div>
		
		<div class="page-content">
			<div class="page-header">
				<h1>
					GECC
					<small>
						<i class="ace-icon fa fa-angle-double-right"></i>
					</small>
				</h1>
				@if(Session::has('message'))
					<div class="alert alert-block alert-{{Session::get("class")}}">
						<button type="button" class="close" data-dismiss="alert">
							<i class="ace-icon fa fa-times"></i>
						</button>
						<i class="ace-icon fa fa-check green"></i>
						{{ Session::get("message") }}
					</div>
				@endif
			</div><!-- /.page-header -->