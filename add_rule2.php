<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Tables - Raspberry Pi</title>

		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- <link rel='stylesheet' href='./css/snorpy.css' type='text/css'></link> -->
   		<link rel="stylesheet" href="./css/jquery-ui.css"></link>
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
					<a href="dashboard.html" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							Distributed IPS
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">

<!-- All Notification Alert -->
						<li class="purple dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
								<span class="badge badge-important">10</span>
							</a>
<!-- All Notification -->
							<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-exclamation-triangle"></i>
									10 Notifications
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar navbar-pink">
										<li>
											<a href="">
												<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-pink fa bigger-110 fa-exclamation-triangle"></i>
														All New Detect !!
													</span>
													<span class="pull-right badge badge-info">+12</span>
												</div>
											</a>
										</li>
										
										<li>
											<a href="tables.html">
												<i class="fa bigger-110 fa-user">
														New Update By Raspberry Pi 1
												</i>
												<span class="pull-right badge badge-info">+11</span>
											</a>
										</li>
										
										<li>
											<a href="tables_pi2.html">
													<i class="fa bigger-110 fa-user">
															New Update By Raspberry Pi 2
													</i>
												<span class="pull-right badge badge-info">+12</span>
											</a>
										</li>
										
										<li>
											<a href="tables_pi3.html">
													<i class="fa bigger-110 fa-user">
															New Update By Raspberry Pi 3
													</i>
												<span class="pull-right badge badge-info">+8</span>
											</a>
										</li>
									</ul>
								</li>

								
							</ul>
						</li>

	<!-- Logout -->

						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/images/avatars/avatar2.png" alt="User's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									<div id="user"></div>
<!-- User -->
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								

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
					<!--  -->
					<li class="isHidden">
							<a href="#" class="dropdown-toggle">
								<i class="menu-icon glyphicon glyphicon-user"></i>
								<span class="menu-text"> Admin Modify </span>
	
								<b class="arrow fa fa-angle-down"></b>
							</a>
	
							<b class="arrow"></b>
	
							<ul class="submenu">
									<li class="">
											<a href="add_rule1.php">
												<i class="menu-icon glyphicon glyphicon-user"></i>
												Add Rule : Raspberry Pi1
											</a>
					
											<b class="arrow"></b>
									</li>
					
									<li class="">
											<a href="add_rule2.php">
												<i class="menu-icon glyphicon glyphicon-user"></i>
												Add Rule : Raspberry Pi2
											</a>
					
											<b class="arrow"></b>
									</li>

									<li class="">
											<a href="add_rule3.php">
												<i class="menu-icon glyphicon glyphicon-user"></i>
												Add Rule : Raspberry Pi3
											</a>
					
											<b class="arrow"></b>
									</li>

									<li class="">
												<a href="verify.html">
													<i class="menu-icon glyphicon glyphicon-user"></i>
													Verify By Admin
												</a>
						
												<b class="arrow"></b>
									</li>
								
							</ul>
						</li>
					<!--  -->


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
								<a href="tables_pi2.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Raspberry Pi 2
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a href="tables_pi3.html">
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
								<a href="add_rule2.php">Add Rule : Raspberry Pi 2</a>
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
								Add Rule : Raspberry Pi 2
							</h1>
						</div><!-- /.page-header -->

