<?php

return [

    'company' => [
        'name' => 'Tên',
        'email' => 'Email',
        'phone' => 'Điện thoại',
        'address' => 'Địa chỉ',
        'logo' => 'Logo',
    ],
    'localisation' => [
        'tab' => 'Địa phương hóa',
        'date' => [
            'format' => 'Định dạng Ngày tháng',
            'separator' => 'Dấu cách ngày tháng',
            'dash' => 'Gạch (-)',
            'dot' => 'Chấm (.)',
            'comma' => 'Phẩy (,)',
            'slash' => 'Gạch chéo (/)',
            'space' => 'Khoảng trắng ( )',
        ],
        'timezone' => 'Múi giờ',
        'percent' => [
            'title' => 'Vị trí ký hiệu %',
            'before' => 'Trước số',
            'after' => 'Sau số',
        ],
    ],
    'invoice' => [
        'tab' => 'Hoá đơn',
        'prefix' => 'Số tiền số',
        'digit' => 'Số chữ số',
        'next' => 'Số tiếp theo',
        'logo' => 'Logo',
        'custom' => 'Custom',
        'item_name' => 'Item Name',
        'item' => 'Items',
        'product' => 'Products',
        'service' => 'Services',
        'price_name' => 'Price Name',
        'price' => 'Price',
        'rate' => 'Rate',
        'quantity_name' => 'Quantity Name',
        'quantity' => 'Quantity',
    ],
    'default' => [
        'tab' => 'Mặc định',
        'account' => 'Tài khoản mặc định',
        'currency' => 'Tiền tệ mặc định',
        'tax' => 'Thuế mặc định',
        'payment' => 'Phương thức thanh toán mặc định',
        'language' => 'Ngôn ngữ mặc định',
    ],
    'email' => [
        'protocol' => 'Giao thức',
        'php' => 'PHP Mail',
        'smtp' => [
            'name' => 'SMTP',
            'host' => 'SMTP Host',
            'port' => 'Cổng SMTP',
            'username' => 'Tài khoản SMTP',
            'password' => 'Mật khẩu SMTP',
            'encryption' => 'SMTP Security',
            'none' => 'Không có',
        ],
        'sendmail' => 'Sendmail',
        'sendmail_path' => 'Đường dẫn sendmail',
        'log' => 'Ghi nhận email',
    ],
    'scheduling' => [
        'tab' => 'Lập lịch',
        'send_invoice' => 'Gửi lời nhắc nhở hóa đơn',
        'invoice_days' => 'Gửi sau số ngày quá hạn',
        'send_bill' => 'Gửi nhắc thanh toán hoá đơn',
        'bill_days' => 'Gửi trước số ngày quá hạn',
        'cron_command' => 'Lệnh Cronjob',
        'schedule_time' => 'Giờ chạy',
        'send_item_reminder' => 'Send Item Reminder',
        'item_stocks' => 'Send When Item Stock',
    ],
    'appearance' => [
        'tab' => 'Hiển thị',
        'theme' => 'Giao diện',
        'light' => 'Sáng',
        'dark' => 'Tối',
        'list_limit' => 'Kết quả mỗi trang',
        'use_gravatar' => 'Sử dụng Gravatar',
    ],
    'system' => [
        'tab' => 'Hệ thống',
        'session' => [
            'lifetime' => 'Giới hạn phiên làm việc (phút)',
            'handler' => 'Quản lý phiên làm việc',
            'file' => 'Tập tin',
            'database' => 'Cơ sở dữ liệu',
        ],
        'file_size' => 'Kích thước tối đa tập tin (MB)',
        'file_types' => 'Loại tập tin cho phép',
    ],

];
