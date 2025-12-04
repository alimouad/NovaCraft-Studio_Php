<header class="bg-white shadow-xl">
  <nav class="container mx-auto flex justify-between items-center py-4">
    <h1 class="text-2xl font-bold text-blue-600">DigitalWave</h1>
    <!-- get the url path ------  -->
    <?php $current = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); ?>
    <ul class="flex space-x-6">
        <li>
            <a href="/" class="<?= $current === '/' ? 'text-blue-600 font-medium' : 'hover:text-blue-600' ?>">Accueil</a>
        </li>

        <li>
            <a href="/services" class="<?= $current === '/services' ? 'text-blue-600 font-medium' : 'hover:text-blue-600' ?>">Services</a>
        </li>

        <li>
            <a href="/about" class="<?= $current === '/about' ? 'text-blue-600 font-medium' : 'hover:text-blue-600' ?>">A propos</a>
        </li>

        <li>
            <a href="/contact" class="<?= $current === '/contact' ? 'text-blue-600 font-medium' : 'hover:text-blue-600' ?>">Contact</a>
        </li>
    </ul>
  </nav>
</header>