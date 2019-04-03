#!/bin/sh

/home/latfish/moodle/moodle/Library/bin/mysql_upgrade -u root -proot --socket=/home/latfish/moodle/moodle/tmp/mysql/mysql.sock --force --verbose
