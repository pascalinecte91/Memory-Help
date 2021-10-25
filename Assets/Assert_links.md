EN CLIQUANT SUR LES LIENS
```sh
Utilisez la clickLink()méthode pour cliquer sur le premier lien qui contient le texte donné (ou la première image cliquable avec cet altattribut) :

$client = static::createClient();
$client->request('GET', '/post/hello-world');

$client->clickLink('Cliquez ici');
Si vous avez besoin d'accéder à l'objet :class:`Symfony\\Component\\DomCrawler\\Link` qui fournit des méthodes utiles spécifiques aux liens (comme getMethod()et getUri()), utilisez Crawler::selectLink()plutôt la méthode :

$client = static::createClient();
$crawler = $client->request('GET', '/post/hello-world');

$link = $crawler->selectLink('Cliquez ici')->link();
 ...

utilisez click() si vous voulez cliquer sur le lien sélectionné
$client->click($link);
```



