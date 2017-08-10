<?php

if(comments_open()){ ?>
    <h3 class="comment-count"><?php comments_number()?></h3>
    <?php
    echo '<ul class="comments-list list-unstyled">';
    $comments_args=array(
        'max_depth' => '3',
        'type'      => 'comment',
        'avatar-size'=>64
    );
    wp_list_comments($comments_args);

    echo'</ul>';
    comment_form();
}else{
  echo'sorry comments are not allowed';
}




?>
