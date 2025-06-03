<?php
/*
Plugin Name: Welcome Message Plugin
Description: Hiển thị lời chào ở cuối mỗi bài viết.
Version: 1.0
Author: Nguyễn Thị Thục Ngân - 2210
*/

// Hook vào nội dung bài viết
add_filter('the_content', 'ngan_add_welcome_message');

function ngan_add_welcome_message($content) {
    if (is_single()) {
        $content .= '<p style="font-style: italic; color: blue; text-align: center; margin-top: 20px;">Chào mừng bạn đến với Blog của Nguyễn Thị Thục Ngân</p>';
    }
    return $content;
}
