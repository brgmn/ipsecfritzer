<?php
//config
$config = array(
	'localNetwork' => '192.168.1', //your local network ip range
	'domain' => 'domain.com', //the domain, used for all account names
	'routeAllTrafficTroughVPN' => true, //define if everything should be routed and encrypted through the vpn gateway (even internet traffic)
);

//users
$accounts = array(
	'bernd' => array('localIP' => '201', 'secret' => 'asd8asd87bfgdfg87h', 'password' => 'geheim'),
	'bernd-mobile' => array('localIP' => '202', 'secret' => 'sdg67g7gfjashfisdf', 'password' => 'geheim'),
);