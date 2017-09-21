<?php
if (!isset($gCms)) exit;
//global  $db;
$db = cmsms()->GetDB();

$uid = intval($params['uid']);

// отмена
if (isset($params['close']))
{
    $this->Redirect($id, 'defaultadmin', $returnid, array());
}
// добавляем
if (isset($params['save']) || isset($params['save_edit']))
{
    //$id = intval($params['id']);
    $name = strval($params['name']);
    $dates = strval($params['dates']);
    $file = strval($params['file']);

    $query = 'UPDATE '.CMS_DB_PREFIX.'slide_page SET name = ?, dates = ?, file = ? WHERE id = ?';
    $db->Execute($query, array($name, $dates, $file, $uid));

    $this->ClearCashe();
	
	if(!isset($params['save_edit']))
		$this->Redirect($id, 'defaultadmin', $returnid, array());
	else
		$this->Redirect($id, 'editblock', $returnid, array('uid'=>$uid));
}
//print_r($params);

$query = 'SELECT * FROM '.CMS_DB_PREFIX.'slide_page WHERE id=?';
$output = $db->GetRow($query, array($uid));

$name = strval($output['name']);
$dates = strval($output['dates']);
$file = strval($output['file']);

echo '<div class="pagecontainer">';

echo '<h2>'.$this->Lang('additem').'</h2>';

echo $this->CreateFormStart($id,'editblock',$returnid,'post');
echo $this->CreateInputHidden($id,'uid',$uid);
echo '<div id="page_content">';

echo '<div class="pageoverflow"><p class="pagetext">';
echo $this->CreateInputSubmit($id,'save',$this->Lang('save'));
echo $this->CreateInputSubmit($id,'save_edit',$this->Lang('save_edit'));
echo $this->CreateInputSubmit($id,'close',$this->Lang('close'));
echo '</p></div>';

echo '<div class="pageoverflow"><p class="pagetext">';

echo $this->Lang('name').'</p><p class="pageinput">'.$this->CreateInputText($id,'name',$name,60).'</p></div><div class="pageoverflow"><p class="pagetext">';
echo $this->Lang('dates').'</p><p class="pageinput">'.$this->CreateMyInputDate($id,'dates',$dates,'class="dates" readonly').'</p></div><div class="pageoverflow"><p class="pagetext">';
echo $this->Lang('file').'</p><p class="pageinput">'.$this->CreateInputText($id,'file',$id_content,60).'</p></div>';

echo '</div><div class="pageoverflow"><p class="pagetext"></p><p class="pageinput">';

echo $this->CreateInputSubmit($id,'save',$this->Lang('save'));
echo $this->CreateInputSubmit($id,'save_edit',$this->Lang('save_edit'));
echo $this->CreateInputSubmit($id,'close',$this->Lang('close'));

echo '</p></div>';
echo $this->CreateFormEnd();
echo '</div>';
?>
