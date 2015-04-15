<?

$prefix = 'socrata_team_';

$fields = array(
	array( // Text Input
		'label'	=> 'Job Title', // <label>
		'desc'	=> '', // description
		'id'	=> $prefix.'jobtitle', // field id and name
		'type'	=> 'text' // type of field
	),
	array( // Textarea
		'label'	=> 'Quote', // <label>
		'desc'	=> '', // description
		'id'	=> $prefix.'quote', // field id and name
		'type'	=> 'textarea' // type of field
	),
	array( // Editor
	    'label' => 'Spotlight Text',
	    'desc'  => '',
	    'id'    => 'editorField',
	    'type'  => 'editor',
	    'sanitizer' => 'wp_kses_post',
	    'settings' => array(
	        'textarea_name' => 'editorField'
	    )
	),
);

// Get and return the values for the URL and description
function get_socrata_team_meta() {
  global $post;
  $socrata_team_jobtitle = get_post_meta($post->ID, 'socrata_team_jobtitle', true); // 0
  $socrata_team_quote = get_post_meta($post->ID, 'socrata_team_quote', true); // 1
  $editorField = get_post_meta($post->ID, 'editorField', true); // 2


  return array(
	$socrata_team_jobtitle,
	$socrata_team_quote,
	$editorField
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
$socrata_team_box = new socrata_team_custom_add_meta_box( 'socrata_team_box', 'Team Details', $fields, 'socrata-team', true );