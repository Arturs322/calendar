<!DOCTYPE html>

<html>
<style>
    h1 {text-align: center;}
    form {background-image: url('https://cdn.arstechnica.net/wp-content/uploads/2020/08/Google-Messaging-mess-800x400.jpg');}
    form {text-align: center}
    form {background-repeat: no-repeat;}
    form  {background-attachment: fixed;}
    form {background-size: cover;}
    body {font-size: 30px}
    body{font-style: italic}
    input {font-size: 30px}
</style>
<body style="background-color:#5499C7;">

<h1>Welcome, here you can set an appointment!</h1>
<form method="post" style="background-color: #1F618D">
    <label for="title"><b>Title:</b></label><br>
    <input type="text" id="title" name="title"><br><br>
    <label for="from"><b>From:</b></label><br>
    <input type="text" id="from" name="from"><br>
    <label for="to"><b>To:</b></label><br>
    <input type="text" id="to" name="to"><br><br>
    <label for="description"><b>Description:</b></label><br>
    <input type="text" id="description" name="description"><br><br>
    <label for="address"><b>Address:</b></label><br>
    <input type="text" id="address" name="address"><br><br>
    <p> <b> You can choose what calendar to use: Google, Yahoo, Outlook or ICall </b> </p>
    <label for="link"><b>Choose a calendar:</b></label><br>
    <input type="text" id="link" name="link"><br><br>
    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>