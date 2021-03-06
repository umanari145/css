<?php
    include 'header.php';
?>

<div id="contents">
  <div id="side_bar">サイドバー</div>
  <div id="contents">メインコンテンツ</div>
</div>

コメントアウトされているemmetのbemの記法に注意
<!--.items_wide>.-item>.-image+.-overview>h2.-name+p.-price+p.-comment|bem -->
<!--
<div class="items items_wide">
	<div class="items__item">
		<div class="items__image"></div>
			<h2 class="items__name"></h2>
			<div class="items__overview">
			<p class="items__price"></p>
			<p class="items__comment"></p>
		</div>
	</div>
</div>
-->

<!--.form(>.-body+(.-button>button.btn.btn--full))+.comment>.-body+button.btn.-button|bem -->
<div class="form">
	<div class="form__body">
		<input type="text" name="password">
		<input type="text" name="login_id">
	</div>
	<div class="form__button">
		<button class="btn btn--full">ログイン</button>
	</div>
</div>

<div class="comment">
	<div class="comment__body"></div>
	<button class="btn comment__button">コメント</button>
</div>

アイコンが前にちょこんとついてリンクが入るケース
::beforeをうまく使う
<span class="ui-cion ui-icon--edit"></span>
<a href="">
	<span class="nav-icon nav-icon--home"></span>
</a>

<p>
	<span class="font-icon font-icon--home">ホーム</span>
</p>

少し文字をずらす
<p>
	<span class="font-icon font-icon--home font-icon--with--text">ホーム</span>
</p>

ブロック後半のリンク
<div class="heading">
	<h2>
		見出し<a href="#" class="heading__link">リンク</a>
	</h2>
</div>

メディア
<div class="media">
	<div class="media__image"><img src="http://placehold.jp/150x150.png" alt=""></div>
	<div class="media__body">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, aliquid, dolores. Velit saepe, veniam autem. Exercitationem fugiat veniam dignissimos ullam, laudantium consectetur porro quam sint, dolore perferendis autem vel expedita!</p>
	</div>
</div>

<div class="media2">
	<div class="media__image2"><img src="http://placehold.jp/150x150.png" alt=""></div>
	<div class="media__body2">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, aliquid, dolores. Velit saepe, veniam autem. Exercitationem fugiat veniam dignissimos ullam, laudantium consectetur porro quam sint, dolore perferendis autem vel expedita!</p>
	</div>
</div>

ナビゲーション
<ul class="nav">
	<li class="nav__item"><a href="">home</a></li>
	<li class="nav__item"><a href="">Service</a></li>
	<li class="nav__item"><a href="">About</a></li>
	<li class="nav__item"><a href="">Contact</a></li>
</ul>

縦センタリングされたアイコン positionとflex
<ul class="tableview">
	<li class="tableview__item"><a href="#" class="tableview__target">リスト<span class="tableview__target-icon ico ico--arrow"></span></a></li>
	<li class="tableview__item2"><a href="#" class="tableview__target">リスト</a><span class="tableview__target-icon2 ico ico--arrow"></span></li>
	<li class="tableview__item">リスト</li>
</ul>

下矢印
<div class="arrow3">
	<a href="#">分譲</a>
</div>

<ul class="nav2">
	<li class="nav__item2 active"><a href="">home</a></li>
	<li class="nav__item2 no_active"><a href="">Service</a></li>
	<li class="nav__item2 no_active"><a href="">About</a></li>
	<li class="nav__item2 no_active"><a href="">Contact</a></li>
</ul>

<p>下orその他の方向向き矢印など</p>
<p>通常の文字など</p>
<span class="str">hogehoge</span>

<p>select</p>
<label class="select_icon">
<select class="select01">
	<option>本日は晴天なり</option>
	<option>本日は晴天なり本日は晴天なり</option>
	<option>選択肢03</option>
</select>
</label>


<p>select</p>
<label class="select_icon">
<select class="select01">
	<option>本日は晴天なり</option>
	<option>本日は晴天なり本日は晴天なり</option>
	<option>選択肢03</option>
</select>
</label>
<?php
    include 'footer.php';
?>

<p>パンくずで見かけるCSS</p>
https://coliss.com/articles/build-websites/operation/css/breadcrumb-with-arrow-shaped-links.html

<ul class="border-as-triangle">
  <li>
    <a href="#1">Link</a>
  </li>
  <li>
    <a href="#2">Link</a>
  </li>
  <li class="active2">
    <a href="#">Active</a>
  </li>
  <li>
    <a href="#4">Link</a>
  </li>
</ul>


<ul class="border-as-triangle2">
  <li>
    <a href="#1">Link</a>
  </li>
  <li style="z-index:-2;">
    <a href="#2">Link</a>
  </li>
  <li class="active2" style="z-index:-3">
    <a href="#">Active</a>
  </li>
  <li style="z-index:-4;">
    <a href="#4">Link</a>
  </li>
</ul>
