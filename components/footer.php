<footer class="footer">

	<div id="gotop2">

		<!--<div class="top">
			<div class="fb-messenger-icon">
				<a href="https://www.messenger.com/t/296361093707759/?messaging_source=source%3Apages%3Amessage_shortlink%3Futm_source%3Dktweb&amp;utm_medium=fbmesseger" target="new">
					<img src="<?php echo $cfg['Url'] ?>images/fb-messenger.png" class="img-fluid">
				</a>
			</div>
		</div>-->
		<div class="top">
			<a href="https://www.kingtony.com/link/socialmedia/FBmesseger_en_link.html?utm_source=KT-SideWeb-en&utm_medium=FBmesseger_en_link" target="_blank">
				<img src="../../images/icon/fb.svg" width="49" class="img-fluid" alt="fb-messenger">			
			</a>
		</div>
		<div class="top">
			<svg xmlns="http://www.w3.org/2000/svg" width="49" height="49" viewBox="0 0 62 62">
				<g id="Group_198" data-name="Group 198" transform="translate(-1730.44 -4253.44)">
					<circle id="Ellipse_4" data-name="Ellipse 4" cx="31" cy="31" r="31" transform="translate(1730.44 4253.44)" fill="#005caf" />
					<path id="arrow-right_1_" data-name="arrow-right (1)" d="M0,8.71a.968.968,0,0,1,.968-.968H23.79L17.7,1.654A.969.969,0,1,1,19.07.284l7.741,7.741a.968.968,0,0,1,0,1.37L19.07,17.136a.969.969,0,1,1-1.37-1.37l6.09-6.088H.968A.968.968,0,0,1,0,8.71Z" transform="translate(1752.943 4297.939) rotate(-90)" fill="#fff" fill-rule="evenodd" />
				</g>
			</svg>
		</div>

	</div>


	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-sm-12">
				<div class="footer_box">
					<img src="<?php echo $cfg['Url'] ?>images/footer_logo.svg" class="footer_logo img-fluid" alt="圖">
					<ul>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15.999" viewBox="0 0 16 15.999">
								<path id="telephone-fill" d="M1.885.511a1.745,1.745,0,0,1,2.61.163L6.29,2.98a1.744,1.744,0,0,1,.315,1.494l-.547,2.19a.678.678,0,0,0,.178.643L8.693,9.764a.678.678,0,0,0,.644.178L11.526,9.4a1.745,1.745,0,0,1,1.494.315L15.326,11.5a1.745,1.745,0,0,1,.163,2.611l-1.034,1.034a2.777,2.777,0,0,1-2.877.7,18.634,18.634,0,0,1-7.01-4.42A18.634,18.634,0,0,1,.148,4.422a2.78,2.78,0,0,1,.7-2.877Z" transform="translate(0 -0.001)" fill="#005caf" fill-rule="evenodd" />
							</svg>
							<?php echo $System['SiteTel' . $cfg['Lang']]; ?>
						</li>
						<li>
							<svg id="printer-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 13">
								<path id="Path_27" data-name="Path 27" d="M5,1A2,2,0,0,0,3,3V4H13V3a2,2,0,0,0-2-2Zm6,8H5a1,1,0,0,0-1,1v3a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V10A1,1,0,0,0,11,9Z" transform="translate(0 -1)" fill="#005caf" />
								<path id="Path_28" data-name="Path 28" d="M0,7A2,2,0,0,1,2,5H14a2,2,0,0,1,2,2v3a2,2,0,0,1-2,2H13V10a2,2,0,0,0-2-2H5a2,2,0,0,0-2,2v2H2a2,2,0,0,1-2-2ZM2.5,8A.5.5,0,1,0,2,7.5.5.5,0,0,0,2.5,8Z" transform="translate(0 -1)" fill="#005caf" />
							</svg>
							<?php echo $System['SiteFax' . $cfg['Lang']]; ?>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12">
								<path id="envelope-fill" d="M.05,3.555A2,2,0,0,1,2,2H14a2,2,0,0,1,1.95,1.555L8,8.414ZM0,4.7v7.1L5.8,8.243ZM6.761,8.83.191,12.857A2,2,0,0,0,2,14H14a2,2,0,0,0,1.808-1.144L9.238,8.829,8,9.586,6.761,8.829ZM10.2,8.244,16,11.8V4.7L10.2,8.243Z" transform="translate(0 -2)" fill="#005caf" />
							</svg>
							<a href="mailto:<?php echo $System['SiteMail' . $cfg['Lang']]; ?>">
								<?php echo $System['SiteMail' . $cfg['Lang']]; ?>
							</a>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="12" height="16" viewBox="0 0 12 16">
								<path id="geo-alt-fill" d="M8,16s6-5.686,6-10A6,6,0,1,0,2,6C2,10.314,8,16,8,16ZM8,9a3,3,0,1,1,3-3A3,3,0,0,1,8,9Z" transform="translate(-2)" fill="#005caf" />
							</svg>
							<?php echo $System['SiteAdd' . $cfg['Lang']]; ?>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-sm-4">
				<div class="footer_box2">
					<h4>Product</h4>
					<dl>
						<?php
						$Query = "select * from " . $cfg['TablePrefix'] . "products_catalog" . $cfg['Lang'] . " where D_YN = 1 and D_Level = 1 ";
						$Nums = $db->getTotalRows($Query);
						if ($Nums != 0) {
							$Data = $db->getResult($Query . " Order By D_Order ASC,D_Key DESC ");
							for ($j = 0; $j < 9; $j++) {
						?>
								<dd><a href="<?php echo $cfg['Url'] ?>catalogs/<?php echo $Data[$j]['D_Seourl']; ?>/?utm_source=KT-Web-Footer-en&utm_medium=Pro-Cat-<?php echo $Data[$j]['D_Seourl']; ?>"><?php echo $Data[$j]['D_Name']; ?></a></dd>
						<?php
							}
						}
						?>
						<dd><a href="products.php"></a></dd>
					</dl>
				</div>
			</div>
			<div class="col-lg-2 col-sm-5">
				<div class="footer_box2">
					<h4></h4>
					<dl>
						<?php
						$Query = "select * from " . $cfg['TablePrefix'] . "products_catalog" . $cfg['Lang'] . " where D_YN = 1 and D_Level = 1 ";
						$Nums = $db->getTotalRows($Query);
						if ($Nums != 0) {
							$Data = $db->getResult($Query . " Order By D_Order ASC,D_Key DESC ");
							for ($j = 9; $j < Count($Data); $j++) {
						?>
								<dd><a href="<?php echo $cfg['Url'] ?>catalogs/<?php echo $Data[$j]['D_Seourl']; ?>/?utm_source=KT-Web-Footer-en&utm_medium=Pro-Cat-<?php echo $Data[$j]['D_Seourl']; ?>"><?php echo $Data[$j]['D_Name']; ?></a></dd>
						<?php
							}
						}
						?>

					</dl>
				</div>
			</div>
			<div class="col-lg-2 col-sm-3">
				<div class="footer_box2-2">
					<h4>About Us</h4>
					<dl>
						<dd><a href="<?php echo $cfg['Url'] ?>news.php?utm_source=KT-Web-Footer-en&utm_medium=news">News</a></dd>
						<dd><a href="<?php echo $cfg['Url'] ?>about.php?utm_source=KT-Web-Footer-en&utm_medium=about">Profile</a></dd>
						<dd><a href="<?php echo $cfg['Url'] ?>member.php?utm_source=KT-Web-Footer-en&utm_medium=member">Members</a></dd>
						<dd><a href="<?php echo $cfg['Url'] ?>support.php?utm_source=KT-Web-Footer-en&utm_medium=support">Support</a></dd>
						<dd><a href="<?php echo $cfg['Url'] ?>contact.php?utm_source=KT-Web-Footer-en&utm_medium=contact">Contact</a></dd>
						<!--<dd><a href="<?php echo $cfg['Url'] ?>hr.php">Career</a></dd>-->
						<dd><a href="<?php echo $cfg['Url'] ?>privacy.php?utm_source=KT-Web-Footer-en&utm_medium=privacy">Privacy Policy</a></dd>
					</dl>
				</div>

			</div>
			<div class="col-lg-3 col-sm-12">
				<!-- <div class="footer_box3_top">
					<span>App</span>
					<a href="https://www.kingtony.com/link/app/APP_iOS_link.html?utm_source=KT-Web-Footer-en&utm_medium=APP_iOS"  target="_blank"><img src="<?php echo $cfg['Url'] ?>images/ios.svg" class="img-fluid" alt="KT-App-iOS"></a>
					<a href="https://www.kingtony.com/link/app/APP_Android_link.html?utm_source=KT-Footer-en&utm_medium=APP_Android"  target="_blank"><img src="<?php echo $cfg['Url'] ?>images/andr.svg" class="img-fluid" alt="KT-App-Android"></a>
				</div> -->
				<div class="footer_box3_social">
					<ul>
						<li>Follow Us</li>
						<li><a href="https://www.kingtony.com/link/socialmedia/FB_en_link.html?utm_source=KT-Web-Footer-en&utm_medium=FB_link" title="KING TONY FB" alt="KING TONY FB" target="_blank">
								<svg xmlns="http://www.w3.org/2000/svg" width="24.529" height="24.529" viewBox="0 0 24.529 24.529">
									<path id="facebook" d="M24.527,12.339a12.265,12.265,0,1,0-14.182,12.19V15.906H7.233V12.34h3.115V9.619c0-3.092,1.832-4.8,4.632-4.8a18.758,18.758,0,0,1,2.745.241V8.1H16.179a1.778,1.778,0,0,0-2,1.928v2.315h3.4L17.039,15.9H14.18v8.622A12.32,12.32,0,0,0,24.527,12.339Z" transform="translate(0.002 0.001)" fill="#005caf" />
								</svg>
							</a></li>
						<li><a href="https://www.kingtony.com/link/socialmedia/IG_link.html?utm_source=KT-Web-Footer-en&utm_medium=IG_link" title="KING TONY Instagram" alt="KING TONY Instagram" target="_blank">
								<svg xmlns="http://www.w3.org/2000/svg" width="24.526" height="24.526" viewBox="0 0 24.526 24.526">
									<path id="instagram" d="M12.263,0C8.935,0,8.517.015,7.209.074a9.036,9.036,0,0,0-2.978.57A6,6,0,0,0,2.059,2.059,6.02,6.02,0,0,0,.644,4.231,8.983,8.983,0,0,0,.074,7.2C.015,8.515,0,8.932,0,12.265s.015,3.746.074,5.054A9.034,9.034,0,0,0,.644,20.3a6.278,6.278,0,0,0,3.585,3.587,9,9,0,0,0,2.977.57c1.309.058,1.726.074,5.057.074s3.746-.015,5.055-.074a9.053,9.053,0,0,0,2.978-.57A6.278,6.278,0,0,0,23.882,20.3a9.074,9.074,0,0,0,.57-2.977c.058-1.308.074-1.724.074-5.055s-.015-3.748-.074-5.057a9.064,9.064,0,0,0-.57-2.975,6.018,6.018,0,0,0-1.415-2.172A6,6,0,0,0,20.3.644a9.022,9.022,0,0,0-2.978-.57C16.008.015,15.593,0,12.26,0h0Zm-1.1,2.21h1.1c3.274,0,3.662.011,4.954.071A6.8,6.8,0,0,1,19.5,2.7a3.8,3.8,0,0,1,1.41.918,3.789,3.789,0,0,1,.917,1.41,6.736,6.736,0,0,1,.422,2.276c.06,1.292.072,1.68.072,4.953s-.012,3.662-.072,4.954a6.784,6.784,0,0,1-.422,2.276A4.064,4.064,0,0,1,19.5,21.816a6.746,6.746,0,0,1-2.276.423c-1.292.058-1.68.072-4.954.072S8.6,22.3,7.309,22.239a6.773,6.773,0,0,1-2.276-.423,3.8,3.8,0,0,1-1.41-.917,3.8,3.8,0,0,1-.92-1.41,6.775,6.775,0,0,1-.422-2.276c-.058-1.292-.071-1.68-.071-4.956S2.223,8.6,2.281,7.3A6.785,6.785,0,0,1,2.7,5.026a3.8,3.8,0,0,1,.918-1.41A3.789,3.789,0,0,1,5.032,2.7a6.773,6.773,0,0,1,2.276-.423c1.131-.052,1.57-.067,3.855-.069v0ZM18.81,4.246a1.472,1.472,0,1,0,1.472,1.472A1.472,1.472,0,0,0,18.81,4.246Zm-6.545,1.72a6.3,6.3,0,1,0,6.3,6.3,6.3,6.3,0,0,0-6.3-6.3Zm0,2.209a4.088,4.088,0,1,1-4.088,4.088A4.088,4.088,0,0,1,12.265,8.175Z" fill="#005caf" />
								</svg>
							</a></li>
						<li><a href="https://www.kingtony.com/link/socialmedia/Linkedin_link.html?utm_source=KT-Web-Footer-en&utm_medium=Linkedin_link" title="KING TONY Linkedin" alt="KING TONY Linkedin" target="_blank">
								<svg xmlns="http://www.w3.org/2000/svg" width="24.526" height="24.526" viewBox="0 0 24.526 24.526">
									<path id="linkedin" d="M0,1.757A1.779,1.779,0,0,1,1.8,0H22.725a1.779,1.779,0,0,1,1.8,1.757V22.77a1.779,1.779,0,0,1-1.8,1.757H1.8A1.779,1.779,0,0,1,0,22.77ZM7.577,20.531V9.456H3.9V20.531ZM5.738,7.943a1.919,1.919,0,1,0,.025-3.826,1.918,1.918,0,1,0-.049,3.826Zm7.523,12.588V14.346a2.5,2.5,0,0,1,.123-.9A2.013,2.013,0,0,1,15.272,12.1c1.332,0,1.864,1.015,1.864,2.5v5.925h3.68V14.179c0-3.4-1.815-4.985-4.237-4.985a3.657,3.657,0,0,0-3.319,1.829v.038h-.025l.025-.038V9.456H9.582c.046,1.039,0,11.075,0,11.075Z" fill="#005caf" />
								</svg>
							</a></li>
						<!--<li><a href="###" target="_blank">
								<svg xmlns="http://www.w3.org/2000/svg" width="24.526" height="23.369" viewBox="0 0 24.526 23.369">
									<path id="line" d="M12.263,0c6.762,0,12.263,4.464,12.263,9.952A8.847,8.847,0,0,1,21.9,16.074c-2.572,2.962-8.325,6.568-9.634,7.12-1.272.537-1.125-.3-1.067-.633l0-.028.175-1.05a2.507,2.507,0,0,0-.04-1.108c-.138-.342-.681-.52-1.079-.605C4.363,18.992,0,14.871,0,9.952,0,4.464,5.5,0,12.263,0ZM7.7,11.782H5.361V7.539A.239.239,0,0,0,5.123,7.3H4.261a.239.239,0,0,0-.239.239v5.344a.234.234,0,0,0,.067.164v0l0,0,0,0a.236.236,0,0,0,.166.066H7.7a.238.238,0,0,0,.238-.239v-.858a.239.239,0,0,0-.238-.241ZM8.911,7.3a.239.239,0,0,0-.239.239v5.344a.238.238,0,0,0,.239.238h.861a.238.238,0,0,0,.238-.238V7.539A.239.239,0,0,0,9.772,7.3Zm5.922,0a.239.239,0,0,0-.239.239v3.173l-2.448-3.3-.02-.023v0l-.015-.015,0,0-.017-.014h0l-.008-.006,0,0-.008,0-.012-.008h0l0,0-.015-.006-.006,0-.015,0h0l0,0-.014,0H11.98l0,0h-.006l0,0h-.88a.239.239,0,0,0-.239.238v5.344a.238.238,0,0,0,.239.238h.858a.239.239,0,0,0,.241-.238V9.711l2.453,3.311a.236.236,0,0,0,.06.058l0,0,.015.009.006,0,.012.006.011,0,.008,0,.015,0h0a.238.238,0,0,0,.061.009h.858a.239.239,0,0,0,.241-.238V7.539a.239.239,0,0,0-.239-.239h-.86ZM20.68,8.4V7.54a.239.239,0,0,0-.238-.241H17.006a.238.238,0,0,0-.166.067h0l0,0,0,0a.238.238,0,0,0-.067.164v5.344a.234.234,0,0,0,.067.164l0,0,0,0a.238.238,0,0,0,.166.066h3.437a.238.238,0,0,0,.238-.239v-.858a.239.239,0,0,0-.238-.241H18.1v-.9h2.338a.238.238,0,0,0,.238-.239V9.781a.239.239,0,0,0-.238-.241H18.1v-.9h2.338a.238.238,0,0,0,.238-.239Z" fill="#005caf" />
								</svg>
							</a></li>-->
						<li><a href="https://www.kingtony.com/link/socialmedia/youtube_link.html?utm_source=KT-Web-Footer-en&utm_medium=Youtube_link" title="KING TONY Youtube" alt="KING TONY Youtube" target="_blank">
								<svg xmlns="http://www.w3.org/2000/svg" width="24.525" height="17.228" viewBox="0 0 24.525 17.228">
									<path id="youtube" d="M12.341,2h.136c1.26,0,7.645.051,9.366.514a3.081,3.081,0,0,1,2.169,2.177,13.88,13.88,0,0,1,.337,2.149L24.365,7l.034.4.012.159c.1,1.4.112,2.713.113,3v.115c0,.3-.015,1.7-.126,3.158l-.012.161-.014.159a15.184,15.184,0,0,1-.36,2.388,3.077,3.077,0,0,1-2.169,2.177c-1.778.478-8.537.512-9.473.514h-.218c-.474,0-2.433-.009-4.487-.08l-.261-.009-.133-.006-.262-.011-.262-.011a24.642,24.642,0,0,1-4.068-.4A3.077,3.077,0,0,1,.51,16.537a15.156,15.156,0,0,1-.36-2.388l-.012-.161-.012-.159Q.012,12.27,0,10.707v-.189c0-.33.015-1.469.1-2.725l.011-.158,0-.08L.126,7.4.159,7l.015-.159A13.851,13.851,0,0,1,.512,4.689,3.077,3.077,0,0,1,2.681,2.513a25.163,25.163,0,0,1,4.068-.4L7.01,2.1l.264-.009.132,0,.262-.011Q9.856,2.008,12.045,2h.3ZM9.811,6.92v7.385l6.372-3.691Z" transform="translate(0 -1.999)" fill="#005caf" />
								</svg>
							</a></li>
						<!-- <li><a href="###" target="_blank">
								<svg xmlns="http://www.w3.org                /2000/svg" width="23" fill="#005caf" class="bi bi-messenger" viewBox="0 0 16 16">
									<path d="M0 7.76C0 3.301 3.493 0 8 0s8 3.301 8 7.76-3.493 7.76-8 7.76c-.81 0-1.586-.107-2.316-.307a.639.639 0 0 0-.427.03l-1.588.702a.64.64 0 0 1-.898-.566l-.044-1.423a.639.639 0 0 0-.215-.456C.956 12.108 0 10.092 0 7.76zm5.546-1.459-2.35 3.728c-.225.358.214.761.551.506l2.525-1.916a.48.48 0 0 1 .578-.002l1.869 1.402a1.2 1.2 0 0 0 1.735-.32l2.35-3.728c.226-.358-.214-.761-.551-.506L9.728 7.381a.48.48 0 0 1-.578.002L7.281 5.98a1.2 1.2 0 0 0-1.735.32z" />
								</svg>
							</a></li> -->
					</ul>
					<!-- <p>
						台灣總代理 永安實業<br>
						Tel：02-2999-4633 <br/>Fax：02-2278-3773<br>
						<a href="http://www.yungantools.com/" target="_blank">網站連結</a>
					</p> -->
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid footer_box4">
		<div class="row">
			<div class="col-sm-12">
				<p>
					Ⓒ Copyright KING TONY All rights reserved.
					<!-- <a href="https://www.artware.com.tw/" title="艾傑網頁設計公司 網頁設計" target="_blank">Design by ARTWARE</a> -->
				</p>
			</div>
		</div>
	</div>


</footer>