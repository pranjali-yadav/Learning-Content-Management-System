

<?php include('connection.php'); ?>

<!DOCTYPE html><html lang="en-US"><head>
<title>Course Details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes">
<meta name="Keywords" content="">
<meta name="Description" content="">
<link rel="canonical" href="">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<meta property="og:image" content="images/tp_big_logo.png">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="400">
<meta property="og:image:height" content="234">
<meta property="og:title" content="Caffe2 Tutorial">
<meta property="og:description" content="">
<link id="style-switch" rel="stylesheet" href="css/style-min.css">
<link rel="stylesheet" href="css/custom.css">
<style>ul.toc li.heading, .back-top, a.demo, .home-intro-sub{background:#232323; color:#fff;}  ul.toc li.heading:hover{background:#232323;} .btn-grey-border{background:#232323; color:#fff; border:1px solid #232323;} .course-box{background:#232323;} .qa-content{padding:0px 0px 0px 0px!important;} a.demo{background:#232323!important;} @media (max-width: 1199.98px){.navbar-expand-xl .navbar-brand .navbar-brand-item{height:38px!important; width:auto;}}
</style>
<script src="js/bat.js" async></script><script src="js/adpushup.js" type="text/javascript" async></script><script type="text/javascript" async id="AddShoppers" src="https://shop.pe/widget/widget_async.js#6434190bc032b7050cd12cdc"></script></head>
<body>
<div class="navbar-top navbar-dark d-xl-block py-2 mx-2 mx-md-4 rounded-bottom-4">
	<div class="container-fluid px-3 px-xl-0">
		<div class="d-lg-flex justify-content-lg-between align-items-center top-nav-links">
			<ul class="nav align-items-center justify-content-center">
				<li class="nav-item" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="bottom" data-bs-original-title="Home Page">
					<a class="nav-link" href="index.php"><i class="fal fa-home-alt me-1"></i> Home</a>
				</li>
				<li class="nav-item" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="bottom" data-bs-original-title="Online Coding System">
					<a class="nav-link" href="#"><i class="fal fa-code me-1"></i> Coding Ground</a>
				</li>
				<li class="nav-item" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="bottom" data-bs-original-title="Job Openings">
					<span><a class="nav-link" href="#"><i class="fal fa-suitcase me-1"></i> Jobs</a></span>
				</li>
				<li class="nav-item" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="bottom" data-bs-original-title="Digital Whiteboard">
					<span><a class="nav-link" href="#"><i class="fal fa-chalkboard me-1"></i> Whiteboard</a></span>
				</li>
				<li class="nav-item" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="bottom" data-bs-original-title="Developer's Tools">
					<span><a class="nav-link" href="#"><i class="fal fa-tools me-1"></i> Tools</a></span>
				</li>
				<li class="nav-item" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="bottom" data-bs-original-title="Corporate Trainings">
					<span><a class="nav-link" href="#"><i class="fal fa-chalkboard-user me-1"></i> Corporate Training</a></span>
				</li>
			</ul>
			<!-- Navbar top Right-->
			<div class="d-flex align-items-center justify-content-center">
				<!-- <div class="navbar-nav ms-2">
				  <div class="modeswitch-wrap" id="darkModeSwitch">
					 <div class="modeswitch-item">
						<div class="modeswitch-icon">
							<i class="fal fa-sun toggle-sun"></i>
							<i class="fal fa-moon toggle-moon"></i>
						</div>
					 </div>
				  </div>
				</div> -->
				<div class="me-3c top-nav-social">
				  <a class="nav-link" href="#" target="_self" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="bottom" data-bs-original-title="Teach with us"><i class="fal fa-users-class me-2"></i> <span>Teach with us</span></a>
				</div>
				<ul class="list-unstyled d-flex mb-0 top-nav-social">
					<li><a class="px-2 nav-link" rel="nofollow" aria-label="Facebook" href="#" target="_blank" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="bottom" data-bs-original-title="Tutorialspoint Facebook"><i class="fab fa-facebook"></i></a> </li>
					<li><a class="px-2 nav-link" rel="nofollow" aria-label="Instagram" href="#" target="_blank" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="bottom" data-bs-original-title="Tutorialspoint Instagram"><i class="fab fa-instagram"></i></a> </li>
					<li><a class="px-2 nav-link" rel="nofollow" aria-label="Twitter" href="#" target="_blank" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="bottom" data-bs-original-title="Tutorialspoint Twitter"><i class="fab fa-twitter"></i></a> </li>
					<li><a class="px-2 nav-link" rel="nofollow" aria-label="YouTube" href="#" target="_blank" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="bottom" data-bs-original-title="Tutorialspoint Youtube"><i class="fab fa-youtube"></i></a> </li>
					<li><a class="px-2 nav-link" rel="nofollow" aria-label="LinkedIn" href="#" target="_blank" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="bottom" data-bs-original-title="Tutorialspoint LinkedIn"><i class="fab fa-linkedin-in"></i></a> </li>
				</ul>
			</div>
		</div>
	</div>
</div>

<header class="navbar-light navbar-sticky header-static">
	<nav class="navbar navbar-expand-xl">
		<div class="container-fluid px-3 px-xl-4">
			<a class="navbar-brand" href="index.php"><img class="light-mode-item navbar-brand-item" src="images/logo.png" alt="logo"> <img class="dark-mode-item navbar-brand-item" src="images/logo-w_1.png" alt="logo"></a>
			<button class="navbar-toggler-toc collapsed ms-auto-toc" type="button" id="btn-tutorial-toc">
				<span><i class="fal fa-bars"></i></span>
			</button>
			<button class="navbar-toggler ms-auto" type="button" id="btn-menu-collapse">
				<i class="fal fa-user-circle fs-user-size"></i>
			</button>
			<div class="navbar-collapse w-100 collapse" id="navbarCollapse">
				<ul class="navbar-nav navbar-nav-scroll me-auto">
					<li class="nav-item nav-xs-login">
						<a class="nav-link"><i class="fal fa-sign-in me-2"></i>Login</a>
					</li>
					<li class="nav-item dropdown dropdown-menu-shadow-stacked">
						<a href="javascript:void(0);" class="nav-link" id="categoryMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fal fa-th-large fs-5 me-xl-1 d-xl-none"></i>
							<i class="fal fa-th me-1 d-none d-xl-inline-block"></i>
							<span class="d-xl-inline-block">Category <i class="fal fa-angle-down"></i></span>
						</a>
												<ul class="dropdown-menu categories-menu shadow" id="categories-menu">
							<li><a href="#" class="dropdown-item"><i class="fal fa-angle-right"></i> Academic Tutorials</a></li>
							<li><a href="#" class="dropdown-item"><i class="fal fa-angle-right"></i> Big Data & Analytics </a></li>
							<li><a href="#" class="dropdown-item"><i class="fal fa-angle-right"></i> Computer Programming </a></li>
							<li><a href="#" class="dropdown-item"><i class="fal fa-angle-right"></i> Computer Science </a></li>
							<li><a href="#" class="dropdown-item"><i class="fal fa-angle-right"></i> Databases </a></li>
							<li><a href="#" class="dropdown-item"><i class="fal fa-angle-right"></i> DevOps </a></li>
							<li><a href="#" class="dropdown-item"><i class="fal fa-angle-right"></i> Digital Marketing </a></li>
							<li><a href="#" class="dropdown-item"><i class="fal fa-angle-right"></i> Engineering Tutorials </a></li>
							<li><a href="#" class="dropdown-item"><i class="fal fa-angle-right"></i> Exams Syllabus </a></li>
							<li><a href="#" class="dropdown-item"><i class="fal fa-angle-right"></i> Famous Monuments </a></li>
							<li><a href="#" class="dropdown-item"><i class="fal fa-angle-right"></i> GATE Exams </a></li>
							<li><a href="#" class="dropdown-item"><i class="fal fa-angle-right"></i> Latest Technologies </a></li>
							<li><a href="#" class="dropdown-item"><i class="fal fa-angle-right"></i> Machine Learning </a></li>
							<li><a href="#" class="dropdown-item"><i class="fal fa-angle-right"></i> Mainframe Development </a></li>
							<li><a href="#" class="dropdown-item"><i class="fal fa-angle-right"></i> Management Tutorials </a></li>
							<li><a href="#" class="dropdown-item"><i class="fal fa-angle-right"></i> Mathematics Tutorials</a></li>
							<li><a href="#" class="dropdown-item"><i class="fal fa-angle-right"></i> Microsoft Technologies </a></li>
							<li><a href="#" class="dropdown-item"><i class="fal fa-angle-right"></i> Misc tutorials </a></li>
							<li><a href="#" class="dropdown-item"><i class="fal fa-angle-right"></i> Mobile Development </a></li>
							<li><a href="#" class="dropdown-item"><i class="fal fa-angle-right"></i> Java Technologies </a></li>
							<li><a href="#" class="dropdown-item"><i class="fal fa-angle-right"></i> Python Technologies </a></li>
							<li><a href="#" class="dropdown-item"><i class="fal fa-angle-right"></i> SAP Tutorials </a></li>
							<li><a href="#" class="dropdown-item"><i class="fal fa-angle-right"></i> Programming Scripts </a></li>
							<li><a href="#" class="dropdown-item"><i class="fal fa-angle-right"></i> Selected Reading </a></li>
							<li><a href="#" class="dropdown-item"><i class="fal fa-angle-right"></i> Software Quality </a></li>
							<li><a href="#" class="dropdown-item"><i class="fal fa-angle-right"></i> Soft Skills </a></li>
							<li><a href="#" class="dropdown-item"><i class="fal fa-angle-right"></i> Telecom Tutorials </a></li>
							<li><a href="#" class="dropdown-item"><i class="fal fa-angle-right"></i> UPSC IAS Exams </a></li>
							<li><a href="#" class="dropdown-item"><i class="fal fa-angle-right"></i> Web Development </a></li> 
							<li><a href="#" class="dropdown-item"><i class="fal fa-angle-right"></i> Sports Tutorials </a></li>
							<li><a href="#" class="dropdown-item"><i class="fal fa-angle-right"></i> XML Technologies </a></li>
							<li><a href="#" class="dropdown-item"><i class="fal fa-angle-right"></i> Multi-Language</a></li>
							<li><a href="#" class="dropdown-item"><i class="fal fa-angle-right"></i> Interview Questions</a></li>
						</ul>
											</li>
				</ul>
				<div class="navbar-collapse">
					<div class="col-xl-9">
						<div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center">
							<div class="nav-item w-100">
								<form class="rounded position-relative">
									<input class="form-control pe-4 bg-secondary bg-opacity-10 border-0 search-strings" type="search" placeholder="Search tutorials ..."  aria-label="Search">
									<button type="button" id="btnSearch" class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y"><i class="fal fa-search fs-6"></i></button>
									<div class="search-box search-box-inn" id="search-results"></div>
									<div class="clear"></div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<ul class="navbar-nav navbar-nav-scroll">
					<li class="nav-item">
						<a class="nav-link" href="#" target="_self"><i class="fal fa-cubes me-1"></i>Prime Packs</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" target="_self"><i class="fal fa-play-circle me-1"></i>Courses</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" target="_self"><i class="fal fa-book-reader me-1"></i>eBooks</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" target="_self"><i class="fal fa-books me-1"></i>Library</a>
					</li>
					<li class="nav-item">
					        <a class="nav-link" href="#" target="_self"><i class="fal fa-money-check-edit me-1"></i> Articles</a>
					</li>
				</ul>
			</div>
			<div class="navbar-nav d-lg-inline-block nav-login">
			   <a href="admin/index.php" target="_blank" class="btn btn-grey-border mb-0"><i class="fal fa-sign-in me-2"></i>Login</a>
			</div>
		</div>
	</nav>
</header>
<main class="bg-light pb-4">
<div class="container-fluid mt-3 px-3 px-xl-3">
<div class="row g-4">
<div class="col-sm-12 col-md-4 col-xl-3 ps-0 pe-0 collapse tutorial-toc" id="tocCollapse">
<div class="card card-body bg-light pt-0 toc-nav">
<div class="mini-logo">
<img src="images/caffe2-mini-logo.jpg" alt="Caffe2 Tutorial">
</div>


  <?php

        $sids = $_GET['sid'];

        $sqly = "SELECT * FROM content WHERE scid = '".$sids."'";
        $queryy = $conn->query($sqly);
        $clienty = $queryy->fetch_assoc();


      ?>






<ul class="toc chapters">
<li class="heading">Category- <?php echo $clienty['mcategory']; ?></li>

<li class="heading">Subcategory-<?php echo $clienty['scategory']; ?></li>

<?php

 $result  = $conn->query($sqly); 
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

echo '<li><a href="course_subdetails.php?sid='.$row['id'].'" target="_blank">'.$row['ctitle'].' </a></li>';
 
 }
} else {
    echo "No data found.";
}
?> 



