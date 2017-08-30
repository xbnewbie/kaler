<?php
/**
 * Created by PhpStorm.
 * User: My Computer
 * Date: 8/23/2017
 * Time: 8:58 AM
 */
require_once APPPATH . 'third_party/vendor/autoload.php';

class Main extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Profile_model');
        $this->load->helper('cookie');
        $this->fb = new Facebook\Facebook([
            'app_id' => '708242379369755', // Replace {app-id} with your app id
            'app_secret' => '8bcf0d636e0168e7777eb936102b5f6e',
            'default_graph_version' => 'v2.2'
        ]);


    }


    function index()
    {

        $NickName = $this->uri->segment(1);
        if ($NickName == "admin") {
            redirect('index.html#!/login');
        } else {
            if ($NickName == '') {
                exit('not provided');
            }
            $profile = $this->Profile_model->get_profile_by_nickname($NickName);
            setcookie("last_uri_request", $_SERVER['REQUEST_URI'], time() + 1000, "/");
            $this->helper = $this->fb->getRedirectLoginHelper();
            if (!isset($_SESSION['facebook_access_token'])) {
                $this->requestPermission();
            } else {
                $user = $this->getFacebookData(); //['email,'id,'name']
                if ($user == null) {
                    $this->requestPermission();
                    exit();
                }
                $IdFacebook = $user['id'];

                $cookie = array(
                    'name' => 'IdFacebook',
                    'value' => $user['id'],
                    'expire' => time()+86500,
                    'path'   => '/',
                );
                set_cookie($cookie);
                $cookie = array(
                    'name' => 'name',
                    'value' => $user['name'],
                    'expire' => time()+86500,
                    'path'   => '/',
                );
                set_cookie($cookie);
                $pc = array("IdFacebook" => $IdFacebook, "IdProfile" => $profile->IdProfile);
                $this->Profile_model->insertProfileCollection($pc);
            }


            $this->Profile_model->add_visitor($NickName);
            redirect("index.html#!/display_card/$NickName");
        }
    }

    function CardCollection()
    {
        $c = get_cookie('IdFacebook');

        if(isset($c)){
            $IdFacebook = get_cookie('IdFacebook');
        }else{
            $user = $this->getFacebookData();
            $IdFacebook = $user['id'];
        }

        if($IdFacebook >1){
            $cards = $this->Profile_model->getAllProfileCollection($IdFacebook);
            $this->success_msg($cards);
        }else{
            $this->error_msg();
        }

    }

    function requestPermission()
    {
        $permissions = ['email']; // Optional permissions
        $loginUrl = $this->helper->getLoginUrl('http://localhost/idcard/index.php/idcardholder/successcallback', $permissions);
        redirect($loginUrl);
    }

    function getFacebookData()
    {
        try {
            $accessToken = $_SESSION['facebook_access_token'];
            try {
                // Returns a `Facebook\FacebookResponse` object
                $response = $this->fb->get('/me?fields=id,name,email', $accessToken);

                $user = $response->getGraphUser();
                return $user;
            } catch (Facebook\Exceptions\FacebookResponseException $e) {
                echo 'Graph returned an error: ' . $e->getMessage();
                exit;
            } catch (Facebook\Exceptions\FacebookSDKException $e) {
                echo 'Facebook SDK returned an error: ' . $e->getMessage();
                exit;
            }
            $user = $response->getGraphUser();
        } catch (Facebook\Exceptions\FacebookResponseException $e) {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch (Facebook\Exceptions\FacebookSDKException $e) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }
        return null;
    }

    function getFacebookAccount(){

            $user = $this->getFacebookData();
            $this->success_msg($user);
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
                     $requested_url = $_COOKIE['last_uri_request'];
                     redirect($requested_url);
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

    function success_msg($data = '')
    {
        $arr = array("status" => true, "data" => $data);
        echo json_encode($arr);
    }
    function error_msg($msg = '')
    {
        $arr = array("status" => false, "data" => $msg);
        echo json_encode($arr);
    }

}