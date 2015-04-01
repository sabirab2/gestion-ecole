<?php

//use Api\entities\Etudiant; 
require_once './src/Api/metier/etudiantManager.php';
require_once './src/Api/lib/cast.php';
//require_once './bootstrap.php';


$app = new \Slim\Slim();

/** 
            Etudiant
 **/
$app->post('/etudiants','addEtudiant');
$app->post('/etudiants/upload-photo','uploadPhoto');
$app->get('/etudiants/:id','getEtudiant');
$app->delete('/etudiants/:id','deleteEtudiant');
$app->get('/etudiants','getEtudiants');

/** 
            Enseignant
 **/
/*$app->post('/enses','addEtudiant');
$app->get('/etudiant/:id','getEtudiant');
$app->delete('/etudiant/:id','deleteEtudiant');
$app->get('/etudiants','getEtudiants');*/

/** 
            Implementation Etudiant
 **/
 // Save in the database
 function addEtudiant() { global $app;
    
    $resultat = json_decode($app->request()->getBody());
    $resultat->dateNaissance = new DateTime($resultat->dateNaissanc);
    $etudiant = new Etudiant();
    $etudiant = cast($etudiant,$resultat );
    $etudiant = addEtudiantDAO($etudiant);
    $app->response->headers->set('Content-Type', 'application/json');
    $app->response->setBody('Ajout avec succès !');
     
}

function getEtudiants() { global $app; 

    //$etudiants = $entityManager->getRepository('Etudiant')->findAll();
    $etudiants = getEtudiantsDAO();
    $app->response->headers->set('Content-Type', 'application/json');
    $app->response->setBody(json_encode($etudiants));

}



// Get etudiant by id
 function getEtudiant($id) { global $app;
   
   $etudiant = getEtudiantDAO($id);
    $app->response->headers->set('Content-Type', 'application/json');
    $app->response->setBody(json_encode($etudiant));
}

// Now delete etudiant
 function deleteEtudiant($id){ global $app;

    $etudiant = getEtudiantDAO($id);
    echo $etudiant->getPhoto();
    if ($etudiant->getPhoto()!= 'avatar.jpg') {
        if (file_exists("./../photos/".$etudiant->getPhoto())) {
            unlink("./../photos/".$etudiant->getPhoto()); // On efface la photo
            
        }  
    }

    deleteEtudiantDAO($etudiant);
    $app->response->headers->set('Content-Type', 'application/json');
    $app->response->setBody("Suppression avec succès !");
    
    
    
}

function uploadPhoto() { global $app;

    $file = $_FILES['file'];
    $rep_destination="./../photos/";
    $name=time();
    $extention = "";
    if ($file['type'] == 'image/jpeg') { $extention = '.jpg'; }
    if ($file['type'] == 'image/jpg') { $extention = '.jpg'; }
    if ($file['type'] == 'image/png') { $extention = '.png'; }
    if ($file['type'] == 'image/gif') { $extention = '.gif'; }
    if($extention!="")
    {
        if (move_uploaded_file( $file['tmp_name'],$rep_destination.$name.$extention))
        {
             $app->response->headers->set('Content-Type', 'application/json');
             $app->response->setBody(json_encode(array('valid' => $name.$extention )));
        }
             
     }
    else
    {
        $app->response->headers->set('Content-Type', 'application/json');
             $app->response->setBody(json_encode(array('error' => "Invalide format image !" )));
    }
        
}












$app->run();



?>