</ul>
<div id="stickyparent" class="d-none d-sm-block">
<div style="height:250px;width:300px;" id="sticky-ad">
<div id="430c9911-782f-495d-88f9-69f58ca8c9a4" class="_ap_apex_ad">
<script>
var adpushup = adpushup || {};
adpushup.que = adpushup.que || [];
adpushup.que.push(function() {
adpushup.triggerAd("430c9911-782f-495d-88f9-69f58ca8c9a4");
});
</script>
</div>
</div>
</div>
</div>
</div>
<!-- Tutorial ToC Ends Here -->

<!-- Tutorial Content Starts Here -->
<div class="col-sm-12 col-md-8 col-xl-6 rounded-3 tutorial-content" id="mainContent">
<div class="cover">
<img class="img-responsive" style="width:100%; margin-top: 15px;" src="images/caffe2.jpg" alt="Caffe2 Tutorial">
</div>
<div class="clearer"></div>
<div class="tutorial-home-menu">
<form action="#" method="POST">
<input type="hidden" name="search_string" value="Caffe2">
<button class="tp-btn"><i class="fal fa-file-pdf"></i><a href="#"> PDF Version</a></button>
<button class="tp-btn"><i class="fal fa-book-reader"></i><a href="#"> Quick Guide</a></button>
<button class="tp-btn"><i class="fal fa-external-link"></i><a href="#"> Resources</a></button>
<button type="submit" class="tp-btn"><i class="fal fa-search-dollar"></i> Job Search</button>
<button class="tp-btn"><i class="fal fa-comments"></i><a href="#"> Discussion</a></button>
</form>
</div>



 






