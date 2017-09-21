<?php
if (!isset($gCms)) exit;
#
#The content of the tabs
#
if ($this->CheckPermission('Modify PageExtContent') )
{
    include(dirname(__FILE__).'/function.admin_articlestab.php');
}

# vim:ts=4 sw=4 noet
?>
