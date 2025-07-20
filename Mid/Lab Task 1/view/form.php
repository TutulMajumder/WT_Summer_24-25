<!DOCTYPE html>
<html>
<title>This is registration form</title>

<body>
    <center style="color: blue;">
        <h1>AIUB</h1>
        <h2>Registration Form</h2>

    </center>

    <h3 align="left">Complete the Registration</h1>

        <table>
            <tr>
                <td>
                    Full Name: </td>
                <td><input type="text"></td>
            </tr>

            <tr>
                <td>
                    Email: </td>
                <td><input type="email"></td>
            </tr>

            <tr>
                <td>
                    Pasword: </td>
                <td><input type="password"></td>
            </tr>

            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="gender">Male
                    <input type="radio" name="gender">Other
                </td>
            </tr>

            <tr>
                <td>Language Known:</td>
                <td>
                    <input type="checkbox">English
                    <input type="checkbox">Bangla
                    <input type="checkbox">Hindi
                </td>
            </tr>

            <tr>
                <td>Country:</td>
                <td><select>
                        <option value="">--Select--
                        <option value="">Bangladesh
                        <option value="">Japan
                        <option value="">Usa
                    </select></td>
            </tr>

            <tr>
                <td> Date of Birth</td>
                <td><input type="date"></td>
            </tr>



            <tr>
                <td> Upload Photo:</td>
                <td><input type="file"></td>
            </tr>

            <tr>
                <td>
                    Comments:
                </td>
                <td><textarea rows="5" cols="50">
                </textarea></td>
            </tr>

        </table>
        <input type="Submit" value="Register">

</body>

</html>