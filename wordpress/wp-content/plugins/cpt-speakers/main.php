<?php
/*
Plugin Name: Custom Post Type - Speakers
Plugin URI: http://9seeds.com/plugins/
Description: Custom Post Type Plugin to create event speakers
Version: 1.1
Author: 9seeds.com
Author URI: http://9seeds.com/
*/

/* create the speaker post type */
function post_type_speakers() {
     $labels = array(
    'name' => _x('Sessions', 'post type general name'),
    'singular_name' => _x('Sessions', 'post type singular name'),
    'add_new' => _x('Add New', 'speakers'),
    'add_new_item' => __('Add New Session'),
    'edit_item' => __('Edit Session'),
    'edit' => _x('Edit', 'speakers'),
    'new_item' => __('New Session'),
    'view_item' => __('View Session'),
    'search_items' => __('Search Session'),
    'not_found' =>  __('No session found'),
    'not_found_in_trash' => __('No session found in Trash'),
    'view' =>  __('View Session'),
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array("slug" => "speaker"),
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'thumbnail' )
  );

  register_post_type( 'speakers', $args);
  
	add_image_size( 'speaker_thumbnail', 35, 35, false );
}

add_action( 'init', 'post_type_speakers', 1 );

/* create custom meta boxes */

function custom_meta_boxes_speakers() {
    add_meta_box("speakers-details", "Speaker Details", "meta_cpt_speakers", "speakers", "normal", "low");
}

add_action('admin_menu', 'custom_meta_boxes_speakers');

function meta_cpt_speakers() {
    global $post;

	echo '<input type="hidden" name="speakers_noncename" id="speakers_noncename" value="' .
	wp_create_nonce( plugin_basename(__FILE__) ) . '" />';

	echo '<label for="speaker_bio">Speaker Bio</label><br />';
	echo '<textarea style="width: 55%;" rows="10" cols="50" name="speaker_bio" />'.get_post_meta($post->ID, 'speaker_bio', true).'</textarea><br /><br />';

	echo '<label for="speaker_pres_title">Speaker firstname and lastname</label><br />';
	echo '<input style="width: 55%;" type="text" name="speaker_pres_title" value="'.get_post_meta($post->ID, 'speaker_pres_title', true).'" /><br /><br />';

	echo '<label for="speaker_pres_description">Presentation Description</label><br />';
	echo '<textarea style="width: 55%;" rows="10" cols="50" name="speaker_pres_description" />'.get_post_meta($post->ID, 'speaker_pres_description', true).'</textarea><br /><br />';

        echo '<label for="speaker_pres_duration">Duration</label><br />';
        echo '<select style="width: 55%;" type="text" name="speaker_pres_duration">';
                if ("30" == get_post_meta($post->ID, 'speaker_pres_duration', true)) {
                        echo '<option value="30" selected="selected">30 minutes</option>';
                } else {
                        echo '<option value="30">30 minutes</option>';
                }
                if ("60" == get_post_meta($post->ID, 'speaker_pres_duration', true)) {
                	echo '<option value="60" selected="selected">1h</option>';
		} else {
                	echo '<option value="60">1h</option>';
		}
                if ("90" == get_post_meta($post->ID, 'speaker_pres_duration', true)) {
	                echo '<option value="90" selected="selected">1h30</option>';
		} else {
	                echo '<option value="90">1h30</option>';
		}
                if ("120" == get_post_meta($post->ID, 'speaker_pres_duration', true)) {
                	echo '<option value="120" selected="selected">2h</option>';
		} else {
                	echo '<option value="120">2h</option>';
		}
                if ("180" == get_post_meta($post->ID, 'speaker_pres_duration', true)) {
                	echo '<option value="180" selected="selected">3h</option>';
		} else {
                	echo '<option value="180">3h</option>';
		}
        echo '</select><br /><br />';

        echo '<label for="speaker_pres_category">Category</label><br />';
        echo '<select style="width: 55%;" type="text" name="speaker_pres_category">';
                if ("methodology" == get_post_meta($post->ID, 'speaker_pres_category', true)) {
                        echo '<option value="methodology" selected="selected">M&eacute;thodologie</option>';
                } else {
                        echo '<option value="methodology">M&eacute;thodologie</option>';
                }
                if ("hands_on" == get_post_meta($post->ID, 'speaker_pres_category', true)) {
                        echo '<option value="hands_on" selected="selected">Pratique</option>';
                } else {
                        echo '<option value="hands_on">Pratique</option>';
                }
                if ("beyon_agile" == get_post_meta($post->ID, 'speaker_pres_category', true)) {
                        echo '<option value="beyon_agile" selected="selected">Au del&agrave; de l\'Agile</option>';
                } else {
                        echo '<option value="beyon_agile">Au del&agrave; de l\'Agile</option>';
                }
                if ("incubation" == get_post_meta($post->ID, 'speaker_pres_category', true)) {
                        echo '<option value="incubation" selected="selected">Incubation</option>';
                } else {
                        echo '<option value="incubation">Incubation</option>';
                }
                if ("cnc" == get_post_meta($post->ID, 'speaker_pres_category', true)) {
                        echo '<option value="cnc" selected="selected">Command and Control</option>';
                } else {
                        echo '<option value="cnc">Command and Control</option>';
                }
        echo '</select><br /><br />';

        echo '<label for="speaker_pres_level">Level</label><br />';
        echo '<select style="width: 55%;" type="text" name="speaker_pres_level">';
                if ("shu" == get_post_meta($post->ID, 'speaker_pres_level', true)) {
                        echo '<option value="shu" selected="selected">Shu (d&eacute;butant)</option>';
                } else {
                        echo '<option value="shu">Shu (d&eacute;butant)</option>';
                }
                if ("ha" == get_post_meta($post->ID, 'speaker_pres_level', true)) {
                        echo '<option value="ha" selected="selected">Ha (moyen)</option>';
                } else {
                        echo '<option value="ha">Ha (moyen)</option>';
                }
                if ("ri" == get_post_meta($post->ID, 'speaker_pres_level', true)) {
                        echo '<option value="ri" selected="selected">Ri (avanc&eacute;)</option>';
                } else {
                        echo '<option value="ri">Ri (avanc&eacute;)</option>';
                }
                if ("all" == get_post_meta($post->ID, 'speaker_pres_level', true)) {
                        echo '<option value="all" selected="selected">All</option>';
                } else {
                        echo '<option value="all">All</option>';
                }
        echo '</select><br /><br />';

	echo '<label for="speaker_url">Website (<strong>Use http://</strong>)</label><br />';
	echo '<input style="width: 55%;" type="text" name="speaker_url" value="'.get_post_meta($post->ID, 'speaker_url', true).'" /><br /><br />';

	echo '<label for="speaker_twitter_url">Twitter ID (<strong>No @ symbol, just the handle</strong>)</label><br />';
	echo '<input style="width: 55%;" type="text" name="speaker_twitter_url" value="'.get_post_meta($post->ID, 'speaker_twitter_url', true).'" /><br /><br />';

	echo '<label for="speaker_pres_url">Presentation URL (<strong>Use http://</strong>)</label><br />';
	echo '<input style="width: 55%;" type="text" name="speaker_pres_url" value="'.get_post_meta($post->ID, 'speaker_pres_url', true).'" /><br /><br />';
}

