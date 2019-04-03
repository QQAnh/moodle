#!/bin/sh

/home/latfish/moodle/moodle/Library/bin/mysqlcheck --all-databases --check --check-upgrade -u root -proot --socket=/home/latfish/moodle/moodle/tmp/mysql/mysql.sock
