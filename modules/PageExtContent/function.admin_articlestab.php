<?php
if( !isset($gCms) ) exit;

$categories = array();
$admintheme = cms_utils::get_theme_object();

$query = 'SELECT * FROM '.CMS_DB_PREFIX.'content_page;';
$categories = $db->GetArray($query,array());

// ссылки добавления  
echo $this->CreateLink($id,'addblock',$returnid,
    $admintheme->DisplayImage('icons/system/newobject.gif',$this->Lang('addcategory'),'','','systemicon').$this->lang('addcategory'));

echo '<table class="pagetable" cellspacing="0">';
if( is_array($categories) )
{
    echo '<thead>
		<tr>
			<th width="50">#</th>
			<th width="90">'.$this->Lang('ID_page').'</th>
			<th>'.$this->Lang('name').'</th>
			<th>'.$this->Lang('title').'</th>
			<th>'.$this->Lang('description').'</th>
			<th class="pageicon">'.$this->Lang('status').'</th>
			<th class="pageicon">&nbsp;</th>
			<th class="pageicon">&nbsp;</th>
		</tr>
	</thead>';
    echo '<tbody>';
    foreach($categories as $rec){

        echo '<tr>';
        echo '<td>'.$rec['id'].'</td>';
        echo '<td>'.$rec['id_content'].'</td>';
        echo '<td>'.$this->CreateLink($id, 'editblock', $returnid, $rec['name'], array('uid'=>$rec['id'])).'</td>';
        echo '<td>'.$rec['title'].'</td>';
        echo '<td>'.$rec['description'].'</td>';
        echo '<td>';
        // статус
        if($rec['active']==1) {
            echo $this->CreateLink($id,'approveblock',
                $returnid,
                $admintheme->DisplayImage('icons/system/true.gif',$this->Lang('deactive'),'','','systemicon'),
                array('active'=>'0','uid'=>$rec['id']));
        } else {
            echo $this->CreateLink($id,'approveblock',
                $returnid,
                $admintheme->DisplayImage('icons/system/false.gif',$this->Lang('active'),'','','systemicon'),
                array('active'=>'1','uid'=>$rec['id']));
        }
        echo '</td><td>';
        // редактировать
        echo $this->CreateLink($id,'editblock',
            $returnid,
            $admintheme->DisplayImage('icons/system/edit.gif',$this->Lang('edit'),'','','systemicon'),
            array('uid'=>$rec['id']));

        echo '</td>';
        echo '<td>';
        // удаление
        echo $this->CreateLink($id,'deleteblock',
            $returnid,
            $admintheme->DisplayImage('icons/system/delete.gif',$this->Lang('delete'),'','','systemicon'),
            array('uid'=>$rec['id']),
            $this->Lang('is_delete'));
        echo '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
}
echo '</table>';
if( count($categories)>10 ) {
// ссылки добавления  
echo $this->CreateLink($id,'addblock',$returnid,
    $admintheme->DisplayImage('icons/system/newobject.gif',$this->Lang('addcategory'),'','','systemicon').$this->lang('addcategory'));
}

?>
