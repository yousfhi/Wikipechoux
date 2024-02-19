<?php

if ($motsAssocies && is_array($motsAssocies) && !empty($motsAssocies)) {
    echo '<div>';
    echo '<h3>Résultats de la comparaison des mots associés :</h3>';
    echo '<ul>';

    // Préparer la requête SQL à l'extérieur de la boucle
    $sql = "SELECT DISTINCT mot_associe_mot_principal.libelle AS mot_associe_mot_principal, mot_associe_autre.libelle AS mot_associe_autre
            FROM (
                SELECT DISTINCT mot2.libelle
                FROM mot AS mot1
                JOIN proverbes AS assoc1 ON mot1.id = assoc1.id
                JOIN mot AS mot2 ON assoc1.id = mot2.id
                WHERE mot1.libelle LIKE CONCAT('%', :mot_associe, '%')
            ) AS mot_associe_mot_principal
            JOIN (
                SELECT DISTINCT mot2.libelle
                FROM mot AS mot1
                JOIN proverbes AS assoc1 ON mot1.id = assoc1.id
                JOIN mot AS mot2 ON assoc1.id_mot = mot2.id
            ) AS mot_associe_autre ON 1=1"; // On utilise ON 1=1 pour éviter la condition de jointure, car on veut comparer tous les mots associés

    $stmt = Connexion::getInstance()->prepare($sql);

    foreach ($motsAssocies as $motAssocie) {
        // Exécuter la requête SQL pour chaque mot principal
        $stmt->bindValue(':mot_associe', $motAssocie->getLibelle(), PDO::PARAM_STR);
        $stmt->execute();

        // Afficher les résultats de la comparaison
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<li>Le mot "' . $motAssocie->getLibelle() . '" est associé à "' . $row['mot_associe_autre'] . '"</li>';
        }
    }

    echo '</ul>';
    echo '</div>';
} else {
    echo '<div>Aucun mot associé trouvé.</div>';
}
