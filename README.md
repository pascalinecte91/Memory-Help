Git

1. Initier un projet.

git init mon_projet
-> Creation répertoire "" dans le dossier courant.

2. Dossier  deja creeé : 
Votre répertoire "mon_projet" existe donc déjà, et il contient déjà des fichiers. Placez vous dans votre répertoire et exécutez la commande suivante:
git init

3. Ajout de fichiers à votre git.
git add my_file

4.  plusieurs fichiers:
git add --all

5. Afficher le statut.
git status
liste des fichiers non encore ajoutés à votre git, et la liste des fichiers déjà ajoutés, mais n'ayant pas encore été mis a jour dans votre git depuis leur dernière modification.

6. commit.
Vous avez modifié un fichier (par exemple my_file1), il faut alors faire un commit pour que git enregistre ces modifications:

7. git commit -m "vous choisissez"
L'argument -m permet d'ajouter un bref commentaire décrivant votre modification. Ce commentaire est obligatoire; si vous n'ajoutez pas l'argument -m et son commentaire, l'éditeur nano s'ouvrira alors pour que vous puissiez ajouter votre commentaire.

8. liste des commits et commentaires.
git log

9. Revenir à un ancien commit.
Il faut faire un git log pour recuperer son number

git checkout n° du commit à recuperer

10. Pour revenir au dernier commit (le plus récent):
git checkout master

11. Créér une branche.
Vous voulez faire une modification sur l'un de vos fichiers tout en conservant votre dernier commit intacte: il faut pour cela créér une branche.

git branch nom_de_la_branche

12. Dans quelle branche vous vous situez:
git branch

Vous verrez alors vos differentes branches: la branche master (c'est la branche principale), et votre nouvelle branche. L'astérix devant master signifie que vous êtes toujours dans la branche master. Il faut alors changer de branche avant de faire vos modifications:

git checkout nom_de_la_branche
Pour créér une branche en se plaçant directement dans celle ci:

git checkout -b nom_de_la_branche
Merger une branche avec le master.
Les modifications apportées dans la branche vous conviennent. Il faut alors fusionner votre branche et votre master. Placer vous dans la branche master:

git checkout master
Puis :

git merge nom_de_la_branche
Pour effacer la branche devenue inutile:

git branch -D nom_de_la_branche

14. Cloner un repository 
git clone 


Créer un repository sur votre compte github, puis placez vous dans votre dossier local contenant votre git et votre projet local. Puis entrez la commande suivante:

git remote add origin https://github.com/nomutilisateur/MonProjet.git
Faire un push (pensez à faire un commit avant !)