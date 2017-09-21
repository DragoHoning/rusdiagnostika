<?php
if (!isset($gCms)) exit;

$uid = '';
if (isset($params['uid']))
{
    $uid = $params['uid'];
    $db->Execute('DELETE FROM '.CMS_DB_PREFIX.'slide_page WHERE id=?',array($uid));
}

$this->ClearCashe();

$this->Redirect($id, 'defaultadmin', $returnid, array());
?>
