=== CPT - Speakers ===
Contributors: vegasgeek, stastic, toddhuish, picklewagon
Tags: conference, speaker, speakers, custom post types, cpt, presenter, presenters
Donate Link: http://9seeds.com/donate/
Requires at least: 2.9
Tested up to: 3.1
Stable tag: 1.1

Easily create your conference speaker's page using CPT - Speakers.

== Description ==

This plugin creates a custom post type for event speakers. Includes speakers page and single-speakers page templates.

If you are upgrading from an earlier version, you will need to manually move the template_speakers.php and single-speakers.php files from the `/wp-content/plugins/cpt-speakers/` folder in to the folder for your active theme. If the file already exists in your theme folder, overwrite it with the new one.

== Installation ==

1. Upload the `cpt-speakers` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Two template files will be added to your current theme folder
1. Create a new page and select the `Speakers Page` template
1. Add your speakers from the WordPress dashboard
1. (optional) Add speaker snippets (via shortcode) to your schedule page (<a href="http://wordcampseattle.org/agenda/" target="_blank">example</a>).
	Shortcode format: <strong>[speaker_snippet id="3"]</strong> "3" would be the ID for the speaker you want to display
1. Add custom CSS to your theme's style sheet to format the speaker's page. You can use this as a base and tweak as needed:
`
#speakers {
	font-size: 12px;
	min-height: 300px;
}

#speaker_image_section {
	width: 150px;
	float: left;
	height: 300px;
	margin-right: 18px;
}

#speaker_image img {
	margin-top: 5px;
	border: 1px solid #333;
	padding: 3px;
	background: #0099cc;
}

#speaker_name {
	font-size: 18px;
	font-weight: bold;
	margin-bottom: 10px;
}

#speaker_url {
	text-align: center;
}

#speaker_twitter_url {
	text-align: center;
}

#speaker_pres_title {
	margin: 5px 0px 5px 0px;
	font-size: 13px;
}

#speaker_pres_description {
	font-size: 12px;
	font-family: arial, helvetica;
	line-height: 16px;
}

#speaker_session_description {
	font-size: 12px;
	line-height: 18px;
}

#speaker_image_section_single {
	width: 150px;
	float: left;
	height: 600px;
	margin-right: 18px;
}

#speaker_image_section_single img{
	margin-top: 5px;
	border: 1px solid #333;
	padding: 3px;
	background: #0099cc;
}

#pres_url {
	text-align: center;
}

.speaker_snippet .thumbnail {
	float:left;
	display:inline;
	margin-right:10px;
	border-bottom:0;
}
#content .speaker_snippet .thumbnail a {
	border-bottom:0;
}
.speaker_snippet .name {
	font-weight:bold;
	line-height:16px;
}
.speaker_snippet .title {
	font-size:0.9em;
	line-height:15px;
}
`

== Frequently Asked Questions ==

= Why am I getting a page not found error when trying to visit the single speaker's page? =

The Permalinks page needs to be re-saved. Go to Settings -> Permalinks and click the `Save Changes` button.

== Changelog ==

= 1.1 =
* Removed custom image uploader (uses featured image instead)
* Added shortcode for speaker snippets
* Updated template pages to use snippets

= 1.0.1 =
* Fixed issue with single template page

= 1.0 =
* Initial release

== Upgrade Notice ==
Please <a href="http://9seeds.com/news/plugin-update-cpt-speakers/" target="_blank">read this post</a> before upgrading!
