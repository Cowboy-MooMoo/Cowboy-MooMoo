<section class="books4Area">

	<div class="pagefloatL">
		<img src="images/floatL.png" class="scrollMove" data-scrollmove='{"moveDistance":150,"moveto":"bottom"}'>
	</div>

	<div class="pagefloatR1">
		<img src="images/floatR1.png" class="scrollMove" data-scrollmove='{"moveDistance":200,"moveto":"top"}'>
	</div>

	<div class="pagefloatR2">
		<img src="images/floatR2.png" class="scrollMove" data-scrollmove='{"moveDistance":150,"moveto":"top"}'>
	</div>

	<section class="topmenu">
		<div class="container">
			<div class="menuWidth text-center">
				<a href="books1.php">
					<i class="fa lob-lobsang" aria-hidden="true"></i>
					關於書蟲房
				</a>
				<a href="books2.php">
					<i class="fa lob-lobsang" aria-hidden="true"></i>
					店內特色
				</a>
				<a href="news.php">
					<i class="fa lob-lobsang" aria-hidden="true"></i>
					媒體報導
				</a>
				<a href="books3.php">
					<i class="fa lob-lobsang" aria-hidden="true"></i>
					交通資訊
				</a>
				<a class="active" href="books4.php">
					<i class="fa lob-lobsang" aria-hidden="true"></i>
					藏書搜尋
				</a>
			</div>
		</div>
	</section>

	<div class="pageTitle text-center">
		<span>藏書搜尋</span>
	</div>

	<section class="slogan">
		<div class="container">
			<div class="sloganText text-center">
				<p>我們的書籍都是經過篩選有生活美學、設計、文化、創意、美術、民藝、</p>
				<p>繪本、旅行、攝影、園藝類為主，</p>
				<p>希望提供客人在享受書房溫馨的氣息時，</p>
				<p>也能閱讀有別於市面上的書籍種類來豐富心靈，</p>
				<p>藉此將閱讀的樂趣透過有形的書籍與無形的氣氛傳遞到每位客人的心坎裡。</p>
				<img class="sloganImgL" src="images/books4_01.png">
				<img class="sloganImgR" src="images/books4_02.png">
			</div>
		</div>
	</section>

	<div class="container">
		<section class="tableFilter">
			<div class="row">
				<div class="filterItem col-12 col-sm-5">
					<form action="" method="post">
						<div class="formItem">
							<label>分類</label>
							<select name="category">
								<option value="">請選擇</option>
								<option value="分類1">分類1</option>
								<option value="分類2">分類2</option>
							</select>
							<div class="btnType1_2 submit">
								<a href="javascript:void(0)">
									<i class="fa fa-search" aria-hidden="true"></i>
									送出搜尋
									<input type="submit" name="submit" value="送出搜尋">
								</a>
							</div>
						</div>
					</form>
				</div>
				<div class="filterItem col-12 col-sm-7">
					<form action="" method="post">
						<div class="formItem">
							<label>關鍵字</label>
							<select name="category">
								<option value="">請選擇</option>
								<option value="書名">書名</option>
								<option value="作者">作者</option>
								<option value="出版社">出版社</option>
							</select>
							<input type="text" name="book" placeholder="請輸入查詢關鍵字">
							<div class="btnType1_2 submit">
								<a href="javascript:void(0)">
									<i class="fa fa-search" aria-hidden="true"></i>
									送出搜尋
									<input type="submit" name="submit" value="送出搜尋">
								</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>

		<section class="tableBooks">
			<table id="booksList" class="display" style="width:100%">
				<thead>
				    <tr>
				    	<th>書名</th>
				    	<th>分類</th>
				    	<th>作者</th>
				    	<th>出版社</th>
				    </tr>
				</thead>
				<tbody>
					<tr>
						<td>台灣文化志 上中下 (修訂版/3冊合售)</td>
						<td>羅布森 樓梯旁童書</td>
						<td>伊能嘉矩</td>
						<td>台灣書房出版有限公司</td>
					</tr>
					<tr>
						<td>夜之屋</td>
						<td>羅布森 樓梯旁童書</td>
						<td>P. C. Cast;Kristin Cast</td>
						<td>大塊文化出版股份有限公司</td>
					</tr>
					<tr>
						<td>人人都需要一顆石頭</td>
						<td>羅布森 樓梯旁童書</td>
						<td>伊能嘉矩</td>
						<td>大塊文化出版股份有限公司</td>
					</tr>
					<tr>
						<td>八仙山林場史話</td>
						<td>羅布森 樓梯旁童書</td>
						<td>P. C. Cast;Kristin Cast</td>
						<td>台灣書房出版有限公司</td>
					</tr>
					<tr>
						<td>聖物廕福興</td>
						<td>-</td>
						<td>-</td>
						<td>-</td>
					</tr>
					<tr>
						<td>台灣文化志 上中下 (修訂版/3冊合售)</td>
						<td>羅布森 樓梯旁童書</td>
						<td>伊能嘉矩</td>
						<td>台灣書房出版有限公司</td>
					</tr>
					<tr>
						<td>夜之屋</td>
						<td>羅布森 樓梯旁童書</td>
						<td>P. C. Cast;Kristin Cast</td>
						<td>大塊文化出版股份有限公司</td>
					</tr>
					<tr>
						<td>人人都需要一顆石頭</td>
						<td>羅布森 樓梯旁童書</td>
						<td>伊能嘉矩</td>
						<td>大塊文化出版股份有限公司</td>
					</tr>
					<tr>
						<td>八仙山林場史話</td>
						<td>羅布森 樓梯旁童書</td>
						<td>P. C. Cast;Kristin Cast</td>
						<td>台灣書房出版有限公司</td>
					</tr>
					<tr>
						<td>聖物廕福興</td>
						<td>-</td>
						<td>-</td>
						<td>-</td>
					</tr>
					<tr>
						<td>台灣文化志 上中下 (修訂版/3冊合售)</td>
						<td>羅布森 樓梯旁童書</td>
						<td>伊能嘉矩</td>
						<td>台灣書房出版有限公司</td>
					</tr>
					<tr>
						<td>夜之屋</td>
						<td>羅布森 樓梯旁童書</td>
						<td>P. C. Cast;Kristin Cast</td>
						<td>大塊文化出版股份有限公司</td>
					</tr>
					<tr>
						<td>人人都需要一顆石頭</td>
						<td>羅布森 樓梯旁童書</td>
						<td>伊能嘉矩</td>
						<td>大塊文化出版股份有限公司</td>
					</tr>
					<tr>
						<td>八仙山林場史話</td>
						<td>羅布森 樓梯旁童書</td>
						<td>P. C. Cast;Kristin Cast</td>
						<td>台灣書房出版有限公司</td>
					</tr>
					<tr>
						<td>聖物廕福興</td>
						<td>-</td>
						<td>-</td>
						<td>-</td>
					</tr>
				</tbody>
			</table>
		</section>
	</div>
</section>



<?php include('view/books/books_bottom.php');?>