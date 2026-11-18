# Clubia — Gestion des activités des clubs

Application Laravel pour la communauté étudiante de l’ISET Djerba.

## Lancer

Dans `laravel-app`, exécuter `php artisan serve`, puis ouvrir http://127.0.0.1:8000.

Les prérequis sont PHP 8.3+, Composer et SQLite. Pour installer sur une nouvelle machine : `composer install`, copier `.env.example` vers `.env`, configurer `DB_CONNECTION=sqlite`, puis exécuter `php artisan key:generate`, `php artisan migrate --seed`.

## Accès de démonstration

- Administrateur : `admin@iset.tn`
- Mot de passe initial : `ChangeMe123!` (à remplacer avant toute utilisation réelle)
- Un étudiant peut créer son compte depuis l’écran de connexion.
- L’administrateur peut créer des comptes responsables depuis son tableau de bord.

Les rôles sont `admin`, `responsable` et `etudiant`. Les mots de passe sont hachés et les pages de l’application nécessitent une session authentifiée.
