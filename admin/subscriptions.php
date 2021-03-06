<?php
// $Id: subscriptions.php,v 0.18 2006/04/22 08:26:00 wtravel
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
include_once '../class/class.subscription.php';
$myts =& MyTextSanitizer::getInstance();
$eh = new ErrorHandler;
$itemtypes = new XoopsTree($xoopsDB->prefix("efqdiralpha1_itemtypes"),"typeid","");
$subscription = new efqSubscription();
$subscriptionhandler = new efqSubscriptionHandler();


$moddir = $xoopsModule->getvar("dirname");
if (isset($_GET["typeid"])) {
    $get_typeid = intval($_GET["typeid"]);
} else {
	$get_typeid = '0';
	if (isset($_POST["typeid"])) {
 	   $post_typeid = intval($_POST["typeid"]);
	}
}
if (isset($_GET["offerid"])) {
    $get_offerid = intval($_GET["offerid"]);
} else {
	$get_offerid = 0;
}


$eh = new ErrorHandler; //ErrorHandler object

if (isset($_GET["op"])) {
    $op =  $_GET["op"];
} else if (isset($_POST["op"])) {
    $op =  $_POST["op"];
} else {
	$op = '';
}

//function to list subscription types
function listoffers() 
{
	global $xoopsDB, $eh, $xoopsUser, $subscription, $subscriptionhandler, $itemtypes, $myts;
	xoops_cp_header();
	adminmenu(4,_MD_MANAGE_SUBSCRIPTION_OFFERS);
	echo "<br />";
		
	//list subscription offers
	$sql = "SELECT o.offerid, o.typeid, o.title, o.duration, o.count, o.price, o.activeyn, o.currency, o.descr, t.typename, t.level FROM ".$xoopsDB->prefix("efqdiralpha1_itemtypes")." t, ".$xoopsDB->prefix("efqdiralpha1_subscr_offers")." o	WHERE o.typeid=t.typeid";
	$result = $xoopsDB->query($sql) or $eh->show("0013");
	$numrows = $xoopsDB->getRowsNum($result);
   	if ( $numrows > 0 ) {
		echo "<h4>"._MD_SUBSCR_OFFERS."</h4>";
		echo "<table width='100%' border='0' cellspacing='1' class='outer'>";
		echo "<tr><th>"._MD_OFFER_TITLE."</th><th>"._MD_OFFER_DURATION."</th><th>"._MD_OFFER_COUNT."</th><th>"._MD_OFFER_PRICE."</th><th>"._MD_OFFER_CURRENCY."</th><th>"._MD_OFFER_ACTIVE."</th></tr>";
		$duration_arr = $subscription->durationArray();
		while(list($offerid, $typeid, $title, $duration, $count, $price, $activeyn, $currency, $descr, $typename, $level) = $xoopsDB->fetchRow($result)) {
			$offertitle = $myts->makeTboxData4Show($title);
			if ($activeyn == '1') {
				$activeyn = _MD_YES;
			} else {
				$activeyn = _MD_NO;
			}
			//Show offers
			echo "<tr>";
			echo "<td class=\"even\"><a href=\"subscriptions.php?op=editoffer&amp;offerid=$offerid\">$offertitle</a></td>";
			echo "<td class=\"odd\">$duration_arr[$duration]</td>";
			echo "<td class=\"even\">$count</td>";
			echo "<td class=\"odd\">$price</td>";
			echo "<td class=\"even\">$currency</td>";
			echo "<td class=\"odd\">$activeyn</td>";
			echo "</tr>";
		}
		echo "</table>";
	} else {
		echo ""._MD_NORESULTS."<br /><br />";
	}
	echo "<h4>"._MD_ADD_SUBSCR_OFFER."</h4>";

	echo "<table width='100%' border='0' cellspacing='1' class='outer'><tr><td>";
	$form = new XoopsThemeForm(_MD_ADD_OFFER_FORM, 'newofferform', 'subscriptions.php');
	$form->addElement(new XoopsFormText(_MD_OFFER_TITLE, "title", 50, 100, ""), true);
	
	$itemtypes_arr = $subscriptionhandler->itemTypesArray();
	$itemtype_select = new XoopsFormSelect(_MD_SUBSCR_ITEMTYPE, 'typeid');
	$itemtype_select->addOptionArray($itemtypes_arr);
	$form->addElement($itemtype_select);
	
	$duration_arr = $subscription->durationArray();
	$duration_select = new XoopsFormSelect(_MD_OFFER_DURATION, 'duration');
	$duration_select->addOptionArray($duration_arr);
	$form->addElement($duration_select);

	$form->addElement(new XoopsFormText(_MD_OFFER_COUNT, "count", 10, 50, ""), true);
	$form->addElement(new XoopsFormText(_MD_OFFER_PRICE, "price", 20, 50, ""), true);
	
	$currency_arr = $subscription->currencyArray();
	$currency_select = new XoopsFormSelect(_MD_OFFER_CURRENCY, 'currency');
	$currency_select->addOptionArray($currency_arr);
	$form->addElement($currency_select);
	
	$form_active = new XoopsFormCheckBox(_MD_OFFER_ACTIVEYN, "activeyn", 0);
	$form_active->addOption(1, _MD_YESNO); 
	$form->addElement($form_active, true);
	$form->addElement(new XoopsFormDhtmlTextArea(_MD_OFFER_DESCR, "descr", "", 5, 50, ""));
	$form->addElement(new XoopsFormButton('', 'submit', _MD_SUBMIT, 'submit'));
	$form->addElement(new XoopsFormHidden("op", "addoffer"));
	$form->addElement(new XoopsFormHidden("uid", $xoopsUser->getVar('uid')));
	$form->display();
	echo "</td></tr></table>";
	
	//Show item types
	$sql = "SELECT typeid, typename, level FROM ".$xoopsDB->prefix("efqdiralpha1_itemtypes")."";
	$result = $xoopsDB->query($sql) or $eh->show("0013");
	$numrows = $xoopsDB->getRowsNum($result);
   	if ( $numrows > 0 ) {
		echo "<h4>"._MD_ITEMTYPES."</h4>";
		echo "<table width='100%' border='0' cellspacing='1' class='outer'>";
		echo "<tr><th>"._MD_ITEMTYPE_NAME."</th><th>"._MD_ITEMTYPE_LEVEL."</th><th>"._MD_ACTION."</th></tr>";
		$duration_arr = $subscription->durationArray();
		while(list($typeid, $typename, $level) = $xoopsDB->fetchRow($result)) {
			$typename = $myts->makeTboxData4Show($typename);
			$level = $myts->makeTboxData4Show($level);

			//Show types
			echo "<tr>";
			echo "<td class=\"even\"><a href=\"subscriptions.php?op=edittype&typeid=$typeid\">$typename</strong></td>";
			echo "<td class=\"odd\">$level</td>";
			echo "<td class=\"odd\"><a href=\"subscriptions.php?op=deltype&typeid=$typeid\">"._MD_DELETE."</strong></td>";
			echo "</tr>";
		}
		echo "</table>";
	} else {
		echo ""._MD_NORESULTS."<br /><br />";
	}
	echo "<h4>"._MD_ADD_ITEMTYPE."</h4>";

	//Add item type form
	echo "<table width='100%' border='0' cellspacing='1' class='outer'><tr><td>";
	$form = new XoopsThemeForm(_MD_ADD_ITEMTYPE_FORM, 'newitemtypeform', 'subscriptions.php');
	$form->addElement(new XoopsFormText(_MD_ITEMTYPE_NAME, "typename", 50, 100, ""), true);
	$form->addElement(new XoopsFormText(_MD_ITEMTYPE_LEVEL, "level", 10, 50, ""), true);
	
	$form->addElement(new XoopsFormButton('', 'submit', _MD_SUBMIT, 'submit'));
	$form->addElement(new XoopsFormHidden("op", "addtype"));
	$form->addElement(new XoopsFormHidden("uid", $xoopsUser->getVar('uid')));
	$form->display();
	echo "</td></tr></table>";
	xoops_cp_footer();
}

