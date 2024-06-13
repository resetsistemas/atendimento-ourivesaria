<link rel="stylesheet" href="css/header.css">
<script src="scripts/header.js"></script>
<div class='cabecalho'>
    <header>
        <?php $currentPage = basename($_SERVER['PHP_SELF']);
            if ($currentPage == 'atendimento.php'): ?>
                <article class='botoes-atendimento'>
                    <a href='./' class='back-link'><img src='img/back.svg'></a>
                    <button class='btn-limpar' onclick="location.reload()">Limpar</button>
                    <button class='btn-adicionar'id="btnAdicionar">Adicionar</button>
                </article>
            <?php endif;
            if ($currentPage == 'producao.php' || $currentPage == 'pedidos.php'): ?>
                <article class='botoes-atendimento'>
                    <a href='./' class='back-link'><img src='img/back.svg'></a>
                    <button onclick="window.location.href='producao.php'" class="<?php echo ($currentPage == 'producao.php') ? 'btn-ativo' : 'btn-parado'; ?>">Produção</button>
                    <button onclick="window.location.href='pedidos.php'" class="<?php echo ($currentPage == 'pedidos.php') ? 'btn-ativo' : 'btn-parado'; ?>">Pedidos</button>
                </article>
            <?php endif;
        ?>
    </header>
</div>