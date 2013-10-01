<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zwazaaz</title>
</head>
<body>
    <?php echo Form::open(array('url' => '/', 'method' => 'put')); ?>
        <?php echo Form::text('username'); ?>
        <?php echo Form::password('password'); ?>
        <?php echo Form::submit(trans('registration.submit_login')); ?>
    <?php Form::close(); ?>
</body>
</html>
