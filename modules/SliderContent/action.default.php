<?php
if (!isset($gCms)) exit;

$db = cmsms()->GetDB();

if(empty($params['assigns'])) $params['assigns'] = 'SliderContent';

$cashe = $this->GetPreference('cashetime', 3600);
$ds = DIRECTORY_SEPARATOR;
$dir = dirname(dirname(dirname(__FILE__)));
$filecashe = $dir . $ds . 'tmp' . $ds . 'cache' . $ds . 'slide_page.bin';
$entryarray = array();

if (!file_exists($filecashe) || (file_exists($filecashe) && (time() - $cashe > filemtime($filecashe)))) {
    if (isset($params['detailpage']))
        $returnid = intval($params['detailpage']);

	$query = "
		SELECT 
			*
		FROM " .
			CMS_DB_PREFIX . "slide_page;
		";

    $dbresult = $db->Execute($query);
	
	if ($dbresult && $dbresult->RecordCount() > 0) {
        //while ($dbresult && !$dbresult->EOF) {
        while ($row = $dbresult->FetchRow()) {
            //$row = $dbresult->fields;

            $onerow = new stdClass();

            $onerow->id = $row['id'];
            $onerow->active = $row['active'];
            $onerow->file = $row['file'];
            $onerow->dates = $row['dates'];

            $entryarray[$row['name']] = $onerow;
            //$dbresult->MoveNext();
        }
//print_r($entryarray);

        if ($fh = fopen($filecashe, "w+")) {
            fwrite($fh, serialize($entryarray));
            fclose($fh);
        }
	}
} else {
    $entryarray = @file_get_contents($filecashe);
    $entryarray = @unserialize($entryarray);
}
if(empty($params['assigns'])) {
	return $entryarray;
} else {
	$smarty->assign($params['assigns'], $entryarray);
}

# vim:ts=4 sw=4 noet
?>
