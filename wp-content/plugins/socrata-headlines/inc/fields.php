<?

$prefix = 'socrata_headlines_';

$fields = array(
	array( // Textarea
		'label'	=> 'Description', // <label>
		'desc'	=> '', // description
		'id'	=> $prefix.'description', // field id and name
		'type'	=> 'textarea' // type of field
	),
	array( // Text Input
		'label'	=> 'Link', // <label>
		'desc'	=> 'Link to source. Please include the http:// or https:// if appropriate.', // description
		'id'	=> $prefix.'link', // field id and name
		'type'	=> 'text' // type of field
	),
);

// Get and return the values for the URL and description
function get_socrata_headlines_meta() {
	global $post;
	$socrata_headlines_description = get_post_meta($post->ID, 'socrata_headlines_description', true); // 1
	$socrata_headlines_link = get_post_meta($post->ID, 'socrata_headlines_link', true); // 2


  return array(
	$socrata_headlines_description,
	$socrata_headlines_link
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
$socrata_headlines_box = new socrata_headlines_custom_add_meta_box( 'socrata_headlines_box', 'Headline Details', $fields, 'socrata-headlines', true );


