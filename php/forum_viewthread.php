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

$right_side_param = DB::result(DB::query("SELECT param FROM ".DB::table('common_block')." WHERE name = '行业资讯电脑版帖子页右边栏' ORDER BY bid DESC"));
$right_side = unserialize($right_side_param);
$right_side_a = explode(" ", $right_side['text']);

?>