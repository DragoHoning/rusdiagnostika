<?php
if (!isset($gCms)) exit;

$db = $this->GetDb();
$taboptarray = array( 'mysql' => 'TYPE=MyISAM');
$dict = NewDataDictionary($db);
$flds = "
	id I(11) KEY AUTO,
	id_content I(11),
	name VARCHAR(255),
	title VARCHAR(255),
	html TEXT,
	full TEXT,
	description TEXT,
	use_wysiwyg tinyint(1) default 0,
	active tinyint(1) default 1;
"; // icon is no longer used.

$sqlarray = $dict->CreateTableSQL(cms_db_prefix()."content_page", $flds, $taboptarray);
$dict->ExecuteSQLArray($sqlarray);

$this->SetPreference('cashetime', '86400');


#Set Permission
$this->CreatePermission('Modify PageExtContent', 'Modify PageExtContent');

?>
