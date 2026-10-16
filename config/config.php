<?php
/**
 * YINORA 全站配置
 * 数据库、站点、安全、缓存、上传、统计、邮件
 */
return [

    // ==================== 数据库 ====================
    'db' => [
        'host'    => 'localhost',
        'port'    => 3306,
        'name'    => 'yinora_db',
        'user'    => 'yinora_user',
        'pass'    => 'CHANGE_ME',
        'charset' => 'utf8mb4',
        'prefix'  => 'yn_',
    ],

    // ==================== 站点 ====================
    'site' => [
        'domain'       => 'https://www.yinorafoods.com',
        'base_path'    => '/',
        'default_lang' => 'en',
        'languages'    => ['en', 'zh-Hant', 'th', 'ms', 'id', 'vi', 'fil'],
        'timezone'     => 'Asia/Shanghai',
        'debug'        => false,
        'force_https'  => true,
    ],

    // ==================== 安全 ====================
    'security' => [
        'session_name'   => 'YINORA_SESS',
        'session_life'   => 7200,
        'csrf_key'       => 'CHANGE_ME_CSRF_SECRET',
        'cookie_visitor' => '_yvid',
        'cookie_session' => '_yvsid',
        'login_max_fail' => 5,
        'login_lock_min' => 15,
    ],

    // ==================== 缓存 ====================
    'cache' => [
        'enabled' => true,
        'dir'     => dirname(__DIR__) . '/cache',
        'ttl'     => 3600,
    ],

    // ==================== 上传 ====================
    'upload' => [
        'dir'      => dirname(__DIR__) . '/uploads',
        'url'      => '/uploads',
        'max_size' => 5 * 1024 * 1024,
        'allowed'  => ['jpg', 'jpeg', 'png', 'webp', 'gif', 'pdf'],
    ],

    // ==================== 统计 ====================
    'stats' => [
        'enabled'      => true,
        'exclude_ips'  => ['127.0.0.1'],
        'exclude_bots' => true,
        'ip_db'        => dirname(__DIR__) . '/data/QQWry.dat',
    ],

    // ==================== 邮件 ====================
    'mail' => [
        'enabled'   => true,
        'host'      => 'smtp.example.com',
        'port'      => 465,
        'secure'    => 'ssl',
        'user'      => 'sell@yinorafoods.com',
        'pass'      => 'CHANGE_ME',
        'from'      => 'sell@yinorafoods.com',
        'from_name' => 'YINORA Foods',
        'to'        => 'sell@yinorafoods.com',
    ],
];
