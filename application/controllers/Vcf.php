<?php
/**
 * Created by PhpStorm.
 * User: My Computer
 * Date: 8/19/2017
 * Time: 11:10 AM
 */
use JeroenDesloovere\VCard\VCard;
class vcf extends CI_Controller{
    //vcf 4.0
    function generate_vcf(){
        require_once APPPATH.'third_party/vendor/autoload.php';

        $vcard = new VCard();

        $lastname = 'Desloovere';
        $firstname = 'Jeroen';
        $additional = '';
        $prefix = '';
        $suffix = '';
        $phone_number="1234121212";
        $email = 'info@jeroendesloovere.be';
        $job_title="Web Developer";
        $job_role="Coding";
        $company ="PT Likuis Tagedor";
        $url="http://www.jeroendesloovere.be";
// add personal data
        $vcard->addName($lastname, $firstname, $additional, $prefix, $suffix);

// add work data
        $vcard->addCompany($company);
        $vcard->addJobtitle($job_title);
        $vcard->addRole($job_role);
        $vcard->addEmail($email);
        $vcard->addPhoneNumber($phone_number, 'PREF;WORK');
        $vcard->addPhoneNumber($phone_number, 'WORK');
      //  $vcard->addAddress(null, null, 'street', 'worktown', null, 'workpostcode', 'Belgium');
        $vcard->addURL($url);

        $vcard->addPhoto('C:\wamp64\www\idcard\application\third_party\landscape.jpeg');

// return vcard as a string
//return $vcard->getOutput();

// return vcard as a download
        return $vcard->download();

    }
}