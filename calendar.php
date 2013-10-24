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
				<h1>Calendar</h1>
				<div class="btn-group">
					<a class="btn btn-large tip-bottom" title="Manage Files"><i class="icon-file"></i></a>
					<a class="btn btn-large tip-bottom" title="Manage Users"><i class="icon-user"></i></a>
					<a class="btn btn-large tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span class="label label-important">5</span></a>
					<a class="btn btn-large tip-bottom" title="Manage Orders"><i class="icon-shopping-cart"></i></a>
				</div>
			</div>
			<div id="breadcrumb">
				<a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
				<a href="#">Sample pages</a>
				<a href="#" class="current">Calendar</a>
			</div>
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="span12">
						<div class="alert alert-info">
							This page demonstrates a jQuery calendar plugin. Try to add a new event!
							<a href="#" class="close" data-dismiss="alert">×</a>
						</div>
						<div class="widget-box widget-calendar">
							<div class="widget-title">
								<span class="icon"><i class="icon-calendar"></i></span>
								<h5>Calendar</h5>
								<div class="buttons">
									<a id="add-event" data-toggle="modal" href="#modal-add-event" class="btn btn-success btn-mini"><i class="icon-plus icon-white"></i> Add new event</a>
									<div class="modal hide" id="modal-add-event">
										 <div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">×</button>
											<h3>Add a new event</h3>
										</div>
										<div class="modal-body">
											<p>Enter event name:</p>
											<p><input id="event-name" type="text" /></p>
										</div>
										<div class="modal-footer">
											<a href="#" class="btn" data-dismiss="modal">Cancel</a>
											<a href="#" id="add-event-submit" class="btn btn-primary">Add event</a>
										</div>
									</div>
								</div>
							</div>
							<div class="widget-content nopadding">
								<div class="panel-left">
									<div id="fullcalendar"></div>
								</div>
								<div id="external-events" class="panel-right">
									<div class="panel-title"><h5>Events</h5></div>
									<div class="panel-content">
										<div class="external-event ui-draggable label label-inverse">My Event 1</div>
                                        <div class="external-event ui-draggable label label-inverse">My Event 2</div>
                                        <div class="external-event ui-draggable label label-inverse">My Event 3</div>
                                        <div class="external-event ui-draggable label label-inverse">My Event 4</div>
                                        <div class="external-event ui-draggable label label-inverse">My Event 5</div>
									</div>
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
            <script src="js/fullcalendar.min.js"></script>
            <script src="js/unicorn.js"></script>
            <script src="js/unicorn.calendar.js"></script>
	</body>

<!-- Mirrored from wbpreview.com/previews/WB0F35928/calendar.html by HTTrack Website Copier/3.x [XR&CO'2010], Wed, 06 Mar 2013 03:48:18 GMT -->
</html>
