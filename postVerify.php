<?php
include "Database/dbGlobals.php";
include "Database/helpers.php";

// Needs later include account verification

$Tag = $_POST['tag'];

$ImageName = $_FILES['img']['name'];
$ImageTMP = $_FILES['img']['tmp_name'];

$random = rand(1, 999);

$trialuser = 3;
// User ID hard set to 3, for testing purposes.

if ($Tag == true)
{
add_post_with_tag($trialuser, $ImageTMP, $Tag);
}

else
{
add_post_no_tag($trialuser, $ImageTMP);
}

move_uploaded_file($ImageTMP, "images/$random.$ImageName");
header("Location: home.php");
?>
