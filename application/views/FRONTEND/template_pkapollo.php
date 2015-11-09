<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<script type="text/javascript" src="http://phongkhamapollo.com/public/assets/js/jquery-1.11.3.js"></script>
		<script type="text/javascript" src="http://phongkhamapollo.com/public/assets/js/bootstrap.js"></script>
		<script type="text/javascript" src="<?= STATIC_PATH_URL ?>assets/js/head.js"></script>
		<meta name="robots" content="index, follow, all" />
        <script type="text/javascript">
        $(document).ready(function() {
            $('head').header.init();
            $('head').header.ga();
            $('head').header.loadCss();
            $('head').header.loadJS();
            $('head').header.setStyle();
            /** show title and content */
            var options = {
                    alias           : '',
                    keyword         : '',
                    title           : '',
                    smallimage      : '',
                    description     : '',
                    summary         : ''
                };
            $('#head').header.complete(options);
        });
        </script>
	</head>
	<body>
		<nav id="menu" class="mm-menu mm-vertical mm-ismenu hidden-lg">
    		<ul class="mm-list mm-panel mm-opened mm-current" id="mm-m0-p0">
			    <div class="Search">
			        <form action="http://phongkhamapollo.com/#" method="get" target="_blank">
			            <input type="hidden" name="m" value="search">
			            <input type="hidden" name="c" value="index">
			            <input type="hidden" name="a" value="init">
			            <input type="hidden" name="typeid" value="1" id="typeid">
			            <input type="hidden" name="siteid" value="1" id="siteid">
			            <input class="s1" name="q" onfocus="keywordSwitch(this,&#39;focus&#39;)" onblur="keywordSwitch(this,&#39;blur&#39;)" type="text" placeholder="Từ khóa ..." required="required">
			            <input type="submit" value="Tìm kiếm" class="s2" />
			        </form>
			    </div>
        		<li>
        			<a href="http://phongkhamapollo.com/">Trang chủ</a>
        		</li>
        		<li>
        			<a href="http://phongkhamapollo.com/gioi-thieu.html">Giới thiệu</a>
			        <ul class="mm-list mm-panel" id="mm-m0-p1">
			            <li>
			            	<a href="http://phongkhamapollo.com/gioi-thieu.html">
			            		<i class="fa fa-chevron-right fa-sm"></i>&nbsp;&nbsp;Tổng quan
                            </a>
			            </li>
			            <li>
			            	<a href="http://phongkhamapollo.com/gioi-thieu/tam-nhin-va-su-menh.html">
			            		<i class="fa fa-chevron-right fa-sm"></i>&nbsp;&nbsp;Tầm nhìn và sứ mệnh
			            	</a>
			            </li>
			            <li>
			            	<a href="http://phongkhamapollo.com/gioi-thieu/quy-trinh-kham-benh.html">
			            		<i class="fa fa-chevron-right fa-sm"></i>&nbsp;&nbsp;Quy trình làm việc
			            	</a>
			            </li>
			            <li>
			            	<a href="http://phongkhamapollo.com/gioi-thieu/quyen-va-nghia-vu-cua-benh-nhan.html">
			            		<i class="fa fa-chevron-right fa-sm"></i>&nbsp;&nbsp;Quyền và nghĩa vụ của bệnh nhân
			            	</a>
			            </li>
			        </ul>
        		</li><!-- submenu gioi thieu -->
        		<li>
        			<a href="#" >Dịch vụ Y Khoa</a>
        			<ul class="mm-list mm-panel" id="mm-m0-p2">
        				<li>
        					<a href="http://phongkhamapollo.com/chuyenkhoa/khoa-ngoai-tong-quat.html" >
        						<i class="fa fa-chevron-right fa-sm"></i>&nbsp;&nbspKhoa ngoại tổng quát
        					</a>
        				</li>
            			<li>
            				<a href='http://phongkhamapollo.com/chuyenkhoa/khoa-san-phu-khoa.html'>
            					<i class="fa fa-chevron-right fa-sm"></i>&nbsp;&nbsp<span>Khoa Sản Phụ Khoa</span>
            				</a>
            			</li>
            			<li>
            				<a href='http://phongkhamapollo.com/chuyenkhoa/chuan-doan-hinh-anh.html'>
            					<i class="fa fa-chevron-right fa-sm"></i>&nbsp;&nbsp<span>Khoa chuẩn đoán hình ảnh</span>
            				</a>
            			</li>
            			<li>
            				<a href='http://phongkhamapollo.com/chuyenkhoa/khoa-xet-nghiem.html'>
            					<i class="fa fa-chevron-right fa-sm"></i>&nbsp;&nbsp<span>Khoa Xét Nghiệm</span>
            				</a>
            			</li>
        			</ul>
        		</li><!-- submenu dich vu y khoa -->
        		<li>
        			<a href="http://phongkhamapollo.com/tin-suc-khoe">
        				<span>Tin Sức Khỏe</span>
        			</a>
        			<ul class="mm-list mm-panel" id="mm-m0-p3">
        				<li>
        					<a href='http://phongkhamapollo.com/ngoai-khoa-1'>
        						&nbsp;<i class='fa fa-chevron-right fa-sm'></i>&nbsp;&nbsp;<span>Ngoại Khoa</span>
        					</a>
        					<ul id='mm-m0-p4-m0p0'>
        						<li>
        							<a href='http://phongkhamapollo.com/benh-tri-34'>
        								&nbsp;&nbsp&nbsp;&nbsp<i class='fa fa-angle-double-right fa-sm'></i>&nbsp;&nbsp<span>Bệnh trĩ</span>
        							</a>
        						</li>
    							<li>
    								<a href='http://phongkhamapollo.com/tri-noi-4'>
    									&nbsp;&nbsp&nbsp;&nbsp<i class='fa fa-angle-double-right fa-sm'></i>&nbsp;&nbsp<span>Trĩ Nội</span>
    								</a>
    							</li>
								<li>
									<a href='http://phongkhamapollo.com/tri-ngoai-5'>
										&nbsp;&nbsp&nbsp;&nbsp<i class='fa fa-angle-double-right fa-sm'></i>&nbsp;&nbsp<span>Trĩ Ngoại</span>
									</a>
								</li>
								<li>
									<a href='http://phongkhamapollo.com/dai-bao-quy-dau-16'>
										&nbsp;&nbsp&nbsp;&nbsp<i class='fa fa-angle-double-right fa-sm'></i>&nbsp;&nbsp<span>Dài Bao Quy Đầu</span>
									</a>
								</li>
								<li>
									<a href='http://phongkhamapollo.com/hep-bao-quy-dau-17'>
										&nbsp;&nbsp&nbsp;&nbsp<i class='fa fa-angle-double-right fa-sm'></i>&nbsp;&nbsp<span>Hẹp Bao Quy Đầu</span>
									</a>
								</li>
        						<li>
        							<a href='http://phongkhamapollo.com/hau-mon-truc-trang-15'>
        								&nbsp;&nbsp&nbsp;&nbsp<i class='fa fa-angle-double-right fa-sm'></i>&nbsp;&nbsp<span>Hậu Môn Trực Tràng</span>
        							</a>
        						</li>
        						<li>
        							<a href='http://phongkhamapollo.com/viem-bao-quy-dau-19'>
        								&nbsp;&nbsp&nbsp;&nbsp<i class='fa fa-angle-double-right fa-sm'></i>&nbsp;&nbsp<span>Viêm Bao Quy Đầu</span>
        							</a>
        						</li>
        					</ul>
        				</li>
        				<li>
        					<a href='http://phongkhamapollo.com/benh-phu-khoa-6'>
        						&nbsp;<i class='fa fa-chevron-right fa-sm'></i>&nbsp;&nbsp;<span>Bệnh Phụ Khoa</span>
        					</a>
        					<ul id='mm-m0-p4-m1p1'>
        						<li>
        							<a href='http://phongkhamapollo.com/viem-phu-khoa-7'>
        								&nbsp;&nbsp&nbsp;&nbsp<i class='fa fa-angle-double-right fa-sm'></i>&nbsp;&nbsp<span>Viêm Phụ Khoa</span>
        							</a>
        						</li>
        						<li>
        							<a href='http://phongkhamapollo.com/benh-co-tu-cung-10'>
        								&nbsp;&nbsp&nbsp;&nbsp<i class='fa fa-angle-double-right fa-sm'></i>&nbsp;&nbsp<span>Bệnh Cổ Tử Cung</span>
        							</a>
        						</li>
        						<li>
        							<a href='http://phongkhamapollo.com/viem-am-dao-8'>
        								&nbsp;&nbsp&nbsp;&nbsp<i class='fa fa-angle-double-right fa-sm'></i>&nbsp;&nbsp<span>Viêm Âm Đạo</span>
        							</a>
        						</li>
        						<li>
        							<a href='http://phongkhamapollo.com/viem-vung-chau-9'>
        								&nbsp;&nbsp&nbsp;&nbsp<i class='fa fa-angle-double-right fa-sm'></i>&nbsp;&nbsp<span>Viêm Vùng Chậu</span>
        							</a>
        						</li>
        						<li>
        							<a href='http://phongkhamapollo.com/kinh-nguyet-khong-deu-39'>
        								&nbsp;&nbsp&nbsp;&nbsp<i class='fa fa-angle-double-right fa-sm'></i>&nbsp;&nbsp<span>Kinh Nguyệt Không Đều</span>
        							</a>
        						</li>
        					</ul>
        				</li><!-- sub sub benh phu khoa -->
        				<li>
        					<a href='http://phongkhamapollo.com/thai-ngoai-y-muon-20'>
        						&nbsp;<i class='fa fa-chevron-right fa-sm'></i>&nbsp;&nbsp;<span>Thai Ngoài Ý Muốn</span>
        					</a>
        					<ul id='mm-m0-p4-m2p2'>
        						<li>
        							<a href='http://phongkhamapollo.com/pha-thai-ngoai-khoa-13'>
        								&nbsp;&nbsp&nbsp;&nbsp<i class='fa fa-angle-double-right fa-sm'></i>&nbsp;&nbsp<span>Phá Thai Ngoại Khoa</span>
        							</a>
        						</li>
        						<li>
        							<a href='http://phongkhamapollo.com/pha-thai-bang-thuoc-14'>
        								&nbsp;&nbsp&nbsp;&nbsp<i class='fa fa-angle-double-right fa-sm'></i>&nbsp;&nbsp<span>Phá Thai Bằng Thuốc</span>
        							</a>
        						</li>
        					</ul>
        				</li>
        				<li>
        					<a href='http://phongkhamapollo.com/phuc-hoi-tang-sinh-mon-33'>
        						&nbsp;<i class='fa fa-chevron-right fa-sm'></i>&nbsp;&nbsp;<span>Phục Hồi Tầng Sinh Môn</span></a>
        					<ul id='mm-m0-p4-m3p3'>
        						<li>
        							<a href='http://phongkhamapollo.com/phuc-hoi-tang-sinh-mon-41'>
        								&nbsp;&nbsp&nbsp;&nbsp<i class='fa fa-angle-double-right fa-sm'></i>&nbsp;&nbsp<span>Phục Hồi Tầng Sinh Môn</span>
        							</a>
        						</li>
        					</ul>
        				</li>
        				<li>
        					<a href='http://phongkhamapollo.com/benh-xa-hoi-27'>
        						&nbsp;<i class='fa fa-chevron-right fa-sm'></i>&nbsp;&nbsp;<span>Bệnh Xã Hội</span>
        					</a>
        					<ul id='mm-m0-p4-m4p4'>
        						<li>
        							<a href='http://phongkhamapollo.com/sui-mao-ga-28'>
        								&nbsp;&nbsp&nbsp;&nbsp<i class='fa fa-angle-double-right fa-sm'></i>&nbsp;&nbsp<span>Sùi Mào Gà</span>
        							</a>
        						</li>
        						<li>
        							<a href='http://phongkhamapollo.com/benh-lau-29'>
        								&nbsp;&nbsp&nbsp;&nbsp<i class='fa fa-angle-double-right fa-sm'></i>&nbsp;&nbsp<span>Bệnh Lậu</span>
        							</a>
        						</li>
        						<li>
        							<a href='http://phongkhamapollo.com/benh-giang-mai-30'>
        								&nbsp;&nbsp&nbsp;&nbsp<i class='fa fa-angle-double-right fa-sm'></i>&nbsp;&nbsp<span>Bệnh Giang Mai</span>
        							</a>
        						</li>
        						<li>
        							<a href='http://phongkhamapollo.com/mun-rop-sinh-duc-32'>
        								&nbsp;&nbsp&nbsp;&nbsp<i class='fa fa-angle-double-right fa-sm'></i>&nbsp;&nbsp<span>Mụn Rộp Sinh Dục</span>
        							</a>
								</li>
        					</ul>
        				</li>
        				<li>
        					<a href='http://phongkhamapollo.com/suc-khoe-nam-gioi-40'>
        						&nbsp;<i class='fa fa-chevron-right fa-sm'></i>&nbsp;&nbsp;<span>Sức Khỏe Nam Giới</span>
        					</a>
        					<ul id='mm-m0-p4-m5p5'>
	        					<li>
	        						<a href='http://phongkhamapollo.com/tuyen-tien-liet-36'>
	        							&nbsp;&nbsp&nbsp;&nbsp<i class='fa fa-angle-double-right fa-sm'></i>&nbsp;&nbsp<span>Tuyến Tiền Liệt</span>
	        						</a>
	        					</li>
	        					<li>
	        						<a href='http://phongkhamapollo.com/xuat-tinh-som-37'>
	        							&nbsp;&nbsp&nbsp;&nbsp<i class='fa fa-angle-double-right fa-sm'></i>&nbsp;&nbsp<span>Xuất Tinh Sớm</span>
	        						</a>
	        					</li>
	        					<li>
	        						<a href='http://phongkhamapollo.com/yeu-sinh-ly-38'>
	        							&nbsp;&nbsp&nbsp;&nbsp<i class='fa fa-angle-double-right fa-sm'></i>&nbsp;&nbsp<span>Yếu Sinh Lý</span>
	        						</a>
	        					</li>
        					</ul>
        				</li> <!-- sub sub menu suc khoe nam gioi -->      
        			</ul>
        		</li><!-- end tin suc khoe -->
        		<li>
        			<a href="#">Hỗ trợ khách hàng</a>
        			<ul class="mm-list mm-panel" id="mm-m0-p4">
            			<li>
            				<a href="http://phongkhamapollo.com/dat-hen-kham.html"><i class='fa fa-chevron-right fa-sm'></i>&nbsp;&nbsp;Đặt hẹn trực tuyến</a>
            			</li>
            			<li>
            				<a href="http://phongkhamapollo.com/#" class="yeu_cau_cuoc_goi">
            					&nbsp;<i class='fa fa-chevron-right fa-sm'></i>&nbsp;&nbsp;Yêu cầu cuộc gọi miễn phí</a>
            			</li>
            			<li>
            				<a href="http://ask.phongkhamapollo.com/LR/Chatpre.aspx?id=KRZ46705005">
            					&nbsp;<i class='fa fa-chevron-right fa-sm'></i>&nbsp;&nbsp;Tư vấn trực tuyến
            				</a>
            			</li>
        			</ul>
        		</li><!-- end sub menu ho tro khach hang -->
        		<li>
        			<a href="http://phongkhamapollo.com/lien-he.html">Liên hệ</a>
        			<ul class="mm-list mm-panel" id="mm-m0-p5">
	            		<li>
	            			<a href="http://phongkhamapollo.com/lien-he.html">
	            				&nbsp;<i class='fa fa-chevron-right fa-sm'></i>&nbsp;&nbsp;Bản đồ
	            			</a>
	            		</li>
	            		<li>
	            			<a href="http://phongkhamapollo.com/lien-he.html">
	            				&nbsp;<i class='fa fa-chevron-right fa-sm'></i>&nbsp;&nbsp;Hướng dẫn đường
	            			</a>
	            		</li>
        			</ul>
        		</li>
				<div class="contact">
    				<a href="http://ask.phongkhamapollo.com/LR/Chatpre.aspx?id=KRZ46705005" target="_blank">
    					<i class="fa fa-weixin fa-2x"></i><span>Tư vấn</span>
    				</a>
    				<a href="http://phongkhamapollo.com/lien-he.html" >
    					<i class="fa fa-map-marker fa-2x"></i><span>Bản đồ</span>
    				</a>
    				<a href="#" class="yeu_cau_cuoc_goi">
    						<i class="fa fa-mobile fa-2x"></i><span>Lưu SDT</span>
    				</a>
    				<a href="#">
    					<i class="fa fa-user-md fa-2x"></i><span>Tìm bác sĩ</span>
    				</a>
    				<a href="http://phongkhamapollo.com/chinh-sach-gia-199.html" style="height:72px;">
    					<i class="fa fa-heart fa-2x"></i><span style="font-size:10pt;">Chi phí khám</span>
    				</a>
    				<a href="http://ask.phongkhamapollo.com/LR/Chatpre.aspx?id=KRZ46705005" target="_blank">
    					<i class="fa fa-question fa-2x"></i><span>Hỏi đáp</span>
    				</a>
				</div><!-- end contact -->
			</ul>
		</nav><!-- end menu phone -->
    	<div id="page">
			<div class="top-menu">
			    <div class="container">
			        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			            <div class="top-talk">
			                <a href="tel:0839202999"><p><span class="ico-talk"></span>Tư vấn:  08-3920 2999</p></a>
			            </div>
			        </div>
			        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 hidden-xs">
			            <div class="top-right">
			                <ul>
			                    <li><a href="https://www.facebook.com/phongkhamdakhoaapollo?ref=ts&fref=ts"><i class="fa fa-facebook-square fa-lg"></i></a></li>
			                    <li><a href="#"><i class="fa fa-google-plus-square fa-lg"></i></a></li>
			                    <li><a href="#"><i class="fa fa-twitter-square fa-lg"></i></a></li>
			                    <li><a href="#"><i class="fa fa-linkedin-square fa-lg"></i></a></li>
			                    <li><a href="#"><i class="fa fa-tumblr-square fa-lg"></i></a></li>
			                </ul>
			                <p class="thoigian">Thời gian làm việc: 8-20h kể cả T7, CN và các ngày lễ</p>
			            </div>
			        </div>
			    </div>
			</div><!-- end  top menu -->
			<div id="over-bg" style="display:none;"></div>
			<div id="head" class="hidden-md hidden-lg hidden-sm">
    			<a href="#menu" class="lbtn"><i class="fa fa-bars fa-2x"></i></a>
    			<div class="content-header">
    				<a href="http://phongkhamapollo.com/">
        				<img style="width: 250px;" src="http://phongkhamapollo.com/public/assets/images/logo_.png"/>
        			</a>
    			</div>
			</div>
			<div class="row hidden-xs">
    			<div class="header hidden-xs">
        			<div class="container">
            			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="header-left" style="overflow:hidden;">
			                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			                        <a href="http://phongkhamapollo.com/">
			                        	<img src="http://phongkhamapollo.com/public/assets/images/logo_.png" />
			                        </a>
			                    </div>
							</div>
            			</div>
            			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			                <div class="head-right">
			                    <a href="http://ask.phongkhamapollo.com/LR/Chatpre.aspx?id=KRZ46705005" target="_blank">
									<img style="float:right;" src="http://phongkhamapollo.com/public/assets/images/sdt.jpg" />
			                    </a>
							</div>
            			</div>
        			</div>
    			</div>
			</div><!-- end header-->
			<div class='main-menu hidden-xs'>
 				<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
      				<div class='container'>
           				<div id='cssmenu'>
                			<ul>
                     			<li class='has-sub'>
                          			<a href='http://phongkhamapollo.com/tin-suc-khoe.html' style='background:#920000;'>
                               			<span>Tin Sức Khỏe</span>
                          			</a>
                          			<ul>
										<li id='tin-suc-khoe' class='has-sub'>
		 									<a href='http://phongkhamapollo.com/ngoai-khoa-1'>
		      									<span>Ngoại Khoa</span>
		 									</a>
				 							<ul>
					 							<li>
					      							<a href='http://phongkhamapollo.com/tri-noi-4'>
					           							<span>Trĩ Nội</span>
					      							</a>
					      						</li>
					 							<li>
					      							<a href='http://phongkhamapollo.com/tri-ngoai-5'>
					           							<span>Trĩ Ngoại</span>
					      							</a>
					      						</li>
												<li>
												    <a href='http://phongkhamapollo.com/hau-mon-truc-trang-15'>
												        <span>Hậu Môn Trực Tràng</span>
												    </a>
												</li>
												<li>
												    <a href='http://phongkhamapollo.com/dai-bao-quy-dau-16'>
												        <span>Dài Bao Quy Đầu</span>
												    </a>
												</li>
												<li>
												    <a href='http://phongkhamapollo.com/hep-bao-quy-dau-17'>
												        <span>Hẹp Bao Quy Đầu</span>
												    </a>
												</li>
												<li>
												    <a href='http://phongkhamapollo.com/viem-bao-quy-dau-19'>
												        <span>Viêm Bao Quy Đầu</span>
												    </a>
												</li>
												<li>
												   	<a href='http://phongkhamapollo.com/benh-tri-34'>
												        <span>Bệnh trĩ</span>
												    </a>
												</li>
				  							</ul>
				  						</li>
										<li id='tin-suc-khoe' class='has-sub'>
											<a href='http://phongkhamapollo.com/benh-phu-khoa-6'>
											    <span>Bệnh Phụ Khoa</span>
											</a>
											<ul>
											 	<li>
											      	<a href='http://phongkhamapollo.com/viem-phu-khoa-7'>
											           <span>Viêm Phụ Khoa</span>
											      	</a>
											    </li>
											 	<li>
											      	<a href='http://phongkhamapollo.com/viem-am-dao-8'>
											        	<span>Viêm Âm Đạo</span>
											      	</a>
											    </li>
												<li>
												    <a href='http://phongkhamapollo.com/viem-vung-chau-9'>
												        <span>Viêm Vùng Chậu</span>
												    </a>
												</li>
		 										<li>
		      										<a href='http://phongkhamapollo.com/benh-co-tu-cung-10'>
		           										<span>Bệnh Cổ Tử Cung</span>
		      										</a>
		      									</li>
												<li>
												    <a href='http://phongkhamapollo.com/kinh-nguyet-khong-deu-39'>
												        <span>Kinh Nguyệt Không Đều</span>
												    </a>
												</li>
		  									</ul>
										</li>
										<li id='tin-suc-khoe' class='has-sub'>
 											<a href='http://phongkhamapollo.com/thai-ngoai-y-muon-20'>
      											<span>Thai Ngoài Ý Muốn</span>
 											</a>
 											<ul>
												<li>
												    <a href='http://phongkhamapollo.com/pha-thai-ngoai-khoa-13'>
												        <span>Phá Thai Ngoại Khoa</span>
												    </a>
												</li>
												<li>
												    <a href='http://phongkhamapollo.com/pha-thai-bang-thuoc-14'>
												        <span>Phá Thai Bằng Thuốc</span>
												    </a>
												</li>
  											</ul>
										</li>
										<li id='tin-suc-khoe' class='has-sub'>
											<a href='http://phongkhamapollo.com/benh-xa-hoi-27'>
											    <span>Bệnh Xã Hội</span>
											</a>
											<ul>
												<li>
												    <a href='http://phongkhamapollo.com/sui-mao-ga-28'>
												       	<span>Sùi Mào Gà</span>
												    </a>
												</li>
												 <li>
												    <a href='http://phongkhamapollo.com/benh-lau-29'>
												        <span>Bệnh Lậu</span>
												    </a>
												</li>
												<li>
												    <a href='http://phongkhamapollo.com/benh-giang-mai-30'>
												        <span>Bệnh Giang Mai</span>
												    </a>
												</li>
												<li>
												    <a href='http://phongkhamapollo.com/mun-rop-sinh-duc-32'>
												        <span>Mụn Rộp Sinh Dục</span>
												    </a>
												</li>
  											</ul>
										</li>
										<li id='tin-suc-khoe' class='has-sub'>
											<a href='http://phongkhamapollo.com/phuc-hoi-tang-sinh-mon-33'>
											    <span>Phục Hồi Tầng Sinh Môn</span>
											</a>
											<ul>
 												<li>
												    <a href='http://phongkhamapollo.com/phuc-hoi-tang-sinh-mon-41'>
												        <span>Phục Hồi Tầng Sinh Môn</span>
												    </a>
												</li>
										  	</ul>
										</li>
										<li id='tin-suc-khoe' class='has-sub'>
										 	<a href='http://phongkhamapollo.com/suc-khoe-nam-gioi-40'>
										    	<span>Sức Khỏe Nam Giới</span>
										 	</a>
										 	<ul>
										 		<li>
										      		<a href='http://phongkhamapollo.com/tuyen-tien-liet-36'>
										           		<span>Tuyến Tiền Liệt</span>
										      		</a>
										      	</li>
										 		<li>
										      		<a href='http://phongkhamapollo.com/xuat-tinh-som-37'>
										           		<span>Xuất Tinh Sớm</span>
										      		</a>
										      	</li>
										 		<li>
										      		<a href='http://phongkhamapollo.com/yeu-sinh-ly-38'>
										           		<span>Yếu Sinh Lý</span>
										      		</a>
										      	</li>
										  	</ul>
										</li>
 									</ul>
 								</li><!-- end  menu tin suc khoe -->
								<li>
     								<a href='http://phongkhamapollo.com/'><span>Trang Chủ</span></a>
								</li>
								<li class='has-sub'>
									<a href='http://phongkhamapollo.com/gioi-thieu.html'><span>Giới Thiệu</span></a>
 									<ul>
	      								<li>
	      									<a href='http://phongkhamapollo.com/gioi-thieu.html'><span>Tổng quan</span></a>
	      								</li>
	      								<li>
	      									<a href='http://phongkhamapollo.com/page/tam-nhin-va-su-menh.html'><span>Tầm nhìn & sứ mệnh</span></a>
	      								</li>
	      								<li>
	      									<a href='http://phongkhamapollo.com/page/quy-trinh-kham-benh.html'><span>Quy trình khám bệnh</span></a>
	      								</li>
	    								<li>
	    									<a href='http://phongkhamapollo.com/page/quyen-nghia-vu-benh-nhan.html'><span>Quyền & nghĩa vụ của bệnh nhân</span></a>
	    								</li>
 									</ul>
								</li>
								<li class='has-sub'>
									<a href='#'><span>Dịch vụ y khoa</span></a>
								 	<ul>
								    	<li>
								    		<a href='http://phongkhamapollo.com/chuyenkhoa/khoa-ngoai-tong-quat.html'><span>Khoa Ngoại Tổng Quát</span></a>
								    	</li>
								    	<li>
								    		<a href='http://phongkhamapollo.com/chuyenkhoa/khoa-san-phu-khoa.html'><span>Khoa Sản Phụ Khoa</span></a>
								    	</li>
								    	<li>
								    		<a href='http://phongkhamapollo.com/chuyenkhoa/chuan-doan-hinh-anh.html'><span>Khoa chuẩn đoán hình ảnh</span></a>
								    	</li>
								    	<li>
								    		<a href='http://phongkhamapollo.com/chuyenkhoa/khoa-xet-nghiem.html'><span>Khoa Xét Nghiệm</span></a>
								    	</li>
								 	</ul>
								</li><!-- end menu dich vu y khoa -->
								<li id='btn_danh_sach' style='width:225px;' class='has-sub'>
									<a href='http://phongkhamapollo.com/danh-cho-khach-hang-21'><span>Hỗ trợ Khách Hàng</span></a>
									<ul>
									    <li>
									    	<a href='http://phongkhamapollo.com/dat-hen-kham.html'><span>Đặt hẹn khám</span></a>
									    </li>
									    <li>
									    	<a href='#' id='btn_yeu_cau_cuoc_goi' class='yeu_cau_cuoc_goi'><span>Yêu cầu cuộc gọi miễn phí</span></a>
									    </li>
									    <li>
									    	<a href='http://ask.phongkhamapollo.com/LR/Chatpre.aspx?id=KRZ46705005
									' target='_blank'><span>Tư vấn trực tuyến</span></a>
										</li>
									</ul>
								</li>
								<li class='has-sub'>
									<a href='http://phongkhamapollo.com/lien-he.html'>
										<span style='display: block;width: 155px;text-align: center;'>Liên hệ</span>
									</a>
									 <ul>
									    <li>
									    	<a href='http://phongkhamapollo.com/lien-he.html'><span>Hướng dẫn đường đi</span></a>
									    </li>
									    <li>
									    	<a href='#' class='yeu_cau_cuoc_goi'><span>Liên hệ qua điện thoại</span></a>
									    </li>
									 </ul>
								</li>
                			</ul>
           				</div><!-- end menu -->
      				</div>
 				</div>
			</div><!-- end main menu -->
		    <!-- slide -->
            <div id="slide_com" class="nivoSlider fluid_container hidden-xs" >
                <img src="http://phongkhamapollo.com/public/assets/images/banner/banner-sui-mao-ga.jpg" data-thumb="demo/images/toystory.jpg" alt="" title="#htmlcaption_sui_mao_ga" />
                <img src="http://phongkhamapollo.com/public/assets/images/banner-home/banner-pha-thai-bang-thuoc-hay-pha-thai-ngoai-khoa.jpg" title="#htmlcaption_pha_thai_bang_thuoc" alt="" />
                <img src="http://phongkhamapollo.com/public/assets/images/banner-home/banner-phuong-phap-chua-benh-lau.jpg" data-thumb="demo/images/walle.jpg" title="#htmlcaption_chua_benh_lau" alt="" data-transition="slideInLeft" /> 
                <img src="http://phongkhamapollo.com/public/assets/images/banner/banner-viem%20lo-tuyen-co-tu-cung.jpg" data-thumb="demo/images/nemo.jpg" title="#htmlcaption_viem_lo_tuyen" alt="" />
                <img src="http://phongkhamapollo.com/public/assets/images/banner/banner_pph.jpg" data-thumb="demo/images/nemo.jpg" title="#htmlcaption_pph" alt="" /> 
            </div>
            <div id="htmlcaption_sui_mao_ga" class="nivo-html-caption">
                <a im="sui_mao_ga"  href="http://phongkhamapollo.com/chuyen-de-dieu-tri-sui-mao-ga-bang-phuong-phap-ALA/" class="full"></a>
                <a im="sui_mao_ga" class="btn-tuvan" href="tel:0839202999" ></a>
                <a im="sui_mao_ga" class="btn-call" href="http://ask.phongkhamapollo.com/LR/Chatpre.aspx?id=KRZ46705005" ></a>
            </div>
            <div id="htmlcaption_pph" class="nivo-html-caption">
                <a im="pph"  href="http://phongkhamapollo.com/chuyen-de-benh-tri/" class="full"></a>
                <a im="pph" class="btn-tuvan" href="tel:0839202999" ></a>
                <a im="pph" class="btn-call" href="http://ask.phongkhamapollo.com/LR/Chatpre.aspx?id=KRZ46705005" ></a>
            </div>
            <div id="htmlcaption_pha_thai_bang_thuoc" class="nivo-html-caption">
                <a im="pha_thai_bang_thuoc" class="full" href="http://phongkhamapollo.com/chuyen-de-pha-thai-bang-thuoc-hay-pha-thai-ngoai-khoa/"></a>
                <a im="pha_thai_bang_thuoc" class="btn-call" href="tel:0839202999"></a>
                <a im="pha_thai_bang_thuoc" class="btn-tuvan" href="http://ask.phongkhamapollo.com/LR/Chatpre.aspx?id=KRZ46705005"></a>
            </div>
            <div id="htmlcaption_chua_benh_lau" class="nivo-html-caption">
                <a im="chua_benh_lau" class="full" href="#"></a>
                <a im="chua_benh_lau" class="btn-tuvan" href="http://ask.phongkhamapollo.com/LR/Chatpre.aspx?id=KRZ46705005"></a>
                <a im="chua_benh_lau" class="btn-call" href="tel:0839202999"></a>
            </div>
            <div id="htmlcaption_viem_lo_tuyen" class="nivo-html-caption">
                <a im="viem_lo_tuyen" class="full" href="#"></a>
                <a im="viem_lo_tuyen" class="btn-tuvan" href="http://ask.phongkhamapollo.com/LR/Chatpre.aspx?id=KRZ46705005"></a>
                <a im="viem_lo_tuyen" class="btn-call" href="tel:0839202999"></a>
            </div>
            <div id="htmlcaption_giang_mai" class="nivo-html-caption">
                <a im="giang_mai" class="full" href="#"></a>
                <a im="giang_mai" class="btn-tuvan" href="http://ask.phongkhamapollo.com/LR/Chatpre.aspx?id=KRZ46705005"></a>
                <a im="giang_mai" class="btn-call" href="tel:0839202999"></a>
            </div>
            <div id="slide_phone" class="nivoSlider fluid_container theme-default hidden-md hidden-sm hidden-lg" >
                <img src="http://phongkhamapollo.com/public/assets/images/banner-di-dong/banner-chuyen-de-benh-tri.jpg" alt="" title="#htmlcaption_pph" />
                <img src="http://phongkhamapollo.com/public/assets/images/banner-di-dong/banner-chuyen-de-sui-mao-ga.jpg" alt="" title="#htmlcaption_sui_mao_ga" />
                <img src="http://phongkhamapollo.com/public/assets/images/banner-di-dong/banner-chuyen-de-viem-lo-tuyen.jpg" alt="" data-transition="slideInLeft" title="#htmlcaption_viem_lo_tuyen" /> 
                <img src="http://phongkhamapollo.com/public/assets/images/banner-di-dong/banner-phong-kham-chua-benh-giang-mai.jpg" alt="" title="#htmlcaption_giang_mai" /> 
            </div>
			<!-- end phone slide -->   
