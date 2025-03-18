<template>
    <form action="/public/php/processa_matricula.php" method="POST" enctype="multipart/form-data" class="formulario">

        <h3 class="subtitulo text-center">Informações do Aluno</h3>
        <div class="row">
            <div class="col-12 col-xl-6 mb-3">
                <label for="nome" class="form-label">Nome completo:</label>
                <input name="nome" type="text" id="nome" class="form-control">
            </div>
            <div class="col-12 col-xl-6 mb-3">
                <label for="data_nascimento" class="form-label">Data de Nascimento:</label>
                <input name="data_nascimento" type="date" id="data_nascimento" class="form-control">
            </div>
            <div class="col-12 col-xl-6 mb-3">
                <label for="cpf" class="form-label">CPF:</label>
                <input name="cpf" type="text" id="cpf" class="form-control">
            </div>
            <div class="col-12 col-xl-6 mb-3">
                <label for="endereco" class="form-label">Endereço:</label>
                <input name="endereco" type="text" id="endereco" class="form-control">
            </div>
            <div class="col-12 col-xl-6 mb-3">
                <label for="serie" class="form-label">Série que vai cursar:</label>
                <select name="serie" type="text" id="serie" class="form-control">
                    <option value="maternal_1">Maternal 1</option>
                    <option value="maternal_2">Maternal 2</option>
                    <option value="jardim_1">Jardim 1</option>
                    <option value="jardim_2">Jardim 2</option>
                    <option value="1o_ano_fundamental">1º Ano - Ensino Fundamental</option>
                    <option value="2o_ano_fundamental">2º Ano - Ensino Fundamental</option>
                    <option value="3o_ano_fundamental">3º Ano - Ensino Fundamental</option>
                    <option value="4o_ano_fundamental">4º Ano - Ensino Fundamental</option>
                    <option value="5o_ano_fundamental">5º Ano - Ensino Fundamental</option>
                    <option value="6o_ano_fundamental">6º Ano - Ensino Fundamental</option>
                    <option value="7o_ano_fundamental">7º Ano - Ensino Fundamental</option>
                    <option value="8o_ano_fundamental">8º Ano - Ensino Fundamental</option>
                    <option value="9o_ano_fundamental">9º Ano - Ensino Fundamental</option>
                    <option value="1o_ano_ensino_medio">1º Ano - Ensino Médio</option>
                    <option value="2o_ano_ensino_medio">2º Ano - Ensino Médio</option>
                    <option value="3o_ano_ensino_medio">3º Ano - Ensino Médio</option>
                </select>
            </div>
            <div class="col-12 col-xl-6 mb-3">
                <label for="turno" class="form-label">Turno</label>
                <select name="turno" id="turno" class="form-control">
                    <option value="manha">Manhã</option>
                    <option value="tarde">Tarde</option>
                    <option value="noite">Noite</option>
                </select>
            </div>
        </div>

        <h3 class="subtitulo text-center mt-4">Informações dos Responsáveis</h3>
        <div class="row">
            <div class="col-12 col-xl-6 mb-3">
                <label for="nome_responsavel" class="form-label">Nome do Responsável:</label>
                <input name="nome_responsavel" type="text" id="nome_responsavel" class="form-control">
            </div>
            <div class="col-12 col-xl-6 mb-3">
                <label for="cpf_responsavel" class="form-label">CPF do Responsável:</label>
                <input name="cpf_responsavel" type="text" id="cpf_responsavel" class="form-control">
            </div>
            <div class="col-12 col-xl-6 mb-3">
                <label for="telefone" class="form-label">Telefone:</label>
                <input name="telefone" type="tel" id="telefone" class="form-control">
            </div>
            <div class="col-12 col-xl-6 mb-3">
                <label for="parentesco" class="form-label">Parentesco:</label>
                <select name="parentesco" id="parentesco" class="form-control">
                    <option value="pai">Pai</option>
                    <option value="mae">Mãe</option>
                    <option value="avo">Avô/Avó</option>
                    <option value="tio">Tio/Tia</option>
                    <option value="outro">Outro</option>
                </select>
            </div>
        </div>

        <div class="text-center mt-4">
            <button type="submit" class="botao-form">Enviar Matrícula</button>
        </div>
    </form>
</template>

<script scoped>
export default {
    name: "AppMatricula"
}
</script>

<style scoped>
    .formulario {
        padding: 30px 0;
    }

    .row {
        margin: 0;
    }

    .subtitulo {
        margin-bottom: 30px;
    }

    .form-control {
        border: 2px solid var(--dourado);
    }

    .form-control:focus {
        outline: none;
        box-shadow: none;
        border: 2px solid var(--dourado);
    }

    @media (min-width: 768px) {
        .formulario {
            margin: 30px 150px;
        }
    }
</style>