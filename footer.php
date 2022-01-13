<?php
/*
 * フッタ部分
 */

?>

</main>

<footer class="l-footer">
  <?php get_template_part( 'template-parts/footer' ); ?>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php echo get_theme_file_uri('/assets/js/common.js'); ?>"></script>

<script>
  $(function() {
    objectFitImages('.fit');
  });
</script>
<script src="<?php echo get_theme_file_uri('/assets/js/ofi.min.js'); ?>"></script>

<?php if(is_page('aboutus')): ?>
<script src="<?php echo get_theme_file_uri('/assets/js/aboutus.js'); ?>"></script>
<?php endif; ?>

<?php if(is_page('features')): ?>
<script src="<?php echo get_theme_file_uri('/assets/js/features.js'); ?>"></script>
<?php endif; ?>

<?php if(is_page('faq')): ?>
<script src="<?php echo get_theme_file_uri('/assets/js/faq.js'); ?>"></script>
<?php endif; ?>

<?php wp_footer(); ?>
</body></html>
