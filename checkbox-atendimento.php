<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['checkbox'])) {
        $checkbox = $_GET['checkbox'];

        if ($checkbox === 'checkboxServico') {
            echo '';
        } elseif ($checkbox === 'checkboxAlianca') {
            echo "  <section class='alianca'>
                        <div class='alianca-1'>
                            <h3>Aliança 1</h3>
                            <p class='contador' style='display: none;'>
                                <label for='contador'>Contador</label>
                                <select class='dados-atendimento-section' name='contador'>
                                    <option id='contador' value='1'>1</option>
                                </select>
                            </p>
                            <p>
                                <label for='tipo-metal'>Metal</label>
                                <select class='dados-atendimento-section' id='tipo-metal' name='tipo-metal' required>
                                    <option value='Ouro'>Ouro</option>
                                    <option value='Prata'>Prata</option>
                                    <!-- Adicione mais opções conforme necessário -->
                                </select>
                            </p>
                            <p>
                                <label for='tipo-alianca'>Tipo</label>
                                <select class='dados-atendimento-section' id='tipo-alianca' name='tipo-alianca' required>
                                    <option value='' disabled selected>Selecione o tipo...</option>
                                    <option value='Chato'>Chato</option>
                                    <option value='Boleado'>Boleado</option>
                                    <option value='Solitário'>Solitário</option>
                                    <option value='Cravejado'>Cravejado</option>
                                    <option value='Fosco'>Fosco</option>
                                    <option value='Personalizado'>Personalizado</option>
                                    <!-- Adicione mais opções conforme necessário -->
                                </select>
                            </p>
                            <p>
                                <label for='numero-alianca'>Número da aliança</label>
                                <input class='dados-atendimento-section' type='number' id='numero-alianca' name='numero-alianca' placeholder='0' required step='0.01'>
                            </p>
                            <p>
                                <label for='gravacao-alianca'>Gravação</label>
                                <input class='dados-atendimento-section' type='text' id='gravacao-alianca' name='gravacao-alianca' placeholder='O que irá gravar?'>
                            </p>
                            <p>
                                <label for='peso'>Peso (g)</label>
                                <input class='dados-atendimento-section' type='number' id='peso' name='peso' placeholder='0,00g' required step='0.01'>
                            </p>
                        </div>
                        <button type='button' class='adicionar-alianca' onclick='adicionarAlianca()'>Adicionar Aliança</button>
                    </section>  ";
        } elseif ($checkbox === 'checkboxPingente') {
            echo "  <section class='pingente'>
                        <div>
                            <h3>Pingente</h3>
                            <p class='contador' style='display: none;'>
                                <label for='contador'>Contador</label>
                                <select class='dados-atendimento-section' name='contador'>
                                    <option id='contador' value='1'>1</option>
                                </select>
                            </p>
                            <p>
                                <label for='tipo-metal'>Metal</label>
                                <select class='dados-atendimento-section' id='tipo-metal' name='tipo-metal' required>
                                    <option value='Ouro'>Ouro</option>
                                    <option value='Prata'>Prata</option>
                                    <!-- Adicione mais opções conforme necessário -->
                                </select>
                            </p>
                            <p>
                                <label for='peso'>Peso (g)</label>
                                <input class='dados-atendimento-section' type='number' id='peso' name='peso' placeholder='0,00g' required step='0.01'>
                            </p>
                        </div>
                    </section>  ";
        } elseif ($checkbox === 'checkboxPulseira') {
            echo "  <section class='pulseira'>
                        <div>
                            <h3>Pulseira</h3>
                            <p class='contador' style='display: none;'>
                                <label for='contador'>Contador</label>
                                <select class='dados-atendimento-section' name='contador'>
                                    <option id='contador' value='1'>1</option>
                                </select>
                            </p>
                            <p>
                                <label for='tipo-metal'>Metal</label>
                                <select class='dados-atendimento-section' id='tipo-metal' name='tipo-metal' required>
                                    <option value='Ouro'>Ouro</option>
                                    <option value='Prata'>Prata</option>
                                    <!-- Adicione mais opções conforme necessário -->
                                </select>
                            </p>
                            <p>
                                <label for='tamanho'>Tamanho (cm)</label>
                                <input class='dados-atendimento-section' type='number' id='tamanho' name='tamanho' placeholder='0,00cm' required step='0.01'>
                            </p>
                            <p>
                                <label for='peso'>Peso (g)</label>
                                <input class='dados-atendimento-section' type='number' id='peso' name='peso' placeholder='0,00g' required step='0.01'>
                            </p>
                        </div>
                    </section>  ";
        } elseif ($checkbox === 'checkboxBrinco') {
            echo "  <section class='brinco'>
                        <div>
                            <h3>Brinco</h3>
                            <p class='contador' style='display: none;'>
                                <label for='contador'>Contador</label>
                                <select class='dados-atendimento-section' name='contador'>
                                    <option id='contador' value='1'>1</option>
                                </select>
                            </p>
                            <p>
                                <label for='tipo-metal'>Metal</label>
                                <select class='dados-atendimento-section' id='tipo-metal' name='tipo-metal' required>
                                    <option value='Ouro'>Ouro</option>
                                    <option value='Prata'>Prata</option>
                                    <!-- Adicione mais opções conforme necessário -->
                                </select>
                            </p>
                            <p>
                                <label for='peso'>Peso (g)</label>
                                <input class='dados-atendimento-section' type='number' id='peso' name='peso' placeholder='0,00g' required step='0.01'>
                            </p>
                        </div>
                    </section>  ";
        } elseif ($checkbox === 'checkboxCordao') {
            echo "  <section class='cordao'>
                        <div>
                            <h3>Cordão</h3>
                            <p class='contador' style='display: none;'>
                                <label for='contador'>Contador</label>
                                <select class='dados-atendimento-section' name='contador'>
                                    <option id='contador' value='1'>1</option>
                                </select>
                            </p>
                            <p>
                                <label for='tipo-metal'>Metal</label>
                                <select class='dados-atendimento-section' id='tipo-metal' name='tipo-metal' required>
                                    <option value='Ouro'>Ouro</option>
                                    <option value='Prata'>Prata</option>
                                    <!-- Adicione mais opções conforme necessário -->
                                </select>
                            <p>
                                <label for='tamanho'>Tamanho (cm)</label>
                                <input class='dados-atendimento-section' type='number' id='tamanho' name='tamanho' placeholder='0,00cm' required step='0.01'>
                            </p>
                            <p>
                                <label for='peso'>Peso (g)</label>
                                <input class='dados-atendimento-section' type='number' id='peso' name='peso' placeholder='0,00g' required step='0.01'>
                            </p>
                        </div>
                    </section>" ;
        } else {
            echo "Não encontrado";
        }
    };
?>