<?php 
	/*
	 * 設定 scrolldown 的形式 
	 * 0 無
	 * 1 一般圖檔 (loading.gif)
	 * 2 影格動畫 (loading_frame.svg) by js
	 * 3 影格動畫 (loading_frame.svg) by css
	 * 4 自訂動畫 by css
	 * 5 自訂畫線動畫 by svg
	*/
	$pageLoadingType = 1;

	/* 影格動畫的設定 (選2才要設定)
	 * 說明：
	 * frames:影格數
	 * playtime:動畫時間 (ex: 1s、500ms)
	 * w:一格影格 寬 (px)
	 * h:一格影格 高 (px)
	 * animateName:動畫名稱
	 *
	 * $pageLoadingFrameData='{"frames":30,"playtime":"1s","w":100,"h":100,"animateName":"pageLoading"}';
	 */
	$pageLoadingFrameData = '{"frames":8,"playtime":"800ms","w":100,"h":100,"animateName":"pageLoading"}';
?>



<?php //一般圖檔 ?>
<? if($pageLoadingType==1):?>
	<section class="pageLoading widget">
		<div class="">
			<img src="images/loading.gif">
		</div>
	</section>
<?php endif;?>



<?php //影格動畫(需製作連續圖) by js ?>
<? if($pageLoadingType==2):?>
	<section class="pageLoading widget">
		<div class="playFrame" 
			 data-playFrame="js" 
			 data-playFrameData='<?php echo $pageLoadingFrameData?>'>
			<img src="images/loading_frame.svg">
		</div>
	</section>
<?php endif?>



<?php //影格動畫(需製作連續圖) by css ?>
<? if($pageLoadingType==3):?>
	<section class="pageLoading widget">
		<div class="playFrame" data-playFrame="css"></div>
	</section>
<?php endif?>



<?php //自訂動畫 by css ?>
<? if($pageLoadingType==4):?>
	<section class="pageLoading widget">
		<div class="cssload-wrap">
			<div class="cssload-circle"></div>
			<div class="cssload-circle"></div>
			<div class="cssload-circle"></div>
			<div class="cssload-circle"></div>
			<div class="cssload-circle"></div>
			<div class="cssload-circle"></div>
			<div class="cssload-circle"></div>
			<div class="cssload-circle"></div>
			<div class="cssload-circle"></div>
			<div class="cssload-circle"></div>
			<div class="cssload-circle"></div>
			<div class="cssload-circle"></div>
			<div class="cssload-circle"></div>
			<div class="cssload-circle"></div>
			<div class="cssload-circle"></div>
			<div class="cssload-circle"></div>
			<div class="cssload-circle"></div>
			<div class="cssload-circle"></div>
			<div class="cssload-circle"></div>
			<div class="cssload-circle"></div>
			<div class="cssload-circle"></div>
			<div class="cssload-circle"></div>
			<div class="cssload-circle"></div>
			<div class="cssload-circle"></div>
			<div class="cssload-circle"></div>
			<div class="cssload-circle"></div>
			<div class="cssload-circle"></div>
			<div class="cssload-circle"></div>
			<div class="cssload-circle"></div>
			<div class="cssload-circle"></div>
		</div>
	</section>
<?php endif?>



