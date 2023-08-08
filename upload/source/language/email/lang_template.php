<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_email.php 35030 2014-10-23 07:43:23Z laoguozhang $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}


$lang = array
(
	'hello' => 'Xin chào',
	'moderate_member_invalidate' => 'Bác bỏ',
	'moderate_member_delete' => 'Xóa',
	'moderate_member_validate' => 'Thông qua',

	'comma' => '，',
	'show_sender' => 'Bức thư này được gửi bởi {$var[\'bbname\']}.',
	'show_reason' => 'Bạn nhận được email này vì',
	'have_not_visit' => 'Nếu bạn chưa truy cập {$var[\'bbname\']}, ',
	'have_not_do_this' => 'hoặc không làm những điều trên, ',
	'not_interested' => 'Nếu bạn không quan tâm đến điều này,',
	'ignore_email' => 'Hãy bỏ qua email này.',
	'no_more_action' => 'Bạn không cần phải hủy đăng ký hoặc thực hiện bất kỳ hành động nào khác.',
	'important' => 'Quan trọng!',
	'if_not_link' => 'Nếu ở trên không phải ở dạng liên kết, vui lòng dán địa chỉ theo cách thủ công vào thanh địa chỉ của trình duyệt và sau đó truy cập',
	'msg_start' => 'Bức thư gốc bắt đầu',
	'msg_end' => 'Cuối thư gốc',
	'not_responsible' => 'Nhóm quản trị web không chịu trách nhiệm về những email như vậy.',
	'show_ip' => 'IP của người gửi yêu cầu này là {$var[\'clientip\']}',
	'welcome_visit' => 'Chào mừng bạn đến với {$_G[\'setting\'][\'bbname\']}',
	'thanks_for_visit' => 'Cảm ơn bạn đã ghé thăm và chúc bạn sử dụng vui vẻ!',
	'sincerely' => 'Trân trọng,',
	'admin_team' => 'Nhóm quản lý {$var[\'bbname\']}',


	'get_passwd_subject' => 'Lấy hướng dẫn mật khẩu',
	'get_passwd_reason' => 'Địa chỉ email này được đăng ký làm email người dùng tại {$var[\'bbname\']} và người dùng đã yêu cầu sử dụng chức năng đặt lại mật khẩu Email.',
	'get_passwd_if_not' => 'Nếu bạn chưa gửi yêu cầu đặt lại mật khẩu hoặc không phải là người dùng đã đăng ký của {$var[\'bbname\']}, vui lòng bỏ qua và xóa email này ngay lập tức. Chỉ tiếp tục đọc phần bên dưới nếu bạn xác nhận rằng bạn cần đặt lại mật khẩu của mình.',
	'get_passwd_explain' => 'Hướng dẫn đặt lại mật khẩu',
	'get_passwd_click_link' => 'Tất cả những gì bạn phải làm là đặt lại mật khẩu của mình trong vòng ba ngày kể từ khi gửi yêu cầu bằng cách nhấp vào liên kết bên dưới:',
	'get_passwd_new_pwd' => 'Nhập mật khẩu mới của bạn trên trang được mở bằng liên kết ở trên và gửi đi, đồng thời bạn có thể đăng nhập vào trang bằng mật khẩu mới của mình. Bạn có thể thay đổi mật khẩu của mình bất kỳ lúc nào trong Bảng điều khiển người dùng.',

	'password_reset_subject' => 'Nhắc nhở thay đổi mật khẩu',
	'password_reset_reason' => 'Nó đã được đăng ký làm hộp thư người dùng trong {$var[\'bbname\']}, người dùng đã được đặt lại hoặc thay đổi mật khẩu.',
	'password_reset_if_not' => 'Nếu bạn không phải là người dùng đã đăng ký của {$var[\'bbname\']}, vui lòng bỏ qua và xóa email này ngay lập tức. Chỉ khi bạn là người dùng đã đăng ký là {$var[\'bbname\']}, bạn mới có thể tiếp tục đọc nội dung sau.',
	'password_reset_explain' => 'Tài khoản người dùng {$var[\'username\']} trên {$var[\'bbname\']} đã thay đổi hoặc đặt lại mật khẩu tại {$var[\'datetime\']}',
	'password_reset_if_not_user_op' => 'Nếu bạn không vận hành thay đổi mật khẩu hoặc viết lại, vui lòng đăng nhập vào tài khoản kiểm tra {$var[\'bbname\']} ngay lập tức và thực hiện thao tác mật khẩu.',
	'password_reset_if_not_user_op_help' => 'Nếu bạn có bất kỳ vấn đề hoặc cần giúp đỡ (chẳng hạn như tài khoản đóng băng) khi xử lý các vấn đề, vui lòng liên hệ với nhóm quản lý {$var[\'bbname\']} để nhận thêm trợ giúp và hỗ trợ.',

	'email_verify_subject' => 'Xác thực địa chỉ thư điện tử',
	'email_verify_reason' => 'Một đăng ký người dùng mới đã được thực hiện tại {$var[\'bbname\']} hoặc người dùng đã sửa đổi Email để sử dụng địa chỉ email này.',
	'email_verify_explain' => 'Hướng dẫn kích hoạt tài khoản',
	'email_verify_explain2' => 'Nếu bạn là người dùng mới của {$var[\'bbname\']} hoặc đã sử dụng địa chỉ này khi sửa đổi email đã đăng ký của mình, chúng tôi cần xác minh tính hợp lệ của địa chỉ của bạn để tránh spam hoặc lạm dụng địa chỉ.',
	'email_verify_click_link' => 'Bạn có thể kích hoạt tài khoản của mình chỉ bằng cách nhấp vào liên kết bên dưới:',

	'email_reset_subject' => 'Lời nhắc thay đổi địa chỉ email',
	'email_reset_reason' => 'Nó đã được đăng ký làm hộp thư người dùng tại {$var[\'bbname\']} và người dùng đã vận hành thay đổi địa chỉ email.',
	'email_reset_if_not' => 'Nếu bạn không phải là người dùng đã đăng ký của {$var[\'bbname\']}, vui lòng bỏ qua và xóa email này ngay lập tức. Chỉ khi bạn là người dùng đã đăng ký là {$var[\'bbname\']}, bạn mới có thể tiếp tục đọc nội dung sau.',
	'email_reset_explain' => 'Tài khoản người dùng {$var[\'username\']} trong {$var[\'bbname\']} đã thay đổi thay đổi địa chỉ email tại {$var[\'datetime\']}',
	'email_reset_new_email' => 'Địa chỉ email mới là: {$var[\'email\']}, thời gian gửi thư xác minh là: {$var[\'request_datetime\']}',
	'email_reset_if_not_user_op' => 'Nếu bạn không vận hành thay đổi địa chỉ email, vui lòng đăng nhập vào tài khoản kiểm tra {$var[\'bbname\']} ngay lập tức và thực hiện mật khẩu thay đổi và hoạt động thay đổi địa chỉ email.',
	'email_reset_if_not_user_op_help' => 'Nếu bạn có bất kỳ vấn đề hoặc cần giúp đỡ (chẳng hạn như tài khoản đóng băng) khi xử lý các vấn đề, vui lòng liên hệ với nhóm quản lý {$var[\'bbname\']} để nhận thêm trợ giúp và hỗ trợ.',

	'secmobile_reset_subject' => 'Lời nhắc thay đổi số điện thoại di động bảo mật',
	'secmobile_reset_reason' => 'Nó đã được đăng ký làm hộp thư người dùng trong {$var[\'bbname\']} và hoạt động của người dùng đã thay đổi số điện thoại di động bảo mật.',
	'secmobile_reset_if_not' => 'Nếu bạn không phải là người dùng đã đăng ký của {$var[\'bbname\']}, vui lòng bỏ qua và xóa email này ngay lập tức. Chỉ khi bạn là người dùng đã đăng ký là {$var[\'bbname\']}, bạn mới có thể tiếp tục đọc nội dung sau.',
	'secmobile_reset_explain' => 'Tài khoản người dùng {$var[\'username\']} trong {$var[\'bbname\']} đã thay đổi số điện thoại di động bảo mật tại {$var[\'datetime\']}',
	'secmobile_reset_new_secmobile' => 'Số điện thoại di động bảo mật mới là: {$var[\'secmobile\']}',
	'secmobile_reset_if_not_user_op' => 'Nếu bạn không vận hành thay đổi số điện thoại di động bảo mật, vui lòng đăng nhập vào tài khoản kiểm tra {$var[\'bbname\']} ngay lập tức và thay đổi hoạt động thay đổi số điện thoại di động của Mật khẩu và bảo mật.',
	'secmobile_reset_if_not_user_op_help' => 'Nếu bạn có bất kỳ vấn đề hoặc cần giúp đỡ (chẳng hạn như tài khoản đóng băng) khi xử lý các vấn đề, vui lòng liên hệ với nhóm quản lý {$var[\'bbname\']} để nhận thêm trợ giúp và hỗ trợ.',

	'email_register_subject' => 'Địa chỉ đăng ký diễn đàn',
	'email_register_reason' => 'Địa chỉ email này đã được sử dụng để lấy địa chỉ đăng ký người dùng mới tại {$var[\'bbname\']}',
	'email_register_explain' => 'Hướng dẫn đăng ký người dùng mới',
	'email_register_click_link' => 'Bạn chỉ cần nhấp vào liên kết dưới đây để đăng ký thành viên, liên kết dưới đây có hiệu lực trong 3 ngày. Đã hết hạn có thể yêu cầu lại để gửi xác minh email mới:',

	'add_member_subject' => 'Bạn được thêm vào làm thành viên',
	'add_member_intro' => '{$var[\'adminusername\']} là một trong những người quản lý của {$var[\'bbname\']}',
	'add_member_reason' => 'Bạn vừa được thêm làm thành viên của {$var[\'bbname\']}, Email hiện tại là địa chỉ email mà chúng tôi đã đăng ký cho bạn.',
	'add_member_no_interest' => 'Nếu bạn không quan tâm đến {$var[\'bbname\']} hoặc không có ý định trở thành thành viên, ',
	'add_member_info' => 'Thông tin tài khoản',
	'add_member_bbname' => 'Tên trang web:',
	'add_member_siteurl' => 'Địa chỉ trang web:',
	'add_member_newusername' => 'Tên tài khoản:',
	'add_member_newpassword' => 'Mật khẩu:',
	'add_member_can_login' => 'Từ bây giờ, bạn có thể sử dụng tài khoản của mình để đăng nhập vào {$var[\'bbname\']}, chúc bạn vui vẻ!',

	'birthday_subject' => 'Sinh nhật vui vẻ',
	'birthday_reason' => 'Địa chỉ email này được đăng ký làm email người dùng tại {$var[\'bbname\']}, <br />
Theo thông tin bạn đã điền thì hôm nay là sinh nhật của bạn. Rất hân hạnh được gửi lời chúc sinh nhật đến bạn vào lúc này, <br />
Thay mặt cho nhóm quản lý {$var[\'bbname\']}, tôi chúc bạn một sinh nhật thật vui vẻ.',
	'birthday_if_not' => 'Nếu bạn không phải là thành viên của {$var[\'bbname\']} hoặc đó không phải là ngày sinh của bạn, ai đó có thể đã sử dụng sai địa chỉ email của bạn, <br />
Hoặc điền sai thông tin ngày sinh. Email này sẽ không được gửi nhiều lần.',

	'email_to_friend_subject' => '{$_G[\'member\'][\'username\']} Được đề xuất cho bạn: {$thread[\'subject\']}',
	'email_to_friend_sender' => 'Bức thư này được gửi tại {$_G[\'setting\'][\'bbname\']} bởi {$_G[\'member\'][\'username\']}',
	'email_to_friend_reason' => 'Trong {$_G[\'setting\'][\'bbname\']}, nội dung sau đây được giới thiệu cho bạn thông qua chức năng "Giới thiệu cho bạn bè" của {$_G[\'member\'][\'username\']}',
	'email_to_friend_not_official' => 'Xin lưu ý rằng bức thư này chỉ được gửi bởi người dùng bằng cách sử dụng "giới thiệu cho một người bạn", không phải là thư trên trang web chính thức,',

	'email_to_invite_subject' => 'Bạn của bạn {$_G[\'member\'][\'username\']} đã gửi cho bạn mã lời mời đăng ký trang web {$_G[\'setting\'][\'bbname\']}',
	'email_to_invite_reason' => ' {$_G[\'member\'][\'username\']} đã đề xuất nội dung sau cho bạn thông qua chức năng "Gửi mã mời cho bạn bè" của {$var[\'bbname\']}',
	'email_to_invite_not_official' => 'Xin lưu ý rằng bức thư này chỉ được gửi bởi người dùng sử dụng "Gửi mã mời cho bạn bè", không phải email chính thức của trang web,',

	'invitemail_subject' => '{username} đã mời bạn tham gia {sitename} và trở thành bạn bè',
	'invitemail_from' => 'Xin chào, tôi là {$var[\'username\']}, tôi cũng mời bạn tham gia {$var[\'sitename\']} và là bạn của tôi',
	'invitemail_reason' => 'Hãy tham gia cùng bạn bè của tôi, bạn có thể biết tình hình hiện tại của tôi, liên lạc với tôi và giữ liên lạc với tôi bất cứ lúc nào.',
	'invitemail_start' => 'Bài mời:',
	'invitemail_accept_invite' => 'Vui lòng nhấp vào liên kết dưới đây để chấp nhận lời mời kết bạn:',
	'invitemail_viewpage' => 'Nếu bạn có tài khoản trên {$var[\'sitename\']}, vui lòng nhấp vào liên kết bên dưới để xem hồ sơ của tôi:',

	'moderate_member_subject' => 'Thông báo kết quả đánh giá của người dùng',
	'moderate_member_reason' => 'Địa chỉ email này được sử dụng khi người dùng mới đăng ký {$var[\'bbname\']} và quản trị viên đã đặt rằng yêu cầu xem xét thủ công đối với người dùng mới, email này sẽ thông báo cho bạn về kết quả xem xét của nội dung đã gửi đơn xin.',
	'moderate_member_info' => 'Thông tin đăng ký và kết quả kiểm toán',
	'moderate_member_username' => 'Tên tài khoản:',
	'moderate_member_regdate' => 'Thời gian đăng ký:',
	'moderate_member_submitdate' => 'Thời gian gửi:',
	'moderate_member_submittimes' => 'Số lần gửi:',
	'moderate_member_msg' => 'Ký lý do:',
	'moderate_member_modresult' => 'Kết quả kiểm toán:',
	'moderate_member_moddate' => 'Thời gian xem xét:',
	'moderate_member_adminusername' => 'Quản trị viên kiểm toán:',
	'moderate_member_remark' => 'Tin nhắn của quản trị viên:',
	'moderate_member_explain' => 'Mô tả kết quả kiểm toán',
	'moderate_member_explain1' => 'Đạt: Đăng ký của bạn đã được chấp thuận và bạn là người dùng chính thức của {$var[\'bbname\']}.',
	'moderate_member_explain2' => 'Bị từ chối: Thông tin đăng ký của bạn không đầy đủ hoặc không đáp ứng một số yêu cầu của chúng tôi đối với người dùng mới, bạn có thể <a href="home.php?mod=spacecp&ac=profile" target="_blank">cải thiện theo thông báo của quản trị viên của bạn thông tin đăng ký</a> và gửi lại.',
	'moderate_member_explain3' => 'Xóa: Đăng ký của bạn đã bị từ chối do sai lệch lớn so với yêu cầu của chúng tôi hoặc số lượng đăng ký mới trên trang web này đã vượt quá mong đợi. Tài khoản của bạn đã bị xóa khỏi cơ sở dữ liệu, bạn sẽ không thể sử dụng nó nữa để đăng nhập hoặc gửi để xem xét lại, mong bạn thông cảm.',

	'adv_expiration_subject' => 'Quảng cáo trên trang web của bạn sẽ hết hạn sau {day} ngày, vui lòng làm như vậy',
	'adv_expiration_msg' => 'Các quảng cáo sau trên trang web của bạn sẽ hết hạn sau {$var[\'day\']} ngày, vui lòng làm như vậy:',
);

?>