<div id="page_content" class="container" style="padding: 0 0px;border:1px solid #fff;">
    <div class="row">
        <div class="menu">
            <div class="col-top-1">
                <div class="menu-item">
                    <a href="http://phongkhamapollo.com/gioi-thieu.html">
                    	<i class="fa fa-users fa-2x"></i>KHÁM PHÁ APOLLO
                    </a>
	    		</div>
	    	</div>
		    <div class="col-top-1">
		    	<div class="menu-item">
                    <a href="http://phongkhamapollo.com/chuyen-de.html">
                    	<i class="fa fa-plus fa-2x"></i>CHUYÊN ĐỀ SỨC KHỎE
                    </a>
		    	</div>
		    </div>
		    <div class="col-top-1">
		    	<div class="menu-item">
                    <a href="http://phongkhamapollo.com/dat-hen-kham.html">
                    	<i class="fa fa-weixin fa-2x"></i>ĐẶT HẸN KHÁM
                    </a>
		    	</div>
		    </div>
		    <div class="col-top-1">
	            <div class="menu-item">
	                <a href="http://ask.phongkhamapollo.com/LR/Chatpre.aspx?id=KRZ46705005" target="_blank">
	                	<i class="fa fa-pencil-square-o fa-2x"></i>HỎI ĐÁP
	                </a>	    			
		    	</div>
		    </div>
		</div><!-- end menu chuyen de suc khoe -->	
        <div class="hidden-lg hidden-md hidden-xs hidden-sm" style="overflow:hidden;margin-top:10px; background: #c5c5c5;padding: 10px;margin: 10px -15px;">
		    <div class="col-top-1 hidden-md hidden-lg" style="">
	            <div class="menu-item-2" style="background:#ffd866;">
	                <a href="http://phongkhamapollo.com/dich-vu-y-khoa.html">
	                	<img src="http://phongkhamapollo.com/public/assets/images/icon-tong-quat.png" />
	                	<span>KHOA NGOẠI TỔNG QUÁT</span>
	                </a>
		    	</div>
		    </div>
		    <div class="col-top-1 hidden-md hidden-lg">
		    	<div class="menu-item-2" style="background: #ffdf7f;">
	                <a href="http://phongkhamapollo.com/public/pages/gioithieu/goc-tri-an.html">
	                	<img src="http://phongkhamapollo.com/public/assets/images/icon-phu-khoa.png" />
	                	<span>KHOA SẢN PHỤ KHOA</span>
	                </a>
		    	</div>
		    </div>
		    <div class="col-top-1 hidden-md hidden-lg">
	            <div class="menu-item-2" style="background: #ffe599;">
	                <a href="#"><img src="http://phongkhamapollo.com/public/assets/images/icon-xet-nghiem.png" />
	                <span>KHOA XÉT NGHIỆM</span></a>
		    	</div>
		    </div>
            <div class="col-top-1 hidden-md hidden-lg">
                <div class="menu-item-2" style="background: #ffebb2;">
                    <a href="#"><img src="http://phongkhamapollo.com/public/assets/images/icon-sieu-am.png"/>
                    <span>CHUẨN ĐOÁN HÌNH ẢNH</span></a>
                </div>
            </div>
        </div> <!-- phần menu dư -->
        <div class="hidden-md hidden-lg hidden-sm" style="overflow: hidden;margin-top: 10px;background: #c0d5db;padding: 0px 7px;padding-top: 7px;">
            <div class="col-top-1 ">
                <div class="menu-item-3">
                    <a href="benh-phu-khoa-6"><span>Phụ Khoa</span></a>
                </div>
	    	</div>
		    <div class="col-top-1">
                <div class="menu-item-3">
                    <a href="ngoai-khoa-1"><span>Ngoại Khoa</span></a>
                </div>
		    </div>
		    <div class="col-top-1">
	            <div class="menu-item-3">
	                <a href="thai-ngoai-y-muon-20"><span>Thai Ngoài Ý Muốn</span></a>
		    	</div>
		    </div>
            <div class="col-top-1">
                <div class="menu-item-3">
                    <a href="benh-xa-hoi-27"><span>Bệnh Xã Hội</span></a>
                </div>
            </div>
            <div class="col-top-1">
                <div class="menu-item-3">
                    <a href="suc-khoe-nam-gioi-40"><span>Sức Khỏe Nam Giới</span></a>
                </div>
            </div>
            <div class="col-top-1">
                <div class="menu-item-3" style="">
                    <a href="phuc-hoi-tang-sinh-mon-33"><span>Tầng Sinh Môn</span></a>
                </div>
            </div>
		</div><!-- end phần menu bệnh -->
	</div>
