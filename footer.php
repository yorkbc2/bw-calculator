</div><!-- .page-wrapper end-->

<footer class="page__footer js-footer">
        <div class="page__footer_socials">
            <?php foreach (get_social() as $soc_name => $social):?>
                <a href="<?php echo $social['url'] ?>" target="_blank" class="page__footer_socials_item">
                    <div>
                        <?php if (!empty($social['icon-html'])): echo $social['icon-html']; 
                                else: echo '<i class="'.$social['icon'].'"></i>';
                                endif; ?>
                        
                    </div>
                    <div>
                        <?php echo $soc_name === "facebook" ? "Валик Юстас" : $social['text']; ?>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </footer>

</div><!-- .wrapper end-->

<?php scroll_top(); ?>

<?php if (is_customize_preview()) { ?>
    <button class="button-small customizer-edit" data-control='{ "name":"bw_scroll_top_display" }'>
        <?php esc_html_e('Edit Scroll Top', 'brainworks'); ?>
    </button>
    <button class="button-small customizer-edit" data-control='{ "name":"bw_analytics_google_placed" }'>
        <?php esc_html_e('Edit Analytics Tracking Code', 'brainworks'); ?>
    </button>
    <button class="button-small customizer-edit" data-control='{ "name":"bw_login_logo" }'>
        <?php esc_html_e('Edit Login Logo', 'brainworks'); ?>
    </button>
<?php } ?>

<div class="is-hide"><?php svg_sprite(); ?></div>

<?php wp_footer(); ?>

</body>
</html>
