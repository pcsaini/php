<?php
/**
 * Created by PhpStorm.
 * User: pcsaini
 * Date: 8/12/16
 * Time: 12:33 PM
 */

class authcheck{

    public function __construct()
    {
        $this->model = new auth_model();
        $this->helper = new helper();

        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        if (isset($_SESSION['session_id'])){
            $result = $this->model->checkSession($_SESSION['session_id']);
            if($result) {
                $this->$result = $result;
            }
            else {
                if($GLOBALS['seourl'] == "false") {
                    header("Location: ".$GLOBALS['dynamic_url']."login&redirecturl=".$actual_link);
                    die();
                }
                else {
                    header("Location: ".$GLOBALS['dynamic_url']."login?redirecturl=".$actual_link);
                    die();
                }
            }
        }
        else {
            if($GLOBALS['seourl'] == "false") {
                header("Location: ".$GLOBALS['dynamic_url']."login&redirecturl=".$actual_link);
                die();
            }
            else {
                header("Location: ".$GLOBALS['dynamic_url']."login?redirecturl=".$actual_link);
                die();
            };
        }

    }


}