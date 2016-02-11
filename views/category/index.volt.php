<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title; ?> - An example blog</title>
    </head>
    <body>

        <?php if ($show_navigation) { ?>
            <ul id="navigation">
                <?php foreach ($menu as $item) { ?>
                    <li>
                        <a href="<?php echo $item->href; ?>">
                            <?php echo $item->caption; ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        <?php } ?>

        <h1><?php echo $post->title; ?></h1>

        <div class="content">
            <?php echo $post->content; ?>
        </div>

    </body>
</html>
