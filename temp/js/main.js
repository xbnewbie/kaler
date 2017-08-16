/**
 * Created by My Computer on 8/15/2017.
 */
$( document ).ready(function() {

    document.getElementById('image_profile').onclick = function() {
        document.getElementById('my_file').click();
    };


    var replaceWith = $('<input name="temp" type="text" />'),
        connectWith = $('input[name="fullname"]');
    $('#label_fullname').inlineEdit(replaceWith, connectWith);

    var replaceWithJob = $('<input name="temp" type="text"  placeholder="job"/>'),
        connectWithJob = $('input[name="job"]');

    $('#label_job').inlineEdit(replaceWithJob, connectWithJob);



    var replaceWithTwitter = $('<input name="temp" type="text"/>'),
        connectWithTwitter = $('input[name="twitter"]');

    $('fa-twitter').inlineEdit(replaceWithTwitter, connectWithTwitter);


});


