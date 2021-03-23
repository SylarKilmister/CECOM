 <?php
 
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
  
  ?>