function edittype()
{
	global $xoopsDB, $eh, $myts, $get_typeid, $xoopsUser;
	if ($get_typeid == 0) {
		redirect_header(XOOPS_URL."/modules/$moddir/admin/subscriptions.php",2,_MD_INVALID_TYPEID);
		exit();
	}
	xoops_cp_header();
	adminmenu(4,_MD_MANAGE_SUBSCRIPTION_OFFERS);
	echo "<br />";
	$sql = "SELECT typeid, typename, level FROM ".$xoopsDB->prefix("efqdiralpha1_itemtypes")." WHERE typeid=$get_typeid";
	$result = $xoopsDB->query($sql) or $eh->show("0013");
	$numrows = $xoopsDB->getRowsNum($result);
   	if ( $numrows > 0 ) {
		//$duration_arr = $subscription->durationArray();
		while (list($typeid, $typename, $level) = $xoopsDB->fetchRow($result)) {
			echo "<table width='100%' border='0' cellspacing='1' class='outer'><tr><td>";
			$form = new XoopsThemeForm(_MD_EDIT_ITEMTYPE_FORM, 'edititemtypeform', 'subscriptions.php');
			$form->addElement(new XoopsFormText(_MD_ITEMTYPE_NAME, "typename", 50, 100, $typename), true);
			$form->addElement(new XoopsFormText(_MD_ITEMTYPE_LEVEL, "level", 10, 50, $level), true);
			$form->addElement(new XoopsFormButton('', 'submit', _MD_SUBMIT, 'submit'));
			$form->addElement(new XoopsFormHidden("op", "savetype"));
			$form->addElement(new XoopsFormHidden("typeid", "$get_typeid"));
			$form->addElement(new XoopsFormHidden("uid", $xoopsUser->getVar('uid')));
			$form->display();
			echo "</td></tr></table>";
		}
	} else {
		redirect_header(XOOPS_URL."/modules/$moddir/admin/subscriptions.php",2,_MD_INVALID_TYPEID);
		exit();
	}
	xoops_cp_footer();
}

