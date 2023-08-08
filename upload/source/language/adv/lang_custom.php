<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_custom.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'custom_name' => 'Tùy chọn',
	'custom_desc' => 'Thêm HTML quảng cáo , các tập tin HTML, có thể được thêm vào bất kỳ trang nào trong trang web quảng cáo. Áp dụng đối với các webmaster biết kiến thức về HTML đơn giản.<br /><br />
		<a href="javascript:;" onclick="prompt(\'Vui lòng sao chép (CTRL + C) nội dung sau và thêm nó vào mẫu để thêm vùng quảng cáo này\', \'<!--{ad/custom_'.$_GET['customid'].'}-->\')" />Cuộc gọi nội bộ</a>&nbsp;
		<a href="javascript:;" onclick="prompt(\'Vui lòng sao chép (CTRL + C) nội dung sau và thêm nó vào tệp HTML để thêm vùng quảng cáo này\', \'&lt;script type=\\\'text/javascript\\\' src=\\\''.$_G['siteurl'].'api.php?mod=ad&adid=custom_'.$_GET['customid'].'\\\'&gt;&lt;/script&gt;\')" />Cuộc gọi bên ngoài</a>',
	'custom_id_notfound' => 'Quảng cáo không tồn tại',
	'custom_codelink' => 'Code Nội bộ',
	'custom_text' => 'Mã tùy chọn',
);

?>