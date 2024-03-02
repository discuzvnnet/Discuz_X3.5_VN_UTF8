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

	'title_install' => 'Cài đặt '.SOFT_NAME,
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
<p>Copyright (c) 2001-'.date('Y').', Tencent Cloud Computing (Beijing) Co., Ltd. (formerly Beijing Kangsheng Xinchuang Technology Co., Ltd.) All rights reserved.</p>

<p>Cảm ơn bạn đã lựa chọn sản phẩm của Tencent Cloud. Chúng tôi hy vọng rằng những nỗ lực của chúng tôi có thể cung cấp cho bạn giải pháp trang web hiệu quả, nhanh chóng và mạnh mẽ cũng như giải pháp diễn đàn cộng đồng mạnh mẽ. URL cộng đồng thảo luận sản phẩm chính thức là https://www.dismall.com. Địa chỉ trang web của trung tâm ứng dụng sản phẩm chính thức là: https://addon.dismall.com. URL mã nguồn mở là https://code.dismall.com.</p>

<p>Trung tâm ứng dụng chính thức có trong Discuz! X. Discuz! X Dự án nguồn mở được duy trì bởi Hefei Erdao Network Technology Co., Ltd. và mã nguồn mở Discuz! X được ủy ban quản lý nguồn mở dự án và các nhà phát triển cộng đồng cùng duy trì. Ngoại trừ các dịch vụ trên, tất cả các dịch vụ đều được cung cấp bởi Tencent Cloud.</p>

<p>Thông báo của người dùng: Thỏa thuận này là thỏa thuận pháp lý giữa bạn và Tencent Cloud liên quan đến việc bạn sử dụng các sản phẩm và dịch vụ phần mềm khác nhau do Tencent Cloud cung cấp. Bất kể bạn là cá nhân hay tổ chức, có lợi nhuận hay không và vì bất kỳ mục đích nào (bao gồm cả mục đích học tập và nghiên cứu), bạn phải đọc kỹ thỏa thuận này, bao gồm các điều khoản từ chối trách nhiệm miễn trừ hoặc giới hạn trách nhiệm pháp lý của Tencent Cloud và các hạn chế đối với quyền. Vui lòng xem lại và chấp nhận hoặc không chấp nhận các Điều khoản dịch vụ này. Nếu bạn không đồng ý với các Điều khoản dịch vụ này và/hoặc các sửa đổi của Tencent Cloud vào bất kỳ lúc nào, bạn không nên sử dụng hoặc chủ động hủy các sản phẩm Tencent Cloud do Tencent Cloud cung cấp. Mặt khác, mọi hành vi đăng ký, đăng nhập, tải xuống, xem và các hành vi sử dụng khác của bạn đối với các dịch vụ liên quan trong các sản phẩm của Tencent Cloud sẽ được coi là sự chấp nhận hoàn toàn của bạn đối với tất cả các Điều khoản dịch vụ này, bao gồm cả việc chấp nhận mọi sửa đổi do Tencent Cloud thực hiện đối với Điều khoản của Dịch vụ bất cứ lúc nào.</p>
<p>Sau khi các Điều khoản dịch vụ này được thay đổi, Tencent Cloud sẽ xuất bản nội dung đã sửa đổi trên trang web. Sau khi Điều khoản dịch vụ sửa đổi được xuất bản trên nền tảng quản lý trang web, chúng sẽ thay thế Điều khoản dịch vụ ban đầu một cách hiệu quả. Bạn có thể đăng nhập vào trang web mã nguồn mở bất cứ lúc nào để kiểm tra phiên bản mới nhất của điều khoản dịch vụ. Nếu bạn chọn chấp nhận các Điều khoản này, bạn đồng ý bị ràng buộc bởi các điều kiện của Thỏa thuận. Nếu bạn không đồng ý với các Điều khoản dịch vụ này, bạn không có quyền sử dụng Dịch vụ. Nếu bạn vi phạm các quy định của các Điều khoản này, Tencent Cloud có quyền đình chỉ hoặc chấm dứt tư cách sử dụng các sản phẩm Tencent Cloud của bạn bất cứ lúc nào và có quyền truy đòi các nghĩa vụ pháp lý liên quan.</p>
<p>Bạn chỉ có thể bắt đầu sử dụng các sản phẩm của Tencent Cloud sau khi hiểu, đồng ý và tuân thủ tất cả các điều khoản của thỏa thuận này. Bạn có thể trực tiếp ký kết một thỏa thuận bằng văn bản khác với Tencent Cloud để bổ sung hoặc thay thế toàn bộ hoặc bất kỳ phần nào của thỏa thuận này.</p>

