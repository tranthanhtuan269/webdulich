<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Laravel and Jcrop</h1>
	<?= Form::open(array('route' => 'home.postImageForm', 'files' => true)) ?>
	<?= Form::label('image', 'My Image') ?>
	<br>
	<?= Form::file('image') ?>
	<br>
	<?= Form::submit('Upload!') ?>
	<?= Form::close() ?>
</body>
</html>