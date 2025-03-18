<template>
    <form action="processa_matricula.php" @submit.prevent="enviarFormulario()" method="POST" enctype="multipart/form-data" class="formulario">

        <h3 class="subtitulo text-center">Informações do Aluno</h3>
        <div class="row">
            <div class="col-12 col-xl-6 mb-3">
                <label for="nome" class="form-label">Nome completo:</label>
                <input name="nome" type="text" id="nome" class="form-control" v-model="nome">
            </div>
            <div class="col-12 col-xl-6 mb-3">
                <label for="data_nascimento" class="form-label">Data de Nascimento:</label>
                <input name="data_nascimento" type="date" id="data_nascimento" class="form-control" v-model="data_nascimento">
            </div>
            <div class="col-12 col-xl-6 mb-3">
                <label for="cpf" class="form-label">CPF:</label>
                <input name="cpf" type="text" id="cpf" class="form-control" v-model="cpf">
            </div>
            <div class="col-12 col-xl-6 mb-3">
                <label for="endereco" class="form-label">Endereço:</label>
                <input name="endereco" type="text" id="endereco" class="form-control" v-model="endereco">
            </div>
            <div class="col-12 col-xl-6 mb-3">
                <label for="serie" class="form-label">Série que vai cursar:</label>
                <select name="serie" type="text" id="serie" class="form-control" v-model="serie">
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
                <select name="turno" id="turno" class="form-control" v-model="turno">
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
                <input name="nome_responsavel" type="text" id="nome_responsavel" class="form-control" v-model="nome_responsavel">
            </div>
            <div class="col-12 col-xl-6 mb-3">
                <label for="cpf_responsavel" class="form-label">CPF do Responsável:</label>
                <input name="cpf_responsavel" type="text" id="cpf_responsavel" class="form-control" v-model="cpf_responsavel">
            </div>
            <div class="col-12 col-xl-6 mb-3">
                <label for="telefone" class="form-label">Telefone:</label>
                <input name="telefone" type="tel" id="telefone" class="form-control" v-model="telefone">
            </div>
            <div class="col-12 col-xl-6 mb-3">
                <label for="parentesco" class="form-label">Parentesco:</label>
                <select name="parentesco" id="parentesco" class="form-control" v-model="parentesco">
                    <option value="pai">Pai</option>
                    <option value="mae">Mãe</option>
                    <option value="avo">Avô/Avó</option>
                    <option value="tio/tia">Tio/Tia</option>
                    <option value="outro">Outro</option>
                </select>
            </div>
        </div>

        <div class="text-center mt-4">
            <button class="botao-form">Enviar Matrícula</button>
        </div>
    </form>
</template>

<script>
import axios from 'axios';

export default {
    name: "AppMatricula",

    data() {
        return {
            nome: "",
            data_nascimento: "",
            cpf: "",
            endereco: "",
            serie: "",
            turno: "",
            nome_responsavel: "",
            cpf_responsavel: "",
            telefone: "",
            parentesco: ""
        }
    },

    methods: {
        async enviarFormulario() {
            const dados = {
                nome: this.nome,
                data_nascimento: this.data_nascimento,
                cpf: this.cpf,
                endereco: this.endereco,
                serie: this.serie,
                turno: this.turno,
                nome_responsavel: this.nome_responsavel,
                cpf_responsavel: this.cpf_responsavel,
                telefone: this.telefone,
                parentesco: this.parentesco
            }

            console.log(dados);

            try {
                const resposta = await axios.post("http://localhost:8000/processa_matricula.php", dados);
                alert("Matrícula enviada com sucesso!", resposta)
            } catch (erro) {
                console.error("Erro ao enviar matrícula!", erro);
            }
        }
    }
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