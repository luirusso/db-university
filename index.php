<?php 
require_once __DIR__ . '/partials/scripts/database.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css' integrity='sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==' crossorigin='anonymous'/>
    <title>Document</title>
</head>
<body>
    

    <main class="container">
        <h1 class="mb-4">Departments Archive</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        Website
                    </th>
                    <th>
                        Active
                    </th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </main>
</body>
</html>