<div class="container phone_container">
    <div class="featured">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-1 hidden-xs" style="overflow:hidden;">
                <div class="a-featured" style="" id="featured-top-01">
                    <div class="a-title"><h4>CHUYÊN ĐỀ SỨC KHỎE</h4></div> 
    				<div class="a-content">
                        <!-- Header Carousel -->
                        <header id="mycol1" class="carousel slide">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <a href="http://phongkhamapollo.com/chuyen-de-benh-lau/" target="_blank">
                                    	<div class="fill" style="background-image:url('http://phongkhamapollo.com//public/assets/images/sidebar/banner-benh-lau.jpg');background-size: 100% 100%;"></div>
                                    </a>
                                    <div class="carousel-caption">
                                        <div class="top-carousel"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="http://phongkhamapollo.com/chuyen-de-dieu-tri-sui-mao-ga-bang-phuong-phap-ALA/" target="_blank" >
                                    	<div class="fill" style="background-image:url('http://phongkhamapollo.com//public/assets/images/sidebar/banner-sui mao ga.jpg');background-size: 100% 100%;"></div>
                                    </a>
                                    <div class="carousel-caption">
                                        <div class="top-carousel"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="http://phongkhamapollo.com/chuyen-de-dieu-tri-benh-tri-bang-PPH/" target="_blank" >
                                    	<div class="fill" style="background-image:url('http://phongkhamapollo.com//public/assets/images/sidebar/banner-benh-tri-PPH.jpg');background-size: 100% 100%;"></div>
                                    </a>
                                    <div class="carousel-caption">
                                        <div class="top-carousel"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="http://phongkhamapollo.com/chuyen-de-viem-am-dao/" target="_blank" >
                                    	<div class="fill" style="background-image:url('http://phongkhamapollo.com//public/assets/images/sidebar/banner-viem-nhiem-vung-kin.jpg');background-size: 100% 100%;"></div>
                                    </a>
                                    <div class="carousel-caption">
                                        <div class="top-carousel"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#mycol1" data-slide="prev"><span class="icon-prev"></span></a>
                            <a class="right carousel-control" href="#mycol1" data-slide="next"><span class="icon-next"></span></a>
                        </header>
    			     </div>
                </div>
                </div><!-- close #page -->
                <!-- featured part -->
                <div class="col-xs-12 col-sm-12  col-md-12 col-2 hidden-xs">           
                    <div class="a-featured">
                        <div class="a-title"><h4>CHUYÊN ĐỀ SỨC KHỎE</h4></div>
                        <div class="a-content">
                            <div class="bv-noibat">
                                <p class='bv-tieude'>
                                	<a href='sung-bao-quy-dau-phai-lam-sao-day-698.html'>Sưng bao quy đầu phải làm sao đây?</a>
                                </p>
                                <div class='thumb'>
                                	<a href='sung-bao-quy-dau-phai-lam-sao-day-698.html'>
                                		<img src='http://phongkhamapollo.com/upload/hinhanh/benh_phi_dai_tuyen_tien_liet.jpg'/>
                                	</a>
                                </div>
                                <p class='bv-noidung'><p>Sưng bao quy đầu nếu kh&ocirc;ng được ph&aacute;t hiện v&agrave; chữa trị kịp thời sẽ g&acirc;y ảnh hưởng tới t&acirc;m l&yacute;, cuộc sống cũng như sức khỏe sinh sản v&agrave; hạnh ph&uacute;c lứa đ&ocirc;i về sau.&nbsp;</p>
