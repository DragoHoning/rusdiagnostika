<?php
#CMS - CMS Made Simple
#(c)2004 by Ted Kulp (wishy@users.sf.net)
#This project's homepage is: http://www.cmsmadesimple.org
#
#This program is free software; you can redistribute it and/or modify
#it under the terms of the GNU General Public License as published by
#the Free Software Foundation; either version 2 of the License, or
#(at your option) any later version.
#
#This program is distributed in the hope that it will be useful,
#but WITHOUT ANY WARRANTY; without even the implied warranty of
#MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#GNU General Public License for more details.
#You should have received a copy of the GNU General Public License
#along with this program; if not, write to the Free Software
#Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
#
#$Id: News.module.php 2114 2005-11-04 21:51:13Z wishy $
if( !isset($gCms) ) exit;

class SliderContent extends CMSModule
{
    function GetName() {return 'SliderContent';}
    function GetFriendlyName() {return $this->Lang('SliderContent');}
    function IsPluginModule() {return true;}
    function HasAdmin() {return true;}
    function GetVersion() {return '1.00';}
    function MinimumCMSVersion() {return '1.11.12';}
    function GetAdminDescription() {return $this->Lang('description');}
    function GetAdminSection() {return 'content';}
    function AllowSmartyCaching() {return TRUE;}
    function LazyLoadFrontend() {return TRUE;}
    function LazyLoadAdmin() {return TRUE;}
    function VisibleToAdminUser() {return $this->CheckPermission('Modify SliderContent');}
    function InstallPostMessage() {return $this->Lang('postinstall');}
    function GetHelp() {return $this->Lang('help');}
    function GetAuthor() {return 'Andrey Poptsov';}
    function GetAuthorEmail() {return 'poptsov@artnetstudio.ru';}
	function GetChangeLog() {return file_get_contents(dirname(__FILE__).'/changelog.inc');}

    function InitializeFrontend()
    {
        $this->RestrictUnknownParams();

        $this->CreateParameter('moretext','');
        $this->SetParameterType('moretext',CLEAN_STRING);
        $this->CreateParameter('assigns','');
        $this->SetParameterType('assigns',CLEAN_STRING);
        $this->SetParameterType('assign',CLEAN_STRING);
        $this->SetParameterType('uid',CLEAN_INT);
        $this->SetParameterType('junk',CLEAN_STRING);
    }


    function InitializeAdmin()
    {
        $this->CreateParameter('uid','');
        $this->SetParameterType('uid',CLEAN_INT);
        $this->CreateParameter('active','');
        $this->SetParameterType('active',CLEAN_INT);
        $this->CreateParameter('save','');
        $this->SetParameterType('save',CLEAN_STRING);
        $this->CreateParameter('save_edit','');
        $this->SetParameterType('save_edit',CLEAN_STRING);
    }

    function ClearCashe(){
        $ds = DIRECTORY_SEPARATOR;
        $dir = dirname(dirname(dirname(__FILE__)));

        $filecashe = $dir . $ds . 'tmp' . $ds . 'cache' . $ds . 'slide_page.bin';
        if(file_exists($filecashe)) unlink($filecashe);
		
        $db = cmsms()->GetDb();
        $rows = $db->GetArray('SELECT * FROM '.cms_db_prefix() . 'slide_page');

        foreach($rows as $row){
            $this->ClearCasheCat($row['id']);
        }
    }

    function ClearCasheCat($id){
        $ds = DIRECTORY_SEPARATOR;
        $dir = dirname(dirname(dirname(__FILE__)));

        $filecashe = $dir . $ds . 'tmp' . $ds . 'cache' . $ds . 'slide_page_' . $id . '.bin';
        if(file_exists($filecashe)) unlink($filecashe);
    }
	
	function GetHeaderHTML() {
		$tmpl = <<<EOT
		<link rel="stylesheet" type="text/css" href="../modules/SliderContent/lib/jquery.timepicker.css">
		<link rel="stylesheet" type="text/css" href="../modules/SliderContent/lib/bootstrap-datepicker.css">
		<script type="text/javascript" src="../modules/SliderContent/lib/bootstrap-datepicker.js"></script>
		<script type="text/javascript" src="../modules/SliderContent/lib/bootstrap-datepicker.ru.js"></script>
		<script type="text/javascript" src="../modules/SliderContent/lib/calcadminscripts.js"></script>
EOT;
		return $tmpl;
	}

	function CreateMyInputDate($id, $name, $value = '', $htmlOptions = '') {
		$_id = $id.$name;
		$inp = "type=\"text\" id=\"$_id\" name=\"$_id\" " . ((!empty($value))? "value=\"$value\"" : '');
		return "<input $inp $htmlOptions>";
	}
}

?>
