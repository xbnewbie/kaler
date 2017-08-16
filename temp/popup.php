<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/inline_editor.js"></script>
<link rel="stylesheet" href="css/main.css">

<!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="modalEmail" class="modal">
    <!-- Modal content -->
    <div class="modal-content-email">
        <span class="close">&times;</span>
       <input type="text" id="pop_email" name="pop_email">
        <input type="button" value="ok" onclick="add_email()">
        <input type="button" value="cancel" onclick="close_popup_email()">
    </div>

</div>


<script>
    // Get the modal
    var modal = document.getElementById('modalEmail');

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    function close_popup_email() {
        var modal = document.getElementById('modalEmail');
        modal.style.display = "none";
    }
    function add_email() {
        var modal = document.getElementById('pop_email');
        close_popup_email()
    }
</script>