..[<a href='sung-bao-quy-dau-phai-lam-sao-day-698.html'>Đọc tiếp</a>]</p>                            
							</div>
                            <div class="danhmuc-bv">
    							<ol>
                                    <li>
                                    	<a href='http://phongkhamapollo.com/sung-bao-quy-dau-phai-lam-sao-day-698.html'>Sưng bao quy đầu phải làm sao đây?</a>
                                    </li>
                                    <li>
                                    	<a href='http://phongkhamapollo.com/dia-chi-xet-nghiem-benh-xa-hoi-tai-tp.hcm-697.html'>Địa chỉ xét nghiệm bệnh xã hội tại Tp.HCM</a>
                                    </li>
                                    <li>
                                    	<a href='http://phongkhamapollo.com/quy-trinh-va-mang-trinh-nhu-the-nao-la-an-toan-696.html'>Quy trình vá màng trinh như thế nào là an toàn?</a>
                                    </li>
                                    <li>
                                    	<a href='http://phongkhamapollo.com/thu-hep-vung-kin-het-bao-nhieu-tien-695.html'>Thu hẹp vùng kín hết bao nhiêu tiền?</a>
                                    </li>
                                    <li>
                                    	<a href='http://phongkhamapollo.com/ban-biet-gi-ve-thu-hep-vung-kin-694.html'>Bạn biết gì về thu hẹp vùng kín?</a>
                                    </li>                                
                                </ol>
                            </div>
                        </div>
                    </div>
    			</div><!-- -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-1 hidden-xs">
					<div class="a-featured" >
					    <div class="a-title">
					        <h4>HÌNH ẢNH PHÒNG KHÁM</h4>
					    </div> 
				        <div class="a-content">
				            <div class="top">
				                <header id="top-col2" class="carousel slide">
				                    <div class="carousel-inner">
				                        <div class="item active">
				                            <a href="http://phongkhamapollo.com/dat-hen-kham.html">
				                            	<div class="fill" style="background-image:url('http://phongkhamapollo.com//public/assets/images/gioi-thieu-pk/hinh1.jpg');"></div>
				                            </a>
				                            <a href="http://phongkhamapollo.com/dat-hen-kham.html">
				                            	<div class="carousel-caption"></div>
				                            </a>
				                        </div>
				                        <div class="item">
				                            <a href="http://phongkhamapollo.com/lien-he.html">
				                            	<div class="fill" style="background-image:url('http://phongkhamapollo.com//public/assets/images/gioi-thieu-pk/hinh3.jpg');"></div>
				                            </a>
				                            <a href="http://phongkhamapollo.com/lien-he.html">
				                            	<div class="carousel-caption"></div>
				                            </a>
				                        </div>
				                    </div>
				                    <!-- Controls -->
				                    <a class="left carousel-control" href="#top-col2" data-slide="prev">
				                        <span class="icon-prev"></span>
				                    </a>
				                    <a class="right carousel-control" href="#top-col2" data-slide="next">
				                        <span class="icon-next"></span>
				                    </a>
				                </header>
				            </div><!-- top -->
			                <div class="content-col1" style="margin-top:10px;">
		                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 hidden-xs" style="padding:0;margin:0;">
		                            <p>
		                            	<a href="http://phongkhamapollo.com/gioi-thieu.html" style="background-color: #e65e42;">
		                            		<i class="fa fa-newspaper-o fa-lg"></i>&nbsp;&nbsp;&nbsp;Giới thiệu
		                            	</a>
		                            </p>
		                            <p>
		                            	<a href="#" class="dat_hen_kham" style="background-color: #7fa900;">
		                            		<i class="fa fa-pencil-square-o fa-lg"></i>&nbsp;Đặt hẹn
		                            	</a>
		                            </p>
		                        </div>
		                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 hidden-xs" style="padding:0;margin:0;">
		                            <p>
		                            	<a href="http://ask.phongkhamapollo.com/LR/Chatpre.aspx?id=KRZ46705005" style="background-color: #30bdd3;" target="_blank">
		                            		<i class="fa fa-weixin fa-lg"></i>&nbsp;Tư vấn
		                            	</a>
		                            </p>
		                            <p>
		                            	<a href="http://phongkhamapollo.com/lien-he.html" style="background-color: #ff964c;" target="_blank">
		                            		<i class="fa fa-motorcycle fa-lg"></i>&nbsp;Bản đồ
		                            	</a>
		                            </p>
		                        </div>
		                        <div class="col-xs-6 col-sm-12 col-md-12 col-lg-12 hidden-xs" style="padding:0;margin:0;">
		                            <img src="http://phongkhamapollo.com//public/assets/images/ico/dien-thoai-tu-van.jpg" />
		                        </div>
		                        <div class="col-xs-6 col-sm-12 col-md-12 col-lg-12 hidden-xs" style="padding:0;margin:0;">
		                            <img src="http://phongkhamapollo.com//public/assets/images/ico/thoi-gian-lam-viec.jpg"/>
		                        </div>
			               	</div>
						</div>
	            	</div>
            	</div>
        	</div><!-- end featured -->
        <div class="row">
    		<div class="baiviet hidden-xs" style="overflow:hidden;">
        		<div class="col-xs-6 col-sm-6 col-1">
            		<div class="menu-bv">
                		<a class='menubv' id='1' href='ngoai-khoa-1' targt='_blank'>Ngoại Khoa</a>
                		<a class='menubv' id='6' href='benh-phu-khoa-6' targt='_blank'>Bệnh Phụ Khoa</a>
                		<a class='menubv' id='20' href='thai-ngoai-y-muon-20' targt='_blank'>Thai Ngoài Ý Muốn</a>
                		<a class='menubv' id='33' href='phuc-hoi-tang-sinh-mon-33' targt='_blank'>Phục Hồi Tầng Sinh Môn</a>
                		<a class='menubv' id='27' href='benh-xa-hoi-27' targt='_blank'>Bệnh Xã Hội</a>
                		<a class='menubv' id='40' href='suc-khoe-nam-gioi-40' targt='_blank'>Sức Khỏe Nam Giới</a>   
                	</div>
        		</div>
        		<div class=" col-xs-6 col-sm-6 col-3">
    				<div class="top-bv">
                        <ul id="menu_baiviet">
                            <li>
                            	<a class='cat_sub' id='cat34' href='benh-tri-34' target='_blank'>
                            		<span>Bệnh trĩ</span>
                            	</a>
                            </li>
                            <li>
                            	<a class='cat_sub' id='cat4' href='tri-noi-4' target='_blank'>
                            		<span>Trĩ Nội</span>
                            	</a>
                            </li>
                            <li>
                            	<a class='cat_sub' id='cat5' href='tri-ngoai-5' target='_blank'>
                            		<span>Trĩ Ngoại</span>
                            	</a>
                            </li>
                            <li>
                            	<a class='cat_sub' id='cat16' href='dai-bao-quy-dau-16' target='_blank'>
                            		<span>Dài Bao Quy Đầu</span>
                            	</a>
                            </li>
                            <li>
                            	<a class='cat_sub' id='cat17' href='hep-bao-quy-dau-17' target='_blank'>
                            		<span>Hẹp Bao Quy Đầu</span>
                            	</a>
                            </li>
                            <li>
                            	<a class='cat_sub' id='cat15' href='hau-mon-truc-trang-15' target='_blank'>
                            		<span>Hậu Môn Trực Tràng</span>
                            	</a>
                            </li>                                    
                        </ul>
    				</div>
    				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    					<div class="bv-noibat">
                            <p class="bv-tieude" id="bv-tieude">
                            	<a href="benh-phu-nu-la-nhung-benh-gi-618.html">Bệnh phụ nữ là những bệnh gì?</a>
                            </p>
                            <div class="thumb" id="bv-thumb">
                                <a href="benh-phu-nu-la-nhung-benh-gi-618.html">
                                	<img id="img_thumb" src="http://phongkhamapollo.com/upload/hinhanh/Viem-phu-khoa/benh-phu-nu-la-nhung-benh-gi-1.jpg" />
                                </a>
                            </div>
                            <p class='bv-noidung' id='bv-noidung'>Bệnh phụ nữ là những căn bệnh đe dọa sức khỏe sinh sản, làm xáo trộn đời sống sinh hoạt của các chị em. Nếu mắc bệnh không điều trị sớm, sẽ có nguy cơ vô sinh<span>[<a href="benh-phu-nu-la-nhung-benh-gi-618.html">Đọc tiếp</a>]</span></p>
    					</div>
    				</div>
    				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    					<div class="danhmuc-bv">
    						<ol id="cat-bv">
    							<li>
    								<a href="ngua-vung-kin-o-nam-la-dau-hieu-cua-benh-gi-577.html">Ngứa vùng kín ở nam là dấu hiệu của bệnh gì ?</a>
    							</li>
    							<li>
    								<a href="dau-hieu-ngua-vung-kin-o-nu-la-benh-gi-576.html">Dấu hiệu ngứa vùng kín ở nữ là bệnh gì ?</a>
    							</li>
    							<li>
    								<a href="chi-phi-chua-benh-viem-phu-khoa-la-bao-nhieu.html">Chi phí chữa viêm phụ khoa là bao nhiêu ?</a>
    							</li>
   							</ol>
   						</div>
   					</div>
   					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    					<div class="slider-bv">
						    <header id="slider-bv1" class="carousel slide" style="height:120px;">
						        <div class="carousel-inner">
						            <div class="item active">
						                <a href="#" class="dat_hen_kham">
						                	<div class="fill" style="background-image:url('http://phongkhamapollo.com/public/assets/images/thoi_gian_lv/tglv_2.jpg');"></div>
						                </a>
						                <a href="#" class="dat_hen_kham">
                                            <div class="carousel-caption"></div>
                                        </a>
						            </div>
						        </div>
						    </header>
    					</div>
   					</div>
    			</div>
    		</div>
    	</div><!-- end bai viet - end row -->
		<div class="row">
    		<div class="lydo hidden-xs">
    			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    				<div class="lydo-title">
    					<h4 style="text-align:center;font-size:16pt; font-weight:bolder;">TẠI SAO MỌI NGƯỜI LUÔN CHỌN PHÒNG KHÁM APOLLO</h4>
    				</div>
    			</div>
    			<div class="col-xs-12 col-sm-12 col-1" style="overflow:hidden;">
    				<div class="left-bv">
    					<ul>
    						<li id="lydo-01"><a href="#" ><span>Đội ngũ bác sĩ giỏi</span></a></li>
    						<li id="lydo-02"><a href="#"><span>Phòng tiểu phẩu vô trùng</span></a></li>
    						<li id="lydo-03"><a href="#"><span>Trang thiết bị hiện đại</span></a></li>
    						<li id="lydo-04"><a href="#"><span>Bác sĩ tư vấn chuyên nghiệp</span></a></li>
    						<li id="lydo-05"><a href="#"><span>Bảo mật thông tin</span></a></li>
    						<li id="lydo-06"><a href="#"><span>Chi phí điều trị bệnh</span></a></li>
                            <li id="lydo-07"><a href="#"><span>Lợi ích của tư vấn online</span></a></li>
    					</ul>
    				</div>
    			</div>
    			<div class="col-xs-12 col-sm-12 col-2" style="overflow:hidden;">
    				<div class="center-bv">
    					<div class="lydo-item" id="lydo-01-item">
    						<img src="http://phongkhamapollo.com/public/assets/images/lydo/ly-do-1.jpg"/>
    						<div class="text-bv">Y – Bác sĩ có nghiệp vụ, trình độ chuyên môn cao, có trách nhiệm và y đức của người thầy thuốc</div>
    					</div>
    					<div class="lydo-item" id="lydo-02-item">
    						<img src="http://phongkhamapollo.com/public/assets/images/lydo/ly-do-2.jpg" />
    						<div class="text-bv">Phòng phẫu thuật được tiệt trùng hoàn toàn, đảm bảo chống nhiễm khuẩn.</div>
    					</div>
    					<div class="lydo-item" id="lydo-03-item">
    						<img src="http://phongkhamapollo.com/public/assets/images/lydo/ly-do-3.jpg" />
    						<div class="text-bv">Áp dụng thiết bị máy móc đạt chuẩn quốc tế, theo chuẩn của Bộ Y Tế.</div>
    					</div>
    					<div class="lydo-item" id="lydo-04-item">
    						<img src="http://phongkhamapollo.com/public/assets/images/lydo/ly-do-4.jpg"/>
    						<div class="text-bv">Được sàng lọc từ đội ngũ bác sĩ có chuyên môn, nhiệt tình, sẵn sàng giải đáp mọi thắc mắc của người bệnh</div>
    					</div>
    					<div class="lydo-item" id="lydo-05-item">
    						<img src="http://phongkhamapollo.com/public/assets/images/lydo/ly-do-5.jpg" />
    						<div class="text-bv">Hồ sơ bệnh nhân chỉ phục vụ cho việc khám và điều trị bệnh, cam kết bảo mật hoàn toàn thông tin cá nhân.</div>
    					</div>
    					<div class="lydo-item" id="lydo-06-item">
    						<img src="http://phongkhamapollo.com/public/assets/images/lydo/ly-do-6.jpg" />
    						<div class="text-bv">Chi phí điều trị theo quy định, có niêm yết và minh bạch, tạo sự chủ động lựa chọn cho người bệnh.</div>
    					</div>
                        <div class="lydo-item" id="lydo-07-item">
                            <img src="http://phongkhamapollo.com/public/assets/images/lydo/ly-do-7.gif" />
                            <a href="http://ask.phongkhamapollo.com/LR/Chatpre.aspx?id=KRZ46705005" target="_blank" style="height:52px;width:243px;right: 23px;"></a>
                            <a href="tel:0839202999" style="height:52px;left: 28px; width: 208px;"></a>
                        </div>
    				</div>
    			</div> <!-- ly do kham -->
    			<!-- goc tri an  -->
    			<div class="col-xs-12 col-sm-12 col-1" style="overflow:hidden;">
                    <div class="title-bv">
                        <h2>Góc tri ân bệnh nhân</h2>
                    </div>
                    <header id="goctrianCarousel" class="carousel slide hidden-xs" >
                        <div class="carousel-inner">
                            <div class="item active">
                                <a href="#" target="_blank">
                                    <div class="fill"></div>
                                </a>
                                <div class="carousel-caption">
                                    <div class="right-bv">
                                        <div class="content-bv">
                                            <div class="img-bv" >
                                            	<img src='http://phongkhamapollo.com//public/assets/images/hinh-bn.png' />
                                            </div>
                                            <div class="text-bv">
                                                <p> “Tôi mắc trĩ lâu năm, do lo ngại tiền khám và chữa bệnh quá cao, nên mãi mà vẫn chưa đi bệnh viện...[<a href="http://phongkhamapollo.com/tri-an-khach-hang-trong-chuong-trinh-uu-dai-thang-72015-628.html"> Đọc tiếp...</a>]</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#" target="_blank">
                                    <div class="fill"></div>
                                </a>
                                <div class="carousel-caption">
                                    <div class="right-bv">
                                        <div class="content-bv">
                                            <div class="img-bv" ><img src='http://phongkhamapollo.com//public/assets/images/hinh-bn.png'/></div>
                                            <div class="text-bv">
                                                <p> “Tôi mắc trĩ lâu năm, do lo ngại tiền khám và chữa bệnh quá cao, nên mãi mà vẫn chưa đi bệnh viện...[<a href="http://phongkhamapollo.com/tri-an-khach-hang-trong-chuong-trinh-uu-dai-thang-72015-628.html"> Đọc tiếp...</a>]</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" style="left:84%;" href="#goctrianCarousel" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#goctrianCarousel" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </header>
    		    </div> <!-- end goc tri an -->
            </div>
    	</div>
    </div><!-- end ly do pk -->
