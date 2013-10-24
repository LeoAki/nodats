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
				<h1>Form validation</h1>
				<div class="btn-group">
					<a class="btn btn-large tip-bottom" title="Manage Files"><i class="icon-file"></i></a>
					<a class="btn btn-large tip-bottom" title="Manage Users"><i class="icon-user"></i></a>
					<a class="btn btn-large tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span class="label label-important">5</span></a>
					<a class="btn btn-large tip-bottom" title="Manage Orders"><i class="icon-shopping-cart"></i></a>
				</div>
			</div>
			<div id="breadcrumb">
				<a href="index-2.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
				<a href="#">Form elements</a>
				<a href="#" class="current">Validation</a>
			</div>
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="span12">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="icon-align-justify"></i>									
								</span>
								<h5>Basic validation</h5>
								<span class="label label-important">48 notices</span>
							</div>
							<div class="widget-content nopadding">
								<form class="form-horizontal" method="post" action="#" name="basic_validate" id="basic_validate" novalidate="novalidate">
                                    <div class="control-group">
                                        <label class="control-label">Required</label>
                                        <div class="controls">
                                            <input type="text" name="required" id="required">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Email</label>
                                        <div class="controls">
                                            <input type="text" name="email" id="email">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Date</label>
                                        <div class="controls">
                                            <input type="password" name="date" id="date">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">URL</label>
                                        <div class="controls">
                                            <input type="password" name="url" id="url">
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <input type="submit" value="Validate" class="btn btn-primary">
                                    </div>
                                </form>
							</div>
						</div>			
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="icon-align-justify"></i>									
								</span>
								<h5>Number validation</h5>
							</div>
							<div class="widget-content nopadding">
								<form class="form-horizontal" method="post" action="#" name="number_validate" id="number_validate" novalidate="novalidate">
									<div class="control-group">
										<label class="control-label">Minimal value</label>
										<div class="controls">
											<input type="text" name="min" id="min" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Maximum value</label>
										<div class="controls">
											<input type="text" name="max" id="max" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Only number</label>
										<div class="controls">
											<input type="text" name="number" id="number" />
										</div>
									</div>
									<div class="form-actions">
										<input type="submit" value="Validate" class="btn btn-primary">
									</div>
								</form>
							</div>
						</div>
					</div>	
					<div class="row-fluid">
						<div class="span12">
							<div class="widget-box">
								<div class="widget-title">
									<span class="icon">
										<i class="icon-align-justify"></i>									
									</span>
									<h5>Password validation</h5>
								</div>
								<div class="widget-content nopadding">
									<form class="form-horizontal" method="post" action="#" name="password_validate" id="password_validate" novalidate="novalidate">
										<div class="control-group">
											<label class="control-label">Password</label>
											<div class="controls">
												<input type="password" name="pwd" id="pwd" />
											</div>
										</div>
										<div class="control-group">
											<label class="control-label">Confirm password</label>
											<div class="controls">
												<input type="password" name="pwd2" id="pwd2" />
											</div>
										</div>
										<div class="form-actions">
											<input type="submit" value="Validate" class="btn btn-primary">
										</div>
									</form>
								</div>
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
            <script src="js/jquery.uniform.js"></script>
            <script src="js/select2.min.js"></script>
            <script src="js/jquery.validate.js"></script>
            <script src="js/unicorn.js"></script>
            <script src="js/unicorn.form_validation.js"></script>
	</body>

<!-- Mirrored from wbpreview.com/previews/WB0F35928/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2010], Wed, 06 Mar 2013 03:48:15 GMT -->
</html>
