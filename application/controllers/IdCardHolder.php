<?php
/**
 * Created by PhpStorm.
 * User: My Computer
 * Date: 8/30/2017
 * Time: 10:03 AM
 */
require_once APPPATH.'third_party/vendor/autoload.php';

class IdCardHolder extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');

        $this->fb = new Facebook\Facebook([
            'app_id' => '708242379369755', // Replace {app-id} with your app id
            'app_secret' => '8bcf0d636e0168e7777eb936102b5f6e',
            'default_graph_version' => 'v2.2','fb_exchange_token'=>''
        ]);

        $this->helper = $this->fb->getRedirectLoginHelper();

    }

    function requestPermission(){
        $permissions = ['email']; // Optional permissions
        $loginUrl = $this->helper->getLoginUrl('http://localhost/idcard/index.php/idcardholder/successcallback', $permissions);

        $request_uri =$_SERVER['REQUEST_URI'];
        setcookie('request_uri',$request_uri,time()+500,"/");
        redirect($loginUrl);
    }

    function successCallBack(){
        try {
            $accessToken = $this->helper->getAccessToken();
            try {

                $client = $this->fb->getOAuth2Client();
                try {
                    // Returns a long-lived access token
                    $accessTokenLong = $client->getLongLivedAccessToken($accessToken);
                } catch(Facebook\Exceptions\FacebookSDKException $e) {
                    // There was an error communicating with Graph
                    echo $e->getMessage();
                    exit;
                }
                if (isset($accessTokenLong)) {
                    $_SESSION['facebook_access_token'] = (string) $accessTokenLong;
                    echo "logged in";
                }else{
                    redirect("requestPermission");
                }
            } catch(Facebook\Exceptions\FacebookResponseException $e) {
                echo 'Graph returned an error: ' . $e->getMessage();
                exit;
            } catch(Facebook\Exceptions\FacebookSDKException $e) {
                echo 'Facebook SDK returned an error: ' . $e->getMessage();
                exit;
            }


        } catch(Facebook\Exceptions\FacebookResponseException $e) {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(Facebook\Exceptions\FacebookSDKException $e) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }
    }

   function testToken(){
       try {
           $accessToken =$_SESSION['facebook_access_token'];
           try {
               // Returns a `Facebook\FacebookResponse` object
               $response = $this->fb->get('/me?fields=id,name,email', $accessToken);

               $user = $response->getGraphUser();

               echo 'Name: ' . $user['email'];
           } catch(Facebook\Exceptions\FacebookResponseException $e) {
               echo 'Graph returned an error: ' . $e->getMessage();
               exit;
           } catch(Facebook\Exceptions\FacebookSDKException $e) {
               echo 'Facebook SDK returned an error: ' . $e->getMessage();
               exit;
           }

           $user = $response->getGraphUser();

           echo 'email: ' . $user['email'];
           echo "<p>";
           echo $_COOKIE['request_uri'];
           exit();
// OR
// echo 'Name: ' . $user->getName();

       } catch(Facebook\Exceptions\FacebookResponseException $e) {
           // When Graph returns an error
           echo 'Graph returned an error: ' . $e->getMessage();
           exit;
       } catch(Facebook\Exceptions\FacebookSDKException $e) {
           // When validation fails or other local issues
           echo 'Facebook SDK returned an error: ' . $e->getMessage();
           exit;
       }

}
}