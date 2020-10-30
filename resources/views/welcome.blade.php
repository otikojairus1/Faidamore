<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test UI</title>

        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@700&display=swap" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/app.css">
        
        <!-- Styles -->
       
    </head>
    <body>
        <div class="container-fluid row s">
            <div class=" col-md-2">
                <div class="logo">Health-OK</div>
                <div class="button-task">Create new Task <i class="fas fa-user-plus ml-1"></i> </div>

                <div class="options"><i class="fas fa-columns mr-3 blue active"></i>Dashboard</div>
                <div class="options"><i class="fas fa-ambulance  mr-3 blue"></i>Ambulance</div>
                <div class="options"><i class="fas fa-user-nurse mr-3 blue"></i>Doctors</div>
                <div class="options"><i class="fas fa-tablets mr-3 blue"></i>Medicine</div>
                <div class="options"><i class="fas fa-user-md mr-3 blue"></i>Prescriptions</div>
                <div class="options"><i class="fas fa-briefcase-medical mr-3 blue"></i>Emergency</div>
                <div class="options"><i class="fas fa-cogs mr-3 blue"></i>Settings</div>

                <div class="cards">
                    <img src={{ asset('/images/work1.png') }} class="w-100 image1" alt="">
                </div>
                

            </div>

           







            <div class="col-md-10"> 
                <nav class="nav-container">
                    <div class="input-container">
                        <i class="fas fa-search"></i>
                        <input type="text" class="no-outline" placeholder="search ambulance... doctors... and medicine.... ">
                    </div>
                    <div class="user">
                        <div class="usertext">Welcome John Mumo, <i class="fas fa-user-tie usericon"></i> <i class="fas fa-bell usericon"></i> </div>
                    </div>
                </nav>


                <div class="content">
                    <div class="tabscontainer">
                        <div class="tabs">
                            <div class="avatar"><i class="fas fa-ambulance red ml-3 mt-3"></i></div>
                            <div class="numbers">443</div>
                            <div class="title">Ambulance</div>
                        </div>
    
                        <div class="tabs">
                            <div class="avatar"><i class="fas fa-user-md blue ml-3 mt-3"></i></div>
                            <div class="numbers">1036</div>
                            <div class="title">Doctors & Staff</div>
                        </div>
    
                        <div class="tabs">
                            <div class="avatar"><i class="fas fa-wallet orange ml-3 mt-3"></i></div>
                            <div class="numbers">10000</div>
                            <div class="title">AvG Treat. costs </div>
                        </div>
    
                        <div class="tabs">
                            <div class="avatar"><i class="fas fa-book-reader green ml-3 mt-3"></i></div>
                            <div class="numbers">33443</div>
                            <div class="title">Tasks Completed</div>
                        </div>

                    </div>

                    <div class="section2">
                        <div class="card1">
                           <div class="d-flex">
                                <div class="">
                                    <div class="graphtext mt-2 ml-5">Tasks Completion including ambulance pickup on time</div>
                                    <img src="{{ asset('/images/chart.png') }} " class="image2" alt="">
                                </div>
                        
                                <div class="graphtext mt-2 ml-5">sort by months
                            
                                </div>
                            </div>

                            <i class="far fa-thumbs-up thumb"></i>
                            

                        </div>
                        <div class="card2">dd</div>
                    </div>
                    


                    
                </div>
                

            </div>
        </div>



    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/02bf4b4086.js" crossorigin="anonymous"></script>
</html>