</div>
</div>
	<div class="row" id="ft_main">
		<div class="footer">
			<div class="link hidden-xs">
				<div class="container hidden-xs">
					<div class="col-xs-6 col-sm-6 col-md-3 col-f-3" id="link1">
						<a href="http://phongkhamapollo.com/thai-ngoai-y-muon-20"><h3>Thai ngoài ý muốn</h3></a>
						<a href="http://phongkhamapollo.com/pha-thai-bang-thuoc-14"><i class="fa fa-link fa-lg"></i>&nbsp;&nbsp;Phá Thai Bằng Thuốc</a>
						<a href="http://phongkhamapollo.com/pha-thai-ngoai-khoa-13"><i class="fa fa-link fa-lg"></i>&nbsp;&nbsp;Phá Thai Ngoại Khoa</a>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3 col-f-3" id="link2">
						<a href="http://phongkhamapollo.com/benh-phu-khoa-6"><h3>Bệnh phụ khoa</h3></a>
						<a href="http://phongkhamapollo.com/viem-phu-khoa-7"><i class="fa fa-link fa-lg"></i>&nbsp;&nbsp;Viêm Phụ Khoa</a>
						<a href="http://phongkhamapollo.com/viem-am-dao-8"><i class="fa fa-link fa-lg"></i>&nbsp;&nbsp;Viêm Âm Đạo</a>
						<a href="http://phongkhamapollo.com/viem-vung-chau-9"><i class="fa fa-link fa-lg"></i>&nbsp;&nbsp;Viêm Vùng Chậu</a>
						<a href="http://phongkhamapollo.com/benh-co-tu-cung-10"><i class="fa fa-link fa-lg"></i>&nbsp;&nbsp;Bệnh Cổ Tử Cung</a>
						<a href="http://phongkhamapollo.com/kinh-nguyet-khong-deu-39"><i class="fa fa-link fa-lg"></i>&nbsp;&nbsp;Kinh Nguyệt Không Đều</a>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3 col-f-3" id="link3">
						<a href="http://phongkhamapollo.com/ngoai-khoa-1"><h3>Ngoại khoa</h3></a>
						<a href="http://phongkhamapollo.com/tri-noi-4"><i class="fa fa-link fa-lg"></i>&nbsp;&nbsp;Bệnh Trĩ</a>
						<a href="http://phongkhamapollo.com/viem-bao-quy-dau-19"><i class="fa fa-link fa-lg"></i>&nbsp;&nbsp;Viêm Bao Quy Đầu</a>
						<a href="http://phongkhamapollo.com/dai-bao-quy-dau-16"><i class="fa fa-link fa-lg"></i>&nbsp;&nbsp;Dài Bao Quy Đầu</a>
						<a href="http://phongkhamapollo.com/hep-bao-quy-dau-17"><i class="fa fa-link fa-lg"></i>&nbsp;&nbsp;Hẹp Bao Quy Đầu</a>
						<a href="http://phongkhamapollo.com/hau-mon-truc-trang-15"><i class="fa fa-link fa-lg"></i>&nbsp;&nbsp;Hậu Môn Trực Tràng</a>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3 col-f-3" id="link4">
						<a href="http://phongkhamapollo.com/benh-xa-hoi-27"><h3>Bệnh xã hội</h3></a>
						<a href="http://phongkhamapollo.com/sui-mao-ga-28"><i class="fa fa-link fa-lg"></i>&nbsp;&nbsp;Sùi Mào Gà</a>
						<a href="http://phongkhamapollo.com/benh-lau-29"><i class="fa fa-link fa-lg"></i>&nbsp;&nbsp;Bệnh Lậu</a>
						<a href="http://phongkhamapollo.com/benh-giang-mai-30"><i class="fa fa-link fa-lg"></i>&nbsp;&nbsp;Bệnh Giang Mai</a>
						<a href="http://phongkhamapollo.com/mun-rop-sinh-duc-32"><i class="fa fa-link fa-lg"></i>&nbsp;&nbsp;Mụn Rộp Sinh Dục</a>	
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3 col-f-3" id="link5">
						<a href="http://phongkhamapollo.com/suc-khoe-nam-gioi-40"><h3>Sức khỏe nam giới</h3></a>
						<a href="http://phongkhamapollo.com/xuat-tinh-som-37"><i class="fa fa-link fa-lg"></i>&nbsp;&nbsp;Xuất Tinh Sớm</a>
						<a href="http://phongkhamapollo.com/tuyen-tien-liet-36"><i class="fa fa-link fa-lg"></i>&nbsp;&nbsp;Tuyến Tiền Liệt</a>
						<a href="http://phongkhamapollo.com/yeu-sinh-ly-38"><i class="fa fa-link fa-lg"></i>&nbsp;&nbsp;Yếu Sinh Lý</a>
					</div>				
				</div>
			</div>
			<div class="footer-logo row hidden-xs">
    			<div class="col-xs-7 col-md-7 col-sm-7 col-lg-7">
        			<div class="col-xs-2 col-md-2 col-sm-2 col-lg-2" style="padding-top: 7px;">
            			<div id='footer_logo'></div>
        			</div>
	        		<div class="col-xs-10 col-md-10 col-sm-10 col-lg-10" style="border-right:1px solid #124057;">
			            <p class="footer_name">PHÒNG KHÁM ĐA KHOA APOLLO</p>
			            <p>228A - 228 Trần Hưng Đạo, P. Nguyễn Cư Trinh, Q.1, TP. Hồ Chí Minh</p>
			            <p>Điện thoại: 08 3920 2999</p>
			            <p>Website: phongkhamapollo.com</p>
			            <p>Email: support@phongkhamapollo.com</p>
	        		</div>
    			</div><!-- left part -->
    			<div class="col-xs-5 col-md-5 col-sm-5 col-lg-5">
	        		<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12" style="overflow: hidden;padding-right: 24%;">
	            		<div id="qr_code"></div>
	        		</div>
			        <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
			            <p class="mini">Phòng Khám Đa Khoa Apollo</p>
			            <p class="mini">Điện thoại: 08 3920 2999</p>
			        </div>
			        <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
			            <ul id="social_icon" class="col-xs-6 col-md-6 col-sm-6 col-lg-6">
			                <li><a href="https://www.facebook.com/phongkhamdakhoaapollo"></a></li>
			                <li><a href="#"></a></li>
			                <li><a href="https://www.facebook.com/phongkhamdakhoaapollo"></a></li>
			            </ul>
			            <ul id="contact_icon" class="col-xs-6 col-md-6 col-sm-6 col-lg-6">
			                <li><a href="http://ask.phongkhamapollo.com/LR/Chatpre.aspx?id=KRZ46705005" target="_blank"></a></li>
			                <li><a href="http://ask.phongkhamapollo.com/LR/Chatpre.aspx?id=KRZ46705005" target="_blank"></a></li>
			                <li><a href="#" class="yeu_cau_cuoc_goi"></a></li>
			                <li><a href="http://phongkhamapollo.com/lien-he.html"></a></li>
			            </ul>
			        </div>
    			</div><!-- right part -->
			</div><!-- footer  -->
		</div><!-- end footer -->
	</div>
