<link rel="stylesheet" href="/css/modal.css">

<div id="modal" class="hide">
    <div class="modal-content">
        <form action="/create" method="POST">
            @csrf
            <h1>Cadastrar Termo</h1>
            <div>
                <input required type="text" name="name" id="description">
                <label for="">Nome</label>
            </div>

            <div>
                <textarea required name="description" id="description"></textarea>
                <label for="">Descrição</label>
            </div>

            <div class="button-group">
                <button class="sendMessage">Salvar</button>
                <button class="deleteMessage" onclick="onOff()"><a href="#">Voltar</a></button>
            </div>
        </form>
    </div>
</div>
