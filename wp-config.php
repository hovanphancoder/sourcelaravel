<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'taomientay' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'll+}QnuQdrA.m$~8 kTuKN*n+Ng15djn1zCI_Y-[xIVYI;h(:l<WH! F_Ng|u91u' );
define( 'SECURE_AUTH_KEY',  'n=lOfZ2^;.>Wid^PG^:}flcIolL}vpY9+en,Me]Qi^l1.h tB7$^KfDU*/^?-qx:' );
define( 'LOGGED_IN_KEY',    'A<5(u[ZccQAOR-N!4;TMF.+T]x{]?i5NU3}fPJDM.c^Y;$Erm$x}F 4Jdg2Yg%~w' );
define( 'NONCE_KEY',        'b[n<ZLs{`u&(X&N~<Rb*PPvV)s!c@@X;]8$aXkw9ml`h_Ow_@)fDB 4)]7p+=6uR' );
define( 'AUTH_SALT',        'EmB`w1q$A Bt)`y7;C% vzkH%H_.ol62v0;Q{=U6Vj->[}8Q6eEmwwRHt0y;VZJU' );
define( 'SECURE_AUTH_SALT', 'K_19&g^s1D|<p@w0*/5G2Dy%9`g|49T<aJE]Cpnz;bx6eFZMr(j>1)f4s Uy:rcn' );
define( 'LOGGED_IN_SALT',   '-ty1`#&@?(L!R)H8*:qZb!A<3&7a-:P7hi+JcY:G26Qy+/ktf:^,q2HviOKmPI^T' );
define( 'NONCE_SALT',       'XWM4e3r4,s{&K`A#Yu-06yC@?@^dr>M;vgq)1Uk$!4F2aFf?1}jQ+rIslYk|32L}' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
