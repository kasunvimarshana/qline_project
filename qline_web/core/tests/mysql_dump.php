shell> mysqldump --databases db1 db2 db3 > dump.sql

shell> mysqldump --all-databases > dump.sql

$ mysqldump -u [uname] -p[pass] db_name > db_backup.sql

mysqldump -u [uname] -p db_name > db_backup.sql

cd c:\wamp64\bin\mysql\mysql5.7.26\bin
mysqldump -u root -p databasename > dbname_dump.sql