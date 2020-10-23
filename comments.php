<?php 
	
	echo "<div class='myCustomComment'>";
	
	//if comments off from wordpress dashboard then run the logic
	if( !comments_open() ){
		echo "You can't comment here because it was closed";
		echo "<hr>";
	}else{

		//gety comments number diye total comment dekahno hoy
		if (get_comments_number( ) == 1) {
			echo get_comments_number( ) . " Comment";
		}elseif(get_comments_number() == 0){
			echo "Post has no comment !";
		}else{
			echo get_comments_number( ) . " Comments";
			
		}
		echo "<hr>";

		echo wp_list_comments();

		echo "<hr>";
		comment_form();
	}

	echo "</div>";

	