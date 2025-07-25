
# Hướng Dẫn Deploy Lên InfinityFree

## Bước 1: Chuẩn bị InfinityFree
1. Đăng ký tài khoản tại https://infinityfree.net
2. Tạo website mới
3. Lấy thông tin database từ Control Panel

## Bước 2: Cấu hình Database
1. Truy cập MySQL Databases trong Control Panel
2. Tạo database mới
3. Cập nhật file `.env` với thông tin database:
```
DB_HOST=your_mysql_host
DB_NAME=your_database_name
DB_USER=your_username
DB_PASSWORD=your_password
DB_PORT=3306
```

## Bước 3: Upload Files
1. Sử dụng File Manager hoặc FTP client
2. Upload tất cả files vào thư mục `htdocs`
3. Đảm bảo cấu trúc thư mục đúng

## Bước 4: Import Database
1. Truy cập phpMyAdmin từ Control Panel
2. Import file `database.sql`
3. Kiểm tra tất cả tables đã được tạo

## Bước 5: Cấu hình Permissions
1. Đặt quyền 755 cho thư mục `uploads/`
2. Đặt quyền 644 cho các file `.php`

## Bước 6: Test Website
1. Truy cập domain của bạn
2. Test đăng nhập admin: admin@luxury-fashion.com / admin123
3. Test các chức năng chính

## Lưu Ý Quan Trọng
- InfinityFree có giới hạn về CPU và băng thông
- Không upload file `.env` lên production, cấu hình trực tiếp
- Sử dụng HTTPS khi có thể
- Regular backup database
