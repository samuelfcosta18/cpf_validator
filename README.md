<h1 align="center"><a href="https://git.io/typing-svg"><img src="https://readme-typing-svg.demolab.com?font=Fira+Code&pause=1000&color=BD4AF7&width=435&lines=CPF+Validator+in+PHP" alt="Typing SVG" /></a></h1>

This PHP script validates CPF numbers by checking if they follow the correct structure and if the check digits are valid. The CPF can be entered with or without formatting (dots and dashes).

The script performs the following steps to validate the CPF:

- <b>CPF Cleanup</b>: Removes all non-numeric characters, such as dots and dashes.
- <b>Structure Validation</b>: Verifies if the CPF has exactly 11 numeric digits, checks if it is not in a "blacklist" of known invalid CPFs, and ensures it is not a repetitive sequence (e.g., "111.111.111-11").
- <b>Check Digits Calculation</b>:
    * <b>First digit</b>: Calculated from the first 9 digits of the CPF. The calculation formula takes into account the multiplication of the digits by a decreasing factor from 10 to 2, and the resulting sum is divided by 11 to determine the first check digit.
    * <b>Second digit</b>: Similar to the first one, but considers the first 10 digits and calculates the second check digit.

If any of the calculated digits do not match the digits provided in the CPF, the script returns "CPF inválido."

<h2> How to Use:</h2>
<ul>
   <li>Open the terminal and navigate to the directory where the PHP file is located.</li>
  <br>
  <li> Execute the PHP script with the following command: </li>
      php validator.php
      <br>
  <li>The script will prompt you to enter the CPF to be validated. Enter the CPF with or without formatting (e.g., 123.456.789-10 or 12345678910).</li>
  </ul>

<h1> Contributing</h1>
Feel free to suggest improvements, report issues, or open issues if you encounter any errors or want to add new features to the project.
