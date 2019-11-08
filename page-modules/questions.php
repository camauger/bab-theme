<?php
/**
* Questions
 */
?>
<?php if ($post->question1) { ?>
<aside class="block--expertise">
    <i class="fas fa-gem decorum"></i>
    <h3><span><?php esc_html_e( 'Our Expertise', 'bab' ); ?></span></h3>
    <nav class="col-12 col-md-8">
        
        <a title="<?php echo esc_html($post->question1) ?>"
            href="<?php echo esc_html($post->answer1) ?>">
            <i class="fas fa-gem"></i><?php echo esc_html($post->question1) ?>
        </a>
       
        <?php if ($post->question2) { ?>
        <a title="<?php echo esc_html($post->question2) ?>"
            href="<?php echo esc_html($post->answer2) ?>">
            <i class="fas fa-gem"></i><?php echo esc_html($post->question2) ?>
        </a>
        <?php } ?>
        <?php if ($post->question3) { ?>
        <a title="<?php echo esc_html($post->question3) ?>"
            href="<?php echo esc_html($post->answer3) ?>">
            <i class="fas fa-gem"></i><?php echo esc_html($post->question3) ?>
        </a>
        <?php } ?>
        <?php if ($post->question4) { ?>
        <a title="<?php echo esc_html($post->question4) ?>"
            href="<?php echo esc_html($post->answer4) ?>">
            <i class="fas fa-gem"></i><?php echo esc_html($post->question4) ?>
        </a>
        <?php } ?>
    </nav>
</aside>
<?php } ?>