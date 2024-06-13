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

//统计文章图片
function byg_article_img_num($aid, $uid) {
	$img_number = DB::result(DB::query("SELECT count(*) FROM ".DB::table('portal_attachment')." WHERE aid = '$aid' AND isimage = '1'"));
	return $img_number;
}

//获取文章图片
function byg_article_img($aid, $uid, $num) {
	$list_img = DB::fetch_all("SELECT * FROM ".DB::table('portal_attachment')." WHERE aid = '$aid' AND isimage = '1' ORDER BY dateline ASC LIMIT $num");
	return $list_img;
}
//From: Dism_taobao-com
?>