<p>Tencent Cloud sở hữu mọi quyền sở hữu trí tuệ của phần mềm này. Phần mềm này chỉ được cung cấp theo thỏa thuận cấp phép và không phải để bán. Tencent Cloud chỉ cho phép bạn sao chép, tải xuống, cài đặt, sử dụng hoặc hưởng lợi từ các chức năng hoặc quyền sở hữu trí tuệ của phần mềm này với điều kiện bạn tuân thủ các điều khoản của thỏa thuận này.</p>

<h3>I. Quyền được cấp phép theo thỏa thuận</h3>
<ol>
   <li>Bạn có thể sử dụng phần mềm này cho mục đích phi thương mại hoặc thương mại (giới hạn ở giấy phép áp dụng cho thỏa thuận này) trên cơ sở tuân thủ đầy đủ thỏa thuận cấp phép này mà không phải trả phí cấp phép bản quyền phần mềm.</li>
   <li>Bạn có thể sửa đổi mã nguồn sản phẩm Tencent Cloud (nếu được cung cấp) hoặc kiểu giao diện cho phù hợp với yêu cầu trang web của bạn trong phạm vi ràng buộc và giới hạn được quy định trong Thỏa thuận.</li>
   <li>Bạn sở hữu quyền sở hữu tất cả các tài liệu, bài viết và thông tin liên quan của thành viên trên trang web được xây dựng bằng phần mềm này và bạn có trách nhiệm độc lập trong việc xem xét và chú ý đến nội dung của trang web được xây dựng bằng phần mềm này để đảm bảo rằng nó không vi phạm quyền riêng tư của bất kỳ ai. các quyền và lợi ích hợp pháp và bạn tự chịu trách nhiệm về mọi hậu quả. Bạn phải chịu mọi trách nhiệm phát sinh từ việc sử dụng phần mềm và dịch vụ của Tencent Cloud. Nếu có bất kỳ tổn thất nào xảy ra cho Tencent Cloud hoặc người dùng, bạn sẽ phải bồi thường đầy đủ.</li>
   <li>Nếu bạn cần sử dụng người dùng dịch vụ hoặc phần mềm Tencent Cloud cho mục đích thương mại, bạn phải tuân thủ luật pháp có liên quan của Cộng hòa Nhân dân Trung Hoa. Nếu bạn cần cung cấp các phương pháp hỗ trợ kỹ thuật hoặc nội dung hỗ trợ kỹ thuật, vui lòng nhận các dịch vụ hỗ trợ kỹ thuật từ trang web chính thức (https://www.discuz.vip/).</li>
   <li>Bạn có thể tải xuống các ứng dụng phù hợp với trang web của mình từ dịch vụ trung tâm ứng dụng do Tencent Cloud cung cấp, nhưng các khoản phí tương ứng phải được trả cho nhà phát triển/chủ sở hữu ứng dụng.</li>
</ol>

<h3>II. Các hạn chế và hạn chế được quy định trong Thỏa thuận</h3>
<ol>
   <li>Không được cho thuê, bán, thế chấp hoặc cấp phép lại Phần mềm hoặc các giấy phép thương mại liên quan.</li>
   <li>Trong mọi trường hợp, nghĩa là, bất kể mục đích là gì, dù nó đã được sửa đổi hay làm đẹp hay không và mức độ sửa đổi, miễn là toàn bộ hoặc bất kỳ phần nào của sản phẩm Tencent Cloud được sử dụng mà không có sự cho phép bằng văn bản, Powered by Discuz! và liên kết ở chân trang (https://www.discuz.vip/) và liên kết đến trung tâm ứng dụng chính thức của chương trình phụ trợ (https://addon.dismall.com) phải được giữ lại và không thể bị xóa xóa, sửa đổi hoặc thay thế.</li>
   <li>Nghiêm cấm phát triển bất kỳ phiên bản phái sinh, sửa đổi hoặc bên thứ ba nào để phân phối lại dựa trên toàn bộ hoặc bất kỳ phần nào của sản phẩm Tencent Cloud.</li>
   <li>Đối với các ứng dụng bạn tải xuống từ Trung tâm ứng dụng, bạn không được phép đảo ngược kỹ thuật, lắp ráp ngược, dịch ngược, v.v. mà không có sự cho phép bằng văn bản của nhà phát triển/chủ sở hữu ứng dụng và không được sao chép, sửa đổi, liên kết, xuất bản lại hoặc lắp ráp mà không được phép. , xuất bản, xuất bản và phát triển các sản phẩm, tác phẩm phái sinh,... liên quan đến nó.</li>
   <li>Nếu bạn không tuân thủ các điều khoản của Thỏa thuận này, quyền của bạn sẽ bị chấm dứt, các quyền được cấp phép sẽ bị thu hồi và bạn sẽ phải chịu trách nhiệm pháp lý tương ứng.</li>
</ol>

<h3>III. Bảo hành có giới hạn và từ chối trách nhiệm</h3>
<ol>
   <li>Phần mềm này và tài liệu đi kèm được cung cấp mà không có bảo hành hoặc bảo hành dưới bất kỳ hình thức nào, dù rõ ràng hay ngụ ý.</li>
   <li>Người dùng sử dụng phần mềm này một cách tự nguyện và bạn phải hiểu những rủi ro khi sử dụng phần mềm này. Chúng tôi không hứa cung cấp bất kỳ hình thức hỗ trợ kỹ thuật hoặc đảm bảo sử dụng nào cũng như không chịu bất kỳ trách nhiệm nào đối với các vấn đề phát sinh từ việc sử dụng phần mềm này.</li>
   <li>Tencent Cloud không chịu trách nhiệm về các bài viết hoặc thông tin trên các trang web hoặc diễn đàn được xây dựng bằng phần mềm này và bạn phải chịu mọi trách nhiệm.</li>
   <li>Trung tâm ứng dụng chính thức không thể giám sát đầy đủ các ứng dụng do bên thứ ba tải lên trung tâm ứng dụng và do đó không đảm bảo tính hợp pháp, an toàn, tính toàn vẹn, tính xác thực hoặc chất lượng của ứng dụng; khi bạn tải xuống ứng dụng từ trung tâm ứng dụng, bạn đồng ý thực hiện phán đoán của riêng bạn Và chịu mọi rủi ro mà không cần dựa vào Tencent Cloud và trung tâm ứng dụng chính thức. Tuy nhiên, trong mọi trường hợp, trung tâm ứng dụng chính thức có quyền dừng dịch vụ của trung tâm ứng dụng và thực hiện các hành động tương ứng theo quy định của pháp luật, bao gồm nhưng không giới hạn việc gỡ cài đặt các ứng dụng liên quan, tạm dừng tất cả hoặc một phần dịch vụ, lưu hồ sơ liên quan, và báo cáo cho cơ quan có thẩm quyền. Tencent Cloud và trung tâm ứng dụng chính thức không chịu bất kỳ trách nhiệm trực tiếp, gián tiếp hoặc chung nào đối với những tổn thất có thể gây ra cho bạn và bên thứ ba.</li>
   <li>Tencent Cloud không đảm bảo tính kịp thời, bảo mật và chính xác của phần mềm và dịch vụ do Tencent Cloud cung cấp. Việc sử dụng phần mềm và dịch vụ có thể bị ảnh hưởng bởi các trường hợp bất khả kháng, các yếu tố nằm ngoài tầm kiểm soát của Tencent Cloud (bao gồm các cuộc tấn công của hacker, mất điện, v.v.). ) Nếu việc đình chỉ hoặc chấm dứt gây tổn thất cho bạn, bạn đồng ý từ bỏ mọi quyền truy đuổi trách nhiệm pháp lý của Tencent Cloud. </li>
   <li>Tencent Cloud đặc biệt nhắc nhở bạn rằng để bảo vệ quyền tự chủ của công ty trong việc phát triển và điều chỉnh kinh doanh, Tencent Cloud có quyền sửa đổi nội dung dịch vụ, tạm dừng hoặc chấm dứt một phần hoặc toàn bộ phần mềm và dịch vụ bất kỳ lúc nào có hoặc không có thông báo trước. , các sửa đổi sẽ được công bố trên các trang có liên quan trên trang web của Tencent Cloud và sẽ được coi là thông báo sau khi được công bố. Tencent Cloud sẽ không chịu trách nhiệm với bạn hoặc bất kỳ bên thứ ba nào về những tổn thất do Tencent Cloud thực hiện quyền sửa đổi, đình chỉ hoặc chấm dứt một phần hoặc toàn bộ phần mềm và dịch vụ.</li>
</ol>

<p>Thông tin chi tiết về thỏa thuận cấp phép cho người dùng cuối sản phẩm của Tencent Cloud, cấp phép thương mại và dịch vụ kỹ thuật được cung cấp độc quyền bởi Tencent Cloud. Tencent Cloud có quyền sửa đổi thỏa thuận ủy quyền và bảng giá dịch vụ mà không cần thông báo trước. Thỏa thuận hoặc bảng giá sửa đổi sẽ có hiệu lực đối với người dùng được ủy quyền mới kể từ ngày thay đổi.</p>

<p>Sau khi bắt đầu cài đặt các sản phẩm của Tencent Cloud, bạn được coi là đã hiểu đầy đủ và chấp nhận các điều khoản của thỏa thuận này. Mặc dù bạn được hưởng các quyền theo các điều khoản trên nhưng bạn phải tuân theo các hạn chế và hạn chế có liên quan. Hành vi vượt quá phạm vi của thỏa thuận sẽ trực tiếp vi phạm thỏa thuận cấp phép này và cấu thành hành vi vi phạm. Chúng tôi có quyền chấm dứt ủy quyền bất cứ lúc nào, ra lệnh ngăn chặn thiệt hại và có quyền theo đuổi các trách nhiệm liên quan.</p>

<p>Việc giải thích, hiệu lực và giải quyết tranh chấp của các điều khoản của thỏa thuận cấp phép này sẽ được điều chỉnh bởi luật pháp của nước Cộng hòa Nhân dân Trung Hoa lục địa.</p>

<p>Nếu bất kỳ tranh chấp hoặc tranh chấp nào phát sinh giữa bạn và Tencent Cloud, trước tiên nó phải được giải quyết thông qua thương lượng thân thiện. Nếu đàm phán không thành công, bạn hoàn toàn đồng ý gửi tranh chấp hoặc tranh cãi lên cơ quan tài phán của Tòa án Nhân dân quận Haidian, Bắc Kinh, nơi Tencent Cloud được đặt. Tencent Cloud có quyền giải thích và sửa đổi các điều khoản và điều kiện trên.</p>

<p>(Cuối văn bản)</p>

<p align="right">Discuz!</p>

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