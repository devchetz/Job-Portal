<?php

session_start();

require_once("../db.php");

//Status 0 means show user and Status 1 means don't show user details for this job post.
$sql = "UPDATE apply_job_post SET status='1' WHERE id_jobpost='$_GET[id_jobpost]' AND id_user='$_GET[id_user]'";

if($conn->query($sql) === TRUE) {
	header("Location: view-job-application.php");
	exit();
} else {
	echo "Error!";
}

$conn->close();