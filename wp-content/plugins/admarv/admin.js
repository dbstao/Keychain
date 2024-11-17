document.addEventListener("DOMContentLoaded", function () {
    // 隐藏元素们 -----------------------------------
    var wpLogo = document.getElementById('wp-admin-bar-wp-logo');
    var wpComments = document.getElementById('wp-admin-bar-comments');
    var wpContent = document.getElementById('wp-admin-bar-new-content');
    var wpMyAccount = document.querySelector('#wp-admin-bar-my-account');

    wpLogo && (wpLogo.style.display = 'none');
    wpComments && (wpComments.style.display = 'none');
    wpContent && (wpContent.style.display = 'none');
    if (wpMyAccount) {
        let abSubWrapper = wpMyAccount.querySelector('.ab-sub-wrapper');
        const firstLi = abSubWrapper.querySelector('ul li')
        const userNameLink = wpMyAccount.querySelector('a')
        var images = wpMyAccount.getElementsByTagName('img');
        if (images) {
            for (var i = images.length - 1; i >= 0; i--)images[i].parentNode.removeChild(images[i]);
        }
        // 删除第一个 li 元素
        if (firstLi) firstLi.parentNode.removeChild(firstLi);
        // 删除右上角用户名点击会跳转到个人资料页面
        if(userNameLink) userNameLink.href='#';
    }

    // 插入logo----------------------------------------
    // 检查是否存在 wp-admin-bar-site-name 元素
    var adminBarSiteName = document.querySelector('#wpadminbar #wp-admin-bar-site-name');
    if (adminBarSiteName) {
        adminBarSiteName.style.paddingTop = '10px';
        adminBarSiteName.style.paddingLeft = '10px';
        // 清空 wp-admin-bar-site-name 内的所有元素
        adminBarSiteName.innerHTML = '';
        // 创建 a 元素
        var link = document.createElement('a');
        link.href = '/'; // 设置 a 标签的 href

        // 创建 img 元素
        var img = document.createElement('img');
        // img.src = '/wp-includes/images/logo.png'; // 替换为你的图片 URL
        img.src = admarvPlugin.url+'images/admarv.png'; // 替换为你的图片 URL
        img.alt = 'Site Logo';
        img.style.height = '20px'; // 设置图片高度，可根据需要调整
        img.style.marginRight = '5px'; // 设置右边距，可根据需要调整
        // 将 img 元素插入到 a 标签内
        link.appendChild(img);
        // 将 a 标签插入到 wp-admin-bar-site-name 内
        adminBarSiteName.appendChild(link);
    }

    // jQuery(document).ready(function($) {
    //     $('td.plugin-title.column-primary strong').each(function() {
    //         if ($(this).text().toLowerCase().includes('admarv')) {
    //             $(this).closest('td').find('.row-actions.visible span.delete').remove();
    //         }
    //     });
    // });
});