/* When the post is saved, saves our speaker data */
function save_speaker_postdata($post_id, $post) {
   	if ( !wp_verify_nonce( $_POST['speakers_noncename'], plugin_basename(__FILE__) )) {
	return $post->ID;
	}

	/* confirm user is allowed to save page/post */
	if ( 'page' == $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post->ID ))
		return $post->ID;
	} else {
		if ( !current_user_can( 'edit_post', $post->ID ))
		return $post->ID;
	}

	/* ready our data for storage */
	foreach ($_POST as $key => $value) {
        $mydata[$key] = $value;
    }

	/* Add values of $mydata as custom fields */
	foreach ($mydata as $key => $value) {
		if( $post->post_type == 'revision' ) return;
		$value = implode(',', (array)$value);
		if(get_post_meta($post->ID, $key, FALSE)) {
			update_post_meta($post->ID, $key, $value);
		} else {
			add_post_meta($post->ID, $key, $value);
		}
		if(!$value) delete_post_meta($post->ID, $key);
	}
}

add_action('save_post', 'save_speaker_postdata', 1, 2); // save the custom fields

/* move template files on activation */
register_activation_hook(__FILE__, "speaker_activation");

function speaker_activation()
{
	//move files around
	$pluginpath = WP_PLUGIN_DIR.'/'.plugin_basename(dirname(__FILE__)).'/';
	$themepath =  get_template_directory()."/";

	$templates = glob($pluginpath."template*");
	foreach($templates as $t)
	{
		copy($t,$themepath.basename($t));
	}

	$singles = glob($pluginpath."single-speakers.php");
	foreach($singles as $s)
	{
		copy($s,$themepath.basename($s));
	}
}

