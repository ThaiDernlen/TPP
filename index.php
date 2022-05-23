<?php set_time_limit(30);
session_start();
error_reporting(E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>ONE FOR ALL | ALL COMPLEX</title>
	<style type="text/css"></style>
	<link rel="icon" type="image/png" href="Assets/img/fevicon.png" />
	<link rel="stylesheet" href="Assets/css/bootstrap.min.css" />
	<link href="Assets/css/fontawesome.css" rel="stylesheet">
	<link href="Assets/css/brands.css" rel="stylesheet">
	<link href="Assets/css/solid.css" rel="stylesheet">
	<link rel="stylesheet" href="Assets/css/style.css" />
</head>
<!-- for grid menu -->
<script>
	window.console = window.console || function(t) {};
</script>
<script>
	if (document.location.search.match(/type=embed/gi)) {
		window.parent.postMessage("resize", "*");
	}
</script>

<body class="pc-light" id="body_preference">
	<!-- menu nav -->
	<div class="main-banner" id="main-banner" style="position: fixed; top: 0;z-index:1">
		<div class="banner-preference">
			<img class="banner-img">
		</div>
		<div class="banner-setting">
			<input type="checkbox" id="dark-check" style="display:none" onclick="setting_mode()" <?php if (@$_COOKIE['setting_mode'] == 'dark') {
																										echo 'checked';
																									} ?> />
			<label for="dark-check" class="toggle "><span></span>
				<p>&nbsp;DARKMODE</p>
			</label>
		</div>
		<div class="banner-user" id="banner-user">
			<div class="vl"></div>
			<?php if (isset($_SESSION['bobby_id'])) { ?>
				<img src="<?php echo $_SESSION['bobby_img']; ?>" onerror="this.src='Assets/img/no_img.png';" width="40px" height="40px" style="border-radius: 50%;">
				<?php echo $_SESSION['bobby_name']; ?>
				<button class="btn btn-sm btn-outline-danger" onclick="bobby_logout('bobby_logout');" type="button"><i class="fa fa-power-off" aria-hidden="true"></i></button>
			<?php } else { ?>
				<div class="for-btn">
					<i class="fa fa-user-circle" style="font-size: 40px" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#modal_login"></i>
				</div>
			<?php } ?>
		</div>
		<div class="banner-option" onclick="toggle_menu();">
			<i class="fa fa-bars" aria-hidden="true"></i>
		</div>
	</div>

	<!-- content -->
	<div class="background-content"></div>
	<div class="container main-content">
		<div class="row" style="margin-top:70px">
			<h4>
				<font color="#004a98" size="6px">-</font> OPERATION
			</h4>
		</div>
		<div class="row">
			<!-- Operation Program -->
			<div class="cards-list">
				<!-- First program -->
				<a class="card_menu" href="Dashboard">
					<div class="card_image "> <img src="Assets/img/logo/Dashboard.png" /> </div>
					<div class="card_title title-operation">
						<p>Dashboard</p>
					</div>
				</a>
				<a class="card_menu " href="Progress">
					<div class="card_image"> <img src="Assets/img/logo/Progress.png" /> </div>
					<div class="card_title title-operation">
						<p>Progress</p>
					</div>
				</a>
				<a class="card_menu  " href="Data_Center" target="_blank">
					<div class="card_image"> <img src="Assets/img/logo/Data_Center.png" /> </div>
					<div class="card_title title-operation">
						<p>Data Center</p>
					</div>
				</a>
				<a class="card_menu" href="Product">
					<div class="card_image"> <img src="Assets/img/logo/Inventory.png" /> </div>
					<div class="card_title title-operation">
						<p>Product</p>
					</div>
				</a>
				<a class="card_menu" href="FL">
					<div class="card_image"> <img src="Assets/img/logo/fl.png" /> </div>
					<div class="card_title title-operation">
						<p>Forklift</p>
					</div>
				</a>
				<a class="card_menu" href="http://lite.cpall.co.th/LITE/TMS?WH=rdcac">
					<div class="card_image">
						<img src="Assets/img/logo/truck.png" />
					</div>
					<div class="card_title title-operation">
						<p>FMS</p>
					</div>
				</a>
				<a class="card_menu" href="http://lite.cpall.co.th/LITE/TMS/monitor?DC=truck_rdcac">
					<div class="card_image">
						<img src="Assets/img/logo/th_Truckmonitor.png" />
					</div>
					<div class="card_title title-operation">
						<p>FMS Monitor</p>
					</div>
				</a>
				<a class="card_menu unavilable" href="#">
					<div class="card_image"> <img src="Assets/img/logo/repick.png" /> </div>
					<div class="card_title title-operation">
						<p>Repick</p>
					</div>
				</a>
				<a class="card_menu " href="Receive">
					<div class="card_image"> <img src="Assets/img/logo/receiving.jpg" /> </div>
					<div class="card_title title-operation">
						<p>Data Receive</p>
					</div>
				</a>
				<a class="card_menu unavilable" href="//172.29.202.224/AC/truckage">
					<div class="card_image"> <img src="Assets/img/logo/truckage.jpg" /> </div>
					<div class="card_title title-operation">
						<p>Truckage</p>
					</div>
				</a>
				<a class="card_menu " href="Recieve_checkin">
					<div class="card_image"> <img src="Assets/img/logo/rscheckin.jpg" /> </div>
					<div class="card_title title-operation">
						<p>Receive Supplier</p>
					</div>
				</a>
				<a class="card_menu" href="CycleCount_Pallet">
					<div class="card_image"> <img src="Assets/img/logo/Inventory.png" /> </div>
					<div class="card_title title-operation">
						<p>Count Pallet</p>
					</div>
				</a>
				<a class="card_menu" href="http://192.168.60.27/AC/FMCG/login">
					<div class="card_image"> <img src="Assets/img/logo/24Shopping.png" /> </div>
					<div class="card_title title-operation">
						<p>FMCG</p>
					</div>
				</a>
				<a class="card_menu" href="http://192.168.60.27/AC/Replenishment/login">
					<div class="card_image"> <img src="Assets/img/logo/replenishment.png" /> </div>
					<div class="card_title title-operation">
						<p>Replenishment</p>
					</div>
				</a>
				<a class="card_menu" href="http://192.168.60.27/AC/Cyclecount/login">
					<div class="card_image"> <img src="Assets/img/logo/th_Cycle.png" /> </div>
					<div class="card_title title-operation">
						<p>Cycle Count</p>
					</div>
				</a>
				<!--<a class="card_menu" href="http://lite.cpall.co.th/FMCG/index">
					<div class="card_image"> <img src="Assets/img/logo/cfo.png" /> </div>
					<div class="card_title title-operation">
						<p>C F O</p>
					</div>
				</a>-->
			</div>

			<div class="row" style="margin-top:20px">
				<h4>
					<font color="red" size="6px">-</font> SUPPORT
				</h4>
			</div>
			<div class="row">
				<!-- Support Program -->
				<div class="cards-list">
					<!-- First program -->
					<a class="card_menu " href="http://172.29.202.224/AC/LORA/login">
						<div class="card_image"> <img src="Assets/img/logo/lora.png" /> </div>
						<div class="card_title title-support">
							<p>LORA</p>
						</div>
					</a>
					<a class="card_menu " href="http://172.29.202.224/AC/admin_booking">
						<div class="card_image"> <img src="//172.29.202.224/AC/Assets/img/logo/icon_meet2.png" /> </div>
						<div class="card_title title-support">
							<p>Admin Booking</p>
						</div>
					</a>
					<a class="card_menu" href="TOBESHOP/Store">
						<div class="card_image"> <img src="Assets/img/logo/Tobeshop.png" /> </div>
						<div class="card_title title-support">
							<p>To Be Shop</p>
						</div>
					</a>
					<a class="card_menu " href="ASM">
						<div class="card_image"> <img src="Assets/img/logo/ASM1.png" /> </div>
						<div class="card_title title-support">
							<p>ASM</p>
						</div>
					</a>


					<a class="card_menu " href="http://172.29.202.224/AC/ADNA/login">
						<div class="card_image"> <img src="Assets/img/logo/ADNA.png" /> </div>
						<div class="card_title title-support">
							<p>ADNA</p>
						</div>
					</a>
					<a class="card_menu " href="http://lite.cpall.co.th/PMAll/index.php">
						<div class="card_image"> <img src="Assets/img/logo/PMALL.png" /> </div>
						<div class="card_title title-support">
							<p>PMALL</p>
						</div>
					</a>


					<a class="card_menu" href="Battary_Management">
						<div class="card_image"> <img src="Assets/img/logo/icon_battary.png" /> </div>
						<div class="card_title title-support">
							<p>Battary</p>
						</div>
					</a>
					<a class="card_menu " href="http://172.29.226.11/hr_stock/login.php">
						<div class="card_image"> <img src="Assets/img/logo/Hr_stock.jpg" /> </div>
						<div class="card_title title-support">
							<p>HR Stock</p>
						</div>
					</a>
					<a class="card_menu  " href="nrs_allnew/">
						<div class="card_image"> <img src="Assets/img/logo/bg_nrs.png" /> </div>
						<div class="card_title title-support">
							<p>NRS</p>
						</div>
					</a>
					
				</div>
			</div>
			<div class="row" style="margin-top:20px">
				<h4>
					<font color="red" size="6px">-</font> MAIN
				</h4>
			</div>
			<div class="row">
				<!-- Support Program -->
				<div class="cards-list">
					<!-- First program -->
					<a class="card_menu " href="http://wmos-report.cpall.co.th:9300/bi/?perspective=home" target="_blank">
						<div class="card_image"> <img src="Assets/img/logo/IBM-Cognos-analytics.png" /> </div>
						<div class="card_title title-support" style="background-color: rgba(255, 255, 0, 0.75); color: black;">
							<p>MH Report</p>
						</div>
					</a>
					<a class="card_menu " href="https://wmos-g3.cpall.co.th:10001/" target="_blank">
						<div class="card_image"> <img src="Assets/img/logo/manhattan.png" /> </div>
						<div class="card_title title-support" style="background-color: rgba(255, 255, 0, 0.75); color: black;">
							<p>Manhattan</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<footer>2021 DESIGNED BY <img src="Assets/img/bobby.png" height="20px"> BOBBYNS</footer>
</body>

</html>
<!-- CONTACT -->

<div class="contact_us">
	<i class="fas fa-address-book" style="font-size:15px"></i> &nbsp;แจ้งปัญหา
</div>
<div class="contact_overlay">
	<b>ระบบ Manhattan ,Network</b>
	<br><span>- Hotline Call Center -</span>
	<br><i class="fas fa-phone-square-alt"></i> *7001500
	<hr>
	<b>ระบบ One For All</b>
	<br><span>- สุวัจนีย์ ปัญญาภู -</span>
	<br><i class="fas fa-phone-square-alt"></i> 065-4798907
	<br><i class="fab fa-line"></i> Fafearn89
	<br><span>- ธิปก เรืองไทย -</span>
	<br><i class="fas fa-phone-square-alt"></i> 085-0015001
	<br><i class="fab fa-line"></i> fareathty
	<hr>
</div>
<!-- MODAL LOGIN-->
<div class="modal fade" id="modal_login" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog  modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body" id="bordered">
				<form id="form-login">
					<div class="mb-3">
						<center><img src="Assets/img/logo_sm.png" /></center>
					</div>
					<div class="mb-3 container">
						<label for="bobby_id" class="col-form-label">รหัสพนักงาน (Employee ID)</label>
						<input type="text" class="form-control" id="bobby_id" name="bobby_id" required autocomplete="off" />
						<label for="bobby_password" class="col-form-label">รหัสผ่าน (Password)</label>
						<input type="Password" class="form-control" id="bobby_password" name="bobby_password" required autocomplete="off" />
					</div>
					<center>
						<button type="button" class="btn btn-primary" id="btn_confirm" onclick="bobby_login('bobby_login');">เข้าสู่ระบบ</button>
						<button type="button" class="btn btn-warning " id="btn_warn" style="display:none"></button>
						<button type="button" class="btn btn-success " id="btn_success" style="display:none"></button>
					</center>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- MODAL SHOW ERROR -->
<div class="modal fade" id="modal_error" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog  modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<center>
					<i class="fa fa-lock fa-5x text-warning" aria-hidden="true"></i>
					<h4 class=""><span id="text_error" class="head_TH">ท่านไม่ได้รับสิทธิ์เข้าใช้งานโปรแกรม<br>โปรดตรวจสอบและดำเนินการอีกครั้ง</span></h4>
				</center>
			</div>
		</div>
	</div>
</div>
<!-- MODAL MOBILE SETTING -->
<div class="modal fade" id="modal_setting" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog  modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<h5 class="text-center">การตั้งค่า</h5>
				<hr>
				<input type="checkbox" id="dark-check-mobile" style="display:none" onclick="setting_mode_mobile()" <?php if (@$_COOKIE['setting_mode'] == 'dark') {
																														echo 'checked';
																													} ?> />
				<label for="dark-check-mobile" class="toggle-mobile "><span></span>
					<p>&nbsp;DARKMODE</p>
				</label>
				<hr>
				<div id="main-banner-mobile">
					<?php if (isset($_SESSION['bobby_id'])) { ?>
						<img src="<?php echo $_SESSION['bobby_img']; ?>" onerror="this.src='Assets/img/no_img.png';" width="40px" height="40px" style="border-radius: 50%;margin-bottom:10px">
						<?php echo $_SESSION['bobby_name']; ?>
						<br>
						<div class="for-btn text-center">
							<button type="button" class="btn btn-sm btn-danger  text-center" onclick="bobby_logout('bobby_logout');">ออกจากระบบ</button>
						</div>
					<?php } else { ?>
						<div class="for-btn text-center">
							<button type="button" class="btn btn-sm  btn-primary " onclick="device_login();">เข้าสู่ระบบ</button>
						</div>
					<?php } ?>
				</div>
				<center>
				</center>
			</div>
		</div>
	</div>
</div>
<!-- SCRIPT -->
<script src="Assets/js/bootstrap.min.js"></script>
<script src="Assets/js/jquery-3.6.0.min.js"></script>
<script>
	//Script Toggle Theme
	setting_mode();

	function setting_mode() {
		if ($('#dark-check').is(":checked")) {
			$('#body_preference').addClass('pc-dark');
			$('#body_preference').removeClass('pc-light');
			document.cookie = 'setting_mode=dark; expires=Sun, 1 Jan 2041 00:00:00 UTC; path=/'
		} else {
			$('#body_preference').addClass('pc-light');
			$('#body_preference').removeClass('pc-dark');
			document.cookie = 'setting_mode=light; expires=Sun, 1 Jan 2041 00:00:00 UTC; path=/'
		}
	}

	function setting_mode_mobile() {
		if ($('#dark-check-mobile').is(":checked")) {
			$('#body_preference').addClass('pc-dark');
			$('#body_preference').removeClass('pc-light');
			document.cookie = 'setting_mode=dark; expires=Sun, 1 Jan 2041 00:00:00 UTC; path=/'
		} else {
			$('#body_preference').addClass('pc-light');
			$('#body_preference').removeClass('pc-dark');
			document.cookie = 'setting_mode=light; expires=Sun, 1 Jan 2041 00:00:00 UTC; path=/'
		}
	}

	function toggle_menu() {
		$('#modal_setting').modal('show');
		/*if ($(".banner-setting").css('display') == 'none') {
			document.querySelectorAll(".banner-setting").forEach(a => a.style.display = "block");
		} else {
			document.querySelectorAll(".banner-setting").forEach(a => a.style.display = "none");
		}*/
	}
	//Script for Modal 
	$('#modal_login').on('shown.bs.modal', function() {
		$('#bobby_id').focus();
	})
	// Script for Log-in
	//FUNCTION CHECK
	function bobby_login(case_id) {
		var inputs = document.getElementById('form-login').getElementsByTagName('input');
		for (var i = 0; i < inputs.length; i++) {
			if (inputs[i].hasAttribute("required")) {
				if (inputs[i].value == "") {
					document.getElementById('form-login').reportValidity();
					return false;
				}
			}
		}
		var bobby_id = document.getElementById("bobby_id").value;
		var bobby_password = document.getElementById("bobby_password").value;
		jQuery.ajax({
			type: "POST",
			url: "sql",
			data: {
				case: case_id,
				emp_id: bobby_id,
				password: bobby_password
			},
			cache: false,
			dataType: 'JSON',
			success: function(response) {
				var chk_id = response[0].chk_id;
				var chk_pass = response[0].chk_pass;
				var chk_name = response[0].chk_name;
				if (chk_id == 0 && chk_pass == 0) {
					//Wrong User
					//Check empty input
					document.getElementById('form-login').reportValidity();
					//Set alert style
					$('#bordered').addClass('bordered_wrong');
					document.getElementById("btn_warn").innerHTML = "ไม่พบ<b>รหัสพนักงาน</b> ในระบบ";
					document.getElementById("btn_warn").style.display = "block";
					document.getElementById("btn_confirm").style.display = "none";
					//Set timeout remove alert
					setTimeout(function() {
						$('#bordered').removeClass('bordered_wrong');
						document.getElementById("btn_confirm").style.display = "block";
						document.getElementById("btn_warn").style.display = "none";
						document.getElementById('bobby_password').value = '';
						$('#bobby_id').focus();
					}, 2000);
				} else if (chk_id == 1 && chk_pass == 0) {
					//Wrong Password
					//Set alert style
					$('#bordered').addClass('bordered_wrong');
					document.getElementById("btn_warn").innerHTML = "<b>รหัสผ่าน</b> ไม่ถูกต้อง";
					document.getElementById("btn_warn").style.display = "block";
					document.getElementById("btn_confirm").style.display = "none";
					//Set timeout remove alert
					setTimeout(function() {
						$('#bordered').removeClass('bordered_wrong');
						document.getElementById("btn_confirm").style.display = "block";
						document.getElementById("btn_warn").style.display = "none";
						document.getElementById('bobby_password').value = '';
						$('#bobby_password').focus();
					}, 2000);
				} else {
					//Login Passed
					$('#bordered').addClass('bordered_success');
					document.getElementById("btn_success").innerHTML = chk_name;
					document.getElementById("btn_success").style.display = "block";
					document.getElementById("btn_confirm").style.display = "none";
					$("#main-banner").load(" #main-banner");
					$("#main-banner-mobile").load(" #main-banner-mobile");
					//Set timeout hide login form
					setTimeout(function() {
						$('#modal_login').modal('hide');
						//Remove form style
						$('#bordered').removeClass('bordered_success');
						document.getElementById("btn_success").style.display = "none";
						document.getElementById("btn_confirm").style.display = "block";
						document.getElementById('bobby_id').value = '';
						document.getElementById('bobby_password').value = '';
						//Direct to page program
						if (sessionStorage.getItem("bobbyGetMenu") !== null) {
							let bobbyGetMenu = sessionStorage.getItem("bobbyGetMenu");
							sessionStorage.removeItem("bobbyGetMenu");
							window.location.href = bobbyGetMenu;
						}
					}, 1200);
				}
			}
		});
	}
	//Script for form login
	$('body').on('keydown', 'input', function(e) {
		if (e.which === 13) {
			var self = $(this),
				form = self.parents('form:eq(0)'),
				focusable, next;
			focusable = form.find('input ,button').filter(':visible');
			next = focusable.eq(focusable.index(this) + 1);
			if (next.length) {
				next.focus();
			}
		}
	});

	$('a.card_menu').click(function(e) {
		sessionStorage.setItem("bobbyGetMenu", $(this).attr('href'));
	});

	//Script for Log-out 
	function bobby_logout(case_id) {
		jQuery.ajax({
			type: "POST",
			url: "sql",
			data: {
				case: case_id
			},
			cache: false,
			success: function(response) {
				$("#main-banner").load(" #main-banner");
				$("#main-banner-mobile").load(" #main-banner-mobile");
			}
		});
	}

	//SCRIPT FROM OTHER PAGE 
	if (window.location.hash === "#login") {
		history.replaceState(null, null, ' ');
		$(function() {
			$('#modal_login').modal('show');
		});
	} else if (window.location.hash === "#logout") {
		history.replaceState(null, null, ' ');
		bobby_logout('bobby_logout');
	} else if (window.location.hash === "#error") {
		history.replaceState(null, null, ' ');
		$(function() {
			$('#modal_error').modal('show');
		});
	}

	function device_login() {
		$('#modal_setting').modal('hide');
		$('#modal_login').modal('show');
	}
</script>