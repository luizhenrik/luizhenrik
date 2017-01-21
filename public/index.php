<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,400i,700" rel="stylesheet">
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
                <section class="col col--no-gutters">
                    <article class="row row--no-gutters">
                        <header class="col col--no-gutters">
                            section-header
                            <?php include './includes/banner.php'; ?>
                        </header>

                        <main class="col col--no-gutters">
                            <div class="row row--no-gutters">
                                <?php include './includes/home/block-card.php'; ?>
                            </div>
                            <div class="row row--no-gutters">
                            </div>
                            <div class="row row--no-gutters">
                                <div class="col--xs-12 col--sm-12 col--md-8 col--lg-8 col--xl-8">
                                </div>
                                <aside class="col--xs-12 col--sm-12 col--md-4 col--lg-4 col--xl-4">                                
                                </aside>
                            </div>
                        </main>

                        <footer class="col col--no-gutters">
                        </footer>
                    </article>
                </section>
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