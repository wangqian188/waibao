<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>晟业传奇</title><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/home/book.css" /><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/home/hongmepage.css" /><link rel="stylesheet" href="__PUBLIC__/css/home/ft-carousel.css" /><link rel="stylesheet" href="__PUBLIC__/css/home/indebottom.css" /></head><style type="text/css">		/* 当展现页面的宽度大于1400px时的样式。 */
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

			* {
				margin: 0;
				padding: 0;
			}

			/*想要图片出现重叠的效果*/
			.content {
				width: 645px;
				height: 538px;
			}

			.list {
				width: 645px;
				height: 538px;
				overflow: hidden;
				/*溢出的隐藏掉，默认的是：内容不会被修剪，会呈现在元素框之外。*/
				position: absolute;
				/*left: 50%;*/
				/*margin-left: -600px;*/
			}

			.list li {
				list-style: none;
				position: absolute;
				/*一定要设置这个*/
				top: 0;
				left: 0;
				/*opacity: 0;*/
				transition: all 0.3s ease-out;
			}

			img {
				border: none;
				width: 100%;
				height: 563px;
				float: left;
			}

			.p5 {
				transform: translate3d(-372px, 0, 0) scale(0.81);
				transform-origin: 100% 25%;
				opacity: 0.3;
				z-index: 2;
			}

			.p4 {
				transform: translate3d(91px, 0, 0) scale(1);
				z-index: 3;
				opacity: 1;
			}

			.p3 {
				transform: translate3d(372px, 0, 0) scale(0.81);
				transform-origin: 100% 25%;
				/*改变基准的*/
				opacity: 0.3;
				z-index: 2;
			}

			.p2 {
				transform: translate3d(672px, 0, 0) scale(0.81);
			}

			.p1 {
				transform: translate3d(896px, 0, 0) scale(0.81);
			}

			.pre {
				left: 224px;
			}

			.next {
				right: 224px;
			}

			.button {
				position: absolute;
				top: 91%;
				text-decoration: none;
				font-size: 36px;
				color: #ffffff;
				z-index: 5;
				width: 43px;
				height: 43px;
				text-align: center;
				background-color: #2691fd;
				line-height: 43px;
			}

			a:active {
				color: #000;
				opacity: 0.5;
			}

			.buttons {
				position: absolute;
				width: 1200px;
				height: 30px;
				top: 50%;
				left: 50%;
				margin-top: -15px;
				margin-left: -600px;
				text-align: center;
			}

			.buttons a {
				display: inline-block;
				width: 35px;
				height: 5px;
				padding-top: 4px;
				cursor: pointer;
			}

			span {
				width: 35px;
				height: 1px;
				background: red;
				display: block;
			}

			.blue {
				background: blue;
			}
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

			/*想要图片出现重叠的效果*/
			.content {
				width: 458px;
				height: 381px;
			}

			.list {
				width: 458px;
				height: 381px;
				overflow: hidden;
				/*溢出的隐藏掉，默认的是：内容不会被修剪，会呈现在元素框之外。*/
				position: absolute;
				/*left: 50%;*/
				/*margin-left: -600px;*/
			}

			.list li {
				list-style: none;
				position: absolute;
				/*一定要设置这个*/
				top: 0;
				left: 0;
				/*opacity: 0;*/
				transition: all 0.3s ease-out;
			}

			img {
				border: none;
				width: 328px;
				height: 319px;
				float: left;
			}

			.p5 {
				transform: translate3d(-264px, 0, 0) scale(0.81);
				transform-origin: 100% 25%;
				opacity: 0.3;
				z-index: 2;
			}

			.p4 {
				transform: translate3d(64px, 0, 0) scale(1);
				z-index: 3;
				opacity: 1;
			}

			.p3 {
				transform: translate3d(264px, 0, 0) scale(0.81);
				transform-origin: 100% 25%;
				/*改变基准的*/
				opacity: 0.3;
				z-index: 2;
			}

			.p2 {
				transform: translate3d(477px, 0, 0) scale(0.81);
			}

			.p1 {
				transform: translate3d(636px, 0, 0) scale(0.81);
			}

			.pre {
				left: 159px;
			}

			.next {
				right: 161px;
			}

			.button {
				position: absolute;
				top: 91%;
				text-decoration: none;
				font-size: 25px;
				color: #ffffff;
				z-index: 5;
				width: 30px;
				height: 30px;
				text-align: center;
				background-color: #2691fd;
				line-height: 30px;
			}

			a:active {
				color: #000;
				opacity: 0.5;
			}

			.buttons {
				position: absolute;
				width: 852px;
				height: 21px;
				top: 50%;
				left: 50%;
				margin-top: -10px;
				margin-left: -426px;
				text-align: center;
			}

			.buttons a {
				display: inline-block;
				width: 24px;
				height: 3px;
				padding-top: 2px;
				cursor: pointer;
			}

			span {
				width: 24px;
				height: 1px;
				background: red;
				display: block;
			}

			.blue {
				background: blue;
			}
		}
	</style><body><!--页面的头部--><div class="wang"><div class="larger yitechsiflex"><div class="yezlager"><div class="thewenti"></div></div><div class="yezhukaoyou yitechsiflex shangxiaceter"><ul><li>首页</li><li class="gywme">关于我们</li><li>新闻中心</li><li>客户案例</li><li>服务技术</li><li>联系我们</li></ul></div></div></div><!--轮播图--><div class="example"><div class="ft-carousel" id="carousel_1"><ul class="carousel-inner"><li class="carousel-item"><img src="__PUBLIC__/imgs/home/shoyue/homePagelunb.png" /></li><li class="carousel-item"><img src="__PUBLIC__/imgs/home/shoyue/homePagelunb.png" /></li><li class="carousel-item"><img src="__PUBLIC__/imgs/home/shoyue/homePagelunb.png" /></li><li class="carousel-item"><img src="__PUBLIC__/imgs/home/shoyue/homePagelunb.png" /></li><li class="carousel-item"><img src="__PUBLIC__/imgs/home/shoyue/homePagelunb.png" /></li></ul></div></div><!-- 主体 --><!-- 企业简介 --><div class="wanglawge gsmartop"><div class="gongsyes"></div></div><div class="wanglawge gsgzlcmartop"><div class="gywidth hsoyyedispa"><div class="content"><div class="list"><ul><li class="p5"><a href="javascript:;"><img src="__PUBLIC__/imgs/home/shoyue/1.jpg" alt=""></a></li><li class="p4"><a href="javascript:;"><img src="__PUBLIC__/imgs/home/shoyue/2.jpg" alt=""></a></li><li class="p3"><a href="javascript:;"><img src="__PUBLIC__/imgs/home/shoyue/3.jpg" alt=""></a></li></ul><a href="javascript:;" class="pre button"><</a><a href="javascript:;" class="next button">></a></div></div><div class="dellich hsoyyedispa"><div class="hsoyyedispa shoyedisali"><div><div class="fzlc">发展历程</div><div class="fzlc">DEVELOPMENT HISTORY</div><div class="heyechq">河南晟业传奇实业有限公司位于河南省郑州市管城区城南路182号8号楼A座1单元15号，公司成立于2005年6月，注册资金1000万元。拥有一支高素质，技术精湛的专业化团体，我公司是以信息产业发展为主，集工、贸为一体的股份制私营高科技企业，成立至今一直致力于计算机网络、软件开发、系统集成的研发、服务及市场开发。公司在经营管理始终以ISO9001质量要求为准，建立了一套完整的质量管理和质量保证标准，并不断努力深化自我改革。公司被省公安厅评为安防二级资质，并成为河南省安全防范技术协会常任会员。</div></div></div></div></div></div><div class="wanglawge gsmartop"><div class="hyxingwe"></div></div><div class="wanglawge gsgzlcmartop"><div class="gywidth vivo"><div class="hsoyyedispa shouedisbetween"><div class="hsoyyedispa"><span class="longiyo"><span class="lyxiak hsoyyedispa shoyedisali shoyedisjsscon">01</span><span class="zuoshaj"></span></span><span class="vivozit shybanmccos"><span class="vvdata shybanmccos">2018-06-29</span><span class="nxttt shybanmccos shoyuyefonw">vivo NEX镜头突然弹出,并未拍摄收集用户隐私</span><span class="lyebxx shybanmccos">6月28日消息，国产智能手机厂商vivo，在本月上旬推出了搭载升降前置镜头设计的新品旗舰手机vivo NEX，引发了广泛关注。</span></span></div><div class="hsoyyedispa"><span class="longiyo"><span class="lyxiak hsoyyedispa shoyedisali shoyedisjsscon lerbacoe">02</span></span><span class="ercssvivozit shybanmccos"><span class="vvdata shybanmccos sjjtime">2018-06-29</span><span class="nxttt shybanmccos eryscss shoyuyefonw">百度诉前员工跳槽今日头条违约，被劳动仲裁委驳回</span><span class="lyebxx shybanmccos">6月28日消息，国产智能手机厂商vivo，在本月上旬推出了搭载升降前置镜头设计的新品旗舰手机vivo NEX，引发了广泛关注。</span></span></div></div><div class="hsoyyedispa shouedisbetween sanmartop"><div class="hsoyyedispa"><span class="longiyo"><span class="lyxiak hsoyyedispa shoyedisali shoyedisjsscon lerbacoe">03</span></span><span class="ercssvivozit shybanmccos"><span class="vvdata shybanmccos sjjtime">2018-06-29</span><span class="nxttt shybanmccos eryscss shoyuyefonw">百度诉前员工跳槽今日头条违约，被劳动仲裁委驳回</span><span class="lyebxx shybanmccos">6月28日消息，国产智能手机厂商vivo，在本月上旬推出了搭载升降前置镜头设计的新品旗舰手机vivo NEX，引发了广泛关注。</span></span></div><div class="hsoyyedispa"><span class="longiyo"><span class="lyxiak hsoyyedispa shoyedisali shoyedisjsscon lerbacoe">04</span></span><span class="ercssvivozit shybanmccos"><span class="vvdata shybanmccos sjjtime">2018-06-29</span><span class="nxttt shybanmccos eryscss shoyuyefonw">百度诉前员工跳槽今日头条违约，被劳动仲裁委驳回</span><span class="lyebxx shybanmccos">6月28日消息，国产智能手机厂商vivo，在本月上旬推出了搭载升降前置镜头设计的新品旗舰手机vivo NEX，引发了广泛关注。</span></span></div></div><div class="hsoyyedispa shouedisbetween sanmartop"><div class="hsoyyedispa"><span class="longiyo"><span class="lyxiak hsoyyedispa shoyedisali shoyedisjsscon lerbacoe">05</span></span><span class="ercssvivozit shybanmccos"><span class="vvdata shybanmccos sjjtime">2018-06-29</span><span class="nxttt shybanmccos eryscss shoyuyefonw">百度诉前员工跳槽今日头条违约，被劳动仲裁委驳回</span><span class="lyebxx shybanmccos">6月28日消息，国产智能手机厂商vivo，在本月上旬推出了搭载升降前置镜头设计的新品旗舰手机vivo NEX，引发了广泛关注。</span></span></div><div class="hsoyyedispa"><span class="longiyo"><span class="lyxiak hsoyyedispa shoyedisali shoyedisjsscon lerbacoe">06</span></span><span class="ercssvivozit shybanmccos"><span class="vvdata shybanmccos sjjtime">2018-06-29</span><span class="nxttt shybanmccos eryscss shoyuyefonw">百度诉前员工跳槽今日头条违约，被劳动仲裁委驳回</span><span class="lyebxx shybanmccos">6月28日消息，国产智能手机厂商vivo，在本月上旬推出了搭载升降前置镜头设计的新品旗舰手机vivo NEX，引发了广泛关注。</span></span></div></div></div></div><div class="wanglawge"><div class="sucwwcss"></div></div><div class="wanglawge"><div class="chananeryiy"></div></div><div class="wanglawge"><div class="ctertive"></div><div class="jrzhoncet"></div></div><div class="wanglawge"><div class="ingyise"></div><div class="huisecerten"></div></div><div class="wanglawge"><div class="yechdizhedejiac">河南晟业传奇实业有限公司位于河南省郑州市管城区城南路182号8号楼A座1单元15号，公司成立于2005年6月，注册资金1000万元。拥有一支高素质，技术精湛的专业化团体，我公司是以信息产业发展为主，集工、贸为一体的股份制私营高科技企业，成立至今一直致力于计算机网络、软件开发、系统集成的研发、服务及市场开发。</div></div><div class="wanglawge"><div class="zijidandediad">......</div></div><div class="wanglawge"><div class="yechdizhedejiac wenwenmartio">Henan Sheng industry legend Industrial Co., Ltd. is located in No. 8,
				block No. 15, block A, No. 8, No. 182, Chengnan Road, Zhengzhou City, Henan province. The company was founded in
				June 2005, and the registered capital is 10 million yuan. With a high-quality, skillful and professional group, our
				company is a joint-stock private high-tech enterprise with the development of the information industry and the
				integration of industry and trade. It has been committed to the research and development, service and market
				development of computer network, software development and system integration</div></div><div class="wanglawge"><div class="zijidandediad">......</div></div><div class="wanglawge"><div class="chasegd hsoyyedispa shoyedisali shoyedisjsscon">查看更多</div></div><div class="wanglawge"><div class="jishugdui"></div></div><div class="wanglawge jishmartop"><div class="gywidth hsoyyedispa"><div class="lijehui shoueposrela waimaleft yigedivmuhd"><div class="hsoyyedispa shoyedisjsscon"><span class="dingbu"></span></div><div class="hsoyyedispa shoyedisjsscon"><span class="touximg"></span></div><div class="hsoyyedispa shoyedisjsscon"><span class="lyhj shybanmccos">李军辉</span></div><div class="hsoyyedispa shoyedisjsscon"><span class="gcs shybanmccos">工程师</span></div><div class="hsoyyedispa shoyedisjsscon"><span class="shybanmccos husexian"></span></div><div class="hsoyyedispa shoyedisjsscon"><span class="shybanmccos zhunye">某某专业</span></div><div class="hsoyyedispa shoyedisjsscon secjgsba shouyeposabso">查看工程师</div></div><div class="lijehui shoueposrela waimaleft"><div class="hsoyyedispa shoyedisjsscon"><span class="dingbu ergebacks"></span></div><div class="hsoyyedispa shoyedisjsscon"><span class="touximg"></span></div><div class="hsoyyedispa shoyedisjsscon"><span class="lyhj shybanmccos">李军辉</span></div><div class="hsoyyedispa shoyedisjsscon"><span class="gcs shybanmccos">工程师</span></div><div class="hsoyyedispa shoyedisjsscon"><span class="shybanmccos husexian"></span></div><div class="hsoyyedispa shoyedisjsscon"><span class="shybanmccos zhunye">某某专业</span></div><div class="hsoyyedispa shoyedisjsscon secjgsba shouyeposabso ergebacks">查看工程师</div></div><div class="lijehui shoueposrela waimaleft"><div class="hsoyyedispa shoyedisjsscon"><span class="dingbu sangebacks"></span></div><div class="hsoyyedispa shoyedisjsscon"><span class="touximg"></span></div><div class="hsoyyedispa shoyedisjsscon"><span class="lyhj shybanmccos">李军辉</span></div><div class="hsoyyedispa shoyedisjsscon"><span class="gcs shybanmccos">工程师</span></div><div class="hsoyyedispa shoyedisjsscon"><span class="shybanmccos husexian"></span></div><div class="hsoyyedispa shoyedisjsscon"><span class="shybanmccos zhunye">某某专业</span></div><div class="hsoyyedispa shoyedisjsscon secjgsba shouyeposabso sangebacks">查看工程师</div></div><div class="lijehui shoueposrela waimaleft"><div class="hsoyyedispa shoyedisjsscon"><span class="dingbu sigebacks"></span></div><div class="hsoyyedispa shoyedisjsscon"><span class="touximg"></span></div><div class="hsoyyedispa shoyedisjsscon"><span class="lyhj shybanmccos">李军辉</span></div><div class="hsoyyedispa shoyedisjsscon"><span class="gcs shybanmccos">工程师</span></div><div class="hsoyyedispa shoyedisjsscon"><span class="shybanmccos husexian"></span></div><div class="hsoyyedispa shoyedisjsscon"><span class="shybanmccos zhunye">某某专业</span></div><div class="hsoyyedispa shoyedisjsscon secjgsba shouyeposabso sigebacks">查看工程师</div></div><div class="lijehui shoueposrela waimaleft"><div class="hsoyyedispa shoyedisjsscon"><span class="dingbu ergebacks"></span></div><div class="hsoyyedispa shoyedisjsscon"><span class="touximg"></span></div><div class="hsoyyedispa shoyedisjsscon"><span class="lyhj shybanmccos">李军辉</span></div><div class="hsoyyedispa shoyedisjsscon"><span class="gcs shybanmccos">工程师</span></div><div class="hsoyyedispa shoyedisjsscon"><span class="shybanmccos husexian"></span></div><div class="hsoyyedispa shoyedisjsscon"><span class="shybanmccos zhunye">某某专业</span></div><div class="hsoyyedispa shoyedisjsscon secjgsba shouyeposabso ergebacks">查看工程师</div></div></div></div><div class="wanglawge"><div class="hezuoqiye"></div></div><div class="wanglawge jishmartop"><div class="gywidth shoueydisbloack"><div class="hsoyyedispa"><span class="kubabo spanmaleft"></span><span class="kubabo spanmaleft"></span><span class="kubabo spanmaleft"></span><span class="kubabo spanmaleft"></span><span class="kubabo spanmaleft"></span></div><div class="hsoyyedispa erspanmaleft"><span class="kubabo"></span><span class="kubabo"></span><span class="kubabo"></span><span class="kubabo"></span><span class="kubabo"></span></div><div class="hsoyyedispa sanspanmaleft"><span class="kubabo"></span><span class="kubabo"></span><span class="kubabo"></span><span class="kubabo"></span><span class="kubabo"></span></div></div></div><div class="wanglawge"><div class="gywomen"></div></div><div class="wanglawge"><div class="anfkylij martipanfkli">安防，可以理解为“安全防范”的缩略词。根据现在汉语词典的解释，所谓安全，</div></div><div class="wanglawge"><div class="anfkylij inglisstjie">就是没有危险、不受侵害、不出事故；</div></div><div class="wanglawge"><div class="anfkylij inglisstjie">所谓防范，就是防备、戒备，而防备是指作好准备以应付攻击或避免受害，</div></div><div class="wanglawge"><div class="anfkylij inglisstjie">戒备是指防备和保护。综合上述解释，可以给安全防范下如下定义：做好准备和保护，以应付攻击或者避免受害，</div></div><div class="wanglawge"><div class="anfkylij inglisstjie">从而使被保护对象处于没有危险、不受侵害、不出现事故的安全状态。</div></div><div class="wanglawge"><div class="anfkylij inglisstjie">显而易见，安全是目的，防范是手段，通过防范的手段达到或实现安全的目的，就是安全防范的基本内涵。</div></div><div class="wanglawge"><div class="zijidandediad diandiamrtop">......</div></div><div class="wanglawge"><div class="anfkylij ywnemartop">Security can be understood as an abbreviation for "safety precautions". According
				to the explanation of the present Chinese dictionary, it is called safety.</div></div><div class="wanglawge"><div class="anfkylij inglisstjie">There is no danger, no violation and no accidents.</div></div><div class="wanglawge"><div class="anfkylij inglisstjie">Prevention is preparedness and preparedness, and preparedness means preparation
				for dealing with attacks or avoiding victimization.</div></div><div class="wanglawge"><div class="anfkylij inglisstjie">Preparedness refers to preparedness and protection. With the above explanation,
				security precautions can be defined as: preparedness and protection to deal with attacks or avoid victimization.</div></div><div class="wanglawge"><div class="anfkylij inglisstjie">So that the protected object is in a safe state without danger, unencroachment and
				no accidents.</div></div><div class="wanglawge"><div class="anfkylij inglisstjie">Obviously, safety is the purpose, prevention is the means, and the purpose of
				achieving or achieving security through precautionary measures is the basic connotation of safety precaution.</div></div><!-- 页面的底部 --><div class="bottomposrela bottommartop"><div class="wanglawge"><div class="gywidth hsoyyedispa"><div class="bottomimgdi bottomposrela"></div></div></div><div class="waibottpm bottomposabso"><div class="wanglawge"><div class="gywidth hsoyyedispa"><div class="lixwomnsss"><div class="martoplixiwm">联系我们</div><div class="hsoyyedispa bottomdisjust"><div class="waimixingmig hsoyyedispa bottombterw martpname"><div><div class="hsoyyedispa"><span class="bottomname bottomccos wanglawge">姓名：</span><span class="botminput bottomccos"><input type="text" name="" id="" value="" /></span></div><div class="hsoyyedispa magintopphone"><span class="bottomname bottomccos wanglawge">电话：</span><span class="botminput bottomccos"><input type="text" name="" id="" value="" /></span></div></div><div class="bottomposrela"><span class="bottomccos liuyacss wanglawge bottomposabso">留言：</span><textarea class="csstextarea cssttarea"></textarea><span class="jiantoucss bottomposabso"></span></div></div></div></div></div></div><div class="wanglawge"><div class="botologcss"></div></div><div class="wanglawge"><div class="coprigcss">COPYRIGHT 2018-2020版权所有晟业传奇实业有限公司</div></div><div class="wanglawge"><div class="shangjianotu"></div></div></div></div></body></html><script src="__PUBLIC__/js/home/jquery.min.js"></script><script src="__PUBLIC__/js/home/ft-carousel.min.js"></script><script src="__PUBLIC__/js/home/imagePlayer.js"></script><script type="text/javascript">	$("#carousel_1").FtCarousel();

	$("#carousel_2").FtCarousel({
		index: 1,
		auto: false
	});

	$("#carousel_3").FtCarousel({
		index: 0,
		auto: true,
		time: 3000,
		indicators: false,
		buttons: true
	});
</script>