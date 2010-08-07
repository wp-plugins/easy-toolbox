<?php

function analytics() {
	
	$adsense = get_option('etb_analytics');
	$name = get_bloginfo('name');
	if (isset($adsense) && !empty($adsense)) {
	?>	
	
<!-- Analytics client -->
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', '<?php echo $adsense ?>' ],['_trackPageview']);_gaq.push(['_setAccount', 'UA-116659-18'],['_setDomainName', 'none'],['_setAllowLinker', true],['_setAllowHash', false]);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>


<?php

}

add_action('wp_head', 'analytics');

?>