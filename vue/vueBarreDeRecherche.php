<!-- barre de recherche avec suggestion -->
<footer>
    <div style="width: 100%;">
        <form action="./?action=affichage" class="d-flex flex-column" method="POST">
            <input type="text" id="mot" name="mot" placeholder="&#128269 Recherche" class="barreDeRecherche">
            
            <div style="background-color: white; width: 100%;">
                <div id="suggestionsContainer" class="suggestions-container" style="display: block;"></div>
            </div>

            <button type="submit" class="btnRechercher">Rechercher</button>
        </form>
        <script src="modele/suggestion.js"></script>
    </div>
</footer>
