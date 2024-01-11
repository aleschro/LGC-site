<?php

$entities = array(
  array(
    'name' => 'Fenway House',
    'link' => 'https://web.mit.edu/fenway',
  ),
  array(
    'name' => 'ET',
    'link' => 'https://web.mit.edu/thetans/www/',
  ),
  array(
    'name' => 'Pika',
    'link' => 'https://pika.mit.edu',
  ),
  array(
    'name' => 'Student House',
    'link' => 'https://studs.mit.edu/',
  ),
  array(
    'name' => 'WILG',
    'link' => 'https://web.mit.edu/wilg/www/',
  ),
);

?>


<!DOCTYPE html>
<html>
<head>
  <title>LGC @ MIT</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style type="text/css">
  body {
    font-family: Inconsolata, monospace;
  }

  .entities {
    display: flex;
    flex-direction: column;
    align-items: center;
  }
</style>
<body class="flex flex-col min-h-screen">

  <header class="text-5xl flex items-center justify-center">
    <h1 class="p-6 text-center font-bold">Living Group Council @ MIT</h1>
  </header>

  <main class="p-6 flex-grow">
    <p class="p-6 text-xl text-center">We are a group of self-goverened, unaffiliated student houses helping make life more interesting and affordable here at MIT - please refer to our groups' sites below to learn more while we update this site!</p>

    <div class="p-6 text-2xl entities flex flex-wrap justify-center gap-4">
      <?php foreach ($entities as $entity) : ?>
        <a href="<?php echo $entity['link'] ?>" class="block transition-all duration-300 ease-in-out hover:scale-110">
          <h2 class="text-center font-bold"><?php echo $entity['name']; ?></h2>
        </a>
      <?php endforeach; ?>
    </div>
  </main>

  <footer class="flex p-10 items-center justify-center border-t border-black">
    <p>
      Last updated: 22.10.2023<br>
      <a href="https://docs.google.com/document/d/1L-5za8xS2zL3TtxdtE3MTezfHYH7a7STLb5-E6Aahk8/edit?usp=sharing">Latest charter &#128279</a><br>
      Contact: lgc-exec [at] mit . edu
    </p>
  </footer>

</body>
