<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css">
	<title>Site Blog FC</title>
</head>
<body>
	<div id="wrapper">
        <header class="col col--no-gutters">
            <div class="grid grid--container">
                <h1>header</h1>
                <?php include 'header.php'; ?>
            </div>
        </header>

        <main class="grid grid--container">
            <div class="row row--no-gutters">
                <section class="col--xs-12 col--sm-12 col--md-8 col--lg-8 col--xl-8">
                    <article class="row row--no-gutters">
                        <header class="col col--no-gutters">
                            section-header
                            <?php include 'banner.php'; ?>
                        </header>

                        <main class="col col--no-gutters">
                            section-main
                            <?php include 'home/taboos.php'; ?>
                            <?php include 'home/tips.php'; ?>
                            <?php include 'home/news.php'; ?>
                        </main>

                        <footer class="col col--no-gutters">
                            section-footer
                            <?php include 'home/mixed.php'; ?>
                        </footer>
                    </article>
                </section>
                <aside class="col--xs-12 col--sm-12 col--md-4 col--lg-4 col--xl-4">
                    <h2>aside</h2>
                    <?php include 'sidebar.php'; ?>
                </aside>
            </div>
        </main>

        <footer class="col col--no-gutters">
            <div class="grid grid--container">
                <h1>Footer</h1>
            </div>
        </footer>
    </div>
</body>
</html>