<!--  Body  -->
  <!-- Name: <input type="text" name="name"> -->
  <form method="post" action="./snorpy_rule2.php">  
 <div class="col-sm-12">

	 <div class="col-sm-4">
			<h2>Add Rule</h2> 
	 </div>

 </div>
  <div class="rulebody">
  <br><br>
		<!-- Add Rule Basic -->
		<div class="col-sm-12">
				
                    <select id="action" name="action" >
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
                    <select id="protocol" name="protocol">
                        <option value="">Protocol</option>
                        <option value="tcp">tcp</option>
                        <option value="icmp">icmp</option>
                        <option value="udp">udp</option>
                        <option value="ip">ip</option>
                    </select>
                    <input name="sourceip" placeholder="source ip"></input>
                    <input name="srcport" placeholder="source port"></input>
                    <input name="dstip"  placeholder="dest ip"></input>
                    <input name="dstport"  placeholder="dest port"></input>
                    <input id="sid" name="sid"  placeholder="sid"></input>
                    <input name="rev" placeholder="rev num"></input>

                    <input id=headermessage  name="headermessage" placeholder="Rule Message ( \ Escape special characters)"></input>
                    <input  name="classtype" placeholder="Class-Type"></input>
                    <select name="priority">
                        <option value="">Priority</option>
                        <option value="priority:1">1</option>
                        <option value="priority:2">2</option>
                        <option value="priority:3">3</option>
                        <option value="priority:4">4</option>
                        <option value="priority:5">5</option>
                    </select>
                    <input  name="gid" placeholder="gid">
                    <!-- This is the LEFT Main box holind protocol option box -->
		</div>
		<!-- Add Rule : IP , TCP -->
		<div class="col-sm-12">
				<div class="col-sm-6">
					<br><br>
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
				
					<!-- TCP Options -->
			</div>
			<div class="col-sm-6">
				<br><br>
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
					</select></br><br>
					ACK
                    <input style="border-radius:5px; background-color:#f2f2f2; padding:3px;" id="ACK" class=" check2 opflags opflags" type="checkbox" value="A" />&nbsp;SYN<input id="SYN"  class=" check2 opflags" type="checkbox" value="S" />&nbsp;PSH<input id="PSH"  class=" check2 opflags" type="checkbox" value="P" />&nbsp;RST<input id="RST"  class=" check2 opflags" type="checkbox" value="R" />&nbsp;FIN<input id="FIN"  class=" check2 opflags" type="checkbox" value="F" />&nbsp;URG<input id="URG"  class=" check2 opflags" type="checkbox" value="U" />&nbsp;+<input id="flagplus" class=" check2 opflags flagoptions" type="checkbox" value="+" />&nbsp;*<input id="wildcard" class=" check2 opflags flagoptions" type="checkbox" value="*" /></br>
                    </br>
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
		<!-- Add Rule : ICMP , UDP -->
		<div class="col-sm-12">
			<div class="col-sm-6">
				<!-- UDP Options -->
                
			</br>
			<h4>UDP</h4>
					</br>
					<select style="width: 60%;" id="udpdirectionForm">
						<option value="FROM_SERVER">FROM_SERVER</option>
						<option value="TO_SERVER">TO_SERVER</option>
						<option value="TO_CLIENT">TO_CLIENT</option>
						<option value="FROM_CLIENT">FROM_CLIENT</option>
						<option selected="selected" value="">DIRECTION</option>
					</select>
			</div>
			<div class="col-sm-6">
					<!-- ICMP Options -->
                
				</br><h4>ICMP</h4>
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
		<!-- Add Rule : Submit -->
		<div class="col-sm-12">
			
					<br><br><br><br>
					<input type="submit" class="btn btn-secondary" style="border-radius: 6px;" name="submit" value="Submit" onclick="getRule()">  
		</div>
                
		<!-- Add Rule : BlankSpace -->
		<div class="col-sm-12">
				<br><br><br><br>
				<div class="center">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</div>
				<br><br>
		</div>
		<!-- Add Rule : Manual -->
		<div class="col-sm-12">
			<h4>Manual Rule</h4>
			<br><br>
			Rule : 
			<input style="width: 70%" type=" text" id="manual" name="manual" placeholder="Example : alert tcp 127.0.0.1 80 -> 127.0.0.1 80" >
			<br><br>Type :
			<input style="width: 20%" type=" text" id="type" name="type" placeholder="Example : action" >
			<br><br>Protocol :
			<input style="width: 20%" type=" text" id="protocolM" name="protocolM" placeholder="Example : TCP" >
			<br><br>Signature ID :
			<input style="width: 20%" type=" text" id="sig_id" name="sig_id" placeholder="Example : 10000001" >
			<br><br>Detail Rule :
			<input style="width: 66%" type=" text" id="msg" name="msg" placeholder="Example : Denial-of-service (Dos Attack)" >
			<br>
			<br><br>
			<input type="submit" class="btn btn-secondary" style="border-radius: 6px;" name="submit" value="Submit" onclick="showRule()" >  			
			
		</div>
		
 </div>
</form>

<!-- Edit Rule (Drop & Alert) : Raspberry Pi 2 -->
<div class="rulebody">
    <form action="./snorpy_rule2.php" >
        <!-- Add Rule : BlankSpace -->
		<div class="col-sm-12">
				<br><br><br><br>
				<div class="center">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</div>
				<br><br>
		</div>
        
        <h4>Edit Rule : Raspberry Pi 2</h4>
        <div class="col-sm-12">
            <br><br> Type Action : 
            <input style="width: 20%" type="text" name="type_action" id="type_action" placeholder="Example : action" >
            <br><br> Signature ID : 
            <input style="width: 20%" type="text" name="sid_edit" id="sid_edit" placeholder="Example : 10000001">
            <br>
			<br><br>
			<input type="submit" class="btn btn-secondary" style="border-radius: 6px;" name="submit" value="Submit" onclick="editRule()" >  			
			
        </div>
                    


    </form>
