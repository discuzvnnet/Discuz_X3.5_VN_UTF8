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
	'moderate_member_invalidate' => 'Thư mời',
	'moderate_member_delete' => 'Xóa',
	'moderate_member_validate' => 'Chấp nhận',


	'get_passwd_subject' =>		'Quên mật khẩu',
	'get_passwd_message' =>		'
<p>{username}，
Bức thư này đã được gửi bởi {bbname}.</p>

<p>Bạn đã nhận được email này vì địa chỉ email này đã được đăng ký làm địa chỉ email người dùng tại {bbname},
Và người dùng yêu cầu sử dụng chức năng đặt lại mật khẩu Email.</p>
<p>
----------------------------------------------------------------------<br />
<strong>Quan trọng!</strong><br />
----------------------------------------------------------------------</p>

<p>Nếu bạn không gửi yêu cầu đặt lại mật khẩu hoặc không phải là người dùng đã đăng ký của {bbname vui lòng bỏ qua ngay bây giờ
Và xóa tin nhắn này. Chỉ khi bạn xác nhận rằng bạn cần đặt lại mật khẩu, bạn cần tiếp tục đọc phần sau
Nội dung.</p>
<p>
----------------------------------------------------------------------<br />
<strong>Hướng dẫn đặt lại mật khẩu</strong><br />
----------------------------------------------------------------------</p>
</p>
Bạn chỉ cần đặt lại mật khẩu trong vòng ba ngày kể từ khi gửi yêu cầu của mình bằng cách nhấp vào liên kết bên dưới:<br />

<a href="{siteurl}member.php?mod=getpasswd&amp;uid={uid}&amp;id={idstring}&amp;sign={sign}" target="_blank">{siteurl}member.php?mod=getpasswd&amp;uid={uid}&amp;id={idstring}&amp;sign={sign}</a>
<br />
(Nếu ở trên không ở dạng liên kết, vui lòng dán thủ công địa chỉ vào thanh địa chỉ trình duyệt và sau đó truy cập)</p>

<p>Nhập mật khẩu mới vào trang được mở bởi liên kết ở trên và gửi, và bạn có thể đăng nhập vào trang web bằng mật khẩu mới. Bạn có thể thay đổi mật khẩu của mình bất cứ lúc nào trong bảng điều khiển người dùng.</p>

<p>IP của người gửi là {clientip}</p>


<p>
Trân trọng!<br />
</p>
<p>Nhóm quản lý {bbname}.
{siteurl}</p>',


	'email_verify_subject' => 'Xác minh địa chỉ Email',
	'email_verify_message' => '<br />
<p>{username}，<br />
Bức thư này đã được gửi bởi {bbname}.</p>

<p>Bạn đã nhận được thông báo này vì đăng ký người dùng mới trên {bbname}hoặc người dùng đã sửa đổi email để sử dụng
Có địa chỉ email này. Nếu bạn đã truy cập {bbname} hoặc đã thực hiện những điều trên, vui lòng bỏ qua tin nhắn này.</p>
<br />
----------------------------------------------------------------------<br />
<strong>Hướng dẫn kích hoạt tài khoản</strong><br />
----------------------------------------------------------------------<br />
<br />
<p>Nếu bạn chưa quen với {bbname} hoặc đã sử dụng địa chỉ này khi sửa đổi email đăng ký của mình, chúng tôi cần
xác minh tính hợp lệ của địa chỉ của bạn để tránh spam hoặc lạm dụng.</p>

<p>Bạn chỉ cần nhấp vào liên kết dưới đây để kích hoạt tài khoản của bạn:<br />

<a href="{url}" target="_blank">{url}</a>
<br />
(Nếu ở trên không ở dạng liên kết, vui lòng dán thủ công địa chỉ vào thanh địa chỉ trình duyệt và sau đó truy cập)</p>

<p>Cảm ơn bạn đã ghé thăm và tôi chúc bạn sử dụng vui vẻ!</p>


<p>
Trân trọng!<br />

Nhóm quản lý {bbname}.<br />
{siteurl}</p>',

	'email_register_subject' => 'Đăng ký mail mới',
	'email_register_message' => '<br />
<p>Bức thư này đã được gửi bởi {bbname}.</p>

<p>Bạn đã nhận được thông báo này vì bạn đã nhận được địa chỉ đăng ký người dùng mới trên {bbname}. Nếu bạn đã truy cập {bbname}hoặc đã thực hiện những điều trên, vui lòng bỏ qua tin nhắn này.</p>
<br />
----------------------------------------------------------------------<br />
<strong>Hướng dẫn đăng ký người dùng mới</strong><br />
----------------------------------------------------------------------<br />
<br />
<p>Nếu bạn chưa quen với {bbname} hoặc đã sử dụng địa chỉ này khi sửa đổi email đăng ký của mình, chúng tôi cần
xác minh tính hợp lệ của địa chỉ của bạn để tránh spam hoặc lạm dụng.</p>

<p>Bạn chỉ cần nhấp vào liên kết dưới đây để đăng ký người dùng. Liên kết sau có hiệu lực trong 3 ngày. Sau khi hết hạn, bạn có thể gửi lại xác minh email mới:<br />

<a href="{url}" target="_blank">{url}</a>
<br />
(Nếu ở trên không ở dạng liên kết, vui lòng dán thủ công địa chỉ vào thanh địa chỉ trình duyệt và sau đó truy cập)</p>

<p>Cảm ơn bạn đã ghé thăm và tôi chúc bạn sử dụng vui vẻ!</p>


<p>
Trân trọng!<br />

Nhóm quản lý {bbname}.<br />
{siteurl}</p>',


	'add_member_subject' => 'Thêm 1 thành viên mới',
	'add_member_message' => '
{newusername} ，
Bức thư này đã được gửi bởi {bbname}.<br />
<br />
Tôi {adminusername}, một trong những người quản lý của {bbname}. Bạn nhận được email này vì bạn<br />
Vừa được thêm làm thành viên của {bbname}, Email hiện tại là địa chỉ email chúng tôi đã đăng ký cho bạn.<br />
<br />
----------------------------------------------------------------------<br />
Quan trọng!<br />
----------------------------------------------------------------------<br />
<br />
Nếu bạn không quan tâm hoặc trở thành thành viên của {bbname}, vui lòng bỏ qua thông báo này.<br />
<br />
----------------------------------------------------------------------<br />
Thông tin tài khoản<br />
----------------------------------------------------------------------<br />
<br />
Tên trang web:{bbname}<br />
Địa chỉ trang web:{siteurl}<br />
<br />
Tên đăng nhập:{newusername}<br />
Mật khẩu:{newpassword}<br />
<br />
Từ giờ bạn có thể sử dụng tài khoản của mình để đăng nhập vào {bbname} và có một khoảng thời gian tuyệt vời!<br />
<br />
<br />
<br />
Trân trọng!<br />
<br />
Nhóm quản lý {bbname}.<br />
{siteurl}',


	'birthday_subject' => 'Chúc mừng sinh nhật bạn!',
	'birthday_message' => '<br />
{username}，<br />
Bức thư này đã được gửi bởi {bbname}.<br />
<br />
Bạn đã nhận được email này vì địa chỉ email này đã được đăng ký làm địa chỉ email người dùng tại {bbname}, <br />
Và theo thông tin bạn điền vào, hôm nay là sinh nhật của bạn. Vui mừng cung cấp cho bạn một bản sao tại thời điểm này<br />
Lời chúc sinh nhật, thay mặt nhóm quản lý {bbname}, tôi chân thành chúc bạn sinh nhật vui vẻ.<br />
<br />
Nếu bạn không phải là thành viên của {bbname} hoặc hôm nay không phải là sinh nhật của bạn, ai đó có thể đã sử dụng sai thư của bạn<br />
Địa chỉ tập tin, hoặc điền sai thông tin sinh nhật. Tin nhắn này sẽ không được gửi nhiều lần. Vui lòng bỏ qua tin nhắn này.<br />
<br />
<br />
Trân trọng!<br />
<br />
Nhóm quản lý {bbname}.<br />
{siteurl}',

	'email_to_friend_subject' => '{$_G[\'member\'][\'username\']} giới thiệu cho bạn chủ đề: {$thread[\'subject\']}',
	'email_to_friend_message' => '<br />
Thư này đã được gửi bởi {$_G[\'member\'][\'username\']} của {$_G[\'setting\'][\'bbname\']}.<br />
<br />
Bạn đang nhận được thông báo này vì bạn đã giới thiệu một người bạn cho {$_G[\'member\'][\'username\']} qua {$_G[\'setting\'][\'bbname\']}<br />
Các chức năng đề nghị sau đây cho bạn. Nếu bạn không quan tâm đến điều này, xin vui lòng bỏ qua tin nhắn này.<br />
<br />
----------------------------------------------------------------------<br />
Văn bản gốc bắt đầu<br />
----------------------------------------------------------------------<br />
<br />
$message<br />
<br />
----------------------------------------------------------------------<br />
Cuối thư<br />
----------------------------------------------------------------------<br />
<br />
Xin lưu ý rằng thư này chỉ được gửi bởi người dùng bằng cách sử dụng "Đề xuất cho bạn bè", chứ không phải email trang web chính thức,<br />
Đội ngũ quản lý trang web không chịu trách nhiệm cho những tin nhắn như vậy.<br />
<br />
Chào mừng đến thăm {$_G[\'setting\'][\'bbname\']}<br />
{$_G[\'siteurl\']}',

	'email_to_invite_subject' => 'Bạn của bạn: {$_G[\'member\'][\'username\']} gửi một mã mời tham gia {$_G[\'setting\'][\'bbname\']} đến bạn',
	'email_to_invite_message' => '<br />
$sendtoname,<br />
Thư này đã được gửi bởi {$_G[\'member\'][\'username\']} của {$_G[\'setting\'][\'bbname\']}.<br />
<br />
Bạn đã nhận được thông báo này vì  {$_G[\'member\'][\'username\']} đã gửi mã thư mời cho bạn bè qua {bbname}.<br />
Các chức năng đề nghị sau đây cho bạn. Nếu bạn không quan tâm đến điều này, xin vui lòng bỏ qua tin nhắn này.<br />
Hoạt động một bước.<br />
<br />
----------------------------------------------------------------------<br />
Văn bản gốc bắt đầu<br />
----------------------------------------------------------------------<br />
<br />
$message<br />
<br />
----------------------------------------------------------------------<br />
Cuối thư<br />
----------------------------------------------------------------------<br />
<br />
Xin lưu ý rằng thư này chỉ được gửi bởi người dùng bằng cách sử dụng "Gửi mã thư mời cho bạn bè", chứ không phải email trang web chính thức,<br />
Đội ngũ quản lý trang web không chịu trách nhiệm cho những tin nhắn như vậy.<br />
<br />
Chào mừng đến thăm {$_G[\'setting\'][\'bbname\']}<br />
{$_G[\'siteurl\']}',


	'moderate_member_subject' => 'Thông báo cho người sử dụng kết quả kiểm duyệt',
	'moderate_member_message' => '<br />
<p>{username},
Bức thư này đã được gửi bởi {bbname}.</p>

<p>Bạn đã nhận được email này vì địa chỉ email này đã được sử dụng khi {bbname} được đăng ký bởi người dùng mới
Sử dụng và quản trị viên đã thiết lập đánh giá thủ công cho người dùng mới, email này sẽ thông báo cho bạn để gửi
Kết quả xét duyệt hồ sơ.</p>
<br />
----------------------------------------------------------------------<br />
<strong>Thông tin đăng ký và kết quả kiểm toán</strong><br />
----------------------------------------------------------------------<br />
<br />
Tên đăng nhập: {username}<br />
Thời gian đăng ký: {regdate}<br />
Thời gian nộp: {submitdate}<br />
Đệ trình: {submittimes}<br />
Lý do đăng ký: {message}<br />
<br />
Kết quả kiểm toán: {modresult}<br />
Xem lại thời gian: {moddate}<br />
Quản lý kiểm toán: {adminusername}<br />
Tin nhắn của quản trị viên: {remark}<br />
<br />
----------------------------------------------------------------------<br />
<strong>Giải thích kết quả kiểm toán</strong><br />
----------------------------------------------------------------------<br />

<p>Đã qua: Đăng ký của bạn đã được xem xét và bạn đã trở thành người dùng thường xuyên của {bbname}.</p>

<p>Phủ quyết: thông tin đăng ký của bạn là không đầy đủ, hoặc đáp ứng một số yêu cầu của chúng tôi cho người dùng mới, bạn có thể
Theo thông báo của quản trị viên，<a href="home.php?mod=spacecp&ac=profile" target="_blank">Hoàn tất thông tin đăng ký của bạn</a>，và gửi lại.</p>

<p>Xóa: Đăng ký của bạn bị sai lệch rất nhiều so với yêu cầu của chúng tôi hoặc số lượng đăng ký mới trên trang web này đã được
Vượt quá mong đợi, ứng dụng đã bị từ chối. Tài khoản của bạn đã bị xóa khỏi cơ sở dữ liệu và sẽ không hoạt động
Vui lòng sử dụng nó để đăng nhập hoặc gửi để xem xét lại, xin vui lòng tha thứ cho tôi.</p>

<br />
<br />
Trân trọng!<br />
<br />
Nhóm quản lý {bbname}.<br />
{siteurl}',

	'adv_expiration_subject' => 'Quảng cáo của bạn sẽ hết hạn ngày {day},vui lòng kiểm tra lại',
	'adv_expiration_message' => 'Các Quảng cáo của bạn trên trang web sẽ hết hạn ngày {day},xin vui lòng giải quyết:<br /><br />{advs}',
	'invite_payment_email_message' => '
Chào mừng bạn đến với {bbname}（{siteurl}）, đơn đặt hàng {orderid} của bạn đã được thanh toán và đơn hàng được xác nhận hợp lệ.<br />
<br />----------------------------------------------------------------------<br />
Đây là mã thư mời bạn nhận được
<br />----------------------------------------------------------------------<br />

{codetext}

<br />----------------------------------------------------------------------<br />
Trân trọng!
<br />----------------------------------------------------------------------<br />',
);

?>