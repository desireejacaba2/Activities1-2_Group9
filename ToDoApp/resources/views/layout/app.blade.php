
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale-1.0">
<title>ToDoApp</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
<script src="//unpkg.com/alpinejs" defer></script>
</head>
<body>
<style>
    label {
        font-size: 20px;
        font-weight: bold;
        padding-bottom: 10px;
        padding-top: 20px;
    }

    .heading {
        background-color: #2C7865; 
        text-align: center;
        color: white; 
        padding: 10px
    }

    .contain {
        margin: auto;
        width: 500px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        padding: 20px;
        background-color: #BBE2EC;
        border-radius: 10px;
    }
    
    .dash-header{
       color: #2C7865;
       font-weight: bold;
       text-align: center;
       margin-top: 20px;
    }

    .table{
        background-color: #0A6847; 
        color: #ffffff;
        margin-top: 25px;  
    }
    
    .table-heading {
    background-color: #114232 !important;
    text-align: center;
    }

    .btn-dark {
        background-color: #2C7865;
        border-color: #2C7865;
    }

    .btn-dark:hover {
        background-color: #135D66 !important;
        border-color: #135D66 !important;
    }

    .btn-primary {
        background-color: #0D9276;
        border-color: #0D9276;
    }

    .btn-primary:hover {
        background-color: #03AED2;
        border-color: #03AED2;
    }

    .alert-success {
        background-color: #E6DD3B;
        border-color: #E6DD3B;
        color: #627254;
    }

    .lower-btn{
        background-color: #114232; 
        color: #ffff; 
        border-color: #114232; 
        font-weight: bold;
        margin-bottom: 20px;
    }

    .lower-btn:hover{
        background-color: #FFC436 !important ; 
        color: #12372A !important; 
        border-color: #FFC436 !important; 
    }

    
</style>

@yield ('content')

</body>
</html>
