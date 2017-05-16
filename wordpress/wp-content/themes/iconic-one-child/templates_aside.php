<ul>

    <?php
    /* Template Name: templates_aside */


    $mypages = get_pages(array('meta_key' => 'alainjuppe'));

    ?>
    <ul>
    <?php
    foreach ($mypages as $mypage) {
        var_dump($mypage);
        ?>
        <img src="<?php echo ($mypage->meta_value); ?>" alt="">
        <li><?php  echo ($mypage->post_name) ;?></li>
        <?php


    }
    ?>

    </ul>
