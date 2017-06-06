<?php get_header(); ?>
    <div class="container-fluid page-container">
               <nav class="navbar navbar-default navbar-custom">
            <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand homeicon" href="#"><span class="glyphicon glyphicon-education" aria-hidden="true"></span>MilUniversity</a>
                </div>
                <?php
                    wp_nav_menu( array(
                        'menu'              => 'primary',
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker())
                    );
                ?>
            </div>
        </nav>
            <div class="jumbotron landing-page-jumbo">
                <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                        <div class="blog-post">
                            <?php if(has_post_thumbnail()) : ?>
                                <div class="post-thumb">
                                    <?php the_post_thumbnail() ?>
                                </div>
                            <?php endif; ?>
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p><?php __('No Post Found'); ?></p>
                <?php endif; ?>
            </div>
             <div class="btn-group btn-group-justified page-btns" role="group">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default milbuttons">milSuite Classroom</button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default milbuttons">milSuite Library</button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default milbuttons">milTech milUniversity</button>
                </div>
            </div>
        </div>
    </div>

<?php wp_footer(); ?>
<?php get_footer(); ?>