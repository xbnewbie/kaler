<?php
/**
 * Created by PhpStorm.
 * User: My Computer
 * Date: 8/30/2017
 * Time: 9:04 AM
 */
require_once APPPATH.'third_party/vendor/autoload.php';

class Fb extends CI_Controller{

    function CC(){

        $fb = Facebook\Facebook([
            'app_id' => '708242379369755',
            'app_secret' => '8bcf0d636e0168e7777eb936102b5f6e',
            'default_graph_version' => 'v2.10',
            //'default_access_token' => '{access-token}', // optional
        ]);
    }
}