<?php
if (!isset($gCms)) exit;

// отмена
if (isset($params['close']))
{
    $this->Redirect($id, 'defaultadmin', $returnid, array());
}

// добавляем
if (isset($params['add']))
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

    $db->Execute('INSERT INTO '.CMS_DB_PREFIX.'content_page (id_content, name, title, html, full, description, use_wysiwyg)
      VALUES(?,?,?,?,?,?)',
        array( $id_content, $name, $title, $html, $full, $description, $use_wysiwyg));

    $this->ClearCashe();

    $this->Redirect($id, 'defaultadmin', $returnid, array());
}

echo '<div class="pagecontainer">';

echo '<h2>'.$this->Lang('additem').'</h2>';

echo $this->CreateFormStart($id,'addblock',$returnid,'post');
echo '<div id="page_content">';

echo '<div class="pageoverflow"><p class="pagetext">';
echo $this->CreateInputSubmit($id,'add',$this->Lang('add'));
echo $this->CreateInputSubmit($id,'close',$this->Lang('close'));
echo '</p></div>';

echo '<div class="pageoverflow"><p class="pagetext">';

echo $this->Lang('ID_page').'</p><p class="pageinput">'.$this->CreateInputText($id,'id_content','0',60).'</p></div><div class="pageoverflow"><p class="pagetext">';
echo $this->Lang('name').'</p><p class="pageinput">'.$this->CreateInputText($id,'name','',60).'</p></div><div class="pageoverflow"><p class="pagetext">';
echo $this->Lang('title').'</p><p class="pageinput">'.$this->CreateInputText($id,'title','',60).'</p></div><div class="pageoverflow"><p class="pagetext">';
//if(!isset($use_wysiwyg)) $use_wysiwyg = 1;
//echo $this->Lang('use_wysiwyg').'</p><p class="pageinput">'.$this->CreateInputCheckbox($id, 'use_wysiwyg', $use_wysiwyg, 0, '').'</p></div><div class="pageoverflow"><p class="pagetext">';
echo $this->Lang('content').'</p><p class="pageinput">'.$this->CreateTextArea(true,$id,'','html', '', '', '', '', '80', '3').'</p></div><div class="pageoverflow"><p class="pagetext">';
echo $this->Lang('content_full').'</p><p class="pageinput">'.$this->CreateTextArea(true,$id,'','full', '', '', '', '', '80', '3').'</p></div><div class="pageoverflow"><p class="pagetext">';
echo $this->Lang('description').'</p><p class="pageinput">'.$this->CreateTextArea(false,$id,'','description').'</p></div>';

echo '</div><div class="pageoverflow"><p class="pagetext"></p><p class="pageinput">';

echo $this->CreateInputSubmit($id,'add',$this->Lang('add'));
echo $this->CreateInputSubmit($id,'close',$this->Lang('close'));

echo '</p></div>';
echo $this->CreateFormEnd();
echo '</div>';
?>
