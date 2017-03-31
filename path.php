<?php 

// 設置 framework 的公開頁面網址供網站讀取，這邊讀取的是 resource_url() 的路徑
// 設置這個值的話，resource_url() 讀取的都是
// fanswoo-framework/js/fanswoo-framework 和 fanswoo-framework/style/fanswoo-framework 
// 反之則讀取 app/js/fanswoo-fraamework 跟 app/style/fanswoo-framework
// 這個值在正式上線的時候要記得註解掉
// define('RESOURCE_URL', '../fanswoo-framework-ci/codeigniter');

//當codeigniter及fanswoo-framework與app為上層路徑時，啟用此路徑
define('BASEPATH_ORIGINAL', '../fanswoo-framework-ci/codeigniter');
define('FSPATH_ORIGINAL', '../fanswoo-framework-ci/fanswoo-framework');

//當codeigniter及fanswoo-framework與app於上上層之framework相關核心路徑時，啟用此路徑
// define('BASEPATH_ORIGINAL', '../fanswoo-framework/dev/codeigniter');
// define('FSPATH_ORIGINAL', '../fanswoo-framework/dev/fanswoo-framework');

//當codeigniter及fanswoo-framework與app於linux伺服器之framework核心路徑時，啟用此路徑
// define('BASEPATH_ORIGINAL', '/var/www/vhosts/frameworks.com/fanswoo-framework/codeigniter');
// define('FSPATH_ORIGINAL', '/var/www/vhosts/frameworks.com/fanswoo-framework/fanswoo-framework');