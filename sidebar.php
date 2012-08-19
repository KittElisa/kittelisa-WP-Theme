<section id="sidebar">
    <?php if ( is_sidebar_active('primary_widget_area') ) : ?>
            <section id="primary" class="widget-area">
                <ul class="xoxo">
                    <?php dynamic_sidebar('primary_widget_area'); ?>
                </ul>
            </section><!-- #primary .widget-area -->
    <?php endif; ?>      
             
    <?php if ( is_sidebar_active('secondary_widget_area') ) : ?>
            <section id="secondary" class="widget-area">
                <ul class="xoxo">
                    <?php dynamic_sidebar('secondary_widget_area'); ?>
                </ul>
            </section><!-- #secondary .widget-area -->
    <?php endif; ?> 
</section>