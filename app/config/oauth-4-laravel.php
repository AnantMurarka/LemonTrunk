<?php

return array
( 

    /*
    |--------------------------------------------------------------------------
    | oAuth Config
    |--------------------------------------------------------------------------
    */
    'storage' => 'Session', 
    
    'consumers' => array
    (
        'Facebook' => array(
            'client_id'     => '443138082488299',
            'client_secret' => '588e63fab70bb56a27a3b82bda6b2c1e',
            'scope'         => array('email','read_friendlists','user_online_presence'),
        ),    

        'Google' => array(
		    'client_id'     => '417054929191-qiu5ahmtrnr8nc7auvmckmq3pg9psquq.apps.googleusercontent.com',
		    'client_secret' => '3wQXx-crh_-HhFCw4AgICR4M',
		    'scope'         => array('userinfo_email', 'userinfo_profile'),
		),

		'Linkedin' => array(
		    'client_id'     => '75pqa2rktury51',
		    'client_secret' => '4a611ce0-d1ae-4347-b32f-476abcc2f409',
		), 

        'Twitter' => array(
            'client_id'     => '',
            'client_secret' => '',
        ), 

    )

);