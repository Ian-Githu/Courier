<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml-strict.dtd">
<html>
<head>
<title>Admin</title>
</head>
<body>
<form action="light.php" method="post">
<h2>Calculate the price of your order</h2>
<table>
<tr>
    <td>Buyer's Name:</td>
    <td><input type="text" name="name" size="30" /></td>
</tr>
<tr>
    <td>Street Address:</td>
    <td><input type="text" name="address" size="30" /></td>
</tr>
<tr>
    <td>City, State, Zip:</td>
    <td><input type="text" name="location" size="30" /></td>
</tr>
</table>


<table border="4">
<tr>
    <th>Product</th>
    <th>Price</th>
    <th>Quantity</th>
</tr>
<tr>
    <td>Documents (Kgs)</td>
    <td>$2.39</td>
    <td align="center">

  <select size="1" name="fourLight">
    <option selected>0</option>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
    <option>9</option>
    <option>10</option>
  </select>

<!-- commented out input -->
<!--
<input type="text" name="fourLight_other" size="3" />
-->

</td>
</tr>
<tr>
    <td>Parcels (Kgs)</td>
    <td>$4.29</td>
    <td align="center">

  <select size="1" name="eightLight">
    <option selected>0</option>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
    <option>9</option>
    <option>10</option>
  </select>

<!-- commented out input -->
<!--
<input type="text" name="eightLight_other" size="3" />
-->

</td>
</tr>
<tr>
    <td>Sentiments (Kgs)</td>
    <td>$3.95</td>
    <td align="center">

  <select size="1" name="fourLong">
    <option selected>0</option>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
    <option>9</option>
    <option>10</option>
  </select>

<!-- commented out input -->
<!--
<input type="text" name="fourLong_other" size="3" />
-->

</td>
</tr>
<tr>
        <td>Container (Kgs)</td>
        <td>$7.49</td>
        <td align="center">

  <select size="1" name="eightLong">
    <option selected>0</option>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
    <option>9</option>
    <option>10</option>
  </select>

<!-- commented out input -->
<!--
<input type="text" name="eightLong_other" size="3" />
-->

</td>
</tr>
</table>

<input type="submit" value="Submit Order" />
<input type="reset" value="Clear order Form" />
</form>
</body>
</html>
