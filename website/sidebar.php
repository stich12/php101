<aside id="sidebar">

    <div id="timeofday">

        <?php
        $date = getdate();
        $day = '';

        switch ($date['wday']) {
            case 0:
                $day = 'Sunday';
                break;
            case 1:
                $day = 'Monday';
                break;
            case 2:
                $day = 'Tuesday';
                break;
            case 3:
                $day = 'Wednesday';
                break;
            case 4:
                $day = 'Thursday';
                break;
            case 5:
                $day = 'Friday';
                break;
            case 6:
                $day = 'Saturday';
                break;
            default:
                break;
        }

        if ($date['hours'] >= 16) {

            echo '<p>Good evening! Today is ' . $day . '</p>';

        } else if ($date['hours'] >= 12) {
            ?>

            <p>Good afternoon! Today is <?= $day; ?></p>

        <?php } else { ?>

            <p>Good morning! Today is <?= $day; ?></p>

        <?php } ?>

        <?php if (isset($_COOKIE['color'])) : ?>
            <p>Welcome back, your favorite color is <?= $_COOKIE['color']; ?></p>
        <?php endif; ?>

        <?php if (isset($_SESSION['user'])) : ?>
            <p>Welcome back <?= $_SESSION['user']; ?></p>
        <?php endif; ?>

    </div>

</aside>