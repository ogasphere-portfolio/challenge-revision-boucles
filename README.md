# Color Generator

On va s'amuser (oui oui, s'amsuer) à générer des blocs de couleurs _Web_.

L'idée est d'arriver à une page ressemblant [à celle ci](screenshot.png) (attention, screenshot du début de la page uniquement).

On pourrait très bien écrire le code HTML et CSS permettant d'afficher ceci. Mais on est fainéant, et PHP fera très bien l'affaire :wink:

## Moyens

- Chaque rectangle de couleur est une balise `<div>`
- Il faudra placer ces `<div>` les unes à côtés des autres avec un retour à la ligne si nécessaire pour ne pas avoir de scrollbar horizontale
- :warning: Contrairement à d'habitude, certains styles de chaque balise devront être définis grâce à l'attribut `style="color:white"` (color n'étant qu'un exemple)
  - certes, cette pratique n'est pas recommandée, mais là, on ne voit pas d'autre moyen
- Les styles plus génériques (appliqués à toutes les `<div>`) pourront être placés dans le fichier CSS fourni
- Il y a beaucoup de codes couleurs
  - On va se limiter **aux codes hexa sur 3 caractères**
  - rappel : `#123` équivaut à `#112233`

## Etapes

Pour arriver au résultat attendu, on a découpé le code en plusieurs étapes.

### Etape 1

Lister dans une variable tous les caractères pour générer un code couleur Web (`#F00` pour rouge par exemple).  
Ne pas mettre le caractère `#` dans cette liste.

**Indice**  
<details>
Il y a 16 valeurs possibles
</details>

### Etape 2

A partir de la variable de l'étape 1, afficher tous les codes couleur de nuances de gris. Une nuance de gris est composée de trois fois le même caractère (Ex : #555).

**1er indice**
<details>

- Le type de la variable de l'étape 1 est censé être un tableau

**2ème indice**
<details>

- ça doit afficher les codes suivants :  
`#000` `#111` `#222` `#333` `#444` `#555` `#666` `#777` `#888` `#999` `#AAA` `#BBB` `#CCC` `#DDD` `#EEE` `#FFF`

</details>

</details>

### Etape 3

Créer des rectangles de couleur pour chaque nuance de gris de l'étape 2 ([screenshot](screenshot-grey.png)).

**1er indice**
<details>

- utiliser la classe CSS _box_ fournie dans le fichier `css/style.css`

**2ème indice**
<details>

- ajouter un attribut style dans chaque box pour définir couleur et largeur

</details>

</details>

### Bonus 1

A partir de la variable de l'étape 1, afficher toutes les nuances de couleurs possibles.

**Indice**
<details>

ça doit afficher les codes suivants :  
`#000` `#001` `#002` `#003` `#004` `#005` `#006` `#007` `#008` `#009` `#00A` `#00B` `#00C` `#00D` `#00E` `#00F`  
`#010` `#011` `#012` `#013` `#014` `#015` `#016` `#017` `#018` `#019` `#01A` `#01B` `#01C` `#01D` `#01E` `#01F`  
`#020` `#021` `#022` `#023` `#024` `#025` `#026` `#027` `#028` `#029` `#02A` `#02B` `#02C` `#02D` `#02E` `#02F`  
etc.

</details>

### Bonus 2

Créer des rectangles de couleur pour chaque nuance de couleurs du bonus 1 ([screenshot](screenshot.png)).

**1er indice**
<details>

- utiliser la classe CSS _box_ fournie dans le fichier `css/style.css`

**2ème indice**  
<details>

- ajouter un attribut style dans chaque box pour définir couleur et largeur

</details>

</details>

### Bonus 3

A l'étape 1, les 16 éléments possibles dans un code couleur ont été listés manuellement dans un tableau.  
Désormais, il faut générer ce tableau grâce à une seule boucle !

**Indice**
<details>

- tu peux convertir un nombre décimal (base 10) et hexadécimal (base 16) grâce à une fonction PHP

</details>

### Bonus 4

Quoi !! Encore !??!  
Si tu en es là, c'est que tu as brillament réussi les étapes précédentes :+1:  
Sinon, laisse tomber, ça vaut pas le coup :wink:

On vient d'apprendre qu'il y a des couleurs garanties sur le Web, c'est-à-dire que certaines couleurs ne pourraient pas apparaitre ou alors incorrectement ?! WTF !  
https://fr.wikipedia.org/wiki/Couleur_du_Web#Couleurs_garanties_sur_le_web

Ok. Soit !  
Dans un second fichier, refaire le challenge et y apporter les modifications nécessaires à n'afficher que les couleurs garanties sur le Web :smiling_imp:
