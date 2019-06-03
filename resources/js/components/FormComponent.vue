<template>
    <div class="form">
        <div class="container">
            <h1>Fale Conosco</h1>
            <form action="" method="" class="row">
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="" class="required">Nome</label>
                        <input type="text" name="" id="" placeholder="Nome">
                    </div>
                    <div class="form-group">
                        <label for="" class="required">E-mail</label>
                        <input type="email" name="" id="" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <label for="" class="required">Sexo</label>
                        <input type="radio" name="sexo" id="feminino">
                        <label for="">Feminino</label>
                        <input type="radio" name="sexo" id="masculino">
                        <label for="">Masculino</label>
                    </div>
                    <div class="form-group city">
                        <div>
                            <label for="" class="required">Cidade</label>
                            <input type="text" name="" id="" placeholder="Cidade">
                        </div>
                        <div>
                            <label for="" class="required">Estado</label>
                            <select name="" id="">
                                <option value="SP">SP</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group contact">
                        <div>
                            <label for="" class="required">DDD</label>
                            <input type="text" name="" id="" placeholder="00">
                        </div>
                        <div>
                            <label for="" class="required">Telefone</label>
                            <input type="text" name="" id="" placeholder="00000-0000">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="" class="required">Título da mensagem</label>
                        <input type="text" name="" id="" placeholder="Título">
                    </div>
                    <div class="form-group">
                        <label for="" class="required">Mensagem</label>
                        <textarea name="" id="" cols="30" rows="10" placeholder="Escreva sua mensagem"></textarea>
                    </div>
                    <div class="form-group buttons">
                        <button type="reset">Limpar</button>
                        <button type="submit">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {}
    }
</script>