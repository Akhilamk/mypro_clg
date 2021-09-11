@extends('headfoot') @section('content')
<div class="bg-img">
    <form method="POST" name="staffreg" onsubmit="return registration()" class="container" style="border: solid; width: 600px; background-color: rgb(248, 246, 242);">
        <h4 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><u> Register Here</u></h4>
        <table cellpadding="5">
            <tr>
                <td style="width: 40%;">
                    <label for="first Name">First Name :</label>
                    <input type="text" name="firstname" placeholder="First Name" style="width: 100%;">
                    <p id="firsterror"></p>
                </td>
                <td style="width: 40%;"> <label for="first Name">Last Name :</label>
                    <input type="text" name="lastname" placeholder="Last Name " style="width: 100%;">
                    <p id="lasterror"></p>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <label for="user">Username :</label>
                    <input type="text" name="user" placeholder="Username" style="width: 100%;">
                    <p id="usererror"></p>

                </td>
            </tr>
            <tr>
                <td style="width: 40%;">
                    <label for="first Name">Password:</label>
                    <input type="password" name="pass" placeholder="Password" style="width: 100%;">
                    <p id="passerror"></p>
                </td>
                <td style="width: 40%;"> <label for="first Name">Confirm Password :</label><br>
                    <input type="password" name="cpass" placeholder="Confirm Password" style="width: 100%;">
                    <p id="conerror"></p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="email">Email :</label>
                    <input type="text" name="email" placeholder="Email" id="mailid" style="width: 100%;">
                    <p id="emailerror"></p>
                </td>
            </tr>

            <tr>
                <td style="width: 40%">
                    <label for="mobile">Conatct Number :</label>
                    <input type="number" name="number" placeholder="Mobile Number" style="width: 100%;">
                    <p id="numerror"></p>
                </td>
                <td style="width: 40%;">
                    <label for="email">DOB:</label>
                    <input type="date" name="dob" style="width: 100%;">
                    <p id="doberror"></p>
                </td>
            </tr>



            <tr>
                <td style="width: 40%">
                    <label for="gender">Gender :</label>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label>&nbsp;&nbsp;&nbsp;
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="male">Female</label><br>
                    <p id="generror"></p>

                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="address">Address :</label><br>
                    <textarea name="address" id="address" cols="40" rows="4"></textarea>
                    <p id="adderror"></p>
                </td>
            </tr>
            <tr>
                <td style="width: 40%;">
                    <label for="Qualification">Qualification :</label><br>
                    <input type="text" name="quali" placeholder="Qualification" style="width: 100%;">
                    <p id="qualierror"></p>
                </td>
                <td style="width: 40%;">
                    <label for="position">Position you are applying for:</label>
                    <select name="post" style="width: 100%;">
                    <option value="Assistant Professor">Assistant Professor</option>
                    <option value="Head Of Department">Head Of Department</option>  
                  </select>
                    <p id="posterror"></p>
                </td>
            </tr>
            <tr>
                <td style="width: 40%;">
                    <label for="exp">Year of  Experience :</label><br>
                    <input type="text" name="exp" placeholder="Experience" style="width: 100%;">
                    <p id="experror"></p>
                </td>
            </tr>

            <tr>
                <td style="width: 40%;">
                    <label for="exampleFormControlFile1">Profile :</label>
                    <img src="{{url('images/staicon.png')}}" alt="" width="50px"><br>
                    <input type="file" class="form-control-file" name="profile" id="exampleFormControlFile1" width="100%">
                    <p id="proerror"></p>
                </td>

            </tr>
            <tr>
                <td><button id="register" class="btn btn-primary">Register</button></td>
            </tr>
        </table>
    </form>
