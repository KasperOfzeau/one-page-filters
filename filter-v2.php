<link href="src/filter-v2/style.css" rel="stylesheet">
<body>
    
    <div class="dropdown">
        <button class="dropbtn">Filter</button>
        <div id="myDropdown" class="dropdown-content">
            <fieldset>
                <legend>Categorie</legend>
                <div>
                    <input type="radio" id="overheid" name="category" value="(Semi) Overheid">
                    <label for="overheid">(Semi) Overheid</label>
                </div>
                <div>
                    <input type="radio" id="entertaiment" name="category" value="entertaiment">
                    <label for="entertaiment">Entertaiment</label>
                </div>
                <div>
                    <input type="radio" id="educatie" name="category" value="educatie">
                    <label for="educatie">Educatie</label>
                </div>
                <div>
                    <input type="radio" id="webshop" name="category" value="webshop">
                    <label for="webshop">Webshop</label>
                </div>
            </fieldset>
            <fieldset>
                <legend>Project type</legend>
                <div>
                    <input type="checkbox" id="wordpress" name="wordpress">
                    <label for="wordpress">Wordpress</label>
                </div>
                <div>
                    <input type="checkbox" id="webflow" name="webflow">
                    <label for="webflow">Webflow</label>
                </div>
                <div>
                    <input type="checkbox" id="Design" name="Design">
                    <label for="Design">Design</label>
                </div>
                <div>
                    <input type="checkbox" id="kieswijzer" name="kieswijzer">
                    <label for="kieswijzer">Kieswijzer</label>
                </div>
            </fieldset>
        </div>
    </div>

    <div id="result"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="src/filter-v2/app.js"></script>
</body>