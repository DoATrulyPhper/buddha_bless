<?php
/**
 * 获取某个目录下文件路径
 * 
 * [list_files description]
 * @param  [type] $dir [description]
 * @return [type]      [description]
 */
function list_files($dir) {
    if (is_dir($dir)) {
        if ($handle = opendir($dir)) {
            while (($file = readdir($handle)) !== FALSE) {
                if ($file != "." && $file != ".." && $file != "Thumbs.db") {
                    echo '<a target="_blank" href="' . $dir . $file . '">' . $file . '</a><br />' . "
";
                }
            }
            closedir($handle);
        }
    }
}

list_files('./');