function editoffer() 
{
	global $xoopsDB, $eh, $xoopsUser, $subscription, $subscriptionhandler, $get_offerid, $itemtypes;
	if ($get_offerid == 0) {
		redirect_header(XOOPS_URL."/modules/$moddir/admin/subscriptions.php",2,_MD_INVALID_OFFERID);
		exit();
	}
	xoops_cp_header();
	adminmenu(4,_MD_MANAGE_SUBSCRIPTION_OFFERS);
	echo "<br />";
	$sql = "SELECT o.offerid, o.title, o.typeid, o.duration, o.count, o.price, o.activeyn, o.currency, o.descr, t.typename, t.level FROM ".$xoopsDB->prefix("efqdiralpha1_itemtypes")." t, ".$xoopsDB->prefix("efqdiralpha1_subscr_offers")." o	WHERE o.typeid=t.typeid AND o.offerid=".$get_offerid."";
	$result = $xoopsDB->query($sql) or $eh->show("0013");
	$numrows = $xoopsDB->getRowsNum($result);
   	if ( $numrows > 0 ) {
		$duration_arr = $subscription->durationArray();
		while (list($offerid, $offertitle, $typeid, $duration, $count, $price, $activeyn, $currency, $descr, $typename, $level) = $xoopsDB->fetchRow($result)) {
			echo "<table width='100%' border='0' cellspacing='1' class='outer'><tr><td>";
			$form = new XoopsThemeForm(_MD_ADD_OFFER_FORM, 'newofferform', 'subscriptions.php');
			$form->addElement(new XoopsFormText(_MD_OFFER_TITLE, "title", 50, 100, $offertitle), true);
			
			$itemtypes_arr = $subscriptionhandler->itemtypesArray();
			$itemtype_select = new XoopsFormSelect(_MD_SUBSCR_ITEMTYPE, 'typeid', $typeid);
			$itemtype_select->addOptionArray($itemtypes_arr);
			$form->addElement($itemtype_select);
			
			//$duration_arr = $subscription->durationArray();
			$duration_select = new XoopsFormSelect(_MD_OFFER_DURATION, 'duration', $duration);
			$duration_select->addOptionArray($duration_arr);
			$form->addElement($duration_select);
		
			$form->addElement(new XoopsFormText(_MD_OFFER_COUNT, "count", 10, 50, $count), true);
			$form->addElement(new XoopsFormText(_MD_OFFER_PRICE, "price", 20, 50, $price), true);
			
			$currency_arr = $subscription->currencyArray();
			$currency_select = new XoopsFormSelect(_MD_OFFER_CURRENCY, 'currency', $currency);
			$currency_select->addOptionArray($currency_arr);
			$form->addElement($currency_select);
			
			$form_active = new XoopsFormCheckBox(_MD_OFFER_ACTIVEYN, "activeyn", $activeyn);
			$form_active->addOption(1, _MD_YESNO); 
			$form->addElement($form_active, true);
			$form->addElement(new XoopsFormDhtmlTextArea(_MD_OFFER_DESCR, "descr", $descr, 5, 50, ""));
			$form->addElement(new XoopsFormButton('', 'submit', _MD_SUBMIT, 'submit'));
			$form->addElement(new XoopsFormHidden("op", "saveoffer"));
			$form->addElement(new XoopsFormHidden("offerid", "$get_offerid"));
			$form->addElement(new XoopsFormHidden("uid", $xoopsUser->getVar('uid')));
			$form->display();
			echo "</td></tr></table>";
		}
	} else {
		redirect_header(XOOPS_URL."/modules/$moddir/admin/subscriptions.php",2,_MD_INVALID_OFFERID);
		exit();
	}
	xoops_cp_footer();
}

