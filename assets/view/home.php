<?php include 'components/header.php'; ?>

<div class="container">
    <div class="content">
        <h1 class="title"><?php if(isset($title)) echo $title; ?></h1>
        <?php foreach ($routes as $key => $value) { ?>
            <a href="<?php echo $value; ?>" class="btn nbtn-defoult"><?php echo $key; ?></a>
        <?php } ?>
    </div>
</div>

<?php include 'components/footer.php'; ?>