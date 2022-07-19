<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Error Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
        ::-webkit-scrollbar {
            width: 20px;
        }
        /* Track */
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 10px;
        }
        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #b7472a;
            border-radius: 10px;
        }
        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #b7472a;
        }
    </style>
    </head>


    <body>
        <div class="d-flex align-items-center justify-content-center vh-100">
            <div class="text-center">
                <h1 class="display-1 fw-bold">Manager <span class="text-danger">!</span></h1>
                <p class="fs-3"> <span class="text-danger">Opps!</span> Page not found.</p>
                <p class="lead">
                    The page you’re looking for not allowed for you
                  </p>

                <a href="/assoc_profile/{{$assoc_id->id}}" class=" fw-bold d-block mt-3" style="color: #b7472a">Or Back Accpciation Profile</a>

            </div>
        </div>
    </body>


</html>