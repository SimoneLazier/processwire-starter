<?php
use Site\Classes\HelloWorld; ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?= $page->title ?></title>
		<link rel="stylesheet" type="text/css" href="<?= mix('styles/main.css') ?>" />
		<script src="<?= mix('scripts/main.js') ?>"></script>
		<script src="<?= mix('scripts/manifest.js') ?>"></script>
		<?php if (mixExists('scripts/vendor.js')): ?>
			<script src="<?= mix('scripts/vendor.js') ?>"></script>
		<?php endif; ?>
	</head>
	<body>
		<h1><?= $page->title ?></h1>
		<?php if ($page->editable()) {
    echo "<p><a href='$page->editURL'>Edit</a></p>";
  } ?>
	</body>
</html>

<?= (new HelloWorld())->render() ?>
