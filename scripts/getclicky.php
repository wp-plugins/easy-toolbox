<?php
function getclicky() {	
	$getclicky = get_option('etb_getclicky');
?>	

<script type="text/javascript">
var clicky_site_ids = clicky_site_ids || [];
clicky_site_ids.push(<?php echo $getclicky ?>);
(function() {
  var s = document.createElement('script');
  s.type = 'text/javascript';
  s.async = true;
  s.src = '//static.getclicky.com/js';
  ( document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0] ).appendChild( s );
})();
</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/<?php echo $getclicky ?>ns.gif" /></p></noscript>
	
<?php
}
add_action('wp_head', 'getclicky');

?>