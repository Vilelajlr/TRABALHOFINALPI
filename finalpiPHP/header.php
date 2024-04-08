<header>
    <div class="container-header">
        <div class="interface">
            <div class="flex">
                <div class="logo">
                    <a href="index.php">
                        <h1>OnGames.com</h1>
                    </a>
                </div> <!--Logo-->

                <div class="menu-desktop">

                    <button class="btn-menu">
                        <span class="icon">
                            <svg viewBox="0 0 175 80" width="40" height="40">
                                <rect width="80" height="15" fill="#f0f0f0" rx="10"></rect>
                                <rect y="30" width="80" height="15" fill="#f0f0f0" rx="10"></rect>
                                <rect y="60" width="80" height="15" fill="#f0f0f0" rx="10"></rect>
                            </svg>
                        </span>
                        <span class="text">MENU</span>
                    </button>

                    <?php
                        // Verificar se está definido um valor para o array $_SERVER['REQUEST_URI']
                        $currentPage = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';

                        // Função para adicionar classe 'active' ao link da página atual
                        function isActive($url) {
                            global $currentPage;
                            echo $currentPage;
                            if ($currentPage === $url) {
                                echo 'active';
                            }
                        }
                    ?>

                    <nav class="menu">
                        <ul>
                            <li><a href="#inicio" class="<?php isActive('#inicio'); ?>">Início</a></li>
                            <li><a href="#jogos" class="<?php isActive('#jogos'); ?>">Jogos</a></li>
                            <li><a href="#final" class="<?php isActive('#final'); ?>">Como Jogar</a></li>
                            <li><a href="entre_em_contato.php" class="<?php isActive('entre_em_contato.php'); ?>">Entre em Contato</a></li>
                        </ul>
                    </nav>
                </div> <!--Menu-Desktop-->
            </div> <!--Flex-->
        </div> <!--Interface-->
    </div><!--Container-Header-->
</header>
