```
/* --- Base --- */
* { ... }                /* Tous les tags */
p { ... }                /* paragraphe */
h1, h2, h3 { ... }       /* Titre 1 ou titre 2 ou titre 3 */


/* --- Classe ou identifiant --- */
h1.letitre { ... }       /* Titre 1 dont la classe est "letitre" */
h1#letitre { ... }       /* Titre 1 dont l'ID est "letitre" */
.letitre { ... }         /* Tout Tag dont la classe est "letitre" */
#letitre { ... }         /* Le Tag dont l'ID est "letitre" */


/* --- Lien --- */
a:link { ... }           /* Lien non visité */
a:visited { ... }        /* Lien visité */
a:hover, a:focus { ... } /* Lien survolé ou ayant le focus */
a:active { ... }         /* Lien actif (état cliqué) */


/* --- autre Pseudo-classe --- */
p:first-letter { ... }   /* Premier caractère de l'élément P */
div:first-line { ... }   /* Première ligne de l'élément DIV */
div:first-child { ... }  /* Premier élément d'un bloc DIV */
```