<?php

if (isset($data["customer_info"]["social_reason"]) && !empty($data["customer_info"]["social_reason"]) && $data["customer_info"]["social_reason"] == "P") {

    ?>

    <p class="bi-fw-400 bi-text-line-height bi-text-justify">

        Est assurée auprès de notre la compagnie d’assurance

        <span class="bi-fw-600">

            <?= (isset($data["insurer_info"]["name"]) && !empty($data["insurer_info"]["name"])) ? $data["insurer_info"]["name"] : "Assureur"; ?>

        </span>

        par la Police d’Assurance

        <span class="bi-fw-600">

            <?= (isset($data["product_name"]) && !empty($data["product_name"])) ? $data["product_name"] : "Nom du produit"; ?>

        </span>

        N°

        <span class="bi-fw-600">

            <?= (isset($data["policy_number"]) && !empty($data["policy_number"])) ? $data["policy_number"] : "Numéro de police"; ?>

        </span>

        , pour la période allant du

        <span class="bi-fw-600">

            <?= (isset($data["start_date"]) && !empty($data["start_date"])) ? $data["start_date"] : "Date d’effet"; ?>

        </span>

        au

        <span class="bi-fw-600">

            <?= (isset($data["end_date"]) && !empty($data["end_date"])) ? $data["end_date"] : "Date d’échéance"; ?>

        </span>

        contre les risques suivant :

    </p>

    <?php

} else if (isset($data["customer_info"]["social_reason"]) && !empty($data["customer_info"]["social_reason"]) && $data["customer_info"]["social_reason"] == "M") {

    ?>

    <p class="bi-fw-400 bi-text-line-height bi-text-justify">
        A assuré auprès de notre la compagnie d’assurance

        <span class="bi-fw-600">

            <?= (isset($data["insurer_info"]["name"]) && !empty($data["insurer_info"]["name"])) ? $data["insurer_info"]["name"] : "Assureur"; ?>

        </span>

        par la Police d’Assurance


        <span class="bi-fw-600">

            <?= (isset($data["product_name"]) && !empty($data["product_name"])) ? $data["product_name"] : "Nom du produit"; ?>

        </span>

        N°

        <span class="bi-fw-600">

            <?= (isset($data["policy_number"]) && !empty($data["policy_number"])) ? $data["policy_number"] : "Numéro de police"; ?>

        </span>

        ,

        <span class="bi-fw-600">

            <?= (isset($data["risk_info"]["insured_persons"]) && !empty($data["risk_info"]["insured_persons"])) ? $data["risk_info"]["insured_persons"] : "Nombre de personnes assurées"; ?>

        </span>

        de personne assuré de ses employés, pour la période allant du

        <span class="bi-fw-600">

            <?= (isset($data["start_date"]) && !empty($data["start_date"])) ? $data["start_date"] : "Date d’effet"; ?>

        </span>

        au

        <span class="bi-fw-600">

            <?= (isset($data["end_date"]) && !empty($data["end_date"])) ? $data["end_date"] : "Date d’échéance"; ?>

        </span>

        contre les risques suivant :

    </p>

    <?php
}

?>

<?php

if (isset($data["guarantees_info"]) && !empty($data["guarantees_info"])) {

    ?>

    <ul class="bi-product-details">

        <?php

        foreach ($data["guarantees_info"] as $guarantee_info) {

            ?>

            <li>

                <?= (isset($guarantee_info["label"]) && !empty($guarantee_info["label"])) ? $guarantee_info["label"] : ""; ?>

            </li>

            <?php

        }

        ?>

    </ul>

    <?php

}

?>
