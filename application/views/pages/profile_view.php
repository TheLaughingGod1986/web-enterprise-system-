<?php
	if (isset($profile) && $profile != false){
		//Show profile based on segment 3
	    echo '<li>';
        //echo $profile->Email;
        print_r($profile);
        echo '</li>';
	} 
	else if ($this->session->is_logged_external && $profile == false){
		//Show external profile
	    echo $this->session->Email;
	} else {
	    echo 'No Records';
	}
	//If not logged in and on this page without segment 3, then incorrect url
	//If logged in and on this page with segement 3, then show profile, same if wasn't logged in
?>