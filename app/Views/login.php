<h2><?= esc($title) ?></h2>

<?= service('validation')->listErrors() ?>
<?php
$session = session();
if ($session->get('is_logged_in')){
    echo 'Your Are Already Logged in';
}
?>
<form action="<?php echo base_url('user/login')?>" method="post">
    <?= csrf_field() ?>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" value="<?php echo set_value('email')?>" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>

    <button type="submit" class="btn btn-primary">login</button>

</form>

