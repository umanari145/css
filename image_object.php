<!DOCTYPE html>
<html lang="ja">
    <meta charset="UTF-8">
    <title>image font</title>
<style>

* {
    box-sizing: border-box;
}

*:before,
*:after {
	box-sizing: border-box;
}

.block{
	margin-top: 15px;
	width: 400px;
	height: 200px;
	overflow: hidden;
	border: 1px solid #000;
	position: relative;
}

.image_base{
	width: 100%;
	height: 100%;
}

.type1{
    object-fit: contain;
}

.type2{
    object-fit: cover;
}

.type3{
	max-width: 100%;
	max-height: 100%;
	position: absolute;
    top: 50%;
    left: 50%;
    height: auto;
    width: auto;
    transform: translate(-50%,-50%);
}

</style>
    <body>
		<?php
        for ($i=1 ; $i <=10 ; $i++):
            $imagePath = sprintf("reika%02d", $i);

            //$class = ($i <=5) ? "type1" : "type2";
            $class = "type3";
        ?>
            <div class="block">
                <img src="./image_for_slide/<?php echo $imagePath;?>.jpg" class="image_base <?php echo $class;?>">
            </div>
        <?php
        endfor;
        ?>

    </body>
</html>
