<!DOCTYPE html>
<html lang="en">

<head>

    <title>Donation Website</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <script src="../JS/validation.js"></script>
</head>

<body>
    <div>
        <h3 id="heading">Donor Information</h3>
        <form onsubmit="return validateForm(event)">
            <label>First Name</label>
            <br>
            <input type="text" id="fname">
            <br>
            <label>Last Name</label>
            <br>
            <input type="text" id="lname">
            <br>
            <label>Address</label>
            <br>
            <input type="text" id="address">
            <br>
            <label>City</label>
            <br>
            <input type="text" id="city">
            <br>
            <label>State</label>
            <br>
            <select id="state">
                <option >Select a State</option>
                <option>Perth</option>
            </select>
            <br>
            <label>Phone</label>
            <br>
            <input type="text" id="phone">
            <br>
            <label>Email</label>
            <br>
            <input type="email" id="email">
            <br>
            <label>Create Password (min 8 characters)</label>
            <br>
            <input type="password" id="pass">
            <br>
            <label>Confirm Password</label>
            <br>
            <input type="password" id="cpass">
            <br>
            <label>Donation Amount</label>
            <br>
            <input type="radio" name="Damount">None
            <input type="radio" name="Damount">500 BDT
            <input type="radio" name="Damount">1000 BDT
            <input type="radio" name="Damount">2000 BDT
            <input type="radio" name="Damount">3000 BDT
            <input type="radio" name="Damount">Other
            <br>
            <label>Other Amount</label>
            <br>
            <input type="text" id="oamount">
            <br>
            <input type="checkbox" id="cbox1">
            <label>I am Interested in giving on a regular basis</label>
            <br>
            <h3 id="label1">Additional Information</h3>
            
            <input type="checkbox" id="cbox2">
            <label>I would like my gift to remain anonymous</label>
            <br>
            <input type="checkbox" id="cbox3">
            <label>My employer offers a matching gift program</label>
            <br>
            <input type="checkbox" id="cbox4">
            <label>Please don't send a thank you letter</label>
            <br>
            <label>Comments</label>
            <br>
            <textarea rows=3 cols=63></textarea>
            <br>
            <button type="submit">Submit</button>
            <button type="reset">reset</button>
            
        </form>
    </div>
</body>

</html>