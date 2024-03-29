<?php

return [

    'success' => [
        'added' => ':type προστέθηκε!',
        'updated' => ':type ενημερώθηκε!',
        'deleted' => ':type διεγράφη!',
        'duplicated' => ':type αντιγράφηκε!',
        'imported' => ':type εισήχθη!',
        'enabled' => ':type ενεργοποιήθηκε!',
        'disabled' => ':type απενεργοποιήθηκε!',
    ],

    'error' => [
        'over_payment' => 'Σφάλμα: Η πληρωμή δεν προστέθηκε! Το ποσό υπερβαίνει το σύνολο: :amount',
        'not_user_company' => 'Σφάλμα: Δεν επιτρέπεται να διαχειριστείτε αυτή την εταιρεία!',
        'customer' => 'Σφάλμα: Ο χρήστης δεν δημιουργήθηκε!  Ο/Η :name χρησιμοποιεί ήδη αυτό το email.',
        'no_file' => 'Σφάλμα: Δεν έχετε επιλέξει αρχείο!',
        'last_category' => 'Σφάλμα: Δεν μπορείτε να διαγράψετε την τελευταία κατηγορία :type!',
        'change_type' => 'Σφάλμα: Δεν μπορεί να αλλαχθεί ο τύπος διοτί υπάρχει συσχετιζόμενο :text!',
        'invalid_apikey' => 'Error: The API Key entered is invalid!',
        'import_column' => 'Σφάλμα: :message Φύλλο: :sheet. Γραμμή: :line.',
        'import_sheet' => 'Σφάλμα: Το όνομα του φύλλου δεν είναι έγκυρο. Παρακαλώ συμβουλευτείτε το διαθέσιμο παράδειγμα.',
    ],

    'warning' => [
        'deleted' => 'Προειδοποίηση: Δεν επιτρέπεται να διαγράψετε το <b>:name</b>, επειδή έχει :text που σχετίζονται.',
        'disabled' => 'Προειδοποίηση: Δεν επιτρέπεται να απενεργοποιήσετε το <b>:name</b>, επειδή έχει :text που σχετίζονται.',
        'disable_code' => 'Προειδοποίηση: Δεν επιτρέπεται να διαγράψετε το νόμισμα <b>:name</b>, επειδή έχει :text που σχετίζονται.',
        'payment_cancel' => 'Προσοχή: Εχετε ακυρώσει την τελευταία σας πληρωμή μέσω :method!',
    ],

];
