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
    $name = strval($params['name']);
    $dates = strval($params['dates']);
    $file = strval($params['file']);

    $db->Execute('INSERT INTO '.CMS_DB_PREFIX.'slide_page (name, file, dates)
      VALUES(?,?,?)',
        array( $name, $file, $dates));

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

echo $this->Lang('name').'</p><p class="pageinput">'.$this->CreateInputText($id,'name','',60).'</p></div><div class="pageoverflow"><p class="pagetext">';
echo $this->Lang('dates').'</p><p class="pageinput">'.$this->CreateMyInputDate($id,'dates',$dates,'class="dates" readonly').'</p></div><div class="pageoverflow"><p class="pagetext">';
echo $this->Lang('file').'</p><p class="pageinput">'.$this->CreateInputText($id,'file','0',60).'</p></div>';

echo '</div><div class="pageoverflow"><p class="pagetext"></p><p class="pageinput">';

echo $this->CreateInputSubmit($id,'add',$this->Lang('add'));
echo $this->CreateInputSubmit($id,'close',$this->Lang('close'));

echo '</p></div>';
echo $this->CreateFormEnd();
echo '</div>';
?>
