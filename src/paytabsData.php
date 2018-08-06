<?php
namespace Eslam\Paytabs;
use Saloka\Paytabs\paytabs;

class PaytabsData {

    private $pt;

    function __construct() {
        $this->pt = new paytabs(config('paytabs.merchant_email'),config('paytabs.secret_key'));
    }
    public function RunPaytabs($X) {
        $X['title'] = $X['cc_first_name'].' '.$X['cc_last_name'];
        $X['cms_with_version']   = config('paytabs.cms_with_version');
        $X['site_url']           = config('paytabs.site_url');
        $X['return_url']         = config('paytabs.return_url');
        $X['msg_lang']           = config('paytabs.msg_lang');
        $result = $this->pt->create_pay_page($X); 
        if($result->response_code == 100) {
            $myresult = ['result'=>'1','data'=>$result->payment_url,'paytabs_api_key'=>$result->api_key];
        } else {
           $myresult = ['result'=>'0','data'=>$result->result,'paytabs_api_key'=>'0'];
        }
        return $myresult;
    }

}