<!DOCTYPE html>
<html>
  <head>
    <title>Registration</title>
  </head>
  <body>
    <form>
      <table border="1px" style="border-collapse: collapse">
        <tr>
          <td colspan="3">
            <h2 align="center"><b>Registration</b></h2>
          </td>
        </tr>
        <tr>
          <td>Name</td>
          <td><input type="text" name="" value="" placeholder="" /></td>
          <td width="15px"></td>
        </tr>

        <tr>
          <td>Email</td>
          <td><input type="email" name="" value="" /></td>
          <td width="15px"></td>
        </tr>
        <tr>
          <td>Gender</td>
          <td>
            <input type="radio" name="gender" value="" /> Male
            <input type="radio" name="gender" value="" /> Female
            <input type="radio" name="gender" value="" /> Other
            <td width="15px"></td>
          </td>
        </tr>
        <tr>
          <td>Date of Birth</td>
          <td><input type="date" name="" value="" /></td>
          <td width="15px"></td>
        </tr>

        <tr>
          <td>Blood Group</td>
          <td>
            <select name="">
              <option value="">A+</option>
              <option value="">A-</option>
              <option value="">O+</option>
              <option value="">O-</option>
              <option value="">B+</option>
              <option value="">B-</option>
              <option value="">AB+</option>
              <option value="">AB-</option>
            </select>
          </td>
          <td width="15px"></td>
        </tr>
        <tr>
          <td>Degree</td>
          <td>
            <input type="checkbox" name="" /> SSC
            <input type="checkbox" name="" /> HSC
            <input type="checkbox" name="" /> BSc.
            <input type="checkbox" name="" /> MSc.
          </td>
        <tr>
          <td align="right" colspan="3">
            <input type="submit" name="" value="Submit" />
            <input type="reset" name="" value="Reset" />
            <input type="Save" name="" value="Save" />
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>