<?php
$filename = '/var/shed/config/.env';
$config = parse_ini_file($filename);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $config = array_replace($config, $_POST);

    $ini = '';
    foreach ($config as $attr => $val) {
        $ini .= "$attr=$val\n";
    }

    file_put_contents($filename, $ini);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>my.shed.host</title>
</head>
<body>
    <h1>my.shed.host</h1>

    <a href="/phpinfo.php">PHP Info</a>
    <a href="/adminer/adminer/?server=mysql&username=root">MySQL</a>
    <a href="/adminer/adminer/?pgsql=postgres&username=postgres">PostgreSQL</a>

    <section>
        <h2>Settings</h2>
        <form method="post">
            <div>
                <label for="APACHE_BASE_PATH">Sites Directory</label>
                <input name="APACHE_BASE_PATH" type="text" value="<?= $config['APACHE_BASE_PATH'] ?>" />
            </div>
            <div>
                <label for="APACHE_DEFAULT_DOCROOT">Default Docroot</label>
                <input name="APACHE_DEFAULT_DOCROOT" type="text" value="<?= $config['APACHE_DEFAULT_DOCROOT'] ?>" />
            </div>
            <div>
                <label for="APACHE_PORT">Apache Port</label>
                <input name="APACHE_PORT" type="text" value="<?= $config['APACHE_PORT'] ?>" />
            </div>
            <div>
                <button type="submit">Save</button>
            </div>
        </form>
    </section>
</body>
</html>
