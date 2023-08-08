<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_portalcp.php 30107 2012-05-11 02:10:58Z svn_project_zhangjie $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array(
	'block_diy_nopreview' => '<p>Module này chứa mã js, không xem được ngay, nhấn Save và sau đó xem</p>',
	'block_diy_summary_html_tag' => 'Tùy chỉnh nội dung lỗi, HTML tags: ',
	'block_diy_summary_not_closed' => ' Không phù hợp',
	'block_all_category' => 'Tất cả hạng mục',
	'block_first_category' => 'Mục đầu',
	'block_all_forum' => 'Tất cả diễn đàn',
	'block_all_group' => 'Tất cả các nhóm',
	'block_all_type' => 'Tất cả các thể loại',
	'file_size_limit' => 'Tập tin không thể lớn hơn {size} KB, Xin vui lòng quay trở lại.',
	'set_to_conver' => 'Đặt bìa',
	'small_image' => 'Hình thu nhỏ',
	'insert_small_image' => 'Chèn ảnh nhỏ',
	'insert_large_image' => 'Chèn ảnh lớn',
	'insert_file' => 'Chèn tập tin',
	'delete' => 'Xóa',
	'upload_error' => 'Tải lên thất bại',
	'upload_remote_failed' => 'Tải lên từ xa thất bại',
	'article_noexist' => 'Điều quy định không tồn tại, kiểm tra',
	'article_noallowed' => 'Bạn không được phép hoạt động theo quy định bài viết',
	'article_publish_noallowed' => 'Bạn không có quyền để xuất bài hoạt động',
	'article_category_empty' => 'Xin lỗi chuyên mục không được trống',
	'article_edit_nopermission' => 'Xin lỗi, bạn không có quyền để thực hiện các hoạt động bài viết hiện tại',
	'article_publish' => 'Đăng bài',
	'article_manage' => 'Quản lý',
	'article_tag' => 'Tags',
	'select_category' => 'Chọn một loại',
	'blockstyle_diy' => 'Tùy chỉnh mẫu',

	'article_pushplus_info' => '<p><center><i><a href="{url}" class="xg1 xs1">Nội dung do {author} cung cấp</a></i></center></p>',

	'diytemplate_name_null' => '[Unfilled]',
	'portal_view_name' => ' Trang xem bài viết',
	'forum_viewthread_name' => ' Trang xem bài viết',
	'portal/index' => 'Trang chủ tin tức',
	'portal/list' => 'Trang danh sách bài viết (công khai)',
	'portal/view' => 'Trang xem bài viết (công khai)',
	'portal/comment' => 'Trang bình luận bài viết',
	'forum/discuz' => 'Trang chủ diễn đàn',
	'forum/viewthread' => 'Trang xem bài đăng (công khai)',
	'forum/forumdisplay' => 'Trang danh sách diễn đàn (công khai)',
	'group/index' => 'Trang chủ '.$_G['setting']['navs'][3]['navname'].'',
	'group/group_my' => 'Trang chủ '.$_G['setting']['navs'][3]['navname'].' của tôi',
	'group/group' => 'Trang nội dung '.$_G['setting']['navs'][3]['navname'].'',
	'home/space_home' => 'Không gian trang chủ',
	'home/space_trade' => 'Không gian trang sản phẩm',
	'home/space_top' => 'Không gian bảng xếp hạng',
	'home/space_thread' => 'Không gian trang đăng',
	'home/space_reward' => 'Không gian trang phần thưởng',
	'home/space_share_list' => 'Không gian trang danh sách chia sẻ',
	'home/space_share_view' => 'Không gian trang xem chia sẻ',
	'space_share_view' => 'Trang không gian xem chia sẻ',
	'home/space_poll' => 'Trang không gian bỏ phiếu',
	'home/space_pm' => 'Trang không gian tin nhắn',
	'home/space_notice' => 'Trang không gian nhắc nhở',
	'home/space_group' => 'Trang không gian '.$_G['setting']['navs'][3]['navname'].'',
	'home/space_friend' => 'Trang không gian bạn bè',
	'home/space_favorite' => 'Trang không gian yêu thích',
	'home/space_doing' => 'Trang không gian hoạt động',
	'home/space_debate' => 'Trang không gian tranh luận',
	'home/space_blog_view' => 'Trang không gian xem nhật ký',
	'home/space_blog_list' => 'Trang không gian danh sách nhật ký',
	'home/space_album_view' => 'Trang không gian xem album ',
	'home/space_album_pic' => 'Trang không gian xem hình ảnh',
	'home/space_album_list' => 'Trang không gian danh sách album',
	'home/space_activity' => 'Trang không gian sự kiện',
	'ranklist/ranklist' => 'Trang tất cả các bảng xếp hạng',
	'ranklist/blog' => 'Trang nhật ký bảng thành tích',
	'ranklist/poll' => 'Trang bảng xếp hạng biểu quyết',
	'ranklist/activity' => 'Trang xếp hạng hoạt động',
	'ranklist/forum' => 'Trang bảng xếp hạng diễn đàn',
	'ranklist/picture' => 'Trang xếp hạng hình ảnh',
	'ranklist/group' => 'Trang bảng thành tích của nhóm',
	'ranklist/thread' => 'Trang xếp hạng bài đăng',
	'ranklist/member' => 'Trang xếp hạng người dùng',
	'other_page' => 'Non-DIY module',
	'upload' => 'Tải lên',
	'remote' => 'Từ xa',
	'portal_index' => 'Trang chủ tin tức',
	'portal_topic_blue' => 'Blue themes',
	'portal_topic_green' => 'Green themes',
	'portal_topic_grey' => 'Grey themes',
	'portal_topic_red' => 'Red themes',

	'itemtypename0' => 'Automatic',
	'itemtypename1' => '<span style="color: #FF0000">Fixed</span>',
	'itemtypename2' => '<span style="color: #00BFFF">Editor</span>',
	'itemtypename3' => '<span style="color: #0000FF">Push</span>',

);
?>