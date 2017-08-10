<?php get_header();?>

    <div class="container">
        <div class="row">
                <?php
                        if(have_posts()){

                            while(have_posts()){
                                the_post();?>
                                   <div class="main-post single-post">
                                        <?php
                                            edit_post_link('Edit <i class="fa fa-edit fa-lg"></i>');
                                        ?><!--Edit the post if you have permission-->
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
                                        <div class="post-content">
                                            <?php the_content();?>
                                        </div>
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
                                    </div><!--end of main-post -->
                            <?php
                                        }//End of while (have_posts())
                                }//End of  if(hav_posts())
                            ?>
        <div class="post-pagination single-post-pagination">
                <?php
                    if(get_next_post_link()){
                        echo'<span class="next-span">';
                            next_post_link('%link','Next Article: %title <i class="fa fa-chevron-right"></i>');

                        echo '</span>';
                    }else{
                            echo'<span class="float-right">Next</span>';
                    }

                    if(get_previous_post_link()){
                        echo'<span class="previous-span">';
                            previous_post_link('%link','<i class="fa fa-chevron-left"></i> Previous Article: %title');
                        echo'</span>';
                    }else{
                            echo'<span class="float-left">Prev</span>';
                    }
?>

                                    <hr>
                                    <!--Author Meta-->
                                    <h3>
                                        <?php the_author_meta('first_name')?>
                                        <?php the_author_meta('last_name')?>
                                        (  <?php the_author_meta('nickname')?>  )
                                    </h3>
                        <?php if( get_the_author_meta('description') ){?>

                            <p>
                                        <?php the_author_meta('description')?>
                            </p>



                        <?php
                            }else{
                                      echo'There is no meta';
                                }

                        ?>




                <?php
                    /*comment section*/
                    echo'<hr class="comments-seprator">';
                        comments_template();
                ?>
        </div><!--div of the pagination-->


        </div><!--End of the row-->


    </div><!--End tag of container-->






<?php get_footer()?>
