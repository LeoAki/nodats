<?php include_once 'encabezado.php' ?>		
		<div id="style-switcher">
			<i class="icon-arrow-left icon-white"></i>
			<span>Style:</span>
			<a href="#grey" style="background-color: #555555;border-color: #aaaaaa;"></a>
			<a href="#blue" style="background-color: #2D2F57;"></a>
			<a href="#red" style="background-color: #673232;"></a>
		</div>
		
		<div id="content">
			<div id="content-header">
				<h1>Form wizard</h1>
				<div class="btn-group">
					<a class="btn btn-large tip-bottom" title="Manage Files"><i class="icon-file"></i></a>
					<a class="btn btn-large tip-bottom" title="Manage Users"><i class="icon-user"></i></a>
					<a class="btn btn-large tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span class="label label-important">5</span></a>
					<a class="btn btn-large tip-bottom" title="Manage Orders"><i class="icon-shopping-cart"></i></a>
				</div>
			</div>
			<div id="breadcrumb">
				<a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
				<a href="#">Form elements</a>
				<a href="#" class="current">Form wizard</a>
			</div>
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="span12">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="icon-pencil"></i>
								</span>
								<h5>Form wizard with validation</h5>
							</div>
							<div class="widget-content nopadding">
								<form id="form-wizard" class="form-horizontal" method="post">
									<div id="form-wizard-1" class="step">
										<div class="control-group">
											<label class="control-label">Username</label>
											<div class="controls">
												<input id="username" type="text" name="username" />
											</div>
										</div>
										<div class="control-group">
											<label class="control-label">Password</label>
											<div class="controls">
												<input id="password" type="password" name="password" />
											</div>
										</div>
										<div class="control-group">
											<label class="control-label">Confirm Password</label>
											<div class="controls">
												<input id="password2" type="password" name="password2" />
											</div>
										</div>
										
									</div>
									<div id="form-wizard-2" class="step">
										<div class="control-group">
											<label class="control-label">Email</label>
											<div class="controls">
												<input id="email" type="text" name="email" />
											</div>
										</div>
										<div class="control-group">
											<label class="control-label">EULA Acceptation</label>
											<div class="controls">
												<input id="eula" type="checkbox" name="eula" />
											</div>
										</div>
									</div>
									<div class="form-actions">
											<input id="back" class="btn btn-primary" type="reset" value="Back" />
											<input id="next" class="btn btn-primary" type="submit" value="Next" />
											<div id="status"></div>
									</div>
									<div id="submitted"></div>
								</form>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row-fluid">
					<div id="footer" class="span12">
						2012 &copy; Unicorn Admin. Brought to you by <a href="https://wrapbootstrap.com/user/diablo9983">diablo9983</a>
					</div>
				</div>
			</div>
		</div>
		
		
            
            <script src="js/jquery.min.js"></script>
            <script src="js/jquery.ui.custom.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/jquery.validate.js"></script>
            <script src="js/jquery.wizard.js"></script>
            <script src="js/unicorn.js"></script>
            <script src="js/unicorn.wizard.js"></script>
	</body>

<!-- Mirrored from wbpreview.com/previews/WB0F35928/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2010], Wed, 06 Mar 2013 03:48:16 GMT -->
</html>
