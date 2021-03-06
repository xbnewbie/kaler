<?php
/**
 * Created by PhpStorm.
 * User: My Computer
 * Date: 8/19/2017
 * Time: 11:10 AM
 */
require_once APPPATH.'third_party/vendor/autoload.php';
use JeroenDesloovere\VCard\VCard;
use Behat\Transliterator\Transliterator;

class vcf extends CI_Controller{
    //vcf 4.0
    function generate(){
        $NickName = $this->uri->segment(3);
        $this->load->model('Profile_model');
        $this->load->model('Company_model');
        $card = $this->Profile_model->get_profile_by_nickname($NickName);


        $profile =   $company = $this->Company_model->getById($card->IdCompany);
        $items = $this->Profile_model->get_item_profile($card->IdProfile);

        $data= array();
        foreach($items as $item){
            $data[$item->KodeCategory] = $item->Label;
        }






                 $phone_number=$data['phone'];

                 $email= $data['email'];

                 $job_title= $data['job'];


        $vcard = new VCard();

        $lastname = $card->LastName;
        $firstname = $card->FirstName;
        $additional = '';
        $prefix = '';
        $suffix = '';
        $company =$company->CompanyName;
        $url="http://localhost";
// add personal data
        $vcard->addName($lastname, $firstname, $additional, $prefix, $suffix);

// add work data
        $vcard->addCompany($company);
        $vcard->addJobtitle($job_title);
     //   $vcard->addRole($job_role);
        $vcard->addEmail($email);
        $vcard->addPhoneNumber($phone_number, 'PREF;WORK');
        $vcard->addPhoneNumber($phone_number, 'WORK');
      //  $vcard->addAddress(null, null, 'street', 'worktown', null, 'workpostcode', 'Belgium');
        $vcard->addURL($url);

        //$vcard->addPhoto('C:\wamp64\www\idcard\application\third_party\landscape.jpeg');

// return vcard as a string
//return $vcard->getOutput();

// return vcard as a download
        return $vcard->download();

    }
}