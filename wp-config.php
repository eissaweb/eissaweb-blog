<?php
/**
 * إعدادات الووردبريس الأساسية
 *
 * عملية إنشاء الملف wp-config.php تستخدم هذا الملف أثناء التنصيب. لا يجب عليك
 * استخدام الموقع، يمكنك نسخ هذا الملف إلى "wp-config.php" وبعدها ملئ القيم المطلوبة.
 *
 * هذا الملف يحتوي على هذه الإعدادات:
 *
 * * إعدادات قاعدة البيانات
 * * مفاتيح الأمان
 * * بادئة جداول قاعدة البيانات
 * * المسار المطلق لمجلد الووردبريس
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** إعدادات قاعدة البيانات - يمكنك الحصول على هذه المعلومات من مستضيفك ** //

/** اسم قاعدة البيانات لووردبريس */
define('DB_NAME', 'eissaweb-blog');

/** اسم مستخدم قاعدة البيانات */
define('DB_USER', 'root');

/** كلمة مرور قاعدة البيانات */
define('DB_PASSWORD', '');

/** عنوان خادم قاعدة البيانات */
define('DB_HOST', 'localhost');

/** ترميز قاعدة البيانات */
define('DB_CHARSET', 'utf8mb4');

/** نوع تجميع قاعدة البيانات. لا تغير هذا إن كنت غير متأكد */
define('DB_COLLATE', '');

/**#@+
 * مفاتيح الأمان.
 *
 * استخدم الرابط التالي لتوليد المفاتيح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'nbA:c/cY-lRi~tO9QkeQb#Rn6TLPCTwuG@p}ErQTjk-#C[!wzCl;m<n~%h5,0ic)');
define('SECURE_AUTH_KEY',  ':xEk1a]1<{k4< u)atBcbWbGpYKb/Bta@e8jotmh^F~yK ^TZn/4f];9+BY Z*9m');
define('LOGGED_IN_KEY',    '*xLb!eD1In1.uSFqvM,Z<D|v0VzsTm>rNNi2=e q_MII$*;wqbM#c3/WFiI[J&WI');
define('NONCE_KEY',        '*a]g$:B>{1] Y5}6UXGWjk3%0@On1KZ(?Zu,?IHsF5/+5P,zSq9`M)Nc0(nPdfp]');
define('AUTH_SALT',        's=^wK)4U5b9=@qx=jpYKcZZ/A>A#^wm 9@)|zB(f8U%g7o2|OnI+ *axa@MX[uM*');
define('SECURE_AUTH_SALT', '&;l$|)R4YYm~z?bA,u|_@HN9GNWQt01uPDa>XIvRYDvth[(:1U|$]]3{T=;H)w%:');
define('LOGGED_IN_SALT',   'B@;6mnGX81R0+G &{1NNCvE>?bO@O2$1a*_V)_fC?|@. Y?^Z&53d9v= 2,vsZLQ');
define('NONCE_SALT',       '3*yxBys _5jVNYj^Za$c18:B4+,EGjj?%p>iAxO3OSP,ATjMEddN9Ky)pmSiS~o[');

/**#@-*/

/**
 * بادئة الجداول في قاعدة البيانات.
 *
 * تستطيع تركيب أكثر من موقع على نفس قاعدة البيانات إذا أعطيت لكل موقع بادئة جداول مختلفة
 * يرجى استخدام حروف، أرقام وخطوط سفلية فقط!
 */
$table_prefix  = 'wp_';

/**
 * للمطورين: نظام تشخيص الأخطاء
 *
 * قم بتغييرالقيمة، إن أردت تمكين عرض الملاحظات والأخطاء أثناء التطوير.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* هذا هو المطلوب، توقف عن التعديل! نتمنى لك التوفيق. */

/** المسار المطلق لمجلد ووردبريس. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** إعداد متغيرات الووردبريس وتضمين الملفات. */
require_once(ABSPATH . 'wp-settings.php');