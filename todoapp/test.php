<?php
if (!$fp = @fopen($_REQUEST['books/3021.pdf'],"r")) {
        echo 'failed opening file '.$_REQUEST['books/3021.pdf'];
}
else {
        $max=0;
        while(!feof($fp)) {
                $line = fgets($fp,255);
                if (preg_match('/\/Count [0-9]+/', $line, $matches)){
                        preg_match('/[0-9]+/',$matches[0], $matches2);
                        if ($max<$matches2[0]) $max=$matches2[0];
                }
        }
        fclose($fp);
echo 'There '.($max<2?'is ':'are ').$max.' page'.($max<2?'':'s').' in '. $_REQUEST['books/3021.pdf'].'.';
}
?>