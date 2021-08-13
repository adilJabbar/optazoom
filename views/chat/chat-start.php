<div class="text-center py-5">
    <img src="https://www.optazoom.com/images/logo.png" alt="SuperShop">
</div>
<?php if($this->session->flashdata('user_loggedin')) : ?>
    <p class="alert alert-success"><?= $this->session->flashdata('user_loggedin') ?></p>  
<?php endif; ?>
<script>
    let user_id = '<?php echo $_SESSION['user_id']; ?>';
    let base_url = '<?= base_url() ?>';
</script>
    <div id="messageArea">
        <div class="text-center py-4 text-muted">
            <h1><?= $title ?></h1>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Active Users</h3>
                <ul class="list-group" id="users">
                </ul>
                <br>
                <h3>Rules</h3>
                <ul>
                    <li>Every user need to relog every 30 min.</li>
                    <li>Messages older than 10 min. will be deleted from chat.</li>
                </ul>
            </div>
            <div class="col-md-9">
                <div id="chat">
                </div>
                <div class="row">
                    <div class="col-10 pr-0">
                        <textarea class="form-control" id="message"></textarea>
                        <p id="error1" class="alert alert-danger"></p>
                        <p id="error2" class="alert alert-danger"></p>    
                    </div>
                    <div class="col-2 pl-0">
                        <button id="send-message" class="btn btn-primary" type="submit">Send message...</button>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url() ?>js/chat.js"></script>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;1,200&display=swap');
    *{
        font-family: 'Poppins', sans-serif;
    }
    body{
        background: aliceblue;
        min-height: auto;
        padding-bottom: 30px;
    }
    #chat{
        height: 450px;
        background: #fff;
        padding: 20px;
        overflow-y: scroll;
    }
    #send-message{
        height:61px;
    }
</style>
<script>
    setTimeout(function(){ $("#chat").animate({ scrollTop: $('#chat').prop("scrollHeight")}, 1000); }, 1500);
    var input = document.getElementById("message");
    
    input.addEventListener("keyup", function(event) {
      if (event.keyCode === 13) {
        event.preventDefault();
        document.getElementById("send-message").click();
      }
    });
    document.getElementById("send-message").addEventListener("click", function() {
        $("#chat").animate({ scrollTop: $('#chat').prop("scrollHeight")}, 1000);  
    });
</script>