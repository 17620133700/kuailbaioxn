<?php

if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form)
{
    $hk_name_zbt = new \Typecho\Widget\Helper\Form\Element\Text(
        'hk_name_zbt',
        null,
        'kuailbaioxn',
        _t('站点名称'),
        _t('在这里填入站点名称, 会改变首页的站点名称标题')
    );
    $form->addInput($hk_name_zbt);

    $hk_imggifpng_index = new \Typecho\Widget\Helper\Form\Element\Text(
        'hk_imggifpng_index',
        null,
        '/usr/themes/klbbx/characteristic/imp/1145145.gif',
        _t('首页封面图片'),
        _t('在这里填入首页封面图片, 会改变首页的封面图片')
    );
    $form->addInput($hk_imggifpng_index);
}

function getPostImg($archive)
{
    $img = array();
    //  匹配 img 的 src 的正则表达式
    preg_match_all("/<img.*?src=\"(.*?)\".*?\/?>/i", $archive->content, $img);
    //  判断是否匹配到图片
    if (count($img) > 0 && count($img[0]) > 0) {
        //  返回图片
        return $img[1][0];
    } else {
        //  如果没有匹配到就返回 none
        return 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFUAAABSCAIAAACqkg+1AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAXMSURBVHhe7Vq9buQ2EN4quC4pU6a8KsgbJOU9wpUpU6S4N7gyj5Ayj5AyvX8LxwYM2IZhGGvYMGxXhpM93+7G8DEjDTWihhQ5HP34kt0PHxbSaCjyI4dDUvbk+zd/rjLX+j3TSnGt3zOtFNf6PdNKca3fM60U1/o900pxrd8zrRTX+j3TSnGt3zOtFEfSb57+MB++MX9Pit9/fmNPX5B6/SDDfPyh+AVt5QVzIBYOs1eFeJfQEctfmef4VOo3i/eVki/M7Mvy4hXzIZrZ1+avSnaco0eHRr8jHlgPLHMjkoNZ/FJfyzlkp2Trh6CtW/bxTX29+Il5Esmntpi5mf9IdgFbg6sj8/QXs332lW0TiAcZVROZp0uJDzAeHcyZsUgxj9+ax9e5kZKhvxn2k0I8oLplzi4lPkEWiUPy/iK/VqOSGSnSNnHxZbS7c8F1ZpT4+DSfbqlgbHK5IVmSOcSZ9q6XbmQZ9vYRjc/8Lfn7pLLMHqdZvLMFH79jj5C8YRWZW5wJ72ZoNcQXT8nuGqFIcztAbmSRsO7cp9/ZI6Q7O1wytzhT+lvqELCeh2Qki4SRUnzk52/N4md73RIsbUzpd5b3XDov4RYJ20rxCV9OvWSwtDGlX7JjmXkWYJWxhDmSsa0UT8Mw8uXUI4vrLGF2AaKwy2u3aI5kDJYKrkH2UWUki5Ad9MuqJDc3Rybpl2rsO4UUbJzH08/sEborf2388JqMOUxsh5T6g00MUujmMrjyQ7TTqzLYvnFCavWnNidEagqzR6hI5opakFr94iYqWjZOEaRWv6w+xeInn1kuFUWQGv1yVYrFTz6zXNoiI+kXq6JmyRc/xeQHUkXMnqRKf1VZUhV5MnuEmiKqLSYyu0Bx9hBXJvdE6pQoZhkxXz9VlmqiJvmplFAtWVtMZL5+qiy1tVCIqV+u2iwzu4QK/fZEzOw+qVkZya8qwuxx6koh8/XjiTg1+MDcZmVlFpe6UkhNGSHdZvEvNkmKP2N3Sf7Ayf39/d7e3mYFuL67u2NOOrozJU98Qeln7C7JHzjZ2tqy0vMBnTWdTpfLJXsp0p0p2X/5EswvZF0kP/kDJ1bKMIAOurm5YVW2UZ5ZXJJ+ZhfS6u8SBXJkdYeE6pRJLPRvb2+7KaAjNjY27FUL4rMmi25aYY+EbMQ/Nn2cWEB0jIg6rWTOGiKf/8fHx7u7u/amBHTHzs6OvRkGvc8LORv6QSoTL0cy7IWAvuhrAZaQjz/h/Pz86uoKLvoSJgfko9HCIawfxBd/2zcGu6ANwWBR9xcUPDo6enh4ODs7Q8sI8yKg//T0FMUjInpgoOyVAz99CnsExD89PUGNz8/P1lRhuI4I6IfqUTnCWmUg8fgSpuTg4MBehTCfl/9QUsKamri8vGSt706uH4bUNqGCfSAALRNuBMGtGxGRWLi4uMAit7e31hRCv7EQGH9sBMFac3B9fW0Lh4rnJggYkv39fXtToa9eCOiHnGfbbgycDq1VAHec6SX2vgm/Cw4PD+1VJjp2REB/L4BBg2UcWoa3uWOeC3VqGEp/En31CL1HFwgvpp+AAvxVU4fcXuiqP3cYmU65bNiSyY8h8l4YdvzVan0Iy7rjAb2QPEoMpb+L1CDigeY/RUvyKNGz/hFGOI5gN0WmQ0N/sgXyJrado4cTSXCrAE90ht/gGjnBxxH00uIhkGw5wm2/3wXF+PsvYgc7YU0DAc6FeDSCXzoaI6hhyUEiB9YFNv5dhe676CvIC2K5XOJWGuAfjRWAvTZ9fQ3kP9JPx7jpdIoWHeiFbXEUH70u5/E2QI0wrmH9BKq4Y6/H5SVB52JA/GgcRFvtYE/oh82DrbanXge8bCphgBCI6cfNQy/6O4aAAtD4eKXwFHxi8x+Bu0h781mi7VzAVrEgwuM/xHANFwKo8+TkBBNWcMFqqz0W/6Ohe9fAdpOylfvNKhkCn4X+OCRhrMZ/QL8OwoXmf6s/mBR5KG1u/guh5EVOXwHMXwAAAABJRU5ErkJggg==';
    }
}
