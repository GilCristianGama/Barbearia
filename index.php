    <?php

// Header
include_once "paginas/includes/header.php";

    if (isset($_GET['pg'])) {
        $paginas = $_GET['pg'];

        switch ($paginas) {

            case 'inicio':
                include "paginas/inicio.php";
                break;

            case 'produtos':
                include "paginas/produtos.php";
                break;

            case 'servicos':
                include "paginas/servicos.php";
                break;

            case 'postifolio':
                include "paginas/postifolio.php";
                break;

            default:
                echo "pagina não Definida";
                break;
        }
    } else {
        echo "pagina não Definida";

    } 

// Footer
include_once "paginas/includes/footer.php";

    ?>

    


































