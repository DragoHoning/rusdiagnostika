<?php
if (!isset($gCms)) exit;

$db = $this->GetDb();
$taboptarray = array( 'mysql' => 'TYPE=MyISAM');
$dict = NewDataDictionary($db);
$flds = "
	id I(11) KEY AUTO,
	name VARCHAR(255),
	title VARCHAR(255),
	file VARCHAR(255),
	dates " . CMS_ADODB_DT . ",
	active tinyint(1) default 1;
"; // icon is no longer used.

$sqlarray = $dict->CreateTableSQL(cms_db_prefix()."slide_page", $flds, $taboptarray);
$dict->ExecuteSQLArray($sqlarray);

$this->SetPreference('cashetime', '86400');


#Set Permission
$this->CreatePermission('Modify SliderContent', 'Modify SliderContent');

?>
