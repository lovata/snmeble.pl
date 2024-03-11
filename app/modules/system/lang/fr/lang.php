<?php return [
  'installer' => [
    'app_config_section' => 'Configuration de l\'application',
    'license_section' => 'Clé de license',
    'dependencies_section' => 'Installation des dépendances',
    'demo_section' => 'Contenu d\'exemple',
    'locale_select_label' => 'Choisir la langue',
    'locale_select_error' => 'Le code de langue :code n\'est pas valide, veuillez réessayer',
    'app_url_label' => 'URL de l\'application',
    'backend_uri_label' => 'URI du backend',
    'backend_uri_comment' => 'Pour sécuriser votre application, utilisez une adresse personnalisée pour accéder au panneau d\'administration.',
    'license_key_label' => 'Clé de license',
    'license_key_comment' => 'Entrez une clé de license valide pour continuer.',
    'license_thanks_comment' => 'Merci d\'être client d\'Octobre CMS!',
    'license_expired_comment' => 'La license n\'est pas payée ou a expiré. Veuillez visiter octobercms.com pour obtenir une license.',
    'too_many_failures_label' => 'Trop de tentatives échouées',
    'non_interactive_label' => 'Mode non interactif détecté',
    'non_interactive_comment' => 'Si vous voyez cette erreur immédiatement, utilisez plutôt ces commandes non interactives.',
    'install_failed_label' => 'L\'installation a échoué',
    'install_failed_comment' => 'Veuillez essayer d\'exécuter ces commandes manuellement.',
    'database_engine_label' => 'Moteur de base de données',
    'database_host_label' => 'Hôte de la base de données',
    'database_host_comment' => 'Nom d\'hôte de la connexion à la base de données.',
    'database_port_label' => 'Port de base de données',
    'database_port_comment' => '(Optionnel) Un port pour la connexion.',
    'database_name_label' => 'Nom de la base de données',
    'database_name_comment' => 'Spécifiez le nom de la base de données à utiliser.',
    'database_login_label' => 'Connexion à la base de données',
    'database_login_comment' => 'Utilisateur avec des privilèges de création de base de données.',
    'database_pass_label' => 'Mot de passe de la base de données',
    'database_pass_comment' => 'Mot de passe de l\'utilisateur spécifié.',
    'database_path_label' => 'Chemin de la base de données',
    'database_path_comment' => 'Pour le stockage basé sur des fichiers, entrez un chemin relatif au répertoire racine de l\'application.',
    'migrate_database_comment' => 'Veuillez migrer la base de données avec la commande suivante',
    'visit_backend_comment' => 'Ensuite, ouvrez la zone d\'administration à cette URL',
    'open_configurator_comment' => 'Ouvrez cette application dans votre navigateur',
    'install_demo_label' => 'Voulez-vous installer le thème et le plugin d\'exemple ? (Recommandé)',
    'operation_timeout_comment' => 'L\'opération a pris trop de temps. Veuillez augmenter le délai du serveur puis réessayer.',
    'operation_timeout_hint' => 'Voir la documentation appropriée pour :name.',
  ],
  'app' => [
    'name' => 'OctoberCMS',
    'tagline' => 'Retourner à l’essentiel',
  ],
  'directory' => [
    'create_fail' => 'Impossible de créer le répertoire : :name',
  ],
  'file' => [
    'create_fail' => 'Impossible de créer le fichier : :name',
  ],
  'combiner' => [],
  'resizer' => [],
  'system' => [
    'name' => 'Système',
    'menu_label' => 'Système',
    'categories' => [
      'cms' => 'CMS',
      'misc' => 'Divers',
      'logs' => 'Journaux',
      'mail' => 'E-mail',
      'shop' => 'Boutique',
      'team' => 'Équipe',
      'users' => 'Utilisateurs',
      'system' => 'Système',
      'social' => 'Social',
      'backend' => 'Backend',
      'events' => 'Évènements',
      'customers' => 'Clients',
      'my_settings' => 'Mes réglages',
      'notifications' => 'Notifications',
    ],
  ],
  'theme' => [
    'label' => 'Thème',
    'unnamed' => 'Thème sans nom',
    'name' => [],
  ],
  'themes' => [
    'install' => 'Installer des thèmes',
    'installed' => 'Thèmes installés',
    'no_themes' => 'Il n’y a aucun thème installé depuis le Marketplace.',
    'recommended' => 'Recommandé',
    'remove_confirm' => 'Êtes-vous sûr(e) de vouloir supprimer ce thème ?',
  ],
  'plugin' => [
    'label' => 'Plugin',
    'unnamed' => 'Plugin sans nom',
    'name' => [],
    'by_author' => 'Autheur: :name',
  ],
  'plugins' => [
    'install' => 'Installer des plugins',
    'install_products' => 'Installer des produits',
    'installed' => 'Plugins installés',
    'no_plugins' => 'Il n’y a aucun plugin installé depuis le site d’October CMS.',
    'recommended' => 'Recommandé',
    'plugin_label' => 'Plugin',
    'bulk_actions_label' => 'Actions en bloc',
    'check_yes' => 'Oui',
    'check_no' => 'Non',
    'unfrozen' => 'Mises à jour activées',
    'freeze' => 'désactiver les mises à jour pour',
    'unfreeze' => 'activer les mises à jour pour',
    'refresh' => 'remise à l’état initial',
    'remove' => 'Supprimer',
    'freeze_label' => 'Désactiver les mises à jour',
    'unfreeze_label' => 'Activer les mises à jour',
    'freeze_success' => 'Mises à jour désactivées avec succès pour les plugins sélectionnés.',
    'unfreeze_success' => 'Mises à jour activées avec succès pour les plugins sélectionnés.',
    'enable_success' => 'Les plugins ont été activés avec succès.',
    'disable_success' => 'Les plugins ont été désactivés avec succès.',
    'refresh_success' => 'Les plugins ont été actualisés avec succès.',
    'remove_confirm' => 'Êtes-vous sûr(e) de vouloir supprimer ce plugin ?',
    'remove_success' => 'Les plugins ont été supprimés avec succès.',
  ],
  'project' => [
    'attach' => 'Attacher un projet',
    'detach' => 'Détacher le Projet',
    'none' => 'Aucun',
    'id' => [
      'missing' => 'Spécifier un ID de projet.',
    ],
    'detach_confirm' => 'Confirmer le détachement de ce projet ?',
    'unbind_success' => 'Le projet a été détaché avec succès.',
  ],
  'mail' => [
    'smtp_ssl' => 'Connexion SSL requise',
  ],
  'mail_templates' => [
    'name_comment' => 'Nom unique utilisé pour identifier ce modèle',
    'test_send' => 'Envoyer un message de test',
    'test_confirm' => 'Un message de test sera envoyé à :email. Continuer ?',
    'creating' => 'Création du modèle...',
    'creating_layout' => 'Création de la maquette...',
    'saving' => 'Sauvegarde du modèle en cours…',
    'saving_layout' => 'Enregistrement de la maquette...',
    'delete_confirm' => 'Supprimer ce modèle ?',
    'delete_layout_confirm' => 'Supprimer cette maquette ?',
    'deleting' => 'Suppression du modèle...',
    'deleting_layout' => 'Suppression de la maquette...',
    'sending' => 'Envoi du message de test en cours…',
    'return' => 'Retour à la liste des modèles.',
  ],
  'mail_brand' => [
    'sample_template' => [
      'heading' => 'En-tête',
      'paragraph' => 'C’est un paragraphe rempli de Lorem Ipsum et un lien. Cumque dicta <a>doloremque eaque</a>, enim error laboriosam pariatur possimus tenetur veritatis voluptas.',
      'table' => [
        'item' => 'Article',
        'description' => 'Description',
        'price' => 'Prix',
        'centered' => 'Centré',
        'right_aligned' => 'Aligné à droite',
      ],
      'buttons' => [
        'primary' => 'Bouton principal',
        'positive' => 'Bouton positif',
        'negative' => 'Bouton négatif',
      ],
      'panel' => 'A quel point ce panneau est-il génial ?',
      'more' => 'Un peu plus de texte',
      'promotion' => 'Code de réduction: OCTOBER',
      'subcopy' => 'Ceci est le pré copyright de votre courriel',
      'thanks' => 'Merci',
    ],
    'fields' => [],
  ],
  'install' => [],
  'updates' => [
    'plugin_author' => 'Auteur',
    'plugin_not_found' => 'Plugin non trouvé',
    'plugin_version_not_found' => 'La version du plugin est introuvable',
    'theme_not_found' => 'Thème non trouvé',
    'core_build' => 'Version :build',
    'core_build_help' => 'Une nouvelle version est disponible.',
    'changelog' => 'Changelog',
    'changelog_view_details' => 'Voir les détails',
    'themes' => 'Thèmes',
    'plugin_version_none' => 'Nouveau plugin',
    'plugin_current_version' => 'Version actuelle',
    'theme_new_install' => 'Installation du nouveau thème.',
    'theme_extracting' => 'Décompression du thème : :name',
    'update_label' => 'Mettre à jour',
    'update_loading' => 'Chargement des mises à jour disponibles…',
    'force_label' => 'Forcer la mise à jour',
    'found' => [
      'label' => 'Nouvelle mise à jour disponible !',
      'help' => 'Cliquer sur « Mettre à jour » pour démarrer le processus.',
    ],
    'none' => [
      'label' => 'Aucune mise à jour n’est disponible.',
      'help' => 'Aucune mise à jour plus récente n’a été trouvée.',
    ],
    'important_action' => [
      'empty' => 'Sélectionner l’action',
      'confirm' => 'Confirmer la mise à jour',
      'skip' => 'Ignorer ce plugin (cette fois uniquement)',
      'ignore' => 'Ignorer ce plugin (toujours)',
    ],
    'important_action_required' => 'Action requise',
    'important_view_guide' => 'Consulter le guide de mise à jour',
    'important_view_release_notes' => 'Voir les notes de version',
    'important_alert_text' => 'Des mise à jour requièrent votre attention.',
    'details_title_plugin' => 'Détails du plugin',
    'details_title_theme' => 'Détails du thème',
    'details_view_homepage' => 'Voir la page d’accueil',
    'details_changelog' => 'Journal des modifications',
    'details_changelog_missing' => 'Aucun journal des modifications disponible.',
    'details_view_license' => 'Voir la license',
    'details_current_version' => 'Version actuelle',
    'details_author' => 'Auteur',
  ],
  'market' => [
    'menu_description' => 'Gérer et installer les plugins et thèmes.',
    'content_loading' => 'Chargement...',
  ],
  'server' => [
    'connect_error' => 'Erreur lors de la connexion au serveur.',
    'response_not_found' => 'Le serveur de mise à jour n’a pas été trouvé.',
    'response_invalid' => 'Réponse invalide du serveur.',
    'response_empty' => 'Réponse vide du serveur',
    'file_error' => 'Erreur du serveur lors de la transmission du paquet.',
    'file_corrupt' => 'Le fichier provenant du serveur est corrompu.',
  ],
  'behavior' => [
    'missing_property' => 'La classe :class doit définir la propriété $:property utilisée par le behavior :behavior.',
  ],
  'config' => [
    'not_found' => 'Impossible de trouver le fichier de configuration :file défini dans :location.',
    'required' => 'La configuration utilisée dans :location doit fournir une valeur \':property\'.',
  ],
  'zip' => [
    'extract_failed' => 'Impossible de décompresser le fichier \':file\'.',
  ],
  'event_log' => [],
  'request_log' => [
    'empty_link' => 'Purger le journal des requêtes',
    'empty_loading' => 'Purge du journal des requêtes…',
    'empty_success' => 'Le journal des requêtes a été purgé avec succès.',
    'return_link' => 'Retour au journal des requêtes',
    'id' => 'ID',
  ],
  'permissions' => [
    'name' => 'Système',
    'manage_system_settings' => 'Gérer les paramètres du système',
    'manage_software_updates' => 'Gérer les mises à jour du logiciel',
    'access_logs' => 'Voir les journaux système',
    'manage_mail_templates' => 'Gérer les modèles des e-mails',
    'manage_mail_settings' => 'Gérer les paramètres des e-mails',
    'manage_other_administrators' => 'Gérer les autres administrateurs',
  ],
  'log' => [],
  'media' => [
    'invalid_path' => 'Le chemin du fichier indiqué est invalide : \':path\'.',
    'folder_size_items' => 'Article(s)',
  ],
  'page' => [
    'not_found' => [
      'label' => 'Page introuvable',
      'help' => 'La page demandée n\'a pas pu être trouvée.',
    ],
    'custom_error' => [
      'label' => 'Erreur de la page',
      'help' => 'Désolé, quelque chose s\'est mal passé et la page n\'a pas pu être affichée.',
    ],
    'invalid_token' => [
      'label' => 'token de sécurité invalide',
    ],
    'maintenance' => [
      'label' => 'Nous serons de retour prochainement !',
      'help' => 'Notre site web est en cours de maintenance, revenez bientôt !',
      'message' => 'Message:',
      'available_at' => 'Veuillez essayer à nouveau dans:',
    ],
  ],
  'pagination' => [
    'previous' => 'Précédente',
    'next' => 'Suivante',
  ],
];