<h1><?php echo $clienty['ctitle']; ?></h1>
<p><?php echo $clienty['cdescription']; ?></p>

 
<?php echo '<img src="'.'images/'.$clienty['photo'].'" style="width: 500px; height: auto;" >'; ?>


<div class="d-flex justify-content-between border-bottom border-top py-2" id="bottom_navigation">
<a href="#" class="pre-btn"><i class="fal fa-chevron-circle-left"></i> Previous Page</a>
<a id="print-page" href="#" class="pre-btn d-none d-sm-block"><i class="fal fa-print"></i> Print Page</a>
<a href="#" class="nxt-btn">Next Page <i class="fal fa-chevron-circle-right"></i> </a>
</div>
<style> 
@media (min-width: 1200px){
.navbar-expand-xl .navbar-brand .navbar-brand-item{width:275px!important; height:42px!important; display:block;} }
</style>
			<div class="google-bottom-ads" id="google-bottom-ads">
				<div>Advertisements</div>
				<div>
					<div id="adp_bottom_ads"></div>
					<script>
						var adPos = document.getElementById('adp_bottom_ads');
						var mobile_ad_id = "6d621d7e-9531-4f26-810f-68af67dc6366";
						var desktop_ad_id = "4951d1d6-24d4-4a31-afb7-2c22c489eae1";
						var adpushup = adpushup || {};
						adpushup.que = adpushup.que || [];
						adpushup.que.push(function() {
							var ad_id = window.innerWidth <= 768 ? mobile_ad_id : desktop_ad_id;
							adPos.innerHTML = '<div id="' + ad_id + '" class="_ap_apex_ad"></div>';
							adpushup.triggerAd(ad_id);
						});
					</script>
				</div>
			</div>
		</div>
	<!-- Tutorial Content Ends Here -->

	<!-- Right Column Starts Here -->
	<div class="col-sm-6 col-md-3 col-xl-3">
				<div class="data-sticky" id="google-right-ads">
			<div class="google-right-ad" style="margin: 0px auto !important;margin-top:5px;min-height:280px!important">
				<div id="2557b9b8-4c1f-4586-a953-f123dbd2ed8e" class="_ap_apex_ad">
					<script>
						if( window.innerWidth > 768 ){
						   var adpushup = adpushup || {};
						   adpushup.que = adpushup.que || [];
						   adpushup.que.push(function() {
						   adpushup.triggerAd("2557b9b8-4c1f-4586-a953-f123dbd2ed8e");
						   });
						}
					</script>
				</div>
			</div>
			<div class="google-right-ad" style="margin-top:16px;min-height:280px!important">
				<div id="b078e6a3-e1b7-40fe-b690-11ac441ad2d5" class="_ap_apex_ad">
					<script>
						if( window.innerWidth > 768 ){
						   var adpushup = adpushup || {};
						   adpushup.que = adpushup.que || [];
						   adpushup.que.push(function() {
						   adpushup.triggerAd("b078e6a3-e1b7-40fe-b690-11ac441ad2d5");
						   });
						}
					</script>
				</div>
			</div>
			<div class="google-right-ad" style="margin-top:16px;margin-bottom:15px;min-height:600px!important">
				<div id="8f8814c2-d64c-4d26-9cb9-543653c0b48f" class="_ap_apex_ad">
					<script>
						if( window.innerWidth > 768 ){
						   var adpushup = adpushup || {};
						   adpushup.que = adpushup.que || [];
						   adpushup.que.push(function() {
						   adpushup.triggerAd("8f8814c2-d64c-4d26-9cb9-543653c0b48f");
						   });
						}
					</script>
				</div>
			</div>
			<!-- Right Column Ends Here -->
		</div>
	</div>
