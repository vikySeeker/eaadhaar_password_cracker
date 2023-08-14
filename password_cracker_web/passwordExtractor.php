<?php

function extractPassword(){
    $startyear = $_SESSION['sy'];
    $endyear = $_SESSION['ey'];
    $filename = $_SESSION['filename'];
    //need to be implemented
    $command = $_SERVER['DOCUMENT_ROOT']."/password_cracker_executables/cracker.sh ".$startyear." ".$endyear." ".$filename;
    $result = null;
    $result_code = null;
    exec($command,$result,$result_code);
    return array($result,$result_code);
}

?>