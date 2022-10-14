<body>
        <select name="type" id="type">
            <option style="display:none" value="">Kies een type</option>
            <option value="Wordpress">Wordpress</option>
            <option value="UX/UI Design">UX/UI Design</option>
            <option value="Design">Design</option>
        </select>
        <select name="branche" id="branche">
            <option style="display:none" value="">Kies een branche</option>
            <option value="(Semi) Overheid">(Semi) Overheid</option>
            <option value="Entertaiment">Entertaiment</option>
        </select>
        <select name="size" id="size">
            <option style="display:none" value="">Kies een bedrijfsgrootte</option>
            <option value="11-25">11-25 medewerkers</option>
            <option value="100+">100+ medewerkers</option>
        </select>
    <button>Zoeken</button>

    <div id="result"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="src/filter-v3/app.js"></script>
</body>
