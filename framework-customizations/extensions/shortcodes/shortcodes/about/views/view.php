<?php if (!defined('FW')) {
    die('Forbidden');
} ?>
<!-- start us.html-->
<section class="us">

    <div class="container">
        <div class="row">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <?php foreach ($atts['tabs'] as $key => $tab): ?>
                    <li <?php echo ($key == 0) ? 'class="active"' : ''; ?>><a href="#tab-<?php echo $key; ?>"
                                                                              data-toggle="tab"><?php echo $tab['title']; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <?php foreach ($atts['tabs'] as $key => $tab): ?>
                    <div class="tab-pane <?php echo ($key == 0) ? 'active' : ''; ?>" id="tab-<?php echo $key; ?>">

                        <?php echo $tab['descr']; ?>
                        <?php foreach ($tab['img-links'] as $link): ?>
                            <a href="<?= $link['document']['url'] ?>" target="_blank">
                                <img src="<?= $link['img']['url'] ?>" alt="">
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

</section>