<?php
if( !isset($gCms) ) exit();

if( !isset($params['active']) || !isset($params['uid']) )
  {
    die('missing parameter, this should not happen');
  }
$uid = (int)$params['uid'];
$status = (int)$params['active'];
$uquery = "UPDATE ".CMS_DB_PREFIX."content_page SET active = ? WHERE id = ?";
  
$db->Execute($uquery,array($status,$uid));
	
$this->ClearCashe();

$this->Redirect($id,'defaultadmin',$returnid,array());
?>