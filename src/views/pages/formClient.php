<form method="post">
    <div class="modal-form">

        <div>
            <label for="">Nome da loja*:</label><br>
            <input type="text" name="" id="">
        </div>
        <div>
            <label for="">Nome do Vendedor:</label><br>
            <input type="text" name="" id="">
        </div>
        <div>
            <label for="">Celular da loja:</label><br>
            <input type="text" name="" id="">
        </div>
        <div>
            <label for="">Celular Vendedor:</label><br>
            <input type="text" name="" id="">
        </div>
        <div>
            <label for="">Endereço*:</label><br>
            <input type="text" name="" id="">
        </div>
        <div>
            <label for="uf">Estado:</label><br>
            <select name="uf" id="uf" onchange="getEstado()">
                <option></option>
                <option value="">meu</option>
            </select>
        </div>
        <div>
            <label for="">Cidade:</label><br>
            <input type="text" name="" id="">
        </div>
    </div>

    <div class="modal-footer">
        <div class="modal-sub-footer">
            <button onclick="buttonAction(event)">
                <div class="svg-wrapper-1">
                    <div class="svg-wrapper">
                        <i class="fa-solid fa-download" viewBox="0 0 24 24" width="24" height="24"></i>

                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                        </svg>
                    </div>
                </div>
                <span>Salvar</span>
            </button>
        </div>
    </div>
</form>