<?php //自訂畫線動畫 by svg ?>
<? if($pageLoadingType==5):?>
	<section class="pageLoading widget">
		<svg version="1.1" id="åå±¤_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="321px" height="64.199px" viewBox="0 0 321 64.199" enable-background="new 0 0 321 64.199" xml:space="preserve" style="">
		<path fill="none" stroke="#A0A5A9" stroke-miterlimit="10" d="M171,18L164.7,7.8L164.4,7.3L163.8,7.3L159.5,7.3L158.5,7.3L
			158.5,8.3L158.5,25.3L152.1,8L151.9,7.4L151.2,7.4L146.8,7.4L146.1,7.4L145.8,8L138.401,27.5L137.9,28.9L139.3,28.9L143.6,28.9L
			144.3,28.9L144.5,28.2L145.8,24.5L151.7,24.5L152.9,28.2L153.1,28.9L153.8,28.9L158.2,28.9L158.3,28.9L159.3,28.9L163.3,28.9L
			164.3,28.9L164.3,27.9L164.3,18.3L170.6,28.4L170.9,28.9L171.5,28.9L175.8,28.9L176.8,28.9L176.8,27.9L176.8,8.3L176.8,7.3L
			175.8,7.3L171.8,7.3L170.8,7.3L170.8,8.3L170.8,18" class="NchvLEOJ_0"></path>
		<path fill="none" stroke="#A0A5A9" stroke-miterlimit="10" d="M133.1,17.6L130.7,8.1L130.5,7.3L129.7,7.3L125.7,7.3L
			124.9,7.3L124.7,8.1L122.3,17.5L120.1,8.1L119.9,7.3L119.1,7.3L114.8,7.3L114.5,7.3L113.5,7.3L109.2,7.3L108.2,7.3L108.2,8.3L
			108.2,25.3L101.7,8L101.5,7.3L100.8,7.3L96.4,7.3L95.7,7.3L95.5,8L88.1,27.5L87.6,28.9L89,28.9L93.3,28.9L94,28.9L94.2,28.2L
			95.5,24.5L101.4,24.5L102.6,28.2L102.8,28.9L103.5,28.9L107.9,28.9L108,28.9L109,28.9L113.3,28.9L114.3,28.9L114.3,27.9L114.3,10.6L
			118.9,28L119.1,28.7L119.9,28.7L124.2,28.7L125,28.7L125.2,27.9L127.5,18.5L129.8,27.9L130,28.7L130.8,28.7L135.1,28.7L135.9,28.7L
			136.1,28L141.3,8.5L141.6,7.2L140.5,7.2L136.3,7.2L135.5,7.2L135.3,8L133.1,17.6" class="NchvLEOJ_1"></path>
		<path fill="none" stroke="#A0A5A9" stroke-miterlimit="10" d="M74.8,12.9L75.8,12.9L80.6,12.9L80.6,27.8L80.6,28.8L
			81.6,28.8L85.9,28.8L86.9,28.8L86.9,27.8L86.9,12.9L91.7,12.9L92.7,12.9L92.7,11.9L92.7,8.3L92.7,7.3L91.7,7.3L75.8,7.3L74.8,7.3L
			74.8,8.3L74.8,11.9L74.8,12.9" class="NchvLEOJ_2"></path>
		<path fill="none" stroke="#A0A5A9" stroke-miterlimit="10" d="M19.5,37.4L19.5,37.4h6.102v8.7v0.3H8.902H7.901v1v8.5v1h1.001h40.398
			l0,0l0,0c0.102,0,11.301-1.101,11.401-15.3c0.1-14.301-11.301-15-11.5-15h-6.201v-8v-0.9h16.901h1v-1V8.4v-1h-1h-40.4l0,0l0,0
			C19.401,7.4,7.801,8.3,7.801,22.3C7.8,35.9,19.3,37.4,19.5,37.4L19.5,37.4" class="NchvLEOJ_3"></path>
		<path fill="none" stroke="#A0A5A9" stroke-miterlimit="10" d="M273.4,39.5V36v-1h-1h-15.9h-1v1v2.5c-1.6-2.5-4.501-4-8-4
			c-5.6,0-9.701,3.8-10.4,9.399v-8v-1h-1.001h-4.3h-1v1V48c0,2.5-0.7,3.199-3.001,3.199c-2.5,0-3-1.199-3-3.199V36v-1h-1.001h-4.299
			h-1.001v1v8.199c-0.5-5.702-4.201-9.199-9.801-9.199h-8.4h-1v1v19.5v1h1h8.4c5.6,0,9.301-3.601,9.801-9.399v1
			c0,5.699,3.3,8.8,9.3,8.8c5.9,0,9.301-3.2,9.301-8.8v-0.5c0.699,5.6,4.801,9.3,10.4,9.3c5.3,0,9.099-3.498,9.6-8.899l0.102-1.101
			h-1.102h-4.1h-0.9l-0.101,0.899c-0.2,1.303-0.8,3.5-3.4,3.5c-4,0-4.3-4.2-4.3-5.5c0-1.7,0.4-5.7,4.3-5.7
			c1.602,0,3.101,1.101,3.301,2.503l0.101,0.897h0.9h4.101h1.1l-0.101-1.099c-0.101-0.601-0.2-1.303-0.4-1.8l0,0h4.801v14.899v1h1.001
			h4.301h1v-1V40.5h4.8h0.5c-0.7,1.5-1,3.302-1,5.202c0,6.5,4.3,11.098,10.6,11.098c5.9,0,10.102-4.098,10.5-10.098V55.3v1.002h1.002
			h4.301h1V55.3v-6.598h3.301c1.499,0,2,0.399,2.299,2.098c0.102,0.5,0.102,1.002,0.102,1.5c0.101,1.2,0.199,2.402,0.601,3.399
			l0.301,0.601h0.699h4.299h1.9l-1.102-1.598c-0.5-0.702-0.6-2.402-0.6-3.402c0-0.197,0-0.5,0-0.697
			c-0.103-2.103-0.8-3.601-1.801-4.601c1.399-1.099,2.1-2.8,2.1-4.899c0-3.7-2.8-6.399-6.699-6.399h-10.501h-1v1.002v8.8
			c-0.398-6.103-4.6-10.3-10.5-10.3C278.4,34.497,275.2,36.4,273.4,39.5" class="NchvLEOJ_4"></path>
		<path fill="none" stroke="#A0A5A9" stroke-miterlimit="10" d="M159.6,41.7c-0.8-4.3-4.5-7.202-9.3-7.202
			c-5.898,0-10.101,4.202-10.501,10.301v-8.801v-1h-1h-4.3h-1.001v1v19.5v1h1.001h4.3h1v-1v-8.699c0.4,6,4.603,10.103,10.501,10.103
			c4.699,0,8.2-2.7,9.3-7.101c1.4,4.3,5.102,7.101,10,7.101c5.9,0,10.102-4.103,10.5-10.103v8.603v1h1h4h1v-1v-9.603l6.302,10.103
			l0.3,0.5h0.6h4.3h1v-1V35.999v-1h-1h-4H192.6v1V45.6l-6.299-10.2l-0.3-0.502H185.4h-4.2h-1.001V35.9v8.8
			c-0.4-6.103-4.602-10.3-10.5-10.3C164.7,34.497,161,37.298,159.6,41.7" class="NchvLEOJ_5"></path>
		<path fill="none" stroke="#A0A5A9" stroke-miterlimit="10" d="M84.2,51.5c-1.5,0-3.3-0.5-3.3-2.601v-1h-1h-4.103h-1v1
			c0,2.101,0.699,3.897,2,5.3c1.7,1.7,4.2,2.601,7.3,2.601c4.4,0,7.602-1.8,8.7-4.8v3.3v1h1h14.7h1.001v-1v-3.598V50.7h-1.001h-9.5V48
			h8.4h1.001v-1v-3.3v-1h-1.001h-8.4v-2.2h9.301h1v-1.003v-3.5v-1h-1H93.698h-1.001v1V47.3c-1.2-3.101-4.699-3.899-5.899-4.199h-0.2
			l-0.399-0.104c-4.4-1.098-4.601-1.298-4.601-1.896c0-1.104,1.5-1.2,1.899-1.2c2.299,0,2.8,0.8,2.8,2l0.101,0.897h0.899h4.2h1.001v-1
			c0-4.5-3.4-7.301-8.8-7.301c-4.101,0-8.3,2.402-8.3,6.902c0,4.8,4.398,5.897,6.501,6.5c0.398,0.098,0.898,0.199,1.3,0.3
			c2.3,0.599,3.8,1,3.8,1.897C87,51.4,84.9,51.5,84.2,51.5" class="NchvLEOJ_6"></path>
		<path fill="none" stroke="#A0A5A9" stroke-miterlimit="10" d="M121.1,46.2L117.5,35.6L117.3,34.9L116.6,34.9L110.6,34.9L
			109.6,34.9L109.6,35.9L109.6,55.4L109.6,56.4L110.6,56.4L114.6,56.4L115.6,56.4L115.6,55.4L115.6,47.5L118.5,55.7L118.7,56.4L
			119.4,56.4L122.7,56.4L123.4,56.4L123.6,55.7L126.5,47.4L126.5,55.4L126.5,56.4L127.5,56.4L131.5,56.4L132.5,56.4L132.5,55.4L
			132.5,36L132.5,35L131.5,35L125.5,35L124.8,35L124.6,35.7L121.1,46.2" class="NchvLEOJ_7"></path>
		<path fill="none" stroke="#A0A5A9" stroke-miterlimit="10" d="M36.25,17.7L36.25,18.6L36.25,29.2L27.35,18.2L26.95,17.7L
			36.25,17.7" class="NchvLEOJ_8"></path>
		<path fill="none" stroke="#A0A5A9" stroke-miterlimit="10" d="M25.55,17.7v1.2v8.3h-6.1c-0.5-0.199-2.602-1.1-2.602-4.699
			c0-3.399,2.102-4.5,2.699-4.7h6" class="NchvLEOJ_9"></path>
		<path fill="none" stroke="#A0A5A9" stroke-miterlimit="10" d="M37.5,34.4v10.897V46.3h1h4.6h1v-1.002v-8.5h5.602
			c0.501,0.103,2.9,1.002,2.9,4.603c0,4.098-2.502,4.897-2.9,5.098h-21L37.5,34.4" class="NchvLEOJ_10"></path>
		<path fill="none" stroke="#A0A5A9" stroke-miterlimit="10" d="M150.3,40.1c1.602,0,3.102,1.1,3.302,2.5l0.101,0.899h0.899h4.102h0.5
			c-0.1,0.699-0.201,1.5-0.201,2.3c0,0.399,0,0.8,0,1.2h-0.2h-4.101h-0.9l-0.1,0.899c-0.2,1.3-0.8,3.5-3.4,3.5c-4,0-4.3-4.202-4.3-5.5
			C146,44.1,146.4,40.1,150.3,40.1" class="NchvLEOJ_11"></path>
		<path fill="none" stroke="#A0A5A9" stroke-miterlimit="10" d="M320.5,0L68,0L0.5,0L0.5,64.2L68,64.2L320.5,64.2Z" class="NchvLEOJ_12"></path>
		<path fill="none" stroke="#A0A5A9" stroke-miterlimit="10" d="M148.9,13.1L148.9,13.1L146.3,20.2L151.3,20.2Z" class="NchvLEOJ_13"></path>
		<path fill="none" stroke="#A0A5A9" stroke-miterlimit="10" d="M98.6,13.1L98.6,13.1L96,20.2L101,20.2Z" class="NchvLEOJ_14"></path>
		<path fill="none" stroke="#A0A5A9" stroke-miterlimit="10" d="M282.4,39.1c-3.803,0-5.302,3.3-5.302,6.699c0,3.2,1.4,6.5,5.302,6.5
			c3.898,0,5.3-3.3,5.3-6.5C287.7,42.4,286.3,39.1,282.4,39.1L282.4,39.1z" class="NchvLEOJ_15"></path>
		<path fill="none" stroke="#A0A5A9" stroke-miterlimit="10" d="M169.5,39.1c-3.8,0-5.3,3.3-5.3,6.699c0,3.2,1.399,6.5,5.3,6.5
			s5.301-3.3,5.301-6.5C174.8,42.4,173.4,39.1,169.5,39.1L169.5,39.1z" class="NchvLEOJ_16"></path>
		<path fill="none" stroke="#A0A5A9" stroke-miterlimit="10" d="M302.9,39.298h-4.7v5.5h4.7c1.898,0,2.898-0.801,2.898-2.801
			C305.9,40.1,304.8,39.298,302.9,39.298L302.9,39.298z" class="NchvLEOJ_17"></path>
		<path fill="none" stroke="#A0A5A9" stroke-miterlimit="10" d="M207.6,39.5h-3.1v12.3h3.8c2.501,0,4.901-1.5,4.901-5.803
			C213.2,42.1,211.9,39.5,207.6,39.5L207.6,39.5z" class="NchvLEOJ_18"></path>
		<style data-made-with="vivus-instant">.NchvLEOJ_0{stroke-dasharray:185 187;stroke-dashoffset:186;animation:NchvLEOJ_draw_0 4000ms ease-in-out 0ms infinite,NchvLEOJ_fade 4000ms linear 0ms infinite;}.NchvLEOJ_1{stroke-dasharray:257 259;stroke-dashoffset:258;animation:NchvLEOJ_draw_1 4000ms ease-in-out 0ms infinite,NchvLEOJ_fade 4000ms linear 0ms infinite;}.NchvLEOJ_2{stroke-dasharray:79 81;stroke-dashoffset:80;animation:NchvLEOJ_draw_2 4000ms ease-in-out 0ms infinite,NchvLEOJ_fade 4000ms linear 0ms infinite;}.NchvLEOJ_3{stroke-dasharray:254 256;stroke-dashoffset:255;animation:NchvLEOJ_draw_3 4000ms ease-in-out 0ms infinite,NchvLEOJ_fade 4000ms linear 0ms infinite;}.NchvLEOJ_4{stroke-dasharray:499 501;stroke-dashoffset:500;animation:NchvLEOJ_draw_4 4000ms ease-in-out 0ms infinite,NchvLEOJ_fade 4000ms linear 0ms infinite;}.NchvLEOJ_5{stroke-dasharray:282 284;stroke-dashoffset:283;animation:NchvLEOJ_draw_5 4000ms ease-in-out 0ms infinite,NchvLEOJ_fade 4000ms linear 0ms infinite;}.NchvLEOJ_6{stroke-dasharray:221 223;stroke-dashoffset:222;animation:NchvLEOJ_draw_6 4000ms ease-in-out 0ms infinite,NchvLEOJ_fade 4000ms linear 0ms infinite;}.NchvLEOJ_7{stroke-dasharray:136 138;stroke-dashoffset:137;animation:NchvLEOJ_draw_7 4000ms ease-in-out 0ms infinite,NchvLEOJ_fade 4000ms linear 0ms infinite;}.NchvLEOJ_8{stroke-dasharray:36 38;stroke-dashoffset:37;animation:NchvLEOJ_draw_8 4000ms ease-in-out 0ms infinite,NchvLEOJ_fade 4000ms linear 0ms infinite;}.NchvLEOJ_9{stroke-dasharray:34 36;stroke-dashoffset:35;animation:NchvLEOJ_draw_9 4000ms ease-in-out 0ms infinite,NchvLEOJ_fade 4000ms linear 0ms infinite;}.NchvLEOJ_10{stroke-dasharray:82 84;stroke-dashoffset:83;animation:NchvLEOJ_draw_10 4000ms ease-in-out 0ms infinite,NchvLEOJ_fade 4000ms linear 0ms infinite;}.NchvLEOJ_11{stroke-dasharray:42 44;stroke-dashoffset:43;animation:NchvLEOJ_draw_11 4000ms ease-in-out 0ms infinite,NchvLEOJ_fade 4000ms linear 0ms infinite;}.NchvLEOJ_12{stroke-dasharray:769 771;stroke-dashoffset:770;animation:NchvLEOJ_draw_12 4000ms ease-in-out 0ms infinite,NchvLEOJ_fade 4000ms linear 0ms infinite;}.NchvLEOJ_13{stroke-dasharray:21 23;stroke-dashoffset:22;animation:NchvLEOJ_draw_13 4000ms ease-in-out 0ms infinite,NchvLEOJ_fade 4000ms linear 0ms infinite;}.NchvLEOJ_14{stroke-dasharray:21 23;stroke-dashoffset:22;animation:NchvLEOJ_draw_14 4000ms ease-in-out 0ms infinite,NchvLEOJ_fade 4000ms linear 0ms infinite;}.NchvLEOJ_15{stroke-dasharray:39 41;stroke-dashoffset:40;animation:NchvLEOJ_draw_15 4000ms ease-in-out 0ms infinite,NchvLEOJ_fade 4000ms linear 0ms infinite;}.NchvLEOJ_16{stroke-dasharray:39 41;stroke-dashoffset:40;animation:NchvLEOJ_draw_16 4000ms ease-in-out 0ms infinite,NchvLEOJ_fade 4000ms linear 0ms infinite;}.NchvLEOJ_17{stroke-dasharray:25 27;stroke-dashoffset:26;animation:NchvLEOJ_draw_17 4000ms ease-in-out 0ms infinite,NchvLEOJ_fade 4000ms linear 0ms infinite;}.NchvLEOJ_18{stroke-dasharray:38 40;stroke-dashoffset:39;animation:NchvLEOJ_draw_18 4000ms ease-in-out 0ms infinite,NchvLEOJ_fade 4000ms linear 0ms infinite;}@keyframes NchvLEOJ_draw{100%{stroke-dashoffset:0;}}@keyframes NchvLEOJ_fade{0%{stroke-opacity:1;}87.5%{stroke-opacity:1;}100%{stroke-opacity:0;}}@keyframes NchvLEOJ_draw_0{0%{stroke-dashoffset: 186}33.333333333333336%{ stroke-dashoffset: 0;}100%{ stroke-dashoffset: 0;}}@keyframes NchvLEOJ_draw_1{0.9259259259259258%{stroke-dashoffset: 258}34.25925925925926%{ stroke-dashoffset: 0;}100%{ stroke-dashoffset: 0;}}@keyframes NchvLEOJ_draw_2{1.8518518518518516%{stroke-dashoffset: 80}35.18518518518519%{ stroke-dashoffset: 0;}100%{ stroke-dashoffset: 0;}}@keyframes NchvLEOJ_draw_3{2.777777777777778%{stroke-dashoffset: 255}36.111111111111114%{ stroke-dashoffset: 0;}100%{ stroke-dashoffset: 0;}}@keyframes NchvLEOJ_draw_4{3.7037037037037033%{stroke-dashoffset: 500}37.037037037037045%{ stroke-dashoffset: 0;}100%{ stroke-dashoffset: 0;}}@keyframes NchvLEOJ_draw_5{4.62962962962963%{stroke-dashoffset: 283}37.96296296296296%{ stroke-dashoffset: 0;}100%{ stroke-dashoffset: 0;}}@keyframes NchvLEOJ_draw_6{5.555555555555556%{stroke-dashoffset: 222}38.88888888888889%{ stroke-dashoffset: 0;}100%{ stroke-dashoffset: 0;}}@keyframes NchvLEOJ_draw_7{6.481481481481481%{stroke-dashoffset: 137}39.81481481481482%{ stroke-dashoffset: 0;}100%{ stroke-dashoffset: 0;}}@keyframes NchvLEOJ_draw_8{7.4074074074074066%{stroke-dashoffset: 37}40.74074074074075%{ stroke-dashoffset: 0;}100%{ stroke-dashoffset: 0;}}@keyframes NchvLEOJ_draw_9{8.333333333333334%{stroke-dashoffset: 35}41.66666666666667%{ stroke-dashoffset: 0;}100%{ stroke-dashoffset: 0;}}@keyframes NchvLEOJ_draw_10{9.25925925925926%{stroke-dashoffset: 83}42.592592592592595%{ stroke-dashoffset: 0;}100%{ stroke-dashoffset: 0;}}@keyframes NchvLEOJ_draw_11{10.185185185185185%{stroke-dashoffset: 43}43.518518518518526%{ stroke-dashoffset: 0;}100%{ stroke-dashoffset: 0;}}@keyframes NchvLEOJ_draw_12{11.111111111111112%{stroke-dashoffset: 770}44.44444444444445%{ stroke-dashoffset: 0;}100%{ stroke-dashoffset: 0;}}@keyframes NchvLEOJ_draw_13{12.037037037037038%{stroke-dashoffset: 22}45.37037037037038%{ stroke-dashoffset: 0;}100%{ stroke-dashoffset: 0;}}@keyframes NchvLEOJ_draw_14{12.962962962962962%{stroke-dashoffset: 22}46.2962962962963%{ stroke-dashoffset: 0;}100%{ stroke-dashoffset: 0;}}@keyframes NchvLEOJ_draw_15{13.88888888888889%{stroke-dashoffset: 40}47.22222222222223%{ stroke-dashoffset: 0;}100%{ stroke-dashoffset: 0;}}@keyframes NchvLEOJ_draw_16{14.814814814814813%{stroke-dashoffset: 40}48.14814814814815%{ stroke-dashoffset: 0;}100%{ stroke-dashoffset: 0;}}@keyframes NchvLEOJ_draw_17{15.74074074074074%{stroke-dashoffset: 26}49.074074074074076%{ stroke-dashoffset: 0;}100%{ stroke-dashoffset: 0;}}@keyframes NchvLEOJ_draw_18{16.666666666666668%{stroke-dashoffset: 39}50.000000000000014%{ stroke-dashoffset: 0;}100%{ stroke-dashoffset: 0;}}</style></svg>
		<img class="svgCover" src="images/loading.svg">
	</section>
<?php endif?>