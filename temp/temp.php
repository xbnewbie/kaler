
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/inline_editor.js"></script>
<style>
    #my_file {
        display: none;
    }

    #image_profile {
        width: 148px;
        height: 148px;
        border-radius: 50%; /*the magic*/
    }

    #get_file {
        background: #f9f9f9;
        border: 5px solid #88c;
        padding: 15px;
        border-radius: 5px;
        margin: 10px;
        cursor: pointer;
    }

    /* Making look nice */
    body { padding: 1em; font-family: Arial; font-size: 14px; }
    input[type="text"] { padding: 0.4em; font-family: Arial; }

    /* Inline Edit */
    p.hover { background: #fffbe1; }

</style>

<!-- hidden value -->
<input type="hidden" name="hiddenField" />
<input type="hidden" name="email" />
<input   type="file" id="my_file" onchange="document.getElementById('image_profile').src = window.URL.createObjectURL(this.files[0])">
<!-- end hidden value -->



<img id="image_profile" alt="Click for Profile Picture" src="http://www.amikom.ac.id/public/fotomhs/2010/10.12.4773.jpg" />
<br>
<br><br>
<div id="label_fullname">Please edit me...</div>
<p>
<div id="label_email">email</div>
</p>


<script>
    document.getElementById('image_profile').onclick = function() {
        document.getElementById('my_file').click();
    };

    var replaceWith = $('<input name="temp" type="text" />'),
        connectWith = $('input[name="hiddenField"]');

    var temp_email = $('<input name="temp" type="text" />'),
        email_field = $('input[name="hiddenField"]');

    $('#label_fullname').inlineEdit(replaceWith, connectWith);

    $('#label_email').inlineEdit(temp_email, email_field);




</script>
