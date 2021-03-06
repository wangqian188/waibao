<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>晟业传奇</title>
		<link rel="icon" href="__PUBLIC__/imgs/home/title_img.png" type="image/x-icon"/>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/home/book.css" />
		<link rel="stylesheet" href="__PUBLIC__/css/home/ft-carousel.css" />
		<link rel="stylesheet" href="__PUBLIC__/css/home/indebottom.css" />
		<link rel="stylesheet" href="__PUBLIC__/css/home/aboutus.css" />
		<link rel="stylesheet" href="__PUBLIC__/css/home/newcenter.css" />
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/home/layui.css" />

	</head>
	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
		}
		/* 当展现页面的宽度大于1400px时的样式。 */
		@media screen and (min-width: 1400px) {
			.example {
				width: 100%;
				height: 563px;
				font-size: 40px;
				text-align: center;
				background-color: #464576;
			}
			.carousel-item {
				color: #fff;
				font-family: Arial Black;
			}
			.ft-carousel .carousel-indicators span {
				width: 33px;
				height: 7px;
				margin-left: 13px;
			}
			.ft-carousel .carousel-indicators {
				bottom: 48px;
			}
			img {
				border: none;
				width: 100%;
				height: 563px;
				float: left;
			}
			
			/* 分页器 */
			.layui-laypage a, .layui-laypage span{font-size: 18px;}
			.layui-laypage .layui-laypage-curr .layui-laypage-em{background-color:#10337a;}
		}

		/* 当展现页面的宽度大于1000px且小于1400px时，的样式。 */
		@media screen and (min-width: 100px) and (max-width: 1400px) {
			.example {
				width: 100%;
				height: 319px;
				font-size: 28px;
				text-align: center;
				background-color: #464576;
			}
			.carousel-item {
				color: #fff;
				font-family: Arial Black;
			}
			.ft-carousel .carousel-indicators span {
				width: 23px;
				height: 5px;
				margin-left: 9px;
			}
			.ft-carousel .carousel-indicators {
				bottom: 34px;
			}
			img {
				border: none;
				width: 328px;
				height: 319px;
				float: left;
			}
			
			/* 分页器 */
			.layui-laypage a, .layui-laypage span{font-size: 12px;}
			.layui-laypage .layui-laypage-curr .layui-laypage-em{background-color:#10337a;}
			
		}
	</style>
	<body>
		<!--页面的头部-->
		<div class="wang">
			<div class="larger yitechsiflex">
				<div class="yezlager">
					<div class="thewenti shouxiao"></div>
				</div>
				<div class="yezhukaoyou yitechsiflex shangxiaceter">
					<ul>
						<li>首页</li>
						<li class="gywme">关于我们</li>
						<li class="xzyancsecs">新闻中心</li>
						<li class="">客户案例</li>
						<li class="">服务技术</li>
						<li class="">联系我们</li>
					</ul>
				</div>
			</div>

		</div>

		<!--轮播图-->
		<div class="example">
			<div class="ft-carousel" id="carousel_1">
				<ul class="carousel-inner">
					<li class="carousel-item"><img src="__PUBLIC__/imgs/home/shoyue/homePagelunb.png" /></li>
					<li class="carousel-item"><img src="__PUBLIC__/imgs/home/shoyue/homePagelunb.png" /></li>
					<li class="carousel-item"><img src="__PUBLIC__/imgs/home/shoyue/homePagelunb.png" /></li>
					<li class="carousel-item"><img src="__PUBLIC__/imgs/home/shoyue/homePagelunb.png" /></li>
					<li class="carousel-item"><img src="__PUBLIC__/imgs/home/shoyue/homePagelunb.png" /></li>
				</ul>
			</div>
		</div>

		<!-- 主体关于我们 -->
		<!-- 企业文化 -->
		<div class="qiweh">
			<div class="wanglawge">
				<div class="gywidth">
					<div class="hsoyyedispa shouedisbetween">
						<div class="hsoyyedispa shoyedisali">
							<span class="qinamwzsy"></span>
							<span class="aleftwzsy">
								<span class="hsoyyedispa abuswzsy">网站首页</span>
								<span class="abuswzsy">HOME</span>
							</span>
							<span class="jiantouimg"></span>
							<span class="qinamqywh"></span>
							<span class="aleftwzsy">
								<span class="hsoyyedispa abuswzsy jqqiye">新闻中心</span>
								<span class="abuswzsy jqceter">CENTER</span>
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="wanglawge">
				<div class="gywidth">
					<div class="today">
						<div class="ywgongsinew"><span>TODAY'S</span> INFORMATION </div>
						<div class="hsoyyedispa bottombterw">
							<div class="ywgongsinew">公司新闻...</div>
							<div class="ywgongsinew">2018/7/9 星期一</div>
						</div>
					</div>
					<div class="necetlanse"></div>
					<div class="yiwesswg hsoyyedispa">
						<div class="imgyesss"></div>
						<div class="newcenmarle">
							<div class="xghnw">香港或将免费分配5G高频频谱 以占据发展优势</div>
							<div class="liaangnwe">JIANGSU MOBILE 5G TECHNOLOGY SHOWS A NEW PICTURE OF THE INTELLIGENT SOCIETY</div>
							<div class="nhzbnew">《南华早报》报道，政府提议为运营商分配4100MHz的26GHz和28GHz频谱，如果需求低于供应量的75％。香港商务及经济发展局局长邱腾华表示，分配免费频谱将大大降低成本，缩短运营商推出5G网络所需的时间。邱腾华在宣布这项提议时指出，他已得出结论，鉴于高频频谱的供应充足，无需再进行拍卖。确保及时部署5G也将有助于推出更多的物联网、智能城市和其他技术应用，支持政府的智慧城市抱负。</div>
							<div class="hsoyyedispa mwctzbio">
								<div class="hsoyyedispa">
									<div class="nwctzb"></div>
									<div class="shjriq">2018/07/9</div>
								</div>
								<div class="hsoyyedispa ermalnwct">
									<div class="nwctxxx"></div>
									<div class="shjriq"><span class="">CHN TIMES</span> 发表</div>
								</div>
								<div class="hsoyyedispa ermalnwct">
									<div class="nwctxl"></div>
									<div class="shjriq"><span class="">9999</span> 浏览</div>
								</div>
							</div>
						</div>
					</div>
					<div class="xinwentptop hsoyyedispa">
						<div class="jsxdnwctleft">
							<div class="xghnw">江苏移动5G技术展现智能社会新图景</div>
							<div class="liaangnwe">JIANGSU MOBILE 5G TECHNOLOGY SHOWS A NEW PICTURE OF THE INTELLIGENT SOCIETY</div>
							<div class="nhzbnew">目前，江苏移动已选取位于苏州工业园区范围内的连续广覆盖的典型宏站场景，包括主干道，办公楼宇、住宅小区、不同材质的建筑楼宇等场景，建设了7个实验站点，同时联合爱立信完成5G硬件设备和组网的关键性能和能力指标，例如覆盖、网络吞吐量、时延的验证。当前，5G实验室下载速率单用户可达1.4Gb/s。
</div>
							<div class="hsoyyedispa mwctzbio">
								<div class="hsoyyedispa">
									<div class="nwctzb"></div>
									<div class="shjriq">2018/07/9</div>
								</div>
								<div class="hsoyyedispa ermalnwct">
									<div class="nwctxxx"></div>
									<div class="shjriq"><span class="">CHN TIMES</span> 发表</div>
								</div>
								<div class="hsoyyedispa ermalnwct">
									<div class="nwctxl"></div>
									<div class="shjriq"><span class="">9999</span> 浏览</div>
								</div>
							</div>
						</div>
						<div class="nwctremwuimg"></div>
					</div>
					<div class="feinwcttop hsoyyedispa bottomdisjust">
						<div id="demo1"></div>
					</div>
					<div class="today htxxnwcttop hsoyyedispa bottombterw">
						<div class="">
							<div class="ywgongsinew"><span>TODAY'S</span> INFORMATION </div>
							<div class="ywgongsinew">行业新闻...</div>
						</div>
						<div class="hsoyyedispa">
							<div class="qqbnwct">998</div>
							<div class="hsoyyedispa bottomdisalie">
								<div class="">
									<div class="gjtnwct">共计/条</div>
									<div class="totalnwct">TOTAL</div>
								</div>
							</div>
						</div>
					</div>
					<div class="necetlanse heyxinbancmwct"></div>
					<div class="hsoyyedispa anfqdsjcs bottombterw">
						<div class="hsoyyedispa">
							<div class="diannimg"></div>
							<div class="hgzxmmaleg">
								<div class="dsjpd">安防企业大数据布局盘点 你服哪个？</div>
								<div class="liaangnwe linherjaang">JIANGSU MOBILE 5G TECHNOLOGY SHOWS A NEW PICTURE OF THE INTELLIGENT SOCIETY</div>
								<div class="hsoyyedispa">
									<span class="diantiaocs"></span>
									<span class="dianlyigestiaocs"></span>
								</div>
								<div class="smatripc">回顾这些年的发展，海康威视也一直走在往安防大数据发展的道路上。在2013年，海康威视推出了Smart IPC，引领行业风向标;在14年提出了Smart2.0监控理念，强调视频结构化信息提取和应用。而在15年，海康威视又提出了DT1.0，多维感知、可视物联，让大数据在安防行业有了清晰的发展方向。</div>
							</div>
						</div>
						<div class="">
							<div class="hsoyyedispa shizmartoper">
								<div class="nwctzb"></div>
								<div class="shjriq">2018/07/9</div>
							</div>
							<div class="hsoyyedispa xxmartoper">
								<div class="nwctxxx"></div>
								<div class="shjriq"><span class="">CHN TIMES</span> 发表</div>
							</div>
							<div class="hsoyyedispa xxmartoper">
								<div class="nwctxl"></div>
								<div class="shjriq"><span class="">9999</span> 浏览</div>
							</div>
						</div>
					</div>
					<div class="hsoyyedispa anfqdsjcs bottombterw sermartopwac">
						<div class="hsoyyedispa">
							<div class="diannimg dzy"></div>
							<div class="hgzxmmaleg">
								<div class="dsjpd">视频监控领跑安防产业 年均增长率12.4%</div>
								<div class="liaangnwe linherjaang">JIANGSU MOBILE 5G TECHNOLOGY SHOWS A NEW PICTURE OF THE INTELLIGENT SOCIETY</div>
								<div class="hsoyyedispa">
									<span class="diantiaocs"></span>
									<span class="dianlyigestiaocs"></span>
								</div>
								<div class="smatripc">据统计，目前全行业有27000家企业，安防厂商、经销商9400家，安防工程商、系统集成商14300家，报警运营服务商3300家，安防行业从业人员160万人。行业增长速度达到16%，其中，出入口控制方面增长15%，视频监控增长26%，楼宇对讲增长15%，防盗报警增长20%。</div>
							</div>
						</div>
						<div class="">
							<div class="hsoyyedispa shizmartoper">
								<div class="nwctzb"></div>
								<div class="shjriq">2018/07/9</div>
							</div>
							<div class="hsoyyedispa xxmartoper">
								<div class="nwctxxx"></div>
								<div class="shjriq"><span class="">CHN TIMES</span> 发表</div>
							</div>
							<div class="hsoyyedispa xxmartoper">
								<div class="nwctxl"></div>
								<div class="shjriq"><span class="">9999</span> 浏览</div>
							</div>
						</div>
					</div>
					<div class="hsoyyedispa anfqdsjcs bottombterw sermartopwac">
						<div class="hsoyyedispa">
							<div class="diannimg hkws"></div>
							<div class="hgzxmmaleg">
								<div class="dsjpd">江苏移动5G技术展现智能社会新图景</div>
								<div class="liaangnwe linherjaang">JIANGSU MOBILE 5G TECHNOLOGY SHOWS A NEW PICTURE OF THE INTELLIGENT SOCIETY</div>
								<div class="hsoyyedispa">
									<span class="diantiaocs"></span>
									<span class="dianlyigestiaocs"></span>
								</div>
								<div class="smatripc">目前，江苏移动已选取位于苏州工业园区范围内的连续广覆盖的典型宏站场景，包括主干道，办公楼宇、住宅小区、不同材质的建筑楼宇等场景，建设了7个实验站点，同时联合爱立信完成5G硬件设备和组网的关键性能和能力指标，例如覆盖、网络吞吐量、时延的验证。当前，5G实验室下载速率单用户可达1.4Gb/s。</div>
							</div>
						</div>
						<div class="">
							<div class="hsoyyedispa shizmartoper">
								<div class="nwctzb"></div>
								<div class="shjriq">2018/07/9</div>
							</div>
							<div class="hsoyyedispa xxmartoper">
								<div class="nwctxxx"></div>
								<div class="shjriq"><span class="">CHN TIMES</span> 发表</div>
							</div>
							<div class="hsoyyedispa xxmartoper">
								<div class="nwctxl"></div>
								<div class="shjriq"><span class="">9999</span> 浏览</div>
							</div>
						</div>
					</div>
					<div class="hsoyyedispa anfqdsjcs bottombterw sermartopwac">
						<div class="hsoyyedispa">
							<div class="diannimg dsj"></div>
							<div class="hgzxmmaleg">
								<div class="dsjpd">AI时代 如何借助人工智能保障校园安全</div>
								<div class="liaangnwe linherjaang">JIANGSU MOBILE 5G TECHNOLOGY SHOWS A NEW PICTURE OF THE INTELLIGENT SOCIETY</div>
								<div class="hsoyyedispa">
									<span class="diantiaocs"></span>
									<span class="dianlyigestiaocs"></span>
								</div>
								<div class="smatripc">人脸识别系统利用摄像机采集含有人脸的图像，并自动在图像中检测和跟踪人脸，进而对检测到的人脸进行脸部的一系列相关技术处理，从而达到识别不同人的身份的目的，主要过程包括：人脸检测。系统根据眼睛、眉毛、嘴巴、鼻子等器官的特征以及相互之间的几何位置关系来检测人脸，即在一副图像或一序列图像(比如视频)中判断是否有人脸，若有，则返回人脸的大小、位置等信息；人脸图像预处理。</div>
							</div>
						</div>
						<div class="">
							<div class="hsoyyedispa shizmartoper">
								<div class="nwctzb"></div>
								<div class="shjriq">2018/07/9</div>
							</div>
							<div class="hsoyyedispa xxmartoper">
								<div class="nwctxxx"></div>
								<div class="shjriq"><span class="">CHN TIMES</span> 发表</div>
							</div>
							<div class="hsoyyedispa xxmartoper">
								<div class="nwctxl"></div>
								<div class="shjriq"><span class="">9999</span> 浏览</div>
							</div>
						</div>
					</div>
					<div class="hsoyyedispa anfqdsjcs bottombterw sermartopwac">
						<div class="hsoyyedispa">
							<div class="diannimg rgzn"></div>
							<div class="hgzxmmaleg">
								<div class="dsjpd">视频监控系统等技防设施走进校园，平安校园近在咫尺</div>
								<div class="liaangnwe linherjaang">JIANGSU MOBILE 5G TECHNOLOGY SHOWS A NEW PICTURE OF THE INTELLIGENT SOCIETY</div>
								<div class="hsoyyedispa">
									<span class="diantiaocs"></span>
									<span class="dianlyigestiaocs"></span>
								</div>
								<div class="smatripc">近两年，不少校园欺凌事件总是见诸报端，其中还有一些性质相当恶劣的案件。其实在世界的各个国家，每天都会发生校园欺凌的事件，在日本，校园欺凌已经变成了一个严重的社会问题，每年有许多学生自杀，并衍生了一个独特的现象“不登校”。</div>
							</div>
						</div>
						<div class="">
							<div class="hsoyyedispa shizmartoper">
								<div class="nwctzb"></div>
								<div class="shjriq">2018/07/9</div>
							</div>
							<div class="hsoyyedispa xxmartoper">
								<div class="nwctxxx"></div>
								<div class="shjriq"><span class="">CHN TIMES</span> 发表</div>
							</div>
							<div class="hsoyyedispa xxmartoper">
								<div class="nwctxl"></div>
								<div class="shjriq"><span class="">9999</span> 浏览</div>
							</div>
						</div>
					</div>
					<div class="erfeiwtop hsoyyedispa bottomdisjust">
						<div id="demo2"></div>
					</div>
					
					
				</div>
			</div>
		</div>


		<!-- 页面的底部 -->
		<div class="bottomposrela usbottommartop usbottommartopdeta newctbotmartop">
			<div class="wanglawge">
				<div class="gywidth hsoyyedispa">
					<div class="bottomimgdi bottomposrela"></div>
				</div>
			</div>
			<div class="uswomwaibottpm bottomposabso">
				<div class="wanglawge">
					<div class="gywidth hsoyyedispa">
						<div class="lixwomnsss">
							<div class="hsoyyedispa ingcetemartuo">
								<div class="abusmartoplixiwm">
									<div class="hsoyyedispa">
										<div class="diabootnhtp"></div>
										<div class="botmdianshuzi">400-888-8888</div>
									</div>
									<div class="hsoyyedispa ibgbotwaiceimg">
										<div class="igmbotdizhi"></div>
										<div class="botmdianshuzi">河南省郑州市管城区城南路182号</div>
									</div>
									<div class="hsoyyedispa ibgbotwaiceimg">
										<div class="igmbotaite"></div>
										<div class="botmdianshuzi">SYCQ88888@163.com SYCQ88888@163.com</div>
									</div>
								</div>
								<div class="bottomdisjust botmlxwomen">
									<div class="hsoyyedispa">
										<div class="botmlxwomenus">联系我们</div>
										<div class="uslxwomendiandia"></div>
									</div>
									<div class="usthernew">THE NEWS CENTER</div>
									<div class="ushsxian"></div>
								</div>
								<div class="bottomdisjust">
									<div class="userweima"></div>
									<div class="usshouce hsoyyedispa">
										<div class="botmussc"></div>
										<div class="botmuwebo"></div>
										<div class="botmuwexin"></div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="uswomenxiang"></div>
				<div class="wanglawge">
					<div class="uscoprigcss">COPYRIGHT 2018-2020版权所有晟业传奇实业有限公司</div>
				</div>
			</div>
		</div>


	</body>
</html>
<script src="__PUBLIC__/js/home/jquery.min.js"></script>
<script src="__PUBLIC__/js/home/ft-carousel.min.js"></script>
<script src="__PUBLIC__/js/home/layui.all.js"></script>

<script type="text/javascript">
	$("#carousel_1").FtCarousel();
	layui.use(['laypage', 'layer'], function(){
		var laypage = layui.laypage
		,layer = layui.layer;
		//自定义首页、尾页、上一页、下一页文本
		laypage.render({
			elem: 'demo1'
			,count: 100
			,first: '首页'
			,last: '尾页'
			,prev: "<em><div class='hsoyyedispa bottomdisalie fenxeqianwaice'><div class='fenxeqiandouring'></div>PREVIOUS</div></em>"
			,next: "<em><div class='hsoyyedispa bottomdisalie fenxeqianwaice'>NEXTPAGE<div class='fenxeqiandouzuob'></div></div></em>"
		});
		//自定义首页、尾页、上一页、下一页文本
		laypage.render({
			elem: 'demo2'
			,count: 100
			,first: '首页'
			,last: '尾页'
			,prev: "<em><div class='hsoyyedispa bottomdisalie fenxeqianwaice'><div class='fenxeqiandouring'></div>PREVIOUS</div></em>"
			,next: "<em><div class='hsoyyedispa bottomdisalie fenxeqianwaice'>NEXTPAGE<div class='fenxeqiandouzuob'></div></div></em>"
		});
	});
	$(".thewenti").on("click", function() {
		window.location.href="__APP__/Index/index";
	});
	var tzhu = $(".yezhukaoyou ul li");
	$(".yezhukaoyou ul li").on("click", function() {
		var index = $(this).index();
		for(var i=0;i<tzhu.length;i++){
			if(index == 0){
				window.location.href="__APP__/Index/index";
			}
			if(index == 1){
				window.location.href="__APP__/Index/aboutus";
			}
			if(index == 2){
				window.location.href="__APP__/Contactus/newcenter";
			}
			if(index == 3){
				window.location.href="__APP__/Contactus/customercase";
			}
			if(index == 4){
				window.location.href="__APP__/Contactus/servicetech";
			}
			if(index == 5){
				window.location.href="__APP__/Contactus/index";
			}
		}
	});
</script>