<?php if($page == 'home'):?>
<section class="banner bannerType2">

	<div class="slickBanner">
		<div class="slick-video">
			<div id="videoBanner">
				<div id="customVideo" class="player" data-property="{
					videoURL: 'https://www.youtube.com/watch?v=fSH-yJJiZOs',
					containment: '#videoBanner',
					autoplay: false,
					optimizeDisplay: true,
					stopMovieOnBlur: false,
					showControls: false,
					mute: true,
					startAt: 0,
					loop: false,
					opacity: 1,
					addRaster: true,
					quality: 'default'
				}"></div>

				<img class="video_hover" src="images/indexBanner_txt.png">

				<a class="video_cover" href="javascript:void(0)" target="_blank"></a>
			</div>
		</div>
		<div>
			<a href="javascript:void(0)">
				<img class="pc1" src="images/indexBanner_bg.jpg">
				<img class="pc2" src="images/indexBanner_txt.png">
				<img class="mb" src="images/indexBanner_mb.jpg">
			</a>
		</div>
		<div>
			<a href="javascript:void(0)">
				<img class="pc1" src="images/indexBanner_bg.jpg">
				<img class="pc2" src="images/indexBanner_txt.png">
				<img class="mb" src="images/indexBanner_mb.jpg">
			</a>
		</div>
	</div>
	
	<div class="scrollDown part1" data-playFrame="css">
		<div><img src="images/scrolldown1.svg"></div>
	</div>

	<div class="scrollDown part2" data-playFrame="css">
		<div><img src="images/scrolldown2.svg"></div>
	</div>

</section>
<?php endif?>



<?php if($page == 'overview'):?>
<section class="banner bannerType2">

	<?php //include('view/breadcrumb.php');?>

	<div class="breadcrumb">
		<ul>
			<li>
				<a href="index.php">首頁</a>
			</li>
			<li>
				<a href="javascript:void(0)">關於我們</a>
			</li>
			<li>
				<a href="ovreview.php">公司簡介</a>
			</li>
		</ul>
	</div>

	<div class="slickBanner">
		<div>
			<img class="pc1" src="images/banner_overview.png">
			<img class="mb" src="images/banner_overview_mb.png">
		</div>
	</div>

</section>
<?php endif?>



<?php if($page == 'belief'):?>
<section class="banner bannerType2">

	<?php //include('view/breadcrumb.php');?>

	<div class="breadcrumb">
		<ul>
			<li>
				<a href="index.php">首頁</a>
			</li>
			<li>
				<a href="javascript:void(0)">關於我們</a>
			</li>
			<li>
				<a href="belief.php">企業理念</a>
			</li>
		</ul>
	</div>

	<div class="slickBanner">
		<div>
			<img class="pc1" src="images/banner_belief.png">
			<img class="mb" src="images/banner_belief_mb.png">
		</div>
	</div>

</section>
<?php endif?>



<?php if($page == 'series'):?>
<section class="banner bannerType2">

	<?php //include('view/breadcrumb.php');?>

	<div class="breadcrumb">
		<ul>
			<li>
				<a href="index.php">首頁</a>
			</li>
			<li>
				<a href="javascript:void(0)">關於我們</a>
			</li>
			<li>
				<a href="series.php">台灣森情系列</a>
			</li>
		</ul>
	</div>

	<div class="slickBanner">
		<div>
			<img class="pc1" src="images/banner_series.png">
			<img class="mb" src="images/banner_series_mb.png">
		</div>
	</div>

</section>
<?php endif?>



<?php if($page == 'fortythree'):?>
<section class="banner bannerType2">

	<?php //include('view/breadcrumb.php');?>

	<div class="breadcrumb">
		<ul>
			<li>
				<a href="index.php">首頁</a>
			</li>
			<li>
				<a href="javascript:void(0)">關於我們</a>
			</li>
			<li>
				<a href="fortythree.php">四十三疏木誌系列</a>
			</li>
		</ul>
	</div>

	<div class="slickBanner">
		<div>
			<img class="pc1" src="images/banner_fortythree.png">
			<img class="mb" src="images/banner_fortythree_mb.png">
		</div>
	</div>