//function to view one subscription type
function viewtype() 
{
	global $xoopsDB, $eh, $get_typeid;
	if (isset($get_itemid)) {
		//view type
	}
}

function addoffer() 
{
	global $xoopsDB, $eh, $myts, $moddir;
	//Get POST variables;
	$post_title = $myts->makeTboxData4Save($_POST['title']);
	$post_typeid = intval($_POST['typeid']);
	$post_duration = $myts->makeTboxData4Save($_POST['duration']);
	$post_currency = $myts->makeTboxData4Save($_POST['currency']);
	$post_count = intval($_POST['count']);
	$post_price = $myts->makeTboxData4Save($_POST['price']);
	if (isset($activeyn)) {
		$post_activeyn = intval($_POST['activeyn']);
	} else {
		$post_activeyn = 0;
	}
	if (isset($_POST['descr'])) {
		$post_descr = $myts->makeTboxData4Save($_POST['descr']);	
	} else {
		$post_descr = '';
	}
	
	$gen_offerid = $xoopsDB->genId($xoopsDB->prefix("efqdiralpha1_subscr_offers")."_offerid_seq");
	$sql = sprintf("INSERT INTO %s (offerid, title, typeid, duration, count, price, activeyn, currency, descr) VALUES (%u, '%s', %u, %u, %u, '%s', %u, '%s', '%s')", $xoopsDB->prefix("efqdiralpha1_subscr_offers"), $gen_offerid, $post_title, $post_typeid, $post_duration, $post_count, $post_price, $post_activeyn, $post_currency, $post_descr);	
	$xoopsDB->query($sql) or $eh->show("0013");
	$gen_offerid = $xoopsDB->getInsertId();
	redirect_header(XOOPS_URL."/modules/$moddir/admin/subscriptions.php?offerid=".$gen_offerid."",2,_MD_SAVED);
	exit();
}

function saveoffer() 
{
	global $xoopsDB, $eh, $myts, $moddir;
	//Get POST variables;
	$post_offerid = intval($_POST['offerid']);
	$post_title = $myts->makeTboxData4Save($_POST['title']);
	$post_typeid = intval($_POST['typeid']);
	$post_duration = $myts->makeTboxData4Save($_POST['duration']);
	$post_currency = $myts->makeTboxData4Save($_POST['currency']);
	$post_count = intval($_POST['count']);
	$post_price = $myts->makeTboxData4Save($_POST['price']);
	if (isset($_POST['activeyn'])) {
		$post_activeyn = intval($_POST['activeyn']);
	} else {
		$post_activeyn = 0;
	}
	if (isset($_POST['descr'])) {
		$post_descr = $myts->makeTboxData4Save($_POST['descr']);	
	} else {
		$post_descr = '';
	}
	
	$gen_offerid = $xoopsDB->genId($xoopsDB->prefix("efqdiralpha1_subscr_offers")."_offerid_seq");
	$sql = "UPDATE ".$xoopsDB->prefix("efqdiralpha1_subscr_offers")." SET title = '$post_title', typeid = '$post_typeid', duration = '$post_duration', count = '$post_count', price = '$post_price', activeyn = '$post_activeyn', currency = '$post_currency', descr = '$post_descr' WHERE offerid='$post_offerid'";	
	$xoopsDB->query($sql) or $eh->show("0013");
	$gen_offerid = $xoopsDB->getInsertId();
	redirect_header(XOOPS_URL."/modules/$moddir/admin/subscriptions.php?offerid=".$post_offerid."",2,_MD_SAVED);
	exit();
}

