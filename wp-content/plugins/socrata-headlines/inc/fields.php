<?

$prefix = 'socrata_stories_';

$fields = array(	
	array( // Single checkbox
		'label'	=> 'Featured Story', // <label>
		'desc'	=> 'Yes, this is a Featured Story', // description
		'id'	=> $prefix.'featured', // field id and name
		'type'	=> 'checkbox' // type of field
	),
	array( // Single checkbox
		'label'	=> 'Site Only', // <label>
		'desc'	=> 'Checking this will exclude a detail page and link directly to the site. REQUIRED FIELDS: Site Name, Site URL, and Feature Image. You should also set the Meta Robots Index to No Index under the Advanced Tab in Wordpress SEO by Yoast below. You still need to select Region, Type, and Product. Other than that, no other content is necessary.', // description
		'id'	=> $prefix.'site_only', // field id and name
		'type'	=> 'checkbox' // type of field
	),	
	array( // Text Input
		'label'	=> 'Site Name', // <label>
		'desc'	=> 'Name of the site. Example: DataSocrata', // description
		'id'	=> $prefix.'site_name', // field id and name
		'type'	=> 'text' // type of field
	),
	array( // Text Input
		'label'	=> 'Site URL', // <label>
		'desc'	=> 'Please includ the http:// or https://', // description
		'id'	=> $prefix.'site_url', // field id and name
		'type'	=> 'text' // type of field
	),
	array( // Image ID field
		'label'	=> 'Logo', // <label>
		'desc'	=> 'Minimum of 300px wide or larger', // description
		'id'	=> $prefix.'logo', // field id and name
		'type'	=> 'image' // type of field
	),
	array( // jQuery UI Date input
		'label'	=> 'Live Since', // <label>
		'desc'	=> 'When did this go live?', // description
		'id'	=> $prefix.'date', // field id and name
		'type'	=> 'date' // type of field
	),
	array( // Text Input
		'label'	=> 'Twitter Handle', // <label>
		'desc'	=> 'Example: @socrata', // description
		'id'	=> $prefix.'twitter_handle', // field id and name
		'type'	=> 'text' // type of field
	),
	array( // Text Input
		'label'	=> 'Twitter URL', // <label>
		'desc'	=> 'Link to Twitter handle', // description
		'id'	=> $prefix.'twitter_url', // field id and name
		'type'	=> 'text' // type of field
	),
	array( // Textarea
		'label'	=> 'Short Description', // <label>
		'desc'	=> 'Short description shows on the landing page tiles.', // description
		'id'	=> $prefix.'shortdescription', // field id and name
		'type'	=> 'textarea' // type of field
	),	
	array( // Image ID field
		'label'	=> 'Screen Shot One', // <label>
		'desc'	=> 'Minimum of 300px wide or larger', // description
		'id'	=> $prefix.'screen_one', // field id and name
		'type'	=> 'image' // type of field
	),
	array( // Image ID field
		'label'	=> 'Screen Shot Two', // <label>
		'desc'	=> 'Minimum of 300px wide or larger', // description
		'id'	=> $prefix.'screen_two', // field id and name
		'type'	=> 'image' // type of field
	),
	array( // Image ID field
		'label'	=> 'Screen Shot Three', // <label>
		'desc'	=> 'Minimum of 300px wide or larger', // description
		'id'	=> $prefix.'screen_three', // field id and name
		'type'	=> 'image' // type of field
	),
	array( // Textarea
		'label'	=> 'Quote', // <label>
		'desc'	=> '', // description
		'id'	=> $prefix.'quote', // field id and name
		'type'	=> 'textarea' // type of field
	),	
	array( // Text Input
		'label'	=> 'Quote Source', // <label>
		'desc'	=> 'Example: Bill Smith, CEO Skynet', // description
		'id'	=> $prefix.'quote_source', // field id and name
		'type'	=> 'text' // type of field
	),
	array( // Image ID field
		'label'	=> 'Quote Headshot', // <label>
		'desc'	=> 'Headshot for Quote', // description
		'id'	=> $prefix.'quote_headshot', // field id and name
		'type'	=> 'image' // type of field
	),
	array( // Text Input
		'label'	=> 'Press 1 Headline', // <label>
		'desc'	=> 'Press Headline', // description
		'id'	=> $prefix.'press_one', // field id and name
		'type'	=> 'text' // type of field
	),
	array( // Text Input
		'label'	=> 'Press 1 URL', // <label>
		'desc'	=> 'Please include the http:// or https://', // description
		'id'	=> $prefix.'press_one_link', // field id and name
		'type'	=> 'text' // type of field
	),
	array( // Text Input
		'label'	=> 'Press 1 Source', // <label>
		'desc'	=> 'Example: Mashable.com', // description
		'id'	=> $prefix.'press_one_source', // field id and name
		'type'	=> 'text' // type of field
	),
	array( // Text Input
		'label'	=> 'Press 2 Headline', // <label>
		'desc'	=> 'Press Headline', // description
		'id'	=> $prefix.'press_two', // field id and name
		'type'	=> 'text' // type of field
	),
	array( // Text Input
		'label'	=> 'Press 2 URL', // <label>
		'desc'	=> 'Please include the http:// or https://', // description
		'id'	=> $prefix.'press_two_link', // field id and name
		'type'	=> 'text' // type of field
	),
	array( // Text Input
		'label'	=> 'Press 2 Source', // <label>
		'desc'	=> 'Example: Mashable.com', // description
		'id'	=> $prefix.'press_two_source', // field id and name
		'type'	=> 'text' // type of field
	),
	array( // Text Input
		'label'	=> 'Press 3 Headline', // <label>
		'desc'	=> 'Press Headline', // description
		'id'	=> $prefix.'press_three', // field id and name
		'type'	=> 'text' // type of field
	),
	array( // Text Input
		'label'	=> 'Press 3 URL', // <label>
		'desc'	=> 'Please include the http:// or https://', // description
		'id'	=> $prefix.'press_three_link', // field id and name
		'type'	=> 'text' // type of field
	),
	array( // Text Input
		'label'	=> 'Press 3 Source', // <label>
		'desc'	=> 'Example: Mashable.com', // description
		'id'	=> $prefix.'press_three_source', // field id and name
		'type'	=> 'text' // type of field
	),
);

