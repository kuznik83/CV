<?php ?>

<head>
    <meta charset="utf-8">
    <title>Generator CV</title>
    <link href="css/my_style.css" rel="stylesheet">
    <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
</head>
<body>
    <form method="post" action="cv.php">
        <fieldset>
            <legend>Personal Information</legend>
            <div id="info">
            <input type="text" name="firstname" placeholder="First Name" pattern="[a-zA-Z]{2,20}" required/>
            <input type="text" name="lastname" placeholder="Last Name" pattern="[a-zA-Z]{2,20}" required/>
            <input type="email" name="email" placeholder="Email" pattern="[A-Za-z0-9]+@[a-zA-Z]+\.+[a-z]{2,6}" required/>
            <input type="tel" name="phone" placeholder="Phone Number" pattern="(\+?\d[- ]*){7,13}" required/>
            </div>
            <label>Female</label><input type="radio" value="woman" name="gender" />
            <label>Male</label><input type="radio" value="man" name="gender" /></br>
            <label>Birth Date</label><br>
            <input type="date" name="birth" placeholder="dd/mm/yyyy" pattern="(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d" required/><br>
            <label>Nationality</label><br>
            <select name="nationality">
                <option value="Bulgarian" selected>Bulgarian</option>
                <option value="Ukrainian">Ukrainian</option>
                <option value="Pole">Pole</option>
            </select>
        </fieldset>
        <fieldset>
            <legend>Last Work Position</legend>
            <label>Company Name </label><input type="text" name="company" pattern="[a-zA-Z0-9\s]{2,20}" required/><br>
            <label>From </label><input type="date" name="from" placeholder="dd/mm/yyyy" pattern="(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d" required/><br>
            <label>To </label><input type="date" name="to" placeholder="dd/mm/yyyy" pattern="(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d" required/>
        </fieldset>
        <fieldset>
            <legend>Computer Skills</legend>
            <label>Programming Languages</label>

            <div id="prlang">
                <input type="text" name="programlang[]"/><select name="level[]">
                    <option value="Beginner" selected>Beginner</option>
                    <option value="Junior">Junior</option>
                    <option value="Senior">Senior</option>
                </select><br>

                <button type="button" id="removePrLang">Remove Languages</button>
                <button type="button" id="addPrLang">Add Languages</button>
            </div>
        </fieldset>
        <fieldset>
            <legend>Other Skills</legend>
            <label>Languages</label><br>
            <div id="lang">
                <input type="text" name="languages[]"/><select name="comprehension[]">
                    <option disabled selected >-Comprehension-</option>
                    <option value="Beginner">Beginner</option>
                    <option value="Intermediate">Intermediate</option>
                    <option value="Advanced">Advanced</option>
                    <option value="Proficiency">Proficiency</option>
                </select><select name="reading[]">
                    <option disabled selected>-Reading-</option>
                    <option value="Beginner">Beginner</option>
                    <option value="Intermediate">Intermediate</option>
                    <option value="Advanced">Advanced</option>
                    <option value="Proficiency">Proficiency</option>
                </select><select name="writing[]">
                    <option disabled selected>-Writing-</option>
                    <option value="Beginner">Beginner</option>
                    <option value="Intermediate">Intermediate</option>
                    <option value="Advanced">Advanced</option>
                    <option value="Proficiency">Proficiency</option>
                </select>

                <button type="button" id="removeLang">Remove Languages</button>
                <button type="button" id="addLang">Add Languages</button>
                <br>
            </div>
            <label>Driver's License</label><br>
            <label>B</label><input type="checkbox" value="B" name="B"/>
            <label>A</label><input type="checkbox" value="A" name="A"/>
            <label>C</label><input type="checkbox" value="C" name="C"/>
        </fieldset>
        <button type="submit" >Generate CV</button>
    </form>
</body>
