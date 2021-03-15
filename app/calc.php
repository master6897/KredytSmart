<?php
require_once dirname(__FILE__).'/../config.php';

require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

function getParams(&$credits,&$years,&$percentage){
    $credits = isset($_REQUEST['credits'])? $_REQUEST['credits']: null;
    $years = isset($_REQUEST['years'])? $_REQUEST['years']: null;
    $percentage = isset($_REQUEST['percent'])?$_REQUEST['percent']: null ;
}
function validate(&$credits,&$years,&$percentage,&$messages){
    if(!(isset($credits) && isset($years) && isset($percentage))){
        return false;
    }
    //sprawdzenie czy puste
    if($credits == ""){
        $messages[] = "Nie podano wartości kredytu";
    }
    if($years == ""){
        $messages[] = "Nie podano na ile lat";
    }
    if($percentage == ""){
        $messages[] = "Nie podano na jakim oprocentowaniu";
    }

    //walidacja danych
    if(empty($messages)){
        if(! is_numeric($credits)){
            $messages[] = "Kredyt musi być liczbą!";
        }
        if(! is_numeric($years)){
            $messages[] = "Lata musza być liczbą!";
        }
        if(! is_numeric($percentage)){
            $messages[] = "Oprocentowanie musi być liczbą!";
        }
    }
    if(count($messages)!=0){
        return false;
    }else{
        return true;
    }
}

//kalkulacja kredytu
function calc(&$credits,&$years,&$percentage,&$messages,&$rata,&$cost){
    if(empty($messages)){
        $credits = floatval($credits);
        $yers = intval($years);
        $percentage = floatval($percentage);

        $cost = $credits + ($credits*($percentage/100));
        $rata = $cost/($years*12);
    }
}

$credits = null;
$years =  null;
$percentage = null;
$rata  = null;
$cost = null;
$messages  =array();

getParams($credits,$years,$percentage);
if(validate($credits,$years,$percentage,$messages)){
    calc($credits,$years,$percentage,$messages,$rata,$cost);
}

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator');
$smarty->assign('page_person','Marcin Puc');
$smarty->assign('page_localization','Jastrzębie-Zdrój');
$smarty->assign('page_email','pucmarcin@gmail.com');
$smarty->assign('page_phone','666-666-666');

$smarty->assign('rata',$rata);
$smarty->assign('cost',$cost);
$smarty->assign('credits',$credits);
$smarty->assign('years',$years);
$smarty->assign('percentage',$percentage);
$smarty->assign('messages',$messages);

$smarty->display(_ROOT_PATH.'/app/calc.tpl');
//include 'calc_view.php';
?>