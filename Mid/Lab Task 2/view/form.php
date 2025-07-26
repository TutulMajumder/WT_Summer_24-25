<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bank Management System</title>
    <link rel=stylesheet href="/Mid/Lab Task 2/style.css">
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
                <td><input type="number"></td>
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
                <td><input type="Number"></td>
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


    <style>
        h2 {
            color: #013266;
        }

        h3 {
            color: #013266;
        }

        body {
            background-color: #f0f8ff;
        }

        table {
            background-color: white;
            border: 1px solid;
            padding: 2px;
        }

        .div2 {
            width: 200px;
            height: 65px;
            overflow: auto;
            outline: 1px solid red;
            margin-top: 5px;  

        }
        input[type="Submit"],input[type="Reset"]
        {
            background-color:blue;
            color: white;
            border: none;
            margin-left: 20px;
            margin-bottom: auto;
            margin-top: auto;
            padding: 5px;
        }
    </style>

</html>