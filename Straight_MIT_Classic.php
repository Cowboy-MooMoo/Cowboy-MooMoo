<!DOCTYPE html>
<html lang="zh-Hant-TW">

	<head>

	    <?php include('head.php');?>

	    <!-- Open Graph Meta Data -->
	    <meta property="og:site_name" content="羅布森樓梯升降椅">
	    <meta property="og:title" content="頁面標題">
	    <meta property="og:description" content="頁面介紹">
	    <meta property="og:image" content="網站圖片">
	    <meta property="og:type" content="website">
	    <meta property="og:url" content="網址">

	    <?php include('view/css.php');?>

	</head>

	<?php 
		$page = 'products';
		include('viewConfig.php');
	?>

  	<body class="<?php echo $page;?>">
		
	    <?php include('view/header/header'.$headerType.'.php');?>
	    <?php include('view/banner/banner'.$bannerType.'.php');?>
		<?php include('view/products/Straight_MIT_Classic.php');?>
	    <?php include('view/footer/footer'.$footerType.'.php');?>
	    <?php include('view/widget/pageLoading.php');?>
	    <?php include('view/widget/gotop.php');?>
	    <?php include('view/end.php');?>

  	</body>

</html>