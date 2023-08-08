<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_admincp_login.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'admincp_title' => '<span>Discuz!</span>Trung tâm điều khiển',
	'login_title' => 'Đăng nhập trung tâm quản lý',
	'login_username' => 'Tài khoản',
	'login_password' => 'Mật khẩu',
	'login_dk_light_mode' => 'Chế độ màu sáng',
	'login_dk_by_system' => 'Theo hệ thống',
	'login_dk_normal_mode' => 'Chế độ bình thường',
	'login_dk_dark_mode' => 'Chế độ ban đêm',

	'submit' => 'Đăng Nhập',
	'forcesecques' => 'Bắt buộc',
	'security_question' => 'Câu hỏi bảo mật',
	'security_answer' => 'Trả lời',
	'security_question_0' => 'Không có câu hỏi bảo mật',
	'security_question_1' => 'Con cún nhà bạn tên gì',
	'security_question_2' => 'Tên người yêu cũ của bạn',
	'security_question_3' => 'Tên trường cấp 3 của bạn',
	'security_question_4' => 'Biển số xe máy của bạn',
	'security_question_5' => 'Bạn biết diễn đàn này qua đâu',
	'security_question_6' => 'Bạn thích ca sĩ nào nhất',
	'security_question_7' => 'Sinh nhật của bạn',

	'login_tips' => 'Khu vực quản lý trang web',
	'login_nosecques' => 'Bạn chưa thiết đặt câu hỏi an toàn. Vui lòng vào <a href="forum.php?mod=memcp&action=profile&typeid=1" target="_blank">Trung tâm cá nhân</a> cài đặt câu hỏi an toàn.',
	'copyright' => 'Copyright &copy; 2001-'.date('Y').' Tencent Cloud.',

	'login_cp_guest' => '<h1>Bạn chưa đăng nhập vào trang web</h1><a href="member.php?mod=logging&action=login" class="btn">Đăng nhập</a><p>Khi quản trị viên web cần bắt buộc đăng nhập, hãy sửa đổi config/config_global.php để đóng chức năng này.</p>',
	'login_cplock' => 'Trang quản lý đã bị khóa <br>Vui lòng đợi<b> {ltime} </b>giây nữa để thử lại',
	'login_user_lock' => 'Bạn nhập sai mật khẩu quá nhiều, vui lòng đợi 15 phút nữa và thử lại',
	'login_cp_noaccess' => '<b>Bạn không có quyền vào trang này.</b><br><br>Vui lòng không vượt quá quyền hạn.',
	'login_ip_noaccess' => '<a href="https://www.dismall.com/thread-17514-1-1.html" target="_blank">Thay đổi IP có thể gây ra lỗi đăng nhập, kiểm tra giải pháp</a>',
	'noaccess' => 'Bạn không có quyền quản trị.',


);

?>