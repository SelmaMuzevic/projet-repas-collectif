
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
                
    border-radius: 40px;
    height: 40%;
    width: 40%;  
    padding: 50px;   
    margin: auto;
    display: flex;
    flex-direction: column;
    justify-content: center;
    border: 1px solid grey;
    background-color: lightyellow;
}

.container{
    margin-top: 100px;
    background-color: lightgrey;
}
        </style>    
    </head>
    <body class="container">
        <div class="event">
        <header class="row">
        <h1 id="title" class="col-sm-6 col-sm-offset-4">Creation D'evenement: </h1>
        </header>
           
            <form method ="POST" action="choix-events.php">
      
            <div class="form-group">
            <div class="col-sm-4 col-sm-offset-3">
            <label for="nom">Nom d'evenement:</label>
            <input class="form-control" type="text" name="nom" id="nom" required/><br />
            </div>
            </div>
            
            <div class="form-group">
            <div class="col-sm-4 col-sm-offset-3">
            <label>Date :</label>
            <input class="form-control" type="date" name="date" id="date" required/><br />            
            </div>
            </div>
            
            <div class="form-group">
            <div class="col-sm-4 col-sm-offset-3">
            <label>Heure de debut :</label>
            <input class="form-control" type="time"  name="usr_time" id="time"><br />                    
            </div>
            </div>
                
            <div class="form-group">
            <div class="col-sm-4 col-sm-offset-3">
            <label>Heure de fin :</label>
            <input class="form-control" type="time" name="usr_time" id="time"><br />                    
            </div>
            </div>
            
            <div class="form-group">
            <div class="col-sm-4 col-sm-offset-3">
            <label for="lieu">Le Lieu / Adresse:</label>
            <input class="form-control" type="text" name="lieu" id="lieu" required/><br />
            </div>
            </div>
            
            <div class="form-group">
            <div class="col-sm-4 col-sm-offset-3">
            <textarea class="form-control" name="textarea" rows="10" cols="40" 
                      placeholder ="Petite description"></textarea><br />           
            </div>
            </div>
           
            <input type="submit" name="creer" value="Creer">
            <input type="submit" name="annuler" value="Annuler">
                     
        </form>
        </div>
    </body>
</html>




