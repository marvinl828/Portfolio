<?php

//Check to see if the form has been submitted correctly

	if($_POST['submit']) {

		// Echo the name and gender
		echo 'Name: '.$_POST['name'].'<br />';
		echo 'Gender: ';
		
		if ($_POST['gender'] == 1 {
			echo 'Male';
		} else {
			echo 'Female';
		}
	}
?>