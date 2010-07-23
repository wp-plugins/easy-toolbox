<?php

function webmastertools() {

$webmastertools = get_option('etb_webmastertools');

if (isset($webmastertools) && !empty($webmastertools)) {
echo '<meta name="google-site-verification" content="'. get_option('etb_webmastertools') .'"/>'."\n";
}

}

add_action('wp_head', 'webmastertools');

?>