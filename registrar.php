<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_registrar.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
   <title>Park Wheel - Gerenciador de estacionamento</title>
</head>
<body>
    <div class="container">
        <header>Registrar</header>
        <form action="">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Dados</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Nome Completo</label>
                            <input type="text" placeholder="Insira seu nome completo" required>
                        </div>
                        <div class="input-field">
                            <label>Data de Nascimento</label>
                            <input type="date" placeholder="Insira sua data de nascimento" required>
                        </div>
                        <div class="input-field">
                            <label>Email</label>
                            <input type="email" placeholder="Insira seu email" required>
                        </div>
                        <div class="input-field">
                            <label>Número de Telefone</label>
                            <input type="number" placeholder="Insira seu numero de telefone" required>
                        </div>
                        <div class="input-field">
                            <label>Sexo</label>
                            <select required>
                                <option disabled selected>Selecione seu sexo</option>
                                <option>Masculino</option>
                                <option>Feminino</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Cargo</label>
                            <input type="text" placeholder="Insira a ocupação" required>
                        </div>
                    </div>
                </div>
                <div class="details ID">
                    <span class="title">Dados Pessoais</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>RG</label>
                            <input type="text" placeholder="Insira seu RG" required>
                        </div>
                        <div class="input-field">
                            <label>CPF</label>
                            <input type="number" placeholder="Insira seu CPF" required>
                        </div>
                        <div class="input-field">
                            <label>Órgão Expedidor</label>
                            <input type="text" placeholder="Insira o orgão expedidor" required>
                        </div>
                        <div class="input-field">
                            <label>Nacionalidade</label>
                            <input type="text" placeholder="Insira a sua nacionalidade" required>
                        </div>
                        <div class="input-field">
                            <label>Data da emissão</label>
                            <input type="date" placeholder="Insira a data da emissão" required>
                        </div>
                        <div class="input-field">
                            <label>SLA</label>
                            <input type="text" placeholder="" required>
                        </div>
                    </div>
                    <button class="nextBtn">
                        <span class="btnText">Próximo</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> 
            </div>
            <div class="form second">
                <div class="details address">
                    <span class="title">Endereço</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Estado</label>
                            <input type="text" placeholder="Insira o estado" required>
                        </div>
                        <div class="input-field">
                            <label>Rua</label>
                            <input type="text" placeholder="Insira a rua" required>
                        </div>
                        <div class="input-field">
                            <label>Bairro</label>
                            <input type="text" placeholder="Insira o Bairro" required>
                        </div>
                        <div class="input-field">
                            <label>Número da casa</label>
                            <input type="text" placeholder="Insira o número da residência" required>
                        </div>
                        <div class="input-field">
                            <label>Complemento</label>
                            <input type="number" placeholder="Insira o complemento">
                        </div>
                        <div class="input-field">
                            <label>CEP</label>
                            <input type="number" placeholder="Insira o CEP" required>
                        </div>
                    </div>
                </div>
                <div class="details family">
                    <span class="title">Família</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Nome do Pai</label>
                            <input type="text" placeholder="Nome completo do pai" required>
                        </div>
                        <div class="input-field">
                            <label>Nome da Mãe</label>
                            <input type="text" placeholder="Nome completo da mãe" required>
                        </div>
                    </div>
                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Voltar</span>
                        </div>
                        
                        <button class="sumbit">
                            <span class="btnText">Cadastrar</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>
</body>
</html>