function addtype()
//function to save a new item type 
{
	global $xoopsDB, $eh, $myts, $_POST, $moddir;
	$p_typename = $myts->makeTboxData4Save($_POST['typename']);
	$p_level = $myts->makeTboxData4Save($_POST['level']);
	$newid = $xoopsDB->genId($xoopsDB->prefix("efqdiralpha1_itemtypes")."_typeid_seq");
	$sql = sprintf("INSERT INTO %s (typeid, typename, level) VALUES (%u, '%s', '%s')", $xoopsDB->prefix("efqdiralpha1_itemtypes"), $newid, $p_typename, $p_level);	
	$xoopsDB->query($sql) or $eh->show("0013");
	redirect_header(XOOPS_URL."/modules/$moddir/admin/subscriptions.php",2,_MD_SAVED);
	exit();
}

function deltype()
//function to delete an item type 
{
	global $xoopsDB, $eh, $moddir, $subscriptionhandler;
	if (isset($_GET['typeid'])) {
		$g_typeid = intval($_GET['typeid']);
	} else {
		redirect_header(XOOPS_URL."/modules/$moddir/admin/subscriptions.php",2,_MD_ERR_ITEMTYPE_DELETE);
		exit();
	}
	
	if ($subscriptionhandler->countSubscriptionsForType($g_typeid) > 0) {
		redirect_header(XOOPS_URL."/modules/$moddir/admin/subscriptions.php",3,_MD_ERR_ITEMTYPE_LINKED_TO_LISTINGS);
		exit();
	}
	$sql = sprintf("DELETE FROM %s WHERE typeid=%u", $xoopsDB->prefix("efqdiralpha1_itemtypes"),$g_typeid);	
	$xoopsDB->queryF($sql) or $eh->show("0013");
	redirect_header(XOOPS_URL."/modules/$moddir/admin/subscriptions.php",1,_MD_ITEMTYPE_DELETED);
	exit();
}

//function to save an existing subscription type
function savetype() 
{
	global $xoopsDB, $eh, $post_typeid, $myts, $moddir;
	$p_typename = $myts->makeTboxData4Save($_POST['typename']);
	$p_level = intval($_POST['level']);
	$newid = $xoopsDB->genId($xoopsDB->prefix("efqdiralpha1_itemtypes")."_typeid_seq");
	$sql = "UPDATE ".$xoopsDB->prefix("efqdiralpha1_itemtypes")." SET typename='$p_typename', level='$p_level' WHERE typeid='$post_typeid'";	
	$xoopsDB->query($sql) or $eh->show("0013");
	redirect_header(XOOPS_URL."/modules/$moddir/admin/subscriptions.php",2,_MD_SAVED);
	exit();
}

//function to delete an existing subscription type
/*function deltype() 
{
	global $xoopsDB, $eh, $post_typeid;
}*/

switch($op) {
case 'delete':
	deltype();
	break;
case 'save':
	savetype();
	break;
case 'addtype':
	addtype();
	break;
case 'edittype':
	edittype();
	break;
case 'deltype':
	deltype();
	break;
case 'savetype':
	savetype();
	break;
case 'viewtype':
	viewtype();
	break;
case 'addoffer':
	addoffer();
	break;
case 'editoffer':
	editoffer();
	break;
case 'saveoffer':
	saveoffer();
	break;
default:
	listoffers();
	break;
}

?>