<?php
// imgToWebp.php
function convert_image_to_webp($upload) {
    // 获取上传文件的路径和类型
    $file_path = $upload['file'];
    $file_type = wp_check_filetype($file_path);

    // 支持的图片格式
    $supported_types = array('image/jpeg', 'image/png', 'image/gif');

    // 检查文件类型是否支持
    if (in_array($file_type['type'], $supported_types)) {
        // 加载图片并转换为 WebP 格式
        $image = false;
        switch ($file_type['type']) {
            case 'image/jpeg':
                $image = imagecreatefromjpeg($file_path);
                break;
            case 'image/png':
                $image = imagecreatefrompng($file_path);
                break;
            case 'image/gif':
                $image = imagecreatefromgif($file_path);
                break;
        }

        if ($image !== false) {
            // 生成 WebP 文件路径并确保文件名唯一
            $webp_file_path = preg_replace('/\.(jpg|jpeg|png|gif)$/i', '.webp', $file_path);
            $webp_file_path = generate_unique_filename($webp_file_path);
            
            // 转换并保存为 WebP 格式
            if (imagewebp($image, $webp_file_path)) {
                // 删除原始文件
                unlink($file_path);

                // 更新上传信息
                $upload['file'] = $webp_file_path;
                $upload['url'] = str_replace(wp_basename($file_path), wp_basename($webp_file_path), $upload['url']);
                $upload['type'] = 'image/webp';

                // 打印转换后的文件路径
                error_log('Converted to WebP: ' . $webp_file_path);
            }

            // 释放内存
            imagedestroy($image);
        }
    } else {
        error_log('Unsupported file type: ' . $file_type['type']);
    }

    return $upload;
}

function generate_unique_filename($file_path) {
    $file_dir = dirname($file_path);
    $file_name = basename($file_path, '.webp');
    $extension = '.webp';

    $unique_file_path = $file_path;
    $i = 1;

    while (file_exists($unique_file_path)) {
        $unique_file_path = $file_dir . '/' . $file_name . '-' . $i . $extension;
        $i++;
    }

    return $unique_file_path;
}

// Hook into WordPress upload process
add_filter('wp_handle_upload', 'convert_image_to_webp');
?>
