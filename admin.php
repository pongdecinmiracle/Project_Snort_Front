<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Tables - Raspberry Pi</title>

		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <link rel='stylesheet' href='./background.css' type='text/css'></link>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		<style>
            li.isHidden{
                display : none
            }
			li.isHidden2{
                display : none
            }
        </style>
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index.html" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							Distributed IPS
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">

						<li class="purple dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
								<span class="badge badge-important">10</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-exclamation-triangle"></i>
									10 Notifications
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar navbar-pink">
										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-pink fa fa-exclamation-triangle"></i>
														New Detect !!
													</span>
													<span class="pull-right badge badge-info">+12</span>
												</div>
											</a>
										</li>
										
										<li>
											<a href="#">
												<i class="btn btn-xs btn-primary fa fa-user"></i>
												New Update By Admin A
												<span class="pull-right badge badge-info">+11</span>
											</a>
										</li>
										
										<li>
											<a href="#">
												<i class="btn btn-xs btn-primary fa fa-user"></i>
												New Update By Admin Arnon
												<span class="pull-right badge badge-info">+12</span>
											</a>
										</li>
										
										<li>
											<a href="#">
												<i class="btn btn-xs btn-primary fa fa-user"></i>
												New Update By Admin Toonnga
												<span class="pull-right badge badge-info">+8</span>
											</a>
										</li>



									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="#">
										See all notifications
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

	<!-- Logout -->

						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/images/avatars/avatar2.png" alt="User's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									User
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="profile.html">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a onclick="logout()">
										<i class="ace-icon fa fa-power-off" ></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar responsive ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="active">
						<a href="dashboard.html">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="isHidden">
						<a href="admin.php">
							<i class="menu-icon glyphicon glyphicon-user"></i>
							Admin
						</a>

						<b class="arrow"></b>
                    </li>

                    <li class="isHidden2">
                            <a href="verify.html">
                                <i class="menu-icon glyphicon glyphicon-user"></i>
                                Verify By Admin
                            </a>
    
                            <b class="arrow"></b>
                    </li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Tables </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="tables.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Raspberry Pi 1
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="table_pi2.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Raspberry Pi 2
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a href="table_pi3.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Raspberry Pi 3
								</a>

								<b class="arrow"></b>
							</li>
							
						</ul>
					</li>

				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="dashboard.html">Home</a>
							</li>

							<li>
								<a href="tables.html">Tables</a>
							</li>
							<li class="active">Static &amp; Dynamic Tables</li>
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
								Tables
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Static &amp; Dynamic Tables
								</small>
							</h1>
						</div><!-- /.page-header -->
