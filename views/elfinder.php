<script type="text/javascript">
var elfinder_loader;
// Check if elfinder_loader == true, then the libraries in the time already included
if(elfinder_loader != true)
{
	(function() 
	{
		// Set true for only one include
		elfinder_loader = true;
		// Include css file
		var elfinder_loader_css = document.createElement("link");
		elfinder_loader_css.type = "text/css";
		elfinder_loader_css.rel = "stylesheet";
		elfinder_loader_css.href = "<?php echo Route::url('elfinder/media', array('file' => 'css/elfinder.css'));?>";
		var s_css = document.getElementsByTagName("link")[0];
		s_css.parentNode.insertBefore(elfinder_loader_css, s_css);

		// Include js file
		var elfinder_loader_js = document.createElement("script");
		elfinder_loader_js.type = "text/javascript";
		elfinder_loader_js.async = false;
		elfinder_loader_js.src = "<?php echo Route::url('elfinder/media', array('file' => 'js/elfinder.js'));?>";
		var s_js = document.getElementsByTagName("script")[0];
		s_js.parentNode.insertBefore(elfinder_loader_js, s_js);
	})();
}
</script>
<script type="text/javascript">
// Using load event for to make sure that everything loaded. I have to problem with ready event.
$(window).load(function()
{
	$("#<?php echo $jq_selector;?>").elfinder(
	{
		url: "<?php echo $js_cmd_route;?>"
	});
});
</script>
<div id="<?php echo $jq_selector;?>" class="b-elfinder-view"></div>