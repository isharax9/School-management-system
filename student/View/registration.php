<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <style media="screen">
    #error_messege {
      color: green;
      font-weight: bold;
    }
  </style> 
  <script src="../Script/regval.js"></script>
</head>

<body>
  <form class="" action="../Controller/regCheck.php" onsubmit="return val()" method="post">
    <fieldset>
      <td width="270px">REGESTRATION</legend>
      <table align="center"> 

        <tr>
          <td>Name</td>
          <td>:<input type="text" id="name" name="name" placeholder="Enter Full Name"></td>
         
        </tr>

        <tr>
          <td>Email</td>
          <td>:<input type="email" id="email" name="email" value=""></td>
        </tr>

        <tr>
          <td>Mobile No</td>
          <td>:<input type="number" id="mobile" name="mobile" value=""></td>
        </tr>

        <tr>
          <td>Id</td>
          <td>:<input type="number" id="id" name="id" value=""></td>
        </tr>

        <tr>
          <td>Password</td>
          <td>:<input type="password" id="password" name="password" value=""></td>
        </tr>

        <tr>
          <td>Confirm Password</td>
          <td>:<input type="password" id="confirm" name="confirm" value=""></td>
        </tr>

        <tr>
          <td>Gender</td>
          <td>
            :<input type="radio" id="gender" name="gender" value="male">Male
            <input type="radio" id="gender" name="gender" value="female">Female
            <input type="radio" id="gender"  name="gender" value="other">Other
          </td>
        </tr>

        <tr>
          <td>Date of Birth</td>
          <td>:<input type="date" id="dob" name="dob" value=""></td>
        </tr>

        <tr>
          <td>Present Address</td>
          <td>:<input type="text" id="paddress"  name="paddress" value=""></td>
        </tr>

        <tr>
          <td>Class</td>
          <td>:<select id="classs"  name="class">
              <option value="Six">Six</option>
              <option value="Seven">Seven</option>
              <option value="Eight">Eight</option>
              <option value="Nine">Nine</option>
              <option value="Ten">Ten</option>
            </select>
          </td>
        </tr>

        <tr>
          <td>Section</td>
          <td>:<select id="section"  name="section">
              <option value="A">A</option>
              <option value="B">B</option>
            </select>
          </td>
        </tr>

        <tr>
          <td>Roll No</td>
          <td>:<input type="number" id="roll"  name="roll" value=""></td>
        </tr>
        <tr>
          <td colspan="2">
            <center>
              <div id="error_messege">
              </div>
            </center>
          </td>
        </tr>
      </table>
      <hr>
      <center>
        <input type="submit" name="submit" value="Submit">
        <input type="reset" name="reset" value="Reset">
      </center>
    </fieldset>
  </form>
  </td>
  </tr>
  </table>
</body>

</html>