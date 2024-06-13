<?php
/*
 * CopyRight  : [DisM!] (C)2001-2099 DisM Inc.
 * Created on : 2021-01-02,16:36:49
 * Author     : DisM!应用中心 dism.taobao.com $
 * Description: This is NOT a freeware, use is subject to license terms.
 * 本资源来源于网络收集,仅供个人学习交流，请勿用于商业用途，并于下载24小时后删除!
 * 如果侵犯了您的权益,请及时告知我们,我们即刻删除!
 */
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

//判断DIY模块是否关闭
function byg_diy_block_bool($name) {
	$name_off = '0'.$name;
	$block_bid_on = DB::result(DB::query("SELECT bid FROM ".DB::table('common_block')." WHERE name = '$name' ORDER BY bid DESC"));
	$block_bid_off = DB::result(DB::query("SELECT bid FROM ".DB::table('common_block')." WHERE name = '$name_off' ORDER BY bid DESC"));
	if (empty($block_bid_on)) {
		$block_bid_on = '0';
	}
	if (empty($block_bid_off)) {
		$block_bid_off = '0';
	}
	if ($block_bid_on > $block_bid_off) {
		return true;
	} else {
		return false;
	}
}

//获取静态DIY模块的内容
function byg_diy_block_sum($name) {
	if (byg_diy_block_bool($name)) {
		$diy_block_sum = DB::result(DB::query("SELECT summary FROM ".DB::table('common_block')." WHERE name = '$name' ORDER BY bid DESC"));
		return $diy_block_sum;
	}
}

//获取静态DIY模块的参数
function byg_diy_block_param_h($name) {
	if (byg_diy_block_bool($name)) {
		$diy_block_param_h = DB::result(DB::query("SELECT param FROM ".DB::table('common_block')." WHERE name = '$name' ORDER BY bid DESC"));
		return $diy_block_param_h;
	}
}
//From: Dism_taobao-com
?>