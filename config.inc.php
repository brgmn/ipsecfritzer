<?php
//config
$config = array(
	'localNetwork' => '192.168.178.1', //your local network ip range
	'domain' => 'subsonic.dyndns-home.com', //the domain, used for all account names
	'routeAllTrafficTroughVPN' => true, //define if everything should be routed and encrypted through the vpn gateway (even internet traffic)
);

//users
$accounts = array(
	'Marcel' => array('localIP' => '201', 'secret' => 'Muenchen', 'password' => '1234'),
);