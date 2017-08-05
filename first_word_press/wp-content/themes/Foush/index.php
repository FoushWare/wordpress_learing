<?php get_header();?>

    <div class="container">
        <div class="row">
                <?php
                        if(have_posts()){

                            while(have_posts()){
                                the_post();?>
                                <div class="col-sm-6">
                                   <div class="main-post">
                                        <h3 class="post-title">
                                             <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                                        </h3>
                                        <span class="post-author">
                                            <i class="fa fa-user fa-fw "></i><?php the_author_posts_link();?>,
                                        </span>
                                        <span class="post-date">
                                            <i class="fa fa-calendar fa-fw "></i><?php the_date('F j, Y'); ?> at <?php the_time('g:i a'); ?>,
                                         </span>
                                        <span class="post-comments">
                                            <i class="fa fa-comment-o fa-fw "></i><?php comments_popup_link('0 comment','1 comment','2 comment','% comment','comment disabled'); ?>,
                                        </span>
                                        <?php the_post_thumbnail('medium',['class'=>'img-responsive img-thumbnail']);?>
                                        <?php the_excerpt();?>

                                         <hr>
                                         <p class="categories">
                                            <i class="fa fa-tags fa-fw "></i><?php the_category(',  ');?>
                                        </p>
                                        <p class="post-tags">
                                            <?php
                                                if(has_tag()){
                                                      the_tags();
                                                 }else{
                                                    echo'Tags:There is no Tags';
                                                }
                                            ?>
                                        </p>

                                   </div>
                                </div>
                <?php
                            }//End of the while
                    }//End brace of the if
                ?>


        </div>
        <?php
            if(get_next_posts_link()){
                next_posts_link('Next');
            }else{
                    echo'no next';
            }
            if(get_previous_posts_link()){
                            previous_posts_link('prev');
                        }else{
                                echo'no prev';
                        }

                    ?>

    </div>


      <!--   <div class="col-sm-6">
                    <div class="main-post">
                        <h3 class="post-title">This is our post title</h3>
                        <span class="post-author"><i class="fa fa-user fa-fw "></i>Foush, </span>
                        <span class="post-date"><i class="fa fa-calendar fa-fw "></i>8/2/2017, </span>
                        <span class="post-comments"><i class="fa fa-comment-o fa-fw "></i>30 comments, </span>
                    <img class="img-responsive img-thumbnail"src="http://via.placeholder.com/600x200/f00" alt=''>
                    <p class="post-content">
                        loream this is me ahmed foud learing how to use wordpress and make themes
                        loream this is me ahmed foud learing how to use wordpress and make themes
                        loream this is me ahmed foud learing how to use wordpress and make themes
                        loream this is me ahmed foud learing how to use wordpress and make themes
                        loream this is me ahmed foud learing how to use wordpress and make themes
                        loream this is me ahmed foud learing how to use wordpress and make themes
                    </p>
                    <hr>
                    <p class="categories"><i class="fa fa-tags fa-fw "></i>web,learning,wordpress</p>
                    </div>
            </div>
-->




<?php get_footer()?>
