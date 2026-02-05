# Mini Projet PHP – Gestion des tâches (To-Do List)

L2 IAGE-GDA – Semestre 1 (2026)
Mini projet PHP utilisant un fichier JSON pour la persistance des données.

---

#Description du projet

Cette application web permet de gérer une liste de tâches (To-Do List).  
Chaque tâche possède un titre, une description, une priorité, un statut et des dates.

Les données sont stockées dans un fichier **JSON**, sans base de données.

---

#Structure des données (JSON)

Chaque tâche contient :
- `id`
- `titre`
- `description`
- `priorité` (basse, moyenne, haute)
- `statut` (à faire, en cours, terminée)
- `date_creation`
- `date_limite`

---

#Fonctionnalités

#Ajout d’une tâche
- Formulaire avec :
  - titre
  - description
  - priorité
  - date limite
- Statut initial : **à faire**
- Date de création générée automatiquement

# Affichage des tâches
- Liste de toutes les tâches
- Affichage de :
  - priorité
  - statut
  - date limite
- Couleurs / indicateurs selon le statut

#Changement de statut
- À faire → En cours → Terminée
- Modification par clic

#Suppression
- Suppression d’une tâche
- Mise à jour du fichier JSON

# Recherche et filtrage
- Recherche par mot-clé (titre ou description)
- Filtre par statut
- Filtre par priorité

#Gestion des retards
- Une tâche est en retard si :
  - elle n’est pas terminée
  - la date limite est dépassée
- Affichage d’une alerte pour ces tâches

#Statistiques
- Nombre total de tâches
- Nombre de tâches terminées
- Pourcentage de tâches terminées
- Nombre de tâches en retard

---

#
Structure du projet