</div>
</div>
</main>



<footer class="py-3 card navbar-dark border-top" id="footer">
	<!-- ======================= Annual Membership -->
	<div class="py-4 bg-white">
		<div class="container">
			<div class="row g-4">
			<!-- Action box item -->
				<div class="col-lg-6 position-relative overflow-hidden">
					<a href="#" target="_blank" title="Annual Membership">
						<div class="bg-primary bg-opacity-10 rounded-3 p-5 h-100">
							<div class="position-absolute bottom-0 end-0 me-3">
								<img src="fonts/annual-membership-wraps.svg" class="h-100px h-sm-200px" alt="Annual Membership" style="border-bottom-right-radius:10px;">
							</div>
							<div class="row">
								<div class="col-sm-8 position-relative">
									<h3 class="mb-1">Annual Membership</h3>
									<p class="mb-3 h5 fw-light lead">Enjoy unlimited access on 5500+ Hand Picked Quality Video Courses</p>
									<div class="btn btn-business mb-0"><i class="fal fa-check"></i> Subscribe Now</div>
								</div>
							</div>
						</div>
					</a>
				</div>

				<!-- Action box item -->
				<div class="col-lg-6 position-relative overflow-hidden">
					<a href="#" target="_blank" title="Business Pack">
						<div class="bg-secondary rounded-3 bg-opacity-10 p-5 h-100">
							<div class="position-absolute bottom-0 end-0 me-3">
								<img src="fonts/business-banner-wraps.svg" class="h-100px h-sm-200px" alt="Training for a Team">
							</div>
							<div class="row">
								<div class="col-sm-8 position-relative">
									<h3 class="mb-1">Training for a Team</h3>
									<p class="mb-3 h5 fw-light lead">Affordable solution to train a team and make them project ready.</p>
									<div class="btn btn-warning mb-0"><i class="fal fa-check me-1"></i> Request a Demo</div>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- ======================= Annual Membership -->
	<div class="container">
		<div class="row g-4"> 
			<div class="col-lg-12 text-center">
				<a class="me-0 pb-4" href="#">
					<img class="light-mode-item" src="images/logo_1.png" alt="Tutorials Point" style="height:42px;">
					<img class="dark-mode-item" src="images/logo-w.png" alt="Tutorials Point" style="height:42px;">
				</a>
				<ul class="nav justify-content-center py-3 mt-md-0 ">
					<li class="nav-item"><a class="nav-link fw-bold" href="#"><i class="fal fa-globe"></i> About us</a></li>
					<li class="nav-item"><a class="nav-link fw-bold" href="#"> <i class="fal fa-check"></i> Refund Policy</a></li>
					<li class="nav-item"><a class="nav-link fw-bold" href="#"><i class="fal fa-check"></i> Terms of use</a></li>
					<li class="nav-item"><a class="nav-link fw-bold" href="#"> <i class="fal fa-shield-check"></i> Privacy Policy</a></li>
					<li class="nav-item"><a class="nav-link fw-bold" href="#"><i class="fal fa-question-circle"></i> FAQ's</a></li>
					<li class="nav-item"><a class="nav-link fw-bold" href="#"><i class="fal fa-map-marker-alt"></i> Contact</a></li>
				</ul>
				<p class="small">Copyright © TUTORIALS POINT (INDIA) PRIVATE LIMITED. All Rights Reserved.</p>
			</div>
			<div id="privacy-banner">
				<div>
					<p>We make use of First and third party cookies to improve our user experience. By using this website, you agree with our Cookies Policy.
						<a id="banner-accept" href="#">Agree</a>
						<a id="banner-learn" href="/about/about_cookies.htm" target="_blank">Learn more</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</footer>

