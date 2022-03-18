<div class="row mt-4">
    <div class="col-md-12">

        <article class="card mb-4 horizontal-post-feed">
            <div class="row g-0">
                <div class="col-md-2 d-inline-flex p-2 pl-4 pr-4 justify-content-center">
                    <div style="align-self:center">
                        <a href="<?php echo get_home_url(); ?>/author/<?php echo get_the_author_meta('user_nicename'); ?>" style="border-radius:50px; display:inline-block" class="">
                            <picture>
                                <img class="" src="<?php print get_avatar_url(get_the_author_meta('user_email')); ?>" style="border-radius:50px" alt="<?php echo get_the_author(); ?>">
                            </picture>

                        </a>
                    </div>


                </div>
                <div class="col-md-10">
                    <div class="card-body">

                        <a href="<?php echo get_home_url(); ?>/author/<?php echo get_the_author_meta('user_nicename'); ?>" class="link-text">
                            <h5 class="card-title mb-0" style="text-decoration: none;"><?php echo get_the_author_meta('display_name'); ?>
                                <?php
                                $twitter = get_the_author_meta('twitter', $post->post_author);
                                $facebook = get_the_author_meta('facebook', $post->post_author);
                                $instagram = get_the_author_meta('instagram', $post->post_author);
                                $linkedin = get_the_author_meta('linkedin', $post->post_author);
                                ?>
                                <?php if ($twitter) : ?><a href="<?php echo $twitter; ?>" rel="nofollow" target="_blank"><i class="fab fa-twitter white-text"> </i></a><?php endif; ?>
                                <?php if ($facebook) : ?> <a href="<?php echo $facebook; ?>" rel="nofollow" target="_blank"><i class="fab fa-facebook-f white-text"> </i></a><?php endif; ?>
                                <?php if ($instagram) : ?> <a href="<?php echo $instagram; ?>" rel="nofollow" target="_blank"><i class="fa-brands fa-instagram"></i></a><?php endif; ?>
                                <?php if ($linkedin) : ?> <a href="<?php echo $linkedin; ?>" rel="nofollow" target="_blank"><i class="fa-brands fa-linkedin"> </i></a><?php endif; ?>
                                    
                            </h5>

                            <p class="card-text mb-1"><?php echo get_the_author_meta('description'); ?>
                            </p>
                        </a>
                        <?php if (is_single()) : ?>
                            <div class="mb-2">
                                <a class="text-orange text-decoration-none" href="#"><?php echo get_the_modified_date(); ?></a><span class="text-orange">
                            </div>
                        <?php endif; ?>



                    </div>
                </div>
            </div>
        </article>

    </div>
</div>