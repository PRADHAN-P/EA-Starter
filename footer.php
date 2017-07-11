<?php
/**
 * Site Footer
 *
 * @package      EAStarter
 * @author       Bill Erickson
 * @since        1.0.0
 * @license      GPL-2.0+
**/

tha_footer_before();
echo '<footer class="site-footer" role="contentinfo"><div class="wrap">';
echo '<div class="row"><div class="col-md-12">';
tha_footer_top();

echo '<p>Copyright &copy; ' . date( 'Y' ) . '</p>';

tha_footer_bottom();
echo '</div></div>';
echo '</div></footer>';
tha_footer_after();

echo '</div>';
tha_body_bottom();
wp_footer();

echo '</body></html>';
