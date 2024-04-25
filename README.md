# Hướng dẫn chạy chương trình Laravel

## Yêu cầu

- PHP >= 7.3
- Composer
- MySQL hoặc một cơ sở dữ liệu khác
- Một trình duyệt web

## Cài đặt

1. **Clone Repository**: Sao chép mã nguồn từ GitHub về máy tính của bạn.

   ```bash
   git clone https://github.com/phihuy1208/g-weather-forecast.git
   ```

2. **Cài đặt Dependencies**: Di chuyển vào thư mục của dự án và cài đặt các gói cần thiết bằng Composer.

   ```bash
   cd g-weather-forecast
   composer install
   ```

3. **Tạo file .env**: Sao chép file `.env.example` và đổi tên thành `.env`. Cung cấp các thông tin cấu hình cần thiết như cơ sở dữ liệu.

   ```bash
   cp .env.example .env
   ```

4. **Generate Key**: Generate một application key mới.

   ```bash
   php artisan key:generate
   ```

5. **Chạy Migration và Seeders**: Chạy các migration để tạo bảng trong cơ sở dữ liệu và seeders để điền dữ liệu mẫu (nếu có).

   ```bash
   php artisan migrate --seed
   ```

## Chạy ứng dụng

Sau khi cài đặt và cấu hình xong, bạn có thể khởi chạy ứng dụng Laravel bằng cách chạy lệnh:

```bash
php artisan serve
```

Truy cập [http://localhost:8000](http://localhost:8000) trong trình duyệt web của bạn để xem ứng dụng.

Hoặc truy cập [Weather Dashboard](https://g-weather-forecast-dbc5855b522f.herokuapp.com) để vào ứng dụng đã được deploy của tôi.

## Thông tin thêm

Để biết thêm thông tin về cách sử dụng và tùy chỉnh ứng dụng Laravel, bạn có thể tham khảo tài liệu chính thức của Laravel tại [https://laravel.com/docs](https://laravel.com/docs).


