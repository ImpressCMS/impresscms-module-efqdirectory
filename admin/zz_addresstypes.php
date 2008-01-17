<?php
// $Id: addresstypes.php,v 0.18 2006/03/23 21:37:00 wtravel
//  ------------------------------------------------------------------------ //
//                				EFQ Directory			                     //
//                    Copyright (c) 2006 EFQ Consultancy                     //
//                       <http://www.efqdirectory.com/>                      //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
//	Part of the efqDirectory module provided by: wtravel					 //
// 	e-mail: info@efqdirectory.com											 //
//	Purpose: Create a business directory for xoops.		 	 				 //
//	Based upon the mylinks and the mxDirectory modules						 //
// ------------------------------------------------------------------------- //
include '../../../include/cp_header.php';
if ( file_exists("../language/".$xoopsConfig['language']."/main.php") ) {
	include "../language/".$xoopsConfig['language']."/main.php";
} else {
	include "../language/english/main.php";
}
include '../include/functions.php';
include_once XOOPS_ROOT_PATH.'/class/xoopstree.php';
include_once XOOPS_ROOT_PATH.'/class/xoopslists.php';
include_once XOOPS_ROOT_PATH.'/include/xoopscodes.php';
include_once XOOPS_ROOT_PATH.'/class/module.errorhandler.php';
include_once XOOPS_ROOT_PATH.'/class/xoopsformloader.php';
$myts =& MyTextSanitizer::getInstance();
$eh = new ErrorHandler;
$mytree = new XoopsTree($xoopsDB->prefix("efqdiralpha1_cat"),"cid","pid");

$moddir = $xoopsModule->getvar("dirname");
if (isset($_GET["typeid"])) {
    $get_typeid = intval($_GET["typeid"]);
} else {
	$get_typeid = '0';
}
if (isset($_POST["typeid"])) {
    $post_typeid = intval($_POST["typeid"]);
}

if (isset($_POST["dirid"])) {
    $post_dirid = intval($_POST["dirid"]);
}

$eh = new ErrorHandler; //ErrorHandler object

if (isset($_GET["op"])) {
    $op =  $_GET["op"];
} else if (isset($_POST["op"])) {
    $op =  $_POST["op"];
}

if (empty($xoopsUser) and !$xoopsModuleConfig['anonpost']) {
	redirect_header(XOOPS_URL."/user.php",2,_MD_MUSTREGFIRST);
	exit();
}
$addressfields = array('address', 'address2', 'zip', 'postcode','phone', 'lat', 'lon', 'phone', 'fax', 'mobile', 'city', 'country', 'typename', 'uselocyn');
if (!empty($_POST['submit'])) {
	//Get all selectable categories and put the prefix 'selectcat' in front of the catid.
	//With all results check if the result has a corresponding $_POST value.
	
	$sql = "UPDATE ".$xoopsDB->prefix("efqdiralpha1_address_types")." SET";
	//For each addressfields : Add to sql code : set field = $post_field
	foreach ($addressfields as $field) {
		if (isset($_POST["$field"]) && $_POST["$field"] == 'on') {
			$value = '1';
		} else if (isset($_POST["$field"])) {
			$value = $_POST["$field"];
		} else {
			$value = '0';
		}
		$sql .= " $field='".$value."',";
	}
	$sql = rtrim($sql, ',');
	$sql .= " WHERE typeid='$post_typeid'";
	$xoopsDB->query($sql) or $eh->show("0013");
	redirect_header(XOOPS_URL."/modules/$moddir/admin/addresstypes.php?typeid=".$post_typeid."",2,_MD_ADDRESSTYPE_UPDATED);
	exit();
} else {
	xoops_cp_header();
	adminmenu(3,_MD_MANAGE_ADDRESS_TYPES);
	echo "<br />";
	$checkedfields = getAddressFields($get_typeid);
	$output = "<table>";
	$output .= "<tr><td class=\"categoryHeader\" colspan=\"2\"><strong>"._MD_EDIT_ADDRESSTYPES_TITLE."</strong></td><td class=\"categoryHeader\"><strong>"._MD_SELECT."</strong></td></tr>\n";
	foreach ($checkedfields['addressfields'] as $field => $value) {
		if ($value == '1') {
			$checked = " checked";
		} else {
			$checked = "";
		}
		$checkbox = "<input type=\"checkbox\" name=\"".$field."\"$checked";
		$output .= "<tr><td><strong>".$field."</strong></td><td>&nbsp;</td><td>$checkbox</td></tr>\n";
	}
	$output .= "</table>";
	$form = new XoopsThemeForm(_MD_EDIT_ADDRESSTYPE_FIELDS_FORM, 'submitform', 'addresstypes.php');
	$form->setExtra('enctype="multipart/form-data"');
	$addresstypes_tray = new XoopsFormElementTray(_MD_FIELDS, "", "typeid");
	$addresstypes_tray->addElement(new XoopsFormLabel("", $output));
	$form->addElement($addresstypes_tray, true);
	//EXCL: Excluded from this version, since locations management has not yet been implemented.	
	//$form->addElement(new XoopsFormRadioyn(_MD_USELOCYN, 'uselocyn', $checkedfields['uselocyn'], _YES, _NO));
	//$form->addElement(new XoopsFormText(_MD_ADDRESSTYPE_TITLE, 'typename', 50, 250, $checkedfields['typename']));
	$form->addElement(new XoopsFormButton('', 'submit', _MD_SUBMIT, 'submit'));
	$form->addElement(new XoopsFormHidden('uid', $xoopsUser->getVar('uid')));
	$form->addElement(new XoopsFormHidden('typeid', $checkedfields['typeid']));
	$form->display();
	xoops_cp_footer();
}
?>