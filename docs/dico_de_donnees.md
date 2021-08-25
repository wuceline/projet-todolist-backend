# Dictionnaire de données

## Taches (`tasks`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant de notre tâche|
|title|VARCHAR(64)|NOT NULL|Le nom de la tâche|
|completion|INT|DEFAULT 0|L'avancement de la tâche|
|category_id|ENTITY|NOT NULL|La catégorie de la tâche|
|status|TINYINT(1)|NOT NULL|Le statut de la tâche, archivée ou non|



## Catégories (`categories`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant de notre categorie|
|name|VARCHAR(64)|NOT NULL|Le nom de la tâccatégoriehe|
|status|TINYINT(1)|NOT NULL|Le statut de la catégorie|

