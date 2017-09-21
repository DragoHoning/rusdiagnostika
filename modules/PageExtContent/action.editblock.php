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
    $id_content = intval($params['id_content']);
    $name = strval($params['name']);
    $title = strval($params['title']);
    $html = strval($params['html']);
    $full = strval($params['full']);
    $description = strval($params['description']);
    if(isset($params['use_wysiwyg']))
        $use_wysiwyg = intval($params['use_wysiwyg']);
    else
        $use_wysiwyg = 0;

    $query = 'UPDATE '.CMS_DB_PREFIX.'content_page SET id_content = ?, name = ?, title = ?, html = ?, full = ?, description = ?, use_wysiwyg = ? WHERE id = ?';
    $db->Execute($query, array($id_content, $name, $title, $html, $full, $description, $use_wysiwyg, $uid));

    $this->ClearCashe();
	
	if(!isset($params['save_edit']))
		$this->Redirect($id, 'defaultadmin', $returnid, array());
	else
		$this->Redirect($id, 'editblock', $returnid, array('uid'=>$uid));
}
//print_r($params);

$query = 'SELECT * FROM '.CMS_DB_PREFIX.'content_page WHERE id=?';
$output = $db->GetRow($query, array($uid));

$id_content = $output['id_content'];
$name = strval($output['name']);
$title = strval($output['title']);
$html = strval($output['html']);
$full = strval($output['full']);
$description = strval($output['description']);
//$use_wysiwyg = intval($output['use_wysiwyg']);

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

echo $this->Lang('ID_page').'</p><p class="pageinput">'.$this->CreateInputText($id,'id_content',$id_content,60).'</p></div><div class="pageoverflow"><p class="pagetext">';
echo $this->Lang('name').'</p><p class="pageinput">'.$this->CreateInputText($id,'name',$name,60).'</p></div><div class="pageoverflow"><p class="pagetext">';
echo $this->Lang('title').'</p><p class="pageinput">'.$this->CreateInputText($id,'title',$title,60).'</p></div><div class="pageoverflow"><p class="pagetext">';
//if(!isset($use_wysiwyg)) $use_wysiwyg = 1;
//echo $this->Lang('use_wysiwyg').'</p><p class="pageinput">'.$this->CreateInputCheckbox($id, 'use_wysiwyg', $use_wysiwyg, 0, 'onclick="this.form.submit();"').'</p></div><div class="pageoverflow"><p class="pagetext">';
echo $this->Lang('content').'</p><p class="pageinput">'.$this->CreateTextArea(true,$id,$html,'html', '', '', '', '', '170', '3').'</p></div><div class="pageoverflow"><p class="pagetext">';
echo $this->Lang('content_full').'</p><p class="pageinput">'.$this->CreateTextArea(true,$id,$full,'full', '', '', '', '', '170', '3').'</p></div><div class="pageoverflow"><p class="pagetext">';
echo $this->Lang('description').'</p><p class="pageinput">'.$this->CreateTextArea(false,$id,$description,'description').'</p></div>';

echo '</div><div class="pageoverflow"><p class="pagetext"></p><p class="pageinput">';

echo $this->CreateInputSubmit($id,'save',$this->Lang('save'));
echo $this->CreateInputSubmit($id,'save_edit',$this->Lang('save_edit'));
echo $this->CreateInputSubmit($id,'close',$this->Lang('close'));

echo '</p></div>';
echo $this->CreateFormEnd();
echo '</div>';
?>
