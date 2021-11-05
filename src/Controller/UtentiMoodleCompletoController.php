<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UtentiMoodleCompletoController extends AbstractController
{
    /**
     * @Route("/admin/utentimoodlecompleto", name="utenti_moodle_completo")
     */
    public function index(): Response
    {
         $connection = $this -> getDoctrine() -> getManager() ->getConnection();
      $sql = "SELECT pm.id,
(SELECT `data` FROM mdl_user_info_data WHERE id = pm.id AND fieldid ='2' LIMIT 1 ) AS CodiceFiscale,
(SELECT `data` FROM mdl_user_info_data WHERE id = pm.id AND fieldid ='3' LIMIT 1 ) AS data_nascita,
(SELECT `data` FROM mdl_user_info_data WHERE id = pm.id AND fieldid ='5' LIMIT 1 ) AS citta_di_nascita,
(SELECT `data` FROM mdl_user_info_data WHERE id = pm.id AND fieldid ='6' LIMIT 1 ) AS provincia_di_nascita,
(SELECT `data` FROM mdl_user_info_data WHERE id = pm.id AND fieldid ='7' LIMIT 1 ) AS cap_citta_nascita,
(SELECT `data` FROM mdl_user_info_data WHERE id = pm.id AND fieldid ='8' LIMIT 1 ) AS citta_di_residenza,
(SELECT `data` FROM mdl_user_info_data WHERE id = pm.id AND fieldid ='9' LIMIT 1 ) AS cap_citta_di_residenza,
(SELECT `data` FROM mdl_user_info_data WHERE id = pm.id AND fieldid ='10' LIMIT 1 ) AS indirizzo_di_residenza,
(SELECT `data` FROM mdl_user_info_data WHERE id = pm.id AND fieldid ='11' LIMIT 1 ) AS numero_di_telefono,
(SELECT `data` FROM mdl_user_info_data WHERE id = pm.id AND fieldid ='12' LIMIT 1 ) AS professione,
(SELECT `data` FROM mdl_user_info_data WHERE id = pm.id AND fieldid ='13' LIMIT 1 ) AS numero_iscrizione_albo,
(SELECT `data` FROM mdl_user_info_data WHERE id = pm.id AND fieldid ='14' LIMIT 1 ) AS albo_provincia_iscrizione,
(SELECT `data` FROM mdl_user_info_data WHERE id = pm.id AND fieldid ='15' LIMIT 1 ) AS albo_codice_ateco,
(SELECT `data` FROM mdl_user_info_data WHERE id = pm.id AND fieldid ='16' LIMIT 1 ) AS ragione_sociale,
(SELECT `data` FROM mdl_user_info_data WHERE id = pm.id AND fieldid ='17' LIMIT 1 ) AS partita_iva,
(SELECT `data` FROM mdl_user_info_data WHERE id = pm.id AND fieldid ='18' LIMIT 1 ) AS codice_fiscale_iva,
(SELECT `data` FROM mdl_user_info_data WHERE id = pm.id AND fieldid ='19' LIMIT 1 ) AS indirizzo_sede_legale,
(SELECT `data` FROM mdl_user_info_data WHERE id = pm.id AND fieldid ='20' LIMIT 1 ) AS citta_sede_legale,
(SELECT `data` FROM mdl_user_info_data WHERE id = pm.id AND fieldid ='21' LIMIT 1 ) AS codice_sdi,
(SELECT `data` FROM mdl_user_info_data WHERE id = pm.id AND fieldid ='22' LIMIT 1 ) AS pec_aziendale,
pm.userid,
mdl_user.username,
mdl_user.`password`,
mdl_user.firstname,
mdl_user.lastname,
mdl_user.email,
mdl_user.phone1,
mdl_user.phone2,
mdl_user.address,
mdl_user.city,
mdl_user.country
FROM
mdl_user_info_data AS pm
INNER JOIN mdl_user ON pm.userid = mdl_user.id
GROUP BY
mdl_user.username";
      $stmt = $connection -> prepare($sql);
      $stmt -> execute();

        return $this->render('utenti_moodle_completo/index.html.twig', [
            'controller_name' => 'UtentiMoodleCompletoController',
            'stmt' => $stmt,
        ]);
    }
}
