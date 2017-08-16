<!DOCTYPE HTML>
<!--
	Identity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Identity by HTML5 UP</title>
    <meta charset="utf-8" />

    <!--main js generated -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/inline_editor.js"></script>
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="css/main.css">
    <!--end main js -->

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="<?php echo $path;?>assets/js/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="<?php echo $path;?>assets/css/main.css" />

    <!--[if lte IE 9]><link rel="stylesheet" href="<?php echo $path;?>assets/css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="<?php echo $path;?>assets/css/ie8.css" /><![endif]-->
    <noscript><link rel="stylesheet" href="<?php echo $path;?>assets/css/noscript.css" /></noscript>

</head>
<body class="is-loading">

<style>
    #my_file {
        display: none;
    }

    #image_profile {
        width: 148px;
        height: 148px;
        border-radius: 50%; /*the magic*/
    }
</style>

<!-- hidden value generated-->
<input type="hidden" name="fullname" />
<input type="hidden" name="company">
<input type="hidden" name="job">
<input type="hidden" name="phone">
<input type="hidden" name="email">
<input type="hidden" name="facebook">
<input type="hidden" name="twitter">
<input type="hidden" name="linkedin">
<input   type="file" id="my_file" onchange="document.getElementById('image_profile').src = window.URL.createObjectURL(this.files[0])">
<!-- end hidden value -->


<!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
    <section id="main">
        <header>
            <span class="avatar"><img id="image_profile" src="<?php echo $path;?>images/avatar.jpg" alt="" /></span>
            <div id="label_fullname"><h1>Jane Doe</h1></div>
            <div id="label_job"><p>Senior Psychonautics Engineer</p></div>

        </header>
        <!--
        <hr />
        <h2>Extra Stuff!</h2>
        <form method="post" action="#">
            <div class="field">
                <input type="text" name="name" id="name" placeholder="Name" />
            </div>
            <div class="field">
                <input type="email" name="email" id="email" placeholder="Email" />
            </div>
            <div class="field">
                <div class="select-wrapper">
                    <select name="department" id="department">
                        <option value="">Department</option>
                        <option value="sales">Sales</option>
                        <option value="tech">Tech Support</option>
                        <option value="null">/dev/null</option>
                    </select>
                </div>
            </div>
            <div class="field">
                <textarea name="message" id="message" placeholder="Message" rows="4"></textarea>
            </div>
            <div class="field">
                <input type="checkbox" id="human" name="human" /><label for="human">I'm a human</label>
            </div>
            <div class="field">
                <label>But are you a robot?</label>
                <input type="radio" id="robot_yes" name="robot" /><label for="robot_yes">Yes</label>
                <input type="radio" id="robot_no" name="robot" /><label for="robot_no">No</label>
            </div>
            <ul class="actions">
                <li><a href="#" class="button">Get Started</a></li>
            </ul>
        </form>
        <hr />
        -->
        <footer>
            <ul class="icons">
                <li><a href="#" class="fa-twitter">Twitter</a></li>
                <li><a href="#" class="fa-instagram">Instagram</a></li>
                <li><a href="#" class="fa-facebook">Facebook</a></li>
            </ul>
        </footer>
    </section>

    <!-- Footer -->
    <footer id="footer">
        <ul class="copyright">
            <li>&copy; Jane Doe</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>
    </footer>

</div>

<!-- Scripts -->
<!--[if lte IE 8]><script src="<?php echo $path;?>assets/js/respond.min.js"></script><![endif]-->
<script>
    if ('addEventListener' in window) {
        window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-loading\b/, ''); });
        document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
    }
</script>





</body>
</html>