<?php
include_once 'Connectionclass.php';
class EntryClass extends Connectionclass{
    
    function addParticipant($name,$password,$date_of_birth){
        $insert ="Insert into participant(name,password,date_of_birth) values ('$name','$password','$date_of_birth')";
        $this->query($insert);
    }
}
