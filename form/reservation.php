<?php include('../lib/constantes.php')?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>HOSTAL RIO AMAZONAS</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
    <div class="row">
        <div class="col-sm-1"><?php include('../Menu.php');?></div>
        <div class="col-sm-11">
     <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
          </div>
          <div class="form-group col-md-6">
            <label for="Name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Name">
          </div>
        </div>
        <div class="form-group">
          <label for="inputState">Source Region</label>(Europe, USA, Asia, Africa u South America),
            <select id="sourceregion" class="form-control">
              <option selected>Choose...</option>
              <option>Europe</option>
              <option>USA</option>
              <option>Asia</option>
              <option>Africa</option>
              <option>South America</option>
            </select>
        </div>
        <div class="form-group">
          <label for="lenguage">Lenguage</label>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="lenguage">
            <label class="form-check-label" for="gridCheck">
              Lenguage
            </label>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control">
              <option selected>Choose...</option>
              <option>...</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip">
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
      </form>
    </div>
    </div>
</html>