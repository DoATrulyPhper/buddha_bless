<?php
/**                                                        
                  _ooOoo_
                 o8888888o
                 88" . "88
                 (| -_- |)
                  O\ = /O
              ____/`---'\____
            .   ' \\| |// `.
             / \\||| : |||// \
           / _||||| -:- |||||- \
             | | \\\ - /// | |
           | \_| ''\---/'' | |
            \ .-\__ `-` ___/-. /
         ___`. .' /--.--\ `. . __
      ."" '< `.___\_<|>_/___.' >'"".
     | | : `- \`.;`\ _ /`;.`/ - ` : | |
       \ \ `-. \_ __\ /__ _/ .-` / /
======`-.____`-.___\_____/___.-`____.-'======
                  `=---='

.............................................
      佛祖保佑🙏 
      祝天下有情人终成眷属🙏
      南无阿弥陀佛🙏
      心中有佛🙏
 */

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