<!-- back on top -->
<a class="back-to-top" href="#" title="Về đầu trang"><i class="fa fa-chevron-up fa-lg"></i></a>
<script src="http://ask.phongkhamapollo.com/JS/LsJS.aspx?siteid=KRZ46705005&lng=en"></script>
<script src="http://phongkhamapollo.com/public/assets/js/general/enter_phone_footer.js"></script>
	<div class="row hidden-xs">
		<div class="d_chat_menu"></div>
		<div class="chat-menu">
	        <div class="col-xs-3 col-md-3">
	            <p>Nhập số điện thoại</p>
	            <p>Nhận cuộc gọi tư vấn miễn phí</p>
	        </div>  
	        <div class="col-xs-3 col-md-3 form-group">
	            <input id="ft_soDT" type="text" class="form-control" placeholder="Nhập số điện thoại" />
	            <a id="btnGui_SDT" href="javascript:void(0);" class="btn btn-primary">Gửi</a>
	        </div>
	        <div class="col-xs-3 col-md-3">
	            <a href="tel:0839202999"><p class="ico"><i class="fa fa-whatsapp fa-lg"></i>&nbsp;08-3920 2999</p></a>
	        </div>
	        <div class="col-xs-3 col-md-3">
	            <a href="http://ask.phongkhamapollo.com/LR/Chatpre.aspx?id=KRZ46705005">
	            	<p class="ico"><i class="fa fa-comments-o fa-lg"></i>&nbsp;Tư vấn online</p>
	            </a>
	        </div>
		</div>
	</div><!-- chat menu -->
	<div class="row hidden-lg" style="margin:0;padding:0">
		<div class="ft_logo_phone" style="width:100%;margin-bottom:40px;margin-top:10px;">
			<img style="width:100%;" src="http://phongkhamapollo.com/public/assets/images/logo_.png" />
		</div>
    	<div class="menu-chat-phone-same"></div>
		<div class="mn-phone_pallet hidden-lg hidden-md" style="position:fixed;bottom:0px;">
			<ul class="mn-phone" >
				<li>
					<a href="http://ask.phongkhamapollo.com/LR/Chatpre.aspx?id=KRZ46705005" target="_blank" title="Chat trực tiếp với bác sĩ"><i class="fa fa-weixin fa-2x">
						</i>&nbsp;&nbsp;Tư vấn
					</a>
				</li>
				<li>
					<a href="tel:0839202999" title="Nhập số điện thoại để chúng tôi liên lạc với bạn"><i class="fa fa-phone fa-2x">
						</i>&nbsp;&nbsp;Gọi điện
					</a>
				</li>
	 			<li class="yeu_cau_cuoc_goi">
	 				<a href="#" target="" title="đặt hẹn khám ">
	 					<i class="fa fa-calendar fa-2x"></i>&nbsp;Đặt lịch khám
	 				</a>
	 			</li>
			</ul>
		</div>
	</div>
	<link rel="stylesheet" type="text/css" href="http://phongkhamapollo.com//public/assets/css/menu-chat.css">
	<div class="quang-cao-trai hidden-xs" style="display:none;">
	    <a href='http://ask.phongkhamapollo.com/LR/Chatpre.aspx?id=KRZ46705005' target="_blank">
	        <img src="http://phongkhamapollo.com/public/assets/images/live-chat-left_do.gif" />
	    </a>
	</div>
	<h1 style='display:none;'>Phòng khám đa khoa Apollo</h1>
	<div class="banner_">
		<div class="div_banner">
		 	<ul class="menu_right_ul">
		 		<li class="yeu_cau_cuoc_goi"><a title="Nhập số điện thoại để chúng tôi liên lạc với bạn"><img src="http://phongkhamdakhoa3thang2.com/public/img/dt.png" alt="">Yêu cầu cuộc gọi</a></li>
		 		<li><a href="http://ask.phongkhamapollo.com/LR/Chatpre.aspx?id=KRZ46705005" target="_blank" title="Chat trực tiếp với bác sĩ"><img src="http://phongkhamdakhoa3thang2.com/public/img/tuvan.png" alt="">Tư vấn trực tuyến</a></li>
		 		<li id="dat_hen_kham"><a href="#" target="" title="Đặt hẹn khám ưu tiên"><img src="http://phongkhamdakhoa3thang2.com/public/img/dat-hen.png" alt=""><span>Đặt Lịch Khám</span></a></li>
		  		<li class="gui_tin_nhan"><a title="Gửi tin nhắn cho chúng tôi"><img src="http://phongkhamapollo.com/public/assets/images/ico_message.png" alt="">Gửi tin nhắn</a></li>
		 	</ul>
		</div>
	</div>
