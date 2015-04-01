<?php

	require_once __DIR__."/../entities/Etudiant.php";
	require_once __DIR__."/../../../bootstrap.php";

	// Save in the database
	 function addEtudiantDAO($etudiant){
	 	global $entityManager;
		try {
			$entityManager->persist($etudiant);
			$entityManager->flush();
			return $etudiant;
			
		} 
		catch (Exception $e) {
			echo $e->getMessage();
		}
		
	}


	// Get all etudiants
	 function getEtudiantsDAO(){
	 	global $entityManager;
		try {
			$etudiants = $entityManager->getRepository('Etudiant')->findAll();
			//echo json_encode($etudiants);
			return $etudiants;

		} 
		catch (Exception $e) {
			echo $e->getMessage();

		}

    }

    // Get etudiant by id
	 function getEtudiantDAO($id){
	 	global $entityManager;
		try {
			$etudiant = $entityManager->find('Etudiant',$id);
			return $etudiant;
		} 
		catch (Exception $e) {
			echo "L'etudiant est introuvable !\n".$e->getMessage();
		}
    }

    // Now delete etudiant
     function deleteEtudiantDAO($etudiant){
     	global $entityManager;
    	try {
    		$entityManager->remove($etudiant);
			$entityManager->flush();
    	} 
    	catch (Exception $e) {
    		echo "L'etudiant à supprimer est introuvable !\n".$e->getMessage();
    	}
		
	}

/*echo '<pre>';
print_r( getEtudiants());
	echo '</pre>';
$t = array(getEtudiants() );
	print_r($t[0][0]);

	echo json_encode($t[0][0]);
	*/

?>