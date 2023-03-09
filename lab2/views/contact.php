<html>

<head>
    <title> contact form </title>


</head>

<body>
    <h3> Contact Form </h3>
    <div id="after_submit">

    </div>
    <form id="contact_form" method="POST" enctype="multipart/form-data" action="index.php">
        <div class=" row">
            <label class="required" for="name">Your name:</label><br />
            <input id="name" class="input" name="name" type="text" value="<?php echo remember('name') ?>" size="30" /><br />

        </div>
        <div class="row">
            <label class="required" for="email">Your email:</label><br />
            <input id="email" class="input" name="email" type="text" value="<?php echo remember('email') ?>" size="30" /><br />

        </div>
        <div class="row">
            <label class="required" for="message">Your message:</label><br />
            <textarea id="message" class="input" name="message" rows="7" cols="30"><?php echo remember('message') ?></textarea><br />

        </div>

        <input id="submit" name="submit" type="submit" value="Send email" />

    </form>
</body>

</html>