<?php get_header();

switch($post->post_name){
			case "projekty":
				include_once("templates/project-list-template.php");
				break;
			
		}	
		
get_footer(); ?>
