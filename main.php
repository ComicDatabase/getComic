<?php

/**
 * Copyright 2016 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
# [START use_cloud_storage_tools]
    use google\appengine\api\cloud_storage\CloudStorageTools;
# [END use_cloud_storage_tools]


    $JSON = base64_decode ($_POST["comic"]);
    //echo $JSON;
    $data = json_decode($JSON);
    //var_dump( $data->{'comic'} );
    $mid = $data->{'comic'}->{'id'};
    $cid = $data->{'chapter'}->{'cid'};
    echo $mid,$cid;

    $newFileContent = $JSON;
    $my_bucket = "txcomic-164810.appspot.com";
    # [START write_simple]
    file_put_contents("gs://${my_bucket}/${mid}-${cid}.txt", $newFileContent);





	/*
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
	*/
 ?>
