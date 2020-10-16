<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="javascript/validate.js"></script>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=number], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=email], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>Contact Form</h3>

<div class="container">
  <form action="memberlistP.php" method="post" onsubmit="validate();">
  

    <label for="name">Name</label>
    <input type="text" name="name" placeholder="Your name.." required>

    <label for="number">Mobile Number</label>
    <input type="number" name="phone" placeholder="Your Mobile Number..." required>

    <label for="email">Email</label>
    <input type="email" name="email" placeholder="Your Email..." required>

    <label for="service">Service</label>
    <select id="service" name="service">
      <option value="plumber">plumber</option>
      <option value="carpenter">Carpenter</option>
      <option value="salon">Salon</option>
      <option value="electrician">Electrician</option>
    </select>

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
      <option value="india">India</option>
    </select>

   <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