</div>
<!-- Modify Rule : Raspberry Pi 2 -->
<div class="rulebody">
    <form action="./snorpy_rule2.php">
        <!-- Add Rule : BlankSpace -->
		<div class="col-sm-12">
				<br><br><br><br>
				<div class="center">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</div>
				<br><br>
		</div>
        
        <h4>Modify Rule Use/Unuse : Raspberry Pi 2</h4>
        <div class="col-sm-12">
            <br><br> Signature ID : 
            <input style="width: 20%" type="text" name="sid_use" id="sid_use" placeholder="Example : 10000001">
            <br>
			<br><br>
			<input type="submit" class="btn btn-secondary" style="border-radius: 6px;" name="submit" value="Submit" onclick="useRule()" >  			
			
        </div>
        <!-- <h4>Modify Rule Use/Unuse : Raspberry Pi 2</h4> -->
        <div class="col-sm-12">
            <br><br> Signature ID : 
            <input style="width: 20%" type="text" name="sid_use" id="sid_use" placeholder="Example : 10000001">
            <br>
			<br><br>
			<input type="submit" class="btn btn-secondary" style="border-radius: 6px;" name="submit" value="Submit" onclick="useRule()" >  			
			
        </div>
                    


    </form>
</div>

<!-- Delete Rule : Raspberry Pi 2 -->
<div class="rulebody">
    <form action="./snorpy_rule2.php">
        <!-- Add Rule : BlankSpace -->
		<div class="col-sm-12">
				<br><br><br><br>
				<div class="center">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</div>
				<br><br>
		</div>
        
        <h4>Delete Rule : Raspberry Pi 2</h4>
        <div class="col-sm-12">
            <br><br> Signature ID : 
            <input style="width: 20%" type="text" name="sid_delete" id="sid_delete" placeholder="Example : 10000001">
            <br>
			<br><br>
			<input type="submit" class="btn btn-secondary" style="border-radius: 6px;" name="submit" value="Submit" onclick="deleteRule()" >  			
			
        </div>
                    


    </form>
</div>
		<!-- <button onclick="showRule()">Preview Rule</button> -->



								

								
<!-- //  -->
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

			$(document).ready(function(){
						var token = localStorage.getItem("Token")
						$.post("http://co-project1.eg.mahidol.ac.th/profile/user", 
						{token:token}).then(function(res,status){
							console.log(res)
									$(document).ready(function() {    
									$('#user')[0].innerHTML +=
									res.docs.Username
									
								})
						})
			})
			
			function getRule(){
				var action = document.getElementById("action").value
				var protocol = document.getElementById("protocol").value
				var sid = document.getElementById("sid").value
				var headermessage = document.getElementById("headermessage").value
				var color = getRandomColor()
				$.post("http://co-project1.eg.mahidol.ac.th/addrule", 
						{Type:action,Protocol:protocol,Sig_id:sid,Color:color,Msg:headermessage}).then(function(res,status){
							console.log(res)
							if(res.success=="true"){
								alert(res.message)
							}else{
								alert(res.message)
							}
						})
			}
			
			function manualRule(){
				var type = document.getElementById("type").value
				var protocol = document.getElementById("protocolM").value
				var sig_id = document.getElementById("sig_id").value
				var manual = document.getElementById("manual").value
				var msg = document.getElementById("msg").value
				var color = getRandomColor()
				if(!manual || manual == null || manual == 0){
					console.log("err")
				}else{
					$.post("http://co-project1.eg.mahidol.ac.th/addrule", 
						{Type:type,Protocol:protocol,Sig_id:sig_id,Color:color,Msg:msg,Manual:manual}).then(function(res,status){
							console.log("pass")
							if(res.success=="true"){
								alert(res.message)
							}else{
								alert(res.message)
							}
						})
				}
				
			}

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
							var hiddenInput = document.getElementsByClassName("isHidden") //admin menu
							hiddenInput[0].style.display = "block"  //admin menu
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

	</body>
</html>
