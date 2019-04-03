/*                                                                -*- C -*-
   +----------------------------------------------------------------------+
   | PHP Version 7                                                        |
   +----------------------------------------------------------------------+
   | Copyright (c) 1997-2017 The PHP Group                                |
   +----------------------------------------------------------------------+
   | This source file is subject to version 3.01 of the PHP license,      |
   | that is bundled with this package in the file LICENSE, and is        |
   | available through the world-wide-web at the following url:           |
   | http://www.php.net/license/3_01.txt                                  |
   | If you did not receive a copy of the PHP license and are unable to   |
   | obtain it through the world-wide-web, please send a note to          |
   | license@php.net so we can mail you a copy immediately.               |
   +----------------------------------------------------------------------+
   | Author: Stig S�ther Bakken <ssb@php.net>                             |
   +----------------------------------------------------------------------+
*/

/* $Id$ */

#define CONFIGURE_COMMAND " './configure'  '--with-gd' '--with-jpeg-dir=/home/latfish/moodle/moodle/Library' '--with-png-dir=/home/latfish/moodle/moodle/Library' '--with-zlib' '--with-zlib-dir=/home/latfish/moodle/moodle/Library' '--with-freetype-dir=/home/latfish/moodle/moodle/Library' '--prefix=/home/latfish/moodle/moodle/bin/php/php7.0.15' '--exec-prefix=/home/latfish/moodle/moodle/bin/php/php7.0.15' '--sysconfdir=/home/latfish/moodle/moodle/bin/php/php7.0.15/conf' '--with-config-file-path=/home/latfish/moodle/moodle/bin/php/php7.0.15/conf' '--enable-ftp' '--enable-gd-native-ttf' '--with-bz2=/home/latfish/moodle/moodle/Library' '--with-ldap' '--with-mysqli=mysqlnd' '--enable-mbstring=all' '--with-curl=/home/latfish/moodle/moodle/Library' '--enable-sockets' '--enable-bcmath' '--with-imap=shared,/home/latfish/moodle/moodle/Library/lib/imap-2007f' '--with-imap-ssl=/home/latfish/moodle/moodle/Library' '--enable-soap' '--with-kerberos' '--enable-calendar' '--with-pgsql=shared,/home/latfish/moodle/moodle/Library/pg' '--enable-exif' '--with-libxml-dir=/home/latfish/moodle/moodle/Library' '--with-gettext=shared,/home/latfish/moodle/moodle/Library' '--with-xsl=/home/latfish/moodle/moodle/Library' '--with-pdo-mysql=mysqlnd' '--with-pdo-pgsql=shared,/home/latfish/moodle/moodle/Library/pg' '--with-mcrypt=shared,/home/latfish/moodle/moodle/Library' '--with-openssl=/home/latfish/moodle/moodle/Library' '--enable-zip' '--with-iconv=/home/latfish/moodle/moodle/Library' '--enable-opcache' '--enable-cgi' '--enable-intl' '--with-tidy=shared' '--with-icu-dir=/home/latfish/moodle/moodle/Library' '--enable-wddx' '--with-libexpat-dir=/home/latfish/moodle/moodle/Library' '--with-readline' '--with-mhash' 'YACC=/home/latfish/moodle/moodle/Library/bin/bison'"
#define PHP_ADA_INCLUDE		""
#define PHP_ADA_LFLAGS		""
#define PHP_ADA_LIBS		""
#define PHP_APACHE_INCLUDE	""
#define PHP_APACHE_TARGET	""
#define PHP_FHTTPD_INCLUDE      ""
#define PHP_FHTTPD_LIB          ""
#define PHP_FHTTPD_TARGET       ""
#define PHP_CFLAGS		"$(CFLAGS_CLEAN) -prefer-non-pic -static"
#define PHP_DBASE_LIB		""
#define PHP_BUILD_DEBUG		""
#define PHP_GDBM_INCLUDE	""
#define PHP_IBASE_INCLUDE	""
#define PHP_IBASE_LFLAGS	""
#define PHP_IBASE_LIBS		""
#define PHP_IFX_INCLUDE		""
#define PHP_IFX_LFLAGS		""
#define PHP_IFX_LIBS		""
#define PHP_INSTALL_IT		""
#define PHP_IODBC_INCLUDE	""
#define PHP_IODBC_LFLAGS	""
#define PHP_IODBC_LIBS		""
#define PHP_MSQL_INCLUDE	""
#define PHP_MSQL_LFLAGS		""
#define PHP_MSQL_LIBS		""
#define PHP_MYSQL_INCLUDE	"@MYSQL_INCLUDE@"
#define PHP_MYSQL_LIBS		"@MYSQL_LIBS@"
#define PHP_MYSQL_TYPE		"@MYSQL_MODULE_TYPE@"
#define PHP_ODBC_INCLUDE	""
#define PHP_ODBC_LFLAGS		""
#define PHP_ODBC_LIBS		""
#define PHP_ODBC_TYPE		""
#define PHP_OCI8_SHARED_LIBADD 	""
#define PHP_OCI8_DIR			""
#define PHP_OCI8_ORACLE_VERSION		""
#define PHP_ORACLE_SHARED_LIBADD 	"@ORACLE_SHARED_LIBADD@"
#define PHP_ORACLE_DIR				"@ORACLE_DIR@"
#define PHP_ORACLE_VERSION			"@ORACLE_VERSION@"
#define PHP_PGSQL_INCLUDE	""
#define PHP_PGSQL_LFLAGS	""
#define PHP_PGSQL_LIBS		""
#define PHP_PROG_SENDMAIL	"/usr/sbin/sendmail"
#define PHP_SOLID_INCLUDE	""
#define PHP_SOLID_LIBS		""
#define PHP_EMPRESS_INCLUDE	""
#define PHP_EMPRESS_LIBS	""
#define PHP_SYBASE_INCLUDE	""
#define PHP_SYBASE_LFLAGS	""
#define PHP_SYBASE_LIBS		""
#define PHP_DBM_TYPE		""
#define PHP_DBM_LIB		""
#define PHP_LDAP_LFLAGS		""
#define PHP_LDAP_INCLUDE	""
#define PHP_LDAP_LIBS		""
#define PHP_BIRDSTEP_INCLUDE     ""
#define PHP_BIRDSTEP_LIBS        ""
#define PEAR_INSTALLDIR         "/home/latfish/moodle/moodle/bin/php/php7.0.15/lib/php"
#define PHP_INCLUDE_PATH	".:/home/latfish/moodle/moodle/bin/php/php7.0.15/lib/php"
#define PHP_EXTENSION_DIR       "/home/latfish/moodle/moodle/bin/php/php7.0.15/lib/php/extensions/no-debug-non-zts-20151012"
#define PHP_PREFIX              "/home/latfish/moodle/moodle/bin/php/php7.0.15"
#define PHP_BINDIR              "/home/latfish/moodle/moodle/bin/php/php7.0.15/bin"
#define PHP_SBINDIR             "/home/latfish/moodle/moodle/bin/php/php7.0.15/sbin"
#define PHP_MANDIR              "/home/latfish/moodle/moodle/bin/php/php7.0.15/php/man"
#define PHP_LIBDIR              "/home/latfish/moodle/moodle/bin/php/php7.0.15/lib/php"
#define PHP_DATADIR             "/home/latfish/moodle/moodle/bin/php/php7.0.15/share/php"
#define PHP_SYSCONFDIR          "/home/latfish/moodle/moodle/bin/php/php7.0.15/conf"
#define PHP_LOCALSTATEDIR       "/home/latfish/moodle/moodle/bin/php/php7.0.15/var"
#define PHP_CONFIG_FILE_PATH    "/home/latfish/moodle/moodle/bin/php/php7.0.15/conf"
#define PHP_CONFIG_FILE_SCAN_DIR    ""
#define PHP_SHLIB_SUFFIX        "so"
