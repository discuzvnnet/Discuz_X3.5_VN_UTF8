<?php

define('UC_VERNAME', 'Tiếng Việt');

$lang = array(

	'SC_UTF8' => 'Tiếng Việt UTF8',
	'TC_UTF8' => '繁体中文 UTF8 版',

	'title_install' => 'Cài đặt '.SOFT_NAME,
	'agreement_yes' => 'Đồng ý',
	'agreement_no' => 'Hủy bỏ',
	'notset' => 'Không giới hạn',

	'message_title' => 'Thông báo',
	'error_message' => 'Có lỗi',
	'message_return' => 'Quay lại',
	'return' => 'Quay lại',
	'install_wizard' => 'Cài đặt Discuz X3.5',
	'config_nonexistence' => 'Tập tin cấu hình không tồn tại',
	'nodir' => 'Thư mục không tồn tại',
	'short_open_tag_invalid' => 'Vui lòng đặt short_open_tag trong php.ini thành On',
	'redirect' => 'Trình duyệt sẽ tự động chuyển sang trang mới.<br>Nếu không hỗ trợ hãy bấm vào đây',

	'database_errno_2003' => 'Không thể kết nối với cơ sở dữ liệu. Vui lòng kiểm tra cơ sở dữ liệu được kết nối với máy chủ cơ sở dữ liệu chính xác hay không',
	'database_errno_1044' => 'Không thể tạo cơ sở dữ liệu mới, vui lòng kiểm tra tên chính xác của cơ sở dữ liệu',
	'database_errno_1045' => 'Không thể kết nối với cơ sở dữ liệu, vui lòng xác minh tên người dùng và mật khẩu cơ sở dữ liệu là chính xác',
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
	'tips_admininfo_comment' => 'Hãy nhớ mật khẩu của người sáng lập UCenter và sử dụng mật khẩu này để đăng nhập vào UCenter.',
	'step_ext_info_title' => 'Cài đặt thành công',
	'step_ext_info_desc' => 'Nhấn vào để đăng nhập',

	'ext_info_succ' => 'Cài đặt thành công',
	'install_locked' => 'Cài đặt bị tạm dừng, nếu bạn muốn cài đặt lại, hãy vào máy chủ và xóa<br /> '.str_replace(ROOT_PATH, '', $lockfile),
	'error_quit_msg' => 'Bạn phải khắc phục sự cố trên, nếu không quá trình cài đặt sẽ không được tiến hành.',

	'step_app_reg_title' => 'Thiết lập môi trường',
	'step_app_reg_desc' => 'Kiểm tra máy chủ và Ucenter',
	'tips_ucenter' => 'Điền thông tin Ucenter',
	'tips_ucenter_comment' => 'Nếu bạn đã cài đặt Ucenter thì hãy điền vào các thông tin dưới đây, nếu chưa cài đặt bạn có thể tải Ucenter tại <a href="http://www.discuz.com/" target="blank">Comsenz</a>',

	'advice_mysqli_connect' => 'Vui lòng kiểm tra xem mô-đun mysqli đã được tải đúng chưa',
	'advice_xml_parser_create' => 'Chức năng này yêu cầu có hỗ trợ XML trong PHP',
	'advice_json_encode' => 'Hàm này yêu cầu PHP hỗ trợ JSON. Vui lòng liên hệ với nhà cung cấp dịch vụ để đảm bảo rằng tính năng này đã được bật.',
	'advice_fsockopen' => 'Sửa trong php.ini hàm allow_url_fopen sang On để có thể cài đặt',
	'advice_pfsockopen' => 'Cần bật hàm allow_url_fopen',
	'advice_stream_socket_client' => 'Cần bật hàm stream_socket_client',
	'advice_curl_init' => 'Cần bật hàm curl_init',

	'undefine_func' => 'Chức năng không tồn tại',
	'mysqli_unsupport' => 'Vui lòng kiểm tra xem mô-đun mysqli đã được tải đúng chưa',

	'ucurl' => 'URL UCenter',
	'ucpw' => 'Mật khẩu',

	'tips_siteinfo' => 'Xin vui lòng điền vào các thông tin trang web',
	'sitename' => 'Tên trang web',
	'siteurl' => 'URL trang web',

	'forceinstall' => 'Bắt buộc cài đặt',
	'dbinfo_forceinstall_invalid' => 'CSDL này đã chứa dữ liệu, để cài đặt bạn có thể sửa các bảng tiền tố hoặc cài đè nên dữ liệu cũ.',

	'click_to_back' => 'Quay lại',
	'adminemail' => 'Admin Email',
	'adminemail_comment' => 'Dùng để báo lỗi chương trình',
	'dbhost_comment' => 'Thường là localhost',
	'tablepre_comment' => 'Điền vào nếu mún phân biệt bảng khi cài nhiều diễn đàn',
	'forceinstall_check_label' => 'Tôi sẽ cài đè dữ liệu cũ',

	'uc_url_empty' => 'Bạn chưa điền URL Ucenter.',
	'uc_url_invalid' => 'URL không hợp lệ',
	'uc_url_unreachable' => 'Sai URL Ucenter, vui lòng kiểm tra',
	'uc_ip_invalid' => 'Không thể dùng tên miền, vui lòng điền IP',
	'uc_admin_invalid' => 'Sai mật khẩu Ucenter',
	'uc_data_invalid' => 'Sai thông tin, vui lòng kiểm tra URL Ucenter ',
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
	'admininfo_ucfounderpw_invalid' => 'Mật khẩu quản trị viên trống, vui lòng điền vào',
	'admininfo_ucfounderpw2_invalid' => 'Hai mật khẩu không nhất quán, vui lòng kiểm tra',

	'username' => 'Tài khoản',
	'email' => 'Email',
	'password' => 'Mật khẩu',
	'password_comment' => 'Điền vào mật khẩu',
	'password2' => 'Nhập lại',

	'admininfo_invalid' => 'Sai thông tin, vui lòng kiểm tra lại',
	'dbname_invalid' => 'Tên CSDL trống, vui lòng điền lại',
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
	'copyright' => '&copy; 2001-'.date('Y').' <a href="https://code.dismall.com/" target="_blank">Discuz! Team</a>.',
	'license' => '

<p>版权所有 (c) 2001-'.date('Y').'，腾讯云计算（北京）有限责任公司(原北京康盛新创科技有限责任公司)保留所有权利。</p>

<p>感谢您选择 UCenter 产品。希望我们的努力能为您提供一个高效快速和强大的站点解决方案。</p>

<p>北京康盛新创科技有限责任公司为 UCenter 产品的开发商，依法独立拥有 UCenter 产品著作权。UCenter 官方网站网址为 https://www.discuz.vip。</p>

<p>UCenter 著作权已在中华人民共和国国家版权局注册，著作权受到法律和国际公约保护。使用者：无论个人或组织、盈利与否、用途如何（包括以学习和研究为目的），均需仔细阅读本协议，在理解、同意、并遵守本协议的全部条款后，方可开始使用 UCenter 软件。</p>

<p>本授权协议适用且仅适用于 UCenter 1.x 版本，北京康盛新创科技有限责任公司拥有对本授权协议的最终解释权。</p>

<h3>I. 协议许可的权利</h3>
<ol>
<li>您可以在完全遵守本最终用户授权协议的基础上，将本软件应用于非商业用途或商业用途使用（局限于本协议所适配许可的情况下），而不必支付软件版权授权费用。</li>
<li>您可以在协议规定的约束和限制范围内修改 UCenter 源代码(如果被提供的话)或界面风格以适应您的网站要求。</li>
<li>您拥有使用本软件构建的网站中全部会员资料、文章及相关信息的所有权，并独立承担与文章内容的相关法律义务。</li>
<li>将本软件应用于商业用途，必须遵守中国人民共和国相关法律。若需提供技术支持方式或技术支持内容，请向官方（https://www.discuz.vip/）获取技术支持服务。</li>
</ol>

<h3>II. 协议规定的约束和限制</h3>
<ol>
<li>不得对本软件或与之关联的商业授权进行出租、出售、抵押或发放子许可证。</li>
<li>无论如何，即无论用途如何、是否经过修改或美化、修改程度如何，只要使用 UCenter 的整体或任何部分，未经书面许可，页面页脚处的 UCenter 名称和下属网站（https://www.discuz.vip） 的链接都必须保留，而不能清除或修改。</li>
<li>禁止在 UCenter 的整体或任何部分基础上以发展任何派生版本、修改版本或第三方版本用于重新分发。</li>
<li>如果您未能遵守本协议的条款，您的授权将被终止，所被许可的权利将被收回，并承担相应法律责任。</li>
</ol>

<h3>III. 有限担保和免责声明</h3>
<ol>
<li>本软件及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的。</li>
<li>用户出于自愿而使用本软件，您必须了解使用本软件的风险，我们不承诺提供任何形式的技术支持、使用担保，也不承担任何因使用本软件而产生问题的相关责任。</li>
<li>北京康盛新创科技有限责任公司不对使用本软件构建的网站中的文章或信息承担责任。</li>
</ol>

<p>有关 UCenter 最终用户授权协议、商业授权与技术服务的详细内容，均由 UCenter 官方网站独家提供。北京康盛新创科技有限责任公司拥有在不事先通知的情况下，修改授权协议和服务价目表的权力，修改后的协议或价目表对自改变之日起的新授权用户生效。</p>

<p>电子文本形式的授权协议如同双方书面签署的协议一样，具有完全的和等同的法律效力。您一旦开始安装 UCenter，即被视为完全理解并接受本协议的各项条款，在享有上述条款授予的权力的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。</p></div>',

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
	'priv_check' => 'Thư mục, tập tin',
	'func_depend' => 'Kiểm tra',
	'func_name' => 'Tên',
	'check_result' => 'Kết quả',
	'suggestion' => 'Khuyến nghị',
	'advice_mysqli' => 'Vui lòng kiểm tra xem mô-đun mysqli đã được tải đúng chưa',
	'advice_fopen' => 'Chức năng này yêu cầu bật tùy chọn allow_url_fopen trong php.ini.',
	'advice_file_get_contents' => 'Chức năng này yêu cầu bật tùy chọn allow_url_fopen trong php.ini.',
	'advice_xml' => 'Chức năng này yêu cầu có hỗ trợ XML trong PHP',
	'none' => 'Không',

	'dbhost' => 'Máy chủ CSDL',
	'dbuser' => 'Tài khoản CSDL',
	'dbpw' => 'Mật khẩu CSDL',
	'dbname' => 'Tên CSDL',
	'tablepre' => 'Tiền tố',

	'ucfounderpw' => 'Mật khẩu',
	'ucfounderpw2' => 'Nhập lại',

	'create_table' => 'Tạo bảng',
	'succeed' => 'Thành công ',
);