<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/scroll.css">
    <link rel="stylesheet" href="css/tabela.css">
    <link rel="stylesheet" href="css/produto.css">

    <script src="https://kit.fontawesome.com/9bb6c30290.js" crossorigin="anonymous"></script>
    <title>SystemGrill - Produto</title>
</head>

<body>
    <header id="header">
        <nav>
            <div class="container">
                <div class="mobile-menu">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>

                <ul class="nav-list">
                    <li class="links">
                        <a href="/principal.php">Início</a>
                    </li class="links">

                    <li class="links">
                        <a href="/mesas.php">Mesa</a>
                    </li>

                    <li class="links">
                        <a href="/produto.php">Produto</a>
                    </li>

                    <li class="links">
                        <a href="/cardapio.php">Cardápio</a>
                    </li>

                    <li class="links">
                        <a href="/categoria.php">Categoria</a>
                    </li>

                    <li class="links">
                        <a href="/pagamento.php">Pagamento</a>
                    </li>

                    <li class="links">
                        <a href="/usuario.php">Usuário</a>
                    </li>

                    <li class="links">
                        <a href="/relatorio.php">Relatório</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section class="banner">
            <div class="container">
                <img src="/image/banner.webp" alt="">
            </div>
        </section>

        <section class="produto">
            <div class="container">
                <div class="titulo">
                    <span>-</span>
                    <h2>produto</h2>
                    <span>-</span>
                </div>
                <!--titulo-->

                <div class="botoes-menu-produto">
                    <div class="botoes-menu-produto">
                        <a href="/incluir-produto.php" class="btn-menu-produto">Incluir</a>
                        <a href="/consultar-produto.php" class="btn-menu-produto">Consultar</a>
                    </div>
                </div>

                <form id="produto" action="produtocadastroAction.php" method='post'>
                    <fieldset>
                        <legend>Incluir</legend>
                        <div class="input-block">
                            <label for="">Nome*</label>
                            <input name="txtNome">
                        </div>

                        <div class="input-block">
                            <label for="">Categoria*</label>
                            <input name="txtCat">
                        </div>

                        <div class="input-block">
                            <label for="">Fornecedor*</label>
                            <input name="txtFornecedor">
                        </div>

                        <div class="input-block">
                            <label for="">Validade*</label>
                            <input name="txtValidade">
                        </div>

                        <div class="input-block">
                            <button type="submit">Incluir</button>
                        </div>
                    </fieldset>

                </form>
            </div>
            <!--container-->
        </section>
    </main>

    <footer>
        <div class="texto-footer">
            <p>&copy; 2022</p>
            <p>SystemGrill</p>
            <p>ETEC - Desenvolvimento de Sistemas</p>
        </div>
    </footer>

    <i class="fa-solid fa-arrow-up" onclick="backToTop()" id="back-to-top"></i>

    <script src="js/jquery-min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/menu.js"></script>
</body>
</html>