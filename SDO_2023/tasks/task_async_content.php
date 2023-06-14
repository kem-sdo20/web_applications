<form>
    <textarea cols = 20 rows = 5 name = 'task'></textarea><br>
</form>
<button onclick="read()"class="btn btn-warning">Получить данные</button>
<button onclick="send()"class="btn btn-warning">Отправить данные</button>
<div id = "textFromServer"></div>

<script>
    
    async function read()
    {
        let response = await fetch("get_task.php");
        if(response.ok) {
            let answer = await response.text();
            console.log("Ответ" + answer);
            textFromServer.innerHTML = answer;
        } else {
            console.log("ОшибкаHTTP:" + response.status);
        }
    }
    async function send()
    {
        let response = await fetch("add_task.php", {
            method: 'POST',
            body: new FormData(document.forms[0])
            } );
    }

</script>