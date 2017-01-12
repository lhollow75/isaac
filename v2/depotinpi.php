<?php
/**
 * # Instantiate. Visit https://api.ovh.com/createToken/index.cgi?GET=/me
 * to get your credentials
 */
require __DIR__ . '/php-ovh-2.0.1-with-dependencies/vendor/autoload.php';
use \Ovh\Api;

$ovh = new Api( 'xxxxxxxxxx',  // Application Key
                'xxxxxxxxxx',  // Application Secret
                'ovh-eu',      // Endpoint of API OVH Europe (List of available endpoints)
                'xxxxxxxxxx'); // Consumer Key
echo "Welcome " . $ovh->get('/me')['firstname'];

$result = $ovh->get('/order/cart/7bf7f71d-15ea-479b-bd51-df638b8c0843/domain', array(
	'domain' => 'isaac.fr', // Domain name requested (type: string)
));

print_r( $result );
?>