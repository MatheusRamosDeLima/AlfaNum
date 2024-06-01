<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/_template.css">
    <?php if($view->getCss() !== null): ?>
        <link rel="stylesheet" href="/css/<?= $view->getCss() ?>.css">
    <?php endif ?>
    <?php if($view->getJs() !== null): ?>
        <script src="/js/<?= $view->getJs() ?>.js" defer></script>
    <?php endif ?>
    <title><?= $view->getTitle() ?></title>
</head>
<body>
    <header>
        <a href="/" class="header-title">
            <h1>AlfaNum</h1>
        </a>
    </header>
    <main>
        <div class="content">
            <?php $this->view($view->getName(), $modelData) ?>
        </div>
    </main>
    <footer>
        <p>&COPY;MatheusRamosDeLima</p>
    </footer>
</body>
</html>