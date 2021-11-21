<h2><?= esc($title) ?></h2>

<?= service('validation')->listErrors() ?>

<form action="<?php echo base_url('user/register')?>" method="post">
    <?= csrf_field() ?>
    <div class="mb-3">
        <label for="name" class="form-label">Enter Your Name</label>
        <input type="text" name="name" value="<?php echo set_value('name')?>" class="form-control" >

    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" value="<?php echo set_value('email')?>" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>

    <button type="submit" class="btn btn-primary">sign up</button>

</form>

