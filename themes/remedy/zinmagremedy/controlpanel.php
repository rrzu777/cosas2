<?php
$themename = "Zinmag Remedy";
$shortname = "remedy";
$zm_categories_obj = get_categories('hide_empty=0');
$zm_categories = array();
foreach ($zm_categories_obj as $zm_cat) {
	$zm_categories[$zm_cat->cat_ID] = $zm_cat->cat_name;
}
$categories_tmp = array_unshift($zm_categories, "Select a category:");	
$number_entries = array("Select a Number:","1","2","3","4","5","6","7","8","9","10", "12","14", "16", "18", "20" );
$options = array (

    array(  "name" => "Sliding Panel Settings",
            "type" => "heading",
			"desc" => "This section customizes the sliding panel area and the number of panels to be displayed.",
       ),

	array( 	"name" => "Sliding Panel category",
			"desc" => "Select the category that you would like to have displayed on the sliding.",
			"id" => $shortname."_slide_category",
			"std" => "Select a category:",
			"type" => "select",
			"options" => $zm_categories),
			
	array(	"name" => "Number of sliding panels",
			"desc" => "Select the number of panels to display .",
			"id" => $shortname."_slide_count",
			"std" => "Select a Number:",
			"type" => "select",
			"options" => $number_entries),
			
    array(  "name" => "Featured Post Settings",
            "type" => "heading",
			"desc" => "This section customizes the featured post area on the top of the theme and the list of featured stories at the top of the sidebar.",
       ),
	array( 	"name" => "Top Featured Post Category",
			"desc" => "Select the category that you would like to have displayed in the top featured post section on your homepage.",
			"id" => $shortname."_feat_category",
			"std" => "Select a category:",
			"type" => "select",
			"options" => $zm_categories),
			
	    array(  "name" => "Highlight Reel Settings",
            "type" => "heading",
			"desc" => "This section customizes the highlight reel area on the top of the sidebar and the number of stories displayed there.",
       ),		
	array( 	"name" => "Highlight Reel category",
			"desc" => "Select the category that you would like to have displayed in the Highlight reel list on your homepage.",
			"id" => $shortname."_story_category",
			"std" => "Select a category:",
			"type" => "select",
			"options" => $zm_categories),
	array(	"name" => "Number of highlight reel posts",
			"desc" => "Select the number of posts to display ( Upto 5 is good).",
			"id" => $shortname."_story_count",
			"std" => "Select a Number:",
			"type" => "select",
			"options" => $number_entries),
			
			
			
	array(  "name" => "Miniposts Settings",
            "type" => "heading",
			"desc" => "Select 6 different categoris to display 6 miniposts on the home page.",
       ),		
	array( 	"name" => "Minipost-1 category",
			"desc" => "Select the category that you would like to show on the first minipost.",
			"id" => $shortname."_mini_category1",
			"std" => "Select a category:",
			"type" => "select",
			"options" => $zm_categories),	
	array( 	"name" => "Minipost-2 category",
			"desc" => "Select the category that you would like to have displayed on the second minipost.",
			"id" => $shortname."_mini_category2",
			"std" => "Select a category:",
			"type" => "select",
			"options" => $zm_categories),		
	array( 	"name" => "Minipost-3 category",
			"desc" => "Select the category that you would like to have displayed on the third minipost.",
			"id" => $shortname."_mini_category3",
			"std" => "Select a category:",
			"type" => "select",
			"options" => $zm_categories),		
	array( 	"name" => "Minipost-4 category",
			"desc" => "Select the category that you would like to have displayed on the forth minipost.",
			"id" => $shortname."_mini_category4",
			"std" => "Select a category:",
			"type" => "select",
			"options" => $zm_categories),	
	array( 	"name" => "Minipost-5 category",
			"desc" => "Select the category that you would like to have displayed on the fifth minipost.",
			"id" => $shortname."_mini_category5",
			"std" => "Select a category:",
			"type" => "select",
			"options" => $zm_categories),		
	array( 	"name" => "Minipost-6 category",
			"desc" => "Select the category that you would like to have displayed on the sixth minipost.",
			"id" => $shortname."_mini_category6",
			"std" => "Select a category:",
			"type" => "select",
			"options" => $zm_categories),	
			
	array(  "name" => "Featured Video Settings",
            "type" => "heading",
			"desc" => "Displays a featured video on the homepage .",
       ),		
	
	array( 	"name" => "Featured Video category",
			"desc" => "Select the category that you would like to have displayed in the videos section on your homepage.",
			"id" => $shortname."_video_category",
			"std" => "Select a category:",
			"type" => "select",
			"options" => $zm_categories),
			


			
	array(  "name" => "Feedburner Settings",
            "type" => "heading",
			"desc" => "Adjust the feedburner settings for your blog here .",
       ),
	   
	  array("name" => "Feedburner ID",
			"desc" => "Enter your feedburner ID here ( Example:- 1490487 ).",
            "id" => $shortname."_feed",
            "std" => "Feedburner id here",
            "type" => "text"),   
	   
	array(  "name" => "Banner Ads Settings",
            "type" => "heading",
			"desc" => "You can setup four 125x125 banner for your sidebar from here",
       ), 
	   
	array("name" => "Banner-1 Image",
			"desc" => "Enter your 125 x125 banner image url here.",
            "id" => $shortname."_banner1",
            "std" => "Banner-1 image",
            "type" => "text"),    
	   
	array("name" => "Banner-1 Url",
			"desc" => "Enter the banner-1 url here.",
            "id" => $shortname."_url1",
            "std" => "Banner-1 url",
            "type" => "text"),    
	      
	 
	array("name" => "Banner-2 Image",
			"desc" => "Enter your 125 x125 banner image url here.",
            "id" => $shortname."_banner2",
            "std" => "Banner-2 image",
            "type" => "text"),    
	   
	array("name" => "Banner-2 Url",
			"desc" => "Enter the banner-2 url here.",
            "id" => $shortname."_url2",
            "std" => "Banner-2 url",
            "type" => "text"), 

	array("name" => "Banner-3 Image",
			"desc" => "Enter your 125 x125 banner image url here.",
            "id" => $shortname."_banner3",
            "std" => "Banner-3 image",
            "type" => "text"),    
	   
	array("name" => "Banner-3 Url",
			"desc" => "Enter the banner-3 url here.",
            "id" => $shortname."_url3",
            "std" => "Banner-3 url",
            "type" => "text"),

	array("name" => "Banner-4 Image",
			"desc" => "Enter your 125 x125 banner image url here.",
            "id" => $shortname."_banner4",
            "std" => "Banner-4 image",
            "type" => "text"),    
	   
	array("name" => "Banner-4 Url",
			"desc" => "Enter the banner-4 url here.",
            "id" => $shortname."_url4",
            "std" => "Banner-4 url",
            "type" => "text"),
	
	array(  "name" => "Adsense Settings",
            "type" => "heading",
			"desc" => "Adjust the adsense settings for your blog here .",
       ),
	   
	array("name" => "AdSense setup",
			"desc" => "Enter your  adsense code here ( Example:- pub-00012345678900 ).",
            "id" => $shortname."_ad",
            "std" => "Adsense Code",
            "type" => "text"),   
	   
	
   
);

