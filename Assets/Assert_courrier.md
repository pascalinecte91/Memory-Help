
ASSERTIONS DE COURRIER
```sh
.. version ajoutée :: 5.1

    A partir de Symfony 5.1, les assertions suivantes ne nécessitent plus de faire
    une requête avec le ``Client`` dans un cas de test étendant la classe ``WebTestCase``.

assertEmailCount(int $count, string $transport = null, string $message = ''
Affirme que le nombre prévu d'e-mails a été envoyé.

assertQueuedEmailCount(int $count, string $transport = null, string $message = '')
Affirme que le nombre attendu d'e-mails a été mis en file d'attente (par exemple en utilisant le composant Messenger).

assertEmailIsQueued(MessageEvent $event, string $message = '')/assertEmailIsNotQueued(MessageEvent $event, string $message = '')
Affirme que l'événement de courrier donné n'est (pas) mis en file d'attente. Utilisez getMailerEvent(int $index = 0, string $transport = null)pour récupérer un événement de courrier par index.

assertEmailAttachmentCount(RawMessage $email, int $count, string $message = '') Affirme que l'e-mail donné contient le nombre de pièces jointes attendu. À utiliser getMailerMessage(int $index = 0, string $transport = null)pour récupérer un e-mail spécifique par index.

assertEmailTextBodyContains(RawMessage $email, string $text, string $message = '')/assertEmailTextBodyNotContains(RawMessage $email, string $text, string $message = '')
Affirme que le corps du texte de l'e-mail donné ne contient (pas) le texte attendu.

assertEmailHtmlBodyContains(RawMessage $email, string $text, string $message = '')/assertEmailHtmlBodyNotContains(RawMessage $email, string $text, string $message = '')
Affirme que le corps HTML de l'e-mail donné ne contient (pas) le texte attendu.

assertEmailHasHeader(RawMessage $email, string $headerName, string $message = '')/assertEmailNotHasHeader(RawMessage $email, string $headerName, string $message = '')
Affirme que l'e-mail donné n'a (pas) l'en-tête attendu.

assertEmailHeaderSame(RawMessage $email, string $headerName, string $expectedValue, string $message = '')/assertEmailHeaderNotSame(RawMessage $email, string $headerName, string $expectedValue, string $message = '')
Affirme que l'e-mail donné n'a (pas) l'en-tête attendu défini sur la valeur attendue.

assertEmailAddressContains(RawMessage $email, string $headerName, string $expectedValue, string $message = '')
Affirme que l'en-tête d'adresse donné est égal à l'adresse de messagerie attendue. Cette assertion normalise les adresses comme Jane Smith <jane@example.com>dans jane@example.com.
```