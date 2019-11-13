<!DOCTYPE html>
<html lang="en">
<head>
  <title>Création</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 
</head>
<body>
    <div class="container py-3">        
        <div class="jumbotron text-center ">
        <form action="store.php" method="post">
            <legend class="text-center">nouvel etudiant</legend>  </div>   
                
                <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input type="firstname" class="form-control" id="firstname" placeholder="First Name goese here" name="firstname">
                            </div>
                        </div>
               
                            
                                <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="lastname">Last Name</label>
                                        <input type="lastname" class="form-control" id="lastaname" placeholder="Last Name goese here" name="lastname">
                             </div>
                                </div>  
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" placeholder="Email goese here" name="email">
                                     </div>
                                        </div>
                                   
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                    <label for="phone">Phone</label>
                                                    <input type="phone" class="form-control" id="phone" placeholder="Phone Number goese here" name="phone">
                                     </div>
                                        </div>
                                            </div>
                <button class="btn btn-success">valider</button>
            <button type="reset" class="btn btn-success">annuler</button>
            </form>    
        </div>
    

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </div>
</body>
</html>