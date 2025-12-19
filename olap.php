<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Adventure Work</title>

    <!-- Custom fonts for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.3/css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/styleGraph.css">
    
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            display: fix;
            flex-direction: column;
        }
        #wrapper {
            flex: 1;
            display: flex;
            flex-direction: row; /* Sidebar dan konten sejajar horizontal */
        }
        #content-wrapper {
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        iframe {
            width: 100%;
            height: calc(80vh - 80px); /* Kurangi untuk header dan footer */
            border: none;
        }
        .sticky-footer {
            height: 60px;
        }
        .sidebar {
            min-width: 250px; /* Lebar minimum sidebar */
            max-width: 250px;
            background-color: #f8f9fc; /* Warna sidebar */
        }
        .content {
            flex: 1;
            padding: 20px;
        }
    </style>
</head>

<body id="page-top">

<?php 
//data barchart
include 'data5.php';
include 'data6.php';

$data5 = json_decode($data5, TRUE);
$data6 = json_decode($data6, TRUE);
?>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "sidebar.php";?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content">
    <div class="container-fluid pt-4"> <p class="highcharts-description">
            Berikut merupakan tampilan OLAP yang di integrasikan dengan Mondrian.
        </p>
        
        <br>

        <h5 class="font-weight-bold text-dark">OLAP WHSAKILA</h5>
        <ul style="line-height: 1.8;"> <li><a href="http://localhost:8080/mondrian/testpage.jsp?query=sakila" target="mondrian">OLAP Data Warehouse Sakila</a></li>
            <li><a href="http://localhost:8080/mondrian/testpage.jsp?query=adw1" target="mondrian">OLAP Data Warehouse ADW1</a></li>
            <li><a href="http://localhost:8080/mondrian/testpage.jsp?query=adw2" target="mondrian">OLAP Data Warehouse ADW2</a></li>
            <li><a href="http://localhost:8080/mondrian/testpage.jsp?query=adventure" target="mondrian">OLAP Data Adventure</a></li>
            <li><a href="http://localhost:8080/mondrian/testpage.jsp?query=dvdrental" target="mondrian">OLAP DVD RENTAL</a></li>
            <li><a href="http://localhost:7474" target="_blank">Neo4j Browser - Sakila Graph Database</a></li>
        </ul>

        <br>
        
        <div class="card shadow mb-4">
            <div class="card-body p-0">
                <iframe name="mondrian" src="http://localhost:8080/mondrian/index.html" style="width: 100%; height: 600px; border: none;"></iframe>
            </div>
        </div>
        
    </div>
    </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Dashboard DWO Kelompok 11</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.3/js/sb-admin-2.min.js"></script>


</body>

</html>