<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Entry</title>
</head>
<body>
    <form action="processing-data.php" method="post">
        <fieldset>
            <legend>Academic Information</legend>
            <label for="degree">Degree:</label>
            <select name="degree" id="degree">
                <option value="Bachelor of Science in Computer Science">Bachelor of Science in Computer Science</option>
                <option value="Bachelor of Science in Information Technology">Bachelor of Science in Information Technology</option>
                <option value="Bachelor of Science in Game Development">Bachelor of Science in Game Development</option>
                <option value="Masters in Computer Science">Masters in Computer Science</option>
                <option value="Masters in Business Administration">Masters in Business Administration</option>
            </select><br>
            <label for="student-id">Student ID:</label>
            <input type="text" name="student-id" id="student-id"><br>
            <label for="classes">Classes attended:</label>
            <select name="classes[]" id="classes" multiple>
                <option value="Automata">Automata</option>
                <option value="Discrete Math">Discrete Math</option>
                <option value="Data Structures">Data Structures</option>
                <option value="Web Development">Web Development</option>
                <option value="Mobile Development">Mobile Development</option>
            </select>
        </fieldset>

        <fieldset>
            <legend>Personal Details</legend>
            <label for="first-name">First Name:</label>
            <input type="text" name="first-name" id="first-name"><br>
            <label for="last-name">Last Name:</label>
            <input type="text" name="last-name" id="last-name"><br>
            <label for="dob">Date of Birth: </label>
            <input type="date" name="dob"><br>
            <label for="gender">Gender: </label>
            <input type="radio" id="male" name="gender" value="Male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="Female">
            <label for="female">Female</label><br>
            <label for="email">Email: </label>
            <input type="email" name="email">
        </fieldset><br>

        <input type="checkbox" id="checkbox1" name="checkbox1">
        <label for="checkbox1"> I agree to receive email and content about this site periodically</label><br>
        <input type="checkbox" id="checkbox2" name="checkbox2">
        <label for="checkbox2"> I don't want to receive anything from your site</label><br><br>

        <textarea name="terms" id="terms" placeholder="TERMS AND CONDITIONS..." rows="4" cols="30"></textarea><br><br>

        <button name="button" type="submit" value="Send Form">Send Form</button>
        <button name="button" type="reset" value="Clear Form">Clear Form</button>
    </form>
</body>
</html>