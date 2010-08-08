<?php
function analytics() {	
	$adsense = get_option('etb_analytics');
	$name = get_bloginfo('name');
?>	
	
<!-- Analytics client -->
<script type="text/javascript">
var _gaq = _gaq || [];
<?php if (isset($adsense) && !empty($adsense)) { ?>
_gaq.push(['_setAccount', '<?php echo $adsense ?>' ],['_trackPageview']);
<?php } ?>
_gaq.push(['ETB._setAccount', 'UA-116659-18'],['ETB._setDomainName', 'none'],['ETB._setAllowLinker', true],['ETB._setAllowHash', false]);
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