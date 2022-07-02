<?php

$data = [
    "entete" => "reporting directory url",
    "insurer_info" => [
        "name" => "NSIA",
        "city" => "Cotonou",
        "zip_code" => "00229",
        "street_number" => "",
        "avatar" => "https://api.tests.bloom.bj/public/ressources/insurer-logo/nsia.png",
        "country_info" => [
            "label" => "",
            "country_code" => "",
            "country_phone_code" => ""
        ]
    ],
    "product_name" => "MULTIRISQUE PROFESSIONNELLE", // Ce champ represent le nom du produt. Il peut prendre les valeurs suivante:
    "policy_number" => "09000",
    "customer_info" => [
        "customer_id" => "15",
        "social_reason" => "P",
        "first_name" => "Israel",
        "last_name" => "DOSSOU",
        "name" => "Iso Doss & Fils",
        "city" => "Cotonou",
        "zip_code" => "00229",
        "street_number" => "",
        "phone_number" => "97326358",
        "email" => "dossou.israel48@gmail.com",
    ],
    "start_date" => "04/04/2022", // Ce représente l"effet
    "end_date" => "04/11/2022", // Ce représente l"echéance
    "current_date" => "01",
    "current_month" => "Janvier",
    "current_year" => "2022",
    "general_manager" => "Ekoue KANGNI",
    //image du cacher
    "stamp" => "https://ressources.bloom.bj/images//bloom_insurance_logo.png",
    "frankness" => "12000",
    "receipt" => "Mobile Money",
    "frankness" => "25000",
    "show_sub_garantee" => "true or false",
    "risk_info" => [
        // Les champs suivantes sont uniquement pour le produit IA (Individuelle accident).
        "activity_name" => "Vendeur de Attassi", // Ce champ represente l"activité du client.
        "duration" => "12", // Ce champ represente la durée de couverture du contrat en mois.
        "insured_persons" => "12", // Ce champ represente le nombre de personnes assurées.
        //Les champs suivantes sont uniquement pour le produit MRH (Multi risque habitation)
        "risk_situation" => "Adresse du bien assuré", //Ce champ represente la situation du risque (Adresse du bien assuré).
        "insured_quality" => "Qualité de l'assuré", // Ce champ represente la qualité de l'assuré. Il peut prendre les valeurs suivante=>Propriétaire occupant total ; Propriétaire occupant partiel ; Propriétaire non occupant ; Locataire occupant total ; Locataire occupant partiel.
        "risk_type" => "Nature du risque", // Ce champ represente la nature du risque. Il peut prendre les valeurs suivante=>Appartement ; Villa ; Résidence ; Autres.
        "neighborhood" => "Voisinage", // Ce champ represente la nature du risque. Il peut prendre les valeurs suivante=>Appartement ; Villa ; Résidence ; Autres.
        "guarding" => "Oui", // Ce champ represente le gardiennage. Il peut prendre les valeurs suivante=>oui ; non.
        //Les champs suivantes sont uniquement pour le produit Moto
        "frame_registration_number" => "Numéro d'immatriculation ou du chassis",
        "frame-registration-photo" => "Photo de la carte grise ou le recu d'achat de la moto",
        "fiscal-power" => "Puissance fiscale de la moto",
        "mark" => "Marque de la moto",
        "model" => "Model de la moto",
        "energy" => "Énergie ou type d'essence de la moto",
        //Les champs suivantes sont uniquement pour le produit AUTOMOBILE
        "frame_registration_number" => "Numéro d'immatriculation ou du chassis de la voiture",
        "frame-registration-photo" => "Photo de la carte grise ou le recu d'achat de la voiture",
        "fiscal-power" => "Puissance fiscale de la voiture",
        "mark" => "Marque de la voiture",
        "model" => "Model de la voiture",
        "energy" => "Énergie ou type d'essence de la voiture",
        "seats_number" => "nombre de place assises",
        "use" => "usage",
        "driver_license_photo" => "Permis de conduire du conducteur",
        "first_circulation_date" => "La date de première mise en circulation",
        "new_value" => "Valeur a neuf",
        "traffic_area" => "Zone de circulation",
        "duration" => "7",
        //Les champs suivantes sont uniquement pour le produit Voyage
        "bithday" => "11-11-1196",
        "passport_number" => "1234567890",
        "destination" => "Paris",
        "duration" => "7",
        //Les champs suivantes sont uniquement pour le produit MRP (Multi risque professionnelle)
        "risk_situation" => "Adresse du bien assuré", //Ce champ represente la situation du risque (Adresse du bien assuré).
        "insured_quality" => "Qualité de l'assuré", // Ce champ represente la qualité de l'assuré. Il peut prendre les valeurs suivante=>Propriétaire occupant total ; Propriétaire occupant partiel ; Propriétaire non occupant ; Locataire occupant total ; Locataire occupant partiel.
        "risk_type" => "Nature du risque", // Ce champ represente la nature du risque. Il peut prendre les valeurs suivante=>Appartement ; Villa ; Résidence ; Usine, Autres.
        "neighborhood" => "Voisinage", // Ce champ represente la nature du risque. Il peut prendre les valeurs suivante=>Appartement ; Villa ; Résidence ; Autres.
        "guarding" => "Oui" // Ce champ represente le gardiennage. Il peut prendre les valeurs suivante=>oui ; non.
    ],
    "prime_info" => [
        "prime" => "12000", // Ce champ represente la prime nette.
        "taxe" => "12000", // Ce champ represente la taxe.
        "accessory" => "12000", // Ce champ les accessoire.
        "fga" => "12000", // FGA
        "ttc_prime" => "12000" // Ce champ represente la prime tout taxe compris.
    ],
    "guarantees_info" => [
        [
            "label" => "sub_guarantee_label_1",
            "capital" => "12000",
            "prime" => "12000",
            "frankness" => "12000",
            "sub_guarantees_info" => [
                [
                    "label" => "Incendie",
                    "capital" => "12000",
                    "prime" => "12000",
                    "frankness" => "12000"
                ],
                [
                    "label" => "Mort",
                    "capital" => "12000",
                    "prime" => "12000",
                    "frankness" => "12000"
                ]
            ]
        ],
        [
            "label" => "sub_guarantee_label_2",
            "capital" => "12000",
            "prime" => "12000",
            "frankness" => "12000",
            "sub_guarantees_info" => [
                [
                    "label" => "Maladie",
                    "capital" => "12000",
                    "prime" => "12000",
                    "frankness" => "12000"
                ],
                [
                    "label" => "Accident",
                    "capital" => "12000",
                    "prime" => "12000",
                    "frankness" => "120",
                ]
            ]
        ]
    ] // Ce champ doit contenir la liste des noms des garanties du produit.
];

