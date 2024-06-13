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

$forum_an = DB::fetch_all("SELECT * FROM ".DB::table('forum_announcement')." WHERE type = '0' OR type = '1' ORDER BY displayorder ASC");

$portal_nav_img1_param = byg_diy_block_param_h('行业资讯门户首页图文导航1');
$portal_nav_img2_param = byg_diy_block_param_h('行业资讯门户首页图文导航2');
$portal_nav_img3_param = byg_diy_block_param_h('行业资讯门户首页图文导航3');
$portal_nav_img4_param = byg_diy_block_param_h('行业资讯门户首页图文导航4');
$portal_nav_img5_param = byg_diy_block_param_h('行业资讯门户首页图文导航5');
$portal_nav_img6_param = byg_diy_block_param_h('行业资讯门户首页图文导航6');
$portal_nav_img7_param = byg_diy_block_param_h('行业资讯门户首页图文导航7');
$portal_nav_img8_param = byg_diy_block_param_h('行业资讯门户首页图文导航8');
$portal_nav_img9_param = byg_diy_block_param_h('行业资讯门户首页图文导航9');

?>