// Get and return the values for the URL and description
function get_socrata_stories_meta() {
  global $post;
  $socrata_stories_featured = get_post_meta($post->ID, 'socrata_stories_featured', true); // 0
  $socrata_stories_site_name = get_post_meta($post->ID, 'socrata_stories_site_name', true); // 1
  $socrata_stories_site_url = get_post_meta($post->ID, 'socrata_stories_site_url', true); // 2
  $socrata_stories_date = get_post_meta($post->ID, 'socrata_stories_date', true); // 3
  $socrata_stories_twitter_handle = get_post_meta($post->ID, 'socrata_stories_twitter_handle', true); // 4
  $socrata_stories_twitter_url = get_post_meta($post->ID, 'socrata_stories_twitter_url', true); // 5
  $socrata_stories_logo = get_post_meta($post->ID, 'socrata_stories_logo', true); // 6
  $socrata_stories_screen_one = get_post_meta($post->ID, 'socrata_stories_screen_one', true); // 7
  $socrata_stories_screen_two = get_post_meta($post->ID, 'socrata_stories_screen_two', true); // 8
  $socrata_stories_screen_three = get_post_meta($post->ID, 'socrata_stories_screen_three', true); // 9
  $socrata_stories_quote = get_post_meta($post->ID, 'socrata_stories_quote', true); // 10
  $socrata_stories_quote_source = get_post_meta($post->ID, 'socrata_stories_quote_source', true); // 11
  $socrata_stories_quote_headshot = get_post_meta($post->ID, 'socrata_stories_quote_headshot', true); // 12
  $socrata_stories_press_one = get_post_meta($post->ID, 'socrata_stories_press_one', true); // 13
  $socrata_stories_press_one_link = get_post_meta($post->ID, 'socrata_stories_press_one_link', true); // 14
  $socrata_stories_press_two = get_post_meta($post->ID, 'socrata_stories_press_two', true); // 15
  $socrata_stories_press_two_link = get_post_meta($post->ID, 'socrata_stories_press_two_link', true); // 16
  $socrata_stories_press_three = get_post_meta($post->ID, 'socrata_stories_press_three', true); // 17
  $socrata_stories_press_three_link = get_post_meta($post->ID, 'socrata_stories_press_three_link', true); // 18
  $socrata_stories_site_only = get_post_meta($post->ID, 'socrata_stories_site_only', true); // 19
  $socrata_stories_press_one_source = get_post_meta($post->ID, 'socrata_stories_press_one_source', true); // 20
  $socrata_stories_press_two_source = get_post_meta($post->ID, 'socrata_stories_press_two_source', true); // 21
  $socrata_stories_press_three_source = get_post_meta($post->ID, 'socrata_stories_press_three_source', true); // 22  
  $socrata_stories_shortdescription = get_post_meta($post->ID, 'socrata_stories_shortdescription', true); // 23





  return array(
	$socrata_stories_featured,
	$socrata_stories_site_name,
	$socrata_stories_site_url,
	$socrata_stories_date,
	$socrata_stories_twitter_handle,
	$socrata_stories_twitter_url,
	$socrata_stories_logo,
	$socrata_stories_screen_one,
	$socrata_stories_screen_two,
	$socrata_stories_screen_three,
	$socrata_stories_quote,
	$socrata_stories_quote_source,
	$socrata_stories_quote_headshot,
	$socrata_stories_press_one,
	$socrata_stories_press_one_link,
	$socrata_stories_press_two,
	$socrata_stories_press_two_link,
	$socrata_stories_press_three,
	$socrata_stories_press_three_link,
	$socrata_stories_site_only,
	$socrata_stories_press_one_source,
	$socrata_stories_press_two_source,
	$socrata_stories_press_three_source,
	$socrata_stories_shortdescription
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
$socrata_stories_box = new socrata_stories_custom_add_meta_box( 'socrata_stories_box', 'Customer Story Details', $fields, 'stories', true );


