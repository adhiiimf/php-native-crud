<!DOCTYPE html>
<html>
<head>
<title>YoiMapren</title>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="style/main.css">
<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<style>
    .abc{
        font-size:50px;
    }
    .jam {
        font-size: 4em;
        background-color: bdc3c747;
        border-radius: 5px;
        padding: auto;
     }
     .btn-ins{
        transition: all 0.5s;
        cursor: pointer;
     }
     .btn-ins span{
        display: inline-block;
        position: relative;
        transition: 0.8s;
     }
     .btn-ins span:after{
        position: absolute;
        opacity: 0;
        top: 0;
        top: ;: -20px;
        transition: 0.5s;
    }
    .btn-ins:hover span{
        padding-right: 20px;
     }
    .btn-ins:hover span:after {
        opacity: 1;
        right: 0;}
</style>
<body class="container-fluid bg-dark text-light" style="background-image: url('style/img/bck.jpg');
    background-position: center;background-blend-mode: overlay;">
    <h1 class="text-center">YoiMapren CRUD</h1>
    <div class=" btn-group-lg btn-group text-center justify-content-center modal-dialog-centered">    
    <a href="insert.php" class="button btn-danger btn btn-ins"><span>INSERT</span></a>  
    <a href="view.php" class="button btn-danger btn btn-ins"><span>EDIT</span></a> 
    <a href="only-view.php" class="button btn-danger btn btn-ins"><span>VIEW</span></a> 
    </div>
    <div class="text-center text-uppercase form-text jam">
    </div>
</body>
<script type="text/javascript">
    //https://www.dumetschool.com/blog/cara-membuat-jam-digital-dengan-javascript
    function jam() {
    var time = new Date(),
        hours = time.getHours(),
        minutes = time.getMinutes(),
        seconds = time.getSeconds();
    document.querySelectorAll('.jam')[0].innerHTML = harold(hours) + ":" + harold(minutes) + ":" + harold(seconds);
      
    function harold(standIn) {
        if (standIn < 10) {
          standIn = '0' + standIn
        }
        return standIn;
        }
    }
    setInterval(jam, 1000);
</script>
</html>