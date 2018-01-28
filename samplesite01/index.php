<?php include_once "header.php";?>

<div class="ImageSlide Section">
	<ul id="Slide" class="ImageSlide__main">
		<li class="ImageSlide__item js-slide-item"><a href=""><img src="./images/top/slide1.jpg" alt="" class="ImageSlide__image"></a></li>
		<li class="ImageSlide__item js-slide-item"><a href=""><img src="./images/top/slide2.jpg" alt="" class="ImageSlide__image"></a></li>
		<li class="ImageSlide__item js-slide-item"><a href=""><img src="./images/top/slide3.jpg" alt="" class="ImageSlide__image"></a></li>
	</ul>
	<div class="ImageSlide__sub">
		<span class="ImageSlide__dot js-slide-point">image1</span>
		<span class="ImageSlide__dot js-slide-point">image2</span>
		<span class="ImageSlide__dot js-slide-point">image3</span>
	</div>
</div>

<section class="l-column l-row Section">
	<div class="EntryPanel l-halfcolumn">
		<div class="EntryPanel__sub">
			<img class="EntryPanel__thumb" src="./images/top/entry1.jpg">
		</div>
		<div class="EntryPanel__main">
			<h3 class="EntryPanel__head">冬のコーヒーギフト</h3>
			<div class="EntryPanel__body">大切なあの方にありがとうを届けたい。心も体も温まるギフト。プレゼントキャンペーン実施中。!</div>
			<div class="EntryPanel__footer">
				<a href="#" class="button">read more</a>
			</div>
		</div>
	</div>

	<div class="EntryPanel l-halfcolumn">
		<div class="EntryPanel__sub">
			<img class="EntryPanel__thumb" src="./images/top/entry2.jpg">
		</div>

		<div class="EntryPanel__main">
			<h3 class="EntryPanel__head">あの人気店コラボメニュー</h3>
			<div class="EntryPanel__body">今話題の人気店、Macron Thingのパンケーキを使ったコラボ商品のセットメニューを販売中</div>
			<div class="EntryPanel__footer">
				<a href="#" class="button">read more</a>
			</div>
		</div>
	</div>

</section>

<section class="Section">
	<h2 class="sectionLabel l-column">Content</h2>
	<div class="l-row">
		<div class="l-halfTitle">
			<a href="#" class="OverPanel drink">
				<h3 class="OverPanel__head">Drink Menu</h3>
				<p class="OverPanel__body">定番メニューから、季節に合わせた商品まで品揃え豊富に取り揃えております。あなたのお気に入りを見つけましょう。</p>
			</a>
		</div>
		<div class="l-halfTitle">
			<a href="#" class="OverPanel food">
				<h3 class="OverPanel__head">Food Menu</h3>
				<p class="OverPanel__body">サンドイッチ、ケーキ、パスタ、当店自慢のコーヒーと一緒にどうぞ。</p>
			</a>
		</div>
	</div>
</section>

<div class="Section l-column">
	<div class="l-row">
		<a href="" class="IconPanle l-quaterColumn">
			<span class="IconPanle__icon"></span>
			<h3 class="IconPanle__head">こだわりの空間</h3>
			<p class="IconPanle__body">ランチからディナーまでいつでもリラックスして使えるくつろぎ空間。椅子や壁、細部にまでこだわっています。</p>
		</a>
		<a href="" class="IconPanle l-quaterColumn">
			<span class="IconPanle__icon"></span>
			<h3 class="IconPanle__head">豆へのこだわり</h3>
			<p class="IconPanle__body">原産地、豆の種類、焙煎方法のこだわりを紹介します。</p>
		</a>
		<a href="" class="IconPanle l-quaterColumn">
			<span class="IconPanle__icon"></span>
			<h3 class="IconPanle__head">コーヒースクール</h3>
			<p class="IconPanle__body"> コーヒー豆の基礎知識から、美味しいコーヒーを淹れるコツをお教えします。</p>
		</a>
		<a href="" class="IconPanle l-quaterColumn">
			<span class="IconPanle__icon"></span>
			<h3 class="IconPanle__head">BLOG</h3>
			<p class="IconPanle__body">お店の最新情報を、いち早くお届け。</p>
		</a>
	</div>
</div>

<script type='text/javascript'src="js/main.min.js"></script>
<script>
	imageSlide('Slide',2);
</script>
