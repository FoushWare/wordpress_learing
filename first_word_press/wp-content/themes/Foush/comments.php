<?php

if(comments_open()){ ?>
    <h3 class="comment-count"><?php comments_number()?></h3>
    <?php
    if(have_comments()){ //if here is a comment

    echo '<ul class="comments-list list-unstyled">';
    $comments_args=array(
        'max_depth' => '3',
        'type'      => 'comment',
        'avatar-size'=>64
    );
    wp_list_comments($comments_args);

    echo'</ul>';
}
$commentformArgs=array(

      'comment_notes_after' => '<div class="alert alert-info comment-alert text-center">Your Email and website will not be published</div>',
      'comment_notes_before' =>'',
      'class_submit'         =>'btn btn-primary',
      'title_reply'          =>'Leave a comment'
  );
    echo'<div class="my-custom-comment-form">';
        comment_form($commentformArgs);
   echo"</div>";







}else{
  echo'sorry comments are not allowed';
}




?>
