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
				<h1>Widgets</h1>
				<div class="btn-group">
					<a class="btn btn-large tip-bottom" title="Manage Files"><i class="icon-file"></i></a>
					<a class="btn btn-large tip-bottom" title="Manage Users"><i class="icon-user"></i></a>
					<a class="btn btn-large tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span class="label label-important">5</span></a>
					<a class="btn btn-large tip-bottom" title="Manage Orders"><i class="icon-shopping-cart"></i></a>
				</div>
			</div>
			<div id="breadcrumb">
				<a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
				<a href="#" class="current">Widgets</a>
			</div>
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="span6">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="icon-file"></i>
								</span>
								<h5>Recent Posts</h5>
							</div>
							<div class="widget-content nopadding">
								<ul class="recent-posts">
									<li>
										<div class="user-thumb">
											<img width="40" height="40" alt="User" src="img/demo/av2.jpg">
										</div>
										<div class="article-post">
											<span class="user-info"> By: neytiri on 2 Aug 2012, 09:27 AM, IP: 186.56.45.7 </span>
											<p>
												<a href="#">Vivamus sed auctor nibh congue, ligula vitae tempus pharetra...</a>
											</p>
											<a href="#" class="btn btn-primary btn-mini">Edit</a> <a href="#" class="btn btn-success btn-mini">Publish</a> <a href="#" class="btn btn-danger btn-mini">Delete</a>
										</div>
									</li>
									<li>
										<div class="user-thumb">
											<img width="40" height="40" alt="User" src="img/demo/av3.jpg">
										</div>
										<div class="article-post">
											<span class="user-info"> By: john on on 24 Jun 2012, 04:12 PM, IP: 192.168.24.3 </span>
											<p>
												<a href="#">Vivamus sed auctor nibh congue, ligula vitae tempus pharetra...</a>
											</p>
											<a href="#" class="btn btn-primary btn-mini">Edit</a> <a href="#" class="btn btn-success btn-mini">Publish</a> <a href="#" class="btn btn-danger btn-mini">Delete</a>
										</div>
									</li>
									<li>
										<div class="user-thumb">
											<img width="40" height="40" alt="User" src="img/demo/av1.jpg">
										</div>
										<div class="article-post">
											<span class="user-info"> By: michelle on 22 Jun 2012, 02:44 PM, IP: 172.10.56.3 </span>
											<p>
												<a href="#">Vivamus sed auctor nibh congue, ligula vitae tempus pharetra...</a>
											</p>
											<a href="#" class="btn btn-primary btn-mini">Edit</a> <a href="#" class="btn btn-success btn-mini">Publish</a> <a href="#" class="btn btn-danger btn-mini">Delete</a>
										</div>
									</li>
									<li class="viewall">
										<a title="View all posts" class="tip-top" href="#"> + View all + </a>
									</li>
								</ul>
							</div>
						</div>
						<div class="accordion" id="collapse-group">
                            <div class="accordion-group widget-box">
                                <div class="accordion-heading">
                                    <div class="widget-title">
                                        <a data-parent="#collapse-group" href="#collapseGOne" data-toggle="collapse">
                                            <span class="icon"><i class="icon-magnet"></i></span><h5>Accordion, opened by default</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="collapse in accordion-body" id="collapseGOne">
                                    <div class="widget-content">
                                        This is opened by default
                                    </div>
                                </div>
                            </div> 
                            <div class="accordion-group widget-box">
                                <div class="accordion-heading">
                                    <div class="widget-title">
                                        <a data-parent="#collapse-group" href="#collapseGTwo" data-toggle="collapse">
                                            <span class="icon"><i class="icon-magnet"></i></span><h5>Accordion, closed</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="collapse accordion-body" id="collapseGTwo">
                                    <div class="widget-content">
                                        Another is open
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-group widget-box">
                                <div class="accordion-heading">
                                    <div class="widget-title">
                                        <a data-parent="#collapse-group" href="#collapseGThree" data-toggle="collapse">
                                            <span class="icon"><i class="icon-magnet"></i></span><h5>Accordion, closed</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="collapse accordion-body" id="collapseGThree">
                                    <div class="widget-content">
                                        Another is open
                                    </div>
                                </div>
                            </div> 
                        </div>
                        
                        <div class="widget-box collapsible">
                            <div class="widget-title">
                                <a href="#collapseOne" data-toggle="collapse">
    								<span class="icon"><i class="icon-arrow-right"></i></span>
                                    <h5>Collapsible, opened by default</h5>
                                </a>
                            </div>
                            <div class="collapse in" id="collapseOne">
                            <div class="widget-content">
                                This box is opened by default
                            </div>
                            </div>
						</div>
						<div class="widget-box collapsible">
                            <div class="widget-title">
                                <a href="#collapseTwo" data-toggle="collapse">
    								<span class="icon"><i class="icon-remove"></i></span>
                                    <h5>Collapsible, closed by default</h5>
                                </a>
                            </div>
                            <div class="collapse" id="collapseTwo">
                                <div class="widget-content">
                                    This box is now open
                                </div>
                            </div>
						</div>
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="icon-refresh"></i>
								</span>	
								<h5>Latest updates</h5>
							</div>
							
							<div class="widget-content nopadding updates">
								<div class="new-update clearfix">
									<i class="icon-ok-sign"></i>
									<div class="update-done">										
										<a title="" href="#"><strong>A new server is on the board!</strong></a>
										<span>We've just set up a new server. Our gurus ...</span>
									</div>
									<div class="update-date"><span class="update-day">08</span>feb</div>
									
								</div>
								
								<div class="new-update clearfix">
									<i class="icon-exclamation-sign"></i>
									<span class="update-alert">										
										<a title="" href="#"><strong>[ URGENT ] ex.ua was closed by government</strong></a>
										<span>But already everything was solved. It will ...</span>
									</span>
									<span class="update-date"><span class="update-day">08</span>feb</span>
								</div>
								
								<div class="new-update clearfix">
									<i class="icon-ok-sign"></i>
									<span class="update-done">										
										<a title="" href="#"><strong>The goal was reached!</strong></a>
										<span>We just passed 1000 sales! Congrats to all</span>
									</span>
									<span class="update-date"><span class="update-day">07</span>feb</span>
								</div>
								
								<div class="new-update clearfix">
									<i class="icon-question-sign"></i>
									<span class="update-notice">										
										<a title="" href="#"><strong>Meat a new team member - Don Corleone</strong></a>
										<span>Very dyplomatic and flexible sales manager</span>
									</span>
									<span class="update-date"><span class="update-day">06</span>feb</span>
								</div>
								
							</div>
						</div>
					</div>
					<div class="span6">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="icon-comment"></i>
								</span>
								<h5>Recent comments</h5>
							</div>
							<div class="widget-content nopadding">
								<ul class="recent-comments">
									<li>
										<div class="user-thumb">
											<img width="40" height="40" alt="User" src="img/demo/av1.jpg">
										</div>
										<div class="comments">
											<span class="user-info"> User: michelle on IP: 172.10.56.3 </span>
											<p>
												<a href="#">Vivamus sed auctor nibh congue, ligula vitae tempus pharetra...</a>
											</p>
											<a href="#" class="btn btn-primary btn-mini">Edit</a> <a href="#" class="btn btn-success btn-mini">Approve</a> <a href="#" class="btn btn-warning btn-mini">Mark as spam</a> <a href="#" class="btn btn-danger btn-mini">Delete</a>
										</div>
									</li>
									<li>
										<div class="user-thumb">
											<img width="40" height="40" alt="User" src="img/demo/av3.jpg">
										</div>
										<div class="comments">
											<span class="user-info"> User: john on IP: 192.168.24.3 </span>
											<p>
												<a href="#">Vivamus sed auctor nibh congue, ligula vitae tempus pharetra...</a>
											</p>
											<a href="#" class="btn btn-primary btn-mini">Edit</a> <a href="#" class="btn btn-success btn-mini">Approve</a> <a href="#" class="btn btn-warning btn-mini">Mark as spam</a> <a href="#" class="btn btn-danger btn-mini">Delete</a>
										</div>
									</li>
									<li>
										<div class="user-thumb">
											<img width="40" height="40" alt="User" src="img/demo/av2.jpg">
										</div>
										<div class="comments">
											<span class="user-info"> User: neytiri on IP: 186.56.45.7 </span>
											<p>
												<a href="#">Vivamus sed auctor nibh congue, ligula vitae tempus pharetra...</a>
											</p>
											<a href="#" class="btn btn-primary btn-mini">Edit</a> <a href="#" class="btn btn-success btn-mini">Approve</a> <a href="#" class="btn btn-warning btn-mini">Mark as spam</a> <a href="#" class="btn btn-danger btn-mini">Delete</a>
										</div>
									</li>
									<li class="viewall">
										<a title="View all comments" class="tip-top" href="#"> + View all + </a>
									</li>
								</ul>
							</div>
						</div>
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon"><i class="icon-time"></i></span>
								<h5>My Tasks</h5>
								<span class="label label-info">44</span>
							</div>
							<div class="widget-content nopadding">
								<table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Opts</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="taskDesc"><i class="icon-info-sign"></i> Code a new theme</td>
                                                <td class="taskStatus"><span class="in-progress">in progress</span></td>
                                                <td class="taskOptions"><a href="#" class="tip-top" data-original-title="Update"><i class="icon-ok"></i></a> <a href="#" class="tip-top" data-original-title="Delete"><i class="icon-remove"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="taskDesc"><i class="icon-plus-sign"></i> Update a site</td>
                                                <td class="taskStatus"><span class="pending">pending</span></td>
                                                <td class="taskOptions"><a href="#" class="tip-top" data-original-title="Update"><i class="icon-ok"></i></a> <a href="#" class="tip-top" data-original-title="Delete"><i class="icon-remove"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="taskDesc"><i class="icon-ok-sign"></i> Meet the customers</td>
                                                <td class="taskStatus"><span class="done">done</span></td>
                                                <td class="taskOptions"><a href="#" class="tip-top" data-original-title="Update"><i class="icon-ok"></i></a> <a href="#" class="tip-top" data-original-title="Delete"><i class="icon-remove"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
							</div>
						</div>
						<div class="widget-box">
                            <div class="widget-title">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#tab1">Home</a></li>
                                    <li><a data-toggle="tab" href="#tab2">Profile</a></li>
                                    <li><a data-toggle="tab" href="#tab3">Messages</a></li>
                                </ul>
                            </div>
                            <div class="widget-content tab-content">
                                <div id="tab1" class="tab-pane active">Tab One Content</div>
                                <div id="tab2" class="tab-pane">This is a Tab Two Content</div>
                                <div id="tab3" class="tab-pane">This is a Tab Three Content</div>
                            </div>                            
                        </div>
                        <div class="widget-box">
                                <div class="widget-title">
                                    <span class="icon"><i class="icon-repeat"></i></span>
                                    <h5>Recent Activity</h5>
                                </div>
                                <div class="widget-content nopadding">
                                    <ul class="activity-list">
                                        <li><a href="#">
                                            <i class="icon-user"></i>
                                            <strong>Admin</strong> added <strong>1 user</strong> <span>2 hours ago</span>
                                        </a></li>
                                        <li><a href="#">
                                            <i class="icon-file"></i>
                                            <strong>Caroline Trin</strong> write a <strong>blog post</strong> <span>Yesterday</span>
                                        </a></li>
                                        <li><a href="#">
                                            <i class="icon-envelope"></i>
                                            <strong>John Doe</strong> sent a <strong>message</strong> <span>2 days ago</span>
                                        </a></li>
                                        <li><a href="#">
                                            <i class="icon-picture"></i>
                                            <strong>Matt Armon</strong> updated <strong>profile photo</strong> <span>2 days ago</span>
                                        </a></li>
                                        <li><a href="#">
                                            <i class="icon-user"></i>
                                            <strong>Admin</strong> bans <strong>3 users</strong> <span>week ago</span>
                                        </a></li>
                                    </ul>
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
            <script src="js/unicorn.js"></script>
	</body>

<!-- Mirrored from wbpreview.com/previews/WB0F35928/widgets.html by HTTrack Website Copier/3.x [XR&CO'2010], Wed, 06 Mar 2013 03:48:19 GMT -->
</html>
