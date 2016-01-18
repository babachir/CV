<?php

include_once 'connect.php';


function getCompetence()
{

    global $conn;
    $tab_returned =  array();


    $sql = "SELECT competence.contenu FROM competence";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tab_returned[] = $row;

        }
    }

    return $tab_returned;

}

function getExp()
{

    global $conn;
    $tab_returned =  array();


    $sql = "SELECT exp.contenu FROM exp ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tab_returned[] = $row;

        }
    }

    return $tab_returned;

}
function getAutre()
{

    global $conn;
    $tab_returned =  array();


    $sql = "SELECT autre.contenu FROM autre ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tab_returned[] = $row;

        }
    }

    return $tab_returned;

}
function getFormation()
{

    global $conn;
    $tab_returned =  array();


    $sql = "SELECT formation.contenu FROM formation ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tab_returned[] = $row;

        }
    }

    return $tab_returned;

}
function getLoisirs()
{

    global $conn;
    $tab_returned =  array();


    $sql = "SELECT loisir.contenu FROM loisir ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tab_returned[] = $row;

        }
    }

    return $tab_returned;

}



function deleteCV()
{

    global $conn;
    $tab_returned = null;


    $sql = "DELETE FROM competence ";
    $result = $conn->query($sql);
    $sql = "DELETE FROM autre ";
    $result = $conn->query($sql);
    $sql = "DELETE FROM exp";
    $result = $conn->query($sql);
    $sql = "DELETE FROM formation";
    $result = $conn->query($sql);
    $sql = "DELETE FROM loisir";
    $result = $conn->query($sql);

}

function createCompetence($data){
	global $conn;
	
	$sql = "INSERT INTO competence(contenu) VALUES ('".$data."')";
	//echo $sql;
	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}	
}

function createExp($data){
	global $conn;
	
	$sql = "INSERT INTO  exp(contenu)
	VALUES ('".$data."')";
	//echo $sql;
	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}	
}
function createAutre($data){
	global $conn;
	
	$sql = "INSERT INTO  autre(contenu)
	VALUES ('".$data."')";
	//echo $sql;
	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}	
}
function createLoisir($data){
	global $conn;
	
	$sql = "INSERT INTO  loisir(contenu)
	VALUES ('".$data."')";
	//echo $sql;
	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}	
}
function createFormation($data){
	global $conn;
	
	$sql = "INSERT INTO  formation(contenu)
	VALUES ('".$data."')";
	//echo $sql;
	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}	
}

function getAuth($email,$motdepass)
{

    global $conn;
    $tab_returned = null;


    $sql = "SELECT * FROM admin WHERE email='".$email."' AND mdp='".$motdepass."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return true;
    }
    else
    {
    	return false;
    }

    return $tab_returned;



}



?>