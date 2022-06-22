
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CRONOS B</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/owl.carousel.min.css" rel="stylesheet">
    <link href="css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Cargando...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
@include('componentes.navbar')
            <!-- Navbar End -->
            <!-- Sidebar Start -->
            @include('componentes.sidebar')
            <!-- Sidebar End -->
            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                        <table class="table table-striped table-hover">
                <tr class="success">
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>TIEMPO</th>
                    <th>NUMERO DE MESA</th>
                    <th>CANTIDAD DE CLIENTES</th>
                    <th>ACCIONES</th>
                </tr>
                @foreach($users as $user)
                <tr>
                    <td>
                        {{ $user->nombre }}
                    </td>
                    <td>
                    {{ $user->apellido }}
                    </td>
                    <td>
                    <div id="temporizador">
10
</div>
                    {{ $user->correo }}
                    </td>
                    <td>
                    {{ $user->mesas }}
                    </td>
                    <td>
                    {{ $user->clientes }}
                    </td>
               
            
                <td>
                <form  action="{{ route('users.destroy', $user->id) }}" method="POST">
             
                     @csrf
                     @method('DELETE')
                   <button class="btn btn-danger"> Eliminar </button>
               </form>
                </td>
                @endforeach
                </tr>  
            </table>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <center><button type="button" class="btn btn-primary ms-2">Agregar</button>
            <!-- Form End -->


            <!-- Footer Start -->
            @include('componentes.footer')
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script>
        function Temporizador(id, inicio, final){
            this.id = id;
            this.inicio = inicio;
            this.final = final;
            this.contador = this.inicio;
            this.conteoSegundos = function(){
                if (this.contador == this.final){
                    this.conteoSegundos = null;
                    return;
                }
                document.getElementById('temporizador').innerHTML = this.contador--;
                setTimeout(() => {
                    
                }, timeout);
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="resources/cronnos/js/chart.min.js"></script>
    <script src="js/easing.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/moment-timezone.min.js"></script>
    <script src="js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
