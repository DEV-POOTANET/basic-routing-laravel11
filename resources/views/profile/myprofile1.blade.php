<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .profile-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 350px;
            text-align: center;
        }

        .profile-header {
            background-color: {{$FavoriteColor}};
            color: white;
            padding: 20px;
        }

        .profile-header img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            border: 5px solid #fff;
            margin-bottom: 10px;
        }

        .profile-body {
            padding: 20px;
            text-align: left;
        }

        .profile-body h2 {
            margin: 0;
            text-align: center;
        }

        .profile-body p {
            color: #666;
        }

        .profile-body .detail-item {
            margin: 10px 0;
        }

        .profile-footer {
            background-color: #f4f4f4;
            padding: 10px;
        }

        .profile-footer a {
            text-decoration: none;
            color:{{$FavoriteColor}};
            margin: 0 10px;
        }
       
    </style>
</head>

<body>

    <div class="profile-container">
        <div class="profile-header">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOuxrvcNMfGLh73uKP1QqYpKoCB0JLXiBMvA&s"
                alt="Profile Picture">
            <h2>John Doe</h2>
        </div>
        <div class="profile-body">
            <div class="detail-item">
                <strong>ID:</strong> {{$ID}}
            </div>
            <div class="detail-item">
                <strong>Full Name:</strong> {{$Fullname}}
            </div>
            <div class="detail-item">
                <strong>University:</strong> {{$University}}
            </div>
            <div class="detail-item">
                <strong>Major:</strong> {{$Major}}
            </div>
            <div class="detail-item">
                <strong>Favorite Color:</strong> {{$FavoriteColor}}
            </div>

            <div class="detail-item">
                <strong>Favorite Hobby:</strong> {{$FavoriteHobby}}
            </div>

            <p>Hi! I'm {{$Fullname}};, a Programmer Develop programs in various languages. ++I love coding,
                learning new technologies, and sharing my knowledge with others.</p>
        </div>
        <div class="profile-footer">
            <a href="mailto:john.doe@example.com">Email</a>
            <a href="https://www.linkedin.com/in/johndoe" target="_blank">LinkedIn</a>
            <a href="https://github.com/johndoe" target="_blank">GitHub</a>
        </div>
    </div>

</body>

</html>
