Syntaxe d'écriture et de formatage de base
Créez un formatage sophistiqué pour votre prose et votre code sur GitHub avec une syntaxe simple.

En-têtes
Pour créer un titre, ajoutez un à six #symboles avant le texte de votre titre. Le nombre que #vous utilisez déterminera la taille de la rubrique.

# The largest heading
## The second largest heading
###### The smallest heading
En-têtes rendus H1, H2 et H6

Styliser le texte
Vous pouvez indiquer l'accent avec du texte en gras, en italique ou barré dans les champs de commentaires et les .mdfichiers.

Style	Syntaxe	Raccourci clavier	Exemple	Sortir
Gras	** ** ou __ __	commande/contrôle + b	**This is bold text**	C'est du texte en gras
Italique	* * ou _ _	commande/contrôle + i	*This text is italicized*	Ce texte est en italique
Barré	~~ ~~		~~This was mistaken text~~	C'était un texte erroné
Italique gras et imbriqué	** ** et _ _		**This text is _extremely_ important**	Ce texte est extrêmement important
Tout en gras et en italique	*** ***		***All this text is important***	Tout ce texte est important
Texte de citation
Vous pouvez citer du texte avec un >.

Text that is not a quote

> Text that is a quote
Texte cité rendu

Astuce : lorsque vous affichez une conversation, vous pouvez automatiquement citer du texte dans un commentaire en mettant le texte en surbrillance, puis en tapant r. Vous pouvez citer l'intégralité d'un commentaire en cliquant sur , puis sur Citer la réponse . Pour plus d'informations sur les raccourcis clavier, consultez « Raccourcis clavier ».

Code de citation
Vous pouvez appeler un code ou une commande dans une phrase avec des backticks simples. Le texte entre les backticks ne sera pas formaté. Vous pouvez également appuyer sur le raccourci clavier commandou Ctrl+ epour insérer les backticks d'un bloc de code dans une ligne de Markdown.

Use `git status` to list all new or modified files that haven't yet been committed.
Bloc de code en ligne rendu

Pour formater le code ou le texte dans son propre bloc distinct, utilisez des backticks triples.

Certaines commandes Git de base sont :
```
statut git
git ajouter
git commit
```
Bloc de code rendu

Pour plus d'informations, consultez « Créer et mettre en évidence des blocs de code ».

Liens
Vous pouvez créer un lien en ligne en mettant le texte du lien entre crochets [ ], puis en mettant l'URL entre parenthèses ( ). Vous pouvez également utiliser le raccourci clavier command + kpour créer un lien.

