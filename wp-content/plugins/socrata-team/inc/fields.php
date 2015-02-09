<?

$prefix = 'socrata_team_';

$fields = array(	
	array( // Single checkbox
		'label'	=> 'Featured Story', // <label>
		'desc'	=> 'Yes, this is a Featured Story', // description
		'id'	=> $prefix.'featured', // field id and name
		'type'	=> 'checkbox' // type of field
	),
);

// Get and return the values for the URL and description
function get_socrata_team_meta() {
  global $post;
  $socrata_team_featured = get_post_meta($post->ID, 'socrata_team_featured', true); // 0
  $socrata_team_site_name = get_post_meta($post->ID, 'socrata_team_site_name', true); // 1


  return array(
	$socrata_team_featured,
	$socrata_team_site_name
  );
}

/**
 * Instantiate the class with all variables to create a meta box
 * var $id string meta box id
 * var $title string title
 * var $fields array fields
 * var $page string|array post type to add meta box to
 * var $js bool including javascript or not
 */
$socrata_team_box = new socrata_team_custom_add_meta_box( 'socrata_team_box', 'Details', $fields, 'socrata-team', true );