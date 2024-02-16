<header class="header headerType1">
	<div class="container-fluid">

		<div class="brandLogo">
			<a href="index.php">
				<img src="images/logo.svg">
			</a>
		</div>

		<div class="navBar">
			<!-- topLink -->
			<div class="topLink">
				<div class="topLinkContent">
					<ul class="topLinkMenu">
						<li>
							<a href="books1.php">
								<span>羅布森書蟲房</span>
							</a>
						</li>
						<li>
							<a href="guide.php">
								<span>選購指南</span>
							</a>
						</li>
						<li>
							<a href="contact.php">
								<span>聯絡我們</span>
							</a>
						</li>
						<li>
							<a href="tel:+0800331188">
								<i class="fa fa-phone" aria-hidden="true"></i>
								<span>0800-331188</span>
							</a>
						</li>
					</ul>
				</div>
			</div>

			<!-- navMenu -->
			<ul class="navMenu">
				<li class="moreMenu">
					<a href="javascript:void(0)">
						<span>關於我們</span>
					</a>
					<ul>
						<li><a href="overview.php">公司簡介</a></li>
						<li><a href="belief.php">企業理念</a></li>
						<li><a href="series.php">台灣森情系列</a></li>
						<li><a href="fortythree.php">四十三疏木誌系列</a></li>
					</ul>
				</li>
				<li class="moreMenu">
					<a href="javascript:void(0)">
						<span>產品介紹</span>
					</a>
					<ul>
						<li><a href="Curved_MIT_Wisdom.php">彎軌型</a></li>
						<li><a href="Straight_MIT_Classic.php">直線型</a></li>
						<li><a href="Other_Bishamon_Elevator.php">其他</a></li>
					</ul>
				</li>
				<li class="moreMenu special">
					<a href="javascript:void(0)">
						<span>樓型選擇</span>
					</a>
					<ul>
						<li>
							<a href="javascript:void(0)">
								<img src="images/stair01.svg">
								<p>直線到達型</p>
							</a>
						</li>
						<li>
							<a href="javascript:void(0)">
								<img src="images/stair02.svg">
								<p>直線緩升型</p>
							</a>
						</li>
						<li>
							<a href="javascript:void(0)">
								<img src="images/stair03.svg">
								<p>L型樓梯</p>
							</a>
						</li>
						<li>
							<a href="javascript:void(0)">
								<img src="images/stair04.svg">
								<p>ㄇ型樓梯</p>
							</a>
						</li>
						<li>
							<a href="javascript:void(0)">
								<img src="images/stair05.svg">
								<p>口字型樓梯</p>
							</a>
						</li>
						<li>
							<a href="javascript:void(0)">
								<img src="images/stair06.svg">
								<p>弧型樓梯</p>
							</a>
						</li>
						<li>
							<a href="javascript:void(0)">
								<img src="images/stair07.svg">
								<p>連續螺旋樓梯</p>
							</a>
						</li>
						<li>
							<a href="javascript:void(0)">
								<img src="images/stair08.svg">
								<p>其他類型</p>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="productsAdvantage.php">
						<span>產品優勢</span>
					</a>
				</li>
				<li class="moreMenu">
					<a href="javascript:void(0)">
						<span>媒體資訊</span>
					</a>
					<ul>
						<li><a href="news.php">書蟲房</a></li>
						<li><a href="news.php">媒體報導</a></li>
					</ul>
				</li>
				<li>
					<a href="comments.php">
						<span>客戶實績</span>
					</a>
				</li>
				<li class="moreMenu">
					<a href="javascript:void(0)">
						<span>全台體驗</span>
					</a>
					<ul>
						<li><a href="location1.php">全台地區</a></li>
						<li><a href="location2.php">北部地區</a></li>
						<li><a href="location3.php">中部地區</a></li>
						<li><a href="location4.php">南部地區</a></li>
						<li><a href="location5.php">東部地區</a></li>
					</ul>
				</li>
				<li class="moreMenu">
					<a href="javascript:void(0)">
						<span>社會企業</span>
					</a>
					<ul class="subMenu ">
						<li><a href="dutyList.php">公益活動</a></li>
						<li><a href="dutyList.php">演講採訪</a></li>
					</ul>
				</li>
			</ul>
		</div>

	</div>
</header>










<?php 
	$mbPanelMode = 'default';
?>

