
        

<?php

$id = $_GET["id"];
$sname = "localhost";
$username = "root";
$pass = "";
$dbname = "sdacprac";



$conn = mysqli_connect( $sname, $username, $pass, $dbname);
if(!$conn ){
    echo "not connected".mysqli_connect_error();
}



$sql= "SELECT * FROM `usersquery` WHERE `id` = $id";
$result = mysqli_query($conn,$sql);
$rows = mysqli_fetch_assoc($result);




mysqli_close($conn);
?>
     

     <!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>

            <div class="container-fluid bg-light "
            style="max-width: 700px;
                   max-height: 800px;

                       ">
                       <br>
                <center><h1 style="color:rgb(37, 7, 7);">User Querry From</h1></center>


              
                <form action="update.php" method="post"  style="border: 5;
                                        border-color: black; 
                                        border-radius: 5;        
                                        margin: 5; 
                                        padding: 30; " >
                    <div class="mb-3">
                        <br><br>

                        <div class="mb-3">
                            <label class="visually-hidden" for="inputName"
                                >Id</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                name="id"
                                id="inputName"
                                placeholder=""
                                value='<?php echo "{$rows['id']}"; ?>'
                            />
                        </div>
                        
                        <label for="" class="form-label">Name</label>
                        <input
                            type="text"
                            class="form-control"
                            name="uname"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                            value='<?php echo "{$rows['name']}"; ?>'
                        />
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input
                            type="email"
                            class="form-control"
                            name="uemail"
                            id=""
                            aria-describedby="emailHelpId"
                            placeholder="abc@mail.com"
                            value='<?php echo "{$rows['email']}"; ?>'
                        />
                        
                    </div>

               

                    <div class="mb-3">
                        <label for="" class="form-label">User Querry</label>
                        <input
                        type="text"
                        class="form-control"
                        name="uquerry"
                        id=""
                        placeholder=""
                        value='<?php echo "{$rows['querry']}"; ?>'
                    />

                    </div>
                                      
                <button
                    type="submit"
                    class="btn btn-primary"
                    
                >
                    Submit
                </button>
                <br>
                <br>
                </form>
                
            </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
