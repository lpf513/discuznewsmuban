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

if (byg_diy_block_bool('行业资讯导读页右边栏热门推荐')) {
	$b5_bid = DB::result(DB::query("SELECT bid FROM ".DB::table('common_block')." WHERE name = '行业资讯导读页右边栏热门推荐' ORDER BY bid DESC"));
	$b5 = DB::fetch_all("SELECT * FROM ".DB::table('common_block_item')." WHERE bid = '$b5_bid' ORDER BY displayorder ASC");
	$b5_title = DB::result(DB::query("SELECT title FROM ".DB::table('common_block')." WHERE bid = '$b5_bid'"));
	
	$block_update_all = DB::fetch_all("SELECT * FROM ".DB::table('common_block')." WHERE bid = '$b5_bid'");
	foreach($block_update_all as $block_update) {
		if (($block_update['dateline'] < $_G['timestamp'] - $block_update['cachetime']) && ($block_update['cachetime'] > 0)) {
			$block_update_bid = $block_update['bid'];
			break;
		}
	}
}
//From: Dism_taobao-com
?>