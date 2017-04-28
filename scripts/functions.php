<?php

    function bdConnect(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "arspect";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }

    function login($user, $password){
        $bd = bdConnect();
        $sql = "select * from users where username = '".$user."'";

        $result = $bd->query($sql);

        if ($result === false) {
            echo "No hi ha resultats";
        } else {
            $row = $result->fetch_assoc();
            if ($row['password'] == $password) {
                $bd->close();
                return true;
            }else{
                $bd->close();
                echo false;
            }
        }
    }

    function insertBd($insert){
       $bd = bdConnect();
       $bd->query($insert);
       $bd->close();
    }

    function returnArrayFrombd($sql){
        $array = array();
        $bd = bdConnect();
        $result = $bd->query($sql);
        if ($result === false) {
            echo "No hi ha resultats";
        } else {
            while ($row = $result->fetch_assoc()) {
                array_push($array,$row);
            }
        }
        $bd->close();
        return $array;
    }

    function returnFromBd($sql){
        $bd = bdConnect();

        $result = $bd->query($sql);
        if ($result === false) {
            echo "No hi ha resultats";
        } else {
            $row = $result->fetch_assoc();
        }
        $bd->close();
        return $row;
    }

    function getInformationOnFile($file){
        $contributionArray = array();
        while(!feof($file)) {
            $line = fgets($file);
            $data = explode("|",$line);
            $id = $data[0];
            $username = $data[1];
            $contribution = $data[2];
            $date = $data[3];
            $likes = $data[4];
            array_push($contributionArray, new contribution($id, $username, $contribution, $date, $likes));
        }
        return $contributionArray;
    }

    function getStoryesFromDb(){
        $storyArray = array();
        $sql = "select * from story ";
        $story = returnArrayFrombd($sql);
        foreach ($story as $value){
            $sql2 = "SELECT users.username FROM storyuser JOIN users WHERE users.id = storyuser.idUser and idStory = ".$value["id"];
            $contributors = returnArrayFrombd($sql2);
            $arrayContributors = array();
            foreach ($contributors as $contributor){
                array_push($arrayContributors, $contributor["username"]);
            }
            array_push($storyArray, new Story($value["id"],$value["title"], $value["likes"], $arrayContributors));
        }
        return $storyArray;
    }

    function returnStoryFromId($id){
        foreach (getStoryesFromDb() as $value){
            if($id == $value->getId()){
                return $value;
            }
        }
    }
?>