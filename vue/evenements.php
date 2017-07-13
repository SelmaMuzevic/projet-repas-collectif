
<!DOCTYPE html>

<html>
    <head>
        <title>Create Evenement</title>
        <link rel="stylesheet" href="" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
        <style>
            .event{
    
    margin-top: 70px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    border: 1px solid grey;
    border-radius: 50px;
    background-color: #996600;
}
        </style>    
    </head>
    <body class="container">
        <div class="event">
        <header class="row">
        <h1 id="title" class="col-sm-6 col-sm-offset-4">Create Evenemets</h1>
        </header>
       
            <form method ="POST" action="affiche-evenements.php">
            
            <div class="form-group">
            <div class="col-sm-4 col-sm-offset-3">
            <label for="nom">Nom :</label>
            <input class="form-control" type="text" name="nom" id="nom" required/><br />
            </div>
            </div>
            
            <div class="form-group">
            <div class="col-sm-4 col-sm-offset-3">
            <label for="type">Type :</label>
            <input class="form-control" type="text" name="type" id="type" required/><br />
            </div>
            </div>
            
            <div class="form-group">
            <div class="col-sm-4 col-sm-offset-3">
            <label for="dateTime">La Date :</label>
            <input class="form-control" type="text" name="dateTime" id="dateTime" required/><br />
            </div>
            </div>
            
            <div class="form-group">
            <div class="col-sm-4 col-sm-offset-3">
            <label for="lieu">Le Lieu :</label>
            <input class="form-control" type="text" name="lieu" id="lieu" required/><br />
            </div>
            </div>
            
            <div class="form-group">
            <div class="col-sm-4 col-sm-offset-3">
            <label for="adresse">Adresse :</label>
            <input class="form-control" type="text" name="adresse" id="adresse" required/><br />
            </div>
            </div>
            
            <input type="submit" name="valider" value="Valider">
        </form>
        </div>
    </body>
</html>




