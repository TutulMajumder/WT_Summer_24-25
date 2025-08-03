<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bank Management System</title>
    <link rel=stylesheet href="..\Css\Style.css">
</head>

<body>
    <center>
        <h2>Bank Management System</h2>
        <h3>Your Trusted Financial Partner</h3>
    </center>

    <h4 align="left">Customer Registration Form</h4>

    <div class="div1">
        <table>
            <tr>
                <td>Full Name:</td>
                <td><input type="text"></td>
            </tr>

            <tr>
                <td>Date of Birth:</td>
                <td><input type="date"></td>
            </tr>

            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="gender">Male
                    <input type="radio" name="gender">Female
                    <input type="radio" name="gender">Other
                </td>
            </tr>
            <tr>
                <td>Marital Status:</td>
                <td><select>
                        <option value="">Single
                        <option value="">Married
                    </select></td>
            </tr>
            <tr>
                <td>Account Type:</td>
                <td><select>
                        <option value="">Savings
                        <option value="">Student
                    </select></td>
            </tr>

            <tr>
                <td>Initial Deposit Amount:</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Mobile Number</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Email Address:</td>
                <td><input type="email"></td>
            </tr>

            <tr>
                <td>Address:</td>
                <td><textarea>
                </textarea></td>
            </tr>

            <tr>
                <td>Occupation:</td>
                <td><input type="text"></td>
            </tr>

            <tr>
                <td>National ID (NID):</td>
                <td><input type="text"></td>
            </tr>

            <tr>
                <td>Set Password:</td>
                <td><input type="password"></td>
            </tr>

            <tr>
                <td> Upload ID Proof:</td>
                <td><input type="file"></td>
            </tr>
            <tr>
                <td><input type="checkbox" id="terms"></td>
                <td><label for="terms">I agree to the terms and conditions</label></td>
            </tr>
            <tr>
                <td><input type="Submit" value="Register">
                    <input type="Reset" value="Clear">
                </td>
            </tr>

        </table>

    </div>

    <div class="div2">
        <p>This is a demo text to show how overflow works in a small container with a</p>
    </div>
</body>




</html>