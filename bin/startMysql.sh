#!/bin/sh

/home/latfish/moodle/moodle/Library/bin/mysqld_safe --port=8889 --socket=/home/latfish/moodle/moodle/tmp/mysql/mysql.sock --pid-file=/home/latfish/moodle/moodle/tmp/mysql/mysql.pid --log-error=/home/latfish/moodle/moodle/logs/mysql_error_log &
