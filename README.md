# Cài đặt môi trường

## Cài đặt xampp và config php.ini
1. Tải xampp tại [đây](https://www.apachefriends.org/index.html).

2. Thêm 3 extension vào file **php.ini**
```
extension=php_pgsql.dll
extension=php_pdo_pgsql.dll
extension=php_pdo_sqlite.dll
```

3. Tải file php_pgsql.dll tại [đây](http://www.dlldownloader.com/php_pgsql-dll/?fbclid=IwAR2fY0K4Xb0dTllX-velUR0glBBWfKTTicmsCsVrYU0VaoiNb5HeIwsmQSg/).

4. Giải nén và lưu file php_pgsql.dll vào /xampp/php/

## Clone project
1. cd vào /xampp/htdocs/
```
git clone git@github.com:nguyenduong2612/web_banhang.git
```
hoặc dùng Github Desktop, link project tại [đây](https://github.com/nguyenduong2612/web_banhang).

## Cài đặt postgreSQL và import database
1. Tải postgreSQL (recommend 9.6 hoặc 10, pgAdmin4) tại [đây](https://www.enterprisedb.com/downloads/postgres-postgresql-downloads).
Copy file **dbexport.pgsql** vào PostgreSQL/9.6/bin/

2. cd đến PostgreSQL/9.6/bin/, chạy trên cmd
```
pg_dump -U username dbname < dbexport.pgsql
```
> Trường hợp không chạy được import, có thể import thủ công bằng cách copy file **db_banhang.sql** vào Query Tool trên pgAdmin

## Thông tin quản trị

Tài khoản/Mật khẩu quản trị: admin/admin. Link localhost/web_banhang/quan_tri
> Chú ý config lại dbname, user, password tại file **ket_noi.php** theo PostgreSQL
