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

                    <nav class="menu">
                        <ul>
                            <li><a <?php if ($currentPage === 'index.php#inicio') echo 'class="active"'; ?> href="index.php#inicio">Início</a></li>
                            <li><a <?php if ($currentPage === 'index.php#jogos') echo 'class="active"'; ?> href="index.php#jogos">Jogos</a></li>
                            <li><a <?php if ($currentPage === 'index.php#final') echo 'class="active"'; ?> href="index.php#final">Como Jogar</a></li>
                            <li><a <?php if ($currentPage === 'index.php#comentario') echo 'class="active"'; ?> href="index.php#comentario">Comentários</a></li>
                            <li><a <?php if ($currentPage === 'entre_em_contato.php#contato') echo 'class="active"'; ?> href="entre_em_contato.php#contato">Entre em Contato</a></li>
                        </ul>
                    </nav>
                </div> <!--Menu-Desktop-->
            </div> <!--Flex-->
        </div> <!--Interface-->
    </div><!--Container-Header-->
</header>
