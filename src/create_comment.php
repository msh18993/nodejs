<?php
    file_put_contents('../data/'.$_POST['title'], '{ '.$_POST['time'].' : '.$_POST['comment'].' }');
    header( 'Location: ../pages/test.php' );
?>