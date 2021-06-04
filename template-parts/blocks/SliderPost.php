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

?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="container">
        <div class="section-title">
            <h2><?php echo $slider_post_behind_title; ?></h2>
            <h5><?php echo $slider_post_first_title; ?></h5>
            <h3><?php echo $slider_post_second_title; ?></h3>
        </div>

        <div class="slider-post-row">
            <div class="slide-item">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-7">
                        <div class="slider-post-image">
                            <a href="">
                                <img src="https://images.unsplash.com/photo-1504600770771-fb03a6961d33?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8c3F1YXJlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" alt="">
                            </a>
                            <a href="" class="badge-post-type">
                                Events
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <div class="slider-post-content">
                            <h5 class="slider-post-category">
                                <a href="">Post Category</a>
                            </h5>
                            <h2>Title Post</h2>
                            <h5>Thu 8 Apr, Date here</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius hic qui</p>
                            <div class="btn-cta">
                                <a href="" class="btn btn-link-border">View Event</a>
                                <a href="" class="btn btn-primary">All Event</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item">
                <div class="row">
                    <div class="col-md-6 col-lg-7">
                        <div class="slider-post-image">
                            <a href="">
                                <img src="https://images.unsplash.com/photo-1504600770771-fb03a6961d33?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8c3F1YXJlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <div class="slider-post-content">
                            <h5 class="slider-post-category">
                                <a href="">Post Category</a>
                            </h5>
                            <h2>111 Title Post</h2>
                            <h5>Thu 8 Apr, Date here</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius hic qui</p>
                            <div class="btn-cta">
                                <a href="" class="btn btn-link-border">View Event</a>
                                <a href="" class="btn btn-primary">All Event</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>