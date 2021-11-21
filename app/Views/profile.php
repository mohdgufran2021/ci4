<h2><?= esc($title) ?></h2>

<?= service('validation')->listErrors() ?>

<form action="<?php echo base_url('user/profile')?>" method="post">
    <?= csrf_field() ?>

<!--    <div class="mb-3">-->
<!--        <label for="exampleInputEmail1" class="form-label">Email address</label>-->
<!--        <input type="email" name="email" class="form-control" value="--><?php //echo set_value('email', $email)?><!--" id="exampleInputEmail1" aria-describedby="emailHelp">-->
<!---->
<!--    </div>-->

    <div class="mb-3">
        <label for="Name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo set_value('name', $name)?>" id="exampleInputPassword1">
    </div>

    <button type="submit" class="btn btn-primary">UPDATE</button>

</form>