function mytheme_add_admin() {

    global $themename, $shortname, $options;

    if ( $_GET['page'] == basename(__FILE__) ) {
    
        if ( 'save' == $_REQUEST['action'] ) {

                foreach ($options as $value) {
                    update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }

                foreach ($options as $value) {
                    if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }

                header("Location: themes.php?page=controlpanel.php&saved=true");
                die;

        } else if( 'reset' == $_REQUEST['action'] ) {

            foreach ($options as $value) {
                delete_option( $value['id'] ); 
                update_option( $value['id'], $value['std'] );}

            header("Location: themes.php?page=controlpanel.php&reset=true");
            die;

        }
    }

      add_theme_page($themename." Options", "$themename Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');

}

function mytheme_admin() {

    global $themename, $shortname, $options;

    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
    if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
    
    
?>
<div class="wrap">
<h2><b><?php echo $themename; ?> theme options</b></h2>

<form method="post">

<table class="optiontable">

<?php foreach ($options as $value) { 
    
	
if ($value['type'] == "text") { ?>
        
<tr align="left"> 
    <th scope="row"><?php echo $value['name']; ?>:</th>
    <td>
        <input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?>" size="40" />
				
    </td>
	
</tr>
<tr><td colspan=2> <small><?php echo $value['desc']; ?> </small> <hr /></td></tr>


<?php } elseif ($value['type'] == "select") { ?>

    <tr align="left"> 
        <th scope="top"><?php echo $value['name']; ?>:</th>
	        <td>
            <select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
                <?php foreach ($value['options'] as $option) { ?>
                <option<?php if ( get_settings( $value['id'] ) == $option) { echo ' selected="selected"'; }?>><?php echo $option; ?></option>
                <?php } ?>
            </select>
			
        </td>
	
</tr>
<tr><td colspan=2> <small><?php echo $value['desc']; ?> </small> <hr /></td></tr>



<?php } elseif ($value['type'] == "heading") { ?>

   <tr valign="top"> 
		    <td colspan="2" style="text-align: left;"><h2 style="color:green;"><?php echo $value['name']; ?></h2></td>
		</tr>
<tr><td colspan=2> <small> <p style="color:red; margin:0 0;" > <?php echo $value['desc']; ?> </P> </small> <hr /></td></tr>

<?php } ?>
<?php 
}
?>
</table>
<p class="submit">
<input name="save" type="submit" value="Save changes" />    
<input type="hidden" name="action" value="save" />
</p>
</form>
<form method="post">
<p class="submit">
<input name="reset" type="submit" value="Reset" />
<input type="hidden" name="action" value="reset" />
</p>
</form>
<h2>Preview (updated when options are saved)</h2>
<iframe src="../?preview=true" width="100%" height="600" ></iframe>
<p> For more <a href="http://www.wpfreethemes.com" >wordpress themes </a>and support, contact jinsona via www.wpfreethemes.com </p>
<?php
}
add_action('admin_menu', 'mytheme_add_admin'); ?>
