<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this page show inserting</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<form method="post" action="insertbiosuccessm.php">
        <p>

            <label>รหัสผู้ใช้</label>
            <input type="text" name="mid" id="mid">

        </p>
        <p>

            <label>ชื่อ</label>
            <input type="text" name="mname" id="mname">

        </p>

        <p>

            <label>นามสกุล</label>

            <input type="text" name="mlastname" id="mlastname">

        </p>

        <p>

            <label>ที่อยู่</label>

            <input type="text" name="address" id="address">

        </p>

        <p>

            <label>เบอร์โทร</label>

            <input type="text" name="telephone" id="telephone">

        </p>
        <input id="bun"type="submit" value="บันทึก">
        
    </form>
    <a href='mainmember.php'><button> Main member menu</button></a>

</body>
</html>