<?php return [
  'auth' => [],
  'field' => [
    'invalid_type' => 'Χρησιμοποιήθηκε μη έγκυρος τύπος πεδίου :type.',
    'options_method_not_exists' => 'H κλάση του μοντέλου πρέπει να καθορίζει μια μέθοδο :method() επιστροφής επίλογων για το πεδίο \':field\'',
  ],
  'widget' => [
    'not_registered' => 'Δεν έχει καθοριστεί το όνομα \':name\' της κλάσης του Widget',
    'not_bound' => 'Το Widget με το όνομα της κλάσης \':name\' δεν έχει βρεθεί στον χειριστή.',
  ],
  'page' => [
    'untitled' => 'Χωρίς Τίτλο',
    'access_denied' => [
      'label' => 'Απαγορεύεται η πρόσβαση',
      'help' => 'Δεν έχεις τα απαραίτητα δικαιώματα για να δεις αυτήν την σελίδα.',
      'cms_link' => 'Επιστροφή στό back-end.',
    ],
    'no_database' => [
      'label' => 'Δεν βρέθηκε η βάση δεδομένων',
      'help' => 'Η βάση δεδομένων είναι απαραίτητη για να έχετε πρόσβαση στο back-end. Ελέγξτε εάν η βάση δεδομένων είναι ρυθμισμένη και συνδεδεμένη πριν προσπαθήσετε ξανά.',
      'cms_link' => 'Επιστροφή στην αρχική',
    ],
  ],
  'partial' => [
    'not_found_name' => 'Το μερικό \':name\' δεν βρέθηκε.',
  ],
  'account' => [
    'sign_out' => 'Αποσύνδεση',
    'login_placeholder' => 'σύνδεση',
    'password_placeholder' => 'κωδικός',
    'enter_email' => 'Συμπληρώστε το email σας',
    'email_placeholder' => 'email',
    'apply' => 'Εφαρμογή',
    'cancel' => 'Άκυρο',
    'delete' => 'Διαγραφή',
    'ok' => 'Εντάξει',
  ],
  'dashboard' => [
    'menu_label' => 'Κέντρο Ελένχου',
    'widget_inspector_title' => 'Ρύθμιση Widget',
    'widget_inspector_description' => 'Ρύθμιση του widget αναφορών',
    'widget_columns_label' => 'Πλάτος :columns',
    'widget_columns_description' => 'Το πλάτος του widget, ένας αριθμός μεταξύ του 1 και του 10.',
    'widget_columns_error' => 'Παρακαλούμε εισάγετε το πλάτος του widget σαν ένα αριθμό μεταξύ του 1 και του 10.',
    'columns' => '{1} στηλη|[2,Inf] στήλες',
    'widget_new_row_label' => 'Έναρξη νέας σειράς',
    'widget_new_row_description' => 'Τοποθετείστε το widget σε νέα σειρά.',
    'widget_title_label' => 'Τίτλος Widget',
    'widget_title_error' => 'O τίτλος του Widget είναι απαραίτητος.',
    'reset_layout_success' => 'Η διάταξη επαναφέρθηκε',
    'make_default_success' => 'Η τρέχουσα διάταξη είναι τώρα η προκαθορισμένη.',
    'status' => [
      'widget_title_default' => 'Κατάσταση συστήματος',
      'update_available' => '{0} διαθέσιμες ενημερώσεις!|{1} διαθέσιμη ενημέρωση!|[2,Inf] διαθέσιμες ενημερώσεις!',
      'updates_pending' => 'Εκκρεμούν ενημερώσεις λογισμικού',
      'updates_nil' => 'Το λογισμικό είναι ενημερωμένο',
      'updates_link' => 'Ενημέρωση',
      'warnings_pending' => 'Κάποια ζητήματα θέλουν  προσοχή',
      'warnings_nil' => 'Δεν υπάρχουν προειδοποιήσεις',
      'warnings_link' => 'Εμφάνιση',
      'core_build' => 'Έκδοση συστήματος',
      'event_log' => 'Καταγραφή συμβάντων',
      'request_log' => 'Καταγραφή αιτήσεων',
      'app_birthday' => 'Σε λειτουργία από',
    ],
    'welcome' => [
      'widget_title_default' => 'Καλώς ορίσατε',
      'welcome_back_name' => 'Καλώς ορίσατε ξανά στο :app, :name.',
      'welcome_to_name' => 'Καλώς ορίσατε στο :app, :name.',
      'first_sign_in' => 'Αυτή είναι η πρώτη φορά που συνδεεστε.',
      'last_sign_in' => 'Η τελευταία σύνδεση σας ήταν',
      'view_access_logs' => 'Προβολή του αρχείου καταγραφής προσβάσεων',
      'nice_message' => 'Να έχετε μια υπέροχη ημέρα!',
    ],
  ],
  'user' => [
    'name' => 'Διαχειριστής',
    'list_title' => 'Διαχείριση Διαχειριστών',
    'new' => 'Νέος Διαχειριστής',
    'first_name' => 'Όνομα',
    'last_name' => 'Επώνυμο',
    'full_name' => 'Ονοματεπώνυμο',
    'email' => 'e-Mail',
    'groups' => 'Ομάδες',
    'groups_comment' => 'Καθορίστε σε ποιες ομάδες ανήκει αυτός ο λογαριασμός. Οι ομαδες καθορισουν τα δικαώματα του χρηστη, τα οποια μπορουν να παρακαμφθουν στο επιπεδο του χρηστη, στην καρτελα Δικαιωματων.',
    'avatar' => 'Avatar',
    'password' => 'Κωδικός',
    'password_confirmation' => 'Επιβεβαίωση Κωδικού',
    'permissions' => 'Δικαιώματα',
    'account' => 'Λογαριασμός',
    'superuser' => 'Υπέρ-Χρήστης',
    'superuser_comment' => 'Εκχώρηση σε αυτόν τον λογαριασμό απεριόριστη πρόσβαση σε όλες τις περιοχές του συστήματος. Οι υπερ-χρήστες μπορούν να προσθέσουν και να διαχειριστούν άλλους χρήστες.',
    'send_invite' => 'Αποστολή πρόσκλησης μέσω email',
    'send_invite_comment' => 'Αποστέλλει ένα μήνυμα καλωσορίσματος το οποίο περιέχει τις πληροφορίες σύνδεσης και του κωδικού.',
    'delete_confirm' => 'Διαγράφη αυτού του διαχειριστή;',
    'return' => 'Επιστροφή στην λίστα των διαχειριστών',
    'allow' => 'Επέτρεψε',
    'inherit' => 'Κληρονόμησε',
    'deny' => 'Απαγόρευσε',
    'group' => [
      'name' => 'Ομάδες',
      'name_comment' => 'Το όνομα εμφανίζεται στην λίστα των ομάδων κατά την Προσθήκη/Επεξεργασία της φόρμας των Διαχειριστών.',
      'name_field' => 'Όνομα',
      'description_field' => 'Περιγραφή',
      'is_new_user_default_field_label' => 'Προεπιλεγμένη ομάδα',
      'is_new_user_default_field_comment' => 'Προεπιλεγμένη προσθήκη νέων διαχειριστών σε αυτήν την ομάδα.',
      'code_field' => 'Κώδικας',
      'code_comment' => 'Συμπληρώστε ένα μοναδικό κωδικό αν θέλετε να έχετε πρόσβαση στο αντικείμενο της ομάδας μέσω του API.',
      'list_title' => 'Διαχείριση Ομάδων',
      'new' => 'Νέα Ομάδα',
      'delete_confirm' => 'Διαγραφή αυτής της ομάδας διαχειριστών;',
      'return' => 'Επιστροφή στην λίστα των ομάδων',
      'users_count' => 'Χρήστες',
    ],
    'preferences' => [
      'not_authenticated' => 'Δεν υπάρχει κανένας πιστοποιημένος χρήστης για να φορτωθούν ή να σωθούν οι ρυθμίσεις του.',
    ],
  ],
  'list' => [
    'default_title' => 'Λίστα',
    'search_prompt' => 'Αναζήτηση...',
    'no_records' => 'Δεν υπάρχουν εγγραφές σε αυτήν την προβολή.',
    'missing_model' => 'Η συμπεριφορά της λίστας χρησιμοποιήθηκε στην :class δεν έχει κάποιο καθορισμένο μοντέλο.',
    'missing_column' => 'Δεν υπάρχει ορισμός στηλών για τα :columns.',
    'missing_columns' => 'Η λίστα χρησιμοποιήθηκε στη :class δεν έχει ορισμένες στήλες λίστας.',
    'missing_definition' => 'Η συμπεριφορά της λίστας δεν περιέχει μια στήλη για το \':field\'.',
    'missing_parent_definition' => 'Λίστα με τις συμπεριφορές οι οποίες δεν περιλαμβάνουν έναν ορισμό για \':definition\'.',
    'behavior_not_ready' => 'Η συμπεριφορά της λίστας δεν έχει αρχικοποιηθεί, ελέγξτε ότι έχετε καλέσει την makeLists() στον χειριστή.',
    'invalid_column_datetime' => 'Η τιμή της στήλης \':column\' δεν είναι ένα αντικείμενο DateTime, μήπως διαφεύγει μια $dates αναφορά στο μοντέλο?',
    'pagination' => 'Εμφάνιση εγγραφών: :from-:to απο :total',
    'prev_page' => 'Προηγούμενη σελίδα',
    'next_page' => 'Επόμενη σελίδα',
    'refresh' => 'Ανανέωση',
    'updating' => 'Αναβάθμιση...',
    'loading' => 'Φόρτωμα...',
    'check' => 'Έλεγχος',
    'delete_selected' => 'Διαγραφή επιλεγμένου',
    'delete_selected_empty' => 'Δεν υπάρχουν επιλεγμένες εγγραφές για να διαγράψετε.',
    'delete_selected_confirm' => 'Να διαγραφούν οι επιλεγμένες εγγραφές;',
    'delete_selected_success' => 'Διαγραφή επιλεγμένων εγγραφών.',
    'column_switch_true' => 'Ναι',
    'column_switch_false' => 'Όχι',
  ],
  'fileupload' => [
    'default_prompt' => 'Κάντε κλικ στο %s ή σύρετε ένα αρχείο εδώ για να το ανεβάσετε',
  ],
  'form' => [
    'create_title' => 'Νέο :name',
    'update_title' => 'Επεξεργασία :name',
    'preview_title' => 'Προεπισκόπηση :name',
    'reset_success' => 'Η επαναφορά ολοκληρώθηκε',
    'missing_id' => 'Το ID της εγγραφής στην φόρμα δεν έχει οριστεί.',
    'missing_model' => 'Η συμπεριφορά της φόρμας που χρησιμοποιήθηκε στην :class δεν έχει καθορισμένο μοντέλο.',
    'missing_definition' => 'Η συμπεριφορά της φόρμας δεν περιέχει ένα πεδίο για το \':field\'.',
    'action_confirm' => 'Είστε σίγουροι;',
    'create' => 'Δημιουργία',
    'create_and_close' => 'Δημιουργία και κλείσιμο',
    'creating' => 'Δημιουργία...',
    'creating_name' => 'Δημιουργία :name...',
    'save' => 'Αποθήκευση',
    'save_and_close' => 'Αποθήκευση και κλείσιμο',
    'saving' => 'Αποθήκευση...',
    'saving_name' => 'Αποθήκευση :name...',
    'delete' => 'Διαγραφή',
    'deleting' => 'Διαγραφή...',
    'confirm_delete' => 'Διαγραφή εγγραφής',
    'confirm_delete_multiple' => 'Διαγραφή επιλεγμένων εγγραφών;',
    'deleting_name' => 'Διαγραφή :name...',
    'reset_default' => 'Επαναφορά στο προκαθορισμένο',
    'resetting' => 'Επαναφορά',
    'resetting_name' => 'Επαναφορά :name',
    'undefined_tab' => 'Διάφορα',
    'field_off' => 'Όχι',
    'field_on' => 'Ναι',
    'add' => 'Προσθήκη',
    'apply' => 'Εφαρμογή',
    'cancel' => 'Άκυρο',
    'close' => 'Κλείσιμο',
    'confirm' => 'Επιβεβαίωση',
    'reload' => 'Επαναφόρτιση',
    'complete' => 'Ολοκλήρωση',
    'ok' => 'Εντάξει',
    'or' => 'ή',
    'confirm_tab_close' => 'Κλείσιμο της καρτέλας; Οι μη αποθηκευμένες αλλαγές θα χαθούν.',
    'behavior_not_ready' => 'Η συμπεριφορά δεν έχει αρχικοποιήσεις, ελέγξτε εάν έχετε καλέσει το initForm() στον χειριστή.',
    'preview_no_files_message' => 'Δεν υπάρχουν αρχεία που ανέβηκαν.',
    'preview_no_record_message' => 'Δεν είναι επιλεγμένη καμία εγγραφή.',
    'select' => 'Επιλογή',
    'select_all' => 'επιλογή όλων',
    'select_none' => 'επιλέξτε κανένα',
    'insert_row' => 'Προσθήκη Σειράς',
    'insert_row_below' => 'Προσθήκη Σειράς από Κάτω',
    'delete_row' => 'Διαγραφή Σειράς',
    'concurrency_file_changed_title' => 'Το αρχείο έχει αλλάξει',
    'concurrency_file_changed_description' => 'Το αρχείο το οποίο επεξεργάζεστε έχει αλλάξει στον δίσκο από έναν άλλο χρήστη. Μπορείτε είτε να επαναφορτώσετε το αρχείο και να χάσετε τις αλλαγές σας είτε να παρακάμψετε το αρχείο στον δίσκο.',
    'return_to_list' => 'Επιστροφή στην λίστα',
  ],
  'recordfinder' => [
    'find_record' => 'Ανεύρεση Εγγραφής',
  ],
  'relation' => [
    'missing_config' => 'Η συμπεριφορά της σχέσης δεν έχει καμία ρύθμιση για το \':config\'.',
    'missing_definition' => 'Η συμπεριφορά της σχέσης δεν περιέχει ορισμό για το \':field\'.',
    'missing_model' => 'Η συμπεριφορά της σχέσης που χρησιμοποιήθηκε στην :class δεν έχει καθορισμένο μοντέλο.',
    'invalid_action_single' => 'Αυτή η ενεργεία δεν μπορεί να εκτελεστεί σε μια μοναδική σχέση.',
    'invalid_action_multi' => 'Αυτή η ενέργεια δεν μπορεί να εκτελεστεί σε μια πολλαπλή σχέση.',
    'help' => 'Κάντε κλικ πάνω σε ένα αντικείμενο για να προσθέσετε',
    'add' => 'Προσθήκη',
    'link_selected' => 'Σύνδεση του επιλεγμένου',
    'cancel' => 'Άκυρο',
    'close' => 'Κλείσιμο',
    'create' => 'Δημιουργία',
    'update' => 'Ενημέρωση',
    'preview' => 'Προεπισκόπηση',
    'remove_name' => 'Αφαίρεση :name',
    'delete_name' => 'Διαγραφή :name',
    'link' => 'Σύνδεση',
    'unlink_name' => 'Αποσύνδεση :name',
  ],
  'reorder' => [
    'default_title' => 'Αναδιάταξη εγγραφών',
    'no_records' => 'Δεν υπάρχουν διαθέσιμες εγγραφές για ταξινόμηση.',
  ],
  'model' => [
    'name' => 'Μοντέλο',
    'not_found' => 'Η κλάση \':class\' του μοντέλου με ID :id δεν μπόρεσε να βρεθεί',
    'missing_id' => 'Δεν έχει οριστεί το ID για να αναζητηθεί η εγγραφή του μοντέλου.',
    'missing_relation' => 'Η κλάση \':class\' του μοντέλου δεν περιέχει ένα ορισμό για την \':relation\'.',
    'missing_method' => 'Η κλάση \':class\' του μοντέλου δεν περιέχει την μέθοδο \':method\'.',
    'invalid_class' => 'Το μοντέλο \':model\' που χρησιμοποιήθηκε στην :class δεν είναι έγκυρο, πρέπει να κληρονομεί την κλάση του \\Model.',
    'mass_assignment_failed' => 'Η μαζική εκχώρηση για την ιδιότητα \':attribute\' του μοντέλου απέτυχε.',
  ],
  'warnings' => [
    'tips' => 'Συμβουλές ρύθμισης του συστήματος',
    'tips_description' => 'Υπάρχουν ζητήματα για τα οποία πρέπει να δώσετε προσοχή με σκοπό να ρυθμιστεί το σύστημα ορθά.',
    'permissions' => 'Ο φάκελος :name ή οι υποφάκελοι του δεν έχουν δικαίωμα εγγραφής για την PHP. Παρακαλούμε ρυθμίστε τα κατάλληλα δικαιώματα στον webserver για αυτό τον καταλογο.',
    'extension' => 'Η επέκταση :name της PHP δεν έχει εγκατασταθεί. Παρακαλούμε εγκαταστήστε την βιβλιοθήκη και ενεργοποιήστε την επέκταση.',
  ],
  'editor' => [],
  'tooltips' => [],
  'mysettings' => [
    'menu_label' => 'Οι ρυθμίσεις μου',
    'menu_description' => 'Ρυθμίσεις σχετικές με τον λογαριασμό διαχειριστή σας',
  ],
  'myaccount' => [],
  'branding' => [
    'accent_color' => 'Τονισμένο χρώμα',
  ],
  'backend_preferences' => [],
  'access_log' => [],
  'filter' => [
    'all' => 'όλα',
    'options_method_not_exists' => 'Η κλάση του μοντέλου :model πρέπει να καθορίζει τις επιστρεφόμενες επιλογές της μεθόδου :method() για το φίλτρο \':filter\'.',
    'date_all' => 'όλη η περίοδος',
  ],
  'import_export' => [
    'upload_csv_file' => '1. Ανέβασμα ενός CSV αρχείου',
    'import_file' => 'Εισαγωγή αρχείου',
    'first_row_contains_titles' => 'Η πρώτη γραμμή περιέχει τους τίτλούς των στηλων',
    'first_row_contains_titles_desc' => 'Αφήστε το αυτό επιλεγμένο εάν η πρώτη γραμμή στο CSV χρησιμοποιείται για τον τίτλο των στηλών.',
    'match_columns' => '2. Αντιστοίχιση των στηλών του αρχείου με τα πεδία στην βάση δεδομένων',
    'file_columns' => 'Στήλες αρχείου',
    'database_fields' => 'Πεδία βάσης δεδομένων',
    'set_import_options' => '3. Ορισμός επίλογων εισαγωγής',
    'export_output_format' => '1. Μορφή τύπου εξόδου',
    'file_format' => 'Μορφή αρχείου',
    'standard_format' => 'Τυποποιημένη μορφή',
    'custom_format' => 'Προσαρμοσμένη μορφή',
    'delimiter_char' => 'Χαρακτήρας Διαχωριστικού',
    'enclosure_char' => 'Χαρακτήρας Enclosure',
    'escape_char' => 'Χαρακτήρας Escape',
    'select_columns' => '2. Επιλέξτε τις στήλες που θα εξαχθούν',
    'columns' => 'Στήλες',
    'set_export_options' => '3. Ορισμός επιλογών εξαγωγής',
    'import_progress' => 'Πρόοδός εισαγωγής',
    'processing' => 'Επεξεργασία',
    'import_error' => 'Λάθος εισαγωγής',
    'export_progress' => 'Πρόοδος εξαγωγής',
    'export_error' => 'Εξαγωγή λάθους',
    'encoding_format' => 'Κωδικοποίηση αρχείου',
    'encodings' => [
      'utf_8' => 'UTF-8',
      'us_ascii' => 'US-ASCII',
      'iso_8859_1' => 'ISO-8859-1 (Latin-1, Western European)',
      'iso_8859_2' => 'ISO-8859-2 (Latin-2, Central European)',
      'iso_8859_3' => 'ISO-8859-3 (Latin-3, South European)',
      'iso_8859_4' => 'ISO-8859-4 (Latin-4, North European)',
      'iso_8859_5' => 'ISO-8859-5 (Latin, Cyrillic)',
      'iso_8859_6' => 'ISO-8859-6 (Latin, Arabic)',
      'iso_8859_7' => 'ISO-8859-7 (Latin, Greek)',
      'iso_8859_8' => 'ISO-8859-8 (Latin, Hebrew)',
      'iso_8859_0' => 'ISO-8859-9 (Latin-5, Turkish)',
      'iso_8859_10' => 'ISO-8859-10 (Latin-6, Nordic)',
      'iso_8859_11' => 'ISO-8859-11 (Latin, Thai)',
      'iso_8859_13' => 'ISO-8859-13 (Latin-7, Baltic Rim)',
      'iso_8859_14' => 'ISO-8859-14 (Latin-8, Celtic)',
      'iso_8859_15' => 'ISO-8859-15 (Latin-9, Western European revision with euro sign)',
      'windows_1251' => 'Windows-1251 (CP1251)',
      'windows_1252' => 'Windows-1252 (CP1252)',
    ],
  ],
  'permissions' => [
    'manage_media' => 'Ανέβασμα και διαχείριση περιεχομένου μέσων - εικόνων, βίντεο, ήχων, εγγράφων,//Upload and manage media contents - images, videos, sounds, documents',
  ],
  'mediafinder' => [
    'label' => 'Media Finder',
    'default_prompt' => 'Click the %s button to find a media item',
  ],
  'media' => [
    'menu_label' => 'Μέσα',
    'upload' => 'Ανέβασμα',
    'move' => 'Μετακίνηση',
    'delete' => 'Διαγραφή',
    'add_folder' => 'Προσθήκη καταλόγου',
    'search' => 'Αναζήτηση',
    'display' => 'Εμφάνιση',
    'filter_everything' => 'Όλα',
    'filter_images' => 'Εικόνες',
    'filter_video' => 'Βίντεο',
    'filter_audio' => 'Ήχος',
    'filter_documents' => 'Έγγραφο',
    'library' => 'Βιβλιοθήκη',
    'size' => 'Μέγεθος',
    'title' => 'Τίτλος',
    'last_modified' => 'Τελευταία τροποποίηση',
    'public_url' => 'Δημόσιο URL',
    'click_here' => 'Κλικ εδώ',
    'thumbnail_error' => 'Σφάλμα κατά την δημιουργία μικρογραφίας.',
    'return_to_parent' => 'Επιστροφή στον γονικό κατάλογο',
    'return_to_parent_label' => 'Πήγαινε επάνω...',
    'nothing_selected' => 'Δεν επιλέχτηκε τίποτα.',
    'multiple_selected' => 'Επιλέχτηκαν πολλαπλά αντικείμενα.',
    'uploading_file_num' => 'Ανέβασμα :number αρχείων...',
    'uploading_complete' => 'Το ανέβασμα ολοκληρώθηκε',
    'uploading_error' => 'Το ανέβασμα απέτυχε',
    'type_blocked' => 'Ο τύπος του αρχείου που χρησιμοποιήθηκε μπλοκαρίστηκε για λόγους ασφαλείας.',
    'order_by' => 'Ταξινόμηση κατά',
    'folder' => 'Κατάλογος',
    'no_files_found' => 'Δεν βρέθηκαν αρχεία από το αίτημα σας.',
    'delete_empty' => 'παρακαλούμε επιλέξτε αντικείμενά για να τα σβήσετε.',
    'delete_confirm' => 'Διαγραφή των επιλεγμένων αντικείμενων;',
    'error_renaming_file' => 'Σφάλμα κατά την μετονομασία του αντικειμένου.',
    'new_folder_title' => 'Νέος κατάλογος',
    'folder_name' => 'Όνομα καταλόγου',
    'error_creating_folder' => 'Σφάλμα κατά την δημιουργία καταλόγου',
    'folder_or_file_exist' => 'Ένας κατάλογος ή αρχείο με το ίδιο όνομα υπάρχει ήδη.',
    'move_empty' => 'παρακαλούμε επιλέξτε αντικείμενα για να τα μετακινήσετε.',
    'move_popup_title' => 'Μετακίνηση αρχείων ή καταλογών.',
    'move_destination' => 'Κατάλογος προορισμού',
    'please_select_move_dest' => 'Παρακαλούμε επιλέξτε ένα κατάλογο προορισμού.',
    'move_dest_src_match' => 'Παρακαλούμε επιλέξτε έναν διαφορετικό κατάλογο προορισμού.',
    'empty_library' => 'Η βιβλιοθήκη Μέσων είναι άδεια. Ανεβάστε αρχεία ή δημιουργήστε καταλόγους για να ξεκινήσετε.',
    'insert' => 'Εισαγωγή',
    'crop_and_insert' => 'Περικοπή & Εισαγωγή',
    'select_single_image' => 'παρακαλούμε επιλέξτε μόνο μια εικόνα.',
    'selection_not_image' => 'Το επιλεγμένο αντικείμενο δεν είναι εικόνα.',
    'restore' => 'Αναίρεση όλων των αλλαγών',
    'resize' => 'Αλλαγή μεγέθους...',
    'selection_mode_normal' => 'Κανονικό',
    'selection_mode_fixed_ratio' => 'Κλειδωμένη αναλογία',
    'selection_mode_fixed_size' => 'Κλειδωμένο μέγεθος',
    'height' => 'Ύψος',
    'width' => 'Πλάτος',
    'selection_mode' => 'Λειτουργία επιλογής',
    'resize_image' => 'Αλλαγή μεγέθους εικόνας',
    'image_size' => 'Μέγεθος εικόνας:',
    'selected_size' => 'Επιλεγμένο:',
  ],
];