</div>
<script>
    function registration() {
        ////////////firstname validation/////////////
        rt = true;
        firstname = document.forms["staffreg"]["firstname"].value
        if (firstname == "") {
            document.getElementById("firsterror").innerHTML = " *Enter FirstName"
            document.forms["staffreg"]["firstname"].focus
            rt = false;

        } else if (/[^a-z]/gi.test(firstname)) {
            document.getElementById('firsterror').innerHTML = "*Enter alphabets Only!"
            document.forms["staffreg"]["firstname"].focus
            rt = false
        }
        ////////////lastname validation/////////////
        lastname = document.forms["staffreg"]["lastname"].value
        if (lastname == "") {
            document.getElementById("lasterror").innerHTML = " *Enter LastName"
            document.forms["staffreg"]["lastname"].focus
            rt = false;
        } else if (/[^a-z]/gi.test(lastname)) {
            document.getElementById('lasterror').innerHTML = " *Enter alphabets Only!"
            document.forms["staffreg"]["lastname"].focus
            rt = false
        }
        ////////////username validation/////////////
        user = document.forms["staffreg"]["user"].value
        if  (user  ==  null  ||  user  ==  "")  {
            document.getElementById('usererror').innerHTML = "*Please Enter the Username!"
            document.forms["staffreg"]["user"].focus
            rt = false
        } else if ((user.length < 5) || (user.length > 15)) {
            document.getElementById('usererror').innerHTML = " *Username must have 5-15 characters"
            document.forms["staffreg"]["user"].focus
            rt = false
        }
        ////////////password validation/////////////
        pass1 = document.forms["staffreg"]["pass"].value
        pass2 = document.forms["staffreg"]["cpass"].value
        if (pass1 == "") {
            document.getElementById('passerror').innerHTML = "*Enter the Password"
            document.forms["staffreg"]["pass"].focus
            rt = false
        } else if (pass1.length <= 5 || pass1.length >= 21) {
            document.getElementById('passerror').innerHTML = "*Must contain 6 to 20 characters"
            document.forms["staffreg"]["pass"].focus
            rt = false
        } else if (pass1 != pass2) {
            document.getElementById('passerror').innerHTML = ""
            document.getElementById('conerror').innerHTML = "* Enter the valid Password"
            document.forms["staffreg"]["cpass"].focus
            rt = false
        }
        ////////////Email validation/////////////
        var emailPat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        var email = document.getElementById('mailid').value;
        var matchArray = email.match(emailPat);
        if (email == "") {
            document.getElementById('emailerror').innerHTML = "*Enter the Email Id"
            document.forms["staffreg"]["email"].focus
            rt = false
        } else if (matchArray == null) {
            document.getElementById('emailerror').innerHTML = "*Incorrect Email Id !Enter a valid Email Id"
            document.forms["staffreg"]["email"].focus
            rt = false
        }
        ////////////mobile validation//////////
        number = document.forms["staffreg"]["number"].value
        if (number == "") {
            document.getElementById('numerror').innerHTML = "*Enter the Number"
            document.forms["staffreg"]["number"].focus
            rt = false
        } else if (number.length != 10) {
            document.getElementById('numerror').innerHTML = "*Incorrect number"
            document.forms["staffreg"]["number"].focus
            rt = false
        } else if (isNaN(number)) {
            document.getElementById('numerror').innerHTML = "*Enter valid Mobile Number"
            document.forms["staffreg"]["number"].focus
            rt = false
        }
        ////////////dob validation//////////
        dob = document.forms["staffreg"]["dob"].value
        if (dob == "") {
            document.getElementById('doberror').innerHTML = "*Fill this field"
            document.forms["staffreg"]["dob"].focus
            rt = false
        }
        ////////////gender validation//////////
        gender = document.forms["staffreg"]["gender"].value
        if (gender == "") {
            document.getElementById('generror').innerHTML = "*"
            document.forms["staffreg"]["gender"].focus
            rt = false
        }
        ////////////address validation//////////
        address = document.forms["staffreg"]["address"].value
        if (address == "") {
            document.getElementById('adderror').innerHTML = "Enter the address"
            document.forms["staffreg"]["address"].focus
            rt = false
        }
        ////////////qualification validation//////////
        quali = document.forms["staffreg"]["quali"].value
        if (quali == "") {
            document.getElementById('qualierror').innerHTML = "Required Qualification"
            document.forms["staffreg"]["quali"].focus
            rt = false
        }

        /////////exp validation//////////
        exp = document.forms["staffreg"]["exp"].value
        if (exp == "") {
            document.getElementById('experror').innerHTML = "Fill this field"
            document.forms["staffreg"]["exp"].focus
            rt = false
        }
        /////////profile validation//////////
        profile = document.forms["staffreg"]["profile"].value
        if (profile == "") {
            document.getElementById('proerror').innerHTML = "upload photo"
            document.forms["staffreg"]["profile"].focus
            rt = false
        }
        return rt
    }
</script>

@endsection