<div class="back-top">
<i class="fal fa-angle-up position-absolute top-50 start-50 translate-middle"></i>
</div>
<script data-cfasync="false">(function(w, d) { var s = d.createElement('script'); s.src = '//cdn.adpushup.com/40046/adpushup.js'; s.type = 'text/javascript'; s.async = true; (d.getElementsByTagName('head')[0] || d.getElementsByTagName('body')[0]).appendChild(s); })(window, document);</script>
<script>(function(w,d){var adSlot=d.createElement("div");adSlot.className="ad-slot ad gpt-div-slot",adSlot.style="position: absolute; visibility: hidden;",adSlot.textContent=" ",d.body.appendChild(adSlot),setTimeout((function(){if(0===adSlot.clientHeight){var t=d.createElement("script");t.setAttribute("src","https://delivery.adrecover.com/18107/adRecover.js"),t.setAttribute("type","text/javascript"),t.setAttribute("async",!0),d.head.append(t)}}),0);})(window, document);</script><div class="ad-slot ad gpt-div-slot" style="position: absolute; visibility: hidden;">&nbsp;</div>
<script async src="js/script-min.js"></script>
        
<script type="text/javascript">
    var AddShoppersWidgetOptions = { 'loadCss': false, 'pushResponse': false };
    (!function(){
        var t=document.createElement("script");
        t.type="text/javascript",
        t.async=!0,
        t.id="AddShoppers",
        t.src="https://shop.pe/widget/widget_async.js#6434190bc032b7050cd12cdc",
        document.getElementsByTagName("head")[0].appendChild(t)
    }());
</script>
<script>
  (function(w,d,t,r,u)
  {
    var f,n,i;
    w[u]=w[u]||[],f=function()
    {
      var o={ti:"97039426", enableAutoSpaTracking: true};
      o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")
    },
    n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function()
    {
      var s=this.readyState;
      s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)
    },
    i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)
  })
  (window,document,"script","//bat.bing.com/bat.js","uetq");
</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EX9ZP4VY84"></script>
<script>
     window.dataLayer = window.dataLayer || [];
     function gtag(){dataLayer.push(arguments);}
     gtag('js', new Date());
     gtag('config', 'G-EX9ZP4VY84');
</script>
<!-- Global site tag (gtag.js) - Google Ads -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-664793816"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'AW-664793816');
</script>


</body></html>