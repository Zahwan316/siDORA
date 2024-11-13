<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<META NAME="robots" CONTENT="noindex,nofollow">
	<title>Login</title>
	<link type="image/x-icon" href="http://192.168.132.2/simrs/themes/img/favicon.ico" rel="shortcut icon">
	<link href="http://192.168.132.2/simrs/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="http://192.168.132.2/simrs/assets/css/bootstrap-responsive.min.css" rel="stylesheet">
	<script src="http://192.168.132.2/simrs/assets/js/moment.js"></script>
    <script src="http://192.168.132.2/simrs/assets/js/moment.min.js"></script>
    <script src="http://192.168.132.2/simrs/assets/js/moment-timezone-with-data.min.js"></script>
    <script src="http://192.168.132.2/simrs/assets/js/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="http://192.168.132.2/simrs/assets/js/md5.min.js"></script>
    <script type="text/javascript" src="http://192.168.132.2/simrs/assets/js/qrcode.min.js"></script>

		<style>

		/* Smartphones (portrait and landscape) ----------- */
		@media only screen
		and (min-device-width : 320px)
		and (max-device-width : 480px) {
			#login-container {
				margin:0 auto;
			}
		}
		body{
			/*background-color:#AECDEE;	*/
			background: url(http://192.168.132.2/simrs/assets/img/bg-bg-bg.jpeg) no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
		#login-container {
			margin:3em auto;
			width:360px;
			font-family:sans-serif;
			text-align:center;
		}
		.form-login {
			text-align:left;
			margin-left: 8px;
			padding: 26px 24px 120px;
			font-weight: normal;
			-moz-border-radius: 3px;
			-khtml-border-radius: 3px;
			-webkit-border-radius: 3px;
			border-radius: 3px;
			background: #FFF;
			border: 1px solid #F3F3F3;
			-moz-box-shadow: rgba(200, 200, 200, 0.7) 0px 4px 10px -1px;
			-webkit-box-shadow: rgba(200, 200, 200, 0.7) 0px 4px 10px -1px;
			-khtml-box-shadow: rgba(200, 200, 200, 0.7) 0px 4px 10px -1px;
			box-shadow: rgba(200, 200, 200, 0.7) 0px 4px 10px -1px;
			position: relative;
			flex-direction: column;
			align-items: center;
		}
		.form-login label {
			display:block;
			font-size:16px;
			padding:5px 0;
		}
		.input {margin:5px 0;}
		.submit {margin: 5px 0; text-align:right;}
		.input input[type="text"], .input input[type="password"] {
			width: 93%;
			font-size:20px;
			padding:6px;
			border-width:2px;
		}

		form {

		}

		#login-container h1 {
			font-size:24px;
			border:0;
		}

		.message {
			margin: 0 0 16px 8px;
			border-width: 1px;
			border-style: solid;
			padding: 12px;
			-moz-border-radius: 3px;
			-khtml-border-radius: 3px;
			-webkit-border-radius: 3px;
			border-radius: 3px;
			color:red;
		}

		.form-login .account {
			padding-top: 30px;
			padding-bottom: 10px;
		}

		.entrance {
			position: absolute;
			top: 10px;
			right: 5px;
		}

		.entrance .bg_img {
			width: 60px;
			height: 60px;
			background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAAEsCAYAAAB5fY51AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyFpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpFRTU3RDI1MzNENTQxMUU4QTNCN0M5NTNCQ0UxMDEzMyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpFRTU3RDI1NDNENTQxMUU4QTNCN0M5NTNCQ0UxMDEzMyI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkVFNTdEMjUxM0Q1NDExRThBM0I3Qzk1M0JDRTEwMTMzIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkVFNTdEMjUyM0Q1NDExRThBM0I3Qzk1M0JDRTEwMTMzIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+qlaxTgAAN4hJREFUeNrsnQmcHNV9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);
			background-size: 120px 120px;
			background-repeat: no-repeat;
			background-position: 0 0;
			cursor: pointer;
		}

		.entrance .bg_img:hover {
            background-position: -60px 0;
        }
        .entrance .bg_img.pc {
            background-position: 0 -60px;
        }
        .entrance .bg_img.pc:hover {
            background-position: -60px -60px;
        }

		.entrance .tips {
			position: absolute;
			top: 5px;
			right: 57px;
			display: flex;
			justify-content: center;
			align-items: center;
			width: 220px;
			height: 28px;
			background-color: #dff0d8;
			border-radius: 4px;
			text-align: center;
		}

		.entrance .tips::before {
            content: '';
            position: absolute;
            top: 8px;
            right: -11px;
            width: 0;
            height: 0;
            margin-left: -6px;
            border: 6px solid #dff0d8;
            border-color: transparent transparent transparent #dff0d8;
        }

		.icon {
            width: 16px;
            height: 16px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .icon.scan {
            background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAgCAYAAACYTcH3AAAAAXNSR0IArs4c6QAAAdFJREFUWEdjZIACuSUW1kyMTKUMDAyODAwMfDBxLHTDg+hjjXjkGUSnOvBwC/7czPCf0QGPugcMDAy7HkQfS4epYQQxoA45gs8CJLkHD6KPKeJTK7/MKovxP8NUIs2Dew7sGIWlVhMYGBjyoZqvMjD+f43LIKZ/DL33Yo5vIWSR/BKrYkam/z441SGF2h/W/zJPwo4/hThmmeV+WJD++8+s/Sjm8DVCllEqr7jUMvQ/A+MqsDn//jk+iD1xAMMxD6KPgcVoDRQWWzgwMDHtH3UMekiPhgyutDdUQsa6n+H//4L//xnuPIw5pkrrnAQyX3aBlTIzK8MdEJuJmUn9XsSRW/BsrLDMMpKB8f/xB5EnQMU0XQA4qhgYGEBlDIimS5lCrM8Gl2MUl1i5/Wf6X0ms62mi7j/T6wfRR8MYFZZaXWFgYNCmiSWkGZoFcsx8BgaGBNL0UV316/+MDBGDK81Q3Y8UGAgPGbmlNsb/WP++ADVyKDCPJK1yS2y1WNn+/Lobdhxc+MFaevUMDAwNDAwMVx9EH9MhyUQyFSuvslT5+5vxNrhtBW3QjTauQKExVGptRIN8tA082jtAKgaISsAD34kbTN3bQdXxB0XlYBgSAQBVv1HZQYwH1wAAAABJRU5ErkJggg==');
            background-size: 14px;
        }

		.logo {
			text-align: center;
			position: relative;
			top: 23px;
		}

		.hide {
            display: none !important;
        }

		.scan_code {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
			padding-top: 40px;
			margin-bottom: 20px;
        }
        .scan_code .scan_title {
            margin-bottom: 20px;
            font-size: 23px;
            color: #444;
        }
        .scan_code .qrcode {
            width: 150px;
            height: 150px;
        }
        .scan_code .scan_tip {
            margin-top: 15px;
            text-align: center;
        }

		.scan_tip .link {
            font-size: 0;
        }
        .scan_tip .link a,
        .scan_tip .link span {
            font-size: 13px;
        }
		.scan_tip .desc {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
        }
        .scan_tip .desc .icon {
            width: 25px;
            height: 25px;
            background-size: 23px;
        }
        .scan_tip .desc .text {
            margin-left: 10px;
            font-size: 18px;
            font-weight: 600;
            color: #555;
        }

		.peringatan_keras {
			position: absolute;
			bottom: 5px;
			right: 16px;
			display: block;
			width: 320px;
			background-color: #bae1fe;
			border-radius: 4px;
		}

		.peringatan_keras .judul_keras {
			font-size: 18px;
			text-align: center;
			font-family: monospace;
			display: block;
			margin-top: 10px;
			margin-bottom: 10px;
		}

		.peringatan_keras .keterangan_keras p {
			margin-block: 10px;
			padding-left: 10px;
		}


	</style>
</head>
<body>
	<div id="login-container" style="margin-top:50px;">
						<div class="form-login">
			<div class="logo">
				<img alt="RS Persahabatan" style="border:0;margin:0 0 20px -10px;" src="http://192.168.132.2/simrs/assets/img/lpgo_prima.png" title="Rsup Persahabatan" width="260" />
				<img alt="RS Persahabatan" style="border:0;margin:0 0 20px -7px;" src="http://192.168.132.2/simrs/assets/img/rsuppersahabatan.png" title="Rsup Persahabatan" width="240" />								
				<!--<script type="text/javascript">
moment.locale('id');
var PormatJam = 'HH:mm:ss',
	PormatTgl = 'Do MMM YYYY';

setInterval(function() {},1000);
function startTime() {
    
    document.getElementById('tgl').innerHTML = moment().utcOffset('+0700').format(PormatTgl);
    document.getElementById('jam').innerHTML = moment().utcOffset('+0700').format(PormatJam);
    setTimeout(startTime, 1000);

}

function checkTime(i) {
    if (i < 10) {i = "0" + i};
    return i;
}
</script>
<body onload="startTime()">
<div id="tgl" style="padding:2px; color:#2940BC; font-weight:bold; font-size:14px; "></div><p>
<div id="jam" style="padding:2px; color:#2940BC; font-weight:bold; font-size:30px; "></div>
</body>-->
<script>
    var d = new Date(2024,11,09,16,09,16);
    setInterval(function() {
	var h = d.getHours(); // 0 - 23
    var m = d.getMinutes(); // 0 - 59
    var s = d.getSeconds(); // 0 - 59
    
    
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
        d.setSeconds(d.getSeconds() + 1);
		document.getElementById("timer").innerHTML=(h +':' + m + ':' + s);
    }, 1000);
</script> 
<div id="timer" style="padding:2px; color:#2940BC; font-weight:bold; font-size:28px; "></div>			
			</div>

			<div class="account">

				<form action="http://192.168.132.2/simrs/user/login" method="post" accept-charset="utf-8">					<div class="input">
						<label>NIP</label>
						<input type="text" name="user" value=""  />					</div>
					<div class="input">
						<label>Password</label>
						<input type="password" name="password" value=""  />					</div>

					<div>

					<p>Jawab penjumlahan berikut: <img  src="http://192.168.132.2/simrs/assets/captcha/1731143356.7503.png" style="width: 100; height: 20; border: 0;" alt=" " /></p>
					<div class="input">
						<input type="text" name="captcha" value="" id="captcha" placeholder="jawaban" required="true"  /><br>
						 <br />
					</div>

					</div>
					<!--
					<div class="checkbox hide">
						<label>
							<input type="checkbox" id="remember" name="remember_login" checked> Remember me
						</label>
					</div>
					-->
					
				<div class="submit">
					<a href="fingerprint://loginrme?UUID=fe7c2e9f-765c-49d7-aa1c-ad42707d8d25=" class="btn btn-danger btn-large"> Login Finger Dokter/Perawat</a>					<input type="submit" name="login" value="Sign In" class="btn btn-primary btn-large" />				
				</div>
				</form>			</div>

			<div class="scan_code hide">

				<div class="scan_title">Login with Qr Code</div>
                <div class="qrcode" id="qrcode"></div>

                <div class="scan_tip">
                    <div class="link">
                        <span>Scan with </span>
                        <a href="https://login.rsuppersahabatan.co.id" target="_blank" class="bt_link">Prima OTP</a>
                    </div>
                    <div class="desc">
                        <div class="icon scan"></div>
                        <div class="text">Scan</div>
                    </div>
                </div>
            </div>

			<div class="entrance">
                <div class="bg_img"></div>
                <div class="tips">
                    <div class="icon scan"></div>
                    <div class="text">&nbsp;Login dengan Qr butuh Internet</div>
                </div>
            </div>

			<div class="peringatan_keras">
				<div class="judul_keras">INFO PENTING !</div>
				<div class="keterangan_keras">
					<p>Lindungi Akun Anda dengan Tidak memberikan <strong>NIP</strong> dan <strong>Kata sandi</strong> pada siapapun.</p>
					<p>Segala resiko akibat penyalahgunaan ID pengguna menjadi tanggungjawab pengguna sepenuhnya.</p>
				</div>
			</div>

		</div>
		<div style="color:#000; font-size:10px; text-align:right;">&copy; RSUP Persahabatan</div><br />

		<div class="bg-info">
			<img alt="RS Persahabatan" style="border:0;margin:0 0 20px -10px;" src="http://192.168.132.2/simrs/assets/img/badge_661.png" title="Rsup Persahabatan" width="260" />
		</div>

	</div>

	<script type="text/javascript" src="http://192.168.132.2/simrs/assets/js/axios.min.js"></script><script type="text/javascript" src="http://192.168.132.2/simrs/assets/js/notie.min.js"></script>	<link rel="stylesheet" type="text/css" href="http://192.168.132.2/simrs/assets/css/notie.css">
	<script>
		window.onload = function () {
			run();
		}

		/**
		 * hapus permintaan
		 */
		function clear_control_time () {
			if (timer) clearInterval(timer);
		}

		function run() {
			var entrance = document.querySelector('.entrance').querySelector('.bg_img');			
			entrance.onclick = function () {
				var tips = this.nextSibling.nextSibling;
				var icon = tips.querySelector('.icon');
				var text = tips.querySelector('.text');
				var scanCode = document.querySelector('.scan_code');
				var account = document.querySelector('.account');
				
				// Kalo NIP 
				if (this.classList.contains('pc')) {
					this.classList.remove('pc');
					icon.classList.add('scan');
					icon.classList.remove('safe');
					text.innerText = 'QR code login butuh Internet';
					account.classList.remove('hide');
					scanCode.classList.add('hide');
					document.getElementById("qrcode").innerHTML = "";
					clear_control_time();
				
				// Kalo
				} else {
					this.classList.add('pc');
					icon.classList.add('safe');
					icon.classList.remove('scan');
					text.innerText = 'Login dengan NIP tanpa Internet';
					account.classList.add('hide');
					scanCode.classList.remove('hide');
					generate_qrcode();
					set_control_time();
				}
			};
		}

		/**
		 * set permintaan perdetik
		 */
		function set_control_time() {
			timer = setInterval(function () {

				axios.post('http://192.168.132.2/simrs/hidden/tools/is_scan_ok/', {}, {crossdomain: false})
				.then((res) => {
					console.log(res.data);
					if (res.data.status) {
						// clear_control_time();
						console.log('berhasil login');
						// login_admin(res);
					}else{
						console.log('harap refresh halaman windows');
						notie.force(3, 'Gagal Ter-scan, Layar akan Reload Ulang!', 'OK', function () {
							window.location.reload();
						});
						clear_control_time();
					}
				})
			}, 2000);
		}

		// Magic Login!
		function login_admin(res) {

			var data = new FormData();
			data.append('secret_key', res.data.token);
			data.append('kode_token', res.data.token);

			axios.post('http://192.168.132.2/simrs/hidden/tools/set_login/', data, {crossdomain: false})
			.then((resp) => {
				console.log(resp);
			})

			// request.post('/public?name=app&fun=set_login', {
			// 	secret_key: key
			// }, function (res) {
			// 	if (res.status) {
			// 		popup.msg('Secure login in progress,waiting...', {
			// 			icon: 16,
			// 			time: 800,
			// 			shade: [0.4, '#fff']
			// 		}, function () {
			// 			window.location.href = '/';
			// 		});
			// 	} else {
			// 		popup.msg(res.msg, { icon: 2 });
			// 	}
			// });
		}

		function generate_qrcode() {			
			var qrcode = new QRCode("qrcode");

			if (qrcode) {
				qrcode.clear();
			}

			// TODO: API SERVICE QRCODE DIGANTI KE API.PERSAHABATAN.CO.ID
			axios.post('http://192.168.132.2/simrs/hidden/tools/login_qrcode/', {},{crossdomain: false}
			).then((res) => {
				var text = res.data.status ? res.data.token : 'https://login.rsuppersahabatan.co.id/scan';				

				if (qrcode) {
					qrcode.makeCode(text);
				} else {
					qrcode = new QRCode('qrcode', {
						width: 150,
						height: 150,
						colorLight: "#fefefe",
						colorDark: "#333",
						text: text
					});
				}
			});
		}

	</script>
</body>
</html>