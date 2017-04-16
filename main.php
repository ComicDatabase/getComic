<?php
    if(isset($_POST['comic']))
    {
        $myfile = fopen("cm.txt", "a+") or die("error!");
        fwrite($myfile,base64_decode($_POST['comic']));
        fwrite($myfile,"\r\n");
        fclose($myfile);
        echo "ComicSave!";
    }
    else if(isset($_GET['clear']))
    {
        if($_GET['clear'] == 1)
        {
            $myfile = fopen("cm.txt", "w") or die("error!");
            fwrite($myfile,"\n");
            fclose($myfile);
            echo "ComicClear!";
        }
    }
    else {
        echo "list:";
        $myfile = fopen("cm.txt", "r") or die("error!");
        echo fread($myfile,filesize("cm.txt"));
        fclose($myfile);
    }
 ?>
