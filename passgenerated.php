<?php

require_once __DIR__ .'/utilities/functions.php';


if ($_GET['lengthpass'] && is_numeric($_GET['lengthpass'])){ ?>
    <h1>
        Your newly SUPER SAFE generated password is:
    </h1>
    <pre>
        <?php
            $pass = rand_string($_GET['lengthpass']);
        ?>
        <h2>
            <?php echo $pass;?>
        </h2>
    </pre>
<?php } else {?>
    <p>
        <strong>
            Mistakes have been made... please try again!
        </strong>
    </p>
<?php }