<? if($mbPanelMode=='default'): /* 靜態 */ ?>
	<div id="mbPanel" data-mbPanel="mbPanel_effect01" data-mbPanelMode="default">

		<div class="mbPanel_funNav navTop">
			<div class="mbPanel_content"> 
				
				<a href="tel:+0800331188">
					<i class="fa fa-phone" aria-hidden="true"></i>
				</a>
				<a href="index.php" class="brandLogo">
					<img src="images/logo.svg">
				</a>
				<a href="javascript:void(0)" class="showPanel" data-target="#mbPanel_navMenu">
					<i class="fa fa-bars" aria-hidden="true"></i>
				</a>
				
			</div>
		</div>

		<!-- <div class="mbPanel_funNav navBottom">
			<div class="mbPanel_content"> 

				<a href="javascript:void(0)" class="searchFormPop">
					<i class="fa fa-search" aria-hidden="true"></i>
					<span>搜尋</span>
				</a>
				<a href="javascript:void(0)" class="showPanel" data-target="#mbPanel_userPanel">
					<i class="fa fa-user" aria-hidden="true"></i>
					<span>會員中心</span>
				</a>
				<a href="javascript:void(0)" class="showPanel" data-target="#mbPanel_languages">
					<i class="fa fa-globe" aria-hidden="true"></i>
					<span>選擇語言</span>
				</a>

			</div>
		</div> -->
		
		<!-- 主選單 -->
		<div class="mbPanel_side mbPanel_left" id="mbPanel_navMenu">
			<div class="mbPanel_content">

				<ul class="panelMenu autoH">
					<li>
						<a href="javascript:void(0)" class="closePanel mainCloseBtn" data-target="#mbPanel_navMenu">主選單</a>
					</li>
					<li>
						<a href="javascript:void(0)" class="moreMenu">關於我們</a>
						<ul class="subMenu ">
							<li><a href="overview.php">公司簡介</a></li>
							<li><a href="belief.php">企業理念</a></li>
							<li><a href="series.php">台灣森情系列</a></li>
							<li><a href="fortythree.php">四十三疏木誌系列</a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0)" class="moreMenu">產品介紹</a>
						<ul class="subMenu ">
							<li>
								<a href="javascript:void(0)" class="moreMenu">彎軌型</a>
								<ul class="subMenu ">
									<li><a href="Curved_MIT_Wisdom.php">MIT智慧款</a></li>
									<li><a href="Curved_MIT_Classic.php">MIT經典款</a></li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0)" class="moreMenu">直線型</a>
								<ul class="subMenu ">
									<li><a href="Straight_MIT_Classic.php">MIT經典款</a></li>
									<li><a href="Straight_Bishamon_Hardcover.php">日本Bishamon精裝款</a></li>
									<li><a href="Straight_Bishamon_Outdoor.php">日本Bishamon戶外款</a></li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0)" class="moreMenu">其他</a>
								<ul class="subMenu ">
									<li><a href="Other_Bishamon_Elevator.php">日本Bishamon貨梯</a></li>
									<li><a href="Other_Bishamon_Lifting.php">日本Bishamon輪椅升降平台</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0)" class="moreMenu">樓型選擇</a>
						<ul class="subMenu ">
							<li><a href="javascript:void(0)">直線到達型</a></li>
							<li><a href="javascript:void(0)">直線緩升型</a></li>
							<li><a href="javascript:void(0)">L型樓梯</a></li>
							<li><a href="javascript:void(0)">ㄇ型樓梯</a></li>
							<li><a href="javascript:void(0)">口字型樓梯</a></li>
							<li><a href="javascript:void(0)">弧型樓梯</a></li>
							<li><a href="javascript:void(0)">連續螺旋樓梯</a></li>
							<li><a href="javascript:void(0)">其他類型</a></li>
						</ul>
					</li>
					<li>
						<a href="productsAdvantage.php">產品優勢</a>
					</li>
					<li>
						<a href="javascript:void(0)" class="moreMenu">媒體資訊</a>
						<ul class="subMenu ">
							<li><a href="news.php">書蟲房</a></li>
							<li><a href="news.php">媒體報導</a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0)" class="moreMenu">客戶實績</a>
						<ul class="subMenu ">
							<li><a href="comments.php">全部</a></li>
							<li><a href="comments.php">直線到達型</a></li>
							<li><a href="comments.php">直線緩升型</a></li>
							<li><a href="comments.php">L型樓梯</a></li>
							<li><a href="comments.php">ㄇ型樓梯</a></li>
							<li><a href="comments.php">口字型樓梯</a></li>
							<li><a href="comments.php">弧型樓梯</a></li>
							<li><a href="comments.php">連續螺旋樓梯</a></li>
							<li><a href="comments.php">銀行.機關行號.政府單位</a></li>
							<li><a href="comments.php">學校.教會.廟宇</a></li>
							<li><a href="comments.php">餐廳.飯店.民宿</a></li>
							<li><a href="comments.php">全國展示體驗據點</a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0)" class="moreMenu">全台體驗</a>
						<ul class="subMenu ">
							<li><a href="location1.php">全台地區</a></li>
							<li><a href="location2.php">北部地區</a></li>
							<li><a href="location3.php">中部地區</a></li>
							<li><a href="location4.php">南部地區</a></li>
							<li><a href="location5.php">東部地區</a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0)" class="moreMenu">社會企業</a>
						<ul class="subMenu ">
							<li><a href="dutyList.php">公益活動</a></li>
							<li><a href="dutyList.php">演講採訪</a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0)" class="moreMenu">羅布森書蟲房</a>
						<ul class="subMenu ">
							<li><a href="books1.php">關於書蟲房</a></li>
							<li><a href="books2.php">店內特色</a></li>
							<li><a href="news.php">媒體報導</a></li>
							<li><a href="books3.php">交通資訊</a></li>
							<li><a href="books4.php">藏書搜尋</a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0)" class="moreMenu">選購指南</a>
						<ul class="subMenu ">
							<li><a href="guide.php">所有問題</a></li>
							<li><a href="guide.php">環境、安裝方面</a></li>
							<li><a href="guide.php">使用、維護方面</a></li>
							<li><a href="guide.php">安裝、評估方法</a></li>
							<li><a href="guide.php">申請輔具補助辦法</a></li>
						</ul>
					</li>
					<li>
						<a href="contact.php">聯絡我們</a>
					</li>
				</ul>

			</div>
		</div>
		
	</div>

<? endif;?>