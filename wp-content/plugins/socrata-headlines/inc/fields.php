<?

$prefix = 'socrata_headlines_';

$fields = array(	
	array( // Single checkbox
		'label'	=> 'Featured Story', // <label>
		'desc'	=> 'Yes, this is a Featured Story', // description
		'id'	=> $prefix.'featured', // field id and name
		'type'	=> 'checkbox' // type of field
	),
);

// Get and return the values for the URL and description
function get_socrata_headlines_meta() {
  global $post;
  $socrata_headlines_featured = get_post_meta($post->ID, 'socrata_headlines_featured', true); // 0
  $socrata_headlines_site_name = get_post_meta($post->ID, 'socrata_headlines_site_name', true); // 1


  return array(
	$socrata_headlines_featured,
	$socrata_headlines_site_name
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
$socrata_headlines_box = new socrata_headlines_custom_add_meta_box( 'socrata_headlines_box', 'Details', $fields, 'socrata-headlines', true );