/*
 * Shortcode for adding speaker info. For example,
 * could be used on a schedule page.
 * 
 * Format: [speaker_snippet id="3"]
 * 
 * id = the post id for the speaker
 * 
 * will return thumbnail, speaker name, session title
 * 
 */

function speaker_snippet($atts, $content = null) {
	extract( shortcode_atts( array(
      'id' => 0,
      ), $atts ) );
      
	if ( !$id ) {
		return;
	}
	$id = absint( $id );
	
	$output = '<div class="speaker_snippet">';
	$output .= '<div class="thumbnail"><a href="' . get_permalink( $id ) . '">' . get_the_post_thumbnail( $id, 'speaker_thumbnail' ) . '</a></div>';
	$output .= '<div class="name"><a href="' . get_permalink( $id ) . '">' . get_the_title( $id ) . '</a></div>';
	$output .= '<div class="title">' . get_post_meta( $id, 'speaker_pres_title', true ) . '</div>';
	$output .= '</div>';
	
	return $output;
}
add_shortcode( 'speaker_snippet', 'speaker_snippet' );

/* template tags */
function speaker_links() {
	global $post;
	
	$twitter = get_post_meta( $post->ID, 'speaker_twitter_url', true );
	$url = get_post_meta( $post->ID, 'speaker_url', true );

	if($twitter) {
		$output = '<a href="http://twitter.com/' . $twitter . '" target="_blank">Twitter</a>';
	}
	if($url && $twitter) {
		$output = $output . ' | '; 
	}
	if($url) {
		$url_tag = '<a href="' . $url . '" target="_blank">Website</a>';
		$output = $output . $url_tag; 
	}
	echo $output;
}

function speaker_presentation_link() {
	global $post;
	
	$pres = get_post_meta( $post->ID, 'speaker_pres_url', true );
	$pres = apply_filters( 'speaker_presentation', $pres );
	
	$pres_tag = '<a href="' . $pres . '" target="_blank">Presentation Slides</a>';
	$pres_tag = apply_filters( 'speaker_presentation_tag', $pres_tag );
	
	if ( $pres ) {
		echo $pres_tag;
	}
}

function speaker_bio() {
	global $post;
	
	$output = wpautop( get_post_meta( $post->ID, 'speaker_bio', true ) );
	
	$output = apply_filters( 'speaker_bio', $output );
	
	echo $output;
}

function speaker_duration() {
	global $post;

	$label = '<strong>Dur&eacute;e&nbsp;: </strong>';

	$output = get_post_meta( $post->ID, 'speaker_pres_duration', true );
	switch($output) {
		case "30"  : $output = "30 minutes";	break;
		case "60"  : $output = "1 heure";	break;
		case "90"  : $output = "1 heure 30";	break;
		case "120" : $output = "2 heures";	break;
		case "180" : $output = "3 heures";	break;
	}

	$output = apply_filters( 'speaker_duration', $output );
	echo $label.$output;
}

function speaker_category() {
	global $post;

	$label = '<strong>Cat&eacute;gorie&nbsp;: </strong>';

	$output = get_post_meta( $post->ID, 'speaker_pres_category', true );
	switch($output) {
		case "methodology"  : $output = "M&eacute;thodologie";	break;
		case "hands_on"  : $output = "Pratique";	break;
		case "beyon_agile"  : $output = "Au del&agrave; de l'Agile";	break;
		case "incubation"  : $output = "Incubation";	break;
		case "cnc"  : $output = "Command and Control";	break;
	}

	$output = apply_filters( 'speaker_category', $output );

	echo $label.$output;
}

function speaker_level() {
	global $post;

	$label = '<strong>Niveau&nbsp;: </strong>';

	$output = get_post_meta( $post->ID, 'speaker_pres_level', true );
	switch($output) {
		case "shu"  : $output = "Shu (d&eacute;butant)";	break;
		case "ha"  : $output = "Ha (moyen)";	break;
		case "ri"  : $output = "Ri (avanc&eacute;)";	break;
		case "all"  : $output = "Tous";	break;
	}

	$output = apply_filters( 'speaker_level', $output );

	echo $label.$output;
}

function speaker_name() {
	global $post;
	
	$output = get_post_meta( $post->ID, 'speaker_pres_title', true );
	
	$output = apply_filters( 'speaker_presentation_name', $output );
	
	echo '<strong>' . $output .'</strong>';
}

function speaker_presentation_description() {
	global $post;
	
	$output = wpautop( get_post_meta( $post->ID, 'speaker_pres_description', true ) );
	
	$output = apply_filters( 'speaker_presentation_description', $output );
	
	echo $output;
}

?>
