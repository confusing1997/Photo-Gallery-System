<?php include("includes/init.php"); ?>

<?php if (!$session->is_signed_in()) { redirect("login.php"); } ?>

<?php

    if (empty($_GET['id'])) {

        redirect("comment_photo.php?id={$comment->photo_id}");

    }

    $comment = Comment::find_by_id($_GET['id']);

    if ($comment) {

        $comment->delete();

        $session->message("The comment of {$comment->author} has been deleted");

        redirect("comment_photo.php?id={$comment->photo_id}");

    } else {

        redirect("comment_photo.php?id={$comment->photo_id}");

    }