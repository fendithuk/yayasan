
<!-- Start: Page Wrap -->
<div id="wrap" class="container_24">

	<!-- Header Grid Container: Start -->
	<div class="login">
		
	<!-- Info Notice: Start -->
	<div class="notice info">
		<p>Just press the <b>login button</b> on the right, or focus a field and enter to login</a>.</p>
	</div>
	<!-- Info Notice: End -->
	
		<!-- Header: Start -->
		<div id="header">
				
			<!-- Logo: Start -->
			<a href="#" id="logo">Simplpan - Admin Panel</a>
			<!-- Logo: End -->
			
			<!-- Login: Start -->
			<form action="<?php echo base_url();?>index.php/admin/cekLogin" method="post" id="login">
				
				<!-- Username Input: Start -->
				<label for="username" class="label_username">User</label>
				<input type="text" name="username" value="username" id="username" class="password tip-stay validate" title="Enter your username" />
				<!-- Username Input: End -->
				
				<!-- Password Input: Start -->
				<label for="password" class="label_password">Password</label>
				<input type="password" name="password" value="password" id="password" class="password tip-stay validate" title="Enter your password" />
				<!-- Password Input: End -->
				
				<!-- Login Button: Start -->
				<input type="submit" value="login" class="tip" title="Login" />
				<!-- Login Button: End -->
				
			</form>
			<!-- Login: End -->
			
		</div>
		<!-- Header: End -->
		
		<!-- Breadcrumb Bar: Start -->
		<div id="breadcrumb">
			
			<!-- Breadcrumb: Start -->
			<ul class="left">
				<li class="icon key"><a href="#">Forgot password?</a></li>
			</ul>
			<!-- Breadcrumb: End -->
			
			<!-- Breadcrumb Icon Links: Start -->
			<ul class="right">
				<li><a href="#" class="icon home tip" title="Home">Home</a></li>
			</ul>
			<!-- Breadcrumb Icon Links: End -->
			
		</div>
		<!-- Breadcrumb Bar: End -->
		
	</div>
	<!-- Header Grid Container: End -->
