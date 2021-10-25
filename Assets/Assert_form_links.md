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



SOUMISSION DE FORMULAIRES:
```sh
Utilisez la submitForm()méthode pour soumettre le formulaire qui contient le bouton donné :

$client = static::createClient();
$client->request('GET', '/post/hello-world');

$crawler = $client->submitForm('Ajouter un commentaire', [
    'comment_form[content]' => '...',
]);
Le premier argument de submitForm()est le contenu du texte, id, valueou namede tout <button>ou <input type="submit">inclus dans le formulaire. Le deuxième argument facultatif est utilisé pour remplacer les valeurs de champ de formulaire par défaut.

NOTER

Notez que vous sélectionnez des boutons de formulaire et non des formulaires, car un formulaire peut avoir plusieurs boutons. Si vous utilisez l'API de traversée, gardez à l'esprit que vous devez rechercher un bouton.

Si vous avez besoin d'accéder à l'objet :class:`Symfony\\Component\\DomCrawler\\Form` qui fournit des méthodes utiles spécifiques aux formulaires (comme getUri(), getValues()et getFields()), utilisez Crawler::selectButton()plutôt la méthode :

$client = static::createClient();
$crawler = $client->request('GET', '/post/hello-world');

Sélectionne le bouton
$buttonCrawlerNode = $crawler->selectButton('submit');

récupère l'objet Form pour le formulaire appartenant à ce bouton
$form = $buttonCrawlerNode->form();

définir des valeurs sur un objet de formulaire
$form['my_form[name]'] = 'Fabien';
$form['my_form[subject]'] = 'Symfony déchire !';

soumettre l'objet Form
$client->submit($form);

facultativement, vous pouvez combiner les 2 dernières étapes en passant un tableau de valeurs des champs lors de la soumission du formulaire :
$client->submit($form, [
    'my_form[name]' => 'Fabien',
    'my_form[subject]' => 'Symfony déchire !',
]);

En fonction du type de formulaire, vous pouvez utiliser différentes méthodes pour remplir la saisie :

sélectionne une option ou une radio
$form['my_form[country]']->select('France');

coche une case
$form['my_form[like_symfony]']->tick();

télécharge un fichier
$form['my_form[photo]']->upload('/path/to/lucas.jpg');

Dans le cas d'un téléchargement de plusieurs fichiers
$form['my_form[field][0]']->upload('/path/to/lucas.jpg');
$form['my_form[field][1]']->upload('/path/to/lisa.jpg');
```