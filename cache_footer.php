<?php
// Grab the uncached page contents
$cache_contents = ob_get_contents();
ob_end_flush();
error_log($cache_contents);
// Save it to the cache for next time
$cache->write_cache($cache_contents);

?>