<!-- Head table -->
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
                                    <form method="post" action="./snorpy_rule.php"> 
            
            <div class="col-sm-12">
            
                <div class="fonttext">
                    snort
                </div>
                
                <div class="shape"><!-- Add Rule -->
                        <select name="action" >
                                <option value="">Action</option>
                                <option value="alert">alert</option>
                                <option value="log">log</option>
                                <option value="pass">pass</option>
                                <option value="activate">activate</option>
                                <option value="dynamic">dynamic</option>
                                <option value="drop">drop</option>
                                <option value="reject">reject</option>
                                <option value="sdrop">sdrop</option>
                            </select>
                            <select name="protocol">
                                <option value="">Protocol</option>
                                <option value="tcp">tcp</option>
                                <option value="icmp">icmp</option>
                                <option value="udp">udp</option>
                                <option value="ip">ip</option>
                            </select>
                            <input id="text" name="sourceip" placeholder="source ip"></input>
                            <input id="text"  name="srcport" placeholder="source port"></input>
                            <input id="text"  name="dstip"  placeholder="dest ip"></input>
                            <input id="text"  name="dstport"  placeholder="dest port"></input>
                            <input id="text"  name="sid"  placeholder="sid"></input>
                            <input id="text"  name="rev" placeholder="rev num"></input>
                        </br>
                            <input id=headermessage  name="headermessage" placeholder="Rule Message ( \ Escape special characters)"></input>
                            <input id="text"    name="classtype" placeholder="Class-Type"></input>
                            <select name="priority">
                                <option value="">Priority</option>
                                <option value="priority:1;">1</option>
                                <option value="priority:2;">2</option>
                                <option value="priority:3;">3</option>
                                <option value="priority:4;">4</option>
                                <option value="priority:5;">5</option>
                            </select>
                            <input id="text"    name="gid" placeholder="gid">
                </div>
                <div class="col-sm-6"><!-- IP -->
                        <div class="ip">
                            <h4>IP</h4>
                                <select name="ttlevaluator" >
                                        <option value="&gt;">&gt;</option>
                                        <option value="&lt;">&lt;</option>
                                        <option value="=">=</option>
                                        <option selected="selected" value="">TTL</option>
                                    </select>
                
                                    <input name="ttl" type="text" />
                                    </br></br>
                                    <select name="ipprotoevaluator" size="1">
                                        <option value="&gt;">&gt;</option>
                                        <option value="&lt;">&lt;</option>
                                        <option value="=">=</option>
                                        <option selected="selected" value="">IP PROTOCOL</option>
                                    </select>
                                    <input name="ipprotofield" type="text" />
                        
                        </div>
                    </div>
                    
                <div class="col-sm-6"><!-- TCP -->
                        <div class="tcp">
                                <h4>TCP</h4>
                        <select class="tcpinputs" id="httpmethodForm" >
                            <option value='content:"GET"; http_method;'>GET</option>
                            <option value='content:"POST"; http_method;'>POST</option>
                            <option value='content:"HEAD"; http_method;'>HEAD</option>
                            <option value='content:"TRACE"; http_method;'>TRACE</option>
                            <option value='content:"PUT"; http_method;'>PUT</option>
                            <option value='content:"DELETE"; http_method;'>DELETE</option>
                            <option value='content:"CONNECT"; http_method;'>CONNECT</option>
                            <option selected="selected" value="">HTTP REQUEST METHOD</option>
                        </select>
                    &nbsp<select  class="tcpinputs" style="border-radius:5px; background-color:#f2f2f2; padding:3px;" id="httpstatuscode">
                        <option value="100">100</option>
                        <option value="101">101</option>
                        <option value="200">200</option>
                        <option value="201">201</option>
                        <option value="202">202</option>
                        <option value="203">203</option>
                        <option value="204">204</option>
                        <option value="205">205</option>
                        <option value="206">206</option>
                        <option value="300">300</option>
                        <option value="301">301</option>
                        <option value="302">302</option>
                        <option value="303">303</option>
                        <option value="304">304</option>
                        <option value="305">305</option>
                        <option value="306">306</option>
                        <option value="307">307</option>
                        <option value="400">400</option>
                        <option value="401">401</option>
                        <option value="402">402</option>
                        <option value="403">403</option>
                        <option value="404">404</option>
                        <option value="405">405</option>
                        <option value="406">406</option>
                        <option value="407">407</option>
                        <option value="408">408</option>
                        <option value="409">409</option>
                        <option value="410">410</option>
                        <option value="411">411</option>
                        <option value="412">412</option>
                        <option value="413">413</option>
                        <option value="415">415</option>
                        <option value="416">416</option>
                        <option value="417">417</option>
                        <option value="500">500</option>
                        <option value="501">501</option>
                        <option value="502">502</option>
                        <option value="503">503</option>
                        <option value="504">504</option>
                        <option value="505">505</option>
                        <option selected="selected" value="">HTTP RESPONSE CODE</option>
                        </select></br>
                        </br>
                        ACK
                        <input style="border-radius:5px; background-color:#f2f2f2; padding:3px;" id="ACK" class="pin" type="checkbox" value="A" />
                            &nbsp;SYN<input id="SYN"  class="pin" type="checkbox" value="S" />
                            &nbsp;PSH<input id="PSH"  class="pin" type="checkbox" value="P" />
                            &nbsp;RST<input id="RST"  class="pin" type="checkbox" value="R" />
                            &nbsp;FIN<input id="FIN"  class="pin" type="checkbox" value="F" />
                            &nbsp;URG<input id="URG"  class="pin" type="checkbox" value="U" />
                            &nbsp;+<input id="flagplus" class="pin" type="checkbox" value="+" />
                            &nbsp;*<input id="wildcard" class="pin" type="checkbox" value="*" />
                        </br></br>
                        <select class="tcpinputs" id="tcpdirectionForm">
                            <option value="FROM_SERVER">FROM_SERVER</option>
                            <option value="TO_SERVER">TO_SERVER</option>
                            <option value="TO_CLIENT">TO_CLIENT</option>
                            <option value="FROM_CLIENT">FROM_CLIENT</option>
                            <option selected="selected" value="">DIRECTION</option>
                        </select>
                        &nbsp
                        <select  class="tcpinputs" id="tcpstateForm">
                            <option value="established">established</option>
                            <option value="stateless">stateless</option>
                            <option value="not_established">not_established</option>
                            <option selected="selected" value="">TCP STATE</option>
                        </select>
                        </div>
                    </div>
                    
                <div class="col-sm-6"><!-- ICMP -->
                            <div class="icmp">
                                    <h4>ICMP</h4>
                                        <select  class="tcpinputs" id="icmptypeevaluator">
                                        <option value="&gt;">&gt;</option>
                                        <option value="&lt;">&lt;</option>
                                        <option value="=">=</option>
                                        <option selected="selected" value="">ICMP TYPE</option>
                                        </select>
                                            <input  class="tcpinputs" id="icmptype" type="text" />
                                            </br></br>
                                        <select  class="tcpinputs" id="icmpcodeevaluator">
                                            <option value="&gt;">&gt;</option>
                                            <option value="&lt;">&lt;</option>
                                            <option value="=">=</option>
                                            <option selected="selected" value="">ICMP CODE</option>
                                        </select>
                                        <input  class="tcpinputs" id="icmpcode" type="text" />
                            </div>
                        </div>
                    
                <div class="col-sm-6"><!-- UDP -->
                            <div class="udp">
                             <h4>UDP</h4>
                                </br>
                                <select style="width: 90%;" id="udpdirectionForm">
                                    <option value="FROM_SERVER">FROM_SERVER</option>
                                    <option value="TO_SERVER">TO_SERVER</option>
                                    <option value="TO_CLIENT">TO_CLIENT</option>
                                    <option value="FROM_CLIENT">FROM_CLIENT</option>
                                    <option selected="selected" value="">DIRECTION</option>
                                </select>
                            </div>
                        </div>
                    
                        <!-- <input class="submit" type="submit" name="submit" value="Submit"> -->
                    
            </div>
            <input class="submit" type="submit" name="submit" value="Submit">
    
    </form><!-- End Form -->
									</div><!-- /.span -->
								</div><!-- /.row -->

								
								
								
								
								<!--
								<div class="hr hr-18 dotted hr-double"></div>
								-->
								


								

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Distributed IPS</span>
							Application &copy; 2017
						</span>
						
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="assets/js/dataTables.buttons.min.js"></script>
		<script src="assets/js/buttons.flash.min.js"></script>
		<script src="assets/js/buttons.html5.min.js"></script>
		<script src="assets/js/buttons.print.min.js"></script>
		<script src="assets/js/buttons.colVis.min.js"></script>
		<script src="assets/js/dataTables.select.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<script type="text/javascript">
			window.check()

			function check(){
				console.log("check")
				var token = localStorage.getItem("Token")
				var admin = localStorage.getItem("Admin")
				var status = localStorage.getItem("Status")
				if(token){
					console.log("pass")
                    if(admin==0){
                        
                    }else if(admin==1){
						if(status=="Admin"){
							var hiddenInput = document.getElementsByClassName("isHidden")
							var hiddenInput2 = document.getElementsByClassName("isHidden2")
							// console.log(hiddenInput)
							hiddenInput[0].style.display = "block"
							hiddenInput2[0].style.display = "block"
						}else if(status=="Visitor"){

						}
                        
                    }
				}else{
					window.location.href= 'login.html'
                
			    }
            }

			function logout(){
				console.log("logout")
				localStorage.removeItem("Token");
				localStorage.removeItem("Status");
				var admin = localStorage.getItem("Admin")
				if(admin){
					localStorage.removeItem("Admin");
				}
				window.location.href= 'login.html'
			}

		</script>
		


		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				//initiate dataTables plugin
				var myTable = 
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  { "bSortable": false },
					  null, null,null, null, null,
					  { "bSortable": false }
					],
					"aaSorting": [],
					select: {
						style: 'multi'
					}
			    } );
			
				
				
				$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
				
				new $.fn.dataTable.Buttons( myTable, {
					buttons: [
					  {
						"extend": "colvis",
						"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
						"className": "btn btn-white btn-primary btn-bold",
						columns: ':not(:first):not(:last)'
					  },
					  {
						"extend": "copy",
						"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "csv",
						"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "excel",
						"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "pdf",
						"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "print",
						"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
						"className": "btn btn-white btn-primary btn-bold",
						autoPrint: false,
						message: 'This print was produced using the Print button for DataTables'
					  }		  
					]
				} );
				myTable.buttons().container().appendTo( $('.tableTools-container') );
				
				//style the message box
				var defaultCopyAction = myTable.button(1).action();
				myTable.button(1).action(function (e, dt, button, config) {
					defaultCopyAction(e, dt, button, config);
					$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
				});
				
				
				var defaultColvisAction = myTable.button(0).action();
				myTable.button(0).action(function (e, dt, button, config) {
					
					defaultColvisAction(e, dt, button, config);
					
					
					if($('.dt-button-collection > .dropdown-menu').length == 0) {
						$('.dt-button-collection')
						.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
						.find('a').attr('href', '#').wrap("<li />")
					}
					$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
				});
			
				////
			
				setTimeout(function() {
					$($('.tableTools-container')).find('a.dt-button').each(function() {
						var div = $(this).find(' > div').first();
						if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
						else $(this).tooltip({container: 'body', title: $(this).text()});
					});
				}, 500);
				
				
				
				
				
				myTable.on( 'select', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
					}
				} );
				myTable.on( 'deselect', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
					}
				} );
			
			
			
			
				/////////////////////////////////
				//table checkboxes
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
				
				//select/deselect all rows according to table header checkbox
				$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$('#dynamic-table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) myTable.row(row).select();
						else  myTable.row(row).deselect();
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
					var row = $(this).closest('tr').get(0);
					if(this.checked) myTable.row(row).deselect();
					else myTable.row(row).select();
				});
			
			
			
				$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
					e.stopImmediatePropagation();
					e.stopPropagation();
					e.preventDefault();
				});
				
				
				
				//And for the first simple table, which doesn't have TableTools or dataTables
				//select/deselect all rows according to table header checkbox
				var active_class = 'active';
				$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
						else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
					var $row = $(this).closest('tr');
					if($row.is('.detail-row ')) return;
					if(this.checked) $row.addClass(active_class);
					else $row.removeClass(active_class);
				});
			
				
			
				/********************************/
				//add tooltip for small view action buttons in dropdown menu
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				
				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
				
				
				
				
				/***************/
				$('.show-details-btn').on('click', function(e) {
					e.preventDefault();
					$(this).closest('tr').next().toggleClass('open');
					$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
				});
				/***************/
				
				
				
			
			})
		</script>
	</body>
</html>
