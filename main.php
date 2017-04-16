<?php
    //$default_bucket = "txcomic-164810.appspot.com";
    $file = "gs://#default#/cm.txt";
    echo $file;
    if (!file_exists($file))
    {
        $myfile = fopen($file, "w") or die("error1!");
        fwrite($myfile,"\r\n");
        fclose($myfile);
    }

    if(isset($_POST['comic']))
    {
        $myfile = fopen($file, "a+") or die("error2!");
        fwrite($myfile,base64_decode($_POST['comic']));
        fwrite($myfile,"\r\n");
        fclose($myfile);
        echo "ComicSave!";
    }
    else if(isset($_GET['clear']))
    {
        if($_GET['clear'] == 1)
        {
            $myfile = fopen($file, "w") or die("error3!");
            fwrite($myfile,"\n");
            fclose($myfile);
            echo "ComicClear!";
        }
    }
    else {
        echo "list:";
        $myfile = fopen($file, "r") or die("error4!");
        echo fread($myfile,filesize($file));
        fclose($myfile);
    }
 ?>
