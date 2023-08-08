<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: install_lang.php 36287 2016-12-12 03:59:05Z nemohou $
 */

if(!defined('IN_COMSENZ')) {
	exit('Access Denied');
}

define('UC_VERNAME', 'Tiếng Việt');
$lang = array(
	'SC_UTF8' => 'Tiếng Việt UTF8',
	'TC_UTF8' => '繁体中文 UTF8 版',

	'title_install' => 'Cài đặt '.SOFT_NAME.'',
	'agreement_yes' => 'Đồng ý',
	'agreement_no' => 'Hủy bỏ',
	'notset' => 'Không giới hạn',
	'enable' => 'Mở',
	'disable' => 'Đóng',

	'message_title' => 'Thông báo',
	'error_message' => 'Có lỗi',
	'message_return' => 'Quay lại',
	'return' => 'Quay lại',
	'install_wizard' => 'Cài đặt Discuz X3.5',
	'config_nonexistence' => 'Tập tin cấu hình không tồn tại',
	'nodir' => 'Thư mục không tồn tại',
	'redirect' => 'Trình duyệt sẽ tự động chuyển sang trang mới.<br>Nếu không hỗ trợ hãy bấm vào đây',
	'auto_redirect' => 'Trình duyệt sẽ tự động chuyển sang trang mới',
	'database_errno_1064' => 'Lỗi kết nối CSDL',

	'dbpriv_createtable' => 'Không thể CREATE TABLE để tiếp tục cài đặt',
	'dbpriv_insert' => 'Không thể INSERT để tiếp tục cài đặt',
	'dbpriv_select' => 'Không thể SELECT để tiếp tục cài đặt',
	'dbpriv_update' => 'Không thể UPDATE để tiếp tục cài đặt',
	'dbpriv_delete' => 'Không thể DELETE để tiếp tục cài đặt',
	'dbpriv_droptable' => 'Không thể DROP TABLE để tiếp tục cài đặt',

	'db_not_null' => 'CSDL đã được cài đặt Ucenter, tiếp tục cài đặt sẽ xóa dữ liệu gốc',
	'db_drop_table_confirm' => 'Tiếp tục cài đặt CSDL cũ sẽ bị xóa hết. Bạn có chắc chắn muốn tiếp tục ?',

	'writeable' => 'Có thể viết',
	'unwriteable' => 'Không thể viết',
	'old_step' => 'Quay lại',
	'new_step' => 'Tiếp theo',

	'database_errno_2003' => 'Không thể kết nối với cơ sở dữ liệu. Vui lòng kiểm tra cơ sở dữ liệu được kết nối với máy chủ cơ sở dữ liệu chính xác hay không',
	'database_errno_1044' => 'Không thể tạo cơ sở dữ liệu mới, vui lòng kiểm tra tên chính xác của cơ sở dữ liệu',
	'database_errno_1045' => 'Không thể kết nối với cơ sở dữ liệu, vui lòng xác minh tên người dùng và mật khẩu cơ sở dữ liệu là chính xác',
	'database_connect_error' => 'Lỗi kết nối cơ sở dữ liệu',
	'run_sql_error' => 'Discuz! Database Error',

	'step_title_1' => 'Môi trường',
	'step_title_2' => 'Ucenter',
	'step_title_3' => 'CSDL',
	'step_title_4' => 'Cài đặt',
	'step_env_check_title' => 'Bắt đầu cài đặt',
	'step_env_check_desc' => 'Kiểm tra môi trường cài đặt',
	'step_db_init_title' => 'Cài đặt cơ sở dữ liệu',
	'step_db_init_desc' => 'Đang chạy trình cài đặt cơ sở dữ liệu',

	'step1_file' => 'Tập tin',
	'step1_need_status' => 'Yêu cầu',
	'step1_status' => 'Hiện tại',
	'not_continue' => 'Xin vui lòng sửa đổi theo yêu cầu',

	'tips_dbinfo' => 'Điền thông tin CSDL',
	'tips_dbinfo_comment' => '',
	'tips_admininfo' => 'Điền thông tin quản trị',
	'step_ext_info_title' => 'Cài đặt thành công',
	'step_ext_info_comment' => 'Nhấn vào đây để nhập thông tin đăng nhập',

	'ext_info_succ' => 'Cài đặt thành công',
	'install_submit' => 'Tiếp tục',
	'install_locked' => 'Cài đặt bị tạm dừng, nếu bạn muốn cài đặt lại, hãy vào máy chủ và xóa<br /> '.str_replace(ROOT_PATH, '', $lockfile),
	'error_stuck_msg' => 'Quá trình cài đặt đã không tiến triển trong một thời gian dài và yêu cầu liên quan có thể đã thoát bất thường do mạng hết thời gian chờ hoặc lỗi máy chủ nghiêm trọng',
	'error_quit_msg' => 'Bạn phải khắc phục sự cố trên, nếu không quá trình cài đặt sẽ không được tiến hành.',
	'error_reinstall_msg' => 'Cơ sở dữ liệu của bạn có thể có hiệu suất InnoDB kém, vui lòng tăng thời gian chờ PHP, làm mới trang và thử cài đặt lại',

	'step_app_reg_title' => 'Thiết lập môi trường',
	'step_app_reg_desc' => 'Kiểm tra máy chủ và Ucenter',
	'tips_ucenter' => 'Điền thông tin Ucenter',
	'tips_ucenter_comment' => 'Nếu bạn đã cài đặt Ucenter thì hãy điền vào các thông tin dưới đây, nếu chưa cài đặt bạn có thể tải Ucenter tại <a href="http://www.discuz.com/" target="blank">Comsenz</a>',

	'advice_mysqli_connect' => 'Vui lòng kiểm tra xem mô-đun mysqli đã được tải đúng chưa',
	'advice_xml_parser_create' => 'Chức năng này yêu cầu có hỗ trợ XML trong PHP',
	'advice_json_encode' => 'Hàm này yêu cầu PHP hỗ trợ JSON. Vui lòng liên hệ với nhà cung cấp dịch vụ để đảm bảo rằng tính năng này đã được bật.',
	'advice_dns_get_record' => 'Chức năng này yêu cầu PHP hỗ trợ truy vấn DNS và PHP đi kèm với nó theo mặc định. Sự cố này dễ xảy ra do quá trình biên dịch và cài đặt sai hoặc thiếu các thành phần. Vui lòng liên hệ với nhà cung cấp dịch vụ để xác nhận rằng chức năng này đã được kích hoạt',
	'advice_fsockopen' => 'Sửa trong php.ini hàm allow_url_fopen sang On để có thể cài đặt',
	'advice_pfsockopen' => 'Cần bật hàm allow_url_fopen',
	'advice_stream_socket_client' => 'Cần bật hàm stream_socket_client',
	'advice_curl_init' => 'Cần bật hàm curl_init',

	'ucurl' => 'URL UCenter',
	'ucpw' => 'Mật khẩu',
	'ucip' => 'IP UCenter',
	'ucenter_ucip_invalid' => 'Định dạng lỗi, vui lòng điền đúng định dạng IP',
	'ucip_comment' => 'Thường thì không phải điền',

	'tips_siteinfo' => 'Xin vui lòng điền vào các thông tin trang web',
	'sitename' => 'Tên trang web',
	'siteurl' => 'URL trang web',

	'forceinstall' => 'Bắt buộc cài đặt',
	'dbinfo_forceinstall_invalid' => 'CSDL này đã chứa dữ liệu, để cài đặt bạn có thể sửa các bảng tiền tố hoặc cài đè nên dữ liệu cũ.',
	'dbinfo_myisam2innodb_invalid' => 'Nếu hiệu suất của InnoDB kém và hết thời gian chờ cài đặt, bạn có thể thử phương pháp này để buộc cài đặt',

	'click_to_back' => 'Quay lại',
	'adminemail' => 'Admin Email',
	'adminemail_comment' => 'Dùng để báo lỗi chương trình',
	'dbhost_comment' => 'Thường là localhost',
	'dbname_comment' => 'Cơ sở dữ liệu dùng để cài đặt Discuz!',
	'dbuser_comment' => 'Tên người dùng cơ sở dữ liệu của bạn',
	'dbpw_comment' => 'Mật khẩu cơ sở dữ liệu của bạn',
	'tablepre_comment' => 'Điền vào nếu mún phân biệt bảng khi cài nhiều diễn đàn',
	'forceinstall_check_label' => 'Tôi sẽ cài đè dữ liệu cũ',
	'myisam2innodb_check_label' => 'Cài đặt bằng MyISAM và chuyển đổi sang InnoDB',
	'initdbresult_succ' => 'Cài đặt cơ sở dữ liệu hoàn tất',
	'initdbdataresult_succ' => 'Khởi tạo dữ liệu cơ sở dữ liệu hoàn tất',
	'initdbinnodbresult_succ' => 'Đã hoàn tất chuyển đổi bảng dữ liệu InnoDB',
	'initsys' => 'Khởi tạo hệ thống',

	'uc_url_empty' => 'Bạn chưa điền URL Ucenter.',
	'uc_url_invalid' => 'URL không hợp lệ',
	'uc_url_unreachable' => 'Sai URL Ucenter, vui lòng kiểm tra',
	'uc_ip_invalid' => 'Không thể dùng tên miền, vui lòng điền IP',
	'uc_admin_invalid' => 'Sai mật khẩu Ucenter',
	'uc_data_invalid' => 'Sai thông tin, vui lòng kiểm tra URL Ucenter ',
	'uc_dbcharset_incorrect' => 'Mã font Ucenter không trùng với Discuz X1.5, vui lòng kiểm tra',
	'uc_api_add_app_error' => 'Thêm ứng dụng vài Ucenter không thành công',
	'uc_dns_error' => 'DNS Ucenter lỗi vui lòng dùng IP',

	'ucenter_ucurl_invalid' => 'Sai URL Ucenter',
	'ucenter_ucpw_invalid' => 'Sai mật khẩu Ucenter',
	'siteinfo_siteurl_invalid' => 'URL trang web trống hoặc sai định dạng',
	'siteinfo_sitename_invalid' => 'Tên trang web trống, vui lòng kiểm tra',
	'dbinfo_dbhost_invalid' => 'Sai tên máy chủ CSDL',
	'dbinfo_dbname_invalid' => 'Sai tài khoản',
	'dbinfo_dbuser_invalid' => 'Sai tài khoản CSDL, vui lòng kiểm tra',
	'dbinfo_dbpw_invalid' => 'Sai mật khẩu CSDL, vui lòng kiểm tra',
	'dbinfo_adminemail_invalid' => 'Email trống, vui lòng kiểm tra',
	'dbinfo_tablepre_invalid' => 'Bảng tiền tố trống hoặc sai định dạng, vui lòng kiểm tra',
	'admininfo_username_invalid' => 'Tên tài khoản trống hoặc sai định dạng, vui lòng kiểm tra',
	'admininfo_email_invalid' => 'Email trống, vui lòng kiểm tra',
	'admininfo_password_invalid' => 'Mật khẩu trống, vui lòng kiểm tra',
	'admininfo_password2_invalid' => 'Hai mật khẩu không giống nhau.',

	'install_dzstandalone' => '<div class="selradio"><input type="radio" id="install_ucenter_standalone" name="install_ucenter" value="standalone" onclick="if(this.checked)$(\'form_items_2\').style.display=\'none\';" /><label for="install_ucenter_standalone">Cài đặt mới (chế độ độc lập)</label></div>',
	'install_dzfull' => '<div class="selradio"><input type="radio" id="install_ucenter_yes"'.(getgpc('install_ucenter') != 'no' ? ' checked="checked"' : '').' name="install_ucenter" value="yes" onclick="if(this.checked)$(\'form_items_2\').style.display=\'none\';" /><label for="install_ucenter_yes">Cài mới cùng UCenter</label></div>',
	'install_dzonly' => '<div class="selradio"><input type="radio" id="install_ucenter_no"'.(getgpc('install_ucenter') == 'no' ? ' checked="checked"' : '').' name="install_ucenter" value="no" onclick="if(this.checked)$(\'form_items_2\').style.display=\'\';" /><label for="install_ucenter_no">Cài với Ucenter sẵn có</label></div>',

	'username' => 'Tài khoản',
	'email' => 'Email',
	'password' => 'Mật khẩu',
	'password_comment' => 'Điền vào mật khẩu',
	'password2' => 'Nhập lại',

	'admininfo_invalid' => 'Sai thông tin, vui lòng kiểm tra lại',
	'dbname_invalid' => 'Tên CSDL trống, vui lòng điền lại',
	'tablepre_invalid' => 'Sai tiền tố hoặc trống, vui lòng kiểm tra',
	'admin_username_invalid' => 'Tên tài khoản không đúng, tối đa là 15 ký tự và không có ký tự đặc biệt',
	'admin_password_invalid' => 'Hai mật khẩu không giống nhau',
	'admin_email_invalid' => 'Email lỗi, email đã được sử dụng hoặc sai định dạng.',
	'admin_invalid' => 'Thông tin lỗi, hãy nhập cẩn thận từng mục',
	'admin_exist_password_error' => 'Tên người sử dụng đã tồn tại, nếu bạn muốn thiết lập quản trị diễn đàn này, vui lòng nhập đúng mật khẩu cho người dùng, hoặc thay thế tên của người quản trị diễn đàn',

	'tagtemplates_subject' => 'Tiêu đề',
	'tagtemplates_uid' => 'Số ID',
	'tagtemplates_username' => 'Tài khoản',
	'tagtemplates_dateline' => 'Ngày',
	'tagtemplates_url' => 'Địa chỉ chủ đề',

	'uc_version_incorrect' => 'Phiên bản Ucenter đã quá cũ bạn cần cập nhật bản mới tại : https://www.discuz.vip/.',
	'config_unwriteable' => 'Không cài đặt, bạn cần chmod tập tin config.inc.php (777)',

	'install_in_processed' => 'Cài đặt ...',
	'install_succeed' => 'Cài đặt thành công, bấm vào đây để tiếp tục',

	'init_credits_karma' => 'Uy tín',
	'init_credits_money' => 'Tiền',

	'init_postno0' => 'Chủ thớt',
	'init_postno1' => 'Giật tem',
	'init_postno2' => 'Hạng 3',
	'init_postno3' => 'Hạng 4',

	'init_support' => 'Tốt',
	'init_opposition' => 'Kém',

	'init_group_0' => 'Thành viên',
	'init_group_1' => 'Quản trị viên',
	'init_group_2' => 'Siêu quản lý',
	'init_group_3' => 'Quản lý',
	'init_group_4' => 'Cấm phát ngôn',
	'init_group_5' => 'Cấm truy cập',
	'init_group_6' => 'Cấm IP',
	'init_group_7' => 'Khách',
	'init_group_8' => 'Chờ xác nhận',
	'init_group_9' => 'Khách/Chưa kích hoạt',
	'init_group_10' => 'Thành viên mới',
	'init_group_11' => 'Thành viên',
	'init_group_12' => 'Thành viên năng nổ',
	'init_group_13' => 'Thành viên nhiệt tình',
	'init_group_14' => 'Thành viên sáng giá',
	'init_group_15' => 'Thành viên gắn bó',

	'init_rank_1' => 'Tập viết',
	'init_rank_2' => 'Học sinh',
	'init_rank_3' => 'Sinh viên',
	'init_rank_4' => 'Tiến sĩ',
	'init_rank_5' => 'Giáo sư',

	'init_cron_1' => 'Xóa hết bài hôm nay',
	'init_cron_2' => 'Xóa thời gian online trong tháng',
	'init_cron_3' => 'Xóa hết dữ liệu ngày',
	'init_cron_4' => 'Thống kê email mừng sinh nhật',
	'init_cron_5' => 'Trả lời thông báo',
	'init_cron_6' => 'Xóa hết thông báo',
	'init_cron_7' => 'Xóa hết kế hoạch',
	'init_cron_8' => 'Làm sạch thúc đẩy diễn đàn',
	'init_cron_9' => 'Xóa hết chủ đề của tháng',
	'init_cron_10' => 'Cập nhật X-Space hàng ngày',
	'init_cron_11' => 'Chủ đề cập nhật hàng tuần',

	'init_bbcode_1' => 'Hiệu ứng này tương tự như thẻ marquee của HTML',
	'init_bbcode_2' => 'Nhúng hoạt hình Flash',
	'init_bbcode_3' => 'Hiển thị trạng thái trực tuyến QQ',
	'init_bbcode_4' => 'Bản thảo',
	'init_bbcode_5' => 'Đăng ký',
	'init_bbcode_6' => 'Nhúng Windows Media Audio',
	'init_bbcode_7' => 'Nhúng âm thanh hoặc video phương tiện Windows',

	'init_qihoo_searchboxtxt' =>'Nhập từ khóa, Tìm nhanh diễn đàn này',
	'init_threadsticky' =>'Chú ý, Phân loại, Chú ý',

	'init_default_style' => 'Phong cách mặc định',
	'init_default_forum' => 'Diễn đàn mặc định',
	'init_default_template' => 'Mẫu mặc định',
	'init_default_template_copyright' => 'Comsenz (Bắc Kinh)',

	'init_dataformat' => 'Y-n-j',
	'init_modreasons' => 'Quảng cáo/SPAM\r\nVirus\r\nKhông dấu\r\nLạc đề\r\nTrùng bài\r\n\r\nĐồng tình\r\nBài hay\r\nTinh hoa',
	'init_userreasons' => 'Quảng cáo\r\nSPAM\r\nSEX\r\nLạc đề\r\nPhạm quy\r\n\r\nĐồng tình\r\nBài hay\r\nNguyên tác',
	'init_link' => 'Discuz! Diễn đàn chính thức thiết lập và trao đổi kỹ thuật',
	'init_link_note' => 'Cung cấp Discuz mới nhất! Tin tức sản phẩm, tải về và trao đổi kỹ thuật',

	'init_promotion_task' => 'Nhiệm vụ thưởng',
	'init_gift_task' => 'Nhiệm vụ nhận quà',
	'init_avatar_task' => 'Nhiệm vụ avatar',

	'copyright' => '&copy; 2001-'.date('Y').' <a href="https://code.dismall.com/" target="_blank">Discuz! Team</a>.',

	'license' => '
<div class="license"><h1>Vui lòng đọc quy định sử dụng mã nguồn Disuz!</h1>
<p>Copyright (c) 2001-2020, Tencent Cloud Computing (Beijing) Co., Ltd. (formerly Beijing Kangsheng Xinchuang Technology Co., Ltd.) All rights reserved.</p>

<p>Thank you for choosing Kangsheng products. We hope that our efforts can provide you with an efficient, fast, powerful site solution, and a powerful community forum solution. The website of Kangsheng Company is http://www.comsenz.com, and the official discussion website of the product is http://www.discuz.net.</p>

<p>Note to users: This agreement is a legal agreement between you and Kangsheng about your use of various software products and services provided by Kangsheng. Regardless of whether you are an individual or an organization, profitable or not, and for whatever purpose (including for the purpose of learning and research), you need to read this agreement carefully, including the exemption clauses that exempt or limit Kang Sheng\'s liability and restrictions on your rights. Please review and accept or not accept these Terms of Service. If you do not agree to these Terms of Service and/or any changes to them by Kang Sheng at any time, you should not use or actively cancel Kang Sheng products provided by Kang Sheng. Otherwise, any of your use of registration, login, download, and viewing of related services in Kangsheng products will be deemed to be your full acceptance of these Terms of Service, including any amendments made by Kangsheng to the Terms of Service at any time.
<p>Once these Terms of Service are changed, Kang Sheng will post the changes on the website. Once the revised terms of service are published on the website management background, they will effectively replace the original terms of service. You can check the latest version of the terms of service at the official forum of Kangsheng at any time. If you choose to accept these terms, you agree to be bound by the terms of the agreement. If you do not agree to these Terms of Service, you will not be granted the right to use the Service. If you violate the provisions of this clause, Kangsheng Company has the right to suspend or terminate your qualification to use Kangsheng products at any time and reserves the right to pursue relevant legal responsibilities.</p>
<p>After understanding, agreeing, and complying with all the terms of this agreement, you can start using Kangsheng products. You may enter into another written agreement directly with Kangsheng to supplement or replace all or any part of this agreement.</p></p>

<p>All intellectual property Kang Sheng has the software. This software is only for the license, not for sale. Kang Sheng only allows you to copy, in accordance with the terms of this agreement, download installation, use or otherwise benefit from the functions of the software or intellectual property rights.</p>

<h3>I. Licensed Rights</h3>
<ol>
   <li>You can fully comply with the end user license agreement, based on the software used in this non-commercial use, without having to pay for software copyright licensing fees.</li>
   <li>Agreement you can within the constraints and limitations modify Discuz! source code (if provided) or interface styles to suit your site requirements.</li>
   <li>You have to use this software to build the forum all the membership information, articles and related information of ownership, and is independent of commitment and legal obligations related to the article content.</li>
   <li>A commercial license, you can use this software for commercial applications, while according to the type of license purchased to determine the period of technical support, technical support, technical support form and content, from the moment of purchase, within the period of technical support have a way to get through the specified designated areas of technical support services. Business authorized users have the power to reflect and comment, relevant comments will be a primary consideration, but not necessarily be accepted promise or guarantee.</li>
   <li>You can download the application that suits your website from the application center service provided by Kangsheng, but you should pay the application developer / owner accordingly.</li>
</ol>

<h3>II. Constraints and restrictions stipulated in the agreement</h3>
<ol>
   <li>The software may not be used for commercial purposes (including, but not limited to, corporate websites, operational websites, profit-oriented websites, or profitable websites) without written commercial authorization from Kangsheng. For commercial license purchase, please visit http://www.discuz.com for reference, or call 8610-51282255 for details.</li>
   <li>May not associated with the software or business license for rental, sale, mortgage or grant sub-licenses.</li>
   <li>In any case, that no matter how used, whether modified or landscaping, changes to what extent, just use Discuz! the whole or any part, without the written permission of the Forum page footer Department Discuz! name and Sing Imagination (Beijing) Technology Co., Ltd. affiliated website (http://www.comsenz.com, http://www.discuz.com or http://www.discuz.net) the link must be retained, not removed or modified .</li>
   <li>Prohibited Discuz! the whole or any part of the basis for the development of any derivative version, modified version or third-party version for redistribution.</li>
   <li>The applications you download from the Application Center must not be reverse engineered, decompiled, decompiled, etc. without the written permission of the application developer/owner, Publishing, publishing, developing related derivative products, works, etc.</li>
   <li>If you fail to comply with the terms of this agreement, your authorization will be terminated, your licensed rights will be revoked, and you will be held legally responsible.
</ol>

<h3>III. Limited Warranty and Disclaimer</h3>
<ol>
   <li>The software and the accompanying documents as not to provide any express or implied, or guarantee in the form of compensation provided.</li>
   <li>User voluntary use of this software, you must understand the risks of using this software, technical services in the not to buy products before, we do not promise to provide any form of technical support, use of guarantees, nor liable for any use of this software issues related to liability arising.</li>
   <li>Hong Sing Company does not use the software to build a website or forum post or liable for the information, you assume full responsibility.</li>
   <li>Hong Sing company provides software and services in a timely manner, security, accuracy is not guaranteed, due to force majeure, Hong Sing factors beyond the control of the company (including hacker attacks, stopping power, etc.) caused by software and services Suspension or termination, and give your losses, you agree to Sing corporate responsibility waiver of all rights.</li>
   <li>Hong Sing Company specifically draw your attention to Hong Sing Company in order to protect business development and adjustment of autonomy, Hong Sing Company has at any time with or without prior notice to modify the service content, suspend or terminate some or all of the rights of software and services , changes will be posted on the relevant pages of Sing website, including without notice. Hong Sing Company to modify or discontinue the exercise, termination of some or all of the rights of software and services resulting from the loss, without Hong Sing Company to you or any third party.</li>
   <li>Kangsheng Company specially draws your attention to the fact that in order to protect the autonomy of the company’s business development and adjustment, Kangsheng Company has the right to modify the service content, suspend or terminate part or all of the software use and The right of the service, the modification will be announced on the relevant page of the Kangsheng company website, once it is announced, it will be regarded as a notice. If Kangsheng Company exercises the right to modify or suspend or terminate part or all of the software use and service and cause losses, Kangsheng Company shall not be liable to you or any third party. </li>
</ol>

<p>Hong Sing products on the end user license agreement, business license and technical services to the details provided by the Hong Sing exclusive. Sing the company has without prior notice, modify the license agreement and services price list right to the modified agreement or price list from the change of the date of the new authorized user to take effect.</p>

<p>Once you start the installation Hong Sing products, shall be deemed to fully understand and accept the terms of this Agreement, the terms in the enjoyment of the rights granted at the same time, by the relevant constraints and restrictions. Licensing agreement outside the scope of acts would be a direct violation of this License Agreement and constitute an infringement, we have the right to terminate the authorization, shall be ordered to stop the damage, and retain the power to investigate related responsibilities.</p>

<p>The interpretation of the terms of the license agreement, validity, and dispute resolution, applicable to the mainland People\'s Republic of law.</p>

<p>Between Hong Sing if you and any dispute or controversy, should first be settled through friendly consultations, the consultation fails, you hereby agree to submit the dispute or controversy Sing Haidian District People\'s Court where jurisdiction. Hong Sing Company has the right to interpret the above terms and discretion.</p>

<p>(End of text)</p>

<p align="right">Kang Sheng</p>

</div>',

	'php8_tips' => 'Chào bạn, sản phẩm hiện tại chưa hỗ trợ cài đặt PHP 9, bạn vui lòng hạ cấp xuống ít nhất PHP 8.0 và thử lại!',
	'no_utf8_tips' => 'Xin chào, phiên bản bạn đang sử dụng là phiên bản mã hóa bản địa hóa chẳng hạn như GBK / BIG-5. Phiên bản này không còn là phiên bản đẩy chính nữa. Nếu bạn định xây dựng một trang web mới [thực sự] thì bạn nên sử dụng phiên bản chính thức mới nhất Phiên bản UTF-8 để cài đặt.',
	'no_latest_tips' => 'Xin chào, phiên bản bạn đang sử dụng đã cũ hơn, có thể có lỗi và rủi ro bảo mật. Nếu không có trường hợp đặc biệt, bạn nên sử dụng phiên bản UTF-8 chính thức mới nhất để cài đặt.',
	'unstable_tips' => 'Xin chào, phiên bản bạn đang sử dụng là phiên bản không chính thức và có thể có lỗi hoặc lỗi không xác định. Nếu bạn định xây dựng chính thức một trang web hoặc mua một plugin, bạn nên sử dụng phiên bản UTF-8 chính thức mới nhất để Tải về.',
	'next_tips' => '\r\nNhấp vào [OK] để chuyển đến trang tải xuống phiên bản UTF-8 chính thức mới nhất, nhấp vào [Hủy] để tiếp tục cài đặt (không được khuyến nghị)',

	'uc_installed' => 'Bạn đã cài đặt UCenter, nếu bạn muốn cài đặt lại vui lòng xóa tập tin data/install.lock',
	'i_agree' => 'Tôi đã đọc và đồng ý với các điều khoản',
	'supportted' => 'Hỗ trợ',
	'unsupportted' => 'Ko hỗ trợ',
	'max_size' => 'Hỗ trợ/Tối đa',
	'project' => 'Dự án',
	'ucenter_required' => 'Yêu cầu',
	'ucenter_best' => 'Discuz!',
	'curr_server' => 'Hiện tại',
	'env_check' => 'Kiểm tra',
	'os' => 'OS',
	'php' => 'Bản PHP',
	'attachmentupload' => 'Đính kèm',
	'unlimit' => 'Không giới hạn',
	'version' => 'Phiên bản',
	'gdversion' => 'Bản GD',
	'allow' => 'Hỗ trợ',
	'unix' => 'Unix',
	'diskspace' => 'Đĩa cứng',
	'opcache' => 'OPcache',
	'curl' => 'Thư viện cURL',
	'priv_check' => 'Thư mục, tập tin',
	'func_depend' => 'Kiểm tra',
	'func_name' => 'Tên',
	'check_result' => 'Kết quả',
	'suggestion' => 'Khuyến nghị',
	'advice_mysqli' => 'Vui lòng kiểm tra xem mô-đun mysqli đã được tải đúng chưa',
	'advice_fopen' => 'Chức năng này yêu cầu mở hàm allow_url_fopen trong php.ini.',
	'advice_xml' => 'Chức năng này yêu cầu có hỗ trợ XML trong PHP',
	'none' => 'Không',
	'undefine_func' => 'Chức năng không tồn tại',
	'mysqli_unsupport' => 'Vui lòng kiểm tra xem mô-đun mysqli đã được tải đúng chưa',

	'dbhost' => 'Máy chủ CSDL',
	'dbuser' => 'Tài khoản CSDL',
	'dbpw' => 'Mật khẩu CSDL',
	'dbname' => 'Tên CSDL',
	'tablepre' => 'Tiền tố',

	'ucfounderpw' => 'Mật khẩu',
	'ucfounderpw2' => 'Nhập lại',

	'clear_dir' => 'Thư mục trống',
	'innodb' => 'Chuyển đổi bảng dữ liệu InnoDB',
	'select_db' => 'Chọn CSDL',
	'create_table' => 'Tạo bảng',
	'succeed' => 'Thành công ',
	'failed' => 'Thất bại',

	'init_table_data' => 'Khởi tạo dữ liệu trong bảng dữ liệu',
	'install_data' => 'Dữ liệu đang được cài đặt',
	'install_test_data' => 'Các dữ liệu đang được cài đặt',

	'method_undefined' => 'Không xác định phương pháp',
	'database_nonexistence' => 'CSDL không tồn tại',
	'skip_current' => 'Bỏ qua bước này',
	'topic' => 'Chủ đề',
	'install_finish' => 'Diễn đàn của bạn đã được cài đặt, nhấn vào đây để truy cập',
	'install_finish_next' => 'Tiếp theo, bạn có thể:',
	'finish_btn_admin' => 'Vào trang quản lý',
	'finish_btn_cloudaddon' => 'Cài đặt mẫu plugin',
	'finish_btn_direct' => 'Ghé thăm trang web trực tiếp',

);

$msglang = array(
	'config_nonexistence' => 'Config.inc.php của bạn không tồn tại và bạn không thể tiếp tục cài đặt.',
);

?>