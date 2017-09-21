<?php
if (!isset($gCms)) exit;

$db = $this->GetDb();

$dict = NewDataDictionary( $db );

$sqlarray = $dict->DropTableSQL( cms_db_prefix()."content_page" );
$dict->ExecuteSQLArray($sqlarray);

$this->RemovePermission('Modify PageExtContent');

// Remove all preferences for this module
$this->RemovePreference();

?>