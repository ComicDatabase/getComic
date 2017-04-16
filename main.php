<?php
    if (!file_exists("cm.txt"))
    {
        $myfile = fopen("cm.txt", "w") or die("error1!");
        fwrite($myfile,"\r\n");
        fclose($myfile);
    }

    if(isset($_POST['comic']))
    {
        $myfile = fopen("cm.txt", "a+") or die("error2!");
        fwrite($myfile,base64_decode($_POST['comic']));
        fwrite($myfile,"\r\n");
        fclose($myfile);
        echo "ComicSave!";
    }
    else if(isset($_GET['clear']))
    {
        if($_GET['clear'] == 1)
        {
            $myfile = fopen("cm.txt", "w") or die("error3!");
            fwrite($myfile,"\n");
            fclose($myfile);
            echo "ComicClear!";
        }
    }
    else {
        echo "list:";
        $myfile = fopen("cm.txt", "r") or die("error4!");
        echo fread($myfile,filesize("cm.txt"));
        fclose($myfile);
    }
 ?>
