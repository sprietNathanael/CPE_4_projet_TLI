CREATE USER 'admin' IDENTIFIED WITH mysql_native_password BY 'admin-mysql';
GRANT ALL ON acu.* TO 'admin';
GRANT ALL ON acu.* TO 'mysql';