<?php include 'head.php'; ?>
    <link rel="stylesheet" href="css/atendimento.css">
    <?php include 'conexao.php'; ?>
</head>
    <body>
        <?php include 'header.php'; ?>
        <main>
            <form class='painel' id='pedidoForm' method='POST' enctype="multipart/form-data" action="upload-pedido.php">
                <p>
                    <label for='cliente'>Nome do cliente</label>
                    <input class='dados-atendimento' type='text' id='cliente' name='cliente' placeholder='Digite o nome do cliente' required>
                </p>
                <p>
                    <label for='whatsapp'>Whatsapp</label>
                    <input class='dados-atendimento' type='tel' id='whatsapp' name='whatsapp' placeholder='(27) 99999 - 9999' required>
                </p>
                <p>
                    <label for='atendente'>Nome do atendende</label>
                    <select class='dados-atendimento' id='atendente' name='atendente' required>
                        <option value='' disabled selected>Selecione o atendente...</option>
                        <option value='Sheila'>Sheila</option>
                        <option value='Sônia'>Sônia</option>
                        <option value='Pedro'>Pedro</option>
                    <!-- Adicione mais opções conforme necessário -->
                    </select>
                </p>
                <p class='checkbox'>
                        <label class='box-servico' for="checkboxServico">Serviço<input type="checkbox" id="checkboxServico" name="checkbox" value="Serviço" checked></label>
                        <label class='box-alianca' for="checkboxAlianca">Aliança<input type="checkbox" id="checkboxAlianca" name="checkbox" value="Aliança"></label>
                        <label classe='box-pingente' for="checkboxPingente">Pingente<input type="checkbox" id="checkboxPingente" name="checkbox" value="Pingente"></label>
                        <label class='box-pulseira' for="checkboxPulseira">Pulseira<input type="checkbox" id="checkboxPulseira" name="checkbox" value="Pulseira"></label>
                        <label class='box-brinco' for="checkboxBrinco">Brinco<input type="checkbox" id="checkboxBrinco" name="checkbox" value="Brinco"></label>
                        <label class='box-cordao' for="checkboxCordao">Cordão<input type="checkbox" id="checkboxCordao" name="checkbox" value="Cordão"></label>
                </p>
                <div id="container-checkbox-atendimento"></div>
                <script src="scripts/atendimento.js"></script>
                <p>
                    <label for='descricao'>Descrição do pedido</label>
                    <textarea class='dados-atendimento' type='text' id='descricao' name='descricao' placeholder='Descreva o pedido do cliente' required></textarea>
                </p>
                <p>
                    <label for='dt_entrega'>Previsão de entrega</label>
                    <input class='dados-atendimento' type='date' id='dt_entrega' name='dt_entrega' required>
                </p>
                <p>
                    <label for='preco'>Preço</label>
                    <input class='dados-atendimento' type='number' id='preco' name='preco' placeholder='R$ 0,00' required step='0.01'>
                </p>
                <p>
                    <label for='info_adicionais'>Informações adicionais</label>
                    <textarea class='dados-atendimento' type='text' id='info_adicionais' name='info_adicionais' placeholder='Digite as informações adicionais'></textarea>
                </p>
                <p>
                    <label for='imagens'>Imagens</label>
                    <input class='dados-atendimento' type='file' id='imagens' name='imagens' placeholder=''>
                </p>
                <button type="submit" id="hiddenSubmit" style="display:none;">Submit</button>
            </form>
        </main>
        <?php include 'footer.php'; ?>
        <script src="scripts/pegar-pedido.js"></script>
    </body>
</html>