</section>
<?php endif?>



<?php if($page == 'advantage'):?>
<section class="banner bannerType2">

	<?php //include('view/breadcrumb.php');?>

	<div class="breadcrumb">
		<ul>
			<li>
				<a href="index.php">首頁</a>
			</li>
			<li>
				<a href="productsAdvantage.php">產品優勢</a>
			</li>
		</ul>
	</div>

	<div class="slickBanner">
		<div>
			<img class="pc1" src="images/banner_advantage.png">
			<img class="mb" src="images/banner_advantage_mb.png">
		</div>
	</div>

</section>
<?php endif?>



<?php if($page == 'news'):?>
<section class="banner bannerType2">

	<?php //include('view/breadcrumb.php');?>

	<div class="breadcrumb">
		<ul>
			<li>
				<a href="index.php">首頁</a>
			</li>
			<li>
				<a href="javascript:void(0)">媒體資訊</a>
			</li>
			<li>
				<a href="news.php">媒體報導</a>
			</li>
		</ul>
	</div>

	<div class="slickBanner">
		<div>
			<img class="pc1" src="images/banner_news.png">
			<img class="mb" src="images/banner_news_mb.png">
		</div>
	</div>

</section>
<?php endif?>



<?php if($page == 'comments'):?>
<section class="banner bannerType2">

	<?php //include('view/breadcrumb.php');?>

	<div class="breadcrumb">
		<ul>
			<li>
				<a href="index.php">首頁</a>
			</li>
			<li>
				<a href="comments.php">客戶實績</a>
			</li>
		</ul>
	</div>

	<div class="slickBanner">
		<div>
			<img class="pc1" src="images/banner_comments.png">
			<img class="mb" src="images/banner_comments_mb.png">
		</div>
	</div>

</section>
<?php endif?>



<?php if($page == 'guide'):?>
<section class="banner bannerType2">

	<?php //include('view/breadcrumb.php');?>

	<div class="breadcrumb">
		<ul>
			<li>
				<a href="index.php">首頁</a>
			</li>
			<li>
				<a href="guide.php">選購指南</a>
			</li>
		</ul>
	</div>

	<div class="slickBanner">
		<div>
			<img class="pc1" src="images/banner_guide.png">
			<img class="mb" src="images/banner_guide_mb.png">
		</div>
	</div>

</section>
<?php endif?>



<?php if($page == 'location'):?>
<section class="banner bannerType2">

	<?php //include('view/breadcrumb.php');?>

	<div class="breadcrumb">
		<ul>
			<li>
				<a href="index.php">首頁</a>
			</li>
			<li>
				<a href="javascript:void(0)">全台體驗</a>
			</li>
			<li>
				<a href="location1.php">全台地區</a>
			</li>
		</ul>
	</div>

	<div class="slickBanner">
		<div>
			<img class="pc1" src="images/banner_location.png">
			<img class="mb" src="images/banner_location_mb.png">
		</div>
	</div>

</section>
<?php endif?>



<?php if($page == 'contact'):?>
<section class="banner bannerType2">

	<?php //include('view/breadcrumb.php');?>

	<div class="breadcrumb">
		<ul>
			<li>
				<a href="index.php">首頁</a>
			</li>
			<li>
				<a href="contact.php">聯絡我們</a>
			</li>
		</ul>
	</div>

	<div class="slickBanner">
		<div>
			<img class="pc1" src="images/banner_contact.png">
			<img class="mb" src="images/banner_contact_mb.png">
		</div>
	</div>

</section>
<?php endif?>



<?php if($page == 'books'):?>
<section class="banner bannerType2">

	<?php //include('view/breadcrumb.php');?>

	<div class="breadcrumb">
		<ul>
			<li>
				<a href="index.php">首頁</a>
			</li>
			<li>
				<a href="javascript:void(0)">羅布森書蟲房</a>
			</li>
			<li>
				<a href="books1.php">關於書蟲房</a>
			</li>
		</ul>
	</div>

	<div class="slickBanner">
		<div>
			<img class="pc1" src="images/banner_books.png">
			<img class="mb" src="images/banner_books_mb.png">
		</div>
	</div>

</section>
<?php endif?>