This site was built using [GitHub Pages](https://pages.github.com/).

Lien rendu

Astuce : GitHub crée automatiquement des liens lorsque des URL valides sont écrites dans un commentaire. Pour plus d'informations, consultez « Références et URL liées automatiquement ».

Liens de rubriques
Vous pouvez créer un lien direct vers une section dans un fichier rendu en survolant l'en-tête de la section pour exposer le lien :

Lien de section dans le fichier README pour le référentiel github/scientist

Liens relatifs
Vous pouvez définir des liens relatifs et des chemins d'images dans vos fichiers rendus pour aider les lecteurs à naviguer vers d'autres fichiers de votre référentiel.

Un lien relatif est un lien relatif au fichier courant. Par exemple, si vous avez un fichier README à la racine de votre référentiel et que vous avez un autre fichier dans docs/CONTRIBUTING.md , le lien relatif vers CONTRIBUTING.md dans votre README pourrait ressembler à ceci :

[Contribution guidelines for this project](docs/CONTRIBUTING.md)
GitHub transformera automatiquement votre lien relatif ou chemin d'image en fonction de la branche sur laquelle vous vous trouvez actuellement, de sorte que le lien ou le chemin fonctionne toujours. Vous pouvez utiliser tous les opérandes de liens relatifs, tels que ./et ../.

Les liens relatifs sont plus faciles pour les utilisateurs qui clonent votre référentiel. Les liens absolus peuvent ne pas fonctionner dans les clones de votre référentiel - nous vous recommandons d'utiliser des liens relatifs pour faire référence à d'autres fichiers de votre référentiel.

Images
Vous pouvez afficher une image en ajoutant !et en enveloppant le texte alternatif au format [ ]. Ensuite, placez le lien de l'image entre parenthèses ().

![This is an image](https://myoctocat.com/assets/images/base-octocat.svg)

Image rendue

GitHub prend en charge l'intégration d'images dans vos tickets, demandes d'extraction, discussions, commentaires et .mdfichiers. Vous pouvez afficher une image de votre référentiel, ajouter un lien vers une image en ligne ou télécharger une image. Pour plus d'informations, reportez-vous à la section « Téléchargement d'éléments ».

Astuce : Lorsque vous souhaitez afficher une image qui se trouve dans votre référentiel, vous devez utiliser des liens relatifs au lieu de liens absolus.

Voici quelques exemples d'utilisation de liens relatifs pour afficher une image.

Le contexte	Lien relatif
Dans un .mdfichier sur la même branche	/assets/images/electrocat.png
Dans un .mdfichier sur une autre branche	/../main/assets/images/electrocat.png
Dans les problèmes, les demandes de tirage et les commentaires du référentiel	../blob/main/assets/images/electrocat.png
Dans un .mdfichier d'un autre référentiel	/../../../../github/docs/blob/main/assets/images/electrocat.png
Dans les problèmes, les demandes d'extraction et les commentaires d'un autre référentiel	../../../github/docs/blob/main/assets/images/electrocat.png?raw=true
Remarque : Les deux derniers liens relatifs du tableau ci-dessus ne fonctionneront pour les images d'un dépôt privé que si le spectateur a au moins un accès en lecture au dépôt privé qui contient ces images.

Pour plus d'informations, consultez « Liens relatifs ».

Listes
Vous pouvez créer une liste non ordonnée en faisant précéder une ou plusieurs lignes de texte de -ou *.

- George Washington
- John Adams
- Thomas Jefferson
Liste non ordonnée rendue

Pour ordonner votre liste, faites précéder chaque ligne d'un numéro.

1. James Madison
2. James Monroe
3. John Quincy Adams
Liste ordonnée rendue

Listes imbriquées
Vous pouvez créer une liste imbriquée en indentant un ou plusieurs éléments de liste sous un autre élément.

Pour créer une liste imbriquée à l'aide de l'éditeur Web sur GitHub ou d'un éditeur de texte utilisant une police à espacement fixe, comme Atom , vous pouvez aligner votre liste visuellement. Tapez des espaces devant votre élément de liste imbriqué, jusqu'à ce que le caractère marqueur de liste ( -ou *) se trouve directement sous le premier caractère du texte dans l'élément au-dessus.

1. First list item
   - First nested list item
     - Second nested list item
Liste imbriquée avec alignement en surbrillance

Liste avec deux niveaux d'éléments imbriqués

Pour créer une liste imbriquée dans l'éditeur de commentaires sur GitHub, qui n'utilise pas de police à espacement fixe, vous pouvez regarder l'élément de liste immédiatement au-dessus de la liste imbriquée et compter le nombre de caractères qui apparaissent avant le contenu de l'élément. Tapez ensuite ce nombre d'espaces devant l'élément de liste imbriqué.

Dans cet exemple, vous pouvez ajouter un élément de liste imbriqué sous l'élément de liste 100. First list itemen indentant l'élément de liste imbriqué d'au moins cinq espaces, car il y a cinq caractères ( 100. ) avant First list item.

100. First list item
     - First nested list item
Liste avec un élément de liste imbriqué

Vous pouvez créer plusieurs niveaux de listes imbriquées en utilisant la même méthode. Par exemple, étant donné que le premier élément de la liste imbriquée comporte sept caractères ( ␣␣␣␣␣-␣) avant le contenu de la liste imbriquée First nested list item, vous devez mettre en retrait le deuxième élément de la liste imbriquée de sept espaces.

100. First list item
     - First nested list item
       - Second nested list item
Liste avec deux niveaux d'éléments imbriqués

Pour plus d'exemples, consultez le GitHub Flavored Markdown Spec .

Listes de tâches
Pour créer une liste de tâches, faites précéder les éléments de la liste d'un espace régulier suivi de [ ]. Pour marquer une tâche comme terminée, utilisez [x].

- [x] #739
- [ ] https://github.com/octo-org/octo-repo/issues/740
- [ ] Add delight to the experience when all tasks are complete :tada:
Liste des tâches rendues

Si la description d'un élément de liste de tâches commence par une parenthèse, vous devrez l'échapper avec\ :

- [ ] \(Optional) Open a followup issue

Pour plus d'informations, consultez « À propos des listes de tâches ».

Mentionner les personnes et les équipes
Vous pouvez mentionner une personne ou une équipe sur GitHub en tapant @plus son nom d'utilisateur ou le nom de l'équipe. Cela déclenchera une notification et attirera leur attention sur la conversation. Les personnes recevront également une notification si vous modifiez un commentaire pour mentionner leur nom d'utilisateur ou le nom de l'équipe. Pour plus d'informations sur les notifications, consultez « À propos des notifications ».

@github/support What do you think about these updates?

Rendu @mention

Lorsque vous mentionnez une équipe parent, les membres de ses équipes enfants reçoivent également des notifications, ce qui simplifie la communication avec plusieurs groupes de personnes. Pour plus d'informations, consultez « À propos des équipes ».

Taper un @symbole fera apparaître une liste de personnes ou d'équipes sur un projet. La liste filtre au fur et à mesure que vous tapez, donc une fois que vous avez trouvé le nom de la personne ou de l'équipe que vous recherchez, vous pouvez utiliser les touches fléchées pour le sélectionner et appuyer sur l'une des tabulations ou sur Entrée pour compléter le nom. Pour les équipes, entrez le @organization/team-name et tous les membres de cette équipe seront abonnés à la conversation.

Les résultats de la saisie semi-automatique sont limités aux collaborateurs du référentiel et à tout autre participant sur le fil.

Problèmes de référencement et pull request
Vous pouvez afficher une liste de problèmes suggérés et de demandes d'extraction dans le référentiel en tapant #. Tapez le numéro ou le titre du problème ou de la demande d'extraction pour filtrer la liste, puis appuyez sur l'une des tabulations ou sur Entrée pour terminer le résultat en surbrillance.

Pour plus d'informations, consultez « Références et URL liées automatiquement ».

Référencement de ressources externes
Si des références de lien automatique personnalisées sont configurées pour un référentiel, les références à des ressources externes, comme un problème JIRA ou un ticket Zendesk, sont converties en liens raccourcis. Pour savoir quels liens automatiques sont disponibles dans votre référentiel, contactez une personne disposant d'autorisations d'administrateur sur le référentiel. Pour plus d'informations, consultez « Configuration des liens automatiques pour référencer des ressources externes ».

Pièces jointes de contenu
Certaines applications GitHub fournissent des informations dans GitHub pour les URL qui renvoient à leurs domaines enregistrés. GitHub restitue les informations fournies par l'application sous l'URL dans le corps ou le commentaire d'un problème ou d'une pull request.

Pièce jointe de contenu

Pour voir les pièces jointes de contenu, vous devez avoir une application GitHub qui utilise l'API des pièces jointes de contenu installée sur le référentiel. Pour plus d'informations, consultez « Installer une application dans votre compte personnel » et « Installer une application dans votre organisation ».

Les pièces jointes de contenu ne seront pas affichées pour les URL faisant partie d'un lien de démarque.

Pour plus d'informations sur la création d'une application GitHub qui utilise des pièces jointes de contenu, consultez « Utilisation de pièces jointes de contenu ».

Téléchargement d'éléments
Vous pouvez télécharger des ressources telles que des images par glisser-déposer, sélectionner dans un navigateur de fichiers ou coller. Vous pouvez télécharger des actifs vers des tickets, des demandes d'extraction, des commentaires et des .mdfichiers dans votre référentiel.

Utiliser des émojis
Vous pouvez ajouter des emoji à votre écriture en tapant :EMOJICODE:.

@octocat :+1: This PR looks great - it's ready to merge! :shipit:

Emoji rendu

La saisie :fera apparaître une liste d'emoji suggérés. La liste sera filtrée au fur et à mesure que vous tapez, donc une fois que vous avez trouvé l'emoji que vous recherchez, appuyez sur Tab ou Entrée pour terminer le résultat en surbrillance.

Pour une liste complète des emoji et des codes disponibles, consultez le Emoji-Cheat-Sheet .

Paragraphes
Vous pouvez créer un nouveau paragraphe en laissant une ligne vide entre les lignes de texte.

Notes de bas de page
Vous pouvez ajouter des notes de bas de page à votre contenu en utilisant cette syntaxe entre crochets :

Here is a simple footnote[^1].

A footnote can also have multiple lines[^2].  

You can also use words, to fit your writing style more closely[^note].

[^1]: My reference.
[^2]: Every new line should be prefixed with 2 spaces.  
  This allows you to have a footnote with multiple lines.
[^note]:
    Named footnotes will still render with numbers instead of the text but allow easier identification and linking.  
    This footnote also has been made with a different syntax using 4 spaces for new lines.
La note de bas de page sera rendue comme ceci :

Note de bas de page rendue

Remarque : La position d'une note de bas de page dans votre Markdown n'influence pas l'endroit où la note de bas de page sera rendue. Vous pouvez écrire une note de bas de page juste après votre référence à la note de bas de page, et la note de bas de page sera toujours rendue au bas du Markdown.

Masquer le contenu avec des commentaires
Vous pouvez dire à GitHub de masquer le contenu du Markdown rendu en plaçant le contenu dans un commentaire HTML.

<!-- Ce contenu n'apparaîtra pas dans le Markdown rendu -->
Ignorer le formatage Markdown
Vous pouvez dire à GitHub d'ignorer (ou d'échapper) le formatage Markdown en utilisant \avant le caractère Markdown.

Let's rename \*our-new-project\* to \*our-old-project\*.

Caractère échappé rendu

Pour plus d'informations, consultez la « syntaxe Markdown » de Daring Fireball .

Désactiver le rendu Markdown
Lorsque vous affichez un fichier Markdown, vous pouvez cliquer en haut du fichier pour désactiver le rendu Markdown et afficher la source du fichier à la place.

Afficher Markdown comme source

La désactivation du rendu Markdown vous permet d'utiliser les fonctionnalités d'affichage source, telles que la liaison de ligne, ce qui n'est pas possible lors de l'affichage des fichiers Markdown rendus.