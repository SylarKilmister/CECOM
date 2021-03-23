# webcecom
1. Preparar entorno de desarrollo local con LARAGON (ya vienen preinstalado las versiones de php y mysql , y se pueden cambiar)
	caracteristicas
	- php7.4 (Lo trabajaremos inicialmente con esta version)
	- maridb o mysql versiones recientes
3. Clonar proyecto en el path de laragon que por lo regular en windows
esta en C:\laragon\www

4. Crea tu rama para que trabajes en ella, la rama main no se usara para desarrollo.
5. Dentro de tu carpeta de proyecto  C:\laragon\www\repoclonado crear el archivo
config.php
y pegar contenido 
 /** main **/
  $webRoot = 'http://' . $_SERVER['HTTP_HOST'] . '';
  $docRoot = $_SERVER['DOCUMENT_ROOT'] . '';
  $sqlUser = 'root';
  $sqlPw = 'root';
  $sqlHost = 'localhost';
  $sqlDb = '';
  
  /** RUTAS GENERALES **/
  define('DOC_ROOT', $docRoot);
  define('WEB_ROOT', $webRoot);

  /** BASE DE DATOS **/
  define('SQL_HOST', $sqlHost);
  define('SQL_DATABASE', $sqlDb);
  define('SQL_USER', $sqlUser);
  define('SQL_PASSWORD', $sqlPw);
  define('USER_PAC', '');
  define('PW_PAC', '');

  /** SMTP **/
  define('SMTP_HOST', 'mail.avantika.com.mx');
  define('SMTP_PORT', 587);
  define('SMTP_USER', 'smtp@avantika.com.mx');
  define('SMTP_PASS', 'smtp1234');

  /** PAGINACION **/
  define('ITEMS_PER_PAGE', '20');

  /** NOMBRE DEL SISTEMA **/
  define('PROJECT_NAME', 'CECOM');
  define('FOOTER', 'CECOM');
  
  6. Este proyecto no usa aun un bd, si se requiere mas adelante desde el config.php se podra configurar.
  7. La estructura de proyecto esta personalizado, no es un framework.
