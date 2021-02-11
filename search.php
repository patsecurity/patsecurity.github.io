<?php ini_set('default_charset','UTF-8');header('Content-Type: text/html; charset=UTF-8'); ?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Site Search Results</title>
<meta name="referrer" content="same-origin">
<meta name="viewport" content="width=960">
<style>html,body{-webkit-text-zoom:reset !important;-ms-text-size-adjust:none !important;-moz-text-size-adjust:none !important;-webkit-text-size-adjust:none !important}@font-face{font-display:block;font-family:"EB Garamond";src:url('css/EBGaramond-Regular.woff2') format('woff2'),url('css/EBGaramond-Regular.woff') format('woff');font-weight:400}body>div{font-size:0}p, span,h1,h2,h3,h4,h5,h6{margin:0;word-spacing:normal;word-wrap:break-word;-ms-word-wrap:break-word;pointer-events:auto;max-height:1000000000px}sup{font-size:inherit;vertical-align:baseline;position:relative;top:-0.4em}sub{font-size:inherit;vertical-align:baseline;position:relative;top:0.4em}ul{display:block;word-spacing:normal;word-wrap:break-word;list-style-type:none;padding:0;margin:0;-moz-padding-start:0;-khtml-padding-start:0;-webkit-padding-start:0;-o-padding-start:0;-padding-start:0;-webkit-margin-before:0;-webkit-margin-after:0}li{display:block;white-space:normal}li p{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}form{display:inline-block}a{text-decoration:inherit;color:inherit;-webkit-tap-highlight-color:rgba(0,0,0,0)}textarea{resize:none}.shm-l{float:left;clear:left}.shm-r{float:right;clear:right}.whitespacefix{word-spacing:-1px}html{font-family:sans-serif}body{font-size:0;margin:0}audio,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background:0 0;outline:0}b,strong{font-weight:700}dfn{font-style:italic}h1,h2,h3,h4,h5,h6{font-size:1em;line-height:1;margin:0}img{border:0}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=submit]{-webkit-appearance:button;cursor:pointer;box-sizing:border-box;white-space:normal}input[type=text],input[type=password],textarea{-webkit-appearance:none;appearance:none;box-sizing:border-box}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}textarea{overflow:auto;box-sizing:border-box;border-color:#ddd}optgroup{font-weight:700}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}blockquote{margin-block-start:0;margin-block-end:0;margin-inline-start:0;margin-inline-end:0}:-webkit-full-screen-ancestor:not(iframe){-webkit-clip-path:initial!important}
html{-webkit-font-smoothing:antialiased; -moz-osx-font-smoothing:grayscale}#b{background-color:#fff}.ps121{position:relative;margin-top:192px}.v16{display:block;*display:block;zoom:1;vertical-align:top}.s121{pointer-events:none;min-width:960px;width:960px;margin-left:auto;margin-right:auto}.s122{width:768px;margin-left:96px}.v17{display:inline-block;*display:inline;zoom:1;vertical-align:top}.ps122{position:relative;margin-left:0;margin-top:0}.s123{min-width:768px;width:768px;min-height:32px}.c136{z-index:1;pointer-events:auto;overflow:hidden;height:32px}.p7{padding-top:0;text-indent:0;padding-bottom:0;padding-right:0;text-align:left}.f31{font-family:"EB Garamond";font-size:15px;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;color:#000;background-color:initial;line-height:19px;letter-spacing:normal;text-shadow:none}.ps123{position:relative;margin-left:0;margin-top:32px}.s124{min-width:768px;width:768px;min-height:1000px}.c137{z-index:2;pointer-events:auto;border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#16be14;background-clip:padding-box}.ps124{position:relative;margin-left:0;margin-top:8px}.s125{min-width:768px;width:768px;min-height:89px}.c138{pointer-events:none}.ps125{position:relative;margin-left:8px;margin-top:0}.s126{min-width:752px;width:752px;min-height:32px}.c139{pointer-events:auto;overflow:hidden;height:32px}.s127{min-width:742px;width:742px;min-height:57px}.c140{pointer-events:auto;overflow:hidden;height:57px}</style>
<link onload="this.media='all';this.onload=null;" rel="stylesheet" href="css/site.564a62.css" media="print">
<!--[if lte IE 7]>
<link rel="stylesheet" href="css/site.564a62-lteIE7.css" type="text/css">
<![endif]-->
<!--[if lte IE 8]>
<link rel="stylesheet" href="css/site.564a62-lteIE8.css" type="text/css">
<![endif]-->
<!--[if gte IE 9]>
<link rel="stylesheet" href="css/site.564a62-gteIE9.css" type="text/css">
<![endif]-->
</head>
<body id="b">
<?php

    function find($searchText, $searchFor) {
        return empty($searchFor) ? FALSE : (extension_loaded('mbstring') ? mb_stripos($searchText, $searchFor) : stripos($searchText, $searchFor));
    }

    $page = 0;
    $start_page = 0;
    $end_page = -1;
    $searchResults = array();
    if(isset($_GET['search'])) {
        $mb = extension_loaded('mbstring');
        $results_per_page = 10;
        $pages = 10;
        $page = (isset($_GET['page']) ? $_GET['page'] : 1);
        if($page < 1) {
            $page = 1;
        }
        $start_page = $page - $pages / 2;
        if($start_page < 1) {
            $start_page = 1;
        }
        $current_page = 1;
        $current_result = 0;
        $end_page = $page + $pages / 2 - 1;

        $searchFor = $_GET['search'];
        $searchJSON = file_get_contents('search.json');
        $searchPages = json_decode($searchJSON, TRUE);
        foreach($searchPages as $searchPage) {
            foreach($searchPage['texts'] as $searchText) {
                $pos = find($searchText, $searchFor);
                if(($pos = find($searchText, $searchFor)) !== FALSE) {
                    if($current_page == $page) {
                        $len = 300;
                        $pos -= $len / 2;
                        if($pos > 0) {
                            $text = "&hellip;";
                        }
                        else {
                            $pos = 0;
                            $text = '';
                        }
                        $end = FALSE;
                        if($pos + $len > ($searchTextLength = strlen($searchText))) {
                            $len = $searchTextLength - $pos;
                            $end = TRUE;
                        }
                        $text .= htmlentities($mb ? mb_substr($searchText, $pos, $len) : substr($searchText, $pos, $len));
                        if($end === FALSE) {
                            $text .= "&hellip;";
                        }
                        $searchResults[] = array('link' => $searchPage['link'], 'title' => htmlentities($searchPage['title']), 'text' => $text);
                    }
                    if(++$current_result == $results_per_page) {
                        $current_result = 0;
                        ++$current_page;
                    }
                    break;
                }
            }
            if($current_page > $end_page) {
                break;
            }
        }
        $end_page = $current_page;
    }
?>

<div class="ps121 v16 s121">
<div class="s122">
<div class="v17 ps122 s123 c136">
<p class="p7 f31">Search results for &quot;<?php if(isset($_GET['search'])) echo $_GET['search']; ?>&quot;</p>
</div>
<div class="v17 ps123 s124 c137">
<?php

    if(count($searchResults) == 0) {
        $result = '<div class="v17 ps124 s125 c138"><div class="v17 ps125 s126 c139"><p class="p7 f31">{title}</p></div><div class="v17 ps125 s127 c140"><p class="p7 f31">{text}</p></div></div>';
        $result = str_replace('{title}', htmlentities('No search result'), $result);
        $result = str_replace('{text}', '', $result);
        echo $result;
    }
    else {
        $searchFor = htmlentities($searchFor);
        $hlPre = '';
        $hlPost = '';
        foreach($searchResults as $searchResult) {
            $result = '<div class="v17 ps124 s125 c138"><div class="v17 ps125 s126 c139"><p class="p7 f31">{title}</p></div><div class="v17 ps125 s127 c140"><p class="p7 f31">{text}</p></div></div>';
            $result = str_replace('{title}', '<a href="' . $searchResult['link'] . '">' . $searchResult['title'] . '</a>', $result);
            $text = $searchResult['text'];
            if(strlen($hlPre)) {
                $text = preg_replace("/(" . $searchFor . ")/i", "{$hlPre}$1{$hlPost}", $text);
            }
            $result = str_replace('{text}', $text, $result);
            echo $result;
        }
   }

?>

</div>
<div class="v1 ps120 s118 c123">
<div class="ps119">
<?php

    $control = '<div class="v1 ps2 s119 c124" style="display:none"><a href="#" class="f30 btn6 v2 s120">&lt;&lt;</a></div>';
    if($page > 1) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . ($page - 1);
        $control = str_replace('style="visibility:hidden"', '', $control);
        $control = str_replace('style="display:none"', '', $control);
        $control = str_replace('href="#"', 'href="' . $url . '"', $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v1 ps10 s119 c125" style="display:none"><a href="#" class="f30 btn7 v2 s120">{page_num}</a></div>';
    $buttonPage = $start_page + 1 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        $control = str_replace('style="visibility:hidden"', '', $control);
        $control = str_replace('style="display:none"', '', $control);
        if($buttonPage == $page) {
            $control = str_replace('href="#"', 'style="border: 0; background-color: #c0c0c0; color: #fff; border-color: #677a85"', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
        }
        $control = str_replace('{page_num}', 1, $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v1 ps10 s119 c126" style="display:none"><a href="#" class="f30 btn8 v2 s120">{page_num}</a></div>';
    $buttonPage = $start_page + 2 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        $control = str_replace('style="visibility:hidden"', '', $control);
        $control = str_replace('style="display:none"', '', $control);
        if($buttonPage == $page) {
            $control = str_replace('href="#"', 'style="border: 0; background-color: #c0c0c0; color: #fff; border-color: #677a85"', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
        }
        $control = str_replace('{page_num}', 2, $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v1 ps10 s119 c127" style="display:none"><a href="#" class="f30 btn9 v2 s120">{page_num}</a></div>';
    $buttonPage = $start_page + 3 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        $control = str_replace('style="visibility:hidden"', '', $control);
        $control = str_replace('style="display:none"', '', $control);
        if($buttonPage == $page) {
            $control = str_replace('href="#"', 'style="border: 0; background-color: #c0c0c0; color: #fff; border-color: #677a85"', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
        }
        $control = str_replace('{page_num}', 3, $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v1 ps10 s119 c128" style="display:none"><a href="#" class="f30 btn10 v2 s120">{page_num}</a></div>';
    $buttonPage = $start_page + 4 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        $control = str_replace('style="visibility:hidden"', '', $control);
        $control = str_replace('style="display:none"', '', $control);
        if($buttonPage == $page) {
            $control = str_replace('href="#"', 'style="border: 0; background-color: #c0c0c0; color: #fff; border-color: #677a85"', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
        }
        $control = str_replace('{page_num}', 4, $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v1 ps10 s119 c129" style="display:none"><a href="#" class="f30 btn11 v2 s120">{page_num}</a></div>';
    $buttonPage = $start_page + 5 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        $control = str_replace('style="visibility:hidden"', '', $control);
        $control = str_replace('style="display:none"', '', $control);
        if($buttonPage == $page) {
            $control = str_replace('href="#"', 'style="border: 0; background-color: #c0c0c0; color: #fff; border-color: #677a85"', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
        }
        $control = str_replace('{page_num}', 5, $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v1 ps10 s119 c130" style="display:none"><a href="#" class="f30 btn12 v2 s120">{page_num}</a></div>';
    $buttonPage = $start_page + 6 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        $control = str_replace('style="visibility:hidden"', '', $control);
        $control = str_replace('style="display:none"', '', $control);
        if($buttonPage == $page) {
            $control = str_replace('href="#"', 'style="border: 0; background-color: #c0c0c0; color: #fff; border-color: #677a85"', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
        }
        $control = str_replace('{page_num}', 6, $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v1 ps10 s119 c131" style="display:none"><a href="#" class="f30 btn13 v2 s120">{page_num}</a></div>';
    $buttonPage = $start_page + 7 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        $control = str_replace('style="visibility:hidden"', '', $control);
        $control = str_replace('style="display:none"', '', $control);
        if($buttonPage == $page) {
            $control = str_replace('href="#"', 'style="border: 0; background-color: #c0c0c0; color: #fff; border-color: #677a85"', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
        }
        $control = str_replace('{page_num}', 7, $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v1 ps10 s119 c132" style="display:none"><a href="#" class="f30 btn14 v2 s120">{page_num}</a></div>';
    $buttonPage = $start_page + 8 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        $control = str_replace('style="visibility:hidden"', '', $control);
        $control = str_replace('style="display:none"', '', $control);
        if($buttonPage == $page) {
            $control = str_replace('href="#"', 'style="border: 0; background-color: #c0c0c0; color: #fff; border-color: #677a85"', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
        }
        $control = str_replace('{page_num}', 8, $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v1 ps10 s119 c133" style="display:none"><a href="#" class="f30 btn15 v2 s120">{page_num}</a></div>';
    $buttonPage = $start_page + 9 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        $control = str_replace('style="visibility:hidden"', '', $control);
        $control = str_replace('style="display:none"', '', $control);
        if($buttonPage == $page) {
            $control = str_replace('href="#"', 'style="border: 0; background-color: #c0c0c0; color: #fff; border-color: #677a85"', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
        }
        $control = str_replace('{page_num}', 9, $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v1 ps10 s119 c134" style="display:none"><a href="#" class="f30 btn16 v2 s120">{page_num}</a></div>';
    $buttonPage = $start_page + 10 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        $control = str_replace('style="visibility:hidden"', '', $control);
        $control = str_replace('style="display:none"', '', $control);
        if($buttonPage == $page) {
            $control = str_replace('href="#"', 'style="border: 0; background-color: #c0c0c0; color: #fff; border-color: #677a85"', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
        }
        $control = str_replace('{page_num}', 10, $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v1 ps10 s119 c135" style="display:none"><a href="#" class="f30 btn17 v2 s120">&gt;&gt;</a></div>';
    if($page < $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . ($page + 1);
        $control = str_replace('style="visibility:hidden"', '', $control);
        $control = str_replace('style="display:none"', '', $control);
        $control = str_replace('href="#"', 'href="' . $url . '"', $control);
    }
    echo $control;

?>

</div>
</div>
</div>
</div>
<script>dpth="/";!function(){var s=["js/jquery.9cedb2.js","js/search.564a62.js"],n={},j=0,e=function(e){var o=new XMLHttpRequest;o.open("GET",s[e],!0),o.onload=function(){if(n[e]=o.responseText,2==++j)for(var t in s){var i=document.createElement("script");i.textContent=n[t],document.body.appendChild(i)}},o.send()};for(var o in s)e(o)}();
</script>
<script type="text/javascript">
var ver=RegExp(/Mozilla\/5\.0 \(Linux; .; Android ([\d.]+)/).exec(navigator.userAgent);if(ver&&parseFloat(ver[1])<5){document.getElementsByTagName('body')[0].className+=' whitespacefix';}
</script>
</body>
</html>