?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--    <link rel="stylesheet" href="https://ressources.bloom.bj/css/styles.css">-->
    <link rel="stylesheet" href="../assets/css/styles.css">

    <title>Attestation</title>

</head>

<body>

<main class="bi-page-a4 bi-pt-10px bi-pb-10px">

    <div class="bi-img-logo-container">

        <img class="bi-img-logo-insurer" src="https://ressources.bloom.bj/images//bloom_insurance_logo.png"
             alt="Logo de bloom insurance">

        <img class="bi-img-logo-insurer"
             src="<?= (isset($data["insurer_info"]["avatar"]) && !empty($data["insurer_info"]["avatar"])) ? $data["insurer_info"]["avatar"] : ""; ?>"
             alt="Logo de l'assureur <?= (isset($data["insurer_info"]["name"]) && !empty($data["insurer_info"]["name"])) ? $data["insurer_info"]["name"] : ""; ?>">

    </div>

    <h1 class="bi-bloom-special-conditions bi-color-primary bi-pt-10px bi-pb-10px bi-text-center bi-fw-700">
        ATTESTATION D’ASSURANCE
    </h1>

    <p class="bi-fw-400">
        Le Soussigné agissant au nom de
    </p>

    <p class="bi-fw-400 bi-color-primary bi-text-center">

        <?= (isset($data["insurer_info"]["name"]) && !empty($data["insurer_info"]["name"])) ? $data["insurer_info"]["name"] : ""; ?>

    </p>

    <p class="bi-fw-400 bi-color-primary bi-text-center">

        <?php

        $insurer_address = "";

        if (isset($data["insurer_info"]["city"]) && !empty($data["insurer_info"]["city"])) {

            $insurer_address .= $data["insurer_info"]["city"];

        }

        if (isset($data["insurer_info"]["zip_code"]) && !empty($data["insurer_info"]["zip_code"])) {

            $insurer_address .= ", " . $data["insurer_info"]["zip_code"];

        }

        if (isset($data["insurer_info"]["street_number"]) && !empty($data["insurer_info"]["street_number"])) {

            $insurer_address .= ", " . $data["insurer_info"]["street_number"];

        }

        echo $insurer_address;

        ?>

    </p>

    <p class="bi-fw-400">
        Atteste que :
    </p>

    <p class="bi-fw-400 bi-color-primary bi-text-center">

        <?php

        $name = "";

        if (isset($data["customer_info"]["social_reason"]) && !empty($data["customer_info"]["social_reason"]) && $data["customer_info"]["social_reason"] == "P") {

            if (isset($data["customer_info"]["first_name"]) && !empty($data["customer_info"]["first_name"])) {

                $name .= $data["customer_info"]["first_name"] . " ";
            }

            if (isset($data["customer_info"]["last_name"]) && !empty($data["customer_info"]["last_name"])) {

                $name .= $data["customer_info"]["last_name"];
            }

        } elseif (isset($data["customer_info"]["social_reason"]) && !empty($data["customer_info"]["social_reason"]) && $data["customer_info"]["social_reason"] == "M") {

            $name .= $data["customer_info"]["name"];

        }

        if (empty($name)) {

            $name = "- - -";
        }

        echo $name;

        ?>

    </p>

    <p class="bi-fw-400 bi-color-primary bi-text-center">

        <?php

        $customer_address = "";

        if (isset($data["customer_info"]["city"]) && !empty($data["customer_info"]["city"])) {

            $customer_address .= $data["customer_info"]["city"];

        }

        if (isset($data["customer_info"]["zip_code"]) && !empty($data["customer_info"]["zip_code"])) {

            $customer_address .= ", " . $data["customer_info"]["zip_code"];

        }

        if (isset($data["customer_info"]["customer_info"]) && !empty($data["customer_info"]["street_number"])) {

            $customer_address .= ", " . $data["customer_info"]["street_number"];

        }

        echo $customer_address;

        ?>

    </p>

    <?php
    if (isset($data['product_name']) && !empty($data['product_name'])) {
        //$product_name_police = AbstractService::slugify($data['product_name']);
        //$page = $data['entete'] . "attestation_products" . DIRECTORY_SEPARATOR . $product_name_police . ".php";
        $product_name_police = "individuelle_accident";
        $page = "attestation_products" . DIRECTORY_SEPARATOR . $product_name_police . ".php";
        include $page;
    }
    ?>

    <p class="bi-fw-400 bi-text-line-height bi-text-justify">
        Dans leurs vies privées et à l’occasion de leurs vies professionnelles, conformément au tableau de garantie
        ci-dessous.
    </p>

    <p class="bi-fw-400 bi-text-line-height bi-text-justify">
        En foi de quoi, la présente attestation lui est délivrée pour servir et valoir ce que de droit.
    </p>

    <p class="bi-fw-400 bi-text-right bi-mt-1rem bi-mb-1rem">

        <?php

        $date_subscription = "";

        if (isset($data["current_date"]) && !empty($data["current_date"])) {

            $date_subscription .= $data["current_date"];

        }

        if (isset($data["current_month"]) && !empty($data["current_month"])) {

            $date_subscription .= " " . $data["current_month"];

        }

        if (isset($data["current_year"]) && !empty($data["current_year"])) {

            $date_subscription .= " " . $data["current_year"];

        }

        ?>

        Fait à Cotonou, le <?= $date_subscription; ?>

    </p>

    <p class="bi-fw-600 bi-text-right bi-mb-1rem">POUR L’ASSUREUR</p>

    <p class="bi-fw-400 bi-text-right bi-mb-1rem">Le Directeur Général de Bloom Insurance pour le compte de Assureur</p>

    <p class="bi-fw-400 bi-text-right bi-mb-1rem">

        <img class="bi-img-logo-manager_stamp"
             src="<?= (isset($data["stamp"]) && !empty($data["stamp"])) ? $data["stamp"] : ""; ?>"
             alt="Logo de l'assureur <?= (isset($data["general_manager"]) && !empty($data["general_manager"])) ? $data["general_manager"] : ""; ?>">

    </p>
    <p class="bi-fw-600 bi-text-right bi-mb-1rem">

        <?= (isset($data["general_manager"]) && !empty($data["general_manager"])) ? $data["general_manager"] : ""; ?>

    </p>

    <div class="bi-page-break"></div>

    <h1 class="bi-bloom-title bi-color-primary bi-text-center bi-fw-700 bi-text-underline">
        TABLEAU DE GARANTIE ET CAPITAUX
    </h1>

    <p class="bi-fw-400 bi-text-line-height bi-text-justify">
        La garantie de l’Assureur s’exerce à concurrence des montants fixés au tableau de garanties :
    </p>

    <table class="bi-table bi-table-responsive bi-mb-1rem">

        <tr>

            <td class="bi-fw-600 bi-table-border">Désignations des garanties</td>

            <td class="bi-fw-600 bi-table-border">Capitaux assurés</td>

            <td class="bi-fw-600 bi-table-border">Franchises</td>

        </tr>

        <tr>

            <td colspan="3" class="bi-fw-600 bi-table-border">Incendie et événements assimilés</td>

        </tr>

        <tr>

            <td class="bi-fw-400 bi-table-border">Bâtiments</td>

            <td class="bi-fw-400 bi-table-border">XX.XXX</td>

            <td class="bi-fw-400 bi-table-border">Néant</td>

        </tr>

        <tr>

            <td class="bi-fw-400 bi-table-border">Bâtiments</td>

            <td class="bi-fw-400 bi-table-border">XX.XXX</td>

            <td class="bi-fw-400 bi-table-border">Néant</td>

        </tr>

        <tr>

            <td class="bi-fw-400 bi-table-border">Bâtiments</td>

            <td class="bi-fw-400 bi-table-border">XX.XXX</td>

            <td class="bi-fw-400 bi-table-border">Néant</td>

        </tr>

        <tr>

            <td class="bi-fw-400 bi-table-border">Bâtiments</td>

            <td class="bi-fw-400 bi-table-border">XX.XXX</td>

            <td class="bi-fw-400 bi-table-border">Néant</td>

        </tr>

        <tr>

            <td class="bi-fw-400 bi-table-border">Bâtiments</td>

            <td class="bi-fw-400 bi-table-border">XX.XXX</td>

            <td class="bi-fw-400 bi-table-border">Néant</td>

        </tr>

        <tr>

            <td class="bi-fw-400 bi-table-border">Bâtiments</td>

            <td class="bi-fw-400 bi-table-border">XX.XXX</td>

            <td class="bi-fw-400 bi-table-border">Néant</td>

        </tr>

        <tr>

            <td class="bi-fw-400 bi-table-border">Bâtiments</td>

            <td class="bi-fw-400 bi-table-border">XX.XXX</td>

            <td class="bi-fw-400 bi-table-border">Néant</td>

        </tr>

        <tr>

            <td class="bi-fw-400 bi-table-border">Bâtiments</td>

            <td class="bi-fw-400 bi-table-border">XX.XXX</td>

            <td class="bi-fw-400 bi-table-border">Néant</td>

        </tr>

        <tr>

            <td class="bi-fw-400 bi-table-border">Bâtiments</td>

            <td class="bi-fw-400 bi-table-border">XX.XXX</td>

            <td class="bi-fw-400 bi-table-border">Néant</td>

        </tr>

    </table>

    <p class="bi-fw-400 bi-text-line-height bi-text-justify">
        Il est précisé que ces montants forment la limite des engagements de l’Assureur pour l’ensemble des dommages
        trouvant leur origine dans une même faute ou cause ou encore dans un même événement.
    </p>

</main>

</body>

</html>