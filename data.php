<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>wysiwyg</title>
</head>
<body>
	<div style="max-width:665px;padding:40px 20px;margin:auto;">
		<?php
			if(isset($_POST['wysiwyg_content'])){
			  echo $_POST['wysiwyg_content'];
			}
		?>
	</div>
</body>
</html>
