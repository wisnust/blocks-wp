<?php
/**
 * Slider Post
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'slider-post-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'slider-post';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values
$slider_post_behind_title = get_field('slider_post_behind_title');
$slider_post_first_title = get_field('slider_post_first_title');
$slider_post_second_title = get_field('slider_post_second_title');
$events_select_post = get_field('events_select_post');
$events_post_style = get_field('events_post_style');
$news_select_post = get_field('news_select_post');
$news_post_style = get_field('news_post_style');

?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="container">
        <div class="section-title">
            <h2><?php echo $slider_post_behind_title; ?></h2>
            <h5><?php echo $slider_post_first_title; ?></h5>
            <h3><?php echo $slider_post_second_title; ?></h3>
        </div>

        <!-- Events Post -->
        <?php if( $events_select_post ): ?>
        <div class="slider-post-container">
            <div class="slider-post-row">
                <?php 
                foreach( $events_select_post as $post ): 
                setup_postdata($post); ?>
                <div class="slide-item">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-lg-7 col-image">
                            <div class="slider-post-image">
                                <a href="<?php the_permalink( $post->ID ); ?>"/>
                                    <?php echo get_the_post_thumbnail( $post->ID, 'medium', array('class' => 'img-fluid') ); ?>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-5">
                            <div class="slider-post-content">
                                <h5 class="slider-post-category">
                                    <?php
                                        $event_term = get_the_terms( $post->ID, 'events_categories' );
                                        $event_first_term = $event_term[0];
                                        $event_term_link = get_category_link($event_first_term->term_id);
                                        echo '<a href="' . $event_term_link . '">' . $event_first_term->name . '</a>';
                                    ?>
                                </h5>
                                <?php if ( $events_post_style == 'simple' ): ?>
                                    <h2><a href="<?php the_permalink( $post->ID ); ?>"><?php echo get_the_title($post->ID); ?></a></h2>
                                <?php else: ?>
                                    <h2><a href="<?php the_permalink( $post->ID ); ?>"><?php echo get_the_title($post->ID); ?></a></h2>
                                    <h5><a href="<?php the_permalink( $post->ID ); ?>"><?php echo get_the_date( 'F j, Y ' ); ?></a></h5>
                                    <p><a href="<?php the_permalink( $post->ID ); ?>"><?php echo custom_excerpt($post->ID); ?></a></p>
                                <?php endif; ?>
                                <div class="btn-cta">
                                    <a href="<?php the_permalink( $post->ID ); ?>" class="btn btn-link-border">View Event</a>
                                    <a href="<?php echo get_home_url(); ?>/events" class="btn btn-primary">All Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <a href="<?php echo get_home_url(); ?>/events" class="badge-post-type">
                Events
            </a>
        <?php endif; ?>
        </div>

        <!-- News Post -->
        <?php if( $news_select_post ): ?>
        <div class="slider-post-container">
            <div class="slider-post-row">
                <?php 
                foreach( $news_select_post as $post ): 
                setup_postdata($post); ?>
                <div class="slide-item">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-lg-7 col-image">
                            <div class="slider-post-image">
                                <a href="<?php the_permalink( $post->ID ); ?>"/>
                                    <?php echo get_the_post_thumbnail( $post->ID, 'large', array('class' => 'img-fluid') ); ?>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-5">
                            <div class="slider-post-content">
                                <h5 class="slider-post-category">
                                    <?php
                                        $category_post = get_the_category( $post->ID );
                                        $selector = 'category_' . $category_post[0]->term_id;
                                        if(count($category_post) > 0) {
                                            echo '<a href="' . esc_url( get_category_link( $category_post[0]->term_id ) ) . '">';
                                            echo $category_post[0]->name;
                                            echo '</a>';
                                        }
                                    ?>
                                </h5>
                                <?php if ( $news_post_style == 'simple' ): ?>
                                    <h2><a href="<?php the_permalink( $post->ID ); ?>"><?php echo get_the_title($post->ID); ?></a></h2>
                                <?php else: ?>
                                    <h2><a href="<?php the_permalink( $post->ID ); ?>"><?php echo get_the_title($post->ID); ?></a></h2>
                                    <h5><a href="<?php the_permalink( $post->ID ); ?>"><?php echo get_the_date( 'F j, Y ' ); ?></a></h5>
                                    <p><a href="<?php the_permalink( $post->ID ); ?>"><?php echo custom_excerpt($post->ID); ?></a></p>
                                <?php endif; ?>
                                <div class="btn-cta">
                                    <a href="<?php the_permalink( $post->ID ); ?>" class="btn btn-link-border">Read Post</a>
                                    <a href="<?php echo get_home_url(); ?>/blog" class="btn btn-primary">All News</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <a href="<?php echo get_home_url(); ?>/blog" class="badge-post-type">
                News
            </a>
        </div>
        <?php endif; ?>

    </div>
</section>