<!-- Popup Yeu Cau Cuoc goi -->
	<div class="modal fade" id="frm-luu-sdt" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	        	<span aria-hidden="true">&times;</span>
	        </button>
	        <h4 class="modal-title" id="myModalLabel">Yêu cầu cuộc gọi</h4>
	      </div>
	      <div class="modal-body">
	        <div class="row">
	          <div class="col-sx-12 col-md-12">
		          <p style="color:#f22a2a;font-size:14pt;font-weight:bolder;">&nbsp;&nbsp;Để lại số điện thoại của bạn để được các bác sĩ gọi lại tư vấn miễn phí.</p>
		          <form class="form-horizontal" id="frm-luu-sdt" action="http://phongkhamapollo.com/DangKyKham/Luu_sdt">
		          <div class="form-group"> 
			          <label class="control-label" for="name">Số điện thoại:</label> 
			          <input  id="yccg_sdt" name="sodt" type="text" placeholder="Số điện thoại" class="sdt form-control input-md"> 
		          </div>
		          <div class="form-group"> 
			          <label class="control-label" for="name">Chọn khoa :</label> 
			          <select class="form-control" name="khoa" id="yccg_khoa">
			          	<option value="4">Trĩ Nội</option>
						<option value="5">Trĩ Ngoại</option>
						<option value="7">Viêm Phụ Khoa</option>
						<option value="8">Viêm Âm Đạo</option>
						<option value="9">Viêm Vùng Chậu</option>
						<option value="10">Bệnh Cổ Tử Cung</option>
						<option value="11">Hiếm Muộn</option>
						<option value="13">Phá Thai Ngoại Khoa</option>
						<option value="14">Phá Thai Bằng Thuốc</option>
						<option value="15">Hậu Môn Trực Tràng</option>
						<option value="16">Dài Bao Quy Đầu</option>
						<option value="17">Hẹp Bao Quy Đầu</option>
						<option value="18">Hôi Nách</option>
						<option value="19">Viêm Bao Quy Đầu</option>
						<option value="25">Thuốc và sức khỏe</option>
						<option value="28">Sùi Mào Gà</option>
						<option value="29">Bệnh Lậu</option>
						<option value="30">Bệnh Giang Mai</option>
						<option value="31">Chính Sách Giá</option>
						<option value="32">Mụn Rộp Sinh Dục</option>
						<option value="34">Bệnh trĩ</option>
						<option value="35">U xơ cổ tử cung</option>
						<option value="36">Tuyến Tiền Liệt</option>
						<option value="37">Xuất Tinh Sớm</option>
						<option value="38">Yếu Sinh Lý</option>
						<option value="39">Kinh Nguyệt Không Đều</option>
						<option value="41">Phục Hồi Tầng Sinh Môn</option>
			          </select> 
		          </div>
	          	</div>  
	         </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng lại</button>
	        <input type="submit" class="btn btn-primary" id="btn_yeu_cau_cuoc_goi_submit" value="Lưu lại"/>
	      </div>
	    </div>
	  </div>
	</div><!-- end pop up yeu cau cuoc goi -->
	<!-- Pop up form dat hen  -->
	<div class="modal fade" id="frm-dathen-id" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	        	<span aria-hidden="true">&times;</span>
	        </button>
	        <h4 class="modal-title" id="myModalLabel">Đặt hẹn khám</h4>
	      </div>
	      <div class="modal-body">
	        <div class="row">
	          	<div class="col-sx-12 col-md-12">
		          	<form class="form-horizontal" id="frm-dathen-id" action="http://phongkhamapollo.com/DangKyKham/LuuNhanh_DangKyKham">
		          		<div class="form-group">
				        	<label class="control-label" for="hoten">Họ tên <span style="color:red;">(*)</span>:</label> 
				        	<input id="hoten" name="hoten" type="text" placeholder="Họ tên" class="form-control input-md">
		          		</div>
		          		<div class="form-group"> 
		          			<label class="control-label" for="name">Số điện thoại<span style="color:red;">(*)</span>:</label> 
		          			<input  id="sodt" name="dienthoai" type="text" placeholder="Số điện thoại" class="sdt form-control input-md">
		          		</div>
		          		<div class="form-group"> 
		          			<label class="control-label" for="name">Chọn khoa :</label> 
		          			<select class="form-control" name="khoa" id="khoa">
		          				<option value="4">Trĩ Nội</option>
								<option value="5">Trĩ Ngoại</option>
								<option value="7">Viêm Phụ Khoa</option>
								<option value="8">Viêm Âm Đạo</option>
								<option value="9">Viêm Vùng Chậu</option>
								<option value="10">Bệnh Cổ Tử Cung</option>
								<option value="11">Hiếm Muộn</option>
								<option value="13">Phá Thai Ngoại Khoa</option>
								<option value="14">Phá Thai Bằng Thuốc</option>
								<option value="15">Hậu Môn Trực Tràng</option>
								<option value="16">Dài Bao Quy Đầu</option>
								<option value="17">Hẹp Bao Quy Đầu</option>
								<option value="18">Hôi Nách</option>
								<option value="19">Viêm Bao Quy Đầu</option>
								<option value="25">Thuốc và sức khỏe</option>
								<option value="28">Sùi Mào Gà</option>
								<option value="29">Bệnh Lậu</option>
								<option value="30">Bệnh Giang Mai</option>
								<option value="31">Chính Sách Giá</option>
								<option value="32">Mụn Rộp Sinh Dục</option>
								<option value="34">Bệnh trĩ</option>
								<option value="35">U xơ cổ tử cung</option>
								<option value="36">Tuyến Tiền Liệt</option>
								<option value="37">Xuất Tinh Sớm</option>
								<option value="38">Yếu Sinh Lý</option>
								<option value="39">Kinh Nguyệt Không Đều</option>
								<option value="41">Phục Hồi Tầng Sinh Môn</option>
		          			</select> 
		          		</div>
		          		<div class="form-group">
		            		<label class="control-label" for="hoten">Địa chỉ:</label>
		            		<select class="form-control" name="diachi" id="diachi">
		                		<option value="Hồ Chí Minh">Hồ Chí Minh</option>
		                		<option value="Hà Nội">Hà Nội</option>
		                		<option value="Bình Phước">Bình Phước</option>
		                		<option value="Bình Dương">Bình Dương</option>
		                		<option value="Đồng Nai">Đồng Nai</option>
		                		<option value="Tây Ninh">Tây Ninh</option>
		                		<option value="Bà Rịa-Vũng Tàu">Bà Rịa-Vũng Tàu</option>
		                		<option value="Long An">Long An</option>
		                		<option value="Đồng Tháp">Đồng Tháp</option>
		                		<option value="Tiền Giang">Tiền Giang</option>
		                		<option value="An Giang">An Giang</option>
		                		<option value="Bến Tre">Bến Tre</option>
		                		<option value="Vĩnh Long">Vĩnh Long</option>
		                		<option value="Trà Vinh">Trà Vinh</option>
		                		<option value="Hậu Giang">Hậu Giang</option>
		                		<option value="Kiên Giang">Kiên Giang</option>
		                		<option value="Sóc Trăng">Sóc Trăng</option>
		                		<option value="Bạc Liêu">Bạc Liêu</option>
		                		<option value="Cà Mau">Cà Mau</option>
		                		<option value="Ninh Thuận">Ninh Thuận</option>
		                		<option value="Bình Thuận">Bình Thuận</option>
		                		<option value="Các tỉnh miền Trung">Các tỉnh miền Trung</option>
		                		<option value="Các tỉnh miền Bắc">Các tỉnh miền Bắc</option>
		              		</select>
		          		</div>
		            	<div class="form-group">
		              		<div class="form-group col-lg-6 col-sx-6">
		                		<label class="control-label" for="gioitinh">Giới tính :</label> 
		                		<select id="gioitinh" name="gioitinh" class="form-control col-md-4 col-sx-6">
		                    		<option value="1">Nam</option>
		                    		<option value="0">Nữ</option>
		                    		<option value="-1">Giới tính khác</option>
		                		</select>
		              		</div>
		              		<div class="form-group col-lg-6 col-sx-6">
		               			<label class="control-label" for="name">Tuổi :</label>
		               			<input type="number" name="tuoi" class="form-control" id="tuoi" placeholder="Tuổi bạn"/>
		              		</div>
		            	</div>
		          		<div class="form-group">
		           			<label class="control-label" for="name">Ngày khám :</label>
		           			<input type="text" name="ngaykham" class="form-control" id="ngaykham" placeholder="10/10/2015"/>
		          		</div>
		          		<div class="form-group">
		            		<label class="control-label" for="name">Giờ khám :</label>
		              		<select class="form-control" name="giokham" id="DHH-giokham">
		              			<option value='0'>--Chọn giờ khám--</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
		              		</select>
		          		</div>
		          		<div class="form-group">
				           <label class="control-label" for="name">Nội dung :</label>
				           <textarea class="form-control" name="noidung" id="noidung" placeholder="Nội dung mà bạn khám"></textarea>
		          		</div>
		          	</form> 
	        	</div>  
	    	</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng lại</button>
	        <input type="submit" class="btn btn-primary" id="btn_dat_hen_kham" value="Lưu lại"/>
	      </div>
	    </div>
	  </div>
	</div><!-- end pop up dat hen -->
	<!-- Pop up gui tin nhan -->
	<div class="modal fade" id="frm_gui_tin_nhan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  		<div class="modal-dialog" role="document">
	    	<div class="modal-content">
	      		<div class="modal-header">
	      			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	      				<span aria-hidden="true">&times;</span>
	      			</button>
	        		<h4 class="modal-title" id="myModalLabel">Gửi tin nhắn</h4>
	      		</div>
	      		<div class="modal-body">
	        		<div class="row">
			        	<div class="col-sx-12 col-md-12" id="gtn_md">
			        		<p class="p-gtn" style="">1.Nếu bạn không có thời gian chat thì bạn có thể nhập số điện thoại tại đây.<br/>
			          2.Bạn có thể gửi email cho chúng tôi, chúng tôi sẽ trả lời câu hỏi của bạn.</p>
		          			<ul id="gtn" class="nav nav-pills">
		          				<li id="item_sdt" class="btn btn-default active">
		          					<a data-toggle="pill" href="#id_sodienthoai">1.Số điện thoại</a>
		          				</li>
		           				<li>
		           					<a data-toggle="pill" id="id_hoac"> hoặc</a>
		           				</li>
		           				<li id="item_email" class="btn btn-default">
		           					<a data-toggle="pill" href="#id_email">2. Email</a>
		           				</li>
		            		</ul>
		          			<div class="tab-content">
		           				<div id="id_sodienthoai" class="tab-pane fade in active">
		             				<form id="frm-gui-tin-nhan-dienthoai" action="DangKyKham/Luu_sdt_tinnhan" method="post" style="margin:0px 20px">
		               					<div class="form-group" id="show-dienthoai">
		                 					<label for="DH-dienthoai">Số điện thoại:</label>
		                 					<input type="text" class="form-control" name="dienthoai" id="_dienthoai" placeholder="Số điện thoại của bạn">
		               					</div>
		          						<div class="form-group">
		          							<label class="control-label" for="name">Chọn khoa :</label> 
		           							<select class="form-control" name="khoa" id="khoa">
								          		<option value="4">Trĩ Nội</option>
												<option value="5">Trĩ Ngoại</option>
												<option value="7">Viêm Phụ Khoa</option>
												<option value="8">Viêm Âm Đạo</option>
												<option value="9">Viêm Vùng Chậu</option>
												<option value="10">Bệnh Cổ Tử Cung</option>
												<option value="11">Hiếm Muộn</option>
												<option value="13">Phá Thai Ngoại Khoa</option>
												<option value="14">Phá Thai Bằng Thuốc</option>
												<option value="15">Hậu Môn Trực Tràng</option>
												<option value="16">Dài Bao Quy Đầu</option>
												<option value="17">Hẹp Bao Quy Đầu</option>
												<option value="18">Hôi Nách</option>
												<option value="19">Viêm Bao Quy Đầu</option>
												<option value="25">Thuốc và sức khỏe</option>
												<option value="28">Sùi Mào Gà</option>
												<option value="29">Bệnh Lậu</option>
												<option value="30">Bệnh Giang Mai</option>
												<option value="31">Chính Sách Giá</option>
												<option value="32">Mụn Rộp Sinh Dục</option>
												<option value="34">Bệnh trĩ</option>
												<option value="35">U xơ cổ tử cung</option>
												<option value="36">Tuyến Tiền Liệt</option>
												<option value="37">Xuất Tinh Sớm</option>
												<option value="38">Yếu Sinh Lý</option>
												<option value="39">Kinh Nguyệt Không Đều</option>
												<option value="41">Phục Hồi Tầng Sinh Môn</option>
									        </select>
									    </div>
						                <div class="form-group">
						                	<label for="DH-noidung">Nội dung:</label>
						                	<textarea class="form-control" name="noidung" id="DH-noidung" placeholder="Nội dung mà bạn khám"></textarea>
						               	</div>
		             				</form>
		           				</div>
		          				<div id="id_email" class="tab-pane fade">
		           					<form id="frm-gui-tin-nhan-email" action="http://phongkhamapollo.com/DangKyKham/Luu_email_tinnhan" method="post" style="margin:0px 20px;">
		             					<div class="form-group" id="show-email">
		               						<label for="DH-email">Email:</label>
		               						<input type="text" class="form-control" name="email" id="DH-email" placeholder="Email của bạn">
		             					</div>
			          					<div class="form-group">
			            					<label class="control-label" for="name">Chọn khoa :</label> 
			            					<select class="form-control" name="khoa" id="khoa">
			            						<option value="4">Trĩ Nội</option>
												<option value="5">Trĩ Ngoại</option>
												<option value="7">Viêm Phụ Khoa</option>
												<option value="8">Viêm Âm Đạo</option>
												<option value="9">Viêm Vùng Chậu</option>
												<option value="10">Bệnh Cổ Tử Cung</option>
												<option value="11">Hiếm Muộn</option>
												<option value="13">Phá Thai Ngoại Khoa</option>
												<option value="14">Phá Thai Bằng Thuốc</option>
												<option value="15">Hậu Môn Trực Tràng</option>
												<option value="16">Dài Bao Quy Đầu</option>
												<option value="17">Hẹp Bao Quy Đầu</option>
												<option value="18">Hôi Nách</option>
												<option value="19">Viêm Bao Quy Đầu</option>
												<option value="25">Thuốc và sức khỏe</option>
												<option value="28">Sùi Mào Gà</option>
												<option value="29">Bệnh Lậu</option>
												<option value="30">Bệnh Giang Mai</option>
												<option value="31">Chính Sách Giá</option>
												<option value="32">Mụn Rộp Sinh Dục</option>
												<option value="34">Bệnh trĩ</option>
												<option value="35">U xơ cổ tử cung</option>
												<option value="36">Tuyến Tiền Liệt</option>
												<option value="37">Xuất Tinh Sớm</option>
												<option value="38">Yếu Sinh Lý</option>
												<option value="39">Kinh Nguyệt Không Đều</option>
												<option value="41">Phục Hồi Tầng Sinh Môn</option>
			          						</select>     
			          					</div>
				             			<div class="form-group">
							            	<label for="DH-noidung">Nội dung:</label>
							            	<textarea class="form-control" name="noidung" id="DH-noidung" placeholder="Nội dung mà bạn khám"></textarea>
				             			</div>
		            				</form>
		          				</div>
		            		</div>
	        			</div>
	        		</div>
	        	</div>
		        <div class="modal-footer">
		        	<button type="button" class="btn btn-default" data-dismiss="modal">Đóng lại</button>
		        	<input type="submit" class="btn btn-primary" id="btn_gui_tin_nhan" value="Lưu lại"/>
		        </div>
	    	</div>
    	</div>
  	</div><!-- end pop up gui tin nhan -->
  	<script type="text/javascript" src="http://phongkhamapollo.com/public/assets/js/jquery-ui.js"></script>
    <script type='text/javascript' src='static/assets/js/jquery.nivo.slider.js'></script>
</body>
</html>