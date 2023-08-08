[<img src="https://raw.githubusercontent.com/discuzvnnet/Discuz_X3.5_VN_UTF8/v3.5/upload/static/image/common/logo.svg" width="250"/>](logo.svg)

# Discuz! VN - Diễn Đàn Tiếng Việt để tạo một trang web chuyên nghiệp

[![GitHub version](https://img.shields.io/github/v/release/jaideejung007/discuzth.svg)](https://github.com/discuzvnnet/Discuz_X3.5_VN_UTF8)
[![download latest release](https://img.shields.io/badge/Discuz!%20X3.5-Download-success.svg)](https://github.com/jaideejung007/discuzth/releases/latest)
![GitHub all releases](https://img.shields.io/github/downloads/discuzvnnet/Discuz_X3.5_VN_UTF8/total?label=Total%20Downloads)

# Khuyến nghị #
Discuz! Nó là một nền tảng xây dựng trang web tập trung vào việc xây dựng cộng đồng trực tuyến.

# Điểm nổi bật quan trọng X3.5 #
* Hỗ trợ PHP8
* Hỗ trợ MYSQL8
* Hỗ trợ IPV6, hỗ trợ nhiều thư viện IP, hỗ trợ truy cập IP ở nhiều chế độ CDN khác nhau và hỗ trợ chế độ truy cập dữ liệu nâng cao từ chế độ thông thường
* Hỗ trợ UTF8MB4 (Sử dụng biểu tượng cảm xúc kịp thời. và hỗ trợ nhiều bộ ký tự hơn)
* Hỗ trợ InnoDB (cơ sở dữ liệu đám mây được khuyến nghị rộng rãi)
* Hỗ trợ chuyển đổi chức năng mô-đun đầy đủ (Bao gồm các diễn đàn kể từ bây giờ Discuz! X sẽ không chỉ là diễn đàn. nhưng một hệ thống xây dựng trang web đầy đủ)
* Hỗ trợ HTTPS để có hiệu suất tốt hơn
* Thêm một hệ thống thanh toán mới (Chỉ dùng được ở Trung Quốc) Tích hợp thanh toán bằng WeChat, Alipay và QQ Wallet, hỗ trợ kết nối các nền tảng thanh toán khác.
* Cải thiện hệ thống bảo vệ cơ bản tích hợp Và hỗ trợ kết nối SMS của bên thứ ba thông qua giao diện.
*Cải thiện chế độ phiên bản di động mới, ngầu hơn trước.
* Cải thiện giao diện mới của hệ thống back-end (AdminCP)
* Nhiều cải tiến UX/UI trên web để phù hợp với tất cả các môi trường Tiếng Việt
* Ngừng sử dụng Flash vĩnh viễn và chào mừng HTML5 đầy đủ

## การติดตั้งใหม่
* ดาวน์โหลดไฟล์ล่าสุดที่นี่: https://github.com/jaideejung007/discuzth/releases/latest
* อัปโหลดไฟล์และโฟลเดอร์ทั้งหมดใน upload ไปยังเซิร์ฟเวอร์ของคุณ โดยใช้โปรแกรม FTP ตามสะดวกของคุณ เช่น โปรแกรม FileZilla เป็นต้น (ไม่จำเป็นต้องอัปโหลดโฟลเดอร์ readme และไฟล์ utility.html)
* เปิดเบราว์เซอร์เพื่อทำการติดตั้ง Discuz! X3.5 โดยไปที่ yourdomain.com/install เพื่อเริ่มต้นขั้นตอนการติดตั้ง แล้วทำตามหน้าจอที่ปรากฏ

## การอัปเกรดจาก X3.4
* ตรวจสอบการเชื่อมต่อ UCenter กับ Discuz! ของคุณว่าอยู่ในสถานะ “เชื่อมต่อได้” หรือไม่ โดยตรวจสอบที่เว็บ yourdomain.com/uc_server แล้วเข้าสู่ระบบให้เรียบร้อย ไปที่เมนู “การเชื่อมต่อ” --> แล้วดูหัวข้อ “การเชื่อมต่อ” ถ้าขึ้นสถานะสีเขียวว่า “เชื่อมต่อได้” ไม่ต้องทำอะไร ดำเนินการอัปเกรดข้อต่อไปได้เลย แต่ถ้าขึ้นสถานะสีแดงว่า “เชื่อมต่อไม่ได้” ให้คลิก “แก้ไข” แล้วตั้งค่าดังนี้ 1) “URL ของโปรแกรม:” ให้เป็น URLเว็บบอร์ด ของคุณ เช่น https://yourdomain.com โดยไม่ต้องมี / ปิดท้าย, 2) “คีย์สำหรับเชื่อมต่อ:” ค่าดังกล่าวจะต้องตรงกับตัวแปร “UC_KEY” ในไฟล์ “โฟลเดอร์รากเว็บบอร์ด/config/config_ucenter.php”
* ดาวน์โหลดไฟล์อัปเกรดได้ที่: https://discuzthai.com/thread-41059-1-1.html หรือที่โฟลเดอร์ [utility](https://github.com/jaideejung007/discuzth/tree/v3.5/utility) ของ GitHub Discuz! Thai
* สำรองฐานข้อมูลและไฟล์โปรแกรม Discuz! และ UCenter เก่าของคุณ รวมไปถึงไฟล์ที่เกี่ยวข้องทั้งหมดในเซิร์ฟเวอร์ให้เรียบร้อยก่อนดำเนินการ
* ไปที่ “โฟลเดอร์รากเว็บบอร์ด/uc_server” แล้วสร้างโฟลเดอร์ “old” ขึ้นมาใหม่ (ตัวอย่างเส้นทางโฟลเดอร์: “โฟลเดอร์รากเว็บบอร์ด/uc_server/old”) แล้วทำการย้ายโฟลเดอร์ทั้งหมดที่อยู่ใน “โฟลเดอร์รากเว็บบอร์ด/uc_server/*.*” (ยกเว้นโฟลเดอร์ต่อไปนี้ห้ามย้าย: “data”) ไปที่ “โฟลเดอร์รากเว็บบอร์ด/uc_server/old” (หากมีไฟล์การกำหนดค่าเว็บไซต์ต่าง ๆ นอกเหนือจากไฟล์ของ UCenter รวมไปถึงไฟล์ .htaccess หรือ .user.ini ไม่ต้องย้ายไฟล์ดังกล่าว)
* อัปโหลดโปรแกรม UCenter 1.7.0 (อยู่ในไฟล์ ZIP ของ Discuz! X3.5 ตำแหน่งโฟลเดอร์ คือ upload/uc_server หากคุณใช้โปรแกรม FTP ในการอัปโหลด ใช้โหมดการอัปโหลดเป็นไบนารี) ไปที่ “โฟลเดอร์รากเว็บบอร์ด/uc_server” หากคุณได้รับแจ้งให้เขียนทับโฟลเดอร์ขณะอัปโหลด กรุณาเลือก "ใช่"
* อัปโหลดไฟล์ update_ucenter_adult.php ไปที่ “โฟลเดอร์รากเว็บบอร์ด/uc_server/install” และลบไฟล์ “โฟลเดอร์รากเว็บบอร์ด/uc_server/data/upgrade.lock” ออก
* เปิดเบราว์เซอร์ แล้วไปลิงก์นี้: “URLเว็บบอร์ด/uc_server/install/update_ucenter_adult.php” และปฏิบัติตามคำแนะนำตามหน้าจอที่ปรากฎเพื่อดำเนินการอัปเกรด เวลาในการอัปเกรดจะแตกต่างกันไปตามขนาดของข้อมูลและประสิทธิภาพของเซิร์ฟเวอร์
* กลับมาที่ โฟลเดอร์รากเว็บบอร์ด ของคุณ จากนั้น ให้สร้างโฟลเดอร์ old ขึ้นมาใหม่ (ตัวอย่างเส้นทางโฟลเดอร์: “โฟลเดอร์รากเว็บบอร์ด/old”) แล้วทำการย้ายโฟลเดอร์ทั้งหมด (ยกเว้นโฟลเดอร์ดังต่อไปนี้ห้ามย้าย: config, data และ uc_server) ไปที่ “โฟลเดอร์รากเว็บบอร์ด/old” หากมีไฟล์การกำหนดค่าเว็บไซต์ต่าง ๆ รวมถึงไฟล์ .htaccess หรือ .user.ini ไม่ต้องย้ายไฟล์ดังกล่าว
* อัปโหลดโปรแกรม Discuz! X3.5 (ไฟล์โปรแกรมทั้งหมดจะอยู่ในโฟลเดอร์ upload ของไฟล์ ZIP Discuz! X3.5 กรุณาใช้โหมดไบนารีหากคุณใช้โปรแกรม FTP ในการอัปโหลด) ไปที่ “โฟลเดอร์รากเว็บบอร์ด” บนเซิร์ฟเวอร์ของคุณ (ยกเว้นโฟลเดอร์ดังต่อไปนี้ห้ามอัปโหลด: uc_server) และโปรแกรม FTP จะแจ้งให้เขียนทับโฟลเดอร์ กรุณาเลือก "ใช่"
* ย้ายโฟลเดอร์ปลั๊กอินทั้งหมดที่อยู่ใน “โฟลเดอร์รากเว็บบอร์ด/old/source/plugin/*.*” (ยกเว้นโฟลเดอร์ต่อไปนี้ห้ามย้าย: cloudcaptcha, cloudsearch, cloudstat, cloudunion, manyou, mobile, mobileoem, myapp, myrepeats, pcmgr_url_safeguard, qqconnect, qqgroup, security, soso_smilies, wechat, xf_storage) กลับไปที่ “โฟลเดอร์รากเว็บบอร์ด/source/plugin” และย้ายโฟลเดอร์เทมเพลททั้งหมดที่อยู่ใน “โฟลเดอร์รากเว็บบอร์ด/old/template/*.*” (ยกเว้นโฟลเดอร์ต่อไปนี้ห้ามย้าย: “default”) กลับไปที่ “โฟลเดอร์รากเว็บบอร์ด/template”
* อัปโหลดไฟล์ update_adult.php ไปที่ “โฟลเดอร์รากเว็บบอร์ด/install” และลบไฟล์ “โฟลเดอร์รากเว็บบอร์ด/data/update.lock” ออก
* เปิดเบราว์เซอร์ แล้วไปลิงก์นี้: “URLเว็บบอร์ด/install/update_adult.php” และปฏิบัติตามคำแนะนำตามหน้าจอที่ปรากฎเพื่อดำเนินการอัปเกรด เวลาในการอัปเกรดจะแตกต่างกันไปตามขนาดของข้อมูลและประสิทธิภาพของเซิร์ฟเวอร์
> หากต้องการอัปเกรดจากเวอร์ชันอื่น กรุณาอัปเกรดเป็น X3.4 ก่อน: https://discuzthai.com/thread-40670-1-1.html

## การอัปเกรดจาก X3.4 (วิดีโอช่วยสอน)
* https://www.youtube.com/watch?v=QmIj_Ot3f_k

## ทีมพัฒนา (ต้นฉบับภาษาจีน) 
* forked from [Discuz](https://gitee.com/Discuz) / [DiscuzX](https://gitee.com/Discuz/DiscuzX) 

## ทีมพัฒนา (ภาษาไทย) 
* [jaideejung007](https://github.com/jaideejung007/)

## เว็บไซต์ที่เกี่ยวข้อง 
* เว็บไซต์ดิสคัส! ภาษาไทยอย่างเป็นทางการ: https://discuzthai.com
* เว็บไซต์ดิสคัส! ภาษาไทยสำหรับทดสอบ: https://beta.discuzthai.com
* เว็บไซต์ดิสคัส! ภาษาจีน : https://www.discuz.vip/
* เว็บไซต์ดิสคัส! ภาษาจีน (2): https://www.dismall.com/
