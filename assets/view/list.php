<?php include 'components/header.php'; ?>

<div class="container">
    <div class="content">
        <h1 class="title"><?php if (isset($title)) echo $title; ?></h1>

        <?php if (isset($list) && (count($list) > 0)) { ?>

            <table class="table">
                <thead class="table-header">
                    <tr>
                    <?php foreach ($list[0] as $key => $value) { ?>
                        <td><?php echo $key; ?></td>
                    <?php } ?>
                    </tr>
                </thead>
                <tbody class="table-body">
                    <?php foreach ($list as $item) { ?>
                    <tr>
                        <?php foreach ($item as $value) { ?>
                            <td><?php echo $value; ?></td>
                        <?php } ?>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

        <?php } else { ?>
            <p class="message error">There are no content available.</p>
        <?php } ?>

        <!-- Buttons -->
        <?php foreach ($routes as $key => $value) { ?>
            <a href="<?php echo $value; ?>" class="btn nbtn-defoult"><?php echo $key; ?></a>
        <?php } ?>
    </div>
</div>


<?php include 'components/footer.php'; ?>