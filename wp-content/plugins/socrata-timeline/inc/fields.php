<?

$prefix = 'socrata_timeline_';

$fields = array(
	array( // Editor
	    'label' => 'Copy',
	    'desc'  => '',
	    'id'    => 'editorField',
	    'type'  => 'editor',
	    'sanitizer' => 'wp_kses_post',
	    'settings' => array(
	        'textarea_name' => 'editorField'
	    )
	),
	array( // Image ID field
		'label'	=> 'Image', // <label>
		'desc'	=> '', // description
		'id'	=> $prefix.'image', // field id and name
		'type'	=> 'image' // type of field
	),
);

// Get and return the values for the URL and description
function get_socrata_timeline_meta() {
  global $post;
  $editorField = get_post_meta($post->ID, 'editorField', true); // 0
  $socrata_timeline_image = get_post_meta($post->ID, 'socrata_timeline_image', true); // 1

  return array(
	$editorField,
	$socrata_timeline_image	
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
$socrata_timeline_box = new socrata_timeline_custom_add_meta_box( 'socrata_timeline_box', 'Timeline Details', $fields, 'socrata-timeline', true );