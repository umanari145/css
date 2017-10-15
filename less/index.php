<?php
    include 'header.php';
?>

<div id="contents">
  <div id="side_bar">サイドバー</div>
  <div id="contents">メインコンテンツ</div>
</div>

<!--.items_wide>.-item>.-image+.-overview>h2.-name+p.-price+p.-comment|bem -->
<!--
<div class="items items_wide">
	<div class="items__item">
		<div class="items__image"></div>
		<div class="items__overview">
			<h2 class="items__name"></h2>
			<p class="items__price"></p>
			<p class="items__comment"></p>
		</div>
	</div>
</div>
-->

<!--.form(>.-body+(.-button>button.btn.btn--full))+.comment>.-body+button.btn.-button|bem -->
<div class="form">
	<div class="form__body">
		<input type="text" name="login_id">
		<input type="text" name="password">
	</div>
	<div class="form__button">
		<button class="btn btn--full">ログイン</button>
	</div>
</div>

<div class="comment">
	<div class="comment__body"></div>
	<button class="btn comment__button">コメント</button>
</div>


<?php
    include 'footer.php';
?>
