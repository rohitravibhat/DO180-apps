<html>

<head>

    <meta charset="utf-8">

    <title>Temperature Converter - Program by BITS</title>

</head>

<body>

    <h2 style="text-align:center; color:blue;">Program by BITS</h2>

    <form name="form1" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        <table border="0" cellpadding="5" cellspacing="0" align="center">

            <tr>

                <td>Enter the temperature to convert:</td>

                <td><input type="text" name="temp" id="temp" size="10" required></td>

            </tr>

            <tr>

                <td>Convert to:</td>

                <td>

                    <select name="scale" id="scale" required>

                        <option value="" disabled selected>Select the scale</option>

                        <option value="c">Celsius</option>

                        <option value="f">Fahrenheit</option>

                    </select>

                </td>

            </tr>

            <tr>

                <td><input type="submit" name="btnConvert" id="btnConvert" value="Convert"></td>

                <td><input type="reset" name="btnReset" id="btnReset" value="Reset"></td>

            </tr>

        </table>

    </form>

</body>

</html>
