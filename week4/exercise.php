<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week4: Loops</title>
    <!-- CSS -->
    <style>
        body{
            background-color: #efefef;
            font-family: sans-serif;
        }
        main{
            text-align: center;
        }
        .table-block{
            background: #ffffff;
            border-radius: 5px;
            margin: 0 auto;
            width: max-content;
            padding: 15px 30px;
        }
        h1{
            margin: 0px 0 10px 0;
        }
        table{
            border-collapse: collapse;
            width: 100%;
        }
        table th, table td{
            text-align: left;
            padding: 5px 10px;
            border: solid 1px #d3d3d3;
        }
        table th{
            background-color: #ececec;
        }
        .text-center{
            text-align: center
        }
        td .open-popup{
            font-size: 28px;
            background: #36dc3d;
            display: flex;
            border-radius: 20px;
            width: 30px;
            height: 30px;
            align-items: center;
            justify-content: center;
            color: #003d02;
            cursor: pointer;
        }
        td .open-popup:hover{
            background: #14c81b;
            color: #012102;
            transition: all 0.3s;
        }

        #popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 30px 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            width: 50%;
            border-radius: 5px;
        }
        #popup .popup-content {
            margin-bottom: 15px 10px;
        }
        #popup .close-btn {
            cursor: pointer;
            color: red;
            position: absolute;
            top: -3px;
            right: 5px;
            font-size: 34px;
            transform: rotate(45deg);
        }
        #popup .close-btn:hover{
            color: #d30101;
        }
        #overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
    </style>
</head>
<body>
    <?php
        // Function to fetch user data from the JSONPlaceholder API
        function getUsers() {
        $url = "https://jsonplaceholder.typicode.com/users";
        $data = file_get_contents($url);
        return json_decode($data, true);
        }
        // Get the list of users
        $users = getUsers();

        if(!empty($users)){
            echo "<div class='table-block'><h1>Week4: Loops</h1><table><thead><tr><th>SN</th><th>Name</th><th>Email</th><th>Action</th></tr></thead><tbody>";
            $sn = 1;
            foreach($users as $user){
                echo "<tr><td>". $sn ."</td><td>". $user['name'] ."</td><td>". $user['email'] ."</td><td class='text-center'><span class='popup-trigger open-popup' data-id=".$user['id'].">+</span></td><tr>";
                $sn++;
            }
            echo "</tbody></table></div>";
        }
    ?>

    <div id="overlay"></div>
    <div id="popup">
        <span class="close-btn" onclick="closePopup()">+</span>
        <div class="popup-content">
            <table>
                <tbody>
                    <tr>
                        <td><strong>Name:</strong></td>
                        <td><span id="user-name"></span></td>
                    </tr>
                    <tr>
                        <td><strong>Email:</strong></td>
                        <td><span id="user-email"></span></td>
                    </tr>
                    <tr>
                        <td><strong>Username:</strong></td>
                        <td><span id="username"></span></td>
                    </tr>
                    <tr>
                        <td><strong>Phone:</strong></td>
                        <td><span id="user-phone"></span></td>
                    </tr>
                    <tr>
                        <td><strong>Website:</strong></td>
                        <td><span id="user-website"></span></td>
                    </tr>
                    <tr>
                        <td><strong>Address:</strong></td>
                        <td><span id="user-address"></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        // Get users data array to a JS variable
        const users = <?php echo json_encode($users); ?>;

        // Open the popup with user data
        document.querySelectorAll('.popup-trigger').forEach(function(element) {
            element.addEventListener('click', function() {
                const userId = this.getAttribute('data-id');

                // Find the user by ID from the users array
                const user = users.find(u => u.id == userId);

                var userAdrAs = user.address;
                var userAddress = userAdrAs.street + ', ' + userAdrAs.suite + ', ' + userAdrAs.city + ', ' + userAdrAs.zipcode;

                // Update the popup content
                document.getElementById('user-name').textContent = user.name;
                document.getElementById('user-email').textContent = user.email;
                document.getElementById('username').textContent = user.username;
                document.getElementById('user-phone').textContent = user.phone;
                document.getElementById('user-website').textContent = user.website;
                document.getElementById('user-address').textContent = userAddress;

                // Show the popup
                document.getElementById('popup').style.display = 'block';
                document.getElementById('overlay').style.display = 'block';
            });
        });

        // Close the popup
        function closePopup() {
            document.getElementById('popup').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
        }
    </script>

</body>
</html>