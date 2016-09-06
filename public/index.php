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
                <label for="home">Sites Directory</label>
                <input name="home" type="text" value="home" />
            </div>
            <div>
                <label for="docroot">Default Docroot</label>
                <input name="docroot" type="text" value="<?= $config['docroot'] ?>" />
            </div>
            <div>
                <label for="port">Apache Port</label>
                <input name="port" type="text" value="<?= $config['port'] ?>" />
            </div>
            <div>
                <button type="submit">Save</button>
            </div>
        </form